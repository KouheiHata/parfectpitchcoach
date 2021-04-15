<footer class="footer bg-lightblue">

<div class="container-fluid" style="padding-left: 70px; padding-right: 70px;">
  <div class="row footer-font">
    <div class="col-12 col-sm-5 pt-5">
      <span class="footer-title">CONTENTS</span><br>
      <br>
      <a href="<?php echo home_url( '/' ); ?>" class="top-menu-link">学ぶ時間</a><br>
      -<a href="<?php echo home_url( '/' ); ?>" class="top-menu-link">鬼頭流絶対音感</a><br>
      -<a href="<?php echo home_url( '/' ); ?>" class="top-menu-link">代表プロフィール</a><br>
      -<a href="<?php echo home_url( '/' ); ?>" class="top-menu-link">絶対音感とは</a><br>
      -<a href="<?php echo home_url( '/' ); ?>" class="top-menu-link">絶対音感と相対音感</a><br>
      -<a href="<?php echo home_url( '/' ); ?>" class="top-menu-link">絶対音感と脳科学</a><br>
      -<a href="<?php echo home_url( '/' ); ?>" class="top-menu-link">お母様の声</a><br>
      -<a href="<?php echo home_url( '/' ); ?>" class="top-menu-link">お母様Ｑ＆Ａ</a><br>
      -<a href="<?php echo home_url( '/' ); ?>" class="top-menu-link">レッスン動画</a><br>
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

    <div class="col-12 col-sm-3 pt-5">
      <span class="footer-title">LINKS</span><br>
      <br>
      <a href="<?php echo home_url( '/' ); ?>" class="top-menu-link">代表メルマガ</a><br>
      <a href="<?php echo home_url( '/' ); ?>" class="top-menu-link">代表ブログ</a><br>
    </div>

    <div class="col-12 col-sm-4 pt-5">
      <span class="footer-title">ABOUT US</span><br>
      <br>
      テキストテキストテキスト<br>
      〒XXX-XXXX<br>
      東京都テキストテキストテキストテキストテキスト<br>
      TEL.03-XXXX-XXXX <br class="d-lg-none d-inline">FAX.03-XXXX-XXXX<br>
    </div>
  </div>
</div>

<div style="padding-bottom: 120px;"></div>

<div class="container-fluid">
  <div class="row">
    <div class="copyright bg-nurple">(C) 2021 一般社団法人絶対音感コーチ学会 All Rights Reserved.</div>
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

<?php wp_footer(); ?>
</body>
</html>