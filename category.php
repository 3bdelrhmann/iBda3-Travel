<?php get_header(); ?>
      <div class="categoryHeader ">
        <div class="container">
          <div class="col-sm-12 categoryTitle">
            <h1 class="p-0 "><b>قسم : </b><?= get_queried_object()->name ; ?></h1>
          </div>
        </div>
      </div>
        <section class="col-sm-12  mt-5 pt-5 pb-5">
        <div class="container-fluid">
          <div class="col-sm-12 text-center">
                      <?php
                        if (is_category()) {
                        $TheCategory = get_query_var('cat');
                        $CategorySlug = get_category ($cat);
                        $Category = $CategorySlug->slug;
                        }
                      ?> 
                      <?php
                        $args = array
                        (
                          'post_type' => 'post',
                          'order'     => 'DESC',
                          'category_name'  => ''.$Category.''
                        );
                        $query = new WP_Query($args);
                          if ( $query->have_posts() )
                          {
                             while ( $query->have_posts() )
                             {
                               $query->the_post();
                               ?>
            <div class="col-md-5 d-inline-block mb-3">
                <div class="card-content">
                    <div class="card-img">
                        <img src="<?= get_the_post_thumbnail_url(); ?>" alt="">
                        <span><h4>تبداء من  <?php
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
?> جنيه</h4></span>
                    </div>
                    <div class="card-desc text-right">
                        <h3><?= the_title() ?></h3>
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
                               <?php
                             }
                          }
                      ?>                                 




        </div>
        </section>
<?php get_footer(); ?>
