<?php
/**
*
*	Activis Template Functions
*	------------------------------------------------
* 	Copyright Activis - http://www.activis.ca
*
*
*/


/**
* Header Layout
*/
if ( ! function_exists( 'activis_header_layout' ) ) {
	function activis_header_layout() {

		$options = activis_options();

		if ( empty( $options['elementor_built_integration'] ) ) :

			if ( $options['header_layout'] == '1') :
				get_template_part( 'template-parts/layout/site-header', '1' );
			elseif ( $options['header_layout'] == '2') :
				get_template_part( 'template-parts/layout/site-header', '2' );
			else :
				get_template_part( 'template-parts/layout/site-header', '1' );
			endif;

		endif;

	}
}

/**
* Header Branding
*/
if ( ! function_exists( 'activis_header_brand' ) ) {
	function activis_header_brand() {

		$options = activis_options();

		if ( ( isset( $options['logo']['url'] ) ) && ( trim( $options['logo']['url'] ) != "" ) ) :
			$brand_logo = $options['logo']['url'];
		?>
		<a class="brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo( 'description' ); ?>">
			<img src="<?php echo esc_url($brand_logo); ?>" alt="<?php bloginfo( 'name' ); ?>" />
		</a>
		<?php else : ?>
		<a class="brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo( 'description' ); ?>">
			<h1><?php bloginfo( 'name' ); ?></h1>
		</a>
		<?php endif;
	}
}

/**
* Mobile Navigation
*/
if ( ! function_exists( 'activis_mobile_navigation' ) ) {
	function activis_mobile_navigation() {
		get_template_part( 'template-parts/layout/mobile', 'navigation' );
	}
}

/**
* Loop
*/
if ( ! function_exists( 'activis_loop_before_layout' ) ) {
	function activis_loop_before_layout() {
		?>
			<div class="grid-sizer"></div>
		<?php
	}
}


if ( ! function_exists( 'activis_loop_after_layout' ) ) {
	function activis_loop_after_layout() {
		?>

		<?php
	}
}

/**
* Footer Layout
*/
if ( ! function_exists( 'activis_footer_layout' ) ) {
	function activis_footer_layout() {

		$options = activis_options();

		if ( empty( $options['elementor_built_integration'] ) ) :
			get_template_part( 'template-parts/layout/site', 'footer' );
		endif;

		if ( $options['general_backtotop'] == '1' ) { ?>
			<a href="#0" class="ui-to-top"><?php _e('Top', 'activis'); ?></a>
		<?php }

	}
}

/**
* Search Layout
*/
if ( ! function_exists( 'activis_search_layout' ) ) {
	function activis_search_layout() {

		$options = activis_options();

		if ( $options['general_advanced_search'] =='1' && class_exists('SWP_Query') ) {
			get_template_part( 'template-parts/content/content', 'searchwp' );
		} else {
			get_template_part( 'template-parts/content/content', 'search' );
		}

	}
}

/**
* 404 Layout
*/
if ( ! function_exists( 'activis_notfound_layout' ) ) {
	function activis_notfound_layout() {
		get_template_part( 'template-parts/layout/site', '404' );
	}
}


/**
 * Google Analytics Code
 */
if ( ! function_exists( 'activis_ga_js' ) ) {
	function activis_ga_js() {
		$options = activis_options();
		if ( (isset( $options['analytics_google_analytics_code'] ) ) && trim( $options['analytics_google_analytics_code'] ) != "" ) {
			echo $options['analytics_google_analytics_code'];
		}
	}
}

/**
 * Google Tag Manager (Head)
 */
if ( ! function_exists( 'activis_ga_tag_js_head' ) ) {
	function activis_ga_tag_js_head() {
		$options = activis_options();
        $setting = $options['analytics_google_tag_manager_code_head'];
		if ( (isset( $options['analytics_google_tag_manager_code_head'] ) ) && trim( $options['analytics_google_tag_manager_code_head'] ) != "" ) {
			echo $options['analytics_google_tag_manager_code_head'];
		}
	}
}


/**
 * Google Tag Manager (Body)
 */
if ( ! function_exists( 'activis_ga_tag_js_body' ) ) {
	function activis_ga_tag_js_body() {
		$options = activis_options();
		if ( (isset( $options['analytics_google_tag_manager_code_body'] ) ) && trim( $options['analytics_google_tag_manager_code_body'] ) != "" ) {
			echo $options['analytics_google_tag_manager_code_body'];
		}
	}
}


/**
 * JS Header
 */
if ( ! function_exists( 'activis_header_js' ) ) {
	function activis_header_js() {
		$options = activis_options();
		if ( (isset( $options['header_js'] ) ) && trim( $options['header_js'] ) != "" ) {
			echo $options['header_js'];
		}
	}
}


/**
 * JS Footer
 */
if ( ! function_exists( 'activis_footer_js' ) ) {
	function activis_footer_js() {
		$options = activis_options();
		if ( (isset( $options['footer_js'] ) ) && trim( $options['footer_js'] ) != "" ) {
			echo $options['footer_js'];
		}
	}
}
