<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

/**
 * Product
 * Definition de la classe Product
 *
 * @package    CodeIgniter
 * @subpackage REST_Controller
 * @category   Product
 * @author     Deeptha WICKREMA
 * @version    1.2
 */
/*

$route['api/product/id/(:num)/get'] = 'api/product/getProductById/$1';
$route['api/product/id/(:num)/create'] = 'api/product/addFavoriteProduct/$1';
$route['api/category/product/id/(:num)/get'] = 'api/product/getProductById/$1';

*/

class Product extends REST_Controller
{

    public function __construct()
    {
        parent::__construct();
        //load models
        $this->load->model('Product_Model');
        $this->load->model('Image_Model');
        $this->load->model('Comment_Model');

    }


    /**
     * Retrieve Product by id product
     * @param $id_order the id of order
     * @return
     */
    public function getProductById_get($id_product = null)
    {
        //retrieve GET method value
        $stock = array();
        $limit = (is_numeric($this->input->get('limit'))) ? $this->input->get('limit') : null;
        $orderby = $this->input->get('orderby');
        $orderway = $this->input->get('orderway');
        switch ($this->input->get('product')) {
            case 'bestsale':
                $product = $this->Product_Model->getBestSales($params);
                break;

            case 'new':
                $product = $this->Product_Model->getNewProduct($params);
                break;

            default:
                //$comment =  $this->Comment_Model->getCommentsByProductId($id_product);
                $product = $this->Product_Model->getProductById($id_product, $orderby, $orderway);
                $image = $this->Image_Model->getImagesIdByProductId($id_product);
                if(!empty($product)){
                    foreach ($image as $key => $images) {
                        $images->url_image = (string)'http://142.4.211.181/dwickrema/prestashop.v1/ci/index.php/api/image/' . (int)$images->id_image . '/get';
                        $images->id_image = (int)$images->id_image;
                        $images->cover = (int)$images->cover;
                        $images->position = (int)$images->position;
                    }

                    $product->rate = (double)$product->rate;
                    $product->id_product_attribute = (int)$product->id_product_attribute;
                    $product->id_tax_rules_group = (int)$product->id_tax_rules_group;
                    $product->orderprice = (double)$product->orderprice;
                    $product->out_of_stock = (int)$product->out_of_stock;
                    $product->nouveau = (int)$product->nouveau;
                    $product->id_product = (int)$product->id_product;
                    $product->id_image = (int)$product->id_image;
                    $product->url_image = (string)'http://142.4.211.181/dwickrema/prestashop.v1/ci/index.php/api/image/' . (int)$images->id_image . '/get';
                    $product->id_manufacturer = (int)$product->id_manufacturer;
                    $product->id_category_default = (int)$product->id_category_default;
                    $product->id_supplier = (int)$product->id_supplier;
                    $product->id_shop_default = (int)$product->id_shop_default;
                    $product->price = (double)$product->price;
                    $product->online_only = (boolean)$product->online_only; // changed to boolean
                    $product->on_sale = (boolean)$product->on_sale; // changed to boolean
                    $product->show_price = (boolean)$product->show_price;
                    $product->quantity = (int)$product->quantity;
                    $product->width = (double)$product->width;
                    $product->height = (double)$product->height;
                    $product->depth = (double)$product->depth;
                    $product->weight = (double)$product->weight;
                    $product->images = $image;

                    $this->response($product, 200);
                    break;
                }else{
                    $this->response(array(null),  200);
                }



        }

    }

    /**
     * add favorite product by $id
     * @param $id the id of the product
     * @return
     */
    public function addFavoriteProduct_post($id = null)
    {
        $this->load->library('form_validation');
        if ($this->form_validation->run('product')) {
            $d = $this->Product_Model->addFavoriteProduct();

        }

    }


    /**
     * Retrieve Order by order id
     * @param $id_order the id of order
     * @return
     */
    public function getBestProduct_get($id = null)
    {
        $product = $this->Product_Model->getBestSales();
        $this->load->helper('url');
        foreach ($product as $key => $value) {
            $value->id_image = (int)$value->id_image;
            $value->id_product = (int)$value->id_product;
            $value->link_image = base_url() . 'index.php/api/image/id/' . $value->id_image . '/get';
        }
        $this->response($product, 200);
    }

    public function hasProduct()
    {

    }

}
