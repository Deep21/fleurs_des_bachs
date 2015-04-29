<?php

class Configuration_Model extends CI_Model
{
    private static $table = 'configuration';

    public function __construct()
    {
        parent::__construct();
    }

    public function getValue($name)
    {
        return $this->db->select('conf.value')
            ->from('configuration conf')
            ->where_in('conf.name', $name)
            ->get()
            ->result('Configuration_Model');
    }

}

