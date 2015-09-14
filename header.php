<?php update_option('siteurl','http://rocklinestates.com');
    update_option('home','http://rocklinestates.com'); ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php wp_title(''); if(!is_home()) { echo ' | '; echo bloginfo('name'); } else { echo "Rocklin Estates, a manufactured home community for seniors, Rocklin, CA"; } ?></title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/min/reset.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/min/text.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/min/960_12_col.css" />
	<link href='http://fonts.googleapis.com/css?family=Volkhov:400italic|Shanti' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Nobile:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" />
	
	<?php wp_head(); ?>
</head>

<body class="container_12">
<a href="<?php bloginfo('url'); ?>" id="headerlink">
	<header id="top">
		<img class="grid_2 nostyle" src="<? bloginfo('template_directory'); ?>/img/logo.png" />
		<div id="titles" class="grid_7">
			<h1><?php bloginfo('name'); ?></h1>
			<h2><?php bloginfo('description'); ?></h2>
		</div> <!-- End titles  -->
		<div class="grid_2" id="outsideLinks">
			<ul>
				<li><a href="http://sigristhomes.com/">Sigrist Homes</a></li>
			</ul>
		</div> <!-- End outsideLinks -->
	</header>
</a>
	
	<div id="mainbody">
	
	<nav>
			<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'container_class' => 'menu-header','theme_location'=>'primary','container'=>'false','fallback_cb'=>'') ); ?></footer>
		
			
	<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
	        <input class="searchinput" type="search"  placeholder="Search..." value="" name="s" id="s" />
	</form>
	</nav>
