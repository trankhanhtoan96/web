<?php
include 'admin/views/header.php';
$dataThead = array(
    lang('image'),
    lang('name'),
    lang('category'),
    lang('date_entered'),
    lang('date_modifiled'),
    lang('views'),
    lang('user_created'),
    lang('user_modifiled')
);
$dataTbody = array();
$dataIds = array();
foreach ($data as $item) {
    $dataTbody[] = array(
        "<img src='{$item['image']}' style='width:70px' />",
        $item['name'],
        $item['blog_category'],
        $item['date_entered'],
        $item['date_modifiled'],
        $item['views'],
        $item['user_created']['first_name'].' '.$item['user_created']['last_name'],
        $item['user_modifiled']['first_name'].' '.$item['user_modifiled']['last_name']
    );
    $dataIds[] = $item['id'];
}
include 'admin/views/core/list.php';
include 'admin/views/footer.php';