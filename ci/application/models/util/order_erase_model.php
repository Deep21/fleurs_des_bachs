<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Order_Erase_Model extends CI_Model
{

    private static $tables = array('orders', 'order_invoice', 'order_invoice_payment', 'order_payment', 'order_history', 'order_detail', 'order_carrier',);

    public function delete_all_linked_orders()
    {
        foreach (self::$tables as $key => $value) {
            $this->db->truncate($value);
        }

        print_r("ALL TABLES ARE DELETED");
    }
}

?>