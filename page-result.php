<?php

/*
Template Name: 合格発表
*/

?>

<?php get_header(); ?>

<div class="container-fluid bg-gray">
    <div class="container">
        <div class="row">
            <h2 class="heading-lg">絶対音感BASIC検定</h2>
        </div>
    </div>
</div>

<div class="container result-box pb-5">
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 my-5">
            <div class="text-center">
                <img src="<?php echo esc_url( get_theme_file_uri('images/result/img1.jpg') ); ?>" width="500px;" alt="合格発表">
            </div>
            <div class="mt-5">
                <p class="text-center">おめでとうございます。よく頑張りましたね！<br><br>一般社団法人絶対音感コーチ学会®<br>代表理事 鬼頭敬子</p>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
