<?php
get_header();
?>


    <!-- Start 404 
    ============================================= -->
    <div class="error-page-area default-padding">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-6 thumb">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/illustration/404.png" alt="Thumb">
                </div>
                <div class="col-lg-6">
                    <div class="error-box">
                        <h2>با عرض پوزش صفحه پیدا نشد!</h2>
                        <p>
                        احتمالا صفحه ای که به دنبال آن هستید یا جابه جا شده و یا حذف شده است.
                    </p>
                        <a class="btn circle btn-md btn-gradient" href="<?php bloginfo('url');?>">بازگشت به صفحه اصلی</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End 404 -->

<?php
get_footer();
?>