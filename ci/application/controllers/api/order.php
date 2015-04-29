<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

/**
 * Order
 * Definition de la classe Order
 *
 * @package    CodeIgniter
 * @subpackage REST_Controller
 * @category   Order
 * @author     Deeptha WICKREMA
 * @version    1.2
 */
class Order extends REST_Controller
{
    const SDK_NAME = 'PayPal-PHP-SDK';
    const PAIEMENT_ACCEPTE = 2;
    private $cookie;
    
    public function __construct() {
        parent::__construct();
        
        //$this->oauth->verifyResourceRequest();
        $this->load->library('encrypt');
        $this->encrypt->set_cipher(MCRYPT_BLOWFISH);
        $this->load->helper('cookie');
        $this->cookie = $this->encrypt->decode(get_cookie('my_prestashop_ci'));
        $this->load->library('paypal');
        $this->load->helper(array('prestashop_helper', 'url'));
        $this->load->model('Product_Model');
    }
    
    /**
     * Retrieve Order by order id
     * @param $id_order the id of order
     * @return
     */
    public function getOrderById_get($id_order = null) {
        
        $params = array();
        $params['limit'] = (is_numeric($this->input->get('limit'))) ? $this->input->get('limit') : null;
        $params['from'] = $this->input->get('from');
        $params['to'] = $this->input->get('to');
        $this->load->model('Order_model');
        $this->load->model('Order_State_Model');
        $this->load->model('Address_model');
        $orders = array();
        $order = $this->Order_model->getLongOrderByOrderId($id_order, $params);
        if (!empty($order)) {
            $order_state = $this->Order_State_Model->getOrderStateByIdOrder($id_order);
            
            foreach ($order as $key => $value) {
                $orders['reference'] = $value->reference;
                $orders['total_paid'] = (double)$value->total_paid;
                $orders['total_paid_tax_excl'] = (double)$value->total_paid_tax_excl;
                $orders['tva'] = (float)$value->total_paid - $value->total_paid_tax_excl;
                $orders['total_shipping'] = (float)$value->total_shipping;
                $orders['order_date'] = $value->date_add;
                $orders['order_state'] = $order_state;
                $orders['adress'] = array('address_delivery' => $this->Address_model->getAddressById($value->id_address_delivery), 'address_invoice' => $this->Address_model->getAddressById($value->id_address_invoice));
                if (!isset($orders[$value->id_order])) {
                    $orders['commande'][] = array('product_name' => $value->product_name, 'product_quantity' => (int)$value->product_quantity, 'total_price_tax_incl' => $value->total_price_tax_incl, 'total_price_tax_incl' => $value->total_price_tax_incl, 'id_image' => (int)$value->id_image, 'img_link' => base_url() . 'index.php/api/image/id/' . $value->id_image);
                }
            }
                return $this->response($orders, 200);
        }
              return $this->response(array(null), 200);
  
    }
    
    /**
     * Retrieve the order by customer id
     * @param $id customer
     * @return
     */
    public function getOrderByCustomerId_get($id = null) {
        $this->load->model('Order_model');
        $this->load->model('Address_model');
        $params = array();
        $params['limit'] = (is_numeric($this->input->get('limit'))) ? $this->input->get('limit') : null;
        $in_array = array("date_add");
        $params['filter'] = (in_array($this->input->get('filter'), $in_array)) ? $this->input->get('filter') : null;
        switch ($this->input->get('detail')) {
            case 'long':
                $order = $this->Order_model->getLongOrderByCustomerId($id, $params);
                foreach ($order as $key => $value) {
                    $value->img_link = base_url() . 'index.php/api/image/id/' . $value->id_image;
                }
                return $this->response(array($this->router->class => $order), 200);
                break;

            default:
                $data = $this->Order_model->getShortOrderByCustomerId($id, $params);
                foreach ($data as $key => $value) {
                    $value->order_url = base_url() . "index.php/api/order/id/$value->id_order/get";
                }
                $b = array();
                $c = array();
                break;
        }
        
        return $this->response($data, 200);
    }
    
    /**
     * Retrieve all orders
     * @param $id_manufacturer the id of manufacturer
     * @return
     */
    public function getAllOrders_get() {
    }
    
    public function getPaypal_get($id_payment) {
        $prices = $this->Product_Model->getProductHTPrice(1, null, true);
        
        //$prices = ps_round($prices, 2);
        var_dump($prices);
        exit;
        $cookie = json_decode($this->cookie);
        if ($cookie != null) {
            $payment = $this->paypal->getPayment($id_payment);
            if ($this->_isOrderExist($payment, $cookie->customer->id_cart)) {
                $state = $payment->getState();
                
                switch ($state) {
                    case 'approved':
                        
                        $this->_validateOrder($payment, $cookie->customer->id_customer, $id_payment, $cookie, 2);
                        
                        //$this->_validateOrder($payment, 2, $id_payment, $this->decoded_data, $state);
                        
                        
                }
            }
        } 
        else {
            die("empty cookie");
        }
        
        /*     Kint::dump( $payment->getTransactions() [0]->getRelatedResources()[0]->getSale()->getCreateTime() );
         Kint::dump( $payment);*/
    }
    
    private function _isOrderExist($payment, $id_cart) {
        $this->load->model('Order_model');
        $this->load->model('Order_Payment_Model');
        $id_paypal_transaction = $this->paypal->getTransactionId($payment);
        $paypal_trasaction = $this->Order_Payment_Model->isPaymentExist($id_paypal_transaction);
        $order = $this->Order_model->isOrderExist((int)$id_cart);
        if (empty($order) && empty($paypal_trasaction)) return true;
    }
    
    private function getProductPriceByIds($id_product, $id_product_attribute = null, $tax) {
        $this->load->model('Product_Model');
    }
    
    private function _validateOrder(PayPal\Api\Payment $payment = null, $id_customer, $id_payment, $cookie, $state) {
        $this->load->model('Cart_Model');
        $this->load->model('Order_model');
        $this->load->model('Shop_Model');
        
        $id_shop = $cookie->prestashop_config->id_shop;
        $id_currency = $cookie->prestashop_config->id_currency;
        $id_lang = $cookie->prestashop_config->id_lang;
        $order = $this->Order_model;
        $shop = $this->Shop_Model;
        $shopObject = $shop->getShop($id_shop);
        $id_shop_group = (int)$shopObject[0]->id_shop_group;
        
        $cartProductList = $this->_getCartProductList($cookie->customer->id_cart);
        
        //is_array_empty() is loaded from prestashop_helper
        //return false if the array is empty and true if it's not
        if (!empty($cookie->customer->id_cart) && $cartProductList != null) {
            
            // $cart = $this->Cart_Model->getCartById($cookie->customer->id_cart);
            
            //generate a new order name
            $reference = passwdGen(9, 'NO_NUMERIC');
            
            $payment_name = ucfirst($payment->getPayer()->getPaymentMethod()) . ' ' . 'mobile';
            $order->id_cart = $cookie->customer->id_cart;
            $order->id_address_delivery = 1;
            $order->id_address_invoice = 1;
            $order->id_shop_group = $id_shop_group;
            $order->id_shop = $id_shop;
            $order->id_currency = $id_currency;
            $order->id_lang = $id_lang;
            $order->id_customer = $cookie->customer->id_customer;
            $order->id_carrier = 2;
            $order->current_state = $state;
            $order->reference = $reference;
            $order->payment = $payment_name;
            $order->module = "paypal";
            $order->conversion_rate = 1;
            $order->secure_key = $cookie->customer->secure_key;
            $order->gift_message = "";
            $order->mobile_theme = "";
            $order->shipping_number;
            $order->total_discounts = "";
            
            /*
                    $order->total_products = (float)$this->context->cart->getOrderTotal(false, Cart::ONLY_PRODUCTS, $order->product_list, $id_carrier);
                    $order->total_products_wt = (float)$this->context->cart->getOrderTotal(true, Cart::ONLY_PRODUCTS, $order->product_list, $id_carrier);
                    $order->total_discounts_tax_excl = (float)abs($this->context->cart->getOrderTotal(false, Cart::ONLY_DISCOUNTS, $order->product_list, $id_carrier));
                    $order->total_discounts_tax_incl = (float)abs($this->context->cart->getOrderTotal(true, Cart::ONLY_DISCOUNTS, $order->product_list, $id_carrier));
                    $order->total_discounts = $order->total_discounts_tax_incl;
                    $order->total_shipping_tax_excl = (float)$this->context->cart->getPackageShippingCost((int)$id_carrier, false, null, $order->product_list);
                    $order->total_shipping_tax_incl = (float)$this->context->cart->getPackageShippingCost((int)$id_carrier, true, null, $order->product_list);
                    $order->total_shipping = $order->total_shipping_tax_incl;*/
            $order->total_paid = $this->paypal->getAmountP($payment)->getTotal();
            $order->total_paid_tax_incl = $this->paypal->getAmountP($payment)->getTotal();
            $order->total_paid_tax_excl = "";
            $order->total_paid_real = 0;
            $order->total_discounts_tax_incl = "";
            $order->total_discounts_tax_excl = "";
            $order->total_products = "";
            $order->total_products_wt = "";
            $order->total_shipping = "";
            $order->total_shipping_tax_incl = "";
            $order->total_shipping_tax_excl = "";
            $order->carrier_tax_rate = "";
            $order->total_wrapping = "";
            $order->total_wrapping_tax_incl = "";
            $order->total_wrapping_tax_excl = "";
            $order->invoice_number = "";
            $order->delivery_number = "";
            $order->invoice_date = "";
            $order->delivery_date = "";
            $order->valid = 1;
            $order->invoice_date = '0000-00-00 00:00:00';
            $order->delivery_date = '0000-00-00 00:00:00';
            $order->date_add = $payment->getCreateTime();
            $order->date_upd = $payment->getUpdateTime();
            
            $this->_updateStockQty($cookie->customer->id_cart);
            
            $id_order = $this->Order_model->saveOrder($order);
            
            $id_order_invoice = $this->_setOrderInvoice($id_order, $order);
            
            $this->_setOrderDetail($order, $cartProductList, $id_order_invoice, $id_order);
            
            $this->_addInvoiceNumberToOrder($order, $id_order_invoice, $id_order);
            
            $id_order_payment = $this->_addOrderPayment($order, $payment, $id_payment, $cookie);
            
            $this->_setOrderHistoryState($id_order, PAIEMENT_ACCEPTE);
            
            $this->_setOrderPaymentInvoice($id_order_invoice, $id_order_payment, $id_order);
            
            //TODO send an email
            
            
        }
    }

    /**
     * @param int $id_cart
     * @return null
     */
    private function _getCartProductList(int $id_cart) {
        $this->load->model('Cart_Product_Model');

        if (!empty($id_cart))
            if ($p = $this->Cart_Product_Model->getCartProductById($id_cart))
                return $p;

        return null;
    }
    
    private function _updateStockQty($id_cart) {
        $cartProductList = $this->_getCartProductList($id_cart);
        if ($cartProductList != null) {
            foreach ($cartProductList as $key => $cartProduct) {
                if (!$this->_updateStockQuantity((int)$cartProduct->id_product, (int)$cartProduct->id_product_attribute, (int)$cartProduct->id_shop, -(int)$cartProduct->quantity) > 0) {
                    die("error");
                }
            }
        } 
        else {
            die("Can't update the stock, no product added in the cart");
        }
    }
    
    private function _updateStockQuantity($id_product, $id_product_attribute, $id_shop, $qty) {
        $this->load->model('Stock_Available_Model');
        $id_stock_availableModel = $this->Stock_Available_Model->getStockAvailableIdByProductIds($id_product, $id_product_attribute, $id_shop);
        $id_stock_available = (int)$id_stock_availableModel->id_stock_available;
        $stock_aviableModel = $this->Stock_Available_Model->getStockAvaibleDetails($id_stock_available);
        $stock_aviableModel->quantity = $stock_aviableModel->quantity + $qty;
        return $this->Stock_Available_Model->updateStockQty($stock_aviableModel);
    }
    
    //$amount_paid, $payment_method = null, $payment_transaction_id = null, $currency = null, $date = null, $order_invoice = null
    
    private function _setOrderInvoice($id_order, $order) {
        $this->load->model('Order_Invoice_Model');
        $order_invoice = $this->Order_Invoice_Model;
        $order_invoice->id_order = $id_order;
        $order_invoice->number = 0;
        $order_invoice->delivery_number = 0;
        $order_invoice->total_discount_tax_excl = 0;
        $order_invoice->total_discount_tax_incl = 0;
        $order_invoice->total_paid_tax_excl = 0;
        $order_invoice->total_paid_tax_incl = 0;
        $order_invoice->total_products = 0;
        $order_invoice->total_products_wt = 0;
        $order_invoice->total_shipping_tax_excl = 0;
        $order_invoice->total_shipping_tax_incl = 0;
        $order_invoice->shipping_tax_computation_method = 0;
        $order_invoice->total_wrapping_tax_excl = 0;
        $order_invoice->total_wrapping_tax_incl = 0;
        $order_invoice->date_add = date('Y-m-d H:i:s');
        return $order_invoice->setOrderInvoice($order_invoice);
    }
    
    private function _setOrderDetail($order, array $cartProductList, $id_order_invoice, $id_order) {
        $this->load->model('Order_Detail_Model');
        $this->load->model('Product_Model');
        $order_detail = $this->Order_Detail_Model;
        $product_model = $this->Product_Model;
        $ids_product = array();
        foreach ($cartProductList as $key => $cartProduct) {
            $ids_product[] = (int)$cartProduct->id_product;
        }
        $productList = $product_model->getProductByIds($ids_product);
        
        foreach ($productList as $key => $product) {
            $order_detail->id_order = $id_order;
            $order_detail->product_id = (int)$product->id_product;
            $order_detail->id_order_invoice = $id_order_invoice;
            
            $order_detail->product_name = $product->name;
            $order_detail->id_warehouse = 0;
            $order_detail->id_shop = $cartProductList[$key]->id_shop;
            $order_detail->product_attribute_id = $cartProductList[$key]->id_product_attribute;
            $order_detail->product_quantity = $cartProductList[$key]->quantity;
            $order_detail->product_quantity_in_stock = 0;
            $order_detail->product_quantity_refunded = 0;
            $order_detail->product_quantity_refunded = 0;
            $order_detail->product_quantity_return = 0;
            $order_detail->product_quantity_reinjected = 0;
            
            $order_detail->product_price = 0;
            $order_detail->reduction_percent = 0;
            $order_detail->reduction_amount = 0;
            $order_detail->reduction_amount_tax_incl = 0;
            $order_detail->reduction_amount_tax_excl = 0;
            $order_detail->group_reduction = 0;
            $order_detail->product_quantity_discount = 0;
            $order_detail->product_ean13 = $product->ean13;
            $order_detail->product_upc = $product->upc;
            $order_detail->product_reference = $product->reference;
            $order_detail->product_supplier_reference = 0;
            
            $order_detail->product_supplier_reference = 0;
            $order_detail->product_weight = 0;
            $order_detail->tax_computation_method = 0;
            $order_detail->tax_rate = 0;
            $order_detail->tax_name = 0;
            $order_detail->ecotax = 0;
            $order_detail->ecotax_tax_rate = 0;
            $order_detail->discount_quantity_applied = 0;
            
            $order_detail->download_hash = 0;
            $order_detail->download_nb = 0;
            $order_detail->download_deadline = "";
            $order_detail->total_price_tax_incl = 0;
            $order_detail->total_price_tax_excl = 0;
            $order_detail->unit_price_tax_incl = 0;
            $order_detail->unit_price_tax_excl = 0;
            $order_detail->total_shipping_price_tax_incl = 0;
            $order_detail->total_shipping_price_tax_excl = 0;
            $order_detail->purchase_supplier_price = 0;
            $order_detail->original_product_price = 0;
            
            $order_detail->setOrderDetail();
        }
    }
    
    private function _addInvoiceNumberToOrder($order, $id_order_invoice, $id_order) {
        $order->invoice_number = $id_order_invoice;
        $order->id_order = $id_order;
        $order->addInvoiceNumberToOrder();
    }
    
    private function _addOrderPayment($order, PayPal\Api\Payment $payment, $id_payment, $cookie) {
        $this->load->model('Order_Payment_Model');
        $id_currency = $cookie->prestashop_config->id_currency;
        $order_payment = $this->Order_Payment_Model;
        $order_payment->order_reference = $order->reference;
        $order_payment->id_currency = $id_currency;
        $order_payment->conversion_rate = 1;
        $order_payment->payment_method = ucfirst($payment->getPayer()->getPaymentMethod()) . ' ' . 'mobile';
        $order_payment->transaction_id = $this->paypal->getTransaction_Id($id_payment);
        $order_payment->amount = $this->paypal->getAmountP($payment)->getTotal();
        $order_payment->date_add = $this->paypal->getTransaction_date($payment);
        return $order_payment->addOrderPayment($order_payment);
    }
    
    private function _setOrderHistoryState($id_order, $order_state) {
        $this->load->model('Order_History_Model');
        $now = date('Y-m-d H:i:s');
        $order_history = $this->Order_History_Model;
        $order_history->id_order = $id_order;
        $order_history->id_order_state = $order_state;
        $order_history->id_employee = 0;
        $order_history->date_add = $now;
        $order_history->setOrderHistoryState($order_history);
    }
    
    private function _setOrderPaymentInvoice($id_order_invoice, $id_order_payment, $id_order) {
        $this->load->model('Order_Invoice_Payment_Model');
        $Order_Invoice_Payment_Model = $this->Order_Invoice_Payment_Model;
        $Order_Invoice_Payment_Model->id_order_invoice = $id_order_invoice;
        $Order_Invoice_Payment_Model->id_order_payment = $id_order_payment;
        $Order_Invoice_Payment_Model->id_order = $id_order;
        $Order_Invoice_Payment_Model->setOrderPaymentInvoice($Order_Invoice_Payment_Model);
    }
}
