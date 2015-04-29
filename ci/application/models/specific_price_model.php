<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Specific_Price_Model extends CI_Model
{

    private static $table = "specific_price";
    public $id_product;
    public $id_specific_price_rule = 0;
    public $id_cart = 0;
    public $id_product_attribute;
    public $id_shop;
    public $id_shop_group;
    public $id_currency;
    public $id_country;
    public $id_group;
    public $id_customer;
    public $price;
    public $from_quantity;
    public $reduction;
    public $reduction_type;
    public $from;
    public $to;

    public function __construct()
    {
        parent::__construct();
    }

    public function getAllSpecificPriceByProductId($ids_product)
    {
        $d = array();
        $sps = $this->db->select('sp.*')
            ->from('specific_price sp')
            ->where_in('sp.id_product', (!empty($ids_product)) ? (array)$ids_product : array(0))
            ->get()
            ->result('Specific_Price_Model');
        foreach ($sps as $sp) {
            $d[$sp->id_product_attribute][$sp->id_product] = $sp;
        }
        return $d;
    }

    public function getById($id)
    {

    }

}
