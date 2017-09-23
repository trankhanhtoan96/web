<?php
include 'admin/views/header.php';
$dataTemplates = array(
    0 => array(
        'panel_name' => lang('general_information'),
        'data_panel' => array(
            0 => array(
                0 => array(
                    'label' => lang('username'),
                    'value' => !empty($data['username']) ? $data['username'] : ''
                ),
                1 => array(
                    'label'=>lang('role'),
                    'value'=>$data['role']
                )
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
                    'value' => "<img src='" . (!empty($data['avatar']) ? $data['avatar'] : '') . "' style='width:150px' />"
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
if ($this->session->userdata('userLogined')['admin'] == 1) {
    $dataTemplates[0]['data_panel'][5] = array(
        0 => '',
        1 => array(
            'label' => lang('role'),
            'code' => $data['role']
        )
    );
    $dataTemplates[0]['data_panel'][4][1] = array(
        'label' => lang('admin'),
        'code' => '<input class="flat" type="checkbox" name="admin" id="admin" ' . (!empty($data['admin']) && $data['admin'] == 1 ? 'checked' : '') . ' />'
    );
}
include 'admin/views/core/detail.php';
include 'admin/views/footer.php';