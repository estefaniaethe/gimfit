<?php get_header(); ?>
    <main class="contenedor pagina seccion con-sidebar">
        <div class="contenido-principal">
            <?php get_template_part('templates-parts/paginas'); ?>
        </div>
        <?php get_sidebar('clases'); ?>
    </main>
<?php get_footer(); ?>