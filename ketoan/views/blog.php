<?php include 'ketoan/views/header.php'; ?>
    <div class="container">
        <br/>
        <ol class="breadcrumb">
            <li><a href="<?= site_url() ?>"><?= lang('home') ?></a></li>
            <li class="active"><?= $data['blog']['category_name'] ?></li>
            <li class="active"><?= $data['blog']['name'] ?></li>
        </ol>
    </div>
    <div class="container">
        <h1 class="text-center"><?= $data['blog']['name'] ?></h1>
        <div class="extranews_separator"></div>
        <?= $data['blog']['content'] ?>
        <div class="pull-right">
            <i class="fa fa-clock-o"></i> <?= $data['blog']['date_modifiled'] ?>
            <i class="fa fa-user"></i> <?= $data['blog']['user_modifiled']['first_name'].' '.$data['blog']['user_modifiled']['last_name'] ?>
        </div>
        <div class="extranews_separator"></div>
    </div>
    <!--blog relate-->
    <div class="container">
        <div class="row">
            <h2 class="text-center">Bài viết khác</h2>
            <?php foreach ($data['blog_relate'] as $item): ?>
                <div class="col-sm-3">
                    <div class="thumbnail" style="height:270px">
                        <img style="height: 175px;" class="img-responsive" src="<?= $item['image'] ?>"/>
                        <p style="font-size:17px;"><a class="link-dich-vu" href="<?= site_url($item['router_name'].'.html') ?>"><?= getExcerpt($item['name'],0,80) ?></a></p>
                        <p style="color: #898B8B"><i class="fa fa-clock-o"></i> <?= $item['date_modifiled'] ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
<?php include 'ketoan/views/footer.php'; ?>