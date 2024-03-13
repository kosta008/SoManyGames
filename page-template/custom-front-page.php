<?php
/**
 * Template Name: Custom home
 */

get_header(); ?>

<main role="main" id="maincontent">
  <?php do_action( 'creative_one_page_above_slider' ); ?>

  <?php if( get_theme_mod( 'creative_one_page_slider_hide', false) != '' || get_theme_mod( 'creative_one_page_responsive_slider', false) != '') { ?>
    <section id="slider" class="mw-100 m-auto p-0">
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-interval="<?php echo esc_attr(get_theme_mod('creative_one_page_slider_speed_option', 3000)); ?>"> 
        <?php $creative_one_page_slider_pages = array();
          for ( $count = 1; $count <= 4; $count++ ) {
            $mod = intval( get_theme_mod( 'creative_one_page_slider_page' . $count ));
            if ( 'page-none-selected' != $mod ) {
              $creative_one_page_slider_pages[] = $mod;
            }
          }
          if( !empty($creative_one_page_slider_pages) ) :
            $args = array(
              'post_type' => 'page',
              'post__in' => $creative_one_page_slider_pages,
              'orderby' => 'post__in'
            );
            $query = new WP_Query( $args );
            if ( $query->have_posts() ) :
              $i = 1;
        ?>     
        <div class="carousel-inner" role="listbox">
          <?php  while ( $query->have_posts() ) : $query->the_post(); ?>
            <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
              <?php if(has_post_thumbnail()){
                  the_post_thumbnail();
              } else{?>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/theme-block-pattern/images/banner.png" alt="" />
              <?php } ?>
              <div class="carousel-caption">
                <?php if( get_theme_mod('creative_one_page_slider_title_Show_hide',true) != ''){ ?>
                  <h1 class="m-0"><?php the_title(); ?></h1>
                <?php } ?>
                <?php if( get_theme_mod('creative_one_page_slider_content_Show_hide',true) != ''){ ?>
                  <p class="py-2"><?php $creative_one_page_excerpt = get_the_excerpt(); echo esc_html( creative_one_page_string_limit_words( $creative_one_page_excerpt, esc_attr(get_theme_mod('creative_one_page_slider_excerpt_length','20')))); ?></p>
                <?php } ?>
                <?php if( get_theme_mod('creative_one_page_slider_button','Read More') != ''){ ?>
                  <div class="read-btn mt-4">
                    <a href="<?php the_permalink(); ?>"><?php echo esc_html(get_theme_mod('creative_one_page_slider_button','Read More'));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('creative_one_page_slider_button','Read More'));?></span></a>
                  </div>
                <?php } ?>
              </div>
            </div>
          <?php $i++; endwhile; 
          wp_reset_postdata();?>
        </div>
        <?php else : ?>
          <div class="no-postfound"></div>
        <?php endif;
        endif;?>
        <div class="slider-nex-pre">
          <a class="carousel-control-prev" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev" role="button">
            <span class="carousel-control-prev-icon w-auto h-auto" aria-hidden="true"><i class="fas fa-long-arrow-alt-left p-3"></i></span>
            <span class="screen-reader-text"><?php esc_html_e( 'Previous','creative-one-page' );?></span>
          </a>
          <a class="carousel-control-next" data-bs-target="#carouselExampleCaptions" data-bs-slide="next" role="button">
            <span class="carousel-control-next-icon w-auto h-auto" aria-hidden="true"><i class="fas fa-long-arrow-alt-right p-3"></i></span>
            <span class="screen-reader-text"><?php esc_html_e( 'Next','creative-one-page' );?></span>
          </a>
        </div>
      </div>
      <div class="clearfix"></div>
    </section>
  <?php } ?>

  <?php do_action( 'creative_one_page_below_slider' ); ?>

  <section id="home-services">
    <div class="container">
      <div class="owl-carousel">        
        <?php $count =  get_theme_mod('creative_one_page_our_services_number'); 
          for( $i=1; $i<=$count; $i++) { ?>
            <div class="service-box text-center">
              <i class="<?php echo esc_attr(get_theme_mod('creative_one_page_our_services_icon'.$i));?>"></i>
              <h3><?php echo esc_html(get_theme_mod('creative_one_page_our_services_title'.$i));?></h3>
              <p><?php echo esc_html(get_theme_mod('creative_one_page_our_services_text'.$i));?></p>
            </div>
        <?php }?>
      </div>
    </div>
  </section>


  <section id="project" class="py-md-5">
    <div class="container">
      <div class="projects_title text-center">
        <div class="section-heading">
          <?php if(get_theme_mod('creative_one_page_projects_title') != ''){?>
            <h3><?php echo esc_html(get_theme_mod('creative_one_page_projects_title')); ?></h3>
          <?php } ?>
        </div>

        <div class="tab">
          <?php
            $tab_count = get_theme_mod('creative_one_page_tab_number', '');
            for ( $i = 1; $i<= $tab_count; $i++ ){ ?>
            <button class="tablinks" onclick="creative_one_page_category_tab(event, '<?php $main_id = get_theme_mod('creative_one_page_our_project_tab_title'.$i); $tab_id = str_replace(' ', '-', $main_id); echo $tab_id; ?> ')">
            <?php echo esc_html(get_theme_mod('creative_one_page_our_project_tab_title'.$i)); ?></button>
          <?php }?>
        </div>
      </div>
      <div class="tab-content mt-4 project_tab_content">
        <?php $tab_count = get_theme_mod('creative_one_page_tab_number'); 
          for($i=1; $i<= $tab_count; $i++ ) {?>
          <div id="<?php $main_id = get_theme_mod('creative_one_page_our_project_tab_title'.$i); $tab_id = str_replace(' ', '-', $main_id); echo $tab_id; ?>"  class="tabcontent mt-3">
            <div class="row mt-5">
              <?php
              $creative_one_page_cat_tab = get_theme_mod('creative_one_page_cate_tab'.$i);
              if($creative_one_page_cat_tab){
              $loop = new WP_Query(
                array( 
                  'posts_per_page' => get_theme_mod('creative_one_page_tab_category_limit'.$i),
                  'category_name' => esc_html( $creative_one_page_cat_tab ,'creative-one-page')
                )
              );
              while ( $loop->have_posts() ) : $loop->the_post(); ?>
              <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
                <div class="box">
                  <?php if(has_post_thumbnail()){ 
                    the_post_thumbnail(); 
                  }?>
                  <div class="box-content">
                    <h4 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                    <p class="project_para"><?php $creative_one_page_excerpt = get_the_excerpt(); echo esc_html(creative_one_page_string_limit_words($creative_one_page_excerpt,6)); ?></p>
                    <ul class="icon">
                      <li><a href="<?php the_permalink() ?>"><i class="fa fa-link"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <?php endwhile; ?>
              <?php wp_reset_query(); } ?>
            </div>
          </div>
        <?php }?>
      </div>
    </div>
  </section>







  <div id="content" class="py-5">
    <div class="container entry-content">
      <?php while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; // end of the loop. ?>
    </div>
  </div>
</main>

<?php get_footer(); ?>