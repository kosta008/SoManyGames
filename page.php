<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Creative One Page
 */

get_header(); ?>

<?php do_action( 'creative_one_page_page_header' ); ?>

<main role="main" id="maincontent" class="py-5">
    <div class="container">
        <?php
        $creative_one_page_left_right = get_theme_mod( 'creative_one_page_single_page_sidebar_layout','One Column');
        if($creative_one_page_left_right == 'Left Sidebar'){ ?>
            <div class="row">
                <div id="sidebar" class="col-lg-4 col-md-4 mt-3">
                    <?php dynamic_sidebar('sidebar-1'); ?>
                </div>
                <div class="col-lg-8 col-md-8 left-sidebar-page background-img-skin">
                    <?php if (get_theme_mod('creative_one_page_single_page_breadcrumb',true) != ''){ ?>
                        <div class="bradcrumbs">
                            <?php creative_one_page_the_breadcrumb(); ?>
                        </div>
                    <?php }?>
                    <?php while ( have_posts() ) : the_post(); ?>
                        <?php the_post_thumbnail(); ?>
                        <h1><?php the_title(); ?></h1>
                        <div class="entry-content"><?php the_content();?></div>
                    <?php endwhile; // end of the loop. ?>
                    <?php
                        // If comments are open or we have at least one comment, load up the comment template.
                        if ( comments_open() || get_comments_number() ) :
                            comments_template();
                        endif;
                    ?>
                    <div class="clear"></div>
                </div>
            </div>
        <?php }else if($creative_one_page_left_right == 'Right Sidebar'){ ?>
            <div class="row">
                <div class="col-lg-8 col-md-8 right-sidebar-page background-img-skin">
                    <?php if (get_theme_mod('creative_one_page_single_page_breadcrumb',true) != ''){ ?>
                        <div class="bradcrumbs">
                            <?php creative_one_page_the_breadcrumb(); ?>
                        </div>
                    <?php }?>
                    <?php while ( have_posts() ) : the_post(); ?>
                        <?php the_post_thumbnail(); ?>
                        <h1><?php the_title(); ?></h1>
                        <div class="entry-content"><?php the_content();?></div>
                    <?php endwhile; // end of the loop. ?>
                    <?php
                        // If comments are open or we have at least one comment, load up the comment template.
                        if ( comments_open() || get_comments_number() ) :
                            comments_template();
                        endif;
                    ?>
                    <div class="clear"></div>
                </div>
                <div id="sidebar" class="col-lg-4 col-md-4 mt-3">
                    <?php dynamic_sidebar('sidebar-1'); ?>
                </div>
            </div>
        <?php }else if($creative_one_page_left_right == 'One Column'){ ?>
            <div class="container background-img-skin">
                    <?php if (get_theme_mod('creative_one_page_single_page_breadcrumb',true) != ''){ ?>
                        <div class="bradcrumbs">
                            <?php creative_one_page_the_breadcrumb(); ?>
                        </div>
                    <?php }?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php the_post_thumbnail(); ?>
                    <h1><?php the_title(); ?></h1>
                    <div class="entry-content"><?php the_content();?></div>
                <?php endwhile; // end of the loop. ?>
                <?php
                    // If comments are open or we have at least one comment, load up the comment template.
                    if ( comments_open() || get_comments_number() ) :
                        comments_template();
                    endif;
                ?>
                <div class="clear"></div>
            </div>
        <?php }?>
    </div>
</main>

<?php do_action( 'creative_one_page_page_footer' ); ?>

<?php get_footer(); ?>