<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

/*http://192.168.0.16/p1.5.6.1/ci/index.php/api/category/id/2/products/get/?orderby=price&orderway=desc*/

class Product_Model extends CI_Model
{
    public $custom_price = array();

    public $custom_prices = array();

    public $nardinne;

    public $specific_price;

    /** @var double rate */
    public $rate;

    /** @var int product_attribute_minimal_quantity */
    public $product_attribute_minimal_quantity;

    /** @var string reduction_type */
    public $reduction_type;

    /** @var double reduction */
    public $reduction;

    /** @var int id_tax_rules_group */
    public $id_tax_rules_group;

    /** @var double orderprice */
    public $orderprice;

    /** @var int id_product_attribute */
    public $id_product_attribute;

    /** @var int out_of_stock */
    public $out_of_stock;

    /** @var string category_default */
    public $category_default;

    /** @var boolean nouveau */
    public $nouveau;

    /** @var string Tax name */
    public $tax_name;

    /** @var string Tax rate */
    public $tax_rate;

    /** @var int Product id_product */
    public $id_product;

    /** @var int Image id_image */
    public $id_image;

    /** @var integer Manufacturer id */
    public $id_manufacturer;

    /** @var integer Supplier id */
    public $id_supplier;

    /** @var integer default Category id */
    public $id_category_default;

    /** @var integer default Shop id */
    public $id_shop_default;

    /** @var string Manufacturer name */
    public $manufacturer_name;

    /** @var string Supplier name */
    public $supplier_name;

    /** @var string Name */
    public $name;

    /** @var string Long description */
    public $description;

    /** @var string Short description */
    public $description_short;

    /** @var integer Quantity available */
    public $quantity = 0;

    /** @var integer Minimal quantity for add to cart */
    public $minimal_quantity = 1;

    /** @var string available_now */
    public $available_now;

    /** @var string available_later */
    public $available_later;

    /** @var float Price in euros */
    public $price = 0;

    /** @var float Additional shipping cost */
    public $additional_shipping_cost = 0;

    /** @var float Wholesale Price in euros */
    public $wholesale_price = 0;

    /** @var boolean on_sale */
    public $on_sale = false;

    /** @var boolean online_only */
    public $online_only = false;

    /** @var string unity */
    public $unity = null;

    /** @var float price for product's unity */
    public $unit_price;

    /** @var float price for product's unity ratio */
    public $unit_price_ratio = 0;

    /** @var float Ecotax */
    public $ecotax = 0;

    /** @var string Reference */
    public $reference;

    /** @var string Supplier Reference */
    public $supplier_reference;

    /** @var string Location */
    public $location;

    /** @var string Width in default width unit */
    public $width = 0;

    /** @var string Height in default height unit */
    public $height = 0;

    /** @var string Depth in default depth unit */
    public $depth = 0;

    /** @var string Weight in default weight unit */
    public $weight = 0;

    /** @var string Ean-13 barcode */
    public $ean13;

    /** @var string Upc barcode */
    public $upc;

    /** @var string Friendly URL */
    public $link_rewrite;

    /** @var string Meta tag description */
    public $meta_description;

    /** @var string Meta tag keywords */
    public $meta_keywords;

    /** @var string Meta tag title */
    public $meta_title;

    /** @var boolean Product statuts */
    public $quantity_discount = 0;

    /** @var boolean Product customization */
    public $customizable;

    /** @var boolean Product is new */
    public $new = null;

    /** @var integer Number of uploadable files (concerning customizable products) */
    public $uploadable_files;

    /** @var int Number of text fields */
    public $text_fields;

    /** @var boolean Product statuts */
    public $active = true;

    /** @var boolean Product statuts */
    public $redirect_type = '';

    /** @var boolean Product statuts */
    public $id_product_redirected = 0;

    /** @var boolean Product available for order */
    public $available_for_order = true;

    /** @var string Object available order date */
    public $available_date = '0000-00-00';

    /** @var enum Product condition (new, used, refurbished) */
    public $condition;

    /** @var boolean Show price of Product */
    public $show_price = true;

    /** @var boolean is the product indexed in the search index? */
    public $indexed = 0;

    /** @var string ENUM('both', 'catalog', 'search', 'none') front office visibility */
    public $visibility;

    /** @var string Object creation date */
    public $date_add;

    /** @var string Object last modification date */
    public $date_upd;

    public $images;

    /**
     *
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('prestashop_helper');
    }

    /**
     * @param $id_category
     * @param null $orderby
     * @param null $orderway
     * @return mixed
     */
    public function getProductsByCategoryId($id_category, $orderby = null, $orderway = null)
    {

        $this->db->select('IFNULL(sp.reduction, 0) reduction,sp.reduction_type,c.id_category,c.id_parent,p.id_product,l.name categorie, pl.name as libelle_produit,pl.description_short,p.condition,p.online_only,p.on_sale,p.price prix_ht,t.rate/100 tax,(t.rate/100*p.price) + p.price prix_ttc', false)->from('category c')->join('category_lang l', 'l.id_category = c.id_category', 'left')->join('category_product cp', 'cp.id_category = c.id_category', 'left')->join('product_lang pl', 'pl.id_product = cp.id_product', 'left')->join('product p', 'p.id_product = pl.id_product', 'left')->join('tax t', 't.id_tax = p.id_tax_rules_group', 'left')->join('specific_price sp', 'sp.id_product = p.id_product', 'left')->where('c.id_category', (int)$id_category)->where('c.active', 1)->where('l.id_lang', 1)->where('t.active', 1)->where('p.active', 1);
        switch ($orderby) {
            case 'name':
                (is_string($orderby)) ? $this->db->order_by('pl.name', $orderway) : null;
                break;

            case 'quantity':
                (is_string($orderby)) ? $this->db->order_by('p.quantity', $orderway) : null;
                break;

            case 'price':
                (is_string($orderby)) ? $this->db->order_by('p.price', $orderway) : null;
                break;

            case 'stock':
                (is_string($orderby)) ? $this->db->order_by('p.stock', $orderway) : null;
                break;

            default:
                return $this->db->get()->result('Product_Model');
                break;
        }

        return $this->db->get()->result('Product_Model');
    }

    /**
     * @param $id_product
     * @param null $orderby
     * @param null $orderway
     * @return mixed
     */
    public function getProductById($id_product, $orderby = null, $orderway = null)
    {
        $this->db->select('
        t.rate,
        p.id_product,MAX(image_shop.id_image) id_image,
        MAX(product_attribute_shop.id_product_attribute) id_product_attribute, 
        p.id_supplier,
        p.id_manufacturer,
        p.id_category_default,
        p.id_tax_rules_group,
        p.on_sale,
        p.online_only,
        p.price,
        p.show_price,
        sp.reduction reduction,
        sp.reduction_type reduction_type,
        stock.out_of_stock,
        IFNULL(stock.quantity, 0) as quantity,
        product_attribute_shop.minimal_quantity AS product_attribute_minimal_quantity,
        pl.name,
        pl.description_short,
        pl.description,
        pl.available_now,
        pl.available_later,
        p.condition,
        p.reference, 
        p.width,
        p.height,
        p.depth,
        p.weight,
        m.name AS manufacturer_name,
        cl.name AS category_default,
        DATEDIFF(product_shop.date_add,DATE_SUB(NOW(), INTERVAL 5 DAY)) > 0 AS nouveau, product_shop.price AS orderprice', false)->from('category_product cp')->join('product p', 'p.id_product = cp.id_product', 'left')->join('product_shop product_shop', 'product_shop.id_product = p.id_product AND product_shop.id_shop = 1', 'left')->join('product_attribute pa', 'p.id_product = pa.id_product', 'left')->join('product_lang pl', 'p.id_product = pl.id_product AND pl.id_lang = 1 AND pl.id_shop = 1', 'left')->join('tax t', 'p.id_tax_rules_group = t.id_tax', 'inner')->join('product_attribute_shop product_attribute_shop', 'product_attribute_shop.id_product_attribute = pa.id_product_attribute AND product_attribute_shop.id_shop = 1 AND product_attribute_shop.default_on = 1', 'left')->join('stock_available stock', 'stock.id_product = p.id_product AND stock.id_product_attribute = IFNULL(product_attribute_shop.id_product_attribute, 0) AND stock.id_shop = 1', 'left')->join('category_lang cl', 'product_shop.id_category_default = cl.id_category AND cl.id_lang = 1 AND cl.id_shop = 1', 'left')->join('image i', 'i.id_product = p.id_product', 'left')->join('image_shop image_shop', 'image_shop.id_image = i.id_image AND image_shop.id_shop = 1 AND image_shop.cover = 1', 'left')->join('image_lang il', 'image_shop.id_image = il.id_image AND il.id_lang = 1', 'left')->join('manufacturer m', 'm.id_manufacturer = p.id_manufacturer', 'left')->join('specific_price sp', 'sp.id_product = p.id_product', 'left')->where('product_shop.id_shop', 1)->where('product_shop.active', 1)->where_in('product_shop.visibility', array('both', 'catalog'))->where('p.id_product', $id_product)->group_by('product_shop.id_product');
        switch ($orderby) {
            case 'name':
                (is_string($orderby)) ? $this->db->order_by('pl.name', $orderway) : null;
                break;

            case 'quantity':
                (is_string($orderby)) ? $this->db->order_by('quantity', $orderway) : null;
                break;

            case 'price':
                (is_string($orderby)) ? $this->db->order_by('p.price', $orderway) : null;
                break;

            default:
                return $this->db->get()->first_row('Product_Model');
                break;
        }

        //return $this->db->get()->result('Product_Model');


    }

    /**
     * @param $id_cart
     * @return mixed
     */
    public function getProductByCartId($id_cart)
    {
        return $this->db->select('cp.id_product_attribute, 
      cp.id_cart,
      cp.id_product,
      cp.quantity cart_quantity,
      cp.id_shop,
      cp.id_address_delivery,
      pl.name,
      p.*,
      pa.default_on,
      i.id_image,
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
      ps.product_supplier_reference supplier_reference,
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
            ->join('image AS i', 'p.id_product = i.id_image', 'left')
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
            ->result('Product_Model');
    }

    /**
     * @return mixed
     */
    public function getBestSales()
    {
        $this->db->select(' 
      p.id_product,
      pl.link_rewrite,
      pl.name AS produit,
      pl.description_short,
      MAX(image_shop.id_image) id_image,
      il.legend,
      ps.quantity AS sales,
      p.ean13,
      p.upc,
      cl.link_rewrite AS category,
      p.show_price,
      p.available_for_order,
      p.quantity,
      p.customizable,
      IFNULL(pa.minimal_quantity, p.minimal_quantity) AS minimal_quantity,
      p.out_of_stock', false)->from('product_sale ps')->join('product p', 'ps.id_product = p.id_product', 'left')->join('product_shop product_shop', 'product_shop.id_product = p.id_product AND product_shop.id_shop = 1', 'inner')->join('product_attribute pa', 'ps.id_product = pa.id_product AND pa.default_on = 1', 'left')->join('product_lang pl', 'p.id_product = pl.id_product AND pl.id_lang = 1 AND pl.id_shop = 1', 'left')->join('image i', 'i.id_product = p.id_product', 'left')->join('image_shop image_shop', 'image_shop.id_image = i.id_image AND image_shop.id_shop = 1 AND image_shop.cover = 1', 'left')->join('image_lang il', 'i.id_image = il.id_image AND il.id_lang = 1', 'left')->join('category_lang cl', 'cl.id_category = product_shop.id_category_default AND cl.id_lang = 1', 'left')->where('product_shop.active', 1)->where_in('p.id_product', array(1, 2, 3, 4, 5, 6, 7, 8, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38))->group_by('product_shop.id_product')->order_by('sales', 'DESC');
        return $this->db->get()->result('Product_Model');
    }

    /**
     * @param $params
     */
    public function getNewProduct($params)
    {
    }

    /**
     * @param $id_category
     * @return mixed
     */
    public function hasProduct($id_category)
    {
        return $this->db->select('COUNT(cp.id_product) as nb_product ', false)->from('category_product AS cp')->where('cp.id_category ', $id_category)->get()->result();
    }

    /**
     * @param $id_product
     * @return mixed
     */
    public function is_product_exist($id_product)
    {
        return $this->db->select('fp.id_product')->from('favorite_product fp')->where('c.id_product', $id_product)->get()->result('Product_model');
    }

    /**
     *
     */
    public function addFavoriteProduct()
    {
    }

    /**
     * @param $ids
     * @return mixed
     */
    public function getProductByIds($ids)
    {
        return $this->db->select('p.*, pl.*')->from('product p')->join('product_lang pl', 'pl.id_product = p.id_product', 'left')->where_in('p.id_product', $ids)->get()->result('Product_model');
    }

    /**
     * @param $id_product
     * @param int $id_product_attribute
     * @param bool $tax
     * @return array|float
     */
    public function getProductPrices($id_product, $id_product_attribute = 0, $tax = true)
    {
        $product = $this->getProductPrice($id_product);
        $id_tax_rules_group = $product->id_tax_rules_group;
        $base_product_price = $product->price;
        $final_price = null;
        $tax_rate = 1;

        if ($tax) {
            $tax = $this->_getTaxRate($id_tax_rules_group);
            $tax_rate = (float)$tax['rate'] * 0.01;
        }

        if ($id_product_attribute != 0) {
            $this->db->select('pa.*')->from('product_attribute pa')->where('pa.id_product', $id_product);

            $this->db->where('pa.id_product_attribute', $id_product_attribute);

            $ht_price_attr = $this->db->get()->first_row('Product_model');

            $price_attr_ht_with_eco_tax = (float)$ht_price_attr->price + (float)$ht_price_attr->ecotax;

            $attr_price_with_tax = $price_attr_ht_with_eco_tax + ($price_attr_ht_with_eco_tax * $tax_rate);

            if (!$tax) {
                $price_ht = array_sum(array($base_product_price, $attr_price_with_tax));
                return array('ht_price' => $price_ht, 'currency' => '');
            }

            $base_price_with_tax = $base_product_price + ($base_product_price * $tax_rate);

            $final_price = array_sum(array((float)$base_price_with_tax, (float)$attr_price_with_tax));

            return array('ttc_price' => (float)$final_price, 'currency' => '',);
        }

        $product_price_ht = (float)$product->price + (float)$product->ecotax;

        $product_price_with_tax = (float)$product_price_ht * $tax_rate;

        if ($tax) return (float)$product_price_ht + (float)$product_price_with_tax;
        else return (float)$product_price_ht;
    }

    /**
     * @param $id_product
     * @return mixed
     */
    public function getProductPrice($id_product)
    {
        return $this->db->select('p.*')->from('product p')->where('p.id_product', (int)$id_product)->get()->first_row('Product_model');
    }

    /**
     * @param $id_tax_rules_group
     * @return mixed
     */
    private function _getTaxRate($id_tax_rules_group)
    {
        return $this->db->select('t.*')->from('tax_rule tr')->join('tax t', 't.id_tax = tr.id_tax', 'left')->where('t.id_tax', (int)$id_tax_rules_group)->where('t.deleted', 0)->where('t.active', 1)->get()->first_row('array');
    }

    /**
     * @param $array
     * @param $key
     * @return array
     */
    public function searchItemsByKey($array, $key)
    {
        $results = array();

        if (is_array($array)) {

            if (isset($array[$key]) && key($array) == $key) $results[] = $array[$key];

            foreach ($array as $sub_array) $results = array_merge($results, $this->searchItemsByKey($sub_array, $key));
        }

        return $results;
    }

    /**
     * @param $product
     * @param bool $tax
     * @param ConfigurationListner $cl
     * @return array
     */
    public function getProductPriceBis($product, $tax = true, ConfigurationListner $cl)
    {
        $attr_price_with_tax = null;
        $final_price = null;
        $tax_rate = 1;
        $r = array();
        $product = $this->getSpecificProduct($product);
        $tax_rule_group = (int)$cl->getConfigurationValue('PS_ECOTAX_TAX_RULES_GROUP_ID')[0]->value;

        foreach ($product as $key => $p) {

            $id_tax_rules_group = $p->id_tax_rules_group;
            $base_product_price = $p->price;

            if ($tax == true) {
                $tax = $this->_getTaxRate($id_tax_rules_group);
                $tax_rate = (float)$tax['rate'] * 0.01;
            }

            /*Cas qui touche un produit bien spécifique
            Je vérifie si dans le tableau $sp, contient un id_product_attribute et id_product*/

            dump($p);

            /*
             * Je vérifie si le produit possède un attribut
             */
            if (!empty($p->id_product_attribute) && isset($p->id_product_attribute)) {

                $eco_tax_TTCc = null;
               // $pa_eco_tax = (float)$p->pa_eco_tax;

                $attr_price_with_tax = null;

               /* if ($tax_rule_group != null && $pa_eco_tax > 0) {
                    $d = $cl->getTaxRate($tax_rule_group);
                    $eco_tax_TTCc = ps_round($pa_eco_tax + ($pa_eco_tax * ($d['rate'] * 0.01)), 2);

                }*/

                //Récupération du prix du produit ayant un id_product
                $price_attr_ht = (float)$p->pa_price;

                if ($price_attr_ht > 0) {
                    //Ajout de la taxe sur le prix
                    $attr_price_with_tax = $price_attr_ht + ($price_attr_ht * $tax_rate);
                }

                if (!$tax) {
                    $price_ht = array_sum(array($base_product_price, $attr_price_with_tax));
                    $r[] = array('ht_price' => $price_ht, 'currency' => '');
                }

                $base_price_with_tax = $base_product_price + ($base_product_price * $tax_rate);
                $final_price = array_sum(array((float)$base_price_with_tax, (float)$attr_price_with_tax));

                dump(ps_round($base_price_with_tax, 2), $attr_price_with_tax);
                $r[] = array(
                    'price_ttc_base' => (float)$final_price,
                    'final_price_ttc' => '',
                    'specific_price' => $p->custom_price,
                    'de' => (!empty($p->custom_price)) ? $this->_returnDiscountedProductPrice($final_price, $p->custom_price) : null,
                    'eco_tax' => $eco_tax_TTCc,
                );
            }
             /*
             * Dans le cas ou le produit ne possède pas de id_product_attribute
             */
            else {
                //TODO ecotax group
                $product_base_ht = (float)$p->price;
                $eco_tax_TTC = (float)$p->ecotax;
                $eco_tax_TTCc = null;
                if ($tax_rule_group != null) {
                    $d = $cl->getTaxRate($tax_rule_group);
                    $eco_tax_TTCc = ps_round($eco_tax_TTC + ($eco_tax_TTC * ($d['rate'] * 0.01)), 2);

                }
                $product_price_with_tax = $product_base_ht + ($product_base_ht * $tax_rate);
                $product_price_with_eco_tax = $product_price_with_tax + $eco_tax_TTCc;

                if ($tax) {

                    $r[] = array(
                        'price_ttc_base' => (float)$product_price_with_tax,
                        'final_price_ttc' => (float)$this->_returnDiscountedProductPrice($product_price_with_eco_tax, $p->custom_price),
                        'specific_price' => (float)$p->custom_price->reduction,
                        'eco_tax_ttc' => (!empty($p->custom_price)) ? $eco_tax_TTCc : null

                    );

                } else $r[] = (float)$product_base_ht;
            }
        }

        return $r;
    }

    /**
     * @param Product $product
     * @return mixed
     */
    public function getSpecificProduct($product)
    {
        $specific_prices = array();
        $ids_product = array();
        foreach ($product as $key => $p) {
            $ids_product[] = (int)$p->id_product;
        }

        $sps = $this->db->select('sp.*')
            ->from('specific_price sp')
            ->where_in('sp.id_product', (!empty($ids_product)) ? (array)$ids_product : array(0) )
            ->get()
            ->result('array');

        foreach ($sps as $sp) {
            $specific_prices[$sp['id_product_attribute']][$sp['id_product']] = $sp;
            //$d[$sp->id_product_attribute][] = array('id_product_attribute'=>$sp->id_product_attribute, 'id_product' =>$sp->id_product,'object'=>$sp);
            //$specific_prices[] = $sp->id_product;

        }

        /*        dump($specific_prices);
            dump($product);
            dump( $specific_prices[$p->id_product_attribute][$p->id_product]);*/

        foreach ($product as $key => $p) {
            //Pour uniquement les produits ayant un attribut
            if (!empty($specific_prices) && isset($specific_prices) && array_key_exists($p->id_product_attribute, $specific_prices) && array_key_exists($p->id_product, $specific_prices[$p->id_product_attribute])) {

                /*   echo 'SPECIFIC';
                    dump($p->id_product,$p->id_product_attribute );
                    dump($specific_prices[$p->id_product_attribute][$p->id_product] );*/

                $p->custom_price = $specific_prices[$p->id_product_attribute][$p->id_product];

                //$p->custom_price = $specific_prices[$p->id_product_attribute][$p->id_product];
                //dump($p->id_product,$p->id_product_attribute);
                //$this->specific_price = $sps[$product[3]->id_product_attribute][$product[3]->id_product];


            }

            //Pour tous les produits
            if (!empty($specific_prices) && isset($specific_prices[0]) && array_key_exists($p->id_product, $specific_prices[0]) && !array_key_exists($p->id_product_attribute, $specific_prices)) {

                //$this->specific_price =  $sps[0][$p->id_product];
                //$p->custom_price = $sps[$p->id_product];

                /*  echo 'GENERIC';
                     dump($p->id_product,$p->id_product_attribute );
                     dump($specific_prices[0][$p->id_product] );*/

                $p->custom_price = $specific_prices[0][$p->id_product];
            }
        }

        return $product;
    }

    /**
     * @param $price
     * @param $specific_price
     * @return mixed
     */
    public function _returnDiscountedProductPrice($price, $specific_price)
    {
        switch ($specific_price->reduction_type) {
            case 'percentage':
                return $price - ($price * $specific_price->reduction);
                break;

            case 'amount':
                return $price - $specific_price->reduction;
                break;
        }

    }

    /**
     * @param $id_product
     * @param int $id_product_attribute
     * @return array
     */
    private function _getSpeceficPrice($id_product, $id_product_attribute = 0)
    {
        $specific_price_associations = $this->db->select('sp.*')->from('specific_price sp')->where('sp.id_product', (int)$id_product)->where('sp.id_product_attribute', $id_product_attribute)->get()->result('array');
        foreach ($specific_price_associations as $key => $specific_p) {
            if (in_array($id_product_attribute, array($specific_p['id_product_attribute']))) $specific_price_associations = array('reduction' => $specific_p['reduction'], 'reduction_type' => $specific_p['reduction_type']);
        }
        return $specific_price_associations;
    }
}

