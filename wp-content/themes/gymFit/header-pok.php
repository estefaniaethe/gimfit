<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body id="top">
        <div class="containerpok">
            <div class="img">
            <?php
                $imgField = get_field('background_image');
               /* var_dump($imgField); */ 
                $imagenback = wp_get_attachment_image_src($imgField['background_image'])[0];
            ?>
            <img src="<?php echo esc_attr($imagenback); ?>" />
            </div>
        </div> 
            
    <div class="site-wrapper">
      <div class="masthead">
            <div class="container">
                <div class="masthead-inner">
                <h3 class="masthead-brand">
                <!-- IMAGEN LOGO -->
                <a class="navbar-brand" href="<?php echo esc_url(site_url('/')) ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/POK-Consulting_3-Color_nm100x100.png" alt="logo sitio">
                </a>
                </h3>
            </div>
        </div>
      </div>

      <div class="site-wrapper-inner">
            <div class="cover-container">
                <!-- coming soon -->
                <div class="inner cover">
                    <h2 class="cover-heading"> <?php the_field('coming_soon'); ?></h2>
                <!-- boton -->
                    <p data-toggle="modal" type="button" data-target="#subscribeModal href="<?php echo esc_url( get_permalink( get_page_by_title('modal') ) ); ?>"
                    class="boton tn btn-lg btn-default btn-notify">Contact us</p>
                    <p>&copy; Web Design by: <a href="https://ethecenter.com/" target="_blank">E the Center of Marketing</a>.</p>
                </div>
        
                <!-- MODAL -->
            
            </div>
            <!-- div class="mastfoot">
                <div class="container">
                <div class="inner">
                <p>&copy; Web Design by: <a href="https://ethecenter.com/" target="_blank">E the Center of Marketing</a>.</p>
            </div> -->
        </div>
      </div>
      </div>

      
  </div>
    <script src="scripts/jquery.slim.min.js?ver=1.2.0"></script>
    <script src="scripts/bootstrap.bundle.min.js?ver=1.2.0"></script>
    <script src="scripts/main.js?ver=1.2.0"></script>
  </body>