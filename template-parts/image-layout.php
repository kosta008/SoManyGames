<?php
/**
 * The template part for displaying Image content
 *
 * @package Creative One Page
 * @subpackage creative-one-page
 * @since creative-one-page 1.0
 */
?>	
<?php 
  $archive_year  = get_the_time('Y'); 
  $archive_month = get_the_time('m'); 
  $archive_day   = get_the_time('d'); 
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="entry-content">
        <h1><?php the_title();?></h1>
        <div class="entry-attachment">
            <div class="attachment">
                <?php creative_one_page_the_attached_image(); ?>
            </div>

            <?php if ( has_excerpt() ) : ?>
                <div class="entry-caption">
                    <div class="entry-content">
                        <?php the_excerpt(); ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>    
        <?php
            the_content();
            wp_link_pages( array(
                'before' => '<div class="page-links">' . __( 'Pages:', 'creative-one-page' ),
                'after'  => '</div>',
            ) );
        ?>
    </div>
    <?php edit_post_link( __( 'Edit', 'creative-one-page' ), '<footer role="contentinfo" class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?> 
</article>   
<?php
    // If comments are open or we have at least one comment, load up the comment template
    if ( comments_open() || '0' != get_comments_number() )
        comments_template();

    if ( is_singular( 'attachment' ) ) {
        // Parent post navigation.
        the_post_navigation( array(
            'prev_text' => _x( '<span class="meta-nav text-uppercase p-2">Published in</span><span class="post-title my-3 mx-0">%title</span>', 'Parent post link', 'creative-one-page' ),
        ) );
    }   elseif ( is_singular( 'post' ) ) {
        // Previous/next post navigation.
        the_post_navigation( array(
            'next_text' => '<span class="meta-nav text-uppercase p-2" aria-hidden="true">' . __( 'Next', 'creative-one-page' ) . '</span> ' .
                '<span class="screen-reader-text">' . __( 'Next post:', 'creative-one-page' ) . '</span> ' .
                '<span class="post-title my-3 mx-0">%title</span>',
            'prev_text' => '<span class="meta-nav text-uppercase p-2" aria-hidden="true">' . __( 'Previous', 'creative-one-page' ) . '</span> ' .
                '<span class="screen-reader-text">' . __( 'Previous post:', 'creative-one-page' ) . '</span> ' .
                '<span class="post-title my-3 mx-0">%title</span>',
        ) );
    }
?>