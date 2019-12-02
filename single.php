<?php get_header(); ?>
<?php while ( have_posts() ) { the_post() ?>


        <div class="img-post pt-5 " style="background-image: url('<?= get_the_post_thumbnail_url(); ?>');">
        </div>
        <div class="container-fluid bg-light">
          <header class="pt-3 pb-3 post-header border-bottom">
            <h1 class="p-3 m-0"><?= the_title() ?></h1>
            <span class="PostPrice text-center mr-5">تبداء من
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
             جنيه</span>
          </header>
          <div class="post pt-5 pb-5">
          <article class="col-md-9  col-sm-12 bg-white rounded shadow p-4 text-justify border">
            <p><?php the_content(); ?></p>
          </article>
            
          </div>
        </div>
  <?php } ?>
<?php get_footer(); ?>
