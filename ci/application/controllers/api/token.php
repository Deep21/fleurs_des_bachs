<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Example
 *
 * This is an example of a few basic user interaction methods you could use
 * all done with a hardcoded array.
 *
 * @package   CodeIgniter
 * @subpackage  Rest Server
 * @category  Controller
 * @author    Phil Sturgeon
 * @link    http://philsturgeon.co.uk/code/
 */

require APPPATH . '/libraries/REST_Controller.php';

class Token extends REST_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function getAccessToken_post()
    {
        $refresh = $this->input->get('refresh', 0);
        if ($refresh) return $this->refreshToken();

        $this->load->model('Token_model');
        $this->Token_model->setPassword();

        return $this->oauth->getAccessToken();
    }

    private function refreshToken()
    {
        $this->load->model('Token_model');
        $this->Token_model->setRefreshToken();
        $this->oauth->getAccessToken();
    }

    public function deleteAccessToken_delete()
    {
    }
}
