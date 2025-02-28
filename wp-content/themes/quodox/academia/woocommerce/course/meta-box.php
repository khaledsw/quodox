<?php
/**
 * Created by PhpStorm.
 * User: phuongth
 * Date: 12/16/15
 * Time: 3:46 PM
 */

require_once(G5PLUS_THEME_DIR . 'woocommerce/course/spec.php');
function register_course_meta_boxes($meta_boxes)
{
    $args = array(
        'posts_per_page' => -1,
        'orderby' => 'post_date',
        'order' => 'ASC',
        'post_type' => 'ourteacher',
        'post_status' => 'publish'
    );

    $query = new WP_Query($args);
    $posts = $query->get_posts();
    $list_teacher = array();
    foreach ($posts as $post) {
        if ($post->post_name != '' && $post->post_title != '')
            $list_teacher[$post->ID] = $post->post_title;
    }
    $g5plus_options = &G5Plus_Global::get_options();
    $levels = array();
    if(function_exists('get_course_level')){
        $levels = get_course_level();
    }
    $locations = array();
    if(function_exists('get_course_location')){
        $locations = get_course_location();
    }
    $meta_boxes[] = array(
        'title' => esc_html__('Course Detail', 'g5plus-academia'),
        'id' => 'academia-course-meta-box',
        'pages' => array('product'),
        'fields' => array(
            array(
                'name' => esc_html__('Upcoming Batch(1)', 'g5plus-academia'),
                'id' => 'start1',
                'type' => 'date',
            ),

array(
                'name' => esc_html__('Upcoming Batch(2)', 'g5plus-academia'),
                'id' => 'start2',
                'type' => 'date',
            ),

array(
                'name' => esc_html__('Upcoming Batch(3)', 'g5plus-academia'),
                'id' => 'start3',
                'type' => 'date',
            ),

array(
                'name' => esc_html__('Upcoming Batch(4)', 'g5plus-academia'),
                'id' => 'start4',
                'type' => 'date',
            ),

array(
                'name' => esc_html__('Upcoming Batch(5)', 'g5plus-academia'),
                'id' => 'start5',
                'type' => 'date',
            ),

array(
                'name' => esc_html__('Course PDF ID', 'g5plus-academia'),
                'id' => 'course_pdf',
                'type' => 'text',
            ),

            array(
                'name' => esc_html__('Duration', 'g5plus-academia'),
                'id' => 'duration',
                'type' => 'text',
            ),
            array(
                'name' => esc_html__('Teacher', 'g5plus-academia'),
                'id' => 'teacher',
                'type' => 'select_advanced',
                'options'     => $list_teacher,
                'multiple'    => true,
                'placeholder' => esc_html__( 'Select teacher', 'g5plus-academia' ),
            ),
            array(
                'name'        => esc_html__( 'Level', 'g5plus-academia' ),
                'id'          => "Times",
                'type'        => 'select_advanced',
                'options'     => $levels,
                'multiple'    => false,
                'std'         => ''
            ),
            array(
                'name'        => esc_html__( 'Location', 'g5plus-academia' ),
                'id'          => "location_name",
                'type'        => 'select_advanced',
                'options'     =>  $locations,
                'multiple'    => false,
                'std'         => ''
            ),
            /*array(
                'name'        => esc_html__( 'Google map location x', 'g5plus-academia' ),
                'id'          => "location_x",
                'type'        => 'text',
                'cols'        => 10,
                'rows'        => 5
            ),
            array(
                'name'        => esc_html__( 'Google map location y', 'g5plus-academia' ),
                'id'          => "location_y",
                'type'        => 'text',
                'cols'        => 10,
                'rows'        => 5
            ),*/
        )
    );
    return $meta_boxes;
}

add_filter( 'rwmb_meta_boxes', 'register_course_meta_boxes');