<?php
/**
 * The template for displaying author, categories, posttypes, taxonomies, date and tag
 */

get_header(); ?>

<div class="col-md-12">
            <?php            
              $current=get_query_var('paged') ? get_query_var('paged'): 1;
              $pagination=new WP_Query(array(
                'post_type'=>'representadas',
                'posts_per_page'=>2,
                'paged'=>$current
              ));
              while($pagination -> have_posts()) : $pagination -> the_post() ?>
                <!-- beginning-->
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
                <!--end-->
              <?php
              endwhile;
              ?>
            <nav aria-label="Page navigation">
                <?php
                $totalpage=$pagination->max_num_pages;
                echo paginate_links(array(
                  'total' => $totalpage,
                  'current' => $current,
                  'type' => 'list',
                  'show_all' => true
                ));
                ?>
<!--                <li class="page-item active"><a class="page-link" href="#">1</a></li>-->
            </nav>

          </div>

<?php get_footer(); ?>