<?php include 'ketoan/views/header.php'; ?>
    <div class="container">
        <br/>
        <ol class="breadcrumb">
            <li><a href="<?= site_url() ?>"><?= lang('home') ?></a></li>
            <li class="active"><?= $data['page']['name'] ?></li>
        </ol>
    </div>
    <div class="container" style="font-size: 16px">
        <h1 class="text-center"><?= $data['page']['name'] ?></h1>
        <?= $data['page']['content'] ?>
    </div>
<?php
include 'ketoan/views/widgets/giai_phap_ke_toan_cho_doanh_nghiep.php';
include 'ketoan/views/footer.php';
?>