<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Customer_model extends CI_Model
{
    private static $table = 'customer';

    public function __construct()
    {
        parent::__construct();
    }

    public function getAll()
    {
        return 'true';
    }

    public function addCustomer($value)
    {
        $this->db->insert(self::$table, $value);
        return $this->db->insert_id();
    }

    public function updateCustomerById($object, $id_customer)
    {
        $this->db->where('id_customer', $id_customer);
        $this->db->update(self::$table, $object);
        return $this->db->affected_rows();
    }

    public function getById($id)
    {
        return $this->db->select('c.id_customer,
         c.firstname,
         c.lastname,
         c.email,
         c.birthday,
         c.newsletter')->from('customer c')->where('c.id_customer', $id)->where('c.deleted', 0)->where('c.active', 1)->get()->result();
    }

    public function is_customer_exist($mail)
    {
        return $this->db->select('c.id_customer')->from('customer c')->where('c.email', $mail)->get()->result('Customer_model');
    }

    public function getCustomerDetailsByToken($mail)
    {
        return $this->db->select('c.*')
            ->from('customer c')
            ->where('c.email', $mail)
            ->get()
            ->result('Customer_model');
    }
}

?>