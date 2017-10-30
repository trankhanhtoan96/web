<?php
$dataThead = array(
    0 => array(
        'label' => lang('name'),
        'width' => '30'
    ),
    1 => array(
        'label' => lang('email_address'),
        'width' => '30'
    )
);

//custom in each module
if ($this->router->class == 'email_sent' && !empty($module)) {
    $dataThead[2] = array(
        'label' => lang('status'),
        'width' => '30'
    );
}

$dataTbody = array();
$dataIds = array();
foreach ($data as $key => $item) {
    $dataTbody[] = array(
        $item['name'],
        $item['email_address']
    );
    $dataIds[] = $item['id'];

    //custom in each module
    if ($this->router->class == 'email_sent' && !empty($module)) {
        $statusEmail = lang('status_email');
        $dataTbody[count($dataTbody) - 1][2] = $statusEmail[$dataRelationship[$key]['status']] . ' ' . $dataRelationship[$key]['date_modifiled'];
    }
}
include 'admin/views/core/list_subpanel.php';