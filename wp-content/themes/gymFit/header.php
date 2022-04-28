<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>
    
<header class="site-header">
   <div class="contenedor">
       <div class="barranavegacion">
           <div class="logo">
               <!-- get_template_directory_uri es la ruta del tema de manera portable -->
                <!-- se obtiene con esta funcion la instalacion que tengas, de esta forma las imagenes que esten en la carpeta del tema sera portable -->
               <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="logo-sitio">
           </div>
           <?php
                $args = array(
                    'theme_location' => 'menu-principal',
                    'container' => 'nav',
                    'container_class' => 'menu-principal'
                );
                wp_nav_menu($args);
           ?>
       </div>
   </div>
</header>