<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

/**
 * Customer
 * Definition de la classe Customer
 *
 * @package    CodeIgniter
 * @subpackage REST_Controller
 * @category   Customer
 * @author     Deeptha WICKREMA
 * @version    1.2
 */
class Customer extends REST_Controller
{

    /**
     *
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    /**
     *
     */
    function addCustomer_post()
    {
        //Chargement des données Json
        $json_input = $this->post();
        if (!empty($json_input)) {
            (isset($json_input['email'])) ? $_POST['email'] = $json_input['email'] : null;
            (isset($json_input['firstname'])) ? $_POST['firstname'] = $json_input['firstname'] : null;
            (isset($json_input['lastname'])) ? $_POST['lastname'] = $json_input['lastname'] : null;
            (isset($json_input['pwd'])) ? $_POST['pwd'] = $json_input['pwd'] : null;
            (isset($json_input['pwdconfirmed'])) ? $_POST['pwdconfirmed'] = $json_input['pwdconfirmed'] : null;
            (isset($json_input['gender'])) ? $_POST['gender'] = $json_input['gender'] : null;
            (isset($json_input['birthday'])) ? $_POST['birthday'] = $json_input['birthday'] : null;

        } else {
            // Si le corps est vide, on affiche une erreur
            $this->response(array('message' => "empty"), 404);
        }
        //On vérifie la cohérence des données
        if ($this->form_validation->run('customer_add')) {

            // on ajoute le client à la base de donnée
            $this->_addCustomer();
        } else {
            $errors = array();
            //on ajoute chaque erreurs dans un tableau
            //on vérifie qu'il n'y est pas de chaine vide
            $email = form_error('email');
            $firstname = form_error('firstname');
            $lastname = form_error('lastname');
            $pwd = form_error('pwd');
            $pwdconfirmed = form_error('pwdconfirmed');
            $gender = form_error('gender');
            $birthday = form_error('birthday');


            if(!empty($email))
                array_push($errors, form_error('email'));
            
            if(!empty($firstname))
                array_push($errors, form_error('firstname'));
            
            if(!empty($lastname))
                array_push($errors, form_error('lastname'));
            
            if(!empty($pwd))
                array_push($errors, form_error('pwd'));
            
            if(!empty($pwdconfirmed))
                array_push($errors, form_error('pwdconfirmed'));
            
            if(!empty($gender))
                array_push($errors, form_error('gender'));

            if(!empty($birthday))
                array_push($errors, form_error('birthday'));


            $this->response(array(
                'message' => $errors,
            ), 404);
        }

    }

    /**
     * @param $id
     */
    function getCustomer_get($id)
    {
        $this->load->model('Customer_Model');
        return $this->response($this->Customer_Model->getById($id), 404);

    }

    /**
     * @param $id
     */
    function editCustomer_put($id)
    {
        $this->form_validation->set_rules('email', 'email', 'required|trim|xss_clean|valid_email');
        $customer = $this->put('customer_put');
        if ($customer) {
            foreach ($customer as $key => $value) {
                $_POST['email'] = $value['email'];
                $_POST['firstname'] = $value['firstname'];
                $_POST['lastname'] = $value['lastname'];
                $_POST['pwd'] = $value['pwd'];
                $_POST['pwdconfirmed'] = $value['pwdconfirmed'];
                $_POST['gender'] = $value['gender'];
                $_POST['birthday'] = $value['birthday'];
            }
        } else {
            $this->response(array('message' => "empty"), 404);
        }

        if ($this->form_validation->run('customer_put')) {
            $this->load->model('Customer_Model');
            $customer = $this->Customer_Model;
            $customer->email = $value['email'];
            $customer->firstname = $value['firstname'];
            $customer->lastname = $value['lastname'];
            $customer->passwd = $this->cryptedpwd;
            $customer->id_gender = $value['gender'];
            $customer->birthday = $value['birthday'];
            $customer->id_lang = 1;
            if ($customer->updateCustomerById($customer, $id)) {
                $this->response(array('status' => 'Client modifié avec succès'), 200);
            } else {
                $this->response(array('status' => 'erreur impossible de modifier'), 404);
            }
        } else {

            $this->response(array('message' => strip_tags(validation_errors())), 404);
        }


    }

    /**
     *
     */
    private function _addCustomer()
    {
        $this->load->model('Customer_Model');
        $now = date('Y-m-d H:i:s');
        $customer = $this->Customer_Model;
        $customer->email = $this->input->post('email');
        $customer->firstname = $this->input->post('firstname');
        $customer->lastname = $this->input->post('lastname');
        $customer->passwd = $this->input->post('pwd');
        $customer->id_gender = $this->input->post('gender');
        $customer->birthday = $this->input->post('birthday');
        $customer->secure_key = md5(uniqid(rand(), true));
        $customer->id_lang = 1;
        $customer->active = 1;
        $customer->date_add = $now;
        $customer->date_upd = $now;
        if ($customer->addCustomer($customer)) {
            $this->response(array('status' => 'Client ajouté avec succès', 'message' => 'OK'), 200);
        } else {
            $this->response(array('status' => 'error', 'message' => 'BAD'), 404);
        }
    }


}