<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, maximum-scale=1.0, minimum-scale=1.0,initial-scale=1.0" />
<title><?php wp_title('',true); ?><?php if(wp_title('',false)) { ?> | <?php } ?><?php bloginfo('name'); ?></title>

<!-- Bootstrap4 -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
<!-- CSS -->
<link href="<?php echo get_stylesheet_directory_uri(); ?>/style.css" rel="stylesheet">
<!-- Responsive CSS -->
<link href="<?php echo get_stylesheet_directory_uri(); ?>/responsive.css" rel="stylesheet">
<!-- 絶対音感コーチ紹介 -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.5.6/swiper-bundle.css" integrity="sha512-Zf0eNd/5cycJskNBRpl0MmfDJO8jk15JkdwkzAWm6QIcSqH1lOOgG12jVqW/Oioe0P1gVhA5IGNs8WQY14+/WA==" crossorigin="anonymous" />

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

<meta name="google-site-verification" content="pfS2MJ3FKZwjaewn5tDTRd3EeSgwWEDA033TYvl6a70" />

<?php
wp_deregister_script('jquery');
?>

<?php wp_head(); ?>

</head>
<body <?php body_class (); ?>>

<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 top-area">
            <div style="vertical-align: middle;"><a href="https://www.parfectpitchcoach.com/"><img src="<?php echo esc_url( get_theme_file_uri('images/top/top_logo.png') ); ?>" alt="一般社団法人 絶対音感コーチ学会" class="icon-logo"></a></div>
        </div>
    </div>
</div>

<div class="navbar sticky-top bg-lightblue" id="navbar">
    <div class="nav-top">
      <div class="ham-trigger d-lg-none" id="ham">
        <img class="ham-img1" src="<?php echo get_template_directory_uri(); ?>/images/menu.svg" alt="メニューボタン">
        <img class="ham-img2  hide" src="<?php echo get_template_directory_uri(); ?>/images/menu_open.svg" alt="メニューボタン">
      </div>
    </div>

    <div class="nav-bottom d-none d-lg-block">
    <ul class="navbar-nav">
      <li class="nav-item item01">
        <a class="nav-link dropdown-hover item01-box" href="#">学ぶ時間</a>
          <ul class="dropdown-list item01-list bg-lightblue">
              <li class="dropdown-link"><a href="<?php echo home_url( '/' ); ?>">絶対音感コーチ学会®︎とは</a></li>
              <li class="dropdown-link"><a href="<?php echo home_url( '/' ); ?>">鬼頭流絶対音感</a></li>
              <li class="dropdown-link"><a href="<?php echo home_url( '/' ); ?>">鬼頭流絶対音感メソッドでの変化</a></li>
              <li class="dropdown-link"><a href="<?php echo home_url( '/' ); ?>">絶対音感とは</a></li>
              <li class="dropdown-link"><a href="<?php echo home_url( '/' ); ?>">絶対音感と相対音感</a></li>
              <li class="dropdown-link"><a href="<?php echo home_url( '/' ); ?>">絶対音感と脳科学</a></li>
              <li class="dropdown-link"><a href="<?php echo home_url( '/' ); ?>">お母様の声</a></li>
              <li class="dropdown-link"><a href="<?php echo home_url( '/' ); ?>">お母様Q &A</a></li>
              <li class="dropdown-link"><a href="<?php echo home_url( '/' ); ?>">レッスン動画</a></li>
              <li class="dropdown-link"><a href="<?php echo home_url( '/' ); ?>">音コミュニケーション講座</a></li>
          </ul>
      </li>
      <li class="nav-item item02">
        <a class="nav-link dropdown-hover item02-box" href="#">講師になる</a>
          <ul class="dropdown-list item02-list bg-lightblue">
              <li class="dropdown-link"><a href="<?php echo home_url( '/' ); ?>">ピアノの先生向け認定コーチになりたい方</a></li>
              <li class="dropdown-link"><a href="<?php echo home_url( '/' ); ?>">コーチの感想</a></li>
              <li class="dropdown-link"><a href="<?php echo home_url( '/' ); ?>">絶対音感認定校紹介</a></li>
          </ul>
      </li>
      <li class="nav-item item03">
        <a class="nav-link item03-box" href="<?php echo home_url( '/realestate/' ); ?>">HOUSEじかんとは</a>
      </li>
        <li class="nav-item item04">
        <a class="nav-link item04-box" href="#">お問い合わせ</a>
      </li>
      <li class="nav-item item05">
        <a class="nav-link dropdown-hover item05-box" href="#">ミラクルは何度も起こせる</a>
          <ul class="dropdown-list item05-list bg-lightblue">
              <li class="dropdown-link"><a href="<?php echo home_url( '/' ); ?>">検定</a></li>
              <li class="dropdown-link"><a href="<?php echo home_url( '/' ); ?>">合格発表</a></li>
              <li class="dropdown-link"><a href="<?php echo home_url( '/' ); ?>">個別発表</a></li>
          </ul>
      </li>
    </ul>
  </div>
</div>

<div class="pb-5">
  <p id="slideshow">
    <img src="<?php echo esc_url( get_theme_file_uri('images/top/top_haru.png') ); ?>" alt="絶対音感 音を堪能する人生を味わう 春" class="active" />
    <img src="<?php echo esc_url( get_theme_file_uri('images/top/top_natu.png') ); ?>" alt="絶対音感 音を堪能する人生を味わう 夏" />
    <img src="<?php echo esc_url( get_theme_file_uri('images/top/top_aki.png') ); ?>" alt="絶対音感 音を堪能する人生を味わう 秋" />
    <img src="<?php echo esc_url( get_theme_file_uri('images/top/top_fuyu.png') ); ?>" alt="絶対音感 音を堪能する人生を味わう 冬" />
  </p>
  <!-- ダミーのスペーサー -->
  <img src="<?php echo esc_url( get_theme_file_uri('images/top/top_haru.png') ); ?>" style="visibility: hidden;" />
</div>