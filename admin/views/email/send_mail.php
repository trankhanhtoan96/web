<?php
include 'admin/views/header.php';
$dataTemplates = array(
    0 => array(
        'panel_name' => lang('body_email'),
        'data_panel' => array(
            0 => array(
                0 => array(
                    'label' => lang('subject'),
                    'type' => 'text',
                    'value' => !empty($data['subject']) ? $data['subject'] : '',
                    'name' => 'subject',
                    'required'=>true
                )
            ),
            1=>array(
                0=>array(
                    'label'=>lang('body_email'),
                    'type'=>'textarea',
                    'value' => !empty($data['body_email']) ? $data['body_email'] : '',
                    'name'=>'body_email',
                    'required'=>true
                )
            )
        )
    ),
    1 => array(
        'panel_name' => lang('receiver'),
        'data_panel' => array(
            0 => array(
                0 => array(
                    'label' => lang('email_to'),
                    'type' => 'text',
                    'value' => !empty($data['email_to']) ? $data['email_to'] : '',
                    'name' => 'email_to'
                )
            ),
            1 => array(
                0 => array(
                    'label' => lang('email_cc'),
                    'type' => 'text',
                    'value' => !empty($data['email_cc']) ? $data['email_cc'] : '',
                    'name' => 'email_cc'
                )
            ),
            2 => array(
                0 => array(
                    'label' => lang('email_bcc'),
                    'type' => 'text',
                    'value' => !empty($data['email_bcc']) ? $data['email_bcc'] : '',
                    'name' => 'email_bcc'
                )
            ),
        )
    ),
    2 => array(
        'panel_name' => lang('user'),
        'data_panel' => array(
            0 => array(
                0 => array(
                    'code'=>$data['user_role_type_select']
                ),
                1=>array(
                    'code'=>$data['select_add_address']."&nbsp;&nbsp;<button style='margin-top:5px' class='btn btn-primary' id='btn_add_address'>".lang('add')."</button>"
                )
            ),
            1 => array(
                0 => array(
                    'code'=>$data['table_user_email']
                )
            )
        )
    )
);
include 'admin/views/core/edit.php';
include 'admin/views/footer.php';