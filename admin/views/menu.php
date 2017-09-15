<li><a href="<?= base_url() ?>home"><i class="fa fa-dashboard"></i> <?= lang('home') ?></a></li>
<li><a><i class="fa fa-user"></i><?= lang('user') ?><span class="fa fa-chevron-down"></span></a>
    <ul class="nav child_menu">
        <li><a href="<?= base_url('user/edit') ?>"><?= lang('create') ?></a></li>
        <li><a href="<?= base_url('user/index') ?>"><?= lang('list') ?></a></li>
        <li><a href="<?= base_url('user/change_password') ?>"><?= lang('change_password') ?></a></li>
    </ul>
</li>