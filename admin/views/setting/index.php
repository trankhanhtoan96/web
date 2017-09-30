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
                    'code'=>"<input type='hidden' name='logo' value='".(!empty($data['logo']) ? $data['logo'] : '')."' />
                             <button type='button' class='btn btn-info' id='btn_choose_logo'>".lang('choose')."</button>
                             <button type='button' class='btn btn-danger' id='btn_delete_logo'>".lang('delete')."</button>"
                ),
                1 => array(
                    'code' => "<img id='img_logo' src='" . (!empty($data['logo']) ? $data['logo'] : '') . "' style='width:150px' />"
                )
            ),
            3 => array(
                0 => array(
                    'label' => lang('logo'),
                    'code'=>"<input type='hidden' name='icon' value='".(!empty($data['icon']) ? $data['icon'] : '')."' />
                             <button type='button' class='btn btn-info' id='btn_choose_icon'>".lang('choose')."</button>
                             <button type='button' class='btn btn-danger' id='btn_delete_icon'>".lang('delete')."</button>"
                ),
                1 => array(
                    'code' => "<img id='img_icon' src='" . (!empty($data['icon']) ? $data['icon'] : '') . "' style='width:150px' />"
                )
            )
        )
    ),
    1 => array(
        'panel_name' => lang('script'),
        'data_panel' => array(
            0 => array(
                0 => array(
                    'label' => lang('script_header'),
                    'type' => 'textarea',
                    'value' => !empty($data['script_header']) ? $data['script_header'] : '',
                    'name' => 'script_header'
                )
            ),
            1 => array(
                0 => array(
                    'label' => lang('script_footer'),
                    'type' => 'textarea',
                    'value' => !empty($data['script_footer']) ? $data['script_footer'] : '',
                    'name' => 'script_footer'
                )
            )
        )
    )
);
include 'admin/views/core/edit.php';
include 'admin/views/footer.php';