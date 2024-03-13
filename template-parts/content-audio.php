<?php
/**
 * The template part for displaying post 
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
<?php
  $content = apply_filters( 'the_content', get_the_content() );
  $audio = false;
  // Only get audio from the content if a playlist isn't present.
  if ( false === strpos( $content, 'wp-playlist-script' ) ) {
    $audio = get_media_embedded_in_content( $content, array( 'audio' ) );
  }
?>
<article class="row page-box p-4 mb-4">
  <div class="post-thumb col-lg-5 col-md-5">
    <?php
      if ( ! is_single() ) {
        // If not a single post, highlight the audio file.
        if ( ! empty( $audio ) ) {
          foreach ( $audio as $audio_html ) {
            echo '<div class="entry-audio">';
              echo $audio_html;
            echo '</div><!-- .entry-audio -->';
          }
        };
      };
    ?>
  </div>
  <div class="new-text col-lg-7 col-md-7">
    <?php if( get_theme_mod( 'creative_one_page_date_hide',true) != '' || get_theme_mod( 'creative_one_page_author_hide',true) != '' || get_theme_mod( 'creative_one_page_comment_hide',true) != '' || get_theme_mod( 'creative_one_page_time_hide',true) != '') { ?>
      <div class="metabox">
        <?php if( get_theme_mod( 'creative_one_page_date_hide',true) != '') { ?>
          <span class="entry-date me-3"><a href="<?php echo esc_url( get_day_link( $archive_year, $archive_month, $archive_day)); ?>"><?php echo esc_html( get_the_date() ); ?><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a></span><?php echo esc_html( get_theme_mod('creative_one_page_metabox_separator_blog_post') ); ?>
        <?php } ?>
        <?php if( get_theme_mod( 'creative_one_page_author_hide',true) != '') { ?>
          <span class="entry-author me-3"><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?><span class="screen-reader-text"><?php the_author(); ?></span></a></span><?php echo esc_html( get_theme_mod('creative_one_page_metabox_separator_blog_post') ); ?>
        <?php } ?>
        <?php if( get_theme_mod( 'creative_one_page_comment_hide',true) != '') { ?>
          <span class="entry-comments me-3"><?php comments_number( __('0 Comments','creative-one-page'), __('0 Comments','creative-one-page'), __('% Comments','creative-one-page') ); ?></span>
        <?php } ?>
        <?php if( get_theme_mod( 'creative_one_page_time_hide',false) != '') { ?>
          <span class="entry-time me-3"><?php echo esc_html( get_the_time() ); ?></span>
        <?php }?>
      </div>
    <?php }?>
    <h2 class="text-uppercase"><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php echo the_title_attribute(); ?>"><?php the_title();?><span class="screen-reader-text"><?php the_title(); ?></span></a></h2>
    <?php if(get_theme_mod('creative_one_page_blog_post_description_option') == 'Full Content'){ ?>
      <div class="entry-content"><?php the_content();?></div>
    <?php }
    if(get_theme_mod('creative_one_page_blog_post_description_option', 'Excerpt Content') == 'Excerpt Content'){ ?>
      <?php if(get_the_excerpt()) { ?>
        <div class="entry-content"><p class="my-3"><?php $creative_one_page_excerpt = get_the_excerpt(); echo esc_html( creative_one_page_string_limit_words( $creative_one_page_excerpt, esc_attr(get_theme_mod('creative_one_page_excerpt_number','20')))); ?> <?php echo esc_html( get_theme_mod('creative_one_page_post_suffix_option','...') ); ?></p></div>
      <?php }?>
    <?php }?>
    <?php if( get_theme_mod('creative_one_page_button_text','READ MORE') != ''){ ?>
      <div class="read-more-btn mt-3">
        <a href="<?php the_permalink(); ?>" class="py-3 px-4"><?php echo esc_html(get_theme_mod('creative_one_page_button_text','READ MORE'));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('creative_one_page_button_text','READ MORE'));?></span></a>
      </div>
    <?php } ?>
  </div>
  <div class="clearfix"></div>
</article>