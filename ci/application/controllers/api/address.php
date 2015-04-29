<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';


/**
 * Address
 * Definition de la classe Address
 *
 * @package    CodeIgniter
 * @subpackage REST_Controller
 * @category   Address
 * @author     Deeptha WICKREMA
 * @version    1.2
 */
class Address extends REST_Controller
{

    /**
     * Default constructor
     */
    public function __construct()
    {
        parent::__construct();

    }

    /**
     * Get address by id
     */
    public function getAddressById_get($id = null)
    {

    }


    /**
     * Get the total address of the customer
     * @return
     */
    public function getAllAddress_get()
    {

    }


    /**
     * Add new address
     */

    public function addAddress_post()
    {
        //load the auth library


        //check if we're logged
        if ($this->auth->isLogged()) {

            //retrieve the post value sent by the client
            //param is address_add
            $address = $this->post('address_add');
            if ($address) {
                foreach ($address as $key => $value) {
                    isset($value['company']) ? $_POST['company'] = $value['company'] : null;
                    isset($value['id_customer']) ? $_POST['id_customer'] = $value['id_customer'] : null;
                    isset($value['address']) ? $_POST['address'] = $value['address'] : null;
                    isset($value['postcode']) ? $_POST['postcode'] = $value['postcode'] : null;
                    isset($value['city']) ? $_POST['city'] = $value['city'] : null;
                    isset($value['id_country']) ? $_POST['id_country'] = $value['id_country'] : null;
                    isset($value['phone']) ? $_POST['phone'] = $value['phone'] : null;
                    isset($value['phone_mobile']) ? $_POST['phone_mobile'] = $value['phone_mobile'] : null;
                    isset($value['alias']) ? $_POST['alias'] = $value['alias'] : null;
                }
            } else {
                $this->response(array('message' => "empty"), 404);
            }
            if ($this->form_validation->run('address_add')) {
                $now = date('Y-m-d H:i:s');
                $this->load->model('Address_model');
                $address = $this->Address_model;
                $address->company = $value['company'];
                $address->id_customer = $value['id_customer'];
                $address->address1 = $value['address'];
                $address->postcode = $value['postcode'];
                $address->city = $value['city'];
                $address->id_country = $value['id_country'];
                $address->phone = $value['phone'];
                $address->phone_mobile = $value['phone_mobile'];
                $address->alias = $value['alias'];
                $address->date_add = $now;
                $address->date_upd = $now;
                $address->active = 1;
                if ($address->addAddress($address))
                    $this->response(array($this->router->class => array('status' => 'Adresse ajoutée avec succès')), 200);

            } else {
                $this->response(array($this->router->class => array('message' => validation_errors())), 404);
            }
        }
    }


    /**
     * Edit the adress of the customer by id address
     * @param $id_address address of the customer
     * @return boolean
     */
    public function editAddressById_put($id_address)
    {

        //load the auth library

        $this->load->library('auth');
        $this->load->library('my_form_validation');

        //check if we're logged
        if ($this->auth->isLogged()) {

            //retrieve the post value sent by the client
            //param is addres_put
            $address = $this->put('address_put');
            if ($address) {
                foreach ($address as $key => $value) {
                    isset($value['company']) ? $_POST['company'] = $value['company'] : null;
                    isset($value['id_customer']) ? $_POST['id_customer'] = $value['id_customer'] : null;
                    isset($value['address']) ? $_POST['address'] = $value['address'] : null;
                    isset($value['postcode']) ? $_POST['postcode'] = $value['postcode'] : null;
                    isset($value['city']) ? $_POST['city'] = $value['city'] : null;
                    isset($value['id_country']) ? $_POST['id_country'] = $value['id_country'] : null;
                    isset($value['phone']) ? $_POST['phone'] = $value['phone'] : null;
                    isset($value['phone_mobile']) ? $_POST['phone_mobile'] = $value['phone_mobile'] : null;
                    isset($value['alias']) ? $_POST['alias'] = $value['alias'] : null;
                }
            } else {
                $this->response(array('message' => "empty"), 404);
            }

            //check the validition rules
            if ($this->form_validation->run('address_put')) {
                $now = date('Y-m-d H:i:s');
                $this->load->model('Address_model');
                $address = $this->Address_model;
                $address->company = $value['company'];
                $address->id_customer = $value['id_customer'];
                $address->address1 = $value['address'];
                $address->postcode = $value['postcode'];
                $address->city = $value['city'];
                $address->id_country = $value['id_country'];
                $address->phone = $value['phone'];
                $address->phone_mobile = $value['phone_mobile'];
                $address->alias = $value['alias'];
                $address->date_add = $now;
                $address->date_upd = $now;
                $address->active = 1;
                if ($address->updateAddressById($address, $id_address)) {
                    $this->response(array($this->router->class => array('status' => 'Adresse modifié avec succès')), 200);
                } else {
                    $this->response(array($this->router->class => array('status' => 'error')), 404);
                }

            } else {
                $this->response(array($this->router->class => array('message' => validation_errors())), 404);
            }
        }
    }


    /**
     * Delete the adress of the customer by id address
     * @param $id_address address of the customer
     * @return boolean
     */

    public function deleteAddressById_delete($id = null)
    {
        $this->load->model('Address_model');
        $address = $this->Address_model;
        $address->id_address = $id;
        $address->deleteAddressById($address);
    }


}

?>