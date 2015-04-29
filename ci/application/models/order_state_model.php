<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Order_State_Model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }


    public function getOrderStateByIdOrder($id_order = null)
    {
        return $this->db->select('os.date_add, osl.name ')
            ->from('order_history os')
            ->join('order_state_lang osl', 'osl.id_order_state = os.id_order_history', 'inner')
            ->where('os.id_order', $id_order)
            ->get()
            ->result();

    }

}

?>