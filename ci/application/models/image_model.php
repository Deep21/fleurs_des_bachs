<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Image_Model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    function getImagesIdByCategoryId($id_category)
    {
        $this->load->helper('url');
        $data_set = $this->db->select('cp.id_product,i.id_image,i.cover,i.position')
            ->from('category_product cp')
            ->join('image i', 'i.id_product = cp.id_product', 'left')
            ->where('cp.id_category', $id_category)
            ->order_by('i.position', 'ASC')
            ->order_by('i.cover', 'DESC')
            ->get()
            ->result('Image_model');
        foreach ($d as $key => $value) {
            $value->img_link = base_url() . 'index.php/api/image/' . $value->id_image;
        }
        return $data_set;
    }

    function getImagesIdByProductId($id_product)
    {
        $this->load->helper('url');
        $data_set = $this->db->select('i.id_image,i.cover,i.position')
            ->from('image i')
            ->where('i.id_product', $id_product)
            ->order_by('i.position', 'ASC')
            ->order_by('i.cover', 'DESC')
            ->get()
            ->result('Image_model');
        return $data_set;
    }

    function getImages()
    {
        return $this->db->get('image')->result('Image_model');
    }


    function getById($id)
    {

    }


}

?>