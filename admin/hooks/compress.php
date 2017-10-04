<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
function compress()
{
    $CI =& get_instance();
    $html = $CI->output->get_output();
    $html = str_replace(',<!DOCTYPE html>','<!DOCTYPE html>',$html);
    $html = preg_replace(array('/\n/', '/>\s+</'), array(' ', '><'), $html);
    $CI->output->set_output($html);
    $CI->output->_display();
}