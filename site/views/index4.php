<!DOCTYPE html>
<html>
<head>
    <title>Thiết kế website chuyên nghiệp - đa dạng</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Include All CSS -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('site/views/css/bootstrap.css') ?>"/>
    <link rel="stylesheet" type="text/css" href="<?= base_url('site/views/css/prettyPhoto.css') ?>"/>
    <link rel="stylesheet" type="text/css" href="<?= base_url('site/views/css/rticons.css') ?>"/>
    <link rel="stylesheet" type="text/css" href="<?= base_url('site/views/css/settings.css') ?>"/>
    <link rel="stylesheet" type="text/css" href="<?= base_url('site/views/css/font-awesome.min.css') ?>"/>
    <link rel="stylesheet" type="text/css" href="<?= base_url('site/views/css/js-image-slider.css') ?>"/>
    <link rel="stylesheet" type="text/css" href="<?= base_url('site/views/css/preset.css') ?>"/>
    <link rel="stylesheet" type="text/css" href="<?= base_url('site/views/css/style.css') ?>"/>
    <link rel="stylesheet" type="text/css" href="<?= base_url('site/views/css/responsive.css') ?>"/>
    <link rel="stylesheet" type="text/css" href="<?= base_url('site/views/css/animate.css') ?>"/>
    <link id="layout" rel="stylesheet" type="text/css" href="<?= base_url('site/views/css/colorpreset/wide.css') ?>"/>
    <link id="colorChem" rel="stylesheet" type="text/css"
          href="<?= base_url('site/views/css/colorpreset/light.css') ?>"/>
    <link rel="stylesheet" type="text/css" href="<?= base_url('site/views/css/colorpreset/color3.css') ?>"/>

    <!-- Favicon Icon -->
    <link rel="icon" type="image/png" href="<?= base_url('site/views/images/favicon.png') ?>">
    <!-- Favicon Icon -->

    <!--[if lt IE 9]>
    <script src="<?= base_url('site/views/js/html5shiv.js')?>"></script>
    <![endif]-->
</head>
<body>
<!-- Start Loader -->
<div class="loaderWrap">
    <div id='loader'>
        <div class='diamond'></div>
        <div class='diamond'></div>
        <div class='diamond'></div>
    </div>
</div>
<!-- End Loader -->
<!--================= Box Div Start ==================-->
<div class="boxWrapper">
    <!--================= Box Div Start ==================-->
    <!-- Header Area -->
    <header class="headerArea">
        <div class="logo pull-left">
<!--            <div class="logoImg">-->
<!--                <a href="index.html"><img src="--><?//= base_url('site/views/images/logo.png') ?><!--" alt=""></a>-->
<!--            </div>-->
            <h2><a href="/">bukt<span>.info</span></a></h2>
        </div>
        <nav class="mainMenu pull-left">
            <div class="menuButton hidden-lg hidden-md">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <ul>
<!--                <li class="active hasChild"><a href="index.html">Home</a>-->
<!--                    <ul class="dropMenu">-->
<!--                        <li><a href="index.html">Home One</a></li>-->
<!--                        <li><a href="index2.html">Home Two</a></li>-->
<!--                        <li><a href="index3.html">Home Three</a></li>-->
<!--                        <li><a href="index4.html">Home Four</a></li>-->
<!--                        <li><a href="dark-2.html">Dark Version</a></li>-->
<!--                        <li><a href="box.html">Box Version</a></li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--                <li class="hasChild"><a href="folio1.html">Gallery</a>-->
<!--                    <ul class="dropMenu">-->
<!--                        <li><a href="folio1.html">Folio 1</a></li>-->
<!--                        <li><a href="folio2.html">Folio 2</a></li>-->
<!--                        <li><a href="folio2.html">Folio 3</a></li>-->
<!--                        <li><a href="folioSingle.html">Folio Single</a></li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--                <li class="hasChild"><a href="blogGrid.html">Blog</a>-->
<!--                    <ul class="dropMenu">-->
<!--                        <li><a href="blogGrid.html">Blog Grid</a></li>-->
<!--                        <li><a href="blogSidebar.html">Blog Sidebar</a></li>-->
<!--                        <li><a href="blogSingle.html">Blog Single</a></li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--                <li class="hasChild"><a href="#">Pages</a>-->
<!--                    <ul class="dropMenu">-->
<!--                        <li><a href="member.html">member</a></li>-->
<!--                        <li><a href="404.html">404</a></li>-->
<!--                        <li class="hasChild"><a href="event.html">event</a>-->
<!--                            <ul class="dropSub">-->
<!--                                <li><a href="event.html">Event</a></li>-->
<!--                                <li><a href="eventSingle.html">Event Single</a></li>-->
<!--                            </ul>-->
<!--                        </li>-->
<!--                    </ul>-->
<!--                </li>-->
                <li><a href="<?= base_url() ?>">Trang chủ</a></li>
                <li><a href="#">Bảng giá</a></li>
                <li><a href="#">Mẫu website</a></li>
                <li><a href="#">Liên hệ</a></li>
            </ul>
        </nav>
        <div class="topSocial pull-right">
            <ul>
                <li><a class="facebook" href="http://fb.com/trankhanhtoan321"><i class="fa fa-facebook"></i></a></li>
<!--                <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>-->
<!--                <li><a class="google" href="#"><i class="fa fa-google"></i></a></li>-->
            </ul>
        </div>
        <div class="clearfix"></div>
    </header>

    <!-- Slider Section -->
    <section class="sliderArea home3" data-currentslide="activRev_1">
        <div class="tp-banner1">
            <ul>
                <li data-transition="slotslide-horizontal" data-slotamount="7" data-masterspeed="1000">
                    <img src="<?= base_url('site/views/images/home1/slider3.jpg') ?>" alt="slidebg1" data-bgfit="cover"
                         data-bgposition="left top" data-bgrepeat="no-repeat">
                    <div class="tp-caption lightgrey_divider lft fadeout"
                         data-x="left"
                         data-y="235"
                         data-speed="1400"
                         data-start="1300"
                         data-easing="Power4.easeOut">
                        <p class="redCaption">BUKT.INFO</p>
                    </div>
                    <div class="tp-caption lightgrey_divider lfr fadeout"
                         data-x="left"
                         data-y="266"
                         data-speed="1400"
                         data-start="1300"
                         data-easing="Power4.easeOut">
                        <h1 class="headCaption"><span>Responsive</span></h1>
                    </div>
                    <div class="tp-caption lightgrey_divider lfl fadeout"
                         data-x="left"
                         data-y="395"
                         data-speed="1400"
                         data-start="1300"
                         data-easing="easeInOutElastic">
                        <p class="capItalic" style="font-size:35px;font-family:Tahoma;line-height: 40px;">
                            Website thân thiên với thiết bị di động là <br/>
                            một xu hướng tất yếu hiện nay.
                        </p>
                    </div>
                    <div class="tp-caption lightgrey_divider lfb fadeout"
                         data-x="left"
                         data-y="460"
                         data-speed="1400"
                         data-start="1300"
                         data-easing="Power4.easeOut">
                        <a href="#" class="sliderBtn"><i class="icon-bulb"></i><span>Tìm hiểu thêm</span></a>
                    </div>
                    <div class="tp-caption lightgrey_divider lft fadeout resFix"
                         data-x="right"
                         data-y="75"
                         data-speed="1400"
                         data-start="1300"
                         data-easing="easeOutBack">
                        <div class="sliderImg three">
                            <img src="<?= base_url('site/views/images/home3/sldCap3.png')?>" alt="ThemeWar">
                        </div>
                    </div>
                </li>
                <li data-transition="boxslide" data-slotamount="7" data-masterspeed="1000">
                    <img src="<?= base_url('site/views/images/home1/slider1.jpg')?>" alt="slidebg1" data-bgfit="cover" data-bgposition="left top"
                         data-bgrepeat="no-repeat">
                    <div class="tp-caption lightgrey_divider lft fadeout"
                         data-x="left"
                         data-y="235"
                         data-speed="1400"
                         data-start="1300"
                         data-easing="Power4.easeOut">
                        <p class="redCaption">BUKT.INFO</p>
                    </div>
                    <div class="tp-caption lightgrey_divider lfr fadeout"
                         data-x="left"
                         data-y="266"
                         data-speed="1400"
                         data-start="1300"
                         data-easing="Power4.easeOut">
                        <h1 class="headCaption"><span>Website</span></h1>
                    </div>
                    <div class="tp-caption lightgrey_divider lfl fadeout"
                         data-x="left"
                         data-y="395"
                         data-speed="1400"
                         data-start="1300"
                         data-easing="easeInOutElastic">
                        <p class="capItalic" style="font-size:35px;font-family:Tahoma;line-height: 40px;">
                            Giải pháp kinh doanh online hiệu quả
                        </p>
                    </div>
                    <div class="tp-caption lightgrey_divider lfb fadeout"
                         data-x="left"
                         data-y="460"
                         data-speed="1400"
                         data-start="1300"
                         data-easing="Power4.easeOut">
                        <a href="#" class="sliderBtn"><i class="icon-bulb"></i><span>Tìm hiểu thêm</span></a>
                    </div>
                    <div class="tp-caption lightgrey_divider lft fadeout resFix"
                         data-x="right"
                         data-y="75"
                         data-speed="1400"
                         data-start="1300"
                         data-easing="easeOutBack">
                        <div class="sliderImg">
                            <img src="<?= base_url('site/views/images/home1/sldCap1.png')?>" alt="ThemeWar">
                        </div>
                    </div>
                </li>
                <li data-transition="curtain-3" data-slotamount="7" data-masterspeed="1000">
                    <img src="<?= base_url('site/views/images/home1/slider2.jpg')?>" alt="slidebg1" data-bgfit="cover" data-bgposition="left top"
                         data-bgrepeat="no-repeat">
                    <div class="tp-caption lightgrey_divider lft fadeout"
                         data-x="left"
                         data-y="235"
                         data-speed="1400"
                         data-start="1300"
                         data-easing="Power4.easeOut">
                        <p class="redCaption">BUKT.INFO</p>
                    </div>
                    <div class="tp-caption lightgrey_divider lfr fadeout"
                         data-x="left"
                         data-y="266"
                         data-speed="1400"
                         data-start="1300"
                         data-easing="Power4.easeOut">
                        <h1 class="headCaption"><span>Profesional</span></h1>
                    </div>
                    <div class="tp-caption lightgrey_divider lfl fadeout"
                         data-x="left"
                         data-y="395"
                         data-speed="1400"
                         data-start="1300"
                         data-easing="easeInOutElastic">
                        <p class="capItalic" style="font-size:35px;font-family:Tahoma;line-height: 40px;">
                            Website chuyên nghiệp và thân thiện với Google<br/>
                            là sứ mệnh của chúng tôi.
                        </p>
                    </div>
                    <div class="tp-caption lightgrey_divider lfb fadeout"
                         data-x="left"
                         data-y="460"
                         data-speed="1400"
                         data-start="1300"
                         data-easing="Power4.easeOut">
                        <a href="#" class="sliderBtn"><i class="icon-bulb"></i><span>Tìm hiểu thêm</span></a>
                    </div>
                    <div class="tp-caption lightgrey_divider lft fadeout resFix"
                         data-x="right"
                         data-y="75"
                         data-speed="1400"
                         data-start="1300"
                         data-easing="easeOutBack">
                        <div class="sliderImg two">
                            <img src="<?= base_url('site/views/images/home2/sldCap2.png')?>" alt="ThemeWar">
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!-- Testimonial Section -->
<!--    <section class="testiArea commonSection">-->
<!--        <div class="container">-->
<!--            <div class="row">-->
<!--                <div class="col-lg-10 col-lg-offset-1 col-sm-offset-1 col-sm-10 col-xs-12 text-center">-->
<!--                    <div class="singleTesti wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">-->
<!--                        <h2>People<img class="testiImg" src="--><?//= base_url('site/views/images/logoBig.png')?><!--" alt="">Top<span>Biz</span></h2>-->
<!--                    </div>-->
<!--                    <div class="quote wow fadeInUp" data-wow-duration="700ms" data-wow-delay="350ms">-->
<!--                        <p class="quotation">-->
<!--                            Lorem ipsum dolor siamet consetetur sadipscing elitr, sed diam-->
<!--                            nonumy eirmod tempor inviduntut labore et dolore magna aliquyam erat-->
<!--                        </p>-->
<!--                        <p class="name">- <span>Jason</span> Willis -</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->
    <!-- Feature Section -->
    <section class="featureArea commonSection" style="font-family: Tahoma">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6 col-xs-12 text-center wow fadeInUp" data-wow-duration="700ms"
                     data-wow-delay="300ms">
                    <div class="featureImg">
                        <img src="<?= base_url('site/views/images/home1/feature1.png')?>" alt="">
                    </div>
                    <div class="featureContent">
                        <h3><a href="#">Easy use</a></h3>
                        <p>Phần back-end quản trị website được thiết kế theo hướng người dùng với các giao diện và chức năng được tối ưu sử dụng.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-xs-12 text-center wow fadeInUp" data-wow-duration="700ms"
                     data-wow-delay="350ms">
                    <div class="featureImg">
                        <img src="<?= base_url('site/views/images/home1/feature2.png')?>" alt="">
                    </div>
                    <div class="featureContent">
                        <h3><a href="#">Better Design</a></h3>
                        <p>Website của bạn được chúng tôi trau chuốt, trải qua nhiều lần vận hành thử nghiệm và chỉnh sửa để cho đời sản phẩm ưng ý nhất.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-xs-12 text-center wow fadeInUp" data-wow-duration="700ms"
                     data-wow-delay="400ms">
                    <div class="featureImg">
                        <img src="<?= base_url('site/views/images/home1/feature3.png')?>" alt="">
                    </div>
                    <div class="featureContent">
                        <h3><a href="#">Responsive</a></h3>
                        <p>Giao diện tương thích với mọi màn hình là một trong những yêu cầu cần thiết hiện nay.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-xs-12 text-center wow fadeInUp" data-wow-duration="700ms"
                     data-wow-delay="450ms">
                    <div class="featureImg">
                        <img src="<?= base_url('site/views/images/home1/feature4.png')?>" alt="">
                    </div>
                    <div class="featureContent">
                        <h3><a href="#">24/7 Support</a></h3>
                        <p>Chúng tôi luôn bên bạn khi bạn cần hổ trợ các vấn đề về website.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Service Section -->
<!--    <section class="serviceArea commonSection">-->
<!--        <div class="overlay"></div>-->
<!--        <div class="container">-->
<!--            <div class="row">-->
<!--                <div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">-->
<!--                    <div class="singleService first">-->
<!--                        <div class="serviceContent pull-left text-right">-->
<!--                            <h4><a href="#">Web <span>Design</span></a></h4>-->
<!--                            <p>At vero eos et accusam et justo duo</p>-->
<!--                        </div>-->
<!--                        <div class="serviceIcon pull-right">-->
<!--                            <i class="icon-pen2"></i>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="singleService">-->
<!--                        <div class="serviceContent pull-left text-right">-->
<!--                            <h4><a href="#">Pure <span>Code</span></a></h4>-->
<!--                            <p>Dolores et ea rebum stet clita kasd</p>-->
<!--                        </div>-->
<!--                        <div class="serviceIcon pull-right">-->
<!--                            <i class="fa fa-code"></i>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="singleService">-->
<!--                        <div class="serviceContent pull-left text-right">-->
<!--                            <h4><a href="#">SEO <span>Research</span></a></h4>-->
<!--                            <p>Stet clita kasd gubergren no sea</p>-->
<!--                        </div>-->
<!--                        <div class="serviceIcon pull-right">-->
<!--                            <i class="icon-search3"></i>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="700ms" data-wow-delay="350ms">-->
<!--                    <div class="serviceImg">-->
<!--                        <img src="--><?//= base_url('site/views/images/home1/mobile.png')?><!--" alt="">-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="700ms" data-wow-delay="400ms">-->
<!--                    <div class="singleService first">-->
<!--                        <div class="serviceIcon pull-left">-->
<!--                            <i class="icon-bubble"></i>-->
<!--                        </div>-->
<!--                        <div class="serviceContent pull-right text-left">-->
<!--                            <h4><a href="#">Business <span>Consults</span></a></h4>-->
<!--                            <p>Takimata sanctus est lorem ipsum</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="singleService right">-->
<!--                        <div class="serviceIcon pull-left">-->
<!--                            <i class="icon-user3"></i>-->
<!--                        </div>-->
<!--                        <div class="serviceContent pull-right text-left">-->
<!--                            <h4><a href="#">Top <span>Management</span></a></h4>-->
<!--                            <p>Dolor sit amet. Lorem ipsum dolor sit</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="singleService">-->
<!--                        <div class="serviceIcon pull-left">-->
<!--                            <i class="icon-thumbs-up"></i>-->
<!--                        </div>-->
<!--                        <div class="serviceContent pull-right text-left">-->
<!--                            <h4><a href="#">Best <span>Support</span></a></h4>-->
<!--                            <p>Amet consetetur sadipscing elitr</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->
    <!-- Portfolio Section -->
    <section class="portfolioArea commonSection home3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-xs-12 text-center">
                    <h2 class="commonTittle wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">Mẫu website
                    </h2>
                    <p class="subTittle wow fadeInUp" data-wow-duration="700ms" data-wow-delay="350ms" style="font-family: Tahoma">Tổng hợp các mẫu website nổi bật của chúng tôi</p>
                </div>
            </div>
<!--            <div class="row">-->
<!--                <div class="col-lg-12 col-sm-12 col-xs-12">-->
<!--                    <ul class="folioBtn text-center wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">-->
<!--                        <li class="filter" data-filter="all">All</li>-->
<!--                        <li class="filter" data-filter="shop">Shop bán hàng</li>-->
<!--                        <li class="filter" data-filter="company">Web công ty</li>-->
<!--                        <li class="filter" data-filter="realestate">Bất động sản</li>-->
<!--                    </ul>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="row">-->
<!--                <div id="mixer">-->
<!--                    <div class="col-lg-4 col-sm-4 col-xs-12 text-center mix shop">-->
<!--                        <div class="folioImg2">-->
<!--                            <img src="--><?//= base_url('uploads/images/1.png')?><!--" alt="">-->
<!--                            <div class="folioHover2">-->
<!--                                <a href="--><?//= base_url('uploads/images/1.png')?><!--" class="prePhoto2" data-rel="prettyPhoto"><i-->
<!--                                        class="icon-search3"></i></a>-->
<!--                                <a href="--><?//= base_url('uploads/images/1.png')?><!--" class="detailsLink2"><i class="icon-location"></i></a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="portfolioDetails">-->
<!--                            <h3><a href="--><?//= base_url('uploads/images/1.png')?><!--">Mẫu 1</a></h3>-->
<!--<!--                            <p class="potCategory"><a href="#">Web Design</a><span>,</span><a href="#">Media</a></p>--
<!--<!--                            <p>-->
<!--<!--                                Consetetur sadipscing elitr, sed diam nonumy eirmod tempor.--
<!--<!--                            </p>-->
<!--                            <div class="clearfix"></div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-lg-4 col-sm-4 col-xs-12 text-center mix company">-->
<!--                        <div class="folioImg2">-->
<!--                            <img src="--><?//= base_url('site/views/images/home3/folio2.jpg')?><!--" alt="">-->
<!--                            <div class="folioHover2">-->
<!--                                <a href="--><?//= base_url('site/views/images/home3/folio2.jpg')?><!--" class="prePhoto2" data-rel="prettyPhoto"><i-->
<!--                                        class="icon-search3"></i></a>-->
<!--                                <a href="folio1.html" class="detailsLink2"><i class="icon-location"></i></a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="portfolioDetails">-->
<!--                            <h3><a href="folioSingle.html">Mẫu 2</a></h3>-->
<!--<!--                            <p class="potCategory"><a href="#">photography</a><span>,</span><a href="#">print</a></p>-->
<!--<!--                            <p>-->
<!--<!--                                At vero eos et accusam sto duo dolores et ea retet clita kasd.-->
<!--<!--                            </p>-->
<!--                            <div class="clearfix"></div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-lg-4 col-sm-4 col-xs-12 text-center mix shop">-->
<!--                        <div class="folioImg2">-->
<!--                            <img src="--><?//= base_url('site/views/images/home3/folio3.jpg')?><!--" alt="">-->
<!--                            <div class="folioHover2">-->
<!--                                <a href="--><?//= base_url('site/views/images/home3/folio3.jpg')?><!--" class="prePhoto2" data-rel="prettyPhoto"><i-->
<!--                                        class="icon-search3"></i></a>-->
<!--                                <a href="folio1.html" class="detailsLink2"><i class="icon-location"></i></a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="portfolioDetails">-->
<!--                            <h3><a href="folioSingle.html">Mẫu 3</a></h3>-->
<!--<!--                            <p class="potCategory"><a href="#">marketing</a><span>,</span><a href="#">branding</a></p>-->
<!--<!--                            <p>-->
<!--<!--                                Sanctus est lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.-->
<!--<!--                            </p>-->
<!--                            <div class="clearfix"></div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-lg-4 col-sm-4 col-xs-12 text-center mix company">-->
<!--                        <div class="folioImg2">-->
<!--                            <img src="--><?//= base_url('site/views/images/home3/folio4.jpg')?><!--" alt="">-->
<!--                            <div class="folioHover2">-->
<!--                                <a href="--><?//= base_url('site/views/images/home3/folio4.jpg')?><!--" class="prePhoto2" data-rel="prettyPhoto"><i-->
<!--                                        class="icon-search3"></i></a>-->
<!--                                <a href="folio1.html" class="detailsLink2"><i class="icon-location"></i></a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="portfolioDetails last">-->
<!--                            <h3><a href="folioSingle.html">Mẫu 4</a></h3>-->
<!--<!--                            <p class="potCategory"><a href="#">marketing</a><span>,</span><a href="#">branding</a></p>-->
<!--<!--                            <p>-->
<!--<!--                                Sanctus est lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.-->
<!--<!--                            </p>-->
<!--                            <div class="clearfix"></div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-lg-4 col-sm-4 col-xs-12 text-center mix realestate">-->
<!--                        <div class="folioImg2">-->
<!--                            <img src="--><?//= base_url('site/views/images/home3/folio5.jpg')?><!--" alt="">-->
<!--                            <div class="folioHover2">-->
<!--                                <a href="--><?//= base_url('site/views/images/home3/folio5.jpg')?><!--" class="prePhoto2" data-rel="prettyPhoto"><i-->
<!--                                        class="icon-search3"></i></a>-->
<!--                                <a href="folio1.html" class="detailsLink2"><i class="icon-location"></i></a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="portfolioDetails last">-->
<!--                            <h3><a href="folioSingle.html">Mẫu 5</a></h3>-->
<!--<!--                            <p class="potCategory"><a href="#">Web Design</a><span>,</span><a href="#">Media</a></p>-->
<!--<!--                            <p>-->
<!--<!--                                Consetetur sadipscing elitr, sed diam nonumy eirmod tempor.-->
<!--<!--                            </p>-->
<!--                            <div class="clearfix"></div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-lg-4 col-sm-4 col-xs-12 text-center mix realestate">-->
<!--                        <div class="folioImg2">-->
<!--                            <img src="--><?//= base_url('site/views/images/home3/folio6.jpg')?><!--" alt="">-->
<!--                            <div class="folioHover2">-->
<!--                                <a href="--><?//= base_url('site/views/images/home3/folio6.jpg')?><!--" class="prePhoto2" data-rel="prettyPhoto"><i-->
<!--                                        class="icon-search3"></i></a>-->
<!--                                <a href="folio1.html" class="detailsLink2"><i class="icon-location"></i></a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="portfolioDetails last">-->
<!--                            <h3><a href="folioSingle.html">Mẫu 6</a></h3>-->
<!--<!--                            <p class="potCategory"><a href="#">photography</a><span>,</span><a href="#">print</a></p>-->
<!--<!--                            <p>-->
<!--<!--                                At vero eos et accusam sto duo dolores et ea retet clita kasd.-->
<!--<!--                            </p>-->
<!--                            <div class="clearfix"></div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="clearfix"></div>-->
<!--                </div>-->
<!--            </div>-->
                <?php $this->load->view('demo') ?>
        </div>
    </section>

    <!-- Fun Facts Section -->
<!--    <section class="funFactArea commonSection">-->
<!--        <div class="allFacts">-->
<!--            <div class="singleFacts text-center wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">-->
<!--                <h1 class="mycounter" data-counter="42854">42<span>854</span></h1>-->
<!--                <p>happy clients</p>-->
<!--            </div>-->
<!--            <div class="singleFacts text-center wow fadeInUp" data-wow-duration="700ms" data-wow-delay="350ms">-->
<!--                <h1 class="mycounter" data-counter="3583">3<span>583</span></h1>-->
<!--                <p>project made</p>-->
<!--            </div>-->
<!--            <div class="singleFacts text-center wow fadeInUp" data-wow-duration="700ms" data-wow-delay="400ms">-->
<!--                <h1 class="mycounter" data-counter="34937">34<span>937</span></h1>-->
<!--                <p>comments</p>-->
<!--            </div>-->
<!--            <div class="singleFacts text-center wow fadeInUp" data-wow-duration="700ms" data-wow-delay="450ms">-->
<!--                <h1 class="mycounter" data-counter="21527">21527</h1>-->
<!--                <p>letters sent</p>-->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->
    <!-- Skill Section -->
<!--    <section class="skillArea commonSection">-->
<!--        <div class="overlay"></div>-->
<!--        <div class="container">-->
<!--            <div class="row">-->
<!--                <div class="col-lg-12 col-sm-12 col-xs-12 text-center">-->
<!--                    <h2 class="commonTittle white wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">-->
<!--                        Our<span>skills</span></h2>-->
<!--                    <p class="subTittle wow fadeInUp" data-wow-duration="700ms" data-wow-delay="350ms">Lorem ipsum dolor-->
<!--                        amet consetetur sadipscing elitr</p>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="row">-->
<!--                <div class="col-lg-4 col-sm-12 col-xs-12 text-center wow fadeInUp" data-wow-duration="700ms"-->
<!--                     data-wow-delay="300ms">-->
<!--                    <div class="singleSkill">-->
<!--                        <div class="skillOne cmskill" data-skills="0.9" data-gradientstart="#68c8c6"-->
<!--                             data-gradientend="#FBC877"><strong></strong></div>-->
<!--                        <p>html,css</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-lg-4 col-sm-12 col-xs-12 text-center wow fadeInUp" data-wow-duration="700ms"-->
<!--                     data-wow-delay="350ms">-->
<!--                    <div class="singleSkill">-->
<!--                        <div class="skillTwo cmskill" data-skills="0.95" data-gradientstart="#68c8c6"-->
<!--                             data-gradientend="#FBC877"><strong></strong></div>-->
<!--                        <p>wordpress</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-lg-4 col-sm-12 col-xs-12 text-center wow fadeInUp" data-wow-duration="700ms"-->
<!--                     data-wow-delay="400ms">-->
<!--                    <div class="singleSkill">-->
<!--                        <div class="skillThree cmskill" data-skills="0.63" data-gradientstart="#68c8c6"-->
<!--                             data-gradientend="#FBC877"><strong></strong></div>-->
<!--                        <p>photoshop</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->
    <!-- Blog Section -->
<!--    <section class="blogArea commonSection">-->
<!--        <div class="container">-->
<!--            <div class="row">-->
<!--                <div class="col-lg-12 col-sm-12 col-xs-12 text-center">-->
<!--                    <h2 class="commonTittle wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">recent<span>posts</span>-->
<!--                    </h2>-->
<!--                    <p class="subTittle wow fadeInUp" data-wow-duration="700ms" data-wow-delay="350ms">Sed diam nonumy-->
<!--                        eirmod tempor invidunt</p>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="row">-->
<!--                <div class="col-lg-6 col-sm-6 col-xs-12 text-center">-->
<!--                    <div class="blogCotent wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">-->
<!--                        <div class="postThumb first">-->
<!--                            <img src="--><?//= base_url('site/views/images/home1/blog1.jpg')?><!--" alt="">-->
<!--                            <div class="postDate">-->
<!--                                <h1>18</h1>-->
<!--                                <p>October</p>-->
<!--                                <a href="#">7 comments</a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="postContent">-->
<!--                            <h3><a href="blogSingle.html">Consetetur sadipscing elitr</a></h3>-->
<!--                            <p>-->
<!--                                Stet clita kasd gubergren no takimoata sanctus est lorem-->
<!--                                ipsum dolor sit amet lorem ipsum dolor sit amet.-->
<!--                            </p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-lg-6 col-sm-6 col-xs-12 text-center">-->
<!--                    <div class="blogCotent wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">-->
<!--                        <div class="postThumb right">-->
<!--                            <img src="--><?//= base_url('site/views/images/home1/blog2.jpg')?><!--" alt="">-->
<!--                            <div class="postDate">-->
<!--                                <h1>09</h1>-->
<!--                                <p>October</p>-->
<!--                                <a href="#">5 comments</a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="postContent">-->
<!--                            <h3><a href="blogSingle.html">Sed diam nonumy</a></h3>-->
<!--                            <p>-->
<!--                                Consetetur sadipscing elitr, sed diam nonumy eirmod tempor-->
<!--                                invidunt ut labore et dolore magna aliquyam erat,-->
<!--                                sed diam voluptua.-->
<!--                            </p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="blogCotent last wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">-->
<!--                        <div class="postThumb right">-->
<!--                            <img src="--><?//= base_url('site/views/images/home1/blog3.jpg')?><!--" alt="">-->
<!--                            <div class="postDate">-->
<!--                                <h1>02</h1>-->
<!--                                <p>October</p>-->
<!--                                <a href="#">12 comments</a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="postContent">-->
<!--                            <h3><a href="blogSingle.html">Eirmod tempor invidunt</a></h3>-->
<!--                            <p>-->
<!--                                At vero eos et accusam et justo duo dolores et ea rebum.-->
<!--                                cl gubergren no sea takimata sanctus est-->
<!--                            </p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->
<!--     Subscribe Section -->
<!--    <section class="subscribeArea">-->
<!--        <div class="container">-->
<!--            <div class="row">-->
<!--                <div class="col-lg-12 col-sm-12 col-xs-12 text-center">-->
<!--                    <div class="subsForm">-->
<!--                        <h4 class="wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">Sign up to <span>our newsletter</span>-->
<!--                        </h4>-->
<!--                        <form action="#" id="subscribeForm" method="post" class="wow fadeInUp" data-wow-duration="700ms"-->
<!--                              data-wow-delay="350ms">-->
<!--                            <input type="email" name="sub_email" id="subs_email">-->
<!--                            <button type="submit"><i class="icon-pen2"></i></button>-->
<!--                        </form>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->
    <!-- Footer Section -->
    <footer class="footerArea">
        <section class="footerTop commonSection">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-sm-12 col-xs-12 text-center">
                        <div class="footerContent">
                            <h2 class="wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">(+84) 163 663 4028</h2>
                            <a class="wow fadeInUp" data-wow-duration="700ms" data-wow-delay="350ms"
                               href="mailto:quantri@bukt.info">me@bukt.info</a>
                            <p class="wow fadeInUp" data-wow-duration="700ms" data-wow-delay="400ms" style="font-family: Tahoma">
                                56 Đường D2, Phường 25, Quận Bình Thạnh, Tp HCM
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="copyRight">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-sm-12 col-xs-12 text-center wow fadeInUp" data-wow-duration="700ms"
                         data-wow-delay="300ms">
                        <p>Copyright &copy; <?= date('Y') ?> by <a href="<?= base_url() ?>">BUKT</a></p>
                    </div>
                </div>
            </div>
        </section>
    </footer>
    <!--================= Box Div End ==================-->
</div>
<!--================= Box Div End ==================-->
<!--================= Back To Top ==================-->
<!--<a href="#" id="backto"><img src="--><?//= base_url('site/views/images/backto.png')?><!--" alt=""></a>-->

<!-- Include All JS -->
<script type="text/javascript" src="<?= base_url('site/views/js/jquery.js')?>"></script>
<script type="text/javascript" src="<?= base_url('site/views/js/bootstrap.js')?>"></script>
<script type="text/javascript" src="<?= base_url('site/views/js/jquery.prettyPhoto.js')?>"></script>
<script type="text/javascript" src="<?= base_url('site/views/js/mixer.js')?>"></script>
<script type="text/javascript" src="<?= base_url('site/views/js/appear.js')?>"></script>
<script type="text/javascript" src="<?= base_url('site/views/js/circle-progress.js')?>"></script>
<script type="text/javascript" src="<?= base_url('site/views/js/modernizr.custom.js')?>"></script>
<script type="text/javascript" src="<?= base_url('site/views/js/directionHover.js')?>"></script>
<script type="text/javascript" src="<?= base_url('site/views/js/js-image-slider.js')?>"></script>
<script type="text/javascript" src="<?= base_url('site/views/js/jquery.themepunch.tools.min.js')?>"></script>
<script type="text/javascript" src="<?= base_url('site/views/js/jquery.themepunch.revolution.min.js')?>"></script>
<script type="text/javascript" src="<?= base_url('site/views/js/wow.min.js')?>"></script>
<script type="text/javascript" src="<?= base_url('site/views/js/theme.js')?>"></script>
</body>
</html>
