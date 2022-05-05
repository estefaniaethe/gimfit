<?php get_header('front'); ?>
<section class="bienvenida text-center seccion"> 
    <h2 class="texto-primario"> <?php the_field('encabezado'); ?></h2>
    <p><?php the_field('texto_bienvenida'); ?></p>
</section>

<div class="seccion-areas">
    <ul class="contenedor-areas"> 
        <li class="area">
            <?php
                $area1 = get_field('area1');
                /* var_dump($area1); */
                $imagen = wp_get_attachment_image_src($area1['area_imagen'], 'mediano')[0];
            ?>
            <img src="<?php echo esc_attr($imagen); ?>" />
            <p> <?php echo esc_html($area1['area_texto'] ); ?></P>
        </li>
        <li class="area">
            <?php
                $area2 = get_field('area2');
                /* var_dump($area2); */
                $imagen = wp_get_attachment_image_src($area2['area_imagen'], 'mediano')[0];
            ?>
            <img src="<?php echo esc_attr($imagen); ?>" />
            <p> <?php echo esc_html($area2['area_texto'] ); ?></P>
        </li>
        <li class="area">
            <?php
                $area3 = get_field('area3');
                /* var_dump($area3); */
                $imagen = wp_get_attachment_image_src($area3['area_imagen'], 'mediano')[0];
            ?>
            <img src="<?php echo esc_attr($imagen); ?>" />
            <p> <?php echo esc_html($area3['area_texto'] ); ?></P>
        </li>
        <li class="area">
            <?php
                $area4 = get_field('area4');
                /* var_dump($area4); */
                $imagen = wp_get_attachment_image_src($area4['area_imagen'], 'mediano')[0];
            ?>
            <img src="<?php echo esc_attr($imagen); ?>" />
            <p> <?php echo esc_html($area4['area_texto'] ); ?></P>
        </li>
    </ul>
</div>

<section class="clasesA" >
    <div class="contenedor seccion">
        <h2 class="text center texto-primario">Nuestras clases</h2>

        <?php gymFit_lista_clases(4); ?>

        <div class="contenedor-boton">
           <a href="<?php echo esc_url( get_permalink( get_page_by_title('Nuestras Clases') ) ); ?>"
           class="boton boton-primario">
            ver todas las clases
            </a>
        </div>
    </div>
</section>

<section class="instructores" >
    <div class="contenedor seccion">
        <h2 class="text center texto-primario">Nuestros instructores</h2>
        <p class="text-center"> Instructores profesionales</P>
        <ul class="listado-instructores">
            <?php
                $args = array(
                    'post-type' => 'instructores',
                    'posts_per_page' => 30
                );
                $instructores = new WP_Query($args);
                while( $instructores->have_posts() ): $instructores->the_post(); ?>

            <li class="instructor">
                <?php the_post_thumbnail('mediano'); ?>
                <div class="contenido text-center">
                    <h3><?php the_title(); ?></h3>
                    <?php the_content(); ?>
                </div>
            </li>

            <?php endwhile; wp_reset_postdata(); ?>
        </ul>
</section>

<section class="testimoniales">
    <h2 class="text-center texto-blanco">Testimoniales </h2>

    <div class="contenedor-testimoniales">
        <ul class="listado-testimoniales"> 
            <?php
                $args = array(
                    'post_type' => 'testimoniales',
                    'posts_per_page' => 10
                );
                $testimoniales = new WP_Query($args);
                while($testimoniales->have_posts()): $testimoniales->the_post();   
            ?>
            <li class="testimonial text-center">
                <blockquote>
                    <?php the_content(); ?>
                </blockquote>

                <footer class="testimonial-footer">
                    <?php the_post_thumbnail('thumbnail'); ?>
                    <p><?php the_title(); ?></p>
                </footer>
                
            </li>
            <?php endwhile; wp_reset_postdata(); ?>  
        </ul>
</section>
<?php get_footer(); ?>
