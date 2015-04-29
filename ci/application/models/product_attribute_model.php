<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Product_Attribute_Model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function getProductPriceByAttributeIds($id_product, $id_product_attribute)
    {
        return $this->db->select('sp.*')
            ->from('specific_price sp')
            ->where('sp.id_product_attribute', (int)$id_product_attribute)
            ->where('sp.id_product', (int)$id_product)
            ->get()
            ->result('Specific_Price_Model');
    }

    public function getById($id)
    {
    }
}

?>