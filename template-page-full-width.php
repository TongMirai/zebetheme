<?php
/**
 * Template Name: Page Full Width
 */
get_header();
?>
<main id="primary" class="site-main">
    <div id="content" class="site-content" >
        <?php 
            if(get_option('zebe_option_page_title_container','normal') == "full" ):
                $container = "container-fluid p-0";
            else :
                $container = "container";
            endif; 
            if(get_option('zebe_option_page_title_position') == "center" ):
                $position = 'center';
            elseif (get_option('zebe_option_page_title_position') == "right" ) :
                $position = "right";
            else :
                $position = "left";
            endif;
        ?>
        <div class="<?php echo $container; ?>">
            <?php
                if ( function_exists('yoast_breadcrumb') ) {
                    yoast_breadcrumb( '<div id="breadcrumbs" class="py-3">','</div>' );
                }
            ?>
            <div class="title-page">
		        <?php the_title( '<h1 class="entry-title underline '. $position .'">', '</h1>' ); ?>
	        </div>
        </div>
        <div class="container-fluid p-0">
            <div class="the_content">
                <?php 
                    while ( have_posts() ) : the_post();
                        get_template_part( 'template-parts/content', 'page' );
                    endwhile;
                ?>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>