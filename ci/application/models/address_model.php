<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Address_Model extends CI_Model
{
    const  active = 1;
    const  idlang = 1;
    const  cover = 1;
    public $company;

    private $table = "address";


    public function __construct()
    {
        parent::__construct();
    }

    public function getAll()
    {

    }

    public function getAddressById($id_adress, $active = true)
    {
        return $this->db->select('a.id_address, a.alias, a.company, a.lastname, a.firstname, a.address1, a.address2, a.postcode, a.city, a.phone, a.phone_mobile')
            ->from('address a')
            ->where('a.id_address', $id_adress)
            ->where('a.active', ($active) ? 1 : 0)
            ->where('a.deleted', 0)
            ->get()
            ->result('Address_Model');

    }


    public function getAddressByCustomerId($id_customer)
    {
        return $this->db->select('a.id_address, a.alias, a.company, a.lastname, a.firstname, a.address1, a.address2, a.postcode, a.city, a.phone, a.phone_mobile')
            ->from('address a')
            ->where('a.id_customer', $id_customer)
            ->where('a.active', self::active)
            ->get()
            ->result('Address_Model');

    }

    public function addAddress($object)
    {
        $this->db->insert('address', $object);
        return $this->db->insert_id();
    }

    public function deleteAddressById()
    {
        $this->db->delete($this->table, array('id_address' => $this->id_address));
        return $this->db->affected_rows();
    }


    public function updateAddressById($object, $id_address)
    {
        $this->db->where('id_address', $id_address);
        $this->db->update($this->table, $object);
        return $this->db->affected_rows();
    }

    public function is_alias_exist()
    {

    }


}

