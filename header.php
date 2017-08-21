<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>
		
		<div class="svgSpriteWrapper hidden">
    	    <?php include_once('dist/img/icons/symbol/svg/sprite.symbol.svg'); ?>
    	</div>
    	
    	<!--[if lt IE 9]>
      <div class="browsehappy">
        <p>
          You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" target="_blank">upgrade your browser</a> to improve your experience.
        </p>
      </div>
    <![endif]-->
    
	    <header class="header container grid padding-top_alpha-one padding-bottom_alpha-two" role="banner">
		    <div class="col-4_xs-11 grid grid-center grid-middle">
			    <h2 class="font_serif col-10_xs-12 text_center h5 clr_mughal-green no-margins logo"><a href="<?php echo home_url(); ?>">The Natural Store</a></h1>
				<span class="col-10_xs-12 text_center text_sub clr_dim-grey subtitle">Est 1995</span>
		    </div>
		    <button class="nav-burger col-0_xs-1 grid-middle">
			    <svg xmlns="http://www.w3.org/2000/svg" viewBox="-18522.164 -23561.404 19.328 17.809"><defs><style>.a{fill:none;stroke:#313639;stroke-width:2px;}</style></defs><g transform="translate(-18882 -23599)"><line class="a open-lines" x2="17.125" transform="translate(360.938 38.596)"/><line class="a open-lines" x2="17.125" transform="translate(360.938 46.5)"/><line class="a open-lines" x2="17.125" transform="translate(360.938 54.404)"/><line class="a close-lines" x1="18" y2="16" transform="translate(360.5 38.5)"/><line class="a close-lines" x2="18" y2="16" transform="translate(360.5 38.5)"/></g></svg>
			</button>
			<div class="nav-background"></div>
		    <nav id="main-nav" class="main-menu col-8_xs-12" role="navigation">
				<?php html5blank_nav(); ?>
			</nav>
	   	</header>	

