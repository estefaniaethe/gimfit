<?php while( have_posts() ): the_post(); ?>
    <h1 class="text-center texto-primario"><?php the_title(); ?></h1>

    <?php 
        if(has_post_thumbnail() ):
             the_post_thumbnail('blog', array('class' => 'imagen-destacada'));
         endif;   
    ?>

    <?php // Revisar si el custom post type es clases
        if(get_post_type() === 'gymfitness_clases'){
                $hora_inicio = get_field('hora_inicio');
                $hora_fin = get_field('hora_fin'); ?>
                <p class="information-clase"><?php the_field('dias_clases'); ?> - <?php echo $hora_inicio . " a " . $hora_fin?></P>
     <?php } ?>


<?php the_content(); ?>

<?php endwhile; ?> 