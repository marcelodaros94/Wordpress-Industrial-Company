<?php
/**
 * The template for displaying author, categories, posttypes, taxonomies, date and tag
 */

get_header(); ?>

        <div class="row page-content section-cont">
            <?php
              // Start the loop.
              while ( have_posts() ) : the_post();
              ?>
                <article <?php post_class('row'); ?>>
                  
                  <div class="col-sm-4 post-thumbnail">
                    <?php // check if the post has a Post Thumbnail assigned to it.
                    if ( has_post_thumbnail() ) :
                      the_post_thumbnail('large');
                    endif ?>
                  </div>

                  <div class="col-sm-8">
                    <div class="entry-header">
                      <h2 class="entry-title">
                        <a href="<?php echo get_permalink(); ?>">
                          <?php the_title(); ?>
                        </a>
                      </h2>
                    </div>

                    <div class="entry-content">
                      <?php the_excerpt(); ?>

                      <a href="<?php echo get_permalink(); ?>"> <?php _e('Seguir leyendo', 'industrial'); ?> </a>
                    </div>
                  </div>
                </article>

                <hr>

              <?php
              // End of the loop.
              endwhile;
            ?>
            <nav aria-label="Page navigation example">
              <ul class="pagination">
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
              </ul>
            </nav>

          </div>
        </div>

<?php get_footer(); ?>