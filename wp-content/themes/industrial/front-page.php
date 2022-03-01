<?php get_header(); ?>
        <main>
            <div class="main-slider">
                <div class="main-slide">  <div class="section-cont">                        
                            <div class="main-slide__cont">
                                <h2>Transformadores</h2>
                                <p>La corporación ARTECHE tiene su sede principal en Mungia España.
    Sus equipos están presentes e instalados en todos los
    continentes.</p><p>Con amplia experiencia ganada a lo largo de los más de 70
    años de vida en el sector eléctrico, ofrece equipos de calidad y soluciones de alta confiabilidad.</p>
                            </div>
                        </div>                  
                    <div class="main-inner">
                        <img class="main-image" src="<?php bloginfo('template_url') ?>/img/transportador-arteche.jpg">                        
                        
                    </div>
                </div>
                <div class="main-slide"> 
                        <div class="section-cont">
                            <div class="main-slide__cont">
                                <h2>Transformadores de Instrumentación</h2>
                                <p>La corporación ARTECHE tiene su sede principal en Mungia España.
    Sus equipos están presentes e instalados en todos los
    continentes.</p><p>Con amplia experiencia ganada a lo largo de los más de 70
    años de vida en el sector eléctrico, ofrece equipos de calidad y soluciones de alta confiabilidad.</p>
                            </div>
                        </div>
                    <div class="main-inner">
                        <img class="main-image" src="<?php bloginfo('template_url') ?>/img/ejbanner1.jpg">                   
                        
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
                <h2 class="wow animate__animated  animate__fadeInLeft">
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
                <h2 class="wow animate__animated animate__fadeInLeft">Por qué confiar en nosotros</h2>
                <div class="competencias-slider gap-25"> 
                    <div class="competencias-slide">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-star" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#e39b22" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                    </svg>
                    <h3>Representantes exclusivos</h3>
                    <p>Marcas reconocidas a nivel mundial, por sus productos de alto nivel tecnológico, comprobada garantía técnica y confiabilidad.</p>
                    </div>
                    <div class="competencias-slide">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-certificate" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#e39b22" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <circle cx="15" cy="15" r="3" />
                    <path d="M13 17.5v4.5l2 -1.5l2 1.5v-4.5" />
                    <path d="M10 19h-5a2 2 0 0 1 -2 -2v-10c0 -1.1 .9 -2 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -1 1.73" />
                    <line x1="6" y1="9" x2="18" y2="9" />
                    <line x1="6" y1="12" x2="9" y2="12" />
                    <line x1="6" y1="15" x2="8" y2="15" />
                    </svg>
                    <h3>Certificación<br>ISO</h3><p>
                    Equipos operando en las redes eléctricas de muchos países alrededor del mundo a plena satisfacción de los clientes usuarios.</p>
                    </div>
                    <div class="competencias-slide">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-school" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#e39b22" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M22 9l-10 -4l-10 4l10 4l10 -4v6" />
                    <path d="M6 10.6v5.4a6 3 0 0 0 12 0v-5.4" />
                    </svg>
                    <h3>Servicio personalizado</h3><p>
                    Atención de excelencia y calidad profesional solucionando los problemas que pudieran tener nuestros clientes en sus proyectos.</p>
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
                <h2 class="wow animate__animated animate__fadeInLeft">
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