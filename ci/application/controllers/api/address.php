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
        $this->load->library('form_validation');

    }


    /**
     * @param null $id
     */
    public function getAddressById_get($id = null)
    {
        //$this->oauth->verifyResourceRequest();
        $this->load->model('Address_Model');
        $address = $this->Address_Model->getAddressByCustomerId($id);
        $this->response($address, 200);
    }


    /**
     *Fonction qui renvoie les deux addresses
     */
    public function getAllAddress_get()
    {
        $this->load->model('Address_Model');
        $this->load->model('Carrier_Model');
        $carrierList  = $this->Carrier_Model->getCarriers();
        $address_invoice  = $this->Address_Model->getAddressById(7);
        $address_delivery = $this->Address_Model->getAddressById(7);
        $this->response(array(
            'address_invoice' => $address_invoice,
            'address_delivery' => $address_delivery,
            'carrier' => $carrierList
        ), 200);
    }


    /**
     * POST
     * Add new address
     */
    public function addAddress_post()
    {
        //$this->oauth->verifyResourceRequest();
        //retrieve the post value sent by the client
        $address = $this->post();

        if (!empty($address)) {
            isset($address['company']) ? $_POST['company'] = $address['company'] : null;
            isset($address['id_customer']) ? $_POST['id_customer'] = $address['id_customer'] : null;
            isset($address['firstname']) ? $_POST['firstname'] = $address['firstname'] : null;
            isset($address['lastname']) ? $_POST['lastname'] = $address['lastname'] : null;
            isset($address['address']) ? $_POST['address'] = $address['address'] : null;
            isset($address['postcode']) ? $_POST['postcode'] = $address['postcode'] : null;
            isset($address['city']) ? $_POST['city'] = $address['city'] : null;
            isset($address['phone']) ? $_POST['phone'] = $address['phone'] : null;
            isset($address['phone_mobile']) ? $_POST['phone_mobile'] = $address['phone_mobile'] : null;
            isset($address['alias']) ? $_POST['alias'] = $address['alias'] : null;

            } else {
            $this->response(array('message' => "empty"), 200);
            }

        if ($this->form_validation->run('address_add') == true) {
            $now = date('Y-m-d H:i:s');

            $this->load->model('Address_model');
            $address_model = $this->Address_model;
            $address_model->lastname = $address['firstname'];
            $address_model->firstname = $address['lastname'];
            $address_model->company = $address['company'];
            $address_model->id_customer = $address['id_customer'];
            $address_model->address1 = $address['address'];
            $address_model->postcode = $address['postcode'];
            $address_model->city = $address['city'];
            $address_model->phone = $address['phone'];
            $address_model->phone_mobile = $address['phone_mobile'];
            $address_model->alias = $address['alias'];
            $address_model->date_add = $now;
            $address_model->date_upd = $now;

            if ($address_model->addAddress() > 0)
                $this->response(array(
                    'http_code' => 200,
                    'error' => false,
                    'create' => true,
                    'updated' => false,
                    'deleted' => false), 200);

            } else {
            $this->response(array('message' => validation_errors()), 200);
            }

    }
    /**
     * Edit the adress of the customer by id address
     * @param $id_address address of the customer
     * @return boolean
     */
    public function editAddressById_put($id_address = null)
    {
        //retrieve address json
        $address = $this->put();

        if (!empty($address)) {
            isset($address['company']) ? $_POST['company'] = $address['company'] : null;
            isset($address['firstname']) ? $_POST['firstname'] = $address['firstname'] : null;
            isset($address['lastname']) ? $_POST['lastname'] = $address['lastname'] : null;
            isset($address['address']) ? $_POST['address'] = $address['address'] : null;
            isset($address['postcode']) ? $_POST['postcode'] = $address['postcode'] : null;
            isset($address['city']) ? $_POST['city'] = $address['city'] : null;
            isset($address['phone']) ? $_POST['phone'] = $address['phone'] : null;
            isset($address['phone_mobile']) ? $_POST['phone_mobile'] = $address['phone_mobile'] : null;
            isset($address['alias']) ? $_POST['alias'] = $address['alias'] : null;

            } else {
            $this->response(array('message' => "empty"), 200);
            }

            //check the validition rules
        if ($this->form_validation->run('address_put') == true) {
            $now = date('Y-m-d H:i:s');
            $this->load->model('Address_model');
            $address_model = $this->Address_model;
            $address_model->lastname = $address['firstname'];
            $address_model->firstname = $address['lastname'];
            $address_model->company = $address['company'];
            $address_model->id_address = $id_address;
            $address_model->id_customer = 2;
            $address_model->address1 = $address['address'];
            $address_model->postcode = $address['postcode'];
            $address_model->city = $address['city'];
            $address_model->phone = $address['phone'];
            $address_model->phone_mobile = $address['phone_mobile'];
            $address_model->alias = $address['alias'];
            $address_model->date_add = $now;
            $address_model->date_upd = $now;

            if ($address_model->updateByAddressId() > 0) {

                $this->response(array('status' => 'Adresse modifié avec succès'), 200);

                } else {
                $this->response(array('status' => 'error'), 200);
                }

            } else {
            $this->response(array('message' => validation_errors()), 200);
            }

    }


    /**
     * Delete the adress of the customer by id address
     * @param $id_address address of the customer
     * @return boolean
     */

    public function deleteAddressById_delete($id_address = null)
    {
        $this->load->model('Address_model');
        $address_model = $this->Address_model;
        $address_model->id_address = $id_address;
        if ($address_model->deleteAddressById() > 0) {
            $this->response(array('status' => 'Deleted'), 200);
        }

    }


}
