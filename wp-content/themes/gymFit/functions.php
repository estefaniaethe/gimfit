<?php

/** Consultas reutilizables */
require get_template_directory() . '/inc/queries.php';

/* require get_template_directory() . '/inc/shortcodes.php';  */

// Cuando el tema es activado
function gymfitness_setup() {

    /* Habilitar imagenes destacadas */
    add_theme_support('post-thumbnails');

    /* titulos SEO */
    add_theme_support('title-tag'); 

    // Agregar imagenes de tamaño personalizado
    add_image_size('square', 350, 350, true);
    add_image_size('portrait', 350, 724, true);
    add_image_size('cajas', 400, 375, true);
    add_image_size('mediano', 700, 400, true);
    add_image_size('blog', 966, 644, true);
}
add_action('after_setup_theme', 'gymfitness_setup');

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

   wp_enqueue_style( 'bootstrap_css', get_stylesheet_directory_uri() . '/css/bootstrap.min.css', array(), '5.1.3'); 

   if(is_page('galeria')):
    wp_enqueue_style('lightboxCSS', get_template_directory_uri() . '/css/lightbox.min.css', array(), '2.11.0');
    endif;

    if(is_page('contacto')):
        wp_enqueue_style('leaftletCSS', 'https://unpkg.com/leaflet@1.8.0/dist/leaflet.css', array(), '1.8.0');
    endif;

    if(is_page('inicio')):
        wp_enqueue_style('bxSliderCSS', 'https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css', array(), '4.2.12');
    endif;
   /* url de slicknav JS, usa Jquery como dependencia, para cargar en el footer le ponemos true al final.
   Todos los archivos JS tienen que ir en el footer. Wordpress ya tiene jquery integrado*/
   
    wp_enqueue_script('slicknavJS', get_template_directory_uri() . '/js/jquery.slicknav.min.js', array('jquery'), '1.0.0', true);
    
    if(is_page('contacto')):
        wp_enqueue_script('leafletJS', 'https://unpkg.com/leaflet@1.8.0/dist/leaflet.js', array(jquery), '4.2.12', true);
    endif;

    if(is_page('inicio')):
        wp_enqueue_script('bxSliderJS', 'https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js' , array(), '1.8.0', true);
    endif;

    if(is_page('galeria')):
    wp_enqueue_script('lightboxJS', get_template_directory_uri() . '/js/lightbox.min.js', array('jquery'), '1.0.0', true);
    endif;

    wp_enqueue_script( 'bootstrap_js', get_stylesheet_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '5.1.3', true); 
    /* url de script JS, le paso dependencia jquery y slicknavJS */
    wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery', 'slicknavJS'), '2.11.0', true);
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

// Definir Zona de Widgets
function gymfitness_widgets() {
    register_sidebar( array(
        'name' => 'Sidebar 1', 
        'id' => 'sidebar_1',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<p class="text-center texto-primario">',
        'after_title' => '</p>'
    ));
    register_sidebar( array(
        'name' => 'Sidebar 2', 
        'id' => 'sidebar_2',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<p class="has-large-font-size">',
        'after_title' => '</p>'
    ));
}
add_action('widgets_init', 'gymfitness_widgets' );

function gymfitness_hero_image() {
    
    // obtener id pagina principal-opciones de wp
    $front_page_id = get_option('page_on_front');
    // Obtener id imagen-ver en wp
    $id_imagen = get_field('imagen_hero',  $front_page_id);
    // Obtener la imagen
    $imagen = wp_get_attachment_image_src($id_imagen, 'full')[0];

    // Style CSS-ficticia-inyectar cod css en wp(false)
    wp_register_style('custom', false);
    wp_enqueue_style('custom');

    //cod php agregar css
    $imagen_destacada_css = "
        body.home .site-header {
            background-image: linear-gradient( rgba(0,0,0,0.75), rgba(0,0,0,0.75)  ), url($imagen) ;
        }
    ";

    wp_add_inline_style('custom', $imagen_destacada_css);
}
add_action('init', 'gymfitness_hero_image');