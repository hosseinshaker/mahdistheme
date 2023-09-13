   <?php
get_header();

        while (have_posts()) :
            the_post();
        ?>
        <!-- Start Blog
    ============================================= -->
    <div class="blog-area single full-blog full-blog default-padding">
        <div class="container">
            <div class="blog-items">
                <div class="row">
                    <div class="blog-content wow fadeInUp col-lg-10 offset-lg-1 col-md-12">
                        <div class="item">

                            <div class="blog-item-box">
                                <!-- Start Post Thumb -->
                                <div class="thumb">
                                    <a href="#">
                                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Thumb">
                                    </a>
                                </div>
                                <!-- Start Post Thumb -->

                                <div class="info">

                                    <div class="tags">
                                    <?php
                        $categories = get_the_category();
                        if ($categories) {
                            foreach ($categories as $category) {
                                echo '<a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a>';
                            }
                        }
                        ?>
                                    </div>
                                    <div class="meta">
                                        <ul>
                                            <li><i class="fas fa-calendar-alt"></i><?php echo get_the_date('d F Y'); ?></li>
                                            <li>توسط: <span><?php the_author(); ?></span></li>
                                        </ul>
                                    </div>
                                    
                                    <h3><?php the_title(); ?></h3>
               
                                    <p><?php the_content(); ?></p>

                                    <!-- Start Post Pagination -->
                                    <div class="post-pagi-area">
                                        <a href="#"><i class="fas fa-angle-double-right"></i> پست قبلی</a>
                                        <a href="#">پست بعدی <i class="fas fa-angle-double-left"></i></a>
                                    </div>
                                    <!-- End Post Pagination -->
                                </div>
                            </div>
                        </div>

                        <!-- Start Post Tag s-->
                        <div class="post-tags share">
                            <div class="tags">
                                <a href="#">آنالیز</a>
                                <a href="#">روند</a>
                            </div>
                            <div class="social">
                                <ul>
                                    <li class="facebook">
                                        <a href="#">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li class="twitter">
                                        <a href="#">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="pinterest">
                                        <a href="#">
                                            <i class="fab fa-pinterest-p"></i>
                                        </a>
                                    </li>
                                    <li class="linkedin">
                                        <a href="#">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Post Tags -->

                        <!-- Start Blog Comment -->
                        <div class="blog-comments">
                            <div class="comments-area">
                                <div class="comments-title">
                                    <h4>
                                        5 نظر
                                    </h4>

                                    <div class="comments-list">
                                        <div class="commen-item">
                                            <div class="avatar">
                                                <img src="assets/img/team/1.jpg" alt="Author">
                                            </div>
                                            <div class="content">
                                                <div class="title">
                                                    <h5>طراحان وب</h5>
                                                    <span>15 خرداد 1401</span>
                                                </div>
                                                <p>
                                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است. 
                                                </p>
                                                <div class="comments-info">
                                                    <a href="#"><i class="fa fa-reply"></i>پاسخ</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comments-list">
                                        <div class="commen-item">
                                            <div class="avatar">
                                                <img src="assets/img/team/2.jpg" alt="Author">
                                            </div>
                                            <div class="content">
                                                <div class="title">
                                                    <h5>طراحان وب</h5>
                                                    <span>15 خرداد 1401</span>
                                                </div>
                                                <p>
                                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است. 
                                                </p>
                                                <div class="comments-info">
                                                    <a href="#"><i class="fa fa-reply"></i>پاسخ</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="commen-item reply">
                                            <div class="avatar">
                                                <img src="assets/img/team/7.jpg" alt="Author">
                                            </div>
                                            <div class="content">
                                                <div class="title">
                                                    <h5>طراحان وب</h5>
                                                    <span>15 خرداد 1401</span>
                                                </div>
                                                <p>
                                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است. 
                                                </p>
                                                <div class="comments-info">
                                                    <a href="#"><i class="fa fa-reply"></i>پاسخ</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="comments-form">
                                    <div class="title">
                                        <h4>نظر خود را ثبت کنید</h4>
                                    </div>
                                    <form action="#" class="contact-comments">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <!-- Name -->
                                                    <input name="name" class="form-control" placeholder="نام *" type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <!-- Email -->
                                                    <input name="email" class="form-control" placeholder="ایمیل *" type="email">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group comments">
                                                    <!-- Comment -->
                                                    <textarea class="form-control" placeholder="نظر"></textarea>
                                                </div>
                                                <div class="form-group full-width submit">
                                                    <button type="submit">
                                                        ارسال نظر
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- End Comments Form -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog -->
    <?php
    endwhile;
get_footer();
   ?>