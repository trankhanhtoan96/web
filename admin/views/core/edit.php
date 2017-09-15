<?php if (!empty($alert)) $this->load->view('alert/'.$alert['type'],$alert); ?>
<link rel="stylesheet" type="text/css" href="<?= base_url(APP . 'views/' . $this->router->class . '/'.$this->router->method.'.css') ?>" />
<form action="" method="post" name="editview" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= !empty($data_id) ? $data_id : '' ?>"/>
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
                                echo "<div style='background-color: #f5f5f5;' class='col-xs-4 text-right'><label>{$item['label']}:";
                            } else {
                                echo "<div style='background-color: #f5f5f5;' class='col-xs-2 text-right'><label>{$item['label']}:";
                            }
                        }
                        if (!empty($item['required']) && $item['required'] == true) {
                            echo "<span style='color:red'>*</span>";
                        }
                        if (!empty($item['label'])) {
                            if (isset($dataItem[1])) {
                                echo "</label></div><div class='col-xs-8 text-left'>";
                            } else {
                                echo "</label></div><div class='col-xs-10 text-left'>";
                            }
                        } else {
                            echo "<div class='col-xs-12 text-left'>";
                        }
                        if (!empty($item['code'])) echo $item['code'];
                        elseif (!empty($item['type']) && !empty($item['name'])) {
                            if ($item['type'] == 'textarea') echo "<textarea rows='3' id='{$item['name']}' class='form-control' name='{$item['name']}'>" . (!empty($item['value']) ? $item['value'] : '') . "</textarea>";
                            else echo "<input id='{$item['name']}' class='form-control' type='{$item['type']}' name='{$item['name']}' value='" . (!empty($item['value']) ? $item['value'] : '') . "' " . (!empty($item['required']) && $item['required'] == true ? 'required' : '') . " />";
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
</form>
<script src="<?= base_url(APP . 'views/' . $this->router->class . '/'.$this->router->method.'.js') ?>"></script>
<script type="text/javascript">
    function checkForm() {
        //var dataTemplate = <?php //json_encode($dataTemplates) ?>;
        //check field required by javascript
        return true;
    }
</script>