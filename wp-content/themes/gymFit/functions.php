<?php

/* consultas reutilizables */

require get_template_directory() . '/inc/queries.php';

/* cuando el tema es activado */
function gymFit_setup() {
/* habilitar imagenes destacadas */
    add_theme_support('post-thumbnails');
    add_image_size('square', 350, 350, true);
    add_image_size('portait', 350, 724, true);
    add_image_size('cajas', 400, 375, true);
    add_image_size('blog', 966, 644, true);
}

add_action('after_setup_theme', 'gymFit_setup');

/* funciones mas personalizadas en functions.php */
/* no soporta modern view controler */
//Menus de navegación, agregar más usando arreglos

/* ESTA FUNCION tiene dos valores, lo que entiende wp y lo que el usuario ve y se coloca el dominio declarado */
/* las funciones se agregan a hooks: los hooks son funciones que corren en determinado tiempo y lugar */
/* 3 pasos: definir el espacio en el que se va a crear el menú, crearlo asignarlo y donde se va a ver */
function gymfit_menus() {
    register_nav_menus(array(
        'menu-principal' => __( 'Menu Principal', 'gymfitflexcss' )
    ));
}
/* hook:add_action. Init:corre en cuanto wp arranque o se aloje en nuevo servidor */
add_action('init', 'gymfit_menus');

/* scrpts y styles */
/* default scripts included and registered by wordpress https://developer.wordpress.org/reference/functions/wp_enqueue_script/ */

function gymFit_scripts_styles() {
    /* se usa get template, ñpara que me traiga la url de normalize porque esta en una carpeta*/
    wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), '8.0.1');
    /* url de slicknav CSS de pluging de jquery*/
    wp_enqueue_style('slicknavCSS', get_template_directory_uri() . '/css/slicknav.min.css', array(), '1.0.0');
    /* url google Font */
    wp_enqueue_style('googleFont','https://fonts.googleapis.com/css2?family=Lato:wght@100&family=Open+Sans&family=Staatliches&display=swap', array(), '1.0.0');
    /* hoja de estilo principal archivo style css */
    /* una vez que corran las dependencias va a correr nuestra hoja de estilos */
    wp_enqueue_style('style', get_stylesheet_uri(), array('normalize', 'googleFont'), '1.0.0');
   /* url de slicknav JS, usa Jquery como dependencia, para cargar en el footer le ponemos true al final.
   Todos los archivos JS tienen que ir en el footer. Wordpress ya tiene jquery integrado*/
   
    wp_enqueue_script('slicknavJS', get_template_directory_uri() . '/js/jquery.slicknav.min.js', array('jquery'), '1.0.0', true);
    /* url de script JS, le paso dependencia jquery y slicknavJS */
    wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery', 'slicknavJS'), '1.0.0', true);
}

/* este hook:cargar hojas de estilo en la parte frontal de la web */
add_action('wp_enqueue_scripts', 'gymFit_scripts_styles');
/* este hook corre dentro de otra funcion para que se vean los estilos: wp_head, se lcoloca en el head del header.php */

/* 
handle:el nombre del archivo:string
src:getstylesheet:uri: leer ruta, toma ruta del servidor
dependencias
version
media:donde se cargara la hoja de stylos, el default viene siendo todos, lo puedes eliminar
 */