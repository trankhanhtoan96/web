<!DOCTYPE html>
<html lang="vi">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>

    <!--define language-->
    <script> var CI_language = <?= json_encode($this->lang->language) ?>; </script>

    <!--jquery-->
    <script src="<?= base_url('vendors/jquery.min.js') ?>"></script>

    <!--script-->
    <script src="<?= base_url(APP . 'views/script.js') ?>"></script>

    <!--bootstrap-->
    <link rel="stylesheet" href="<?= base_url('vendors/bootstrap/css/bootstrap.min.css') ?>"/>
    <script src="<?= base_url('vendors/bootstrap/js/bootstrap.min.js') ?>"></script>

    <!--font awesome-->
    <link href="<?= base_url('vendors/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet">

    <!--nprogress-->
    <link href="<?= base_url('vendors/nprogress/nprogress.css') ?>" rel="stylesheet">

    <!--icheck-->
    <link href="<?= base_url('vendors/iCheck/skins/flat/green.css') ?>" rel="stylesheet">

    <!--select 2-->
    <link href="<?= base_url('vendors/select2/css/select2.min.css') ?>" rel="stylesheet">

    <!--datatables-->
    <link href="<?= base_url('vendors/datatables/css/dataTables.bootstrap.css') ?>" rel="stylesheet">

    <!--alertify-->
    <link href="<?= base_url('vendors/AlertifyJS/css/alertify.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('vendors/AlertifyJS/css/themes/bootstrap.min.css') ?>" rel="stylesheet">

    <!--ckeditor-->
    <script src="<?= base_url('vendors/ckeditor/ckeditor.js') ?>"></script>

    <!--admin-->
    <link rel="stylesheet" href="<?= base_url('vendors/admin/custom.min.css') ?>"/>
    <link rel="stylesheet" href="<?= base_url(APP . 'views/style.css') ?>"/>

</head>
<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="clearfix"></div>
                <!-- menu profile quick info -->
                <div class="profile">
                    <div class="profile_pic">
                        <img src="<?= base_url('uploads/images/user.jpg') ?>" class="img-circle profile_img">
                    </div>
                    <div class="profile_info">
                        <span>admin</span>
                        <h2>Trần Khánh Toàn</h2>
                    </div>
                </div>
                <!-- /menu profile quick info -->
                <br/>
                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <h3><?= lang('title_menu') ?></h3>
                        <ul class="nav side-menu">
                            <?php $this->load->view('menu'); ?>
                        </ul>
                    </div>
                </div>
                <!-- /sidebar menu -->
            </div>
        </div>
        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <nav>
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>
                    <ul class="nav navbar-nav navbar-right">
                        <?php $this->load->view('menu_top'); ?>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- /top navigation -->
        <!-- page content -->
        <div class="right_col" role="main">
            <div class="">
                <div class="clearfix"></div>
                <?php if (!empty($alert)) echo $alert; ?>
                <div class="clearfix"></div>