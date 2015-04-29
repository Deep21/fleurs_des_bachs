<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';

/**
 * Manufacturer
 * Definition de la classe Manufacturer
 *
 * @package    CodeIgniter
 * @subpackage REST_Controller
 * @category   Manufacturer
 * @author     Deeptha WICKREMA
 * @version    1.2
 */
/*

$route['api/product/id/(:num)/get'] = 'api/product/getProductById/$1';
$route['api/product/id/(:num)/create'] = 'api/product/addFavoriteProduct/$1';
$route['api/category/product/id/(:num)/get'] = 'api/product/getProductById/$1';
*/

class Manufacturer extends REST_Controller
{

//load the default constrictor
    public function __construct()
    {
        parent::__construct();
        //load the models
        $this->load->model('Manufacturer_Model');
        $this->load->model('Image_Model');

    }

    /**
     * Retrieve products by Manufacturer id
     * @param $id_manufacturer the id of manufacturer
     * @return
     */
    /*public function getProductByManufacturer_get($id_manufacturer = null){
        $id_manufacturer = explode("-", $this->input->get('manufacturer'));
        $price =  explode("-", $this->input->get('price'));
        $limit    =    (is_numeric($this->input->get('limit'))) ?  $this->input->get('limit') : null;
        $orderby  =    $this->input->get('orderby');
        $orderway =    $this->input->get('orderway');
        $product  = $this->Manufacturer_Model->getProductsdByManufacturerId($id_manufacturer,$orderby,$orderway,$id_manufacturer,$price);
        $d = array();
        $i = array();
            //$image = $this->Image_Model->getImagesIdByCategoryId($id);
        foreach ($product as $key => $products) {
            if (!isset($d[$products->id_product])){
                        $d[$products->id_product] = array(
                                'id_image' =>  $products->id_image,
                                'img_link' =>  $products->img_link = $i,
                                'reduction_type'  => $products->reduction_type,
                                'produit'    => $products->produit,
                                'marque'    =>  $products->marque,);
            }

                    //	$d[$products->id_product][] = (int)$products->id_image;

            }

            $this->response(array($this->router->class=>array('id'=>$d)), 200);

        }*/

    /**
     * Get Manufacturers
     * @param
     * @return
     */
    public function getManufacturers_get()
    {
        $manufacturers = $this->Manufacturer_Model->getManufacturers();
        $this->response(array($this->router->class => $manufacturers), 200);
    }

    /**
     * Edit the adress of the customer by id address
     * @param $id_address address of the customer
     * @return boolean
     */
    public function getBestProduct_post($id = null)
    {

    }

    public function getProductByManufacturer_get($id_manufacturer = null)
    {
        $productList = $this->Manufacturer_Model->getProducts($id_manufacturer);
        $productNb = count($this->Manufacturer_Model->getNbProduct($id_manufacturer));
        $this->response(array('product_nb' => $productNb, 'product' => $productList), 200);
    }

}

?>