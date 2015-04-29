<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Order_History_Model extends CI_Model
{

    private static $table = 'order_history';
    /** @var integer Order id */
    public $id_order;
    /** @var integer Order state id */
    public $id_order_state;
    /** @var integer Employee id for this history entry */
    public $id_employee;
    /** @var string Object creation date */
    public $date_add;

    public function __construct()
    {
        parent::__construct();
    }

    public function setOrderHistoryState($order_history)
    {
        $this->db->insert(self::$table, $order_history);
        return $this->db->insert_id();
    }
}

?>