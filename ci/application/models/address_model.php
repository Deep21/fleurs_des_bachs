<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Address_Model extends CI_Model
{
    const  active = 1;
    const  id_lang = 1;
    const  cover = 1;

    public $active = 1;
    public $deleted = 0;
    public $company;
    public $address1;
    public $address2;
    public $id_address;
    public $id_country = 2;
    public $id_state = 0;
    public $id_customer = 0;
    public $id_manufacturer = 0;
    public $id_supplier = 0;
    public $id_warehouse = 0;
    public $alias;
    public $lastname;
    public $firstname;
    public $postcode;
    public $city;
    public $other;
    public $phone;
    public $phone_mobile;
    public $vat_number;
    public $dni;
    public $date_add;
    public $date_upd;

    private $table = "address";


    /**
     * Default Constructor
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function getAll()
    {

    }

    /**
     * @param int id_address
     * @param bool active
     * @return Address_Model object
     */
    public function getAddressById($id_address, $active = true)
    {
        return $this->db->select('a.id_address, a.alias, a.company, a.lastname, a.firstname, a.address1, a.address2, a.postcode, a.city, a.phone, a.phone_mobile')
            ->from('address a')
            ->where('a.id_address', (int )$id_address)
            ->where('a.active', ($active) ? 1 : 0)
            ->where('a.deleted', 0)
            ->get()
            ->first_row('Address_Model');
    }


    /**
     * @param int id_customer
     * @return Address_Model
     */
    public function getAddressByCustomerId($id_customer)
    {
        return $this->db->select(
            'a.id_address, a.alias,
             a.company, a.lastname,
             a.firstname, a.address1,
             a.address2,
             a.postcode,
             a.city,
             a.phone,
             a.phone_mobile')
            ->from('address a')
            ->where('a.id_customer', (int) $id_customer)
            ->where('a.active', self::active)
            ->get()
            ->result('Address_Model');

    }

    /**
     * @return int
     */
    public function addAddress()
    {
        $this->db->insert('address', $this);
        return (int)$this->db->insert_id();
    }


    /**
     * @return int affected_rows
     */
    public function deleteAddressById()
    {
        $this->db->delete($this->table, array('id_address' => (int)$this->id_address));
        return (int)$this->db->affected_rows();
    }


    /**
     * @return int affected_rows
     */
    public function updateByAddressId()
    {
        $this->db->where('id_address', (int) $this->id_address);
        $this->db->update($this->table, $this);
        return (int)$this->db->affected_rows();
    }

    public function is_alias_exist()
    {

    }


}

