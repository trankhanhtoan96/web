<?php
include APP . '/views/header.php';
$dataThead = array(
    lang('name'),
    lang('date_entered'),
    lang('date_modifiled'),
    lang('user_created'),
    lang('user_modifiled')
);
$dataTbody = array();
$dataIds = array();
foreach ($data as $item) {
    $dataTbody[] = array(
        $item['name'],
        $item['date_entered'],
        $item['date_modifiled'],
        $item['user_created']['first_name'].' '.$item['user_created']['last_name'],
        $item['user_modifiled']['first_name'].' '.$item['user_modifiled']['last_name']
    );
    $dataIds[] = $item['id'];
}
include APP . '/views/core/list.php';
include APP . '/views/footer.php';