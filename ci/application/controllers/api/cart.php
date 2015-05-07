<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Starlight
 * Date: 28/03/2015
 * Time: 23:12
 */

require_once 'cart_base.php';
require 'configurationlistner.php';

class Cart extends CartBase implements ConfigurationListner
{

    /**
     *
     */
    public function __construct()
    {
        parent::__construct();
    }


    /**
     * @param $id_cart
     * @param $id_customer
     */
    public function mergeIdCartWithCustomer_get($id_cart, $id_customer)
    {
        $this->oauth->verifyResourceRequest();
        $this->load->model('Cart_Model');
        $cart_model = $this->Cart_Model;
        $cart_model->id_customer = $this->cookie->customer->id_customer;
        $cart_model->secure_key = $this->cookie->customer->secure_key;
        $affectd_rows = $this->Cart_Model->mergeIdCartWithCustomer($cart_model, $id_cart);
        $this->response(array(
            'affectd_rows' => $affectd_rows), 200);
    }

    /**
     * @param null $id_customer
     */
    public function getLastNoneOrderedCart_get($id_customer = null)
    {
        $this->oauth->verifyResourceRequest();
        $cart = $this->_getLastNoneOrderedCart($id_customer);
        if ($cart == null)
            $this->response(array(
                'id_cart' => null), 200);

        $this->response(array(
            'id_cart' => (int)$cart['id_cart']), 200);
    }

    /**
     * @param $id_customer
     * @return mixed
     */
    private function _getLastNoneOrderedCart($id_customer)
    {
        $this->load->model('Cart_Model');
        if ($this->Cart_Model->getLastNoneOrderedCart($id_customer) != null)
            return $this->Cart_Model->getLastNoneOrderedCart($id_customer);
    }

    /**
     *
     */
    public function addCartFirstTime_post()
    {
        if ($cart = $this->post("cart")) {
            $this->load->model('Cart_Model');
            $cart['date_add'] = date('Y-m-d H:i:s');
            $cart['date_upd'] = date('Y-m-d H:i:s');

            $cart_model = array(
                'id_cart' => $cart['id_cart'],
                'id_shop_group' => $cart['id_shop_group'],
                'id_shop' => $cart['id_shop'],
                'id_carrier' => $cart['id_carrier'],
                'delivery_option' => $cart['delivery_option'],
                'id_lang' => $cart['id_lang'],
                'id_address_delivery' => $cart['id_address_delivery'],
                'id_address_invoice' => $cart['id_address_invoice'],
                'id_currency' => $cart['id_currency'],
                'id_customer' => $cart['id_customer'],
                'id_guest' => $cart['id_guest'],
                'secure_key' => $cart['secure_key'],
                'gift' => $cart['gift'],
                'gift_message' => $cart['gift_message'],
                'mobile_theme' => $cart['mobile_theme'],
                'allow_seperated_package' => $cart['allow_seperated_package'],
                'date_add' => $cart['date_add'],
                'date_upd' => $cart['date_upd']
            );

            if ($id_cart = $this->Cart_Model->addCart($cart_model)) {
                $product = array_merge(array('id_cart' => $id_cart), $cart['product']);
                $id = $this->Cart_Model->addProductToCart($product);
                $this->response(array('cart' => $id_cart), 202);
            }
        } else {
            die('nardine');
        }
    }

    /**
     *Permet de créer un nouveau panier
     */
    public function createCart_post()
    {
            $this->load->model('Cart_Model');
            $cart['date_add'] = date('Y-m-d H:i:s');
            $cart['date_upd'] = $cart['date_add'];
            $cart_model = array(
                'id_lang' => 2,
                'date_add' => (string)$cart['date_add'],
                'date_upd' => (string)$cart['date_upd']);

        if ($id_cart = $this->Cart_Model->addCart($cart_model)) {
            $this->response(array(
                'id_cart' => (int)$id_cart,
                'date_add'=> (string)$cart['date_add'],
                'date_upd'=> (string)$cart['date_upd'],
            ), 202);
        }
    }

    /**
     * @param bool $auto_add
     * @return int
     */
    /*@override*/
    protected function addCart($auto_add = true)
    {
        return (int)parent::addCart($auto_add);
    }

    /**
     *Fonction qui permet d'ajouter des produit dans le panier
     *Récupère le BODY POST et traite les données
     */
    public function insertProductToCartById_post()
    {
        $id_cart = $this->addCart(true);

        if ($id_cart == 0)
            // on récupère l'id cart du customer qui s'est authentifié
            $id_cart = $this->cookie->customer->id_cart;

        // Récupère le json en POST
        $cart = $this->post();

        if (!empty($cart)) {
            $this->load->model('Cart_Model');
            $id_product = (int)$cart['id_product'];
            $id_product_attribute = (int)$cart['id_product_attribute'];
            $clientQty = (int)$cart['quantity'];

            //Permet de récupérer la quantité du produit enregistré dans le panier
            $cartProductQty = $this->Cart_Model->containsProduct($id_product, $id_product_attribute, $id_cart);

            //Charge les produits qui sont disponible dans le stock
            $stock = $this->Cart_Model->getStockById(1, $id_product_attribute, $id_product);

            if ($cartProductQty == 0 && $this->input->get('cart') === 'up' && !empty($stock)) {

                if ($clientQty > (int)$stock->quantity)

                    $this->response(
                        array('http_code' => 404,
                            'error' => true,
                            'create' => false,
                            'updated' => false,
                            'deleted' => false,
                            'out_of_stock' => true), 404);

                elseif ($response = $this->Cart_Model->insertProductToCart($id_product, $id_product_attribute, $id_cart, $clientQty))
                    $this->response(
                        array('http_code' => 202,
                            'error' => false,
                            'create' => true,
                            'updated' => false,
                            'deleted' => false,
                            'message' => 'Product added to the cart'), 202);


            } elseif ($cartProductQty > 0 && ((int)$stock->quantity) >= ($cartProductQty + $clientQty) && $this->input->get('cart') === 'up') {
                $clientQtyUp = '+ ' . (int)$clientQty;
                $this->Cart_Model->updateQty($id_cart, $id_product_attribute, $id_product, $clientQtyUp);
                $this->response(
                    array('http_code' => 202,
                        'error' => false,
                        'create' => false,
                        'updated' => true,
                        'deleted' => false,
                        'message' => 'Quantity updated'), 202);

            }

            if (($cartProductQty + $clientQty) > (int)$stock->quantity)
                $this->response(
                    array('http_code' => 404,
                        'error' => true,
                        'create' => false,
                        'updated' => false,
                        'deleted' => false,
                        'out_of_stock' => true), 404);

        } else
            $this->response(
                array('http_code' => 404,
                    'error' => true,
                    'create' => false,
                    'updated' => false,
                    'deleted' => false,
                    'message' => 'Empty'), 404);


    }

    public function getCartProduct_get()
    {
        if ($this->cookie != null) {
            $this->load->model('Cart_Model');
            $id_cart = $this->cookie->customer->id_cart;
            $cart_product = $this->Cart_Model->getProductByCartId($id_cart);
            foreach($cart_product as $cp){

            }
            $this->response(array($cart_product));
        }
    }

    /*Without Cookie*/
    public function addProductToCart_post($id_cart = null)
    {
        $cart = $this->post();
        if (!empty($cart)) {
            $this->load->model('Cart_Model');
            $id_product = (int)$cart['id_product'];
            $id_product_attribute = (int)$cart['id_product_attribute'];
            $clientQty = (int)$cart['quantity'];

            //Permet de récupérer la quantité du produit enregistré dans le panier
            $cartProductQty = $this->Cart_Model->containsProduct($id_product, $id_product_attribute, $id_cart);

            //Charge les produits disponiblent dans le stock
            $stock = $this->Cart_Model->getStockById(1, $id_product_attribute, $id_product);

            if ($cartProductQty == 0 && $this->input->get('cart') === 'up' && !empty($stock)) {

                if ($clientQty > (int)$stock->quantity) {
                    $this->response(array('http_code' => 404, 'error' => true, 'create' => false, 'updated' => false, 'deleted' => false, 'out_of_stock' => true), 404);

                } elseif ($response = $this->Cart_Model->insertProductToCart($id_product, $id_product_attribute, $id_cart, $clientQty)) {
                    $this->response(array('http_code' => 202, 'error' => false, 'create' => true, 'updated' => false, 'deleted' => false, 'message' => 'Product added to the cart'), 202);
                }

            } elseif ($cartProductQty > 0 && ((int)$stock->quantity) >= ($cartProductQty + $clientQty) && $this->input->get('cart') === 'up') {
                $clientQtyUp = '+ ' . (int)$clientQty;
                $this->Cart_Model->updateQty($id_cart, $id_product_attribute, $id_product, $clientQtyUp);
                $this->response(array('http_code' => 202, 'error' => false, 'create' => false, 'updated' => true, 'deleted' => false, 'message' => 'Quantity updated'), 202);
            }

            if (($cartProductQty + $clientQty) > (int)$stock->quantity) {
                $this->response(array('http_code' => 404, 'error' => true, 'create' => false, 'updated' => false, 'deleted' => false, 'out_of_stock' => true), 404);
            }
        } else {
            $this->response(array('http_code' => 404, 'error' => true, 'create' => false, 'updated' => false, 'deleted' => false, 'message' => 'Empty'), 404);

        }
    }

    /**
     * @param int $id_cart
     */
    public function editCartQty_put($id_cart)
    {
        $this->load->model('Cart_Model');
        // On récupère le body en PUT
        $cart = $this->put();
        $id_product = (int)$cart['id_product'];
        $id_product_attribute = (int)$cart['id_product_attribute'];
        $clientQty = (int)$cart['quantity'];

        //Permet de récupérer la quantité du produit enregistré dans le panier
        $cartProductQty = $this->Cart_Model->containsProduct($id_product, $id_product_attribute, $id_cart);

        $cart = (string)$this->input->get('cart');

        if ($clientQty <= $cartProductQty && $cart === 'down') {

            if (((int)$cartProductQty) - (int)$clientQty == 0) {
                $this->Cart_Model->deleteCartProduct($id_cart, $id_product, $id_product_attribute, 0);
                $this->response(array('http_code' => 202, 'error' => false, 'create' => false, 'updated' => false, 'deleted' => true, 'message' => 'Product deleted'), 200);
            } else {
                $clientQtyDown = '- ' . (int)$clientQty;
                $this->Cart_Model->updateQty($id_cart, $id_product_attribute, $id_product, $clientQtyDown);
                $this->response(array('http_code' => 202, 'error' => false, 'create' => false, 'updated' => true, 'deleted' => false, 'message' => 'Qantity updated'), 200);
            }
        } elseif ($clientQty > $cartProductQty && $this->input->get('cart') === 'down') {
            $this->response(array('http_code' => 404, 'error' => true), 404);

        }

    }

    /**
     * @param $id_cart
     */
    public function deleteCartProduct_delete($id_cart, $id_product, $id_product_attribute, $id_address_delivery)
    {
        $this->load->model('Cart_Model');
        $row_affected = $this->Cart_Model->deleteCartProduct($id_cart, $id_product, $id_product_attribute, $id_address_delivery);
        $this->response(array('deleted' => ($row_affected) ? true : false), 200);

    }

    /**
     * @param $id_cart
     * @param $id_product
     * @param $id_product_attribute
     */
    public function updateProductCartclientQty_post($id_cart, $id_product, $id_product_attribute)
    {

        /*if($cart = $this->put('cart')){
        $this->load->model('Cart_Model');
        $this->Cart_Model->updateclientQty($id_cart, $cart['product']);
        $this->response(array('cart'=>$id_cart), 202);
        }*/
        $this->load->model('Cart_Model');
        if ($cartProductQty = $this->Cart_Model->containsProduct($id_product, $id_product_attribute, $id_cart) > 0) {
            $stock = $this->Cart_Model->getStockById(1, $id_product_attribute, $id_product);
            $affectedRow = $this->Cart_Model->updateQty($id_cart, $id_product_attribute, $id_product);
            $this->response(array('cart' => $affectedRow), 202);
        } else {
            $this->response(array('cart' => 0), 202);
        }
    }

    /**
     * @param null $id_customer
     */
    public function getLastCartProductByCustomer_get($id_customer = null)
    {
        $cart = $this->_getLastNoneOrderedCar($id_customer);
        $this->getProductByCartId_get(current($cart)->id_cart);
    }


    /**
     * Permet de récupérer les produits contenu dans le panier
     * @param int $id_cart l'id du cart
     */
    public function getProductByCartId_get($id_cart = null)
    {
        $this->load->model('Product_Model');
        $this->load->model('Cart_Model');
        $product_list = $this->Product_Model->getProductByCartId($id_cart);
        $product_array = array();
        //$this->Product_Model->getProductPriceBis($product_list, true, $this);

        foreach ($product_list as $key => $product) {
            $product_array[] = array(
                'id_product' => (int)$product->id_product,
                'id_product_attribute' => (int)$product->id_product_attribute,
                'id_cart' => (int)$product->id_cart,
                'id_image' => (int)$product->id_image,
                'url_image' => 'http://142.4.211.181/dwickrema/prestashop.v1/ci/index.php/api/image/' . (int)$product->id_image . '/get',
                'id_address_delivery' => (int)$product->id_address_delivery,
                'quantity' => (int)$product->cart_quantity,
                'id_shop' => (int)$product->id_shop,
                'libelle_produit' => $product->name,
                'id_product' => (int)$product->id_product,
                'width' => (double)$product->width,
                'height' => (double)$product->height,
                'depth' => (double)$product->depth,
                'id_supplier' => (int)$product->id_supplier,
                'id_manufacturer' =>(int)$product->id_manufacturer,
                'is_virtual' => (int)$product->is_virtual,
                'description_short' => $product->description_short,
                'available_now' => $product->available_now,
                'available_later' => $product->available_later,
                // 'order_price'=>$product->getProductPriceBis($product, true, $this),
            );
        }
        if ($product_list != null)
            $this->response(array('cart_product_list' => $product_array, 'nb_product' => (int)$this->Cart_Model->getNbProducts($id_cart)), 200);

    }

    public function getConfigurationValue($name)
    {
        $this->load->model('Configuration_Model');
        return $shipping_details = (!empty($this->Configuration_Model->getValue($name)[0])) ? $this->Configuration_Model->getValue($name) : null;
    }
}