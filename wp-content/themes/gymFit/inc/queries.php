<?php

function gymFit_lista_clases() { ?>
    <ul class="lista-clases">
        <?php
            $args = array(
                'post_type' => 'gymfitness_clases',
                'post_per_page' => 10,
                'orderby' => 'title',
                'order' => 'ASC'
            );
            $clases = new WP_Query($args);
            while( $clases->have_posts()): $clases->the_post(); ?>

            <li class="card gradient">
                <?php the_post_thumbnail('mediano'); ?>
                <div class="contenido">
                    <a href="<?php the_permalink(); ?>">
                    <h3><?php the_title(); ?></h3>
                    </a>
                    
                    <?php
                    $hora_inicio = get_field('hora_inicio');
                    $hora_fin = get_field('hora_fin');
                    ?>
                    <p><?php the_field('dias_clases'); ?> - <?php echo $hora_inicio . " a " . $hora_fin?></P>
                </div>
            </li>

            <?php endwhile; wp_reset_postdata(); ?>
    </ul>
<?php

}