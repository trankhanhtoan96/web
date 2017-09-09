<li>
    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
        <img src="<?= base_url() ?>views/assets/images/user.jpg"><?php //$this->session->userdata('userLogined')['full_name'] ?>
        <span class=" fa fa-angle-down"></span>
    </a>
    <ul class="dropdown-menu dropdown-usermenu pull-right">
        <li><a href="<?= base_url() ?>login/logout"><i class="fa fa-sign-out pull-right"></i> Đăng xuất</a></li>
    </ul>
</li>