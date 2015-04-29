<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 *
 *
 */
class Order_model extends CI_Model
{
    const active = 1;
    const idlang = 1;
    const cover = 1;
    const order_by = 'DESC';

    private static $table = 'orders';
    /** @var integer Order id */
    public $id_order;
    /** @var integer Delivery address id */
    public $id_address_delivery;
    /** @var integer Invoice address id */
    public $id_address_invoice;

    public $id_shop_group;

    public $id_shop;
    /** @var integer Cart id */
    public $id_cart;
    /** @var integer Currency id */
    public $id_currency;
    /** @var integer Language id */
    public $id_lang;
    /** @var integer Customer id */
    public $id_customer;
    /** @var integer Carrier id */
    public $id_carrier;
    /** @var integer Order State id */
    public $current_state;
    /** @var string Secure key */
    public $secure_key;
    /** @var string Payment method */
    public $payment;
    /** @var string Payment module */
    public $module;
    /** @var float Currency exchange rate */
    public $conversion_rate;
    /** @var boolean Customer is ok for a recyclable package */
    public $recyclable = 1;
    /** @var boolean True if the customer wants a gift wrapping */
    public $gift = 0;
    /** @var string Gift message if specified */
    public $gift_message;
    /** @var boolean Mobile Theme */
    public $mobile_theme;
    /**
     * @var string Shipping number
     * @deprecated 1.5.0.4
     * @see OrderCarrier->tracking_number
     */
    public $shipping_number;
    /** @var float Discounts total */
    public $total_discounts;
    public $total_discounts_tax_incl;
    public $total_discounts_tax_excl;
    /** @var float Total to pay */
    public $total_paid;
    /** @var float Total to pay tax included */
    public $total_paid_tax_incl;
    /** @var float Total to pay tax excluded */
    public $total_paid_tax_excl;
    /** @var float Total really paid @deprecated 1.5.0.1 */
    public $total_paid_real;
    /** @var float Products total */
    public $total_products;
    /** @var float Products total tax included */
    public $total_products_wt;
    /** @var float Shipping total */
    public $total_shipping;
    /** @var float Shipping total tax included */
    public $total_shipping_tax_incl;
    /** @var float Shipping total tax excluded */
    public $total_shipping_tax_excl;
    /** @var float Shipping tax rate */
    public $carrier_tax_rate;
    /** @var float Wrapping total */
    public $total_wrapping;
    /** @var float Wrapping total tax included */
    public $total_wrapping_tax_incl;
    /** @var float Wrapping total tax excluded */
    public $total_wrapping_tax_excl;
    /** @var integer Invoice number */
    public $invoice_number;
    /** @var integer Delivery number */
    public $delivery_number;
    /** @var string Invoice creation date */
    public $invoice_date;
    /** @var string Delivery creation date */
    public $delivery_date;
    /** @var boolean Order validity (paid and not canceled) */
    public $valid;
    /**
     * @var string Order reference, this reference is not unique, but unique for a payment
     */
    public $reference;
    /** @var string Object creation date */
    public $date_add;
    /** @var string Object last modification date */
    public $date_upd;

    public function __construct()
    {
        parent::__construct();
    }

    public function getAll()
    {
    }

    public function getLongOrderByOrderId($id_order, $params)
    {

        $this->db->select('*')->from('orders o')->join('order_detail od', 'od.id_order = o.id_order', 'inner')->join('image i', 'i.id_product = od.product_id', 'inner');
        $this->db->where('o.id_order', $id_order);
        $this->db->where('i.cover', (int)self::cover);
        $this->db->where('o.id_lang  ', (int)self::idlang);
        $this->db->order_by('o.date_add', 'DESC');
        ($params['from']) ? $this->db->where('o.date_add >= ', $params['from']) : null;
        ($params['to']) ? $this->db->where('o.date_add <= ', $params['to']) : null;
        ($params['limit']) ? $this->db->limit($params['limit']) : null;
        return $this->db->get()->result('Order_model');
    }

    public function getShortOrderByCustomerId($id, $params)
    {
        $this->db->select('o.reference,o.total_paid, o.payment,od.id_order,o.date_add,osl.name', false)->from('orders o')->join('order_detail od', 'od.id_order = o.id_order', 'left')->join('ps_order_state_lang osl', 'osl.id_order_state = o.current_state', 'left')->where('o.id_customer', (int)$id)->group_by('o.reference');
        switch ($params['filter']) {
            case 'date_add':
                $in_array = array("month", 'week', 'day', 'year');
                $value = $this->input->get('value');
                $date = $this->input->get('date');
                $sort = $this->input->get('sort');
                (is_numeric($value) && in_array(strtolower($date), $in_array)) ? $this->db->where("o.date_add > DATE_SUB( NOW(), INTERVAL $value $date)") : null;
                $this->db->order_by('o.date_add', 'ASC');

                break;
        }

        //($params['filter']) ? $this->db->where('o.date_add > DATE_SUB( NOW(), INTERVAL  .$params["filter"]) year' ) : null;
        ($params['limit']) ? $this->db->limit($params['limit']) : null;
        return $this->db->get()->result('Order_model');

        /*      $this->db->select('od.id_order_detail,o.id_order, CONCAT(c.firstname," ", c.lastname) customer, o.id_customer, o.date_add, od.product_name' , false)
        ->from('orders o')
        ->join('order_detail od','od.id_order = o.id_order','inner')
        ->join('customer c','c.id_customer = o.id_customer','inner')
        ->where('o.id_customer',(int) $id)
        ->where('o.id_lang  ', (int) self::idlang)
        ->order_by('o.date_add', 'DESC');
        ($params['from']) ? $this->db->where('o.date_add >= ', $params['from']) : null;
        ($params['to']) ? $this->db->where('o.date_add <= ',  $params['to']) : null;
        ($params['limit']) ? $this->db->limit($params['limit']) : null;
        return  $this->db->get()->result_array();*/
    }

    public function saveOrder($order)
    {
        $this->db->insert(self::$table, $order);
        return $this->db->insert_id();
    }

    public function isOrderExist($id_cart)
    {
        return $this->db->get_where(self::$table, array('id_cart' => $id_cart))->result('Order_model');
    }

    public function addInvoiceNumberToOrder()
    {
        $this->db->where('id_order', $this->id_order);
        $this->db->update(self::$table, $this);
        return $this->db->affected_rows();
    }
}

?>