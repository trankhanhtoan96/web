<?php $this->load->view('header'); ?>
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <h1 class="text-center">Header</h1>
        <?php $this->load->view('user/menu'); ?>
        <div class="x_panel">
            <div class="x_title">
                <label>Thông tin chung</label>
            </div>
            <div class="x_content">
                <div class="row">
                    nội dung
                </div>
            </div>
        </div>
        <?php $this->load->view('user/menu'); ?>
    </div>
</div>
<?php $this->load->view('footer'); ?>