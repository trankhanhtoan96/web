<?php if (!empty($alert)) $this->load->view('alert/'.$alert['type'],$alert); ?>
<link rel="stylesheet" type="text/css"
      href="<?= base_url(APP . 'views/' . $this->router->class . '/' . $this->router->method . '.css') ?>"/>
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <h1 class="text-center"><?= $data_header ?></h1>
        <?php $this->load->view($this->router->class . '/menu_'.$this->router->method); ?>
        <?php
        foreach ($dataTemplates as $dataPanel) {
            echo "<div class='x_panel'>
                        <div class='x_title'>
                            <label>{$dataPanel['panel_name']}</label>
                        </div>
                        <div class='x_content'>";
            foreach ($dataPanel['data_panel'] as $dataItem) {
                echo "<div class='row'>";
                foreach ($dataItem as $item) {
                    if (isset($dataItem[1])) {
                        echo "<div class='col-sm-6'>";
                    } else {
                        echo "<div class='col-sm-12'>";
                    }
                    if (!empty($item['label'])) {
                        if (isset($dataItem[1])) {
                            echo "<div style='background-color: #f5f5f5;' class='col-xs-4 text-right'><label>{$item['label']}:</label></div><div class='col-xs-8 text-left'>";
                        } else {
                            echo "<div style='background-color: #f5f5f5;' class='col-xs-2 text-right'><label>{$item['label']}:</label></div><div class='col-xs-10 text-left'>";
                        }
                    } else {
                        echo "<div class='col-xs-12 text-left'>";
                    }
                    if (!empty($item['code'])) {
                        echo $item['code'];
                    } else {
                        echo(!empty($item['value']) ? $item['value'] : '');
                    }
                    echo "</div></div>";
                }
                echo "</div><br/>";
            }
            echo "</div></div>";
        }
        ?>
        <?php $this->load->view($this->router->class . '/menu_'.$this->router->method); ?>
    </div>
</div>
<script src="<?= base_url(APP . 'views/' . $this->router->class . '/'.$this->router->method.'.js') ?>"></script>