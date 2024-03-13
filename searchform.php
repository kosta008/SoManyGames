<?php
/**
 * The template for displaying search forms in creative-one-page
 *
 * @package Creative One Page
 */
?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text"><?php echo esc_html_x( 'Search for:', 'label', 'creative-one-page' ); ?></span>
		<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search', 'placeholder','creative-one-page' ); ?>" value="<?php echo esc_attr( get_search_query()) ?>" name="s">
	</label>
	<input type="submit" class="search-submit" value="<?php echo esc_html_x( 'Search', 'submit button','creative-one-page' ); ?>">
</form>