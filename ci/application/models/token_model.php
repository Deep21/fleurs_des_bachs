<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Token_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function setRefreshToken()
    {
        $this->db->update('oauth_clients', array('grant_types' => 'refresh_token'));
    }

    public function setPassword()
    {
        $this->db->update('oauth_clients', array('grant_types' => 'password'));
    }

    public function getUserIdByToken($token)
    {
        return $this->db->select('c.*')
            ->from('oauth_access_tokens oat')
            ->join('customer c', 'c.email = oat.user_id', 'left')
            ->where('c.deleted', 0)
            ->where('c.active', 1)
            ->where('oat.access_token', $token)
            ->limit(1)
            ->get()
            ->first_row();

    }
}

?>