<?php
/**
 * The template for displaying posts
 */

get_header(); ?>

        <div class="row section-cont">
          <div class="col-md-9">

            <?php
              // Start the loop.
              while ( have_posts() ) : the_post();
              ?>
                
                <article <?php post_class(); ?>>

                  <div class="entry-header">
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                  </div>

                  <div class="entry-content">
                    <?php the_content(); ?>
                  </div>

                </article>

              <?php
              // End of the loop.
              endwhile;
            ?>

          </div>
          <div class="col-md-3">
                <div class="categories-cloud">
                  <div class="categories-cloud__title">También te recomendamos:</div>
                  <?php 
                  /* tags
                  wp_tag_cloud( array(
                      'smallest'  => 11,
                      'largest'   => 18,
                      'unit'      => 'px',
                      'orderby'   => 'name',
                      'order'     => 'ASC',
                      'exclude'   => 6
                  ) ); */
                  $categories = get_categories();
                  foreach($categories as $category) {
                    echo '<a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a>';
                  }
                  ?>
                </div>
          </div>
        </div>

<?php get_footer(); ?>

