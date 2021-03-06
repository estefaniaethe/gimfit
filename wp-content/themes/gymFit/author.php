<?php get_header(); ?>

<main class="pagina seccion no-sidebars contenedor">

    <?php
        $author = get_queried_object();
    ?>

    <h2 class="text-center texto-primario">Author: <?php  echo $author->data->display_name; ?> </h2>

    <p class="text-center"><?php echo get_the_author_meta('description', $author->data->ID)?></p>

    <ul class="listado-blog">
        <?php get_template_part('templates-parts/loop', 'blog'); ?>
    </ul>
</main>

<?php get_footer(); ?>