<?php
/**
 * Created by PhpStorm.
 * User: Starlight
 * Date: 28/03/2015
 * Time: 01:43
 */

class Guest_Model extends CI_Model{
    public $id_guest = null;
    public $id_operating_system;
    public $id_web_browser;
    public $id_customer;
    public $javascript;
    public $screen_resolution_x;
    public $screen_resolution_y;
    public $screen_color;
    public $sun_java;
    public $adobe_flash;
    public $adobe_director;
    public $apple_quicktime;
    public $real_player;
    public $windows_media;
    public $accept_language;
    public $mobile_theme = 0;

    private static $table = 'guest';

    public function setNewGuest()
    {
        $this->db->insert(self::$table, $this);
        return $this->db->insert_id();

    }
}