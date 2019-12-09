<?php get_header(); ?>

    <div class="container">

      <div class="row">

        <section class="col-sm-12 bg-white border rounded mt-5 border-bottom">

          <header class="TopSectionHeader mb-3 p-0 ">

            <h1 class="m-0  border-bottom  p-3">أخر عروض السياحة الداخلية</h1>

          </header>

          <div class="col-sm-12 text-center">

            <?php 

            global $post;

            $args = array(

                'posts_per_page'   => 2,

                'category_name'    => ' السياحة الداخلية',

                'order'            => 'DESC',

                'post_type'        => 'post',

                'post_status'      => 'publish',

            );

            $posts_array = get_posts( $args ); ?>

            <?php foreach ( $posts_array as $post ) : setup_postdata( $post ); ?>

            <div class="col-md-4 d-inline-block">

                <div class="card-content">

                    <div class="card-img">

                        <img src="<?= get_the_post_thumbnail_url(); ?>" alt="">

                        <span><h4>تبداء من  

<?php

                        $allposttags = get_the_tags();

                        $i=0;

                        if ($allposttags) {

                            foreach($allposttags as $tags) {

                                $i++;

                                if (1 == $i) {

                                    $firsttag = $tags->name;

                                    echo $firsttag;

                                }

                            }

                        }

?>

                         جنيه</h4></span>

                    </div>

                    <div class="card-desc text-right">

                        <h3><?php the_title(); ?></h3>

                        <p>

                            <?php

                            $content = get_the_content();

                              echo mb_substr(strip_tags($content), 0, 200,'utf-8').'..';

                             ?>

                        </p>

                        <a href="<?php the_permalink(); ?>" class="btn-card">المزيد عن العرض</a>   

                    </div>

                </div>

            </div>

            <?php endforeach; 

            wp_reset_postdata();?>

          </div>

<?php

    $category_id = get_cat_ID( 'السياحة الداخلية' );

 

    $category_link = get_category_link( $category_id );

?>          

            <div class="SlideButtons text-center col-sm-12 text-white overflow-hidden pt-3 pb-5">

              <a href="<?php echo esc_url( $category_link ); ?>" class="col-sm-3 float-left p-3 right-arrow ">المزيد من العروض</a>

            </div>          

        </section>

        <section class="col-sm-12 bg-white border rounded mt-5 border-bottom">

          <header class="TopSectionHeader mb-3 p-0 ">

            <h1 class="m-0  border-bottom  p-3">أخر عروض الطيران</h1>

          </header>

          <div class="col-sm-12 text-center">

            <?php 

            global $post;

            $args = array(

                'posts_per_page'   => 2,

                'category_name'    => 'عروض الطيران',

                'order'            => 'DESC',

                'post_type'        => 'post',

                'post_status'      => 'publish',

            );

            $posts_array = get_posts( $args ); ?>

            <?php foreach ( $posts_array as $post ) : setup_postdata( $post ); ?>

            <div class="col-md-4 d-inline-block">

                <div class="card-content">

                    <div class="card-img">

                        <img src="<?= get_the_post_thumbnail_url(); ?>" alt="">

                        <span><h4>تبداء من  

<?php

                        $allposttags = get_the_tags();

                        $i=0;

                        if ($allposttags) {

                            foreach($allposttags as $tags) {

                                $i++;

                                if (1 == $i) {

                                    $firsttag = $tags->name;

                                    echo $firsttag;

                                }

                            }

                        }

?>

                         جنيه</h4></span>

                    </div>

                    <div class="card-desc text-right">

                        <h3><?php the_title(); ?></h3>

                        <p>

                            <?php

                            $content = get_the_content();

                              echo mb_substr(strip_tags($content), 0, 200,'utf-8').'..';

                             ?>

                        </p>

                        <a href="<?php the_permalink(); ?>" class="btn-card">المزيد عن العرض</a>   

                    </div>

                </div>

            </div>



            <?php endforeach; 

            wp_reset_postdata();?>

          </div>

<?php

    $category_id = get_cat_ID( 'عروض الطيران' );

 

    $category_link = get_category_link( $category_id );

?>          

            <div class="SlideButtons text-center col-sm-12 text-white overflow-hidden pt-3 pb-5">

              <a href="<?php echo esc_url( $category_link ); ?>" class="col-sm-3 float-left p-3 right-arrow ">المزيد من العروض</a>

            </div>





        </section>

        <section class="col-sm-12 bg-white border rounded mt-5 border-bottom">

          <header class="TopSectionHeader mb-3 p-0 ">

            <h1 class="m-0  border-bottom  p-3">السياحة الدينية الحج</h1>

          </header>

          <div class="col-sm-12 text-center">

            <?php 

            global $post;

            $args = array(

                'posts_per_page'   => 2,

                'category_name'    => 'السياحة الدينية الحج',

                'order'            => 'DESC',

                'post_type'        => 'post',

                'post_status'      => 'publish',

            );

            $posts_array = get_posts( $args ); ?>

            <?php foreach ( $posts_array as $post ) : setup_postdata( $post ); ?>

            <div class="col-md-4 d-inline-block">

                <div class="card-content">

                    <div class="card-img">

                        <img src="<?= get_the_post_thumbnail_url(); ?>" alt="">

                        <span><h4>تبداء من  

<?php

                        $allposttags = get_the_tags();

                        $i=0;

                        if ($allposttags) {

                            foreach($allposttags as $tags) {

                                $i++;

                                if (1 == $i) {

                                    $firsttag = $tags->name;

                                    echo $firsttag;

                                }

                            }

                        }

?>

                         جنيه</h4></span>

                    </div>

                    <div class="card-desc text-right">

                        <h3><?php the_title(); ?></h3>

                        <p>

                            <?php

                            $content = get_the_content();

                              echo mb_substr(strip_tags($content), 0, 200,'utf-8').'..';

                             ?>

                        </p>

                        <a href="<?php the_permalink(); ?>" class="btn-card">المزيد عن العرض</a>   

                    </div>

                </div>

            </div>



            <?php endforeach; 

            wp_reset_postdata();?>

          </div>

<?php

    $category_id = get_cat_ID( 'سياحة دينية' );

 

    $category_link = get_category_link( $category_id );

?>          

            <div class="SlideButtons text-center col-sm-12 text-white overflow-hidden pt-3 pb-5">

              <a href="<?php echo esc_url( $category_link ); ?>" class="col-sm-3 float-left p-3 right-arrow ">المزيد من العروض</a>

            </div>

        </section>       

      </div>

    </div>

    <div class="container-fluid p-0 mt-5 pt-5">

      <div class="wallpaper wallpaperMore text-center col-sm-12">

          <div class=" p-5 text-center MoreButton col-sm-12 text-white overflow-hidden ">

            <a href="#" class="btn-grad ">✈️ تعرف على جميع انواع السياحة لدينا</a>

          </div>          

      </div>

    </div> 

<?php get_footer(); ?>

