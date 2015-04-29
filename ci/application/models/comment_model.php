<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Comment_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    function getCommentsByProductId($id_product)
    {
        return $this->db->select('pc.title,pc.content,pc.customer_name,pc.grade')
            ->from('product_comment pc')
            ->where('pc.validate', 1)
            ->where('pc.id_product', $id_product)
            ->get()
            ->result();

    }

    function getProductsByRank($id)
    {

    }


}

?>