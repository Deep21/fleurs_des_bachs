<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Cart_Erase_Model extends CI_Model
{

    private static $tables = array(
        'cart',
        'cart_product',
    );

    public function delete_all_linked_cart()
    {
        foreach (self::$tables as $key => $value) {
            $this->db->truncate($value);
        }

        print_r("ALL TABLES ARE DELETED");

    }
}

?>