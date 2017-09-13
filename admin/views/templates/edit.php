<script type="text/javascript">
    var dataTemplate = <?= json_encode($dataTemplates) ?>;
</script>
<form action="" method="post" name="editview">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <h1 class="text-center"><?= $dataHeader ?></h1>
            <?php $this->load->view('user/menu'); ?>
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
                        if(isset($dataItem[1])) {
                            echo "<div class='col-sm-6'>";
                        }else{
                            echo "<div class='col-sm-12'>";
                        }
                        if(!empty($item['label'])) {
                            if(isset($dataItem[1])) {
                                echo "<div style='background-color: #f5f5f5;' class='col-xs-4 text-right'><label>{$item['label']}:";
                            }else{
                                echo "<div style='background-color: #f5f5f5;' class='col-xs-2 text-right'><label>{$item['label']}:";
                            }
                        }
                        if (!empty($item['required']) && $item['required'] == true) {
                            echo "<span style='color:red'>*</span>";
                        }
                        if(!empty($item['label'])) {
                            if(isset($dataItem[1])) {
                                echo "</label></div>
                                    <div class='col-xs-8 text-left'>";
                            }else{
                                echo "</label></div>
                                    <div class='col-xs-10 text-left'>";
                            }
                        }else{
                            echo "<div class='col-xs-12 text-left'>";
                        }
                        if (!empty($item['code'])) echo $item['code'];
                        elseif (!empty($item['type']) && !empty($item['name'])) {
                            if($item['type']=='textarea') echo "<textarea rows='3' id='{$item['name']}' class='form-control' name='{$item['name']}'></textarea>";
                            else echo "<input id='{$item['name']}' class='form-control' type='{$item['type']}' name='{$item['name']}' " . (!empty($item['required']) && $item['required'] == true ? 'required' : '') . " />";
                        }
                        echo "</div></div>";
                    }
                    echo "</div><br/>";
                }
                echo "</div></div>";
            }
            ?>
            <?php $this->load->view($this->router->class . '/menu'); ?>
        </div>
    </div>
</form>
<script src="<?= base_url(APP . 'views/' . $this->router->class . '/edit.js') ?>"></script>
<script type="text/javascript">
    function preConfirm() {
        return confirm(CI_language.confirm_cancel);
    }
    function checkForm() {
        return true;
    }
</script>