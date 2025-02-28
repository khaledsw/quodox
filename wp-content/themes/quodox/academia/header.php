<?php
	$g5plus_options = &G5Plus_Global::get_options();
	$prefix = 'g5plus_';
	$header_responsive = isset($g5plus_options['mobile_header_responsive_breakpoint']) && !empty($g5plus_options['mobile_header_responsive_breakpoint'])
						 ? $g5plus_options['mobile_header_responsive_breakpoint'] : '991';

	$header_layout = rwmb_meta($prefix . 'header_layout');
	if (($header_layout === '') || ($header_layout == '-1')) {
		$header_layout = $g5plus_options['header_layout'];
	}
?>
<!DOCTYPE html>
<!-- Open Html -->
<html <?php language_attributes(); ?>>
	<!-- Open Head -->
	<head>
</form> 
 
		<?php wp_head(); ?>
<meta name="google-site-verification" content="OwI4tqsUva9wxny_-6HX-F0P0FMRXSNVUNXcTcTiE1I" />
<meta name="msvalidate.01" content="9612AC10C11A8F007A939E8CE566F597" />
	</head>
	<!-- Close Head -->
	<body <?php body_class(); ?> data-responsive="<?php echo esc_attr($header_responsive)?>" data-header="<?php echo esc_attr($header_layout) ?>">

<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-PT6N9X"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PT6N9X');</script>
<!-- End Google Tag Manager -->

		<?php
			/**
			 * @hooked - g5plus_site_loading - 5
			 **/
			do_action('g5plus_before_page_wrapper');
		?>
		<!-- Open Wrapper -->
		<div id="wrapper">

		<?php
		/**
		 * @hooked - g5plus_before_page_wrapper_content - 10
		 * @hooked - g5plus_page_header - 15
		 **/
		do_action('g5plus_before_page_wrapper_content');
		?>

			<!-- Open Wrapper Content -->
			<div id="wrapper-content" class="clearfix">

			<?php
			/**
			 **/
			do_action('g5plus_main_wrapper_content_start');
			?>
