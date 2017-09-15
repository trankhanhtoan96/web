<?php
include APP . '/views/header.php';
$dataTemplates = array(
    0 => array(
        'panel_name' => lang('general_information'),
        'data_panel' => array(
            0 => array(
                0 => array(
                    'label' => lang('username'),
                    'value' => !empty($data['username']) ? $data['username'] : ''
                ),
                1 => ''
            ),
            1 => array(
                0 => array(
                    'label' => lang('first_name'),
                    'value' => !empty($data['first_name']) ? $data['first_name'] : ''
                ),
                1 => array(
                    'label' => lang('last_name'),
                    'value' => !empty($data['last_name']) ? $data['last_name'] : ''
                )
            ),
            2 => array(
                0 => array(
                    'label' => lang('email'),
                    'value' => !empty($data['email']) ? $data['email'] : ''
                ),
                1 => array(
                    'label' => lang('phone'),
                    'value' => !empty($data['phone']) ? $data['phone'] : ''
                )
            ),
            3 => array(
                0 => array(
                    'label'=>lang('avatar'),
                    'code' => "<img src='" . (!empty($data['avatar']) ? $data['avatar'] : '') . "' style='width:150px' />"
                )
            ),
            4 => array(
                0 => array(
                    'label' => lang('description'),
                    'value' => !empty($data['description']) ? $data['description'] : ''
                )
            )
        )
    )
);
include APP . '/views/core/detail.php';
include APP . '/views/footer.php';