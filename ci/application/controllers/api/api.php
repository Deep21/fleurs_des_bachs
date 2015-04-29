<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

/**
 * Api
 * Definition de la classe Api
 *
 * @package    CodeIgniter
 * @subpackage REST_Controller
 * @category   Api
 * @author     Deeptha WICKREMA
 * @version    1.2
 */
/*
$route['api/product/id/(:num)/get'] = 'api/product/getProductById/$1';
$route['api/product/id/(:num)/create'] = 'api/product/addFavoriteProduct/$1';
$route['api/category/product/id/(:num)/get'] = 'api/product/getProductById/$1';
*/

class Api extends REST_Controller
{

    public function __construct()
    {
        parent::__construct();

    }

    public function boot_get($id = null)
    {
        $this->response('boot');

    }


}
