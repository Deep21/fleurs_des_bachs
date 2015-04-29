<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Order_Invoice_Payment_Model extends CI_Model
{

    private static $table = 'order_invoice_payment';
    public $id_order_invoice;
    public $id_order_payment;
    public $id_order;

    public function __construct()
    {
        parent::__construct();
    }

    public function setOrderPaymentInvoice($orderPaymentInvoice)
    {
        $this->db->insert(self::$table, $orderPaymentInvoice);
        return $this->db->insert_id();
    }
}

?>