    <!-- Start Blog
    ============================================= -->
    <div class="blog-area default-padding bottom-less bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h5>جدیدترین اخبار</h5>
                        <h2>با دیجی لب از آخرین و محبوب ترین اخبار <br> به روز باشید</h2>
                        <div class="heading-divider"></div>
                    </div>
                </div>
            </div>
            <div class="blog-items content-less">
                <div class="row">

        

                    <?php
$args = array(
    'post_type' => 'post', // نوع مطالب را به "post" تنظیم کنید
    'posts_per_page' => 3, // تعداد مقالاتی که می‌خواهید دریافت کنید را تنظیم کنید
    'order' => 'DESC',
);

$query = new WP_Query($args);

if ($query->have_posts()) {
    while ($query->have_posts()) {
        $query->the_post();
        ?>
        <div class="single-item col-lg-4 col-md-6">
            <div class="item wow fadeInUp" data-wow-delay="600ms">
                <div class="thumb">
                    <a href="<?php the_permalink(); ?>"><img style="height:200px;width: 100%;" src="<?php echo get_the_post_thumbnail_url();?>" alt="Thumb"></a>
                </div>
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
                            <li><i class="fas fa-calendar-alt"></i> <?php echo get_the_date('d F Y'); ?></li>
                            <li>توسط: <span><?php the_author(); ?></span></li>
                        </ul>
                    </div>
                    <h4>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h4>
                    <a class="btn circle btn-theme border btn-sm" href="<?php the_permalink(); ?>">ادامه مطلب <i class="fas fa-long-arrow-alt-left"></i></a>
                </div>
            </div>
        </div>
        <?php
    }
    wp_reset_postdata();
} else {
    echo 'مقاله‌ای یافت نشد.';
}
?>
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog Area -->