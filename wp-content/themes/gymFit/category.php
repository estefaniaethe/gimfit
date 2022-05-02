<?php get_header(); ?>

<main class="pagina seccion no-sidebars contenedor">

    <?php
        $categoria = get_queried_object();
    ?>

    <h2 class="text-center texto-primario">Categoria: <?php  echo $categoria -> name; ?> </h2>

    <ul class="listado-blog">
        <?php get_template_part('templates-parts/loop', 'blog'); ?>
    </ul>
</main>

<?php get_footer(); ?>