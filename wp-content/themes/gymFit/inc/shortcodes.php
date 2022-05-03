 <?php

function foobar_func( $atts ){
	$ubicacion = get_field('ubicacion')

    echo "<pre>";
    var_dump($ubicacion);
    echo "</pre>";
}
add_shortcode( 'foobar', 'foobar_func' );

?>