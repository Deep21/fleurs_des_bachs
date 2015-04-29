<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Auth_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }


    function login($email, $pwd)
    {
        return $this->db->select('c.id_customer, c.id_gender, c.firstname, c.lastname, c.email')
            ->from('customer c')
            ->where('c.active', 1)
            ->where('c.deleted', 0)
            ->where('c.is_guest', 0)
            ->where('c.email', $email)
            ->where('c.passwd', $pwd)
            ->limit(1)
            ->get()->result('Auth_model');
    }


}

?>