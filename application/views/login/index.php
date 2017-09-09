<?php $this->load->view('header'); ?>
    <link rel="stylesheet" href="<?= base_url(APP.'views/login/index.css') ?>" />
    <?= isset($alert)?$alert:''; ?>
    <div class="login_wrapper">
        <div class="animate form login_form">
            <section class="login_content">
                <form action="" method="post">
                    <img style="width: 250px" src="<?= base_url('uploads/images/logo.png') ?>"/>
                    <div>
                        <input type="text" class="form-control" placeholder="Username" required="" name="username"/>
                    </div>
                    <div>
                        <input type="password" class="form-control" placeholder="Password" required="" name="password"/>
                    </div>
                    <div class="form-inline">
                        <button class="btn btn-default submit" type="submit">Log in</button>
                    </div>
                    <div class="clearfix"></div>
                </form>
            </section>
        </div>
    </div>
<?php $this->load->view('footer'); ?>