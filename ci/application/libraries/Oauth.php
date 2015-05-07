<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
require_once('OAuth2/Autoloader.php');
require_once(dirname(__FILE__) . '/../../../config/settings.inc.php');

OAuth2\Autoloader::register();


class Oauth
{
    private $server;
    private $ci_instance;
    private $storage;
    private $cookie;

    public function __construct()
    {
        
        $this->ci_instance = &get_instance();
        $this->ci_instance->load->model('Cart_Model');
        $this->ci_instance->load->library('encrypt');
        $this->ci_instance->encrypt->set_cipher(MCRYPT_BLOWFISH);
        $this->ci_instance->load->helper('cookie');
        $this->cookie = json_decode($this->ci_instance->encrypt->decode(get_cookie('my_prestashop_ci')));

        $session_expiration = $this->ci_instance->config->item('sess_expiration');

        //Custom PDO Class
        //Created to add custom table prefix
        $this->storage = new OAuth2\Storage\MyPdo(array('dsn' => 'mysql:dbname=' . $this->ci_instance->db->database . ';host=' . $this->ci_instance->db->hostname, 'username' => $this->ci_instance->db->username, 'password' => $this->ci_instance->db->password), array(), _DB_PREFIX_);

        // Prestashop DB contants

        $this->server = new OAuth2\Server($this->storage);

        $this->server->setConfig('access_lifetime', $session_expiration);
        $this->server->addGrantType(new OAuth2\GrantType\UserCredentials($this->storage));
        $this->server->addGrantType(new OAuth2\GrantType\RefreshToken($this->storage));
    }

    /**
     * @return \OAuth2\Server
     */
    public function getServer()
    {
        return $this->server;
    }

    public function verifyResourceRequest()
    {
        if (!$this->server->verifyResourceRequest(OAuth2\Request::createFromGlobals())) {
            $this->server->getResponse()->send();
            die;
        }
    }

    public function mergeIdCartWithCustomer($customer, $id_cart)
    {
        $this->ci_instance->load->model('Cart_Model');
        $this->ci_instance->Cart_Model->mergeIdCartWithCustomer($customer, $id_cart);
    }

    public function getAccessToken()
    {
        $this->ci_instance->load->model('Token_model');
        $tokenModel   = $this->ci_instance->Token_model;
        $response     = $this->server->handleTokenRequest(OAuth2\Request::createFromGlobals());
        $access_token = $response->getParameter('access_token');
        $customer     = $tokenModel->getUserIdByToken($access_token);
        try{
            $this->_setCookie($customer);
            $response->send();
        }catch(Exception $e){
           print_r ($e->getMessage());
           exit;
        }
    }

    private function _setCookie($customer)
    {
        $id_cart = null;
        $this->ci_instance->load->model('Cart_Model');
        $cart = $this->ci_instance->Cart_Model;
        $this->ci_instance->load->library('encrypt');
        $this->ci_instance->load->helper('cookie');
        $this->ci_instance->encrypt->set_cipher(MCRYPT_BLOWFISH);
      
            //si un client existe on rentre dans la condition
            if (!empty($customer)) {
                //on vérifie si le client possède un id_cart
                //getLastNoneOrderedCart retourne un tableau contenant les informations du panier
                $cart = $cart->getLastNoneOrderedCart((int)$customer->id_customer);

                if (empty($cart) && !empty($this->cookie->customer->id_cart)) {
                    $id_cart = (int)$this->cookie->customer->id_cart;
                    $affected_row = $this->ci_instance->Cart_Model->mergeIdCartWithCustomer($customer, $id_cart);

                }

                //Si panier et cookie id_cart existe pour ce client on lui créer un id_cart vide
                if (empty($cart) && empty($this->cookie->customer->id_cart)) {
                    $cart = array(
                        'id_cart' => null,
                        'id_shop_group' => 1,
                        'id_shop' => 1,
                        'id_address_delivery' => 0,
                        'id_address_invoice' => 0,
                        'id_currency' => 1,
                        'id_customer' => (int)$customer->id_customer,
                        'id_guest' => 0,
                        'id_lang' => 2,
                        'gift_message' => '',
                        'mobile_theme' => 0,
                        'secure_key' => $customer->secure_key,
                        'delivery_option' => '',
                        'date_add' => date('Y-m-d H:i:s'),
                        'date_upd' => date('Y-m-d H:i:s'),
                    );

                    //on créer un id_cart et on insere dans la base de donnée
                    $id_cart = $this->ci_instance->Cart_Model->addCart($cart);

                } elseif (!empty($cart))
                    $id_cart = (int)$cart['id_cart'];

                //si un id_cart est enregistré dans un cookie
                if ($this->cookie != null && !empty($this->cookie->customer->id_cart) && !empty($this->cookie->customer->id_cart) && !empty($id_cart)) {
                    $this->ci_instance->load->model('Cart_Model');
                    $this->ci_instance->load->model('Cart_Product_Model');
                    $cart_product = $this->ci_instance->Cart_Product_Model->getCartProductById($this->cookie->customer->id_cart);

                    foreach ($cart_product as $cp) {
                        if (!empty($cart_product)) {
                            //Permet de récupérer la quantité du produit enregistré dans le panier
                            $qtyProduct = $this->ci_instance->Cart_Model->containsProduct($cp->id_product, $cp->id_product_attribute, $id_cart);

                            if ($qtyProduct > 0) {
                                $clientQtyUp = '+ ' . (int)$cart_product[0]->quantity;
                               // $this->ci_instance->Cart_Model->updateQty($id_cart, $cp->id_product_attribute, $cp->id_product, $clientQtyUp);

                            }
                        }

                    }

                }

                $cookie_data = array(
                    "prestashop_config" => array(
                        'id_lang' => 2,
                        'id_currency' => 1,
                        'id_shop' => 1,
                    ),

                    "customer" => array(
                        'nom' => (string)$customer->firstname,
                        'prenom' => (string)$customer->lastname,
                        'id_customer' => (int)$customer->id_customer,
                        'secure_key' => (string)$customer->secure_key,
                        'id_cart' => (int)$id_cart,
                        'id_guest' => 0,
                        'is_logged' => true,
                    )
                );
                $cookie_encoded = json_encode($cookie_data);
                $encrypted_cookie = $this->ci_instance->encrypt->encode($cookie_encoded);
                $cookie = array(
                    'name' => 'prestashop_ci', 
                    'value' => $encrypted_cookie, 
                    'path' => '/prestashop_test/', 
                    'expire' => $this->ci_instance->config->item('sess_expiration'), '', true);
              
                set_cookie($cookie);

            } else {
                throw new Exception('Identification échoué / Client non trouvé');
            }
        
    }
}

