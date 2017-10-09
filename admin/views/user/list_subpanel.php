<?php
$dataThead = array(
    0 => array(
        'label' => lang('username'),
        'width' => '10'
    ),
    1 => array(
        'label' => lang('full_name'),
        'width' => '20'
    ),
    2 => array(
        'label' => lang('email'),
        'width' => '30'
    )
);

//custom in each module
if ($this->router->class == 'email_sent' && !empty($module) && $module == 'user') {
    $dataThead[4] = array(
        'label' => lang('status'),
        'width' => '30'
    );
}

$dataTbody = array();
$dataIds = array();
foreach ($data as $key => $item) {
    $dataIds[] = $item['id'];
    $dataTbody[] = array(
        $item['username'],
        $item['first_name'] . ' ' . $item['last_name'],
        $item['email']
    );

    //custom in each module
    if ($this->router->class == 'email_sent' && !empty($module) && $module == 'user') {
        $dataTbody[count($dataTbody)-1][4] = $dataRelationship[$key]['status'];
    }
}

include 'admin/views/core/list_subpanel.php';