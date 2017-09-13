<?php $this->load->view('header');
$dataHeader = "Tạo mới người dùng";
$dataTemplates = array(
    0=>array(
        'panel_name'=>'Thông tin chung',
        'data_panel'=>array(
            0 => array(
                0 => array(
                    'label' => 'Ngay sinh Ngay sinh Ngay sinh Ngay sinh',
                    'code' => '<input type="number" class="form-control" />',
                    'required'=>true
                ),
                1 => array(
                    'label' => 'Ngay sinh',
                    'code' => '<input type="date" class="form-control" />'
                )
            ),
            1 => array(
                0 => array(
                    'label' => 'Ngay sinh',
                    'code' => '<input type="text" class="form-control" />'
                ),
                1 => array(
                    'label' => 'Ngay sinh',
                    'code' => '<input type="text" class="form-control" />'
                )
            )
        )
    ),
    1=>array(
        'panel_name'=>'Thông tin cá nhân',
        'data_panel'=>array(
            0 => array(
                0 => array(
                    'code' => '<input type="number" class="form-control" />'
                ),
                1 => array(
                    'label' => 'Ngay sinh'
                )
            ),
            1 => array(
                0 => array(
                    'label' => 'Ngay sinh',
                    'name' => 'first_name',
                    'type'=>'textarea',
                    'value'=>'def'
                ),
                1 => array(
                    'label' => 'Ngay sinh',
                    'name'=>'birthdate'
                )
            )
        )
    ),
    2=>array(
        'panel_name'=>'Thông tin khác',
        'data_panel'=>array(
            0 => array(
                0 => array(
                    'label' => 'Ngay sinh',
                    'code' => '<input type="number" class="form-control" />'
                ),
                1=>''
            ),
            1 => array(
                0 => array(
                    'label' => 'Ngay sinh',
                    'name' => 'first_name',
                    'type'=>'textarea',
                    'value'=>'abc'
                )
            )
        )
    )
);
include 'admin/views/templates/edit.php';
$this->load->view('footer');
/**
 * nếu có label sẽ hiển thị label, còn không có thì hiển thị field lên phần của label
 * nếu có code sẽ ưu tiên hiển thị code
 * sau đó sẽ hiển thị field theo type nếu không có code
 * nếu không có type sẽ không hiển thị field lên
 * nếu dòng đó chỉ có 1 field sẽ hiển field tràn qua field còn lại,
 * nếu dòng đó chỉ có 2 field, thì sẽ hiển thị đúng form dành cho 2 field
 */