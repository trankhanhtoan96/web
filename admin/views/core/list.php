<?php if (!empty($alert)) $this->load->view('alert/' . $alert['type'], $alert); ?>
<link rel="stylesheet" type="text/css" href="<?= base_url(APP . 'views/' . $this->router->class . '/list.css') ?>"/>
<form action="<?= site_url($this->router->class . '/deleteList') ?>" name="ListView" method="post">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <h1 class="text-center"><?= $data_header ?></h1>
            <?php $this->load->view($this->router->class . '/menu_list'); ?>
            <div class="x_panel">
                <div class="x_content">
                    <table id="dataTable" class="table table-striped table-bordered bulk_action">
                        <thead>
                        <th style="width:3%;"><input type="checkbox" class="flat" id="check-all"/></th>
                        <th style="width:8%;"></th>
                        <?php
                        foreach ($dataThead as $item) {
                            echo "<th>{$item}</th>";
                        }
                        ?>
                        </thead>
                        <tbody>
                        <?php
                        foreach ($dataTbody as $key => $item) {
                            echo "<tr><td><input type='checkbox' data-check='table_records' class='flat' name='record_selected[]' value='{$dataIds[$key]}'/></td>
                                      <td>
                                        <a data-toggle='tooltip' style='font-size:16px' title='" . lang('view') . "' href='" . base_url($this->router->class . '/detail/' . $dataIds[$key]) . "'><i class='fa fa-search'></i></a> <b style='font-size:16px'>|</b>
                                        <a data-toggle='tooltip' style='font-size:16px' title='" . lang('edit') . "' href='" . base_url($this->router->class . '/edit/' . $dataIds[$key]) . "'><i class='fa fa-edit'></i></a>
                                      </td>";
                            foreach ($item as $item2) {
                                echo "<td>{$item2}</td>";
                            }
                            echo '</tr>';
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <?php $this->load->view($this->router->class . '/menu_list'); ?>
        </div>
    </div>
</form>
<script type="text/javascript">
    $(document).ready(function () {
        $('#dataTable').dataTable({
            "bSort": false
        });
    });
</script>
<script src="<?= base_url(APP . 'views/' . $this->router->class . '/list.js') ?>"></script>