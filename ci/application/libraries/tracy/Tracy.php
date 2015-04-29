<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

require_once 'vendor/autoload.php';

use Tracy\Debugger;


class Tracy
{
    public function __construct()
    {
        Debugger::enable(Debugger::DETECT, FCPATH . APPPATH .'logs');
        Debugger::$strictMode = TRUE;
        Debugger::DEVELOPMENT;
    }
}

