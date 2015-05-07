<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Starlight
 * Date: 28/03/2015
 * Time: 23:12
 */


require_once APPPATH . '/libraries/REST_Controller.php';

class Carrier extends REST_Controller
{


    /**
     *
     */
    public function __construct()
    {
        parent::__construct();
    }


    /**
     * @param null $id_customer
     */
    public function getCustomerCarrier_get($id_customer = null){
        $this->load->model('Carrier_Model');
        $carrierList  = $this->Carrier_Model->getCarriers();
        $this->response($carrierList , 200);
   }
   
}