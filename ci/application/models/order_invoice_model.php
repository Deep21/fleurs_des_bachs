<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Order_Invoice_Model extends CI_Model
{

    private static $table = 'order_invoice';
    /** @var integer */
    public $id_order;
    /** @var integer */
    public $number;
    /** @var integer */
    public $delivery_number;
    /** @var integer */
    public $delivery_date = '0000-00-00 00:00:00';
    /** @var float */
    public $total_discount_tax_excl;
    /** @var float */
    public $total_discount_tax_incl;
    /** @var float */
    public $total_paid_tax_excl;
    /** @var float */
    public $total_paid_tax_incl;
    /** @var float */
    public $total_products;
    /** @var float */
    public $total_products_wt;
    /** @var float */
    public $total_shipping_tax_excl;
    /** @var float */
    public $total_shipping_tax_incl;
    /** @var int */
    public $shipping_tax_computation_method;
    /** @var float */
    public $total_wrapping_tax_excl;
    /** @var float */
    public $total_wrapping_tax_incl;
    /** @var string note */
    public $note;
    /** @var intger */
    public $date_add;

    public function __construct()
    {
        parent::__construct();
    }

    public function setOrderInvoice($order_invoice_Model)
    {
        $this->db->insert(self::$table, $order_invoice_Model);
        return $this->db->insert_id();
    }
}

?>