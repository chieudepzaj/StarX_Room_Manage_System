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
        margin-top :136px;
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
    </style>
    <link rel="icon" type="image/*" href="<?php echo base_url() . 'uploads/website/' . $this->db->get_where('setting', array('name' => 'favicon'))->row()->content;?>">
    <title><?php echo $this->db->get_where('room_type', array('id_room_type' => $room_id))->row()->content;?></title>
</head>

<body>

    <div id="header" class="" style="position: fixed; top: 0px; z-index: 99;">
        <div class="container">
            <div class="hd-top">
                <a href="" class="logo"><img
                        src="<?php echo base_url(); ?>uploads/website/<?php echo $this->db->get_where('setting', array('name' => 'favicon'))->row()->content;?>"
                        alt="logo"></a>
                <div class="hd-info">
                <a href="/starx/login" class="tuvan">Đăng nhập</a>
                    <a href="/starx/datphong" class="datphong">Đặt phòng</a>
                </div>
                <!--END #lang-->
            </div>
        </div>
        <div class="nav-bg">
            <div class="main-nav">
                <ul class="mn-left">
                    <li class=""><a href="/starx/home">Trang chủ</a></li>
                    <li class=""><a href="/starx/gioithieu">Giới thiệu</a> </li>
                    <li class="active"><a href="/starx/loaiphong">Loại phòng</a> </li>
                </ul>
                <ul class="mn-right">
                    <li class=""><a href="/starx/dichvu">Dịch vụ</a></li>
                    <li class=""><a href="/starx/tuyendung">Tuyển dụng</a></li>
                    <li class=""><a href="/starx/lienhe">Liên hệ</a></li>
                </ul>
            </div>
        </div>
    </div>
    </div>
    <div class="containers">
        <div class="mySlides">
            <div class="numbertext"></div>
            <img src="<?php echo base_url(); ?>uploads/website/<?php echo $this->db->get_where('room_type', array('id_room_type' => $room_id))->row()->image_link1;?>"
                alt="No image review" style="width:100%">
        </div>

        <div class="mySlides">
            <div class="numbertext"></div>
            <img src="<?php echo base_url(); ?>uploads/website/<?php echo $this->db->get_where('room_type', array('id_room_type' => $room_id))->row()->image_link2;?>"
                alt="No image review" style="width:100%">
        </div>

        <div class="mySlides">
            <div class="numbertext"></div>
            <img src="<?php echo base_url(); ?>uploads/website/<?php echo $this->db->get_where('room_type', array('id_room_type' => $room_id))->row()->image_link3;?>"
                alt="No image review" style="width:100%">
        </div>

        <div class="mySlides">
            <div class="numbertext"></div>
            <img src="<?php echo base_url(); ?>uploads/website/<?php echo $this->db->get_where('room_type', array('id_room_type' => $room_id))->row()->image_link4;?>"
                alt="No image review" style="width:100%">
        </div>

        <div class="mySlides">
            <div class="numbertext"></div>
            <?php if (html_escape($this->db->get_where('room', array('room_id' => '21'))->row()->room_video)) : ?>
            <video style="width:100%" controls>
                <source
                    src="<?php echo base_url(); ?>uploads/website/<?php echo $this->db->get_where('room_type', array('id_room_type' => $room_id))->row()->video_link; ?>"
                    type="video/mp4" class="img-thumbnail thumb128">
            </video>
            <?php else : ?>
            <p><?php echo $this->lang->line('no_preview_available'); ?>.</p>
            <?php endif; ?>
        </div>

        <a class="prev" onclick="plusSlides(-1)">❮</a>
        <a class="next" onclick="plusSlides(1)">❯</a>

        <div class="caption-container">
            <button class="controls ws_pause" id="pause"></button>
            <p id="caption"></p>
        </div>

        <div class="row_column">
            <div class="column">
                <img class="demo cursor"
                    src="<?php echo base_url(); ?>uploads/website/<?php echo $this->db->get_where('room_type', array('id_room_type' => $room_id))->row()->image_link1;?>"
                    style="width:98%; height: 12.5vw;" onclick="currentSlide(1)"
                    alt="<?php echo $this->db->get_where('setting', array('name' => 'system_name'))->row()->content.' - ' .$this->db->get_where('room_type', array('id_room_type' => $room_id))->row()->content;?>">
            </div>
            <div class="column">
                <img class="demo cursor"
                    src="<?php echo base_url(); ?>uploads/website/<?php echo $this->db->get_where('room_type', array('id_room_type' => $room_id))->row()->image_link2;?>"
                    style="width:98%;height: 12.5vw;;" onclick="currentSlide(2)"
                    alt="<?php echo $this->db->get_where('setting', array('name' => 'system_name'))->row()->content.' - ' .$this->db->get_where('room_type', array('id_room_type' => $room_id))->row()->content;?>">
            </div>
            <div class="column">
                <img class="demo cursor"
                    src="<?php echo base_url(); ?>uploads/website/<?php echo $this->db->get_where('room_type', array('id_room_type' => $room_id))->row()->image_link3;?>"
                    style="width:98%;height: 12.5vw;" onclick="currentSlide(3)"
                    alt="<?php echo $this->db->get_where('setting', array('name' => 'system_name'))->row()->content.' - ' .$this->db->get_where('room_type', array('id_room_type' => $room_id))->row()->content;?>">
            </div>
            <div class="column">
                <img class="demo cursor"
                    src="<?php echo base_url(); ?>uploads/website/<?php echo $this->db->get_where('room_type', array('id_room_type' => $room_id))->row()->image_link4;?>"
                    style="width:98%;height: 12.5vw;" onclick="currentSlide(4)"
                    alt="<?php echo $this->db->get_where('setting', array('name' => 'system_name'))->row()->content.' - ' .$this->db->get_where('room_type', array('id_room_type' => $room_id))->row()->content;?>">
            </div>
            <div class="column">
                <img class="demo cursor" src="<?php echo base_url(); ?>uploads/website/video_preview.png" style="width:98%;height: 12.5vw;"
                    onclick="currentSlide(5)"
                    alt="<?php echo $this->db->get_where('setting', array('name' => 'system_name'))->row()->content.' - ' .$this->db->get_where('room_type', array('id_room_type' => $room_id))->row()->content;?>">
            </div>
        </div>
        <div class="tieude_giua">
            <?php echo 'Chi tiết '.  $this->db->get_where('room_type', array('id_room_type' => $room_id))->row()->content;?>
        </div>
        <ul class="product_info">
            <li class="ten">
                <?php echo 'Tên phòng: '. $this->db->get_where('room_type', array('id_room_type' => $room_id))->row()->content;?>
            </li>
            <li class="gia">GIÁ PHÒNG (Đã bao gồm VAT):
                <?php 
                 $query_min = $this->db->select_min('daily_rent')->get_where('room',array('room_type'=>$room_id))->result_array();
                 $min = $query_min[0];
                 $query_max = $this->db->select_max('daily_rent')->get_where('room',array('room_type'=>$room_id))->result_array();
                 $max = $query_max[0];
                 $query_min_m = $this->db->select_min('monthly_rent')->get_where('room',array('room_type'=>$room_id))->result_array();
                 $min_m = $query_min_m[0];
                 $query_max_m = $this->db->select_max('monthly_rent')->get_where('room',array('room_type'=>$room_id))->result_array();
                 $max_m = $query_max_m[0];
                echo '<br> Theo ngày: <b style="color: red;">' .number_format($min['daily_rent'], 0, '', '.'). ' ' .$this->db->get_where('setting', array('name' => 'currency'))->row()->content.' - '.number_format($max['daily_rent'], 0, '', '.'). ' ' .$this->db->get_where('setting', array('name' => 'currency'))->row()->content.'</b><br> Theo tháng: <b style="color: red;">'. number_format($min_m['monthly_rent'], 0, '', '.'). ' ' .$this->db->get_where('setting', array('name' => 'currency'))->row()->content.' - '.number_format($max_m['monthly_rent'], 0, '', '.'). ' ' .$this->db->get_where('setting', array('name' => 'currency'))->row()->content.'</b>';?>
            </li>
            <li class="content_room"><b>THÔNG TIN PHÒNG</b>
                <?php 
                    $str = $this->db->get_where('room', array('room_type' => $room_id))->row(1)->remarks;
                    $str = str_replace("\n",".",$str);
                    $str = str_replace("-","",$str);
                    $str = str_replace(".", ".</li><li>", $str);
                    echo "<ul><li>".$str."</li></ul>";
      ?>
            </li>
        </ul>
        <div class="content-some-product">
            <div class="tieude_giua" style="margin: 0 0 20px 0;">
                <?php echo "LOẠI PHÒNG KHÁC";?>
            </div>
            <div class="product-grid">
                <div class="pr-box name">
                    <a href="/starx/detail_room/1">
                        <img src="<?php echo base_url(); ?>uploads/website/<?php echo $this->db->get_where('room_type', array('id_room_type' => '1'))->row()->image_link;?>"
                            style="width:100%" alt="No image view">
                        <h3><?php 
                            echo $this->db->get_where('room_type', array('id_room_type' => '1'))->row()->content;?></h3>
                        <div class="info">
                            <div class="pr-name">
                                <?php echo $this->db->get_where('room_type', array('id_room_type' => '1'))->row()->content;?>
                            </div>
                            <div class="pr-desc">giá chỉ từ</div>
                            <p class="blink_me"><span><img style="width:40px; margin-top: -5px; height: auto; outline :none; -webkit-text-fill-color: transparent;" src="/starx/uploads/website/hot_deal.png" alt="hot_deal"></span>
                            <?php
                                $query = $this->db->select_min('daily_rent')->get_where('room',array('room_type'=>'1'))->result_array();
                                $min = $query[0];
                                echo number_format($min['daily_rent'], 0, '', '.'). ' ' .$this->db->get_where('setting', array('name' => 'currency'))->row()->content;?>
                            </p>
                            <span class="btnxemphong">Xem phòng</span>
                        </div>
                    </a>
                </div>
                <div class="pr-box name">
                    <a href="/starx/detail_room/2">
                        <img src="<?php echo base_url(); ?>uploads/website/<?php echo $this->db->get_where('room_type', array('id_room_type' => '2'))->row()->image_link;?>"
                            style="width:100%" alt="No image view">
                        <h3><?php 
                            echo $this->db->get_where('room_type', array('id_room_type' => '2'))->row()->content;?></h3>
                        <div class="info">
                            <div class="pr-name">
                                <?php echo $this->db->get_where('room_type', array('id_room_type' => '2'))->row()->content;?>
                            </div>
                            <div class="pr-desc">giá chỉ từ</div>
                            <p class="blink_me"><span><img style="width:40px; margin-top: -5px; height: auto; outline :none; -webkit-text-fill-color: transparent;" src="/starx/uploads/website/hot_deal.png" alt="hot_deal"></span>
                                <?php
                                $query = $this->db->select_min('daily_rent')->get_where('room',array('room_type'=>'2'))->result_array();
                                $min = $query[0];
                                echo number_format($min['daily_rent'], 0, '', '.'). ' ' .$this->db->get_where('setting', array('name' => 'currency'))->row()->content;?>
                            </p>
                            <span class="btnxemphong">Xem phòng</span>
                        </div>
                    </a>
                </div>
                <div class="pr-box name">
                    <a href="/starx/detail_room/3">
                        <img src="<?php echo base_url(); ?>uploads/website/<?php echo $this->db->get_where('room_type', array('id_room_type' => '3'))->row()->image_link;?>"
                            style="width:100%" alt="No image view">
                        <h3><?php 
                            echo $this->db->get_where('room_type', array('id_room_type' => '3'))->row()->content;?></h3>
                        <div class="info">
                            <div class="pr-name">
                                <?php echo $this->db->get_where('room_type', array('id_room_type' => '3'))->row()->content;?>
                            </div>
                            <div class="pr-desc">giá chỉ từ</div>
                            <p class="blink_me"><span><img style="width:40px; margin-top: -5px; height: auto; outline :none; -webkit-text-fill-color: transparent;" src="/starx/uploads/website/hot_deal.png" alt="hot_deal"></span>
                                <?php
                                $query = $this->db->select_min('daily_rent')->get_where('room',array('room_type'=>'3'))->result_array();
                                $min = $query[0];
                                echo number_format($min['daily_rent'], 0, '', '.'). ' ' .$this->db->get_where('setting', array('name' => 'currency'))->row()->content;?>
                            </p>
                            <span class="btnxemphong">Xem phòng</span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="product-grid">
                <div class="pr-box name">
                    <a href="/starx/detail_room/4">
                        <img src="<?php echo base_url(); ?>uploads/website/<?php echo $this->db->get_where('room_type', array('id_room_type' => '4'))->row()->image_link;?>"
                            style="width:100%" alt="No image view">
                        <h3><?php 
                            echo $this->db->get_where('room_type', array('id_room_type' => '4'))->row()->content;?></h3>
                        <div class="info">
                            <div class="pr-name">
                                <?php echo $this->db->get_where('room_type', array('id_room_type' => '4'))->row()->content;?>
                            </div>
                            <div class="pr-desc">giá chỉ từ</div>
                            <p class="blink_me"><span><img style="width:40px; margin-top: -5px; height: auto; outline :none; -webkit-text-fill-color: transparent;" src="/starx/uploads/website/hot_deal.png" alt="hot_deal"></span>
                                <?php
                                $query = $this->db->select_min('daily_rent')->get_where('room',array('room_type'=>'4'))->result_array();
                                $min = $query[0];
                                echo number_format($min['daily_rent'], 0, '', '.'). ' ' .$this->db->get_where('setting', array('name' => 'currency'))->row()->content;?>
                            </p>
                            <span class="btnxemphong">Xem phòng</span>
                        </div>
                    </a>
                </div>
                <div class="pr-box name">
                    <a href="/starx/detail_room/5">
                        <img src="<?php echo base_url(); ?>uploads/website/<?php echo $this->db->get_where('room_type', array('id_room_type' => '5'))->row()->image_link;?>"
                            style="width:100%" alt="No image view">
                        <h3><?php 
                            echo $this->db->get_where('room_type', array('id_room_type' => '5'))->row()->content;?></h3>
                        <div class="info">
                            <div class="pr-name">
                                <?php echo $this->db->get_where('room_type', array('id_room_type' => '5'))->row()->content;?>
                            </div>
                            <div class="pr-desc">giá chỉ từ</div>
                            <p class="blink_me"><span><img style="width:40px; margin-top: -5px; height: auto; outline :none; -webkit-text-fill-color: transparent;" src="/starx/uploads/website/hot_deal.png" alt="hot_deal"></span>
                                <?php
                                $query = $this->db->select_min('daily_rent')->get_where('room',array('room_type'=>'5'))->result_array();
                                $min = $query[0];
                                echo number_format($min['daily_rent'], 0, '', '.'). ' ' .$this->db->get_where('setting', array('name' => 'currency'))->row()->content;?>
                            </p>
                            <span class="btnxemphong">Xem phòng</span>
                        </div>
                    </a>
                </div>
                <div class="pr-box name">
                    <a href="/starx/detail_room/6">
                        <img src="<?php echo base_url(); ?>uploads/website/<?php echo $this->db->get_where('room_type', array('id_room_type' => '6'))->row()->image_link;?>"
                            style="width:100%" alt="No image view">
                        <h3><?php 
                            echo $this->db->get_where('room_type', array('id_room_type' => '6'))->row()->content;?></h3>
                        <div class="info">
                            <div class="pr-name">
                                <?php echo $this->db->get_where('room_type', array('id_room_type' => '6'))->row()->content;?>
                            </div>
                            <div class="pr-desc">giá chỉ từ</div>
                            <p class="blink_me"><span><img style="width:40px; margin-top: -5px; height: auto; outline :none; -webkit-text-fill-color: transparent;" src="/starx/uploads/website/hot_deal.png" alt="hot_deal"></span>
                                <?php
                                $query = $this->db->select_min('daily_rent')->get_where('room',array('room_type'=>'6'))->result_array();
                                $min = $query[0];
                                echo number_format($min['daily_rent'], 0, '', '.'). ' ' .$this->db->get_where('setting', array('name' => 'currency'))->row()->content;?>
                            </p>
                            <span class="btnxemphong">Xem phòng</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <footer id="footer">
        <div class="container-footer">
            <p class="com-name">StarX</p>
            <p class="com-field">Hotel - Service - Profession</p>
            <p class="ks3sao">KHÁCH SẠN 3 SAO</p>
        </div>
        <div class="copyright">
            <div class="ft-wrap">
                <p class="text">Copyright © 2023 StarX Hotel. Design by Hoang Dv.</p>
            </div>
        </div>
    </footer>

    <script>
    let slideIndex = 1;
    let pause = document.getElementById("pause");
    var playing = true;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("demo");
        let captionText = document.getElementById("caption");
        if (n > slides.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
        captionText.innerHTML = dots[slideIndex - 1].alt;

        if (playing) {
            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1
            }
            setTimeout(showSlides, 2000);
        }

    }
    pause.onclick = function() {
        if (playing) {
            pauseSlideshow();
        } else {
            playSlideshow();
        }
    };

    function pauseSlideshow() {
        playing = false;
        pause.className = "controls ws_play";
        showSlides(--slideIndex);
    }

    function playSlideshow() {
        playing = true;
        pause.className = "controls ws_pause";
        showSlides(slideIndex);
    }
    </script>
</body>