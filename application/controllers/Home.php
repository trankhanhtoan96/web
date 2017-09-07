<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        echo password_hash('admin',1).'<br/>';
        echo createId().'<br/>';
        echo date("Y-m-d H:i:s");
    }
}