<!doctype html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <style>
    body {
        font-family: Arial;
        margin: 0;
        background-color: #fff;
    }

    * {
        box-sizing: border-box;
    }

    img {
        vertical-align: middle;
    }

    /* Position the image container (needed to position the left and right arrows) */
    .containers {
        position: relative;
    }

    /* Hide the images by default */
    .mySlides {
        display: none;
    }

    /* Add a pointer when hovering over the thumbnail images */
    .cursor {
        cursor: pointer;
    }
    .content_room{
        font-size: 17px!important;
    }
    /* Next & previous buttons */
    .prev,
    .next {
        cursor: pointer;
        position: absolute;
        top: 15%;
        width: auto;
        padding: 16px;
        margin-top: -50px;
        color: white;
        font-weight: bold;
        font-size: 20px;
        border-radius: 0 3px 3px 0;
        user-select: none;
        -webkit-user-select: none;
    }

    /* Position the "next button" to the right */
    .next {
        right: 0;
        border-radius: 3px 0 0 3px;
    }

    /* On hover, add a black background color with a little bit see-through */
    .prev:hover,
    .next:hover {
        background-color: rgba(0, 0, 0, 0.8);
    }

    /* Number text (1/3 etc) */
    .numbertext {
        color: #f2f2f2;
        font-size: 12px;
        padding: 8px 12px;
        position: absolute;
        top: 0;
    }

    /* Container for image text */
    .caption-container {
        text-align: center;
        background-color: #222;
        padding: 2px 16px;
        color: white;
    }

    .row:after {
        content: "";
        display: table;
        clear: both;
    }

    /* Six columns side by side */
    .column {
        float: left;
        width: 20%;
    }

    /* Add a transparency effect for thumnbail images */
    .demo {
        opacity: 0.6;
    }

    .active,
    .demo:hover {
        opacity: 1;
    }

    div.tieude_giua {
        color: #02355e;
        font-size: 14px;
        margin-top: 190px;
        text-transform: uppercase;
        text-align: center;
        font-size: 25px;
        position: relative;
        margin-bottom: 20px;
    }

    div.tieude_giua:before {
        content: '';
        height: 2px;
        width: 60px;
        left: 50%;
        bottom: -5px;
        margin-left: -30px;
        background: #02355e;
        position: absolute;
    }

    .product_info {
        list-style: none;
        padding: 10px 10px;
    }

    .product_info li.ten {
        color: #02355e;
        font-size: 18px;
        text-transform: uppercase;
    }

    .product_info li {
        font-size: 13px;
        border-bottom: 1px solid #02355e;
        padding: 10px 0;
        margin: 0 40px;
    }

    .product_info .content_room ul>li {
        font-size: 16px;
        border: none;
        padding: 10px 0;
        margin: 0 40px;
    }

    .product_info li.gia {
        font-size: 16px;
        font-weight: 700;
        position: relative;
    }

    .product-grid {
        display: grid;
        grid-gap: 30px;
        margin-top: 20px;
        grid-template-columns: repeat(3, 1fr);
    }

    .pr-box {
        position: relative;
        overflow: hidden;
    }

    .pr-box>a {
        display: block;
        border-bottom: 5px solid #f6cc2d;
        text-align: center;
        position: relative;
    }

    .pr-box img {
        object-fit: cover;
        width: 100%;
        height: 19.5vw;
    }

    .pr-box h3 {
        font-size: 18px;
        background-color: rgba(105, 52, 0, 0.5);
        color: #f6cc2d;
        margin: 0;
        padding: 1em;
        position: absolute;
        width: 100%;
        text-transform: uppercase;
        bottom: 0;
    }

    .content-some-product {
        position: relative;
        z-index: 5;
        margin: 1em 40px;
        padding: 10px;
    }

    #footer {
        position: relative;
        width: 100%;
        padding: 1em 0;
        background: #0e0e0e;
        z-index: 20;
        text-align: center;
    }

    #footer>.container {
        width: 1230px;
        position: relative;
    }

    .ws_pause {
        background-image: url(/starx/uploads/website/pause.png);
    }

    .ws_play {
        background-image: url(/starx/uploads/website/play.png);
    }

    .controls {
        width: 3.8em;
        height: 3.8em;
        outline: none;
        cursor: pointer;
        border: none;
        background-color: transparent;
        margin-top: -1.9em;
        background-size: 100%;
    }

    .com-name {
        font-size: 36px;
        font-weight: 700;
        background: linear-gradient(to right, rgba(246, 203, 45, 1) 0%, rgba(255, 230, 140, 1) 50%, rgba(246, 203, 45, 1) 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#f6cb2d', endColorstr='#f6cb2d', GradientType=1);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        font-family: 'Playfair Display', serif;
        margin: 5px 5px;
    }

    .com-field {
        font-size: 21px;
        background: rgba(246, 203, 45, 1);
        background: -moz-linear-gradient(left, rgba(246, 203, 45, 1) 0%, rgba(255, 230, 140, 1) 50%, rgba(246, 203, 45, 1) 100%);
        background: -webkit-gradient(left top, right top, color-stop(0%, rgba(246, 203, 45, 1)), color-stop(50%, rgba(255, 230, 140, 1)), color-stop(100%, rgba(246, 203, 45, 1)));
        background: -webkit-linear-gradient(left, rgba(246, 203, 45, 1) 0%, rgba(255, 230, 140, 1) 50%, rgba(246, 203, 45, 1) 100%);
        background: -o-linear-gradient(left, rgba(246, 203, 45, 1) 0%, rgba(255, 230, 140, 1) 50%, rgba(246, 203, 45, 1) 100%);
        background: -ms-linear-gradient(left, rgba(246, 203, 45, 1) 0%, rgba(255, 230, 140, 1) 50%, rgba(246, 203, 45, 1) 100%);
        background: linear-gradient(to right, rgba(246, 203, 45, 1) 0%, rgba(255, 230, 140, 1) 50%, rgba(246, 203, 45, 1) 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#f6cb2d', endColorstr='#f6cb2d', GradientType=1);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        font-family: 'Playfair Display', serif;
    }

    .ks3sao {
        font-size: 16px;
        font-weight: 700;
        margin-top: 2em;
        background: rgba(246, 203, 45, 1);
        background: -moz-linear-gradient(left, rgba(246, 203, 45, 1) 0%, rgba(255, 230, 140, 1) 50%, rgba(246, 203, 45, 1) 100%);
        background: -webkit-gradient(left top, right top, color-stop(0%, rgba(246, 203, 45, 1)), color-stop(50%, rgba(255, 230, 140, 1)), color-stop(100%, rgba(246, 203, 45, 1)));
        background: -webkit-linear-gradient(left, rgba(246, 203, 45, 1) 0%, rgba(255, 230, 140, 1) 50%, rgba(246, 203, 45, 1) 100%);
        background: -o-linear-gradient(left, rgba(246, 203, 45, 1) 0%, rgba(255, 230, 140, 1) 50%, rgba(246, 203, 45, 1) 100%);
        background: -ms-linear-gradient(left, rgba(246, 203, 45, 1) 0%, rgba(255, 230, 140, 1) 50%, rgba(246, 203, 45, 1) 100%);
        background: linear-gradient(to right, rgba(246, 203, 45, 1) 0%, rgba(255, 230, 140, 1) 50%, rgba(246, 203, 45, 1) 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#f6cb2d', endColorstr='#f6cb2d', GradientType=1);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        text-transform: uppercase;
        position: relative;
        font-family: 'Playfair Display', serif;
    }

    .ks3sao:before {
        content: url(/starx/uploads/website/ft-tit.png);
        position: absolute;
        left: 50%;
        top: -30px;
        transform: translateX(-50%);
    }

    .pr-box .info {
        position: absolute;
        text-align: center;
        transition: 0.3s;
        width: 100%;
        height: 100%;
        top: -100%;
        left: 0;
        background: rgba(105, 52, 0, .89);
        color: #eba966;
        padding-top: 4em;
    }

    .pr-name {
        font-size: 18px;
        text-transform: uppercase;
    }

    .pr-desc {
        font-size: 14px;
    }

    .pr-box .info p {
        position: relative;
    }

    .pr-box .btnxemphong {
        font-size: 14px;
        color: #f6cc2d;
        display: inline-block;
        border-radius: 25px;
        border: 1px solid #f6cc2d;
        padding: 1em 2em;
        line-height: 1;
        margin-top: 1em;
        transition: .2s;
    }

    .pr-box:hover .info {
        top: 0;
    }

    .info>p {
        color: red;
        font-weight: 600;
        font-size: 18px;
    }

    .copyright {
        font-size: 13px;
        position: relative;
        padding: 0.7em 0;
        background: #0e0e0e;
    }

    .copyright .text {
        color: #fff;
        font-size: 13px;
        padding: 5.2px 0;
        text-align: center;
    }

    #header {
        background-color: #02355e;
        width: 100%;
        left: 0;
    }

    .hd-top {
        position: relative;
        z-index: 5000;
    }

    .logo {
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        top: 0;
    }

    .logo img {
        max-height: 110px;
    }

    .hd-info {
        display: flex;
        justify-content: flex-end;
        align-items: center;
        height: 60px;
    }

    .hd-info>a {
        position: relative;
        color: #fff;
        font-family: 'Lato', sans-serif;
        font-weight: 700;
        display: flex;
        align-items: center;
        padding-left: 22px;
        transition: .2s;
    }

    .hd-info>a:hover {
        color: #ff0;
    }

    .nav-bg {
        position: relative;
        width: 100%;
        left: 0;
        z-index: 400;
        padding-bottom: 37px;
    }

    .clsindex .nav-bg {}

    .nav-bg:before {
        /* content:""; */
        position: absolute;
        /* height: 2px; */
        /* width: 100%; */
        left: 0;
        top: -40px;
    }

    .main-nav {
        position: relative;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .main-nav ul li:not(.has-menu)>ul {
        display: none;
        position: absolute;
        width: 240px;
        -ms-filter: "progid:DXImageTransform.Microsoft.Shadow(Strength=17, Direction=135, Color=#000000)";
        -moz-box-shadow: 1px 1px 17px 2px rgba(0, 0, 0, 0.3);
        -webkit-box-shadow: 1px 1px 17px 2px rgba(0, 0, 0, 0.3);
        box-shadow: 1px 1px 17px 2px rgba(0, 0, 0, 0.3);
        filter: progid:DXImageTransform.Microsoft.Shadow(Strength=17, Direction=135, Color=#000000);
        left: 1.5em;
    }

    .main-nav ul li:not(.has-menu)>ul:empty {
        box-shadow: none
    }

    .main-nav ul li:last-child ul {}

    body {
        font-family: 'Playfair Display', serif;
        font-size: 14px;
        line-height: 1.5;
    }

    .main-nav ul ul ul {
        left: 100% !important;
        top: 0 !important;
    }

    .main-nav ul ul li:not(:last-child) {}

    .main-nav>li:hover>ul {}

    .main-nav ul li a {
        text-decoration: none;
    }

    .main-nav>ul>li>a {
        display: flex;
        position: relative;
        align-items: center;

        /* text color */
        padding: 9px 0.5em;
        text-align: center;
        color: #fff;
        /* text color */
        font-size: 14px;
        /* drop shadow */
        text-transform: uppercase;
    }

    .main-nav>ul>li>a:after {
        /* content:""; */
        width: 1px;
        height: 14px;
        position: absolute;
        top: 50%;
        right: -1px;
        background-color: #2d9bf7;
        transform: translateY(-50%);
    }

    .main-nav>ul>li>a:hover:before,
    .main-nav>ul>li.active>a:before {
        background-color: #f00;
    }

    .main-nav>ul>li>a:hover,
    .main-nav>ul>li.active>a {
        color: #ff0;
    }

    .main-nav ul ul li:not(:last-child) {
        border-bottom: 1px dotted #c3bebe;
    }

    .main-nav ul ul li a {
        display: block;
        color: #333;
        position: relative;
        padding: 6px 10px;
        font-size: 1.1em;
    }

    .main-nav ul ul li a:before {
        content: "\f105";
        font-size: 15px;
        margin-right: 5px;
        position: relative;
        top: 0px;
        color: #000;
        font-weight: 700;
        font-family: Font Awesome\ 5 Free;
    }

    .main-nav ul ul li:hover {
        background: hsl(0, 88%, 45%);
    }

    .main-nav ul ul li:hover>a,
    .main-nav ul ul li:hover>a:before {
        color: #fff
    }

    .main-nav ul {
        list-style-type: none;
        margin: 0;
    }

    .main-nav>ul {
        position: relative;
        z-index: 5;
        /* flex: 1; */
        display: flex;
        flex-wrap: nowrap;
        align-items: center;
        justify-content: space-around;
    }

    .main-nav li {
        position: relative;
        text-align: left;
    }

    .main-nav>ul>li {
        position: relative;
        z-index: 5;
        /* padding: 0; */
    }

    .main-nav>ul>li.active,
    .main-nav>ul>li:hover {}

    .main-nav>ul>li:not(:last-child):not(.has-sub):after {
        /* content: ""; */
        position: absolute;
        right: -4px;
        top: 50%;
        transform: translateY(-50%);
        width: 8px;
        height: 8px;
        background: #d80e0e;
        border-radius: 50%;
    }

    .main-nav>ul>li.active:before {}

    .main-nav li:hover>ul {
        opacity: 1;
        top: 100%;
        visibility: visible;
        display: block !important;
        background: #fff;
    }

    .hd-info a.tuvan:before {
        content: url(/starx/uploads/website/timer.png);
        position: absolute;
        left: 0;
        top: 3px;
    }

    .hd-info a.datphong {
        padding-left: 26px;
        margin-right: 20px;
    }

    .hd-info a.datphong:before {
        content: url(/starx/uploads/website/datban.png);
        position: absolute;
        left: 0;
        top: 1px;
    }

    .hd-info>a+a {
        margin-left: 2em;
    }

    .mn-left {
        width: 40%;
    }

    .mn-right {
        width: 40%;
    }

    .loaiphong-bg {
        padding: 3em 0;
    }

    .blink_me {
        animation: blinker 1s linear infinite;
    }

    @keyframes blinker {
        50% {
            opacity: 0;
        }
    }
    .box-container{
        margin: 0.5em 5em;
    }
    .box-container .content {
        padding: 10px 0px;
    }
    .gioithieu-heading{
        font-size: 20px; 
        color: #000080; 
        font-weight: 600;
        font-family: arial, helvetica, sans-serif;
    }
    </style>
    <link rel="icon" type="image/*" href="<?php echo base_url() . 'uploads/website/' . $this->db->get_where('setting', array('name' => 'favicon'))->row()->content;?>">
    <title>D???ch v???</title>
</head>

<body>

    <div id="header" class="" style="position: fixed; top: 0px; z-index: 99;">
        <div class="container">
            <div class="hd-top">
                <a href="" class="logo"><img
                        src="<?php echo base_url(); ?>uploads/website/<?php echo $this->db->get_where('setting', array('name' => 'favicon'))->row()->content;?>"
                        alt="logo"></a>
                <div class="hd-info">
                    <a href="/starx/login" class="tuvan">????ng nh???p</a>
                    <a href="/starx/datphong" class="datphong">?????t ph??ng</a>
                </div>
                <!--END #lang-->
            </div>
        </div>
        <div class="nav-bg">
            <div class="main-nav">
                <ul class="mn-left">
                    <li class=""><a href="/starx/home">Trang ch???</a></li>
                    <li class=""><a href="/starx/gioithieu">Gi???i thi???u</a> </li>
                    <li class=""><a href="/starx/loaiphong">Lo???i ph??ng</a> </li>
                </ul>
                <ul class="mn-right">
                    <li class="active"><a href="/starx/dichvu">D???ch v???</a></li>
                    <li class=""><a href="/starx/tuyendung">Tuy???n d???ng</a></li>
                    <li class=""><a href="/starx/lienhe">Li??n h???</a></li>
                </ul>
            </div>
        </div>
    </div>
    </div>
    <div class="tieude_giua">
                <?php echo "D???CH V???";?>
    </div>
    <div class="box-container">
        <div class="wap_box_new">
            <div class="box_news">
                <a href="<?php echo base_url(); ?>dichvu/khachsan" title="PH??NG KH??CH S???N 3 SAO SANG TR???NG HI???N ?????I">
                    <img src="<?php echo base_url(); ?>uploads/website/img_33667370_380x280.jpeg" alt="PH??NG KH??CH S???N 3 SAO SANG TR???NG HI???N ?????I">
                </a>
                <h3>
                    <a href="<?php echo base_url(); ?>dichvu/khachsan" title="PH??NG KH??CH S???N 3 SAO SANG TR???NG HI???N ?????I">PH??NG KH??CH S???N 3 SAO SANG TR???NG HI???N ?????I</a>
                </h3>
                <div class="mota">
                    T???i <?php echo $this->db->get_where('setting', array('name' => 'system_name'))->row()->content;?> Hotel, m???i s??? c??? g???ng ?????u nh???m m???c ????ch khi???n cho du kh??ch h??i l??ng. 
                    ????? l??m ???????c ??i???u ????, kh??ch s???n s??? cung c???p d???ch v??? v?? ti???n nghi t???t nh???t.
                </div>
                <div class="clear"></div>
            </div>
            <div class="box_news">
                <a href="<?php echo base_url(); ?>dichvu/letan" title="QU???Y L??? T??N">
                    <img src="<?php echo base_url(); ?>uploads/website/untitled_panorama14870_380x280.jpg" alt="QU???Y L??? T??N">
                </a>
                <h3>
                    <a href="<?php echo base_url(); ?>dichvu/letan" title="QU???Y L??? T??N">QU???Y L??? T??N</a>
                </h3>
                <div class="mota">
                <?php echo $this->db->get_where('setting', array('name' => 'system_name'))->row()->content;?> Hotel ???????c kh??nh th??nh v?? ch??nh th???c ho???t ?????ng v???i ?????i ng?? nh??n vi??n hi???n nay g???n 60 ng?????i. T???a l???c t???i trung t??m qu???n Hai B?? Tr??ng, H?? N???i, m???t ti???n ???????ng Tr???n ?????i Ngh??a v???i v??? tr?? ?????c ?????a ???????c ????ng ?????o kh??ch h??ng kh??ng ch??? trong n?????c m?? c??n ngo??i n?????c quan t??m v?? ????n nh???n.
                </div>
                <div class="clear"></div>
            </div>
            <div class="box_news">
                <a href="<?php echo base_url(); ?>dichvu/spa" title="PH??NG TH?? GI??N SPA- MASSAGE">
                    <img src="<?php echo base_url(); ?>uploads/website/dsc_36723933_380x280.jpg" alt="PH??NG TH?? GI??N SPA- MASSAGE">
                </a>
                <h3>
                    <a href="<?php echo base_url(); ?>dichvu/spa" title="PH??NG TH?? GI??N SPA- MASSAGE">PH??NG TH?? GI??N SPA- MASSAGE</a>
                </h3>
                <div class="mota">
                Massage l?? m???t h??nh th???c d???ch v??? gi??p ch??m s??c s???c kh???e v?? tinh th???n 1 c??ch hi???u qu???, gi???i t???a ??p l???c v?? c??ng th???ng trong cu???c s???ng,
                L?? c??ch n???p l???i n??ng l?????ng cho tinh th???n sau chu???i ng??y d??i b???n r???n, c?? th??? n??i Spa- Massage l?? m???t d???ch v??? kh??ng th??? thi???u trong x?? h???i hi???n ?????i ng??y nay
                </div>
                <div class="clear"></div>
            </div>
            <div class="box_news">
                <a href="<?php echo base_url(); ?>dichvu/hoinghi" title="PH??NG H???I NGH???">
                    <img src="<?php echo base_url(); ?>uploads/website/img-51215506_380x280.jpg" alt="PH??NG H???I NGH???">
                </a>
                <h3>
                    <a href="<?php echo base_url(); ?>dichvu/hoinghi" title="PH??NG H???I NGH???">PH??NG H???I NGH???</a>
                </h3>
                <div class="mota">
                Cho thu?? Ph??ng h???i ngh??? h???i th???o t???i H?? N???i v???i ?????ng c???p 3 sao, <?php echo $this->db->get_where('setting', array('name' => 'system_name'))->row()->content;?> Hotel t??? tin gi??p b???n t??? ch???c m???t ch????ng tr??nh th??nh c??ng.
                </div>
                <div class="clear"></div>
            </div>
        
        </div>
    </div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.6048462923036!2d105.84898491540204!3d21.00847129384534!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab8abddeccaf%3A0x7bc7e1629266862f!2zMSDEkOG6oWkgQ-G7kyBWaeG7h3QsIEPhuqd1IEThu4FuLCBIYWkgQsOgIFRyxrBuZywgSMOgIE7hu5lpLCBWaWV0bmFt!5e0!3m2!1sen!2s!4v1674117718457!5m2!1sen!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

    <footer id="footer">
        <div class="container-footer">
            <p class="com-name">StarX</p>
            <p class="com-field">Hotel - Service - Profession</p>
            <p class="ks3sao">KH??CH S???N 3 SAO</p>
        </div>
        <div class="copyright">
            <div class="ft-wrap">
                <p class="text">Copyright ?? 2023 StarX Hotel. Design by Hoang Dv.</p>
            </div>
        </div>
    </footer>
<style>
    .wap_box_new {
    display: -webkit-flex;
    display: -moz-flex;
    display: -ms-flex;
    display: -o-flex;
    display: flex;
    justify-content: space-between;
    -webkit-flex-wrap: wrap;
    -moz-flex-wrap: wrap;
    -ms-flex-wrap: wrap;
    -o-flex-wrap: wrap;
    flex-wrap: wrap;
    }
    .box_news {
    padding: 1.5%;
    border: 1px solid #dedede;
    width: 49%;
    vertical-align: top;
    margin: 20px 0;
    }
    .box_news a img {
    float: left;
    width: 40%;
    max-width: 170px !important;
    transition: 1s;
    margin-right: 15px;
    height: auto;
    }
    .box_news a img:hover{
        opacity: 0.4;
    }
    .box_news h3 a {
    font-size: 15px;
    color: #1f1f1f;
    margin: 5px 0;
    transition: 0.4s;
    text-decoration: none;
    display: block;
    }
    .box_news h3 a:hover{
        color: red;
    }
    .box_news h3 {
    margin: 0;
    font-weight: 700;
    }
    .box_news .mota {
    line-height: 1.7;
    }
    .clear {
    clear: both;
    }   
</style>
</body>