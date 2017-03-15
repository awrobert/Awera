<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
  <script src="<?php echo home_url(); ?>/js/jquery-1.11.2.min.js"></script>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
  <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
</head>

<body <?php body_class(); ?>>

<section class="wrap wrap-head">
     <div class="con con-head">
        <div class="row">
          <div class="col-md-4"><center><a href="/"><img src="<?php echo THEME_URL; ?>/img/logo.png"></a></center></div>
          <div class="col-md-5 hidden-sm hidden-xs">
            <i class="fa fa-cubes" aria-hidden="true"></i>
            <p>Кредитный портал, на котором собраны все кредитные предложения банков.</p>
          </div>
          <div class="col-md-3 hidden-sm hidden-xs">
            <font class="t1"><i class="fa fa-phone-square" aria-hidden="true"></i> 8 (999) 99-99-999</font>
            <p><font class="b1"><a href="">ЗАКАЗАТЬ ЗВОНОК</a></font></p>
          </div>
        </div>
     </div>
</section>

<!-- MENU -->
<section class="wrap wrap-menu">
     <div class="con">
               <nav class="navbar navbar-default">
                    <div class="container-fluid">
                         <div class="navbar-header">
                         <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                              <span class="sr-only">Toggle navigation</span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                         </button>
                         </div>
<?php wp_nav_menu( array( 
          'menu'              => 'Header Menu',
          'theme_location'    => 'header_menu',
          'depth'             => 2, 
          'container'         => 'div',
          'container_class'   => 'collapse navbar-collapse',
          'container_id'      => 'bs-example-navbar-collapse-1',
          'menu_class'        => 'nav navbar-nav',
          'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
          'walker'            => new wp_bootstrap_navwalker())            
); ?>
               </div>
          </nav>
     </div>
</section>
<!-- /MENU -->

