<?php
//reveice data of which module name
$dataThead = array(
    0 => array(
        'label' => lang('subject'),
        'width' => '20'
    ),
    1 => array(
        'label' => lang('date_sent'),
        'width' => '20'
    ),
    2 => array(
        'label' => lang('user_sent'),
        'width' => '20'
    )
);

//custom in each module
if ($this->router->class == 'user' && !empty($module)) {
    $dataThead[3] = array(
        'label' => lang('status'),
        'width' => '30'
    );
}

$dataTbody = array();
$dataIds = array();
foreach ($data as $key => $item) {
    $dataTbody[] = array(
        $item['name'],
        $item['date_modifiled'],
        $item['user_modifiled']['first_name'] . ' ' . $item['user_modifiled']['last_name']
    );
    $dataIds[] = $item['id'];

    //custom in each module
    if ($this->router->class == 'user' && !empty($module)) {
        $dataTbody[count($dataTbody)-1][2] = $dataRelationship[$key]['status'];
    }
}
include 'admin/views/core/list_subpanel.php';