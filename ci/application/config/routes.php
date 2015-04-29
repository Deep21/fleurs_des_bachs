<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

/*CUSTOM ROUTS*/

$route['default_controller'] = "api/api/boot";
$route['404_override'] = '';



/**
*Customer route
*Ce resource permet de récupérer les informations d'un client  
*HTTP GET
*@param  int {id}
*@return String json response
*/
$route['api/customer/id/(:num)/get'] = 'api/customer/getCustomer/$1';
$route['api/token'] = 'api/token/getAccessToken';

$route['api/boot/get'] = 'api/api/boot';
$route['api/boot/next'] = 'api/api/next';

/**
*Ce resource permet d'ajouter des clients
*HTTP POST
*@param  String json input
	*{
	    *"email": "",
	    *"firstname": "",
	    *"lastname": "",
	    *"pwd": "",
	    *"pwdconfirmed": "",
	    *"gender": "",
	    *"birthday": ""
	*}
*@return String json response
*@return HTTP Response 404 or 200
*/
$route['api/customer/create'] = 'api/customer/addCustomer';

/**
*Customer route
*Ce resource permet de récupérer les informations d'un client  
*HTTP EDIT
*@param  int {id}
*{
*		
*}
*@return String json response
*/
$route['api/customer/id/(:num)/edit'] = 'api/customer/editCustomer/$1';
//Customer routs


//Auth routs
$route['api/token/access-token'] = 'api/token/getAccessToken';
$route['api/token/revoke-token'] = 'api/token/deleteAccessToken';
//Auth routs

//Order routs
$route['api/order/customer/(:num)/get'] = 'api/order/getOrderByCustomerId/$1';
$route['api/order/(:num)/get'] = 'api/order/getOrderById/$1';
$route['api/order/paypal/(:any)/cart/(:num)/get'] = 'api/order/getPaypal/$1/$2';
//Order routs


//Manufacturer routs
$route['api/manufacturer/id/(:num)/get'] = 'api/manufacturer/getProductByManufacturer/$1';
$route['api/manufacturers/get/all'] = 'api/manufacturer/getManufacturers';
//Manufacturer routs


//Address routs
$route['api/address/customer/(:num)/get'] = 'api/address/getAddressById/$1';
$route['api/address/(:num)/delete'] = 'api/address/deleteAddressById/$1';
$route['api/address/(:num)/edit'] = 'api/address/editAddressById/$1';
$route['api/address/create'] = 'api/address/addAddress';
//Address routs


//Products routs
$route['api/product/(:num)/get'] = 'api/product/getProductById/$1';
$route['api/product/id/(:num)/create'] = 'api/product/addFavoriteProduct/$1';
$route['api/product/best'] = 'api/product/getBestProduct';
//Products routs


//Category routs
$route['api/category/(:num)/get'] = 'api/category/getChildren/$1';
$route['api/category/home'] = 'api/category/getCategoryById';
$route['api/category/(:num)/product/get'] = 'api/category/getProductListByCategoryId/$1';
//Category routs


//Image routs
$route['api/image/(:num)/get'] = 'api/image/setImage/$1';
$route['api/image/get'] = 'api/image/getAllImages';
//Image routs

//Checkout routs
$route['api/cart/checkout/get'] = 'api/checkout/getCheckout';
$route['api/image/get'] = 'api/image/getAllImages';
//Checkout routs

$route['api/cart/customer/(:num)/get'] = 'api/cart/getLastNoneOrderedCart/$1';
$route['api/cart/get'] = 'api/cart/getCartProduct';
$route['api/cart/(:num)/product/get'] = 'api/cart/getProductByCartId/$1';
$route['api/cart/customer/cart/product/get'] = 'api/cart/getLastCartProductByCustomer/$1';
$route['api/cart/add'] = 'api/cart/addCartFirstTime';


$route['api/cart/create'] = 'api/cart/createCart';
$route['api/cart/(:num)/product/(:num)/attribute/(:num)/address/(:num)/delete'] = 'api/cart/deleteCartProduct/$1/$2/$3/$4';
$route['api/cart/product/add'] = 'api/cart/insertProductToCartById';
$route['api/cart/(:num)/edit'] = 'api/cart/editCartQty/$1';

$route['api/m/(:num)/get'] = 'api/manufacturer/getProductByManufacturer/$1';
$route['api/m/(:num)/get/(:num)'] = 'api/manufacturer/getProductByManufacturer/$1/$2';

/* End of file routes.php */
/* Location: ./application/config/routes.php */