<li><a href="<?= site_url('home') ?>"><i class="fa fa-dashboard"></i> <?= lang('home') ?></a></li>

<?php if(checkRole('blog_edit',true) || checkRole('blog_view',true)): ?>
    <li><a><i class='fa fa-newspaper-o'></i><?= lang('blog') ?><span class='fa fa-chevron-down'></span></a>
        <ul class='nav child_menu'>
            <?php if(checkRole('blog_edit',true)): ?>
                <li><a href='<?= base_url('admin.php/blog/edit') ?>'><?= lang('create') ?></a></li>
            <?php endif; ?>
            <?php if(checkRole('blog_view',true)): ?>
                <li><a href='<?= base_url('admin.php/blog/index') ?>'><?= lang('list') ?></a></li>
            <?php endif; ?>
        </ul>
    </li>
<?php endif; ?>

<?php if(checkRole('page_edit',true) || checkRole('page_view',true)): ?>
    <li><a><i class='fa fa-newspaper-o'></i><?= lang('page') ?><span class='fa fa-chevron-down'></span></a>
        <ul class='nav child_menu'>
            <?php if(checkRole('page_edit',true)): ?>
                <li><a href='<?= base_url('admin.php/page/edit') ?>'><?= lang('create') ?></a></li>
            <?php endif; ?>
            <?php if(checkRole('page_view',true)): ?>
                <li><a href='<?= base_url('admin.php/page/index') ?>'><?= lang('list') ?></a></li>
            <?php endif; ?>
        </ul>
    </li>
<?php endif; ?>

<?php if(checkRole('blog_category_edit',true) || checkRole('blog_category_view',true)): ?>
    <li><a><i class='fa fa-database'></i><?= lang('blog_category') ?><span class='fa fa-chevron-down'></span></a>
        <ul class='nav child_menu'>
            <?php if(checkRole('blog_category_edit',true)): ?>
                <li><a href='<?= base_url('admin.php/blog_category/edit') ?>'><?= lang('create') ?></a></li>
            <?php endif; ?>
            <?php if(checkRole('blog_category_view',true)): ?>
                <li><a href='<?= base_url('admin.php/blog_category/index') ?>'><?= lang('list') ?></a></li>
            <?php endif; ?>
        </ul>
    </li>
<?php endif; ?>

<?php if (checkRole('setting_edit', true)): ?>

    <li><a target="_blank" href="<?= base_url('vendors/ckfinder/ckfinder.html?langCode=').(CI_LANGUAGE_DISPLAY=='vn'?'vi':'') ?>"><i
                class="fa fa-image"></i> <?= lang('file_browser') ?></a></li>

    <li><a href="<?= site_url('setting/index') ?>"><i class="fa fa-cogs"></i> <?= lang('setting') ?></a></li>

<?php endif; ?>

<?php if(checkRole('email_edit',true) || checkRole('email_view',true)): ?>
    <li><a><i class='fa fa-envelope'></i><?= lang('email') ?><span class='fa fa-chevron-down'></span></a>
        <ul class='nav child_menu'>
            <?php if(checkRole('email_edit',true)): ?>
                <li><a href='<?= base_url('admin.php/email/edit') ?>'><?= lang('create') ?></a></li>
            <?php endif; ?>
            <?php if(checkRole('email_view',true)): ?>
                <li><a href='<?= base_url('admin.php/email/index') ?>'><?= lang('list') ?></a></li>
            <?php endif; ?>
            <?php if (checkRole('email_edit', true)): ?>
                <li><a href='<?= base_url('admin.php/email/send_mail') ?>'><?= lang('send_mail') ?></a></li>
            <?php endif; ?>
        </ul>
    </li>
<?php endif; ?>

<?php if ($this->session->userdata('userLogined')['admin'] == 1): ?>

    <li><a><i class="fa fa-user"></i><?= lang('user') ?><span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
            <li><a href="<?= site_url('user/edit') ?>"><?= lang('create') ?></a></li>
            <li><a href="<?= site_url('user/index') ?>"><?= lang('list') ?></a></li>
        </ul>
    </li>

    <li><a><i class='fa fa-key'></i><?= lang('role') ?><span class='fa fa-chevron-down'></span></a>
        <ul class='nav child_menu'>
            <li><a href='<?= base_url('admin.php/role/edit') ?>'><?= lang('create') ?></a></li>
            <li><a href='<?= base_url('admin.php/role/index') ?>'><?= lang('list') ?></a></li>
            <li><a href='<?= base_url('admin.php/module/index') ?>'><?= lang('module') ?></a></li>
        </ul>
    </li>

<?php endif; ?>