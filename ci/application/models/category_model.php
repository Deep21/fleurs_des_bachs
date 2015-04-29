<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Category_Model extends CI_Model
{

    public $details = array();

    public function __construct()
    {
        parent::__construct();

    }

    function getAll()
    {
        return 'true';
    }

    function getParentCategoriesById()
    {
        return $this->db->select('cl.id_category,cl.name,cl.description')
            ->from('category c')
            ->join('category_lang cl', 'cl.id_category = c.id_category', 'left')
            ->where('c.active', 1)
            ->where('c.level_depth', 2)
            ->order_by('c.level_depth', 'DESC')
            ->get()
            ->result('Category_model');

    }


    function getAllCategories()
    {
        return $this->db->select('c.id_parent,cl.id_category,cl.name,cl.description')
            ->from('category c')
            ->join('category_lang cl', 'cl.id_category = c.id_category', 'left')
            ->where('c.active', 1)
            ->where('cl.id_lang', 1)
            ->order_by('c.level_depth', 'DESC')
            ->get()
            ->result('Category_model');

    }

    function getProductListByCategoryId($id_category = null, $orderby = null, $orderway = null)
    {
        $this->db->select('
        t.rate,
        p.id_product,MAX(image_shop.id_image) id_image,
        MAX(product_attribute_shop.id_product_attribute) id_product_attribute, 
        p.id_supplier,p.id_manufacturer,p.id_category_default,p.id_tax_rules_group,
        p.on_sale,p.online_only,p.price,p.show_price,sp.reduction reduction,sp.reduction_type reduction_type,
        stock.out_of_stock,
        IFNULL(stock.quantity, 0) as quantity,
        product_attribute_shop.minimal_quantity AS product_attribute_minimal_quantity,
        pl.name produit,
        pl.description_short,
        pl.available_now,
        pl.available_later,
        m.name AS manufacturer_name,
        cl.name AS category_default,
        DATEDIFF(product_shop.date_add,DATE_SUB(NOW(), INTERVAL 5 DAY)) > 0 AS nouveau,product_shop.price AS orderprice', false)
            ->from('category_product cp')
            ->join('product p', 'p.id_product = cp.id_product', 'left')
            ->join('product_shop product_shop', 'product_shop.id_product = p.id_product AND product_shop.id_shop = 1', 'left')
            ->join('product_attribute pa', 'p.id_product = pa.id_product', 'left')
            ->join('tax t', 'p.id_tax_rules_group = t.id_tax', 'inner')
            ->join('product_attribute_shop product_attribute_shop', 'product_attribute_shop.id_product_attribute = pa.id_product_attribute AND product_attribute_shop.id_shop = 1 AND product_attribute_shop.default_on = 1', 'left')
            ->join('stock_available stock', 'stock.id_product = p.id_product AND stock.id_product_attribute = IFNULL(product_attribute_shop.id_product_attribute, 0) AND stock.id_shop = 1', 'left')
            ->join('category_lang cl', 'product_shop.id_category_default = cl.id_category AND cl.id_lang = 1 AND cl.id_shop = 1', 'left')
            ->join('product_lang pl', 'p.id_product = pl.id_product AND pl.id_lang = 1 AND pl.id_shop = 1', 'left')
            ->join('image i', 'i.id_product = p.id_product', 'left')
            ->join('image_shop image_shop', 'image_shop.id_image = i.id_image AND image_shop.id_shop = 1 AND image_shop.cover = 1', 'left')
            ->join('image_lang il', 'image_shop.id_image = il.id_image AND il.id_lang = 1', 'left')
            ->join('manufacturer m', 'm.id_manufacturer = p.id_manufacturer', 'left')
            ->join('specific_price sp', 'sp.id_product = p.id_product', 'left')
            ->where('product_shop.id_shop', 1)
            ->where('product_shop.active', 1)
            ->where_in('product_shop.visibility', array('both', 'catalog'))
            ->where('cp.id_category', $id_category)
            ->group_by('product_shop.id_product');
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
                return $this->db->get()->result('Category_model');
                break;
        }
        return $this->db->get();

    }


    public function getNbProducts($id)
    {
        return $this->db->select('COUNT(cp.id_product) AS total', false)
            ->from('product p')
            ->join('product_shop product_shop', 'product_shop.id_product = p.id_product AND product_shop.id_shop = 1', 'inner')
            ->join('category_product cp', 'p.id_product = cp.id_product', 'left')
            ->where('cp.id_category ', $id)
            ->where_in('product_shop.visibility', array('both', 'catalog'))
            ->where('product_shop.active', 1)->get()->row(1);
    }

    public function get()
    {
        $d = $this->db->query('select * from {pre}page');
        $this->db->where('id_page', 1);
        return $d->result();
    }

    public function getHomeCategories()
    {
        /*      $d = $this->db->select('c.id_category id_categorie, c.id_parent, cl.name nom_categorie')
             ->from('category c')
             ->join('category c1', 'c.nleft BETWEEN c1.nleft AND c1.nright', 'left')
             ->join('category_lang cl', 'cl.id_category = c.id_category', 'left')
             ->where('c.active', 1)
             ->where('cl.id_lang', 1)
             ->where('c1.id_parent', 1)
             ->order_by('c.nleft', 'ASC')
             ->get()
             ->result('Category_model');
             return $d;*/
        $sql = 'SELECT COUNT(cp.id_product) nb_produit,
        c.id_category id_categorie,
        c.id_parent,
        cl.name nom_categorie
        FROM
            {pre}category c
                LEFT JOIN
            {pre}category c1 ON c.nleft BETWEEN c1.nleft AND  c1.nright
                LEFT JOIN
            {pre}category_lang cl ON cl.id_category = c.id_category
            LEFT JOIN {pre}category_product cp ON cp.id_category = c.id_category
            LEFT JOIN {pre}product p ON p.id_product = cp.id_product
        WHERE c.active = ? AND cl.id_lang = ? AND c1.id_parent = ? 
        GROUP BY cl.name 
        ORDER BY c.nleft ASC ';
        return $this->db->query($sql, array(1, 1, 1))->result_array();
    }

    public function getChildren($id_lang, $id_parent, $active = true)
    {
        return $this->db->select('c.id_category, cl.name')
            ->from('category AS c')
            ->join('category_lang AS cl', 'c.id_category = cl.id_category AND cl.id_shop = 1', 'left')
            ->join('category_shop AS cs', 'cs.id_category = c.id_category AND cs.id_shop = 1', 'inner')
            ->where('cl.id_lang ', $id_lang)
            ->where('c.id_parent', $id_parent)
            ->where('c.active', $active)
            ->order_by('cs.position', 'ASC')
            ->group_by('c.id_category')
            ->get()
            ->result('Category_model');
    }

    public function hasChildren($id_category)
    {
        return $this->db->select('IFNULL(COUNT(c.id_category), NULL) AS has_children ', false)
            ->from('category AS c')
            ->where('c.id_category', $id_category)
            ->get()
            ->result();
    }

}

?>