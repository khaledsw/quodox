<?php
/**
 * Created by PhpStorm.
 * User: phuongth
 * Date: 12/23/15
 * Time: 4:17 PM
 */
global $product;
$post_id = get_the_ID();
$start1 = get_post_meta($post_id, 'start1', true );
$start2 = get_post_meta($post_id, 'start2', true );
$start3 = get_post_meta($post_id, 'start3', true );
$start4 = get_post_meta($post_id, 'start4', true );
$start5 = get_post_meta($post_id, 'start5', true );
$duration = get_post_meta($post_id, 'duration', true );
$level = get_post_meta($post_id, 'level', true );
$course_pdf = get_post_meta($post_id, 'course_pdf', true );
$location_x = get_post_meta($post_id, 'location_x', true );
$location_y = get_post_meta($post_id, 'location_y', true );

$g5plus_options = &G5Plus_Global::get_options();

$seat_available = get_post_meta($post_id, '_stock', true);
$seat_title = isset($g5plus_options['single_product_seat_title']) && $g5plus_options['single_product_seat_title']!='' ? $g5plus_options['single_product_seat_title'] : esc_html__('Total Seat','g5plus-academia') ;
?>

<div class="summary-product entry-summary">
<?php if(isset($start1) && $start1!=''): ?>
<h4 class="p-font hd-block"><span><?php esc_html_e('Course Calender','g5plus-academia') ?></span></h4>
<?php endif; ?>

    <?php if(isset($start1) && $start1!=''): ?>
        <div class="meta">
            <span class="lb p-bg-dark"><?php echo esc_html__('Upcoming Batch','g5plus-academia'); ?></span>
            <span class="if p-bg"><?php echo esc_html(date(get_option('date_format'), strtotime(get_post_meta($post_id, 'start1', true)))) ?></span>
        </div>
    <?php endif; ?>

<?php if(isset($start2) && $start2!=''): ?>
        <div class="meta">
            <span class="lb p-bg-dark"><?php echo esc_html__('Upcoming Batch','g5plus-academia'); ?></span>
            <span class="if p-bg"><?php echo esc_html(date(get_option('date_format'), strtotime(get_post_meta($post_id, 'start2', true)))) ?></span>
        </div>
    <?php endif; ?>

<?php if(isset($start3) && $start3!=''): ?>
        <div class="meta">
            <span class="lb p-bg-dark"><?php echo esc_html__('Upcoming Batch','g5plus-academia'); ?></span>
            <span class="if p-bg"><?php echo esc_html(date(get_option('date_format'), strtotime(get_post_meta($post_id, 'start3', true)))) ?></span>
        </div>
    <?php endif; ?>

<?php if(isset($start4) && $start4!=''): ?>
        <div class="meta">
            <span class="lb p-bg-dark"><?php echo esc_html__('Upcoming Batch','g5plus-academia'); ?></span>
            <span class="if p-bg"><?php echo esc_html(date(get_option('date_format'), strtotime(get_post_meta($post_id, 'start4', true)))) ?></span>
        </div>
    <?php endif; ?>

<?php if(isset($start5) && $start5!=''): ?>
        <div class="meta">
            <span class="lb p-bg-dark"><?php echo esc_html__('Upcoming Batch','g5plus-academia'); ?></span>
            <span class="if p-bg"><?php echo esc_html(date(get_option('date_format'), strtotime(get_post_meta($post_id, 'start5', true)))) ?></span>
        </div>
    <?php endif; ?>

<div style="clear: both"></div>	
<h4 class="p-font hd-block mg-top-30">Course Summary</h4>

    <?php if(isset($duration) && $duration!=''): ?>
        <div class="meta">
            <span class="lb p-bg-dark"><?php echo esc_html__('TRAINING','g5plus-academia'); ?></span>
            <span class="if p-bg"><?php echo wp_kses_post($duration) ?></span>
        </div>
    <?php endif; ?>

    <?php if(isset($level) && $level!=''): ?>
        <div class="meta">
            <span class="lb p-bg-dark"><?php echo esc_html__('TIMES','g5plus-academia'); ?></span>
            <span class="if p-bg"><?php echo wp_kses_post($level) ?></span>
        </div>
    <?php endif; ?>

    <?php
    $meta = get_post_meta(get_the_ID(), 'course_custom_fields', TRUE);
    if(isset($meta) && is_array($meta) && count($meta['course_custom_fields'])>0){
        for($i=0; $i<count($meta['course_custom_fields']);$i++){
            ?>
            <div class="meta">
                <span class="lb  p-bg-dark"><?php echo wp_kses_post($meta['course_custom_fields'][$i]['title']) ?> </span>
                <span class="if p-bg"><?php echo wp_kses_post($meta['course_custom_fields'][$i]['description']) ?></span>
            </div>
        <?php }
    }
    ?>
    <?php if(isset($seat_available) && $seat_available!='' && $seat_available >0): ?>
        <div class="meta">
            <span class="lb p-bg-dark"><?php echo wp_kses_post($seat_title); ?></span>
            <span class="if p-bg"><?php echo esc_attr(floatval($seat_available)) ?></span>
        </div>
    <?php endif; ?>
    <?php
    $price = $product->get_price_html();
    if($price!=''): ?>
        <div class="meta">
            <span class="lb p-bg-dark"><?php echo esc_html__('Price','g5plus-academia'); ?></span>
            <span class="if p-bg"><?php echo wp_kses_post($price); ?></span>
        </div>
    <?php endif; ?>

        <div class="meta">
            <span class="lb p-bg-dark"><?php echo esc_html__('AWARDING BODY','gmswebdesign-academia'); ?></span>
            <span class="if p-bg"><?php echo 'City & Guilds'; ?></span>
        </div>


    <div style="clear: both"></div>
    <div class="enroll-wrap">
        <?php
            remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_title',5);
            remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_rating',10);
            remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_price',10);
            remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt',20);
            remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta',40);
            remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_sharing',50);
            do_action( 'woocommerce_single_product_summary' );
        ?>
    </div>
	
	<div class="details-call"<h4><i class="fa fa-phone"></i> Call Us: 0208 861 4838</h4></div>
	
<div class="widget">
	<h4 class="widget-title" style="background: #f7a700 !important;"><span><?php esc_html_e('PDF Course Structure','g5plus-academia') ?></span></h4>	
			<ul class="product-categories" style="text-align:center; list-style:none;"><li class="cat-item cat-item-45 current-cat">
			<a class="btn-width download-link single_add_to_cart_button button" href="<?php if(isset($course_pdf) && $course_pdf!=''): ?> <?php echo get_site_url(); ?>/download/<?php echo wp_kses_post($course_pdf) ?>/<?php endif; ?><?php if(isset($course_pdf) && $course_pdf=''): ?>#<?php endif; ?>">Download</a>
			</li></ul>
	</div>


    <?php if($location_x!='' && $location_y!=''): ?>
        <div class="widget">
        <h4 class="widget-title"><span><?php esc_html_e('Location map','g5plus-academia') ?></span></h4>
        <div class="location-map">
            <?php if(shortcode_exists('academia_google_map')){
                echo do_shortcode(sprintf('[academia_google_map map_style="none" location_x="%s" location_y="%s" map_height="260px"]',$location_x, $location_y));
            }
            ?>
        </div>
    </div>
    <?php endif; ?>

    <div class="widget">
        <h4 class="widget-title"><span><?php esc_html_e('Share our course','g5plus-academia') ?></span></h4>
        <?php  do_action('woocommerce_share'); ?>
    </div>
    <?php
    $prefix = 'g5plus_';
    $g5plus_options = &G5Plus_Global::get_options();
    $sidebar = isset($_GET['sidebar']) ? $_GET['sidebar'] : '';
    if (!in_array($sidebar, array('left','right'))) {
        $sidebar = rwmb_meta($prefix.'page_sidebar');
        if (($sidebar === '') || ($sidebar == '-1')) {
            $sidebar = $g5plus_options['single_product_sidebar'];
        }
    }
    $dynamic_sidebar = rwmb_meta($prefix.'page_'.$sidebar.'_sidebar');
    if (($dynamic_sidebar === '') || ($dynamic_sidebar == '-1')) {
        $dynamic_sidebar = $g5plus_options['single_product_'.$sidebar.'_sidebar'];
    }
    if (!empty($dynamic_sidebar) && is_active_sidebar($dynamic_sidebar )): ?>
        <?php dynamic_sidebar( $dynamic_sidebar );?>
    <?php endif;?>
</div>