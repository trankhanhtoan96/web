<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class CI_Pagination
 * $config = array(
 *  'total' => 0,
 *  'per_page' => 0,
 *  'cur_page' => 1,
 *  'base_url' => current_url().'?page='
 *)
 */
class CI_Pagination
{
    private $config;

    function __construct($config)
    {
        $this->config = array(
            'total'
        );
    }
    function get()
    {

    }
}