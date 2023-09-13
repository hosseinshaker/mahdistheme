
    <!-- Preloader Start -->
    <div id="site-preloader" class="site-preloader">
        <div class="loader-wrap">
            <div class="ring">
                <span></span>
            </div>
            <h2>یکتاوب!</h2>
        </div>
    </div>
    <!-- Preloader Ends -->

    <!-- Header============================================= -->
    <header id="home">

        <!-- Start Navigation -->
        <nav class="navbar navbar-default attr-bg navbar-fixed dark no-background bootsnav">

            <!-- Start Top Search -->
            <div class="container">
                <div class="row">
                    <div class="top-search">
                        <div class="input-group">
                            <form action="#">
                                <input type="text" name="text" class="form-control" placeholder="جستجو">
                                <button type="submit">
                                    <i class="ti-search"></i>
                                </button>  
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Top Search -->

            <div class="container">

                <!-- Start Atribute Navigation -->
                <div class="attr-nav extra-color">
                    <ul>
                        <li class="side-menu"><a href="#"><i class="fas fa-th-large"></i></a></li>
                    </ul>
                </div>        
                <!-- End Atribute Navigation -->

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="index-6.html">
                        <img src="<?php echo get_template_directory_uri()  ?>/assets/img/logo.png" class="logo" alt="Logo">
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->


 <?php
    wp_nav_menu(
        array(
            'theme_location' => 'topmenu', // نام مکان منو
            'menu_class' => 'nav navbar-nav navbar-right', // کلاس CSS برای منو
            'container' => 'div', // المان HTML که منو درون آن قرار می‌گیرد
            'container_class' => 'collapse navbar-collapse', // کلاس CSS برای المان محیط منو
            'container_id' => 'navbar-menu', // ID المان محیط منو
            'fallback_cb' => false, // غیرفعال کردن منو پشتیبانی شده در صورت عدم وجود منوی تعریف شده
        
        )
    ); 
?> 
<!--               <div class="collapse navbar-collapse" id="navbar-menu">


                    <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle active" data-toggle="dropdown" >صفحه اصلی</a>
                            <ul class="dropdown-menu">
                                <li><a href="index-1.html">دمو ورژن اول</a></li>
                                <li><a href="index-2.html">دمو ورژن دوم</a></li>
                                <li><a href="index-3.html">دمو ورژن سوم</a></li>
                                <li><a href="index-4.html">دمو ورژن چهارم</a></li>
                                <li><a href="index-5.html">دمو ورژن پنجم</a></li>
                            </ul>
                        </li>

                        <li><a href="case-studies.html">مطالعات موردی</a></li>
                    </ul>
                </div> 
            </div> -->

            <!-- Start Side Menu -->
            <div class="side">
                <a href="#" class="close-side"><i class="ti-close"></i></a>
                <div class="widget">
                    <h4 class="title">در تماس باشید</h4>
                    <p>
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.
                    </p>
                    <a href="#" class="btn btn-theme effect btn-sm" data-animation="animated slideInUp">مشاوره</a>
                </div>
                <div class="widget">
                    <h4 class="title">لینک مقید</h4>
                    <ul>
                        <li><a href="#">درباره</a></li>
                        <li><a href="#">پروژه ها</a></li>
                        <li><a href="#">ورود</a></li>
                        <li><a href="#">ثبت نام</a></li>
                    </ul>
                </div>
                <div class="widget social">
                    <h4 class="title">ارتباط با ما</h4>
                    <ul class="link">
                        <li class="facebook"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="twitter"><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li class="pinterest"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                        <li class="dribbble"><a href="#"><i class="fab fa-dribbble"></i></a></li>
                    </ul>
                </div>
            </div>
            <!-- End Side Menu -->

        </nav>
        <!-- End Navigation -->

    </header>
    <!-- End Header -->