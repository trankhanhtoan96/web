<?php $this->load->view('header'); ?>
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
                            <span><?php //$this->session->userdata('userLogined')['username'] ?></span>
                            <h2><?php //$this->session->userdata('userLogined')['full_name'] ?></h2>
                        </div>
                    </div>
                    <!-- /menu profile quick info -->
                    <br/>
                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <h3><?= lang('LBL_MAIN_MENU_TITLE') ?></h3>
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
                    <?php
//                    if (!empty($varibles)) $this->load->view($content, $varibles);
//                    else $this->load->view($content);
                    ?>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- /page content -->
            <!-- footer content -->
            <footer>
                <div class="pull-right">
                    &copy; Trần Khánh Toàn
                </div>
                <div class="clearfix"></div>
            </footer>
            <!-- /footer content -->
        </div>
    </div>
<?php $this->load->view('footer'); ?>