<?php
/**
 * Product loop course info
 *
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.4.0
 */

global $g5plus_show_archive_product_start_date,
       $g5plus_show_archive_product_duration, $g5plus_show_archive_product_teacher,$g5plus_show_archive_product_level ;

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}
$post_id = get_the_ID();
$start_date = $teacher = $duration = $level = '';
$start_date = $g5plus_show_archive_product_start_date =='1' ? get_post_meta($post_id, 'start', true ) : '';
$duration = $g5plus_show_archive_product_duration =='1' ? get_post_meta($post_id, 'duration', true ) : '';
$course_pdf = $g5plus_show_archive_product_duration =='1' ? get_post_meta($post_id, 'course_pdf', true ) : '';
$level = $g5plus_show_archive_product_level =='1' ? get_post_meta($post_id, 'level', true ) : '';

if($g5plus_show_archive_product_teacher=='1'){
    $teacher_meta = get_post_meta($post_id, 'teacher', true );
    if(isset($teacher_meta) && $teacher_meta!=''){
        $teacher_meta = explode(",",$teacher_meta);
        if(count($teacher_meta)>0){
            $teacher = get_post( $teacher_meta[0] ); //get_the_title($teacher_meta[0]);
        }
    }
}
?>
<div class="course-meta">
       <span class="pd-right-20">
            <i class="fa fa-graduation-cap s-color pd-right-5"></i><a href="<?php the_permalink(); ?>">Details</a>
        </span>

        <span  class="pd-right-20">
            <i class="fa fa-user s-color pd-right-5"></i><a class="download-link" href="<?php if(isset($course_pdf) && $course_pdf!=''): ?> <?php echo get_site_url(); ?>/download/<?php echo wp_kses_post($course_pdf) ?>/<?php endif; ?><?php if(isset($course_pdf) && $course_pdf=''): ?>#<?php endif; ?>">Download PDF</a>
        </span>

        <span  class="pd-right-20">
            <i class="fa fa-calendar s-color pd-right-5"></i><a href="<?php echo get_site_url(); ?>/<?php echo 'course-schedules'; ?>">Calendar</a>
        </span>
</div>

<div class="excerpt">
    <?php the_excerpt() ?>
</div>
<div class="button-view-more">

<?php 
            remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_title',5);
            remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_rating',10);
            remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_price',10);
            remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt',20);
            remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta',40);
            remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_sharing',50);
			remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_stock',20);
            do_action( 'woocommerce_single_product_summary' );
        ?>


   <!-- <a href="< ?php echo 'cart'; ?>" class="bt bt-md bt-bg bt-tertiary">< ?php esc_html_e('Apply Now','g5plus-academia') ?></a>-->
</div>