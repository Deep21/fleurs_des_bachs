<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
require 'configurationlistner.php';


class Checkout extends REST_Controller implements ConfigurationListner
{

    const PS_SHIPPING_HANDLING = 0;

    public $shipping_constants = array(
        'ps_shipping_free_price',
        'ps_shipping_free_weight',
        'ps_carrier_default',
        'ps_shipping_handling',
        'ps_tax_display',
        'ps_tax',
        );

    private $cookie;

    /**
     *Construct
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('prestashop_helper', 'url', 'cookie'));
        $this->load->library('encrypt');
        $this->encrypt->set_cipher(MCRYPT_BLOWFISH);
        $cookie = $this->encrypt->decode(get_cookie('my_prestashop_ci'));
        if (!empty($cookie)) {
            $this->cookie = json_decode($cookie);
        } else die("error cookie");
    }

    /* $tax_rate = $this->Tax_Model->_getTaxRate($product->id_tax_rules_group);
      $tax = (float)$tax_rate['rate'] * 0.01;
      var_dump($tax); */

    public function getCheckout_get()
    {
        /*Chargement des model */
        $this->load->model('Carrier_Model');
        $this->load->model('Product_Model');
        $this->load->model('Tax_Model');
        $this->load->model('Cart_Model');
        $this->load->model('Specific_Price_Model');
        $this->load->model('Address_Model');
        /*Chargement des model */

        $id_cart = $this->cookie->customer->id_cart;
        $id_customer = $this->cookie->customer->id_customer;
        $id_carriers = array();
        $product_with_reduction = array();
        $cart_products = $this->Cart_Model->getProductByCartId($this->cookie->customer->id_cart);
        $price = $this->Product_Model->getProductPriceBis($cart_products, true, $this);
        $cart = $this->Cart_Model->getAddressByIdCart($id_cart);
        $cart->id_address_delivery;
        $cart->id_address_invoice;

        $delivery_address = $this->Address_Model->getAddressById($cart->id_address_delivery);
        $invoice_address = $this->Address_Model->getAddressById($cart->id_address_invoice);

        dump($price);
        exit;
        $nbProduct = $this->Cart_Model->getNbProducts($id_cart);
        $shipping_cost = $this->_getShippingConfig();
        $carriers = $this->Carrier_Model->getCarriers();

        foreach ($carriers as $carrier)
            $id_carriers[] = $carrier->id_carrier;

        $tax_group = $this->Carrier_Model->getCarrierTaxGroup($id_carriers);
        $taxs = array();
        $result = array();
        foreach ($tax_group as $tax) {
            $taxs[] = $this->Carrier_Model->getCarrierTax($tax->id_tax_rules_group);
        }

        foreach ($carriers as $key => $carrier) {
            $rate = (float)$taxs[$key]->rate;
            $carrier_price = $carrier->price + ($carrier->price * $rate * 0.01);

            if (!empty($carrier->shipping_handling)) {

                if (!empty($shipping_cost['ps_shipping_free_price'])) {
                    echo "";
                }

                if ($shipping_cost['ps_shipping_handling'] > 0) {
                    $shipping_handling = $shipping_cost["ps_shipping_handling"] + ($shipping_cost["ps_shipping_handling"] * $rate * 0.01);
                    $d = $shipping_handling + $carrier_price;
                }

                if (!empty($shipping_cost["ps_shipping_free_weight"])) {
                    echo "";
                }
            }
        }

        //var_dump($carriers);


    }

    /**
     * Fonction qui retourne la configuration de prestashop
     * @param $name
     * @return int|null
     */
    public function getConfigurationValue($name)
    {
        $this->load->model('Configuration_Model');
        return $shipping_details = (!empty($this->Configuration_Model->getValue($name)[0])) ? $this->Configuration_Model->getValue($name) : null;
    }


    public function getTaxRate($id_tax_rules_group)
    {
        $this->load->model('Tax_Model');
        return $tax_rate = $this->Tax_Model->_getTaxRate($id_tax_rules_group);
    }

    private function _getShippingHandling($shipping_handling, $id_carrier)
    {
        $this->load->model('Carrier_Model');
        if ($shipping_handling > 0) {
            $taxs = array();
            $tax_group = $this->Carrier_Model->getCarrierTaxGroup($id_carrier);
            foreach ($tax_group as $tax) {
                $taxs[] = $this->Carrier_Model->getCarrierTax($tax->id_tax_rules_group);
            }
            $rate = (float)$taxs[0]->rate;

            //return $shipping_handling + ($shipping_handling * $rate * 0.01);


        }
    }

    private function _getDefaultDelivery($carriers, $id_carrier_default, $use_tax = false)
    {
        $default_delivery = array();
        foreach ($carriers as $delivers)
            $default_delivery[$delivers->id_carrier] = $delivers;
        if (array_key_exists($id_carrier_default, $default_delivery))
            return $default_delivery[$id_carrier_default];
    }

    private function _getProductDetails($id_cart)
    {
        if ($id_cart == null)
            return;
        $this->load->model('Cart_Model');
        return $this->Cart_Model->getProductByCartId($id_cart);
    }

    private function _getShippingConfig()
    {
        $this->load->model('Configuration_Model');
        $shipping = array();
        $shipping_details = $this->Configuration_Model->getValue($this->shipping_constants);
        $shipping["ps_carrier_default"] = (int)$shipping_details[0]->value;
        $shipping["ps_shipping_free_price"] = (float)$shipping_details[1]->value;
        $shipping["ps_shipping_free_weight"] = (float)$shipping_details[2]->value;
        $shipping["ps_shipping_handling"] = (float)$shipping_details[3]->value;
        $shipping["ps_tax_display"] = (boolean)$shipping_details[4]->value;
        $shipping["ps_tax"] = (boolean)$shipping_details[5]->value;
        return $shipping;
    }
}
