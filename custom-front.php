<?php
/*
Template Name: Custom Front
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php bloginfo('name'); ?> | <?php if( is_home() ) : echo bloginfo( 'description' ); endif; ?><?php wp_title( '', true ); ?></title>

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

        <article class="post">
        <h1 class="title">Selected articles:</h1>
            <div class="front-post-label">Python:</div>
                    <?php query_posts('post_type=post&post_status=publish&cat=18&posts_per_page=20&paged='. get_query_var('paged')); ?>
                    <?php if (have_posts()) : while (have_posts()) : the_post();?>
                    <div class="front-post" id="post-<?php the_ID(); ?>">
                        <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title();?></a>
                        <span style="text-decoration: none; font-size: 12px; color: #96A08D";> <?php the_time('m.d.Y'); ?> | <?php comments_number(' 0 c', ' 1 c', ' % c'); ?></span></h2>
                    </div>
                    <?php endwhile; endif; wp_reset_query(); ?>
            <div class="front-post-label">SQL:</div>
                    <?php query_posts('post_type=post&post_status=publish&cat=4&posts_per_page=20&paged='. get_query_var('paged')); ?>
                    <?php if (have_posts()) : while (have_posts()) : the_post();?>
                    <div class="front-post" id="post-<?php the_ID(); ?>">
                        <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title();?></a>
                        <span style="text-decoration: none; font-size: 12px; color: #96A08D";> <?php the_time('m.d.Y'); ?> | <?php comments_number(' 0 c', ' 1 c', ' % c'); ?></span></h2>
                    </div>
                    <?php endwhile; endif; wp_reset_query(); ?>
            <div class="front-post-label">Journalism:</div>
                    <?php query_posts('post_type=post&post_status=publish&cat=13&posts_per_page=20&paged='. get_query_var('paged')); ?>
                    <?php if (have_posts()) : while (have_posts()) : the_post();?>
                    <div class="front-post" id="post-<?php the_ID(); ?>">
                        <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title();?></a>
                        <span style="text-decoration: none; font-size: 12px; color: #96A08D";> <?php the_time('m.d.Y'); ?> | <?php comments_number(' 0 c', ' 1 c', ' % c'); ?></span></h2>
                    </div>
                    <?php endwhile; endif; wp_reset_query(); ?>
            <div class="front-post-label">Data analysis:</div>
                    <?php query_posts('post_type=post&post_status=publish&cat=9&posts_per_page=20&paged='. get_query_var('paged')); ?>
                    <?php if (have_posts()) : while (have_posts()) : the_post();?>
                    <div class="front-post" id="post-<?php the_ID(); ?>">
                        <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title();?></a>
                        <span style="text-decoration: none; font-size: 12px; color: #96A08D";> <?php the_time('m.d.Y'); ?> | <?php comments_number(' 0 c', ' 1 c', ' % c'); ?></span></h2>
                    </div>
                    <?php endwhile; endif; wp_reset_query(); ?>
            <div class="front-post-label">Life:</div>
                    <?php query_posts('post_type=post&post_status=publish&cat=12&posts_per_page=20&paged='. get_query_var('paged')); ?>
                    <?php if (have_posts()) : while (have_posts()) : the_post();?>
                    <div class="front-post" id="post-<?php the_ID(); ?>">
                        <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title();?></a>
                        <span style="text-decoration: none; font-size: 12px; color: #96A08D";> <?php the_time('m.d.Y'); ?> | <?php comments_number(' 0 c', ' 1 c', ' % c'); ?></span></h2>
                    </div>
                    <?php endwhile; endif; wp_reset_query(); ?>

        </article>
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
