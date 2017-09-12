<?php $this->load->view('header'); ?>
<?php
$dataTemplates = array(
    0=>array(
        'panel_name'=>'Thông tin chung',
        'data_panel'=>array(
            0 => array(
                0 => array(
                    'label' => 'Ngay sinh',
                    'code' => '<input type="number" class="form-control" />'
                ),
                1 => array(
                    'label' => 'Ngay sinh',
                    'code' => '<input type="text" class="form-control" />'
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
                    'label' => 'Ngay sinh',
                    'code' => '<input type="number" class="form-control" />'
                ),
                1 => array(
                    'label' => 'Ngay sinh',
                    'code' => '<input type="text" class="form-control" />'
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
    )
);
?>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <h1 class="text-center">Header</h1>
            <?php $this->load->view('user/menu'); ?>
            <?php
            foreach($dataTemplates as $dataPanel){
                echo "<div class='x_panel'>
                        <div class='x_title'>
                            <label>{$dataPanel['panel_name']}</label>
                        </div>
                        <div class='x_content'>";
                foreach ($dataPanel['data_panel'] as $dataItem) {
                    echo "<div class='row'>";
                    foreach($dataItem as $item){
                        echo "<div class='col-sm-6'>
                                 <div class='col-xs-4 text-right'><label>{$item['label']}</label></div>
                                 <div class='col-xs-8 text-left'>{$item['code']}</div>
                              </div>";
                    }
                    echo "</div><br/>";
                }
                echo "</div></div>";
            }
            ?>
            <?php $this->load->view($this->router->class.'/menu'); ?>
        </div>
    </div>
    <script src="<?= base_url(APP . 'views/'.$this->router->class.'/edit.js') ?>"></script>
<?php $this->load->view('footer'); ?>