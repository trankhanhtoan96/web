<?php
include 'admin/views/header.php';
$dataThead = array(
    0 => array(
        'label' => lang('name'),
        'width' => '20'
    ),
    1 => array(
        'label' => lang('email_address'),
        'width' => '28'
    ),
    2 => array(
        'label' => lang('date_modifiled'),
        'width' => '15'
    ),
    3 => array(
        'label' => lang('user_modifiled'),
        'width' => '20'
    ),
    4 => array(
        'label' => lang('validation'),
        'width' => '7'
    )
);
$dataTbody = array();
$dataIds = array();
foreach ($data as $item) {
    $dataTbody[] = array(
        $item['name'],
        $item['email_address'],
        $item['date_modifiled'],
        $item['user_modifiled']['first_name'] . ' ' . $item['user_modifiled']['last_name'],
        $item['validation'] == 1 ? '<label class="label label-success">'.lang('yes').'</label>' : '<label class="label label-danger">'.lang('no').'</label>'
    );
    $dataIds[] = $item['id'];
}
include 'admin/views/core/list.php';
include 'admin/views/footer.php';