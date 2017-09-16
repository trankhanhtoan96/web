<li><a href="<?= base_url('home') ?>"><i class="fa fa-dashboard"></i> <?= lang('home') ?></a></li>
<li><a><i class="fa fa-file"></i><?= lang('blog') ?><span class="fa fa-chevron-down"></span></a>
    <ul class="nav child_menu">
        <li><a href="<?= base_url('blog/edit') ?>"><?= lang('create') ?></a></li>
        <li><a href="<?= base_url('blog/index') ?>"><?= lang('list') ?></a></li>
    </ul>
</li>
<li><a><i class="fa fa-file"></i><?= lang('blog_category') ?><span class="fa fa-chevron-down"></span></a>
    <ul class="nav child_menu">
        <li><a href="<?= base_url('blog_category/edit') ?>"><?= lang('create') ?></a></li>
        <li><a href="<?= base_url('blog_category/index') ?>"><?= lang('list') ?></a></li>
    </ul>
</li>
<li><a target="_blank" href="<?= base_url('vendors/ckfinder/ckfinder.html?langCode=vi') ?>"><i class="fa fa-image"></i> <?= lang('file_browser') ?></a></li>
<li><a><i class="fa fa-user"></i><?= lang('user') ?><span class="fa fa-chevron-down"></span></a>
    <ul class="nav child_menu">
        <li><a href="<?= base_url('user/edit') ?>"><?= lang('create') ?></a></li>
        <li><a href="<?= base_url('user/index') ?>"><?= lang('list') ?></a></li>
        <li><a href="<?= base_url('user/detail/'.$this->session->userdata('userLogined')['id']) ?>"><?= lang('profile') ?></a></li>
        <li><a href="<?= base_url('user/change_password') ?>"><?= lang('change_password') ?></a></li>
    </ul>
</li>
<li><a href="<?= base_url('setting/index') ?>"><i class="fa fa-cogs"></i> <?= lang('setting') ?></a></li>