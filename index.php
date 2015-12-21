<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php bloginfo('name'); ?> &#58;&#58; <?php if( is_home() ) : echo bloginfo( 'description' ); endif; ?><?php wp_title( '', true ); ?></title>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>


<?php
	/*-----------------------------------------------------------------------------------*/
	/* Start header
	/*-----------------------------------------------------------------------------------*/
?>

<header id="masthead" class="site-header" role="banner">
	<div class="container">

		<div class="gravatar">
			<?php
				// Get the desired user's email and photo
				$user_info = get_userdata(2);
				$user_email = $user_info->user_email;
				echo get_avatar( $user_email, 100 );
			?>
		</div><!--/ author -->

		<div id="brand">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a> &#58;&#58; <span><?php echo get_bloginfo( 'description' ); ?></span></h1>
		</div><!-- /brand -->

		<nav role="navigation" class="site-navigation main-navigation">
			<ul>
				<li class="page_item page-item-2">
					<a href="http://www.anthonydebarros.com/about/">About</a>
				</li>
				<li class="page_item page-item-2265">
					<a href="http://www.anthonydebarros.com/awards/">Awards</a>
				</li>
                <li class="page_item">
                    <a href="http://www.anthonydebarros.com/index/">Index</a>
                </li>
				<li class="page_item">
					<a href="http://www.github.com/anthonydb/">GitHub</a>
				</li>
				<li class="page_item">
					<a href="http://www.anthonydb.com">Sandbox</a>
				</li>
				<li class="page_item page-item-9">
					<a href="http://www.anthonydebarros.com/clips/">Clips</a>
				</li>
				<li class="page_item page-item-526">
					<a href="http://www.anthonydebarros.com/contact/">Contact</a>
				</li>
			</ul>
		</nav><!-- .site-navigation .main-navigation -->

		<div class="clear"></div>
	</div><!--/container -->

</header><!-- #masthead .site-header -->

<div class="container">

	<div id="primary">
		<div id="content" role="main">


<?php
	/*-----------------------------------------------------------------------------------*/
	/* Start Home loop
	/*-----------------------------------------------------------------------------------*/

	if( is_home() || is_archive() ) {

?>
			<?php if ( have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<article class="post">

						<h1 class="title">
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
								<?php the_title() ?>
							</a>
						</h1>
						<div class="post-meta">
							<?php if( comments_open() ) : ?>
								<span class="comments-link">
									<?php the_time('M j, Y'); ?><?php _e(' &#124; '); ?> <?php comments_popup_link( __( 'Comment', 'break' ), __( '1 Comment', 'break' ), __( '% Comments', 'break' ) ); ?>
								</span>
							<?php endif; ?>

						</div><!--/post-meta -->

						<div class="the-content">
							<?php the_content( 'Continue...' ); ?>

							<?php wp_link_pages(); ?>
						</div><!-- the-content -->

						<div class="meta clearfix">
							<div class="category"><?php the_category(', '); ?></div>
							<div class="tags"><?php echo get_the_tag_list( '| &nbsp;', '&nbsp;' ); ?></div>
						</div><!-- Meta -->

					</article>

				<?php endwhile; ?>

				<!-- pagination -->
				<div id="pagination" class="clearfix">
					<div class="past-page"><?php previous_posts_link( 'Newer &raquo;' ); ?></div>
					<div class="next-page"><?php next_posts_link( ' &laquo; Older' ); ?></div>
				</div><!-- pagination -->


			<?php else : ?>

				<article class="post error">
					<h1 class="404">Nothing posted yet</h1>
				</article>

			<?php endif; ?>


	<?php } //end is_home(); ?>

<?php
	/*-----------------------------------------------------------------------------------*/
	/* Start Single loop
	/*-----------------------------------------------------------------------------------*/

	if( is_single() ) {
?>


			<?php if ( have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<article class="post">

						<h1 class="title"><?php the_title() ?></h1>
						<div class="post-meta">
							<?php if( comments_open() ) : ?>
								<span class="comments-link">
									<?php the_time('M j, Y'); ?><?php _e(' &#124; '); ?> <?php comments_popup_link( __( 'Comment', 'less' ), __( '1 Comment', 'less' ), __( '% Comments', 'less' ) ); ?>
								</span>
							<?php endif; ?>

						</div><!--/post-meta -->

						<div class="the-content">
							<?php the_content( 'Continue...' ); ?>

							<?php wp_link_pages(); ?>
						</div><!-- the-content -->

						<div class="meta clearfix">
							<div class="category"><?php the_category(', '); ?></div>
							<div class="tags"><?php echo get_the_tag_list( '| &nbsp;', '&nbsp;' ); ?></div>
						</div><!-- Meta -->

					</article>

				<?php endwhile; ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() )
						comments_template( '', true );
				?>


			<?php else : ?>

				<article class="post error">
					<h1 class="404">Nothing posted yet</h1>
				</article>

			<?php endif; ?>


	<?php } //end is_single(); ?>

<?php
	/*-----------------------------------------------------------------------------------*/
	/* Start Page loop
	/*-----------------------------------------------------------------------------------*/

	if( is_page()) {
?>

			<?php if ( have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<article class="post">

						<h1 class="title"><?php the_title() ?></h1>

						<div class="the-content">
							<?php the_content(); ?>

							<?php wp_link_pages(); ?>
						</div><!-- the-content -->

					</article>

				<?php endwhile; ?>

			<?php else : ?>

				<article class="post error">
					<h1 class="404">Nothing posted yet</h1>
				</article>

			<?php endif; ?>

	<?php } // end is_page(); ?>

		</div><!-- #content .site-content -->
	</div><!-- #primary .content-area -->

</div><!-- / container-->

<?php
	/*-----------------------------------------------------------------------------------*/
	/* Start Footer
	/*-----------------------------------------------------------------------------------*/
?>

<footer class="site-footer" role="contentinfo">
	<div class="site-info container">
		<?php do_action( 'break_credits' ); ?>
		<p>Copyright 2009-2016 Anthony DeBarros<br />
		I'm <a href="https://github.com/anthonydb/Less">hacking</a> on the <a href="http://lessmade.com/themes/less" rel="theme">LESS</a> theme by <a href="http://jarederickson.com" rel="designer">Jared Erickson</a>.
		Hosting is by <a href="http://www.webfaction.com/signup?affiliate=adebarros" >WebFaction</a>. </p>
	</div><!-- .site-info -->
</footer><!-- #colophon .site-footer -->

<?php wp_footer(); ?>

<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-11819184-2");
pageTracker._trackPageview();
} catch(err) {}</script>

</body>
</html>
