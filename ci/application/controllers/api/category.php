<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';


/**
 * Category
 * Definition de la classe Category
 *
 * @package    CodeIgniter
 * @subpackage REST_Controller
 * @category   Category
 * @author     Deeptha WICKREMA
 * @version    1.2
 */
/*//Category routs
$route['api/category/get'] = 'api/category/getAllCategories';
$route['api/category/home'] = 'api/category/getCategoryById';
$route['api/category/id/(:num)/products/get'] = 'api/category/getSubCategoriesById/$1';
//Category routs*/

class Category extends REST_Controller
{

    public function __construct()
    {
        parent::__construct();

    }


    public function getAllCategories_get()
    {
        $this->load->model('Category_model');
        $data = $this->Category_model->getAllCategories();
        $this->response(array($this->router->class => $data), 200);
    }

    public function getChildren_get($id)
    {
        $this->load->model('Category_model');
        $this->load->model('Product_model');
        $d = $this->Category_model->getChildren(1, $id);
        $da = array();
        $new = array();
        foreach ($d as $key => $value) {
            $value->details["id_children_category"] = null;
            $ds = $this->Category_model->getChildren(1, $value->id_category);
            foreach ($ds as $key => $dd) {
                $value->details["id_children_category"] = ($dd->id_category ? (int)$value->id_category : null);
            }

            //$value->details["id_category_product"] = (int)$value->id_category;
            //$value->is_category = (current($this->Category_model->getChildren(1, $value->id_category)) ? true : false);
            //$value->is_product = (current($this->Product_model->hasProduct($value->id_category)) ? true : false);
        }
        $this->response(array("category" => $d), 200);
    }

    public function getCategoryById_get()
    {
        $this->load->model('Category_model');
        $data = $this->Category_model->getHomeCategories();
        $new = array();
        foreach ($data as $a) {
            $new[$a['id_parent']][] = $a;
        }
        $tree = $this->createTree($new, array($data[0]));

        $this->response(array($this->router->class => $tree), 200);
    }

    private function createTree(&$list, $parent)
    {
        $tree = array();
        foreach ($parent as $k => $l) {
            if (isset($list[$l['id_categorie']])) {
                $l['children'] = $this->createTree($list, $list[$l['id_categorie']]);
            }
            $tree[] = $l;
        }
        return $tree;
    }

    public function getProductListByCategoryId_get($id = null)
    {
        
        $this->load->model('Category_model');
        $this->load->model('Stock_Available_Model');
        $this->load->model('Manufacturer_model');
        $manufacturers = $this->Manufacturer_model->getManufacturers();
        $orderby = $this->input->get('orderby');
        $orderway = $this->input->get('orderway');
        $datas = $this->Category_model->getProductListByCategoryId($id, $orderby, $orderway);
        $product = array();
        $this->load->helper('url');
        foreach ($datas as $key => $data) {
            $product[] = array(
                'id_product' => (int)$data->id_product,
                'id_image' => (int)$data->id_image,
                'url_image' => (string)'http://142.4.211.181/dwickrema/prestashop.v1/ci/index.php/api/image/' . (int)$data->id_image . '/get',
                'in_stock' => ($data->id_product_attribute) ? (int)$this->Stock_Available_Model->getStockAvaible($data->id_product_attribute)->stock : ($data->quantity),
                'id_supplier' => (int)$data->id_supplier,
                'id_manufacturer' => (int)$data->id_manufacturer,
                'id_category_default' => (int)$data->id_category_default,
                'id_tax_rule_group' => (int)$data->id_tax_rules_group,
                'on_sale' => (bool)$data->on_sale,
                'online_only' => (bool)$data->online_only,
                'show_price' => (bool)$data->show_price,
                'out_of_stock' => $data->out_of_stock,
                'product_attribute_minimal_quantity' => $data->product_attribute_minimal_quantity,
                'produit' => $data->produit,
                'description_short' => $data->description_short,
                'available_now' => $data->available_now,
                'available_later' => $data->available_later,
                'manufacturer_name' => $data->manufacturer_name,
                'category_default' => $data->category_default,
                'nouveau' => $data->nouveau,
                'orderprice' => (float)$data->orderprice,
                'tax_rate' => (float)$data->rate,
                'prix_ht' => (float)$data->price,
                'reduction' => (float)$data->reduction,
                'reduction_type' => $data->reduction_type,
                'price_ttc' => (int)$this->_taxCalculation($data->price, $data->rate),
                'discounted_ttc_price' => (!is_null($data->reduction) & !is_null($data->reduction_type)) ? (int)$this->_specificPrice($data->reduction, $data->reduction_type, $this->_taxCalculation($data->price, $data->rate)) : null);

        }

        $this->response(
            array('nb_products' => (int)$this->Category_model->getNbProducts($id)->total, 'product' => $product, 'filter' => $manufacturers), 200);
    }


    private function _taxCalculation($price_ht, $rate)
    {
        return number_format($price_ht * ($rate / 100) + $price_ht, 2);
    }

    private function _specificPrice($reduction, $reduction_type, $ttc)
    {
        switch ($reduction_type) {
            case 'amount':
                return $ttc - $reduction;
                break;

            case 'percentage':
                return $ttc - ($ttc * $reduction);
                break;
        }

    }


}

?>