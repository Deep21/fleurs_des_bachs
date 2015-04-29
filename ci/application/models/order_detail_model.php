<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Order_Detail_Model extends CI_Model
{

    private static $table = 'order_detail';
    /** @var integer */
    public $id_order_detail;
    /** @var integer */
    public $id_order;
    /** @var integer */
    public $id_order_invoice;
    /** @var integer */
    public $product_id;
    /** @var integer */
    public $id_shop;
    /** @var integer */
    public $product_attribute_id;
    /** @var string */
    public $product_name;
    /** @var integer */
    public $product_quantity;
    /** @var integer */
    public $product_quantity_in_stock;
    /** @var integer */
    public $product_quantity_return;
    /** @var integer */
    public $product_quantity_refunded;
    /** @var integer */
    public $product_quantity_reinjected;
    /** @var float */
    public $product_price;
    /** @var float */
    public $original_product_price;
    /** @var float */
    public $unit_price_tax_incl;
    /** @var float */
    public $unit_price_tax_excl;
    /** @var float */
    public $total_price_tax_incl;
    /** @var float */
    public $total_price_tax_excl;
    /** @var float */
    public $reduction_percent;
    /** @var float */
    public $reduction_amount;
    /** @var float */
    public $reduction_amount_tax_excl;
    /** @var float */
    public $reduction_amount_tax_incl;
    /** @var float */
    public $group_reduction;
    /** @var float */
    public $product_quantity_discount;
    /** @var string */
    public $product_ean13;
    /** @var string */
    public $product_upc;
    /** @var string */
    public $product_reference;
    /** @var string */
    public $product_supplier_reference;
    /** @var float */
    public $product_weight;
    /** @var float */
    public $ecotax;
    /** @var float */
    public $ecotax_tax_rate;
    /** @var integer */
    public $discount_quantity_applied;
    /** @var string */
    public $download_hash;
    /** @var integer */
    public $download_nb;
    /** @var date */
    public $download_deadline;
    /** @var string $tax_name * */
    public $tax_name;
    /** @var float $tax_rate * */
    public $tax_rate;
    /** @var float $tax_computation_method * */
    public $tax_computation_method;
    /** @var int Id warehouse */
    public $id_warehouse;
    /** @var float additional shipping price tax excl */
    public $total_shipping_price_tax_excl;
    /** @var float additional shipping price tax incl */
    public $total_shipping_price_tax_incl;
    /** @var float */
    public $purchase_supplier_price;

    public function __construct()
    {
        parent::__construct();
    }

    public function setOrderDetail()
    {
        $this->db->insert(self::$table, $this);
        return $this->db->insert_id();
    }
}

?>