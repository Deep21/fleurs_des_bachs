<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Tax_Model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function _getTaxRate($id_tax_rules_group)
    {
        return $this->db->select('t.*')->from('tax_rule tr')->join('tax t', 't.id_tax = tr.id_tax', 'left')->where('t.id_tax', (int)$id_tax_rules_group)->where('t.deleted', 0)->where('t.active', 1)->get()->first_row('array');
    }

    function getById($id)
    {

    }


}

?>