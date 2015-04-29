<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Shop_Model extends CI_Model
{

    private $table = 'shop';

    public function __construct()
    {
        parent::__construct();
    }

    public function getAll()
    {
    }

    public function getShop($id_shop)
    {
        $this->db->select('s.id_shop_group')->from('shop s')->where('s.id_shop  ', (int)$id_shop);
        return $this->db->get()->result('Shop_Model');
    }
}

?>