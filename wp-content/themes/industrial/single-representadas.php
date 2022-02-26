<?php
/**
 * The template for displaying posts
 */

get_header(); ?>

        <div class="row section-cont">
          <div class="col-md-12">

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

                  <div class="entry-images">
                    <?php
                      $children = get_children(get_the_ID());
                      foreach ( $children as $children_id => $child ) {
                          echo '<img class="data'.$child->post_parent.'" src="'.$child->guid.'"/>';
                          $i++;
                      }
                    ?>
                  </div>

                </article>

              <?php
              // End of the loop.
              endwhile;
            ?>

          </div>
        </div>

<?php get_footer(); ?>

