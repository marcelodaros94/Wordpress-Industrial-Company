<?php get_header(); ?>
        <main>
            <div class="main-slider">
                <div class="main-slide" style="background: linear-gradient(to left, rgba(255, 255, 255, 0), black), url(<?php bloginfo('template_url') ?>/img/ejbanner1.jpg) center center no-repeat;">                    
                    <div class="section-cont">
                        <div class="main-slide__cont">
                            <h2>Subestaciones y Líneas de Transmisión de M.T y A.T.</h2>
                            <p>Nuestras representadas son marcas de reconocido prestigio, son fabricantes con amplia experiencia, por ello proponemos productos de alta confiabilidad y garantía comprobada.</p>
                        </div>
                    </div>
                </div>
            </div>
        </main>        
        <?php
            $args=array(
                'post_type' => 'industrial_clientes',
                'posts_per_page' => 6,
                'orderby' => 'publish_date',
                'order' => 'ASC'
            );
            $loop=new WP_Query($args);
            if($loop->have_posts()){ 
        ?>
        <section id="clientes">
            <div class="section-cont">
                <h2>
                    Nuestros clientes
                </h2>
                <div class="clientes-slider gap-25">                                       
                    <?php
                        while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    <div class="clientes-slide">
                        <?php echo get_the_post_thumbnail($loop->ID); ?>
                    </div>
                    <?php
                        endwhile;
                    ?> 
                </div>
            </div>
        </section>        
        <?php
            }
        ?>
        <section id="competencias">
            <div class="section-cont">
                <h2>Por qué confiar en nosotros</h2>
                <div class="competencias-slider gap-25">
                    <div class="competencias-slide">
                        <h3>Calidad</h3>
                        <p>Como profesionales de vocación tenemos un compromiso</p>
                    </div>
                    <div class="competencias-slide">
                        <h3>Pasión</h3>
                        <p>Por ello sabemos en todo momento lo que necesitas.</p>
                    </div>
                </div>
            </div>
        </section>
        <?php
            $args=array(
                'post_type' => 'representadas',
                'posts_per_page' => 6,
                'orderby' => 'publish_date',
                'order' => 'ASC'
            );
            $loop=new WP_Query($args);
            if($loop->have_posts()){ 
        ?>
        <section id="representadas">
            <div class="section-cont">
                <h2>
                    Nuestras representadas
                </h2>
                <div class="representadas-slider gap-25">                                       
                    <?php
                        while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    <div class="representadas-slide">                                              
                        <a href="<?php echo get_the_permalink($loop->ID) ?>">
                        <?php echo get_the_post_thumbnail($loop->ID); ?>
                        </a>
                    </div>
                    <?php
                        endwhile;
                    ?> 
                </div>
                <!--<center><a href="<?php /*echo get_bloginfo('url');*/ ?>/representadas" class="btn btn-warning">Ver productos</a></center>-->
            </div>
        </section>
        <?php } ?>
<?php get_footer(); ?>