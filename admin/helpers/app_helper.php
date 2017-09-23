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
function getHtmlSelection(array $arr, $keySelected, array $option)
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

function checkRole($roleName='',$return = false)
{
    $CI = &get_instance();
    if ($CI->session->userdata('userLogined')['admin'] == 1) return true;
    $role = $CI->role_model->get($CI->session->userdata('userLogined')['role_id']);
    $role = json_decode(html_entity_decode($role['detail']), true);
    if($roleName=='') {
        if ($CI->router->method == 'index' || $CI->router->method == 'detail') {
            $roleType = $CI->router->class . '_view';
        } elseif ($CI->router->method == 'edit' || $CI->router->method == 'delete' || $CI->router->method == 'deleteList') {
            $roleType = $CI->router->class . '_edit';
        }
        if (!empty($roleType) && isset($role[$roleType]) && $role[$roleType] == "on") return true;
        if ($return) return false;
    }else{
        if (!empty($roleName) && isset($role[$roleName]) && $role[$roleName] == "on") return true;
        if ($return) return false;
    }
    redirect('/', 'refresh');
}