<?php
include 'admin/views/header.php';
$dataTemplates = array(
    0 => array(
        'panel_name' => lang('general_information'),
        'data_panel' => array(
            0 => array(
                0 => array(
                    'label' => lang('page_title'),
                    'type' => 'text',
                    'value' => !empty($data['page_title']) ? $data['page_title'] : '',
                    'name' => 'page_title'
                ),
                1 => array(
                    'code'=>'<input type="hidden" name="input_setting" value="1" />'
                )
            ),
            1 => array(
                0 => array(
                    'label' => lang('page_description'),
                    'type' => 'textarea',
                    'value' => !empty($data['page_description']) ? $data['page_description'] : '',
                    'name' => 'page_description'
                )
            ),
            2 => array(
                0 => array(
                    'label' => lang('logo'),
                    'type' => 'file',
                    'name' => 'logo'
                ),
                1 => array(
                    'code' => "<img src='" . (!empty($data['logo']) ? $data['logo'] : '') . "' style='width:150px' />"
                )
            ),
            3 => array(
                0 => array(
                    'label' => lang('icon'),
                    'type' => 'file',
                    'name' => 'icon'
                ),
                1 => array(
                    'code' => "<img src='" . (!empty($data['icon']) ? $data['icon'] : '') . "' style='width:150px' />"
                )
            )
        )
    )
);
include 'admin/views/core/edit.php';
include 'admin/views/footer.php';