<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

	?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php
		/* We add some JavaScript to pages with the comment form
		 * to support sites with threaded comments (when in use).
		 */
		if ( is_singular() && get_option( 'thread_comments' ) )
			wp_enqueue_script( 'comment-reply' );

		/* Always have wp_head() just before the closing </head>
		 * tag of your theme, or you will break many plugins, which
		 * generally use this hook to add elements to <head> such
		 * as styles, scripts, and meta tags.
		 */
		wp_head();
	?>
</head>

<body <?php body_class(); ?>>

	<div id="cabecalho" class="img_braininside alturaMaximaHeader">
		<div id="interno_cabecalho" class="alturaMaximaHeader larguraMaxima centralizarCorpo">
        	<div id="logo" class="img_logo tamanhoLogo"></div>
            <div id="menu" class="img_moldura_menu tamanhoMenu">
            	<ul class="menu">
					<li><a href="http://localhost/braininside/">HOME</a></li>
					<li><a href="#"><img border="0" src="wp-content/themes/braininside/images/m_sep.png" /></a></li>
			
					<li><a href="#">ARTIGOS</a></li>
					<li><a href="#"><img border="0" src="wp-content/themes/braininside/images/m_sep.png" /></a></li>
			
					<li><a href="http://localhost/braininside/projetos.php">PROJETOS</a></li>
					<li><a href="#"><img border="0" src="wp-content/themes/braininside/images/m_sep.png" /></a></li>
			
					<li><a href="http://localhost/braininside/contato.php">CONTATO</a></li>
				</ul>
            </div>
			<a href="#" alt="Siga nosso twitter!!!">
				<div id="twitter" class="img_twitter tamanhoTwitter">
				</div>
			</a>
		    <!-- O DOIS DIV's FINAIS DO CABEÇALHO DEVEm FICAR NA PAGINA QUE IMPLEMENTA O HEADER -->
	