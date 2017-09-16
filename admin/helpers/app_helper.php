<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @return string[36]
 */
function createId()
{
    $id = md5(time());
    $stringToRandom = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    for ($i = 0; $i < 4; $i++) {
        $id .= $stringToRandom[rand(0, 61)];
    }
    return $id;
}

/**
 * @param array $arr
 * @param string $keySelected (nếu là multiple select thì keyselect là array)
 * @param array $option
 * @return string
 */
function getHtmlSelection($arr = array(), $keySelected = '', $option = array())
{
    $html = '<select ';
    foreach ($option as $key => $value) {
        $html .= $key . '="' . $value . '"';
    }
    $html .= '>';
    if (is_array($keySelected)) {
        foreach ($arr as $key => $value) {
            $html .= '<option ' . (in_array($key, $keySelected) ? 'selected' : '') . ' value="' . $key . '">' . $value . '</option>';
        }
    } else {
        foreach ($arr as $key => $value) {
            $html .= '<option ' . ($key == $keySelected ? 'selected' : '') . ' value="' . $key . '">' . $value . '</option>';
        }
    }
    $html .= '</select>';
    return $html;
}

function checkLogin()
{
    $CI = &get_instance();

}