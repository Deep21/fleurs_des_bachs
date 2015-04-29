<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Carrier_Model extends CI_Model
{
    public $default_carrier;

    public function __construct()
    {
        parent::__construct();
    }

    public function getCarriers()
    {
        return $this->db->select('c.*,d.*')
            ->from('carrier c')
            ->join('delivery d', 'd.id_carrier = c.id_carrier', 'left')
            ->where('c.active', 1)
            ->where('c.deleted', 0)
            ->get()
            ->result('Carrier_Model');

    }

    public function getCarrierTaxGroup($ids)
    {
        return $this->db->select('ctg.*')
            ->from('carrier_tax_rules_group_shop ctg')
            ->where_in('ctg.id_carrier', $ids)
            ->get()
            ->result('Carrier_Model');
    }

    public function getCarrierTax($id_tax_rules_group)
    {
        return $this->db->select('tr.*,ta.*')
            ->from('tax_rule tr')
            ->where('tr.id_tax_rules_group', $id_tax_rules_group)
            ->join('tax ta', 'ta.id_tax = tr.id_tax', 'left')
            ->where('ta.active', 1)
            ->get()
            ->first_row('Carrier_Model');
    }


}

