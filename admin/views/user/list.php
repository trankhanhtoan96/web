<?php
include APP . '/views/header.php';
$dataThead = array(
    lang('username'),
    lang('full_name'),
    lang('email'),
    lang('phone')
);
$dataTbody = array();
$dataIds = array();
foreach ($data as $item) {
    $dataTbody[] = array(
        $item['username'],
        $item['first_name'].' '.$item['last_name'],
        $item['email'],
        $item['phone']
    );
    $dataIds[] = $item['id'];
}
include APP . '/views/core/list.php';
include APP . '/views/footer.php';