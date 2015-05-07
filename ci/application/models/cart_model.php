<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 *
 *
 */
class Cart_Model extends CI_Model
{
    private static $table = 'cart';

    public $custom_price;
    public $id_cart;
    public $id_shop_group;
    public $id_shop;
    /** @var integer Customer delivery address ID */
    public $id_address_delivery;
    /** @var integer Customer invoicing address ID */
    public $id_address_invoice;
    /** @var integer Customer currency ID */
    public $id_currency;
    /** @var integer Customer ID */
    public $id_customer;
    /** @var integer Guest ID */
    public $id_guest;
    /** @var integer Language ID */
    public $id_lang;
    /** @var boolean True if the customer wants a recycled package */
    public $recyclable = 0;
    /** @var boolean True if the customer wants a gift wrapping */
    public $gift = 0;
    /** @var string Gift message if specified */
    public $gift_message;
    /** @var boolean Mobile Theme */
    public $mobile_theme;
    /** @var string Object creation date */
    public $date_add;
    /** @var string secure_key */
    public $secure_key;
    /** @var integer Carrier ID */
    public $id_carrier = 0;
    /** @var string Object last modification date */
    public $date_upd;
    public $delivery_option;
    private $specific_price;
    private $with_tax_price;

    public function __construct()
    {
        parent::__construct();
    }

    public function getProductByCartId($id_cart)
    {

        return $this->db->select('
      pa.ecotax as pa_eco_tax,
      pa.price as pa_price,
      pa.price as pa_weight,
      cp.id_product_attribute, 
      cp.id_cart,
      cp.id_product,
      cp.quantity AS cart_quantity,
      cp.id_shop,
      cp.id_address_delivery,
      pl.name,
      p.*,
      pl.description_short,
      pl.available_now,
      pl.available_later,
      product_shop.id_category_default,
      product_shop.on_sale,
      product_shop.ecotax,
      product_shop.additional_shipping_cost,
      product_shop.available_for_order,
      product_shop.price,
      product_shop.active,
      product_shop.unity,
      product_shop.unit_price_ratio,
      stock.quantity quantity_available,
      stock.out_of_stock,    
      IFNULL(stock.quantity, 0) quantity,
      pl.link_rewrite,
      cl.link_rewrite AS category, CONCAT(LPAD(cp.id_product, 10, 0), LPAD(IFNULL(cp.id_product_attribute, 0), 10, 0), IFNULL(cp.id_address_delivery, 0)) AS unique_id,
      product_shop.wholesale_price,
      product_shop.advanced_stock_management,
      product_supplier_reference supplier_reference,
      NULL AS customization_quantity,
      NULL AS id_customization,
      product_attribute_shop.price AS price_attribute,
      product_attribute_shop.ecotax AS ecotax_attr,
      IF(IFNULL(pa.reference, "") = "", p.reference, pa.reference) AS reference,
      (p.weight + pa.weight) weight_attribute,
      IF(IFNULL(pa.ean13, "") = "", p.ean13, pa.ean13) AS ean13,
      IF(IFNULL(pa.upc, "") = "", p.upc, pa.upc) AS upc,
      pai.id_image AS pai_id_image,
      il.legend AS pai_legend,
      IFNULL(product_attribute_shop.minimal_quantity,
      product_shop.minimal_quantity) AS minimal_quantity', false)
            ->from('cart_product AS cp')
            ->join('product AS p', 'p.id_product = cp.id_product', 'left')
            ->join('product_shop product_shop', 'product_shop.id_shop = cp.id_shop AND product_shop.id_product = p.id_product', 'inner')
            ->join('product_lang pl', 'p.id_product = pl.id_product AND pl.id_lang = 1 AND pl.id_shop = cp.id_shop', 'left')
            ->join('category_lang cl', 'product_shop.id_category_default = cl.id_category AND cl.id_lang = 1 AND cl.id_shop = cp.id_shop', 'left')
            ->join('product_supplier ps', 'ps.id_product = cp.id_product AND ps.id_product_attribute = cp.id_product_attribute AND ps.id_supplier = p.id_supplier', 'left')
            ->join('stock_available stock', 'stock.id_product = cp.id_product AND stock.id_shop = 1', 'left')
            ->join('product_attribute pa', 'pa.id_product_attribute = cp.id_product_attribute', 'left')
            ->join('product_attribute_shop product_attribute_shop', 'product_attribute_shop.id_shop = cp.id_shop AND product_attribute_shop.id_product_attribute = pa.id_product_attribute', 'left')
            ->join('product_attribute_image pai', 'pai.id_product_attribute = pa.id_product_attribute', 'left')
            ->join('image_lang il', 'il.id_image = pai.id_image AND il.id_lang = 1', 'left')
            ->where('cp.id_cart', (int)$id_cart)
            ->where('stock.id_product_attribute', "IFNULL(cp.id_product_attribute, 0)")
            ->group_by('unique_id')
            ->order_by('p.id_product asc, cp.id_product_attribute asc, cp.date_add asc')
            ->get()
            ->result('Cart_Model');
    }

    public function mergeIdCartWithCustomer($customer, $id_cart){

        $this->db->where('id_cart', (int)$id_cart);
        $this->db->update('cart', array(
                'id_customer' =>(int)$customer->id_customer,
                'secure_key' =>$customer->secure_key,
                'date_upd' => date('Y-m-d H:i:s'),
            )
        );
        return $this->db->affected_rows();
    }

    public function addCart($cart_model)
    {
        $this->db->insert(self::$table, $cart_model);
        return $this->db->insert_id();
    }

    public function addProductToCart($product)
    {
        $this->db->insert("cart_product", $product);
        return $this->db->insert_id();
    }

    public function insertProductToCart($id_product, $id_product_attribute, $id_cart, $qty)
    {
        $product = array(
            'id_cart' => $id_cart,
            'id_product' => $id_product,
            'id_product_attribute' => $id_product_attribute,
            'quantity' => $qty,
            'date_add' => date('Y-m-d H:i:s')
        );

        return ($this->db->insert('cart_product', $product)) ? $this->updateDate($id_cart) : null;
    }

    private function updateDate($id_cart)
    {
        $this->db->where('id_cart', $id_cart);
        return $this->db->update('cart', array('date_upd' => date('Y-m-d H:i:s')));
    }

    public function deleteCartProduct($id_cart, $id_product, $id_product_attribute, $id_address_delivery)
    {
        $this->updateDate($id_cart);
        $this->db->delete('cart_product', array(
            'id_cart' => (int)$id_cart,
            'id_product' => (int)$id_product,
            'id_product_attribute' => (int)$id_product_attribute,
            'id_address_delivery' => (int)$id_address_delivery)
        );

        return $this->db->affected_rows();
    }

    public function containsProduct($id_product, $id_product_attribute, $id_cart)
    {
        $row = $this->db->select('IFNULL(cp.quantity, null) quantity', false)
            ->from('cart_product cp')
            ->where('cp.id_product', (int)$id_product)
            ->where('cp.id_product_attribute', (int)$id_product_attribute)
            ->where('cp.id_cart', (int)$id_cart)
            ->limit(1)
            ->get()
            ->first_row();
        if (empty($row))
            return 0;
        return (int)$row->quantity;
    }

    public function getNbProducts($id_cart)
    {
        $row = $this->db->select('SUM(cp.quantity) quantity', false)
            ->from('cart_product cp')
            ->where('cp.id_cart', (int)$id_cart)
            ->get()
            ->first_row('array');
        return ($row['quantity'] != null ? (int)$row['quantity'] : 0);
    }

    public function updateQty($id_cart, $id_product_attribute, $id_product, $qty)
    {
        $this->db->where('id_cart', $id_cart);
        $this->db->where('id_product', $id_product);
        $this->db->where('id_product_attribute', $id_product_attribute);
        $this->db->limit(1);
        $this->db->set('quantity', 'quantity' . $qty, false);
        $this->db->set('date_add', 'NOW()', false);
        $this->db->update('cart_product');
        if ($affected_rows = $this->db->affected_rows() > 0) {
            $this->updateDate($id_cart);
            return $affected_rows;
        }
    }


    public function getStockById($id_shop, $id_product_attribute, $id_product)
    {
        return $this->db->select('stock.out_of_stock, IFNULL(stock.quantity, 0) as quantity', false)->from('product p')->join('stock_available stock', 'stock.id_product = p.id_product', 'inner')->where('stock.id_product_attribute', (int)$id_product_attribute)->where('stock.id_shop', 1)->where('p.id_product', (int)$id_product)->get()->row();
    }

    public function editCartProduct($id_cart, $product)
    {
        $this->updateDate($id_cart);
        $this->db->where('id_cart', $id_cart);
        $this->db->where('id_product', $product['id_product']);
        $product = array_merge($product, array('date_add' => date('Y-m-d H:i:s')));
        $this->db->update('cart_product', $product);
        return $this->db->update('cart_product', $product);
    }

    /**
     * @param $id_customer
     * @return mixed
     */
    public function getLastNoneOrderedCart($id_customer)
    {
        $ids = array(0);
        $id_cart = $this->getIdCartFromOrders($id_customer);
        if ($this->is_array_empty($id_cart)) {
            foreach ($id_cart as $key => $row) {
                $ids[] = $row['id_cart'];
            }
        }
        return $this->db->select('c.id_cart')
            ->from('cart c')
            ->where_not_in('c.id_cart', (array)$ids)
            ->where_in('c.id_shop', 1)
            ->where('c.id_customer', (int)$id_customer)
            ->order_by('c.date_upd DESC')
            ->get()
            ->first_row('array');

    }

    private function getIdCartFromOrders($id_customer)
    {
        $query = $this->db->select('o.id_cart')
            ->from('orders o')
            ->where('o.id_customer', $id_customer)
            ->get();
        return $query->result_array();
    }

    public function is_array_empty($arr)
    {
        if (is_array($arr)) {
            foreach ($arr as $key => $value) {
                if (!empty($value) || $value != NULL || $value != "") {
                    return true;
                    break;
                }
            }
            return false;
        }
    }

    public function getCartById($id_cart)
    {
        return $this->db->get_where(self::$table, array('id_cart' => $id_cart))->result('Cart_Model');
    }

    public function getCheckout($id_cart)
    {
        return $this->db->get_where(self::$table, array('id_cart' => $id_cart))->result('Cart_Model');
    }

    public function setSpecificPrice($specific_price)
    {
        $this->specific_price = $specific_price;
    }

    public function setSPrice($price)
    {
        $this->with_tax_price = $price;
    }

    public function getAddressByIdCart($id_cart){
        return $this->db->get_where(self::$table, array('id_cart' => $id_cart))->first_row('Cart_Model');

    }


}
