<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Manufacturer_Model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function getProductsdByManufacturerId($id_manufacturer, $orderby = null, $orderway = null, $ids_manufacturer = null, $price = null)
    {
        $this->db->select('
        m.name marque,
        i.id_image,
        ifnull(sp.reduction_type, 0) reduction_type,
        ifnull(sp.reduction,0) reduction,
        p.id_product,
        pl.name produit,
        pl.description_short,
        p.condition,
        p.online_only,
        p.on_sale,
        p.price prix_ht,
        t.rate/100 tax,(t.rate/100*p.price) + p.price AS prix_ttc', false)
            ->from('product p')
            ->join('product_lang pl', 'pl.id_product = p.id_product', 'left')
            ->join('tax t', 't.id_tax = p.id_tax_rules_group', 'left')
            ->join('specific_price sp', 'sp.id_product = p.id_product', 'left')
            ->join('manufacturer m', 'p.id_manufacturer = m.id_manufacturer', 'inner')
            ->join('image i', 'i.id_product = p.id_product', 'inner')
            ->where('m.active', 1)
            ->where_in('m.id_manufacturer', $ids_manufacturer);
        (!empty($price[0])) ? $this->db->where('p.price >=', (int)$price[0]) : null;
        (!empty($price[1])) ? $this->db->where('p.price <=', (int)$price[1]) : null;
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
                return $this->db->order_by('m.id_manufacturer', 'ASC')
                    ->get()
                    ->result('Manufacturer_Model');
                break;
        }

        return $this->db->get()->result_array();

    }

    public function getManufacturers()
    {
        return $this->db->select('COUNT(p.id_product) produits,m.id_manufacturer, m.name marque', false)
            ->from('manufacturer m')
            ->join('product p', 'p.id_manufacturer = m.id_manufacturer', 'left')
            ->where('m.active', 1)
            ->group_by('m.id_manufacturer')
            ->order_by('produits', 'DESC')
            ->get()->result('Manufacturer_Model');
    }


    public function getById($id)
    {
    }

    public function getProducts($id_manufacturer)
    {
        $ids_id_product = $this->getCategoryProduct();
        return $this->db->select(
            'p.*,
      product_shop.*,
      stock.out_of_stock,
      IFNULL(stock.quantity, 0) as quantity,
      MAX(product_attribute_shop.id_product_attribute) id_product_attribute,
      pl.description,
      pl.description_short,
      pl.name,
      MAX(image_shop.id_image) id_image,
      il.legend,
      m.name AS manufacturer_name,
      DATEDIFF(product_shop.date_add,DATE_SUB(NOW(), INTERVAL 20 DAY)) > 0 AS new', false)
            ->from('product p')
            ->join('product_shop product_shop', 'product_shop.id_product = p.id_product AND product_shop.id_shop = 1', 'inner')
            ->join('product_attribute pa', 'p.id_product = pa.id_product', 'left')
            ->join('product_attribute_shop product_attribute_shop', 'product_attribute_shop.id_product_attribute = pa.id_product_attribute AND product_attribute_shop.id_shop = 1 AND product_attribute_shop.default_on = 1', 'left')
            ->join('product_lang pl', 'p.id_product = pl.id_product AND pl.id_lang = 1 AND pl.id_shop = 1', 'left')
            ->join('image i', 'i.id_product = p.id_product', 'left')
            ->join('image_shop image_shop', 'image_shop.id_image = i.id_image AND image_shop.id_shop = 1 AND image_shop.cover=1', 'left')
            ->join('image_lang il', 'i.id_image = il.id_image AND il.id_lang = 1', 'left')
            ->join('manufacturer m', 'm.id_manufacturer = p.id_manufacturer', 'left')
            ->join('stock_available stock', 'stock.id_product = p.id_product AND stock.id_product_attribute = 0 AND stock.id_shop = 1', 'left')
            ->where_in('p.id_manufacturer', array(2))
            ->where('product_shop.active', 1)
            ->where_in('product_shop.visibility', array('both', 'catalog'))
            ->where_in('product_shop.visibility', $ids_id_product)
            ->order_by('pl.name', 'ASC')
            ->group_by('product_shop.id_product')
            ->get()
            ->result('Manufacturer_Model');
    }

    public function getCategoryProduct()
    {
        $result = $this->db->select('cp.id_product')
            ->from('category_group cg')
            ->join('category_product cp', 'cp.id_category = cg.id_category', 'left')
            ->join('category ca', 'cp.id_category = ca.id_category', 'inner')
            ->where('ca.active', 1)
            //mettre le group d'utilisateur
            ->where_in('cg.id_group', 0)
            ->get()
            ->result_array();
        $ids_product = array();
        foreach ($result as $key => $value) {
            $ids_product[] = (int)$value['id_product'];
        }
        return $ids_product;
    }

    public function getNbProduct($id_manufacturer)
    {
        $ids_id_product = $this->getCategoryProduct();
        return $this->db->select('p.id_product')
            ->from('product p')
            ->join('product_shop product_shop', 'product_shop.id_product = p.id_product AND product_shop.id_shop = 1', 'inner')
            ->where('p.id_manufacturer', $id_manufacturer)
            ->where('product_shop.active', 1)
            ->where_in('product_shop.visibility', array('both', 'catalog'))
            ->where_in('product_shop.visibility', $ids_id_product)
            ->get()
            ->result('Manufacturer_Model');;
    }


}

?>