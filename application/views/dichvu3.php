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
        margin: 0.5em 1em;
        padding: 40px;
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

    <title>PH??NG TH?? GI??N SPA- MASSAGE</title>
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
                <?php echo "PH??NG TH?? GI??N SPA- MASSAGE";?>
    </div>
    <div class="box-container">
        <div class="content">
            <div style="font-family:arial,helvetica,sans-serif; font-size: 18px;">
          
            <p style="text-align: center;">
                <img style="width:100%; height: auto;"src="<?php echo base_url(); ?>uploads/website/spa1.png" alt="<?php echo $this->db->get_where('setting', array('name' => 'system_name'))->row()->content;?> Hotel">
            </p>
            <br>
             <p style="text-align: center;">
                <img style="width:100%; height: auto;"src="<?php echo base_url(); ?>uploads/website/spa2.jpg" alt="<?php echo $this->db->get_where('setting', array('name' => 'system_name'))->row()->content;?> Hotel">
            </p>
            <br>
            </div>
            Massage <?php echo $this->db->get_where('setting', array('name' => 'system_name'))->row()->content;?> Hotel ??i ?????u trong ng??nh th?? gi??n t???i H?? N???i trong nhi???u n??m qua, Ch??ng t??i lu??n ch?? tr???ng ?????m b???o d???ch v??? t???t nh???t cho kh??ch h??ng. <br>
            + Ph??ng ???c ?????u t?? m???i ho??n to??n cu???i n??m 2018. Thi???t b??? hi???n ?????i, sang tr???ng, ?????ng c???p, kh??ng gian y??n t??nh, nh??? nh??ng, th?? th??i. <br>
            + ??u t??n, th????ng hi???u: Ho???t ?????ng h??n 10 n??m tr??n th??? tr?????ng, kho???ng th???i gian t???n t???i v?? ph??t tri???n ???? ????? ch???ng minh v??? ch???t l?????ng d???ch v???, ????? ??u t??n c???a m???t Doanh Nghi???p trong ??i???u ki???n kinh doanh c???c k??? c???nh tranh nh?? hi???n nay. <br>
            + <?php echo $this->db->get_where('setting', array('name' => 'system_name'))->row()->content;?> Hotel ch??? h?????ng ?????n ch??m s??c s???c kh???e v?? tinh th???n s???n kho??i th???t s??? cho kh??ch h??ng, lu??n lu??n n??i kh??ng v???i c??c d???ch v??? <b style="color:red;">KH??NG L??NH M???NH</b>.<br>
            + ?????i ng??? nh??n vi??n chuy??n nghi???p, nhi???t t??nh, vui v???. <br>
            <div style="line-height: 2;">
           <b>?????i v???i l??n da:</b>  Massage body th?????ng xuy??n c?? t??c d???ng k??ch th??ch tuy???n n???i ti???t ho???t ?????ng ???n ?????nh h??n, ?????ng th???i l??m gi???m l?????ng ch???t nh???n ti???t ra qua c??c l??? ch??n l??ng, gi??p b???n c?? m???t l??n da s??ng b??ng v?? kh???e m???nh h??n. <br>
        
           <b>?????i v???i h??? tu???n ho??n:</b>  Massage Body c?? t??c d???ng ?????c bi???t v???i c??c c?? quan nh?? tim. B???i khi massage, c??c ?????ng t??c vu???t, day ???n s??? l??m gi??n n??? m???ch l??m gi??p gi???m ??p l???c cho tim v?? tr???c ti???p th??c ?????y tu???n ho??n m??u nhanh h??n. <br style="margin-top:10px">


           <b>?????i v???i h??? c?? v?? kh???p x????ng:</b>  V???i nh???ng ?????ng t??c day ???n, mi???t d???c theo b?? c?? ???????c l???p ??i l???p l???i s??? nhanh ch??ng l??m bi???n m???t s??? c??ng th???ng v?? ??au nh???c ??? c??c ph???n c?? b???p, tr??? l???i cho b???n m???t c?? th??? d???o dai, tinh th???n sung m??n. <br style="margin-top:10px">


           <b>?????i v???i h??? ti??u h??a:</b>  C?? t??c d???ng t??ng c?????ng nhu ?????ng c???a d??? d??y, ru???t v?? c???i thi???n ch???c n??ng ti??u h??a. Khi ch???c n??ng ti???t d???ch ti??u h??a (d??? d??y, ru???t, gan) k??m, n??n k??ch th??ch m???nh ????? t??ng ti???t d???ch. Khi ti???t d???ch ti??u h??a v?????ng, k??ch th??ch v???a ho???c nh??? ????? gi???m ti???t d???ch. <br style="margin-top:10px">


           <b>?????i v???i qu?? tr??nh trao ?????i ch???t:</b>  Massage l??m t??ng l?????ng n?????c ti???u th???i ra nh??ng kh??ng thay ?????i pH trong m??u. Ng?????i ta cho r???ng 2, 3 ng??y sau khi massage, nit?? trong n?????c ti???u t??ng l??n v?? k??o d??i v??i ng??y, c?? th??? do t??c d???ng ph??n gi???i protid c???a massage g??y n??n. <br style="margin-top:10px">

            <br style="margin-top:10px">
            M???t ??u ??i???m r???t n???i b???t t??? massage v?? ?????c bi???t l?? massage body ???? ch??nh l?? c???m gi??c ???????c t???n h?????ng nh???ng gi??y ph??t th?? gi??n ????ch th???c. C??c gi??c quan c???a b???n s??? ngay l???p t???c ???????c ????nh th???c v???i ????i b??n tay ???m n??ng c???a chuy??n vi??n massage, k???t h???p v???i kh??ng gian th?? th??i: c?? ??nh s??ng chan h??a ???m c??ng, c?? m??i h????ng tinh d???u d???u nh??? c??ng ti???ng nh???c du d????ng, s??? mang ?????n cho tinh th???n c???a b???n m???t ???b???a ti???c??? ng???t ng??o v?? ??m ??i nh???t.
            </div>
            <br>
            <p style="font-weight: 600;">
                Th??ng tin li??n h???:
            </p>
            <p>
                <?php echo $this->db->get_where('setting', array('name' => 'system_name'))->row()->content;?> Hotel 3 sao
            </p>
            <p>
                ?????a ch???: <?php echo str_replace('<br>',' ',$this->db->get_where('setting', array('setting_id' => '6'))->row()->content);?>
            </p>
            <p>
                Tel: 098877663/ 0293897237
            </p>
            <p>
                Email: starx@starxhotel.com
            </p>
            <p>
                Website: <a href="www.starx.com">www.starx.com</a>
            </p>
            </div>
            <br>
             
            <div class="othernews">
                <div class="cactinkhac">Tin li??n quan</div>
                <ul class="khac">
                    <li><a href="<?php echo base_url(); ?>dichvu/khachsan" title="PH??NG KH??CH S???N"><i class="far fa-hand-point-right"></i>PH??NG KH??CH S???N</a> (14/2/2023)</li>
                    <li><a href="<?php echo base_url(); ?>dichvu/letan" title="QU???Y L??? T??N"><i class="far fa-hand-point-right"></i>QU???Y L??? T??N</a> (14/2/2023)</li>
                    <li><a href="<?php echo base_url(); ?>dichvu/hoinghi" title="PH??NG H???I NGH???"><i class="far fa-hand-point-right"></i>PH??NG H???I NGH???</a> (14/2/2023)</li>
                </ul>
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
    .othernews {
        border: 1px solid #DEDEDE;
        padding: 5px;
        background: #F7F7F7;
    }
    .othernews .cactinkhac {
        font-size: 20px;
        color: #0066FF;
    }
    .othernews ul.khac {
        list-style: none;
        margin-left: 15px;
    }
    .othernews ul.khac li {
        background: url(../images/i_tinkhac.png) left 3px no-repeat;
        padding: 3px 5px 3px 18px;
        color: #1a73e8;
    }
    .othernews ul.khac li a {
        color: #4A4A4A;
        text-decoration: none;
        transition: 0.4s;
    }
    .othernews ul.khac li a i {
    margin-right: 6px;
    }
    .othernews ul.khac li a:hover{
        color:red;padding-left:10px;transition:0.4s;
    }

    .far {
        font-family: 'Font Awesome 5 Free';
        font-weight: 400;
    }
    .fa-hand-point-right:before {
        content: "\f0a4";
    }
    body {
        font-family: 'Playfair Display', serif;
        font-size: 16px;
        line-height: 1.5;
    }
    * {
        margin: 0;
        padding: 0;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        outline: none;
    }
    </style>
</body>