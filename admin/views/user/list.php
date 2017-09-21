<?php
include 'admin/views/header.php';
$dataThead = array(
    lang('avatar'),
    lang('username'),
    lang('full_name'),
    lang('email'),
    lang('phone'),
    lang('date_entered')
);
$dataTbody = array();
$dataIds = array();
foreach ($data as $item) {
    $dataTbody[] = array(
        "<img src='{$item['avatar']}' style='width:70px' />",
        $item['username'],
        $item['first_name'].' '.$item['last_name'],
        $item['email'],
        $item['phone'],
        $item['date_entered']
    );
    $dataIds[] = $item['id'];
}
include 'admin/views/core/list.php';
include 'admin/views/footer.php';