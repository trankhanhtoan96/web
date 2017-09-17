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
function getHtmlSelection(array $arr, $keySelected,array $option)
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

function LoginCookie()
{
    $CI = &get_instance();
    if ($id = get_cookie('userLogined')) {
        $user = $CI->user_model->get($id);
        if($user){
            $CI->session->set_userdata('userLogined', $user);
            set_cookie('userLogined',$user['id'],2592000);
            return true;
        }
    }
    return false;
}