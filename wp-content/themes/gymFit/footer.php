<footer class="site-footer contenedor">
    <hr>
    <div class="contenido-footer">
            <?php
           /* https://developer.wordpress.org/reference/functions/wp_nav_menu/ */
           /* se le pasan parametros al al array */
           /* them location:de los menus creados cual voy a mostrar*/
            /* se genera el nav con un container */
                $args = array(
                    'theme_location' => 'menu-principal',
                    'container' => 'nav',
                    'container_class' => 'menu-principal'
                );
                wp_nav_menu($args);
           ?>
            <p class="copyright"> Todos los derechos reservados. <?php echo get_bloginfo('name') . " " . date('Y'); ?></p>
    </div>
</footer>
<?php wp_footer(); ?>

</body>
</html>