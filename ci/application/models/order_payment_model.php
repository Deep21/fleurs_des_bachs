<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Order_Payment_Model extends CI_Model
{

    private static $table = 'order_payment';
    public $order_reference;
    public $id_currency;
    public $amount;
    public $payment_method;
    public $conversion_rate;
    public $transaction_id;
    public $card_number;
    public $card_brand;
    public $card_expiration;
    public $card_holder;
    public $date_add;

    public function __construct()
    {
        parent::__construct();
    }

    public function addOrderPayment($order_payment)
    {
        $this->db->insert(self::$table, $order_payment);
        return $this->db->insert_id();
    }

    public function isPaymentExist($id_transaction)
    {
        return $this->db->get_where(self::$table, array('transaction_id' => $id_transaction))->result('Order_Payment_Model');

    }
}

?>