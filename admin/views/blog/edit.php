<?php
include APP . '/views/header.php';
$dataTemplates = array(
    0 => array(
        'panel_name' => lang('general_information'),
        'data_panel' => array(
            0 => array(
                0 => array(
                    'label' => lang('name'),
                    'type' => 'text',
                    'required' => true,
                    'value' => !empty($data['name']) ? $data['name'] : '',
                    'name' => 'name'
                ),
                1 => array(
                    'label'=>lang('blog_category'),
                    'code'=>getHtmlSelection($data['blog_category'],$data['blog_category_id'],array('multiple'=>true,'name'=>'blog_category_id[]','id'=>'blog_category_id','style'=>'width:100%'))
                )
            ),
            1 => array(
                0 => array(
                    'label' => lang('image'),
                    'type' => 'file',
                    'name' => 'image'
                ),
                1 => array(
                    'code' => "<img src='" . (!empty($data['image']) ? $data['image'] : '') . "' style='width:150px' />"
                )
            ),
            2 => array(
                0 => array(
                    'label' => lang('description'),
                    'type' => 'textarea',
                    'value' => !empty($data['description']) ? $data['description'] : '',
                    'name' => 'description'
                )
            ),
            3 => array(
                0 => array(
                    'label' => lang('content'),
                    'code' => "<textarea name='content' class='ckeditor' >" . (!empty($data['content']) ? $data['content'] : '') . "</textarea>"
                )
            )
        )
    ),
    1 => array(
        'panel_name' => lang('meta_header'),
        'data_panel' => array(
            0 => array(
                0 => array(
                    'label' => lang('meta_title'),
                    'type' => 'text',
                    'value' => !empty($data['meta_title']) ? $data['meta_title'] : '',
                    'name' => 'meta_title'
                ),
                1 => ''
            ),
            1 => array(
                0 => array(
                    'label' => lang('meta_description'),
                    'type' => 'text',
                    'value' => !empty($data['meta_description']) ? $data['meta_description'] : '',
                    'name' => 'meta_description'
                )
            )
        )
    )
);
include APP . '/views/core/edit.php';
include APP . '/views/footer.php';