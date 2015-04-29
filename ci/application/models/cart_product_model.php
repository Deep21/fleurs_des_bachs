<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 *
 *
 */
class Cart_Product_Model extends CI_Model
{
    private static $table = 'cart_product';
    public $id_cart;
    public $id_product;
    public $id_address_delivery;
    public $id_shop;
    public $id_product_attribute;
    public $quantity;
    public $date_add;

    public function __construct()
    {
        parent::__construct();
    }

    public function getCartProductById($id_cart)
    {
        return $this->db->select('cp.*')
            ->from('cart_product cp')
            ->where('cp.id_cart', $id_cart)
            ->get()
            ->result('Cart_Product_Model');

    }


    public function getCartProductByIdAndId_Attribute($id_cart, $id_carts)
    {
        return $this->db->select('cp.*')
            ->from('cart_product cp')
            ->where('cp.id_cart', $id_cart)
            ->get()
            ->result('Cart_Product_Model');

    }

    public function updateCartProduct($cart_product)
    {
        $this->db->insert(self::$table, $cart_product[0]);
        $this->db->where('id_cart', $cart_product['$id_cart']);
        $this->db->update(self::$table, array(
                'id_product' => $cart_product['id_product'],
                'id_address_delivery' => $cart_product['id_address_delivery'],
                'id_shop' => $cart_product['id_shop'],
                'id_product_attribute' => $cart_product['id_product_attribute'], 'quantity' => $cart_product['quantity'],
                'date_add' => $cart_product['date_add'],
            )
        );
    }

    public function insertCartProduct($cart_product)
    {
        return $this->db->insert(self::$table, array(
            'id_cart', $cart_product['$id_cart'],
            'id_product' => $cart_product['id_product'],
            'id_address_delivery' => $cart_product['id_address_delivery'],
            'id_shop' => $cart_product['id_shop'],
            'id_product_attribute' => $cart_product['id_product_attribute'], 'quantity' => $cart_product['quantity'],
            'date_add' => $cart_product['date_add'],
        ));
    }
}
