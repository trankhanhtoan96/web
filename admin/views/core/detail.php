<?php if (!empty($alert)) $this->load->view('alert/' . $alert['type'], $alert); ?>
<link rel="stylesheet" type="text/css"
      href="<?= base_url('admin/views/' . $this->router->class . '/' . $this->router->method . '.css') ?>"/>
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <h1 class="text-center"><?= $data_header ?></h1>
        <?php $this->load->view($this->router->class . '/menu_' . $this->router->method); ?>
        <?php
        foreach ($dataTemplates as $dataPanel) {
            echo "<div class='x_panel'>
                        <div class='x_title'>
                            <a class='collapse-link'>
                                <i class='fa fa-chevron-up'></i>
                                <label>{$dataPanel['panel_name']}</label>
                            </a>
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
                    if (!empty($item['value'])) {
                        echo $item['value'];
                    }
                    echo "</div></div>";
                }
                echo "</div><br/>";
            }
            echo "</div></div>";
        }
        ?>
    </div>
</div>
<script src="<?= base_url('admin/views/' . $this->router->class . '/' . $this->router->method . '.js') ?>"></script>
<br/>
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="" role="tabpanel" data-example-id="togglable-tabs">
                <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                    <li role="presentation"><a href="#tab_content1" id="home-tab" role="tab"
                                               data-toggle="tab" aria-expanded="true">Home</a>
                    </li>
                    <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab"
                                                        data-toggle="tab" aria-expanded="false">Profile</a>
                    </li>
                    <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2"
                                                        data-toggle="tab" aria-expanded="false">Profile</a>
                    </li>
                </ul>
                <div id="myTabContent" class="tab-content">
                    <div role="tabpanel" class="tab-pane fade" id="tab_content1" aria-labelledby="home-tab">
                        <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown
                            aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan
                            helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher
                            synth. Cosby sweater eu banh mi, qui irure terr.</p>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                        <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid.
                            Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan
                            four loko farm-to-table craft beer twee. Qui photo
                            booth letterpress, commodo enim craft beer mlkshk aliquip</p>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                        <p>xxFood truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid.
                            Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan
                            four loko farm-to-table craft beer twee. Qui photo
                            booth letterpress, commodo enim craft beer mlkshk </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>