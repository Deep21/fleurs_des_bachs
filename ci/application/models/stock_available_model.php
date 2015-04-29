<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Stock_Available_Model extends CI_Model
{

    private static $table = "stock_available";
    /** @var int identifier of the current product */
    public $id_product;
    /** @var int identifier of product attribute if necessary */
    public $id_product_attribute;
    /** @var int the shop associated to the current product and corresponding quantity */
    public $id_shop;
    /** @var int the group shop associated to the current product and corresponding quantity */
    public $id_shop_group;
    /** @var int the quantity available for sale */
    public $quantity = 0;
    /** @var bool determine if the available stock value depends on physical stock */
    public $depends_on_stock = false;
    /** @var bool determine if a product is out of stock - it was previously in Product class */
    public $out_of_stock = false;

    public function __construct()
    {
        parent::__construct();
    }

    public function getStockAvaible($id_product_attribute)
    {
        return $this->db->select('IF(sa.quantity>IFNULL(null, 0), sa.quantity, 0) stock', false)->from(self::$table . ' as sa')->where('sa.id_product_attribute', $id_product_attribute)->get()->row();
    }

    public function getStockAvaibleDetails($id_stock_available)
    {
        return $this->db->select('sa.*')->from(self::$table . ' as sa')->where('sa.id_stock_available', $id_stock_available)->get()->row();
    }

    public function getById($id)
    {
    }

    public function getStockAvailableIdByProductIds($id_product, $id_product_attribute = null, $id_shop = null)
    {
        $this->db->select('sa.id_stock_available')->from(self::$table . ' as sa')->where('sa.id_product', (int)$id_product);
        if ($id_product_attribute !== null) $this->db->where('sa.id_product_attribute', (int)$id_product_attribute);
        return $this->db->where('sa.id_shop', (int)$id_shop)->get()->first_row('Stock_Available_Model');
    }

    /**
     * For a given id_product and id_product_attribute updates the quantity available
     *
     * @param int $id_product
     * @param int $id_product_attribute Optional
     * @param int $delta_quantity The delta quantity to update
     * @param int $id_shop Optional
     */
    public function updateStockQty($model)
    {
        $this->db->update(self::$table, $model, array('id_stock_available' => $model->id_stock_available));
        return $this->db->affected_rows();
    }
}

?>