<?php
include APP . '/views/header.php';
$dataTemplates = array(
    0 => array(
        'panel_name' => lang('general_information'),
        'data_panel' => array(
            0 => array(
                0 => array(
                    'label' => lang('username'),
                    'type' => 'text',
                    'required' => true,
                    'value' => !empty($data['username']) ? $data['username'] : '',
                    'name' => 'username'
                ),
                1 => ''
            ),
            1 => array(
                0 => array(
                    'label' => lang('first_name'),
                    'type' => 'text',
                    'value' => !empty($data['first_name']) ? $data['first_name'] : '',
                    'name' => 'first_name'
                ),
                1 => array(
                    'label' => lang('last_name'),
                    'type' => 'text',
                    'value' => !empty($data['last_name']) ? $data['last_name'] : '',
                    'name' => 'last_name'
                )
            ),
            2 => array(
                0 => array(
                    'label' => lang('email'),
                    'type' => 'email',
                    'value' => !empty($data['email']) ? $data['email'] : '',
                    'name' => 'email'
                ),
                1 => array(
                    'label' => lang('phone'),
                    'type' => 'text',
                    'value' => !empty($data['phone']) ? $data['phone'] : '',
                    'name' => 'phone'
                )
            ),
            3 => array(
                0 => array(
                    'label' => lang('avatar'),
                    'type' => 'file',
                    'name' => 'avatar'
                ),
                1 => array(
                    'code' => "<img src='" . (!empty($data['avatar']) ? $data['avatar'] : '') . "' style='width:150px' />"
                )
            ),
            4 => array(
                0 => array(
                    'label' => lang('description'),
                    'type' => 'textarea',
                    'value' => !empty($data['description']) ? $data['description'] : '',
                    'name' => 'description'
                )
            )
        )
    )
);
if ($data_id=='') {
    $dataTemplates[0]['data_panel'][0][1] = array(
        'label'=>lang('password'),
        'type'=>'password',
        'name'=>'password'
    );
}
include APP . '/views/core/edit.php';
include APP . '/views/footer.php';
/**
 * nếu có label sẽ hiển thị label, còn không có thì hiển thị field lên phần của label
 * nếu có code sẽ ưu tiên hiển thị code
 * sau đó sẽ hiển thị field theo type nếu không có code
 * nếu không có type sẽ không hiển thị field lên
 * nếu dòng đó chỉ có 1 field sẽ hiển field tràn qua field còn lại,
 * nếu dòng đó chỉ có 2 field, thì sẽ hiển thị đúng form dành cho 2 field
 */