<footer class="footer bg-lightblue">

<div class="container-fluid" style="padding-left: 50px; padding-right: 50px;">
  <div class="row footer-font">
    <div class="col-12 col-lg-5 pt-5">
      <span class="footer-title">CONTENTS</span><br>
      <br>
      <a href="<?php echo home_url( '/' ); ?>" class="top-menu-link">学ぶ時間</a><br>
      -<a href="<?php echo home_url( '/' ); ?>" class="top-menu-link">絶対音感コーチ学会®︎とは</a><br>
      -<a href="<?php echo home_url( '/' ); ?>" class="top-menu-link">鬼頭流絶対音感</a><br>
      -<a href="<?php echo home_url( '/' ); ?>" class="top-menu-link">鬼頭流絶対音感メソッドでの変化</a><br>
      -<a href="<?php echo home_url( '/' ); ?>" class="top-menu-link">絶対音感とは</a><br>
      -<a href="<?php echo home_url( '/' ); ?>" class="top-menu-link">絶対音感と相対音感</a><br>
      -<a href="<?php echo home_url( '/' ); ?>" class="top-menu-link">絶対音感と脳科学</a><br>
      -<a href="<?php echo home_url( '/' ); ?>" class="top-menu-link">お母様の声</a><br>
      -<a href="<?php echo home_url( '/' ); ?>" class="top-menu-link">お母様Q &A</a><br>
      -<a href="<?php echo home_url( '/' ); ?>" class="top-menu-link">レッスン動画</a><br>
      -<a href="<?php echo home_url( '/' ); ?>" class="top-menu-link">音コミュニケーション講座</a><br>
      <a href="<?php echo home_url( '/' ); ?>" class="top-menu-link">講師になる</a><br>
      -<a href="<?php echo home_url( '/' ); ?>" class="top-menu-link">ピアノの先生向け認定コーチになりたい方</a><br>
      -<a href="<?php echo home_url( '/' ); ?>" class="top-menu-link">コーチの感想</a><br>
      -<a href="<?php echo home_url( '/' ); ?>" class="top-menu-link">絶対音感認定校紹介</a><br>
      <a href="<?php echo home_url( '/' ); ?>" class="top-menu-link">HOUSE時間とは</a><br>
      <a href="<?php echo home_url( '/' ); ?>" class="top-menu-link">お問い合わせ</a><br>
      <a href="<?php echo home_url( '/' ); ?>" class="top-menu-link">ミラクルは何度も起こせる</a><br>
      -<a href="<?php echo home_url( '/' ); ?>" class="top-menu-link">検定</a><br>
      -<a href="<?php echo home_url( '/' ); ?>" class="top-menu-link">合格発表</a><br>
      -<a href="<?php echo home_url( '/' ); ?>" class="top-menu-link">個別発表</a><br>
      <a href="<?php echo home_url( '/' ); ?>" class="top-menu-link">書籍・カード販売</a><br>
      <a href="<?php echo home_url( '/' ); ?>" class="top-menu-link">認定校生徒ログイン</a><br>
      <a href="<?php echo home_url( '/' ); ?>" class="top-menu-link">認定コーチログイン</a><br>
    </div>

    <div class="col-12 col-lg-3 pt-5">
      <span class="footer-title">LINKS</span><br>
      <br>
      <a href="<?php echo home_url( '/' ); ?>" class="top-menu-link">代表メルマガ</a><br>
      <a href="<?php echo home_url( '/' ); ?>" class="top-menu-link">代表ブログ</a><br>
      <br><br>
      <span class="footer-title">ログイン</span><br>
      <br>
      <a href="<?php echo home_url( '/' ); ?>" class="top-menu-link">認定校生徒ログイン</a><br>
      <a href="<?php echo home_url( '/' ); ?>" class="top-menu-link">認定校コーチログイン</a><br>
    </div>

    <div class="col-12 col-lg-4 pt-5">
      <span class="footer-title">ABOUT US</span><br>
      <br>
      テキストテキストテキスト<br>
      〒XXX-XXXX<br>
      東京都テキストテキストテキストテキストテキスト<br>
      TEL.03-XXXX-XXXX <br class="d-lg-none d-inline">FAX.03-XXXX-XXXX<br>
      <div style="padding-bottom: 50px;"></div><br>
      <a href="<?php echo home_url('/'); ?>" class="footer-contact">お問い合わせ</a>
    </div>
  </div>
</div>

<div style="padding-bottom: 120px;"></div>

<div class="container-fluid">
  <div class="row">
    <p class="copyright bg-nurple">(C) 2021 一般社団法人絶対音感コーチ学会 All Rights Reserved.</p>
  </div>
</div>

</footer>

<!-- Bootstrap4 jQuery Popper CDN -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<!-- スライドショー -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
function slideSwitch() {
	var $active = $('#slideshow img.active');

	if ( $active.length == 0 ) $active = $('#slideshow img:last');

	var $next =  $active.next().length ? $active.next()
	    : $('#slideshow img:first');

	$active.addClass('last-active');

	$next.css({opacity: 0.0})
	    .addClass('active')
	    .animate({opacity: 1.0}, 1000, function() {
	        $active.removeClass('active last-active');
	    });
}

$(function() {
    setInterval( "slideSwitch()", 5000 );
});
</script>

<!-- 絶対音感コーチ紹介 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.5.6/swiper-bundle.min.js" integrity="sha512-n6GpoPKzdir52uRa3Z+M+BxBFNGwMMVTISZM9LMg9lMXyRVrtCcQavkP81NOI06NyVUskN9GLzZIQtPuF3GWLg==" crossorigin="anonymous"></script>

<script>
var swiper = new Swiper('.swiper-container', {
  slidesPerView: 2,
  speed: 3000,
  autoplay: {
      delay: 3000,
      stopOnLastSlide: false,
      disableOnInteraction: false,
      reverseDirection: false
    },
  breakpoints: {
    // 768px以上の場合
    768: {
      slidesPerView: 3,
    },
    // 991px以上の場合
    991: {
      slidesPerView: 4,
    },
    // 1200px以上の場合
    1200: {
      slidesPerView: 5,
    }
  }
});
</script>

<!-- メニューのアニメーション -->
<script>
    $(function(){
        $(".ham-trigger").click(function(){
            $(".nav-bottom").toggleClass("visible"); 
            $(".ham-img1").toggleClass("hide");
            $(".ham-img2").toggleClass("hide");
            $(".ham-trigger").toggleClass("p-fixed");
            $(".sns-trigger").toggleClass("hide");
        });
    });
</script>
    
<script>
    $(function(){
  $('.ham-trigger').on('click', function() {
    $(this).toggleClass('active');
    return false;
  });
});
</script>

<!-- ハンバーガーメニュー -->
<script>
$(".item01 a").click(function(){
    $(".item01-list").toggleClass("list-active"); 
    $(".item02").toggleClass("mt-list01");
});
</script>

<script>
$(".item02 a").click(function(){
    $(".item02-list").toggleClass("list-active"); 
    $(".item03").toggleClass("mt-list02");
});
</script> 

<script>
$(".item05 a").click(function(){
    $(".item05-list").toggleClass("list-active"); 
});
</script>     

<!-- 全体にlazyロード（遅延読み込み） -->
<script>
// img要素を一括取得する
const imgElementList = document.querySelectorAll('img');

// 各Img要素について処理する
imgElementList.forEach((element) => {
    // img要素にlazy属性を付与する
    element.setAttribute('loading', 'lazy');
});
</script>

<?php wp_footer(); ?>
</body>
</html>