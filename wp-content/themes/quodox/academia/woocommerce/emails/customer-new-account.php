<?php
/**
 * Customer new account email
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/customer-new-account.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woothemes.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates/Emails
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>

<?php do_action( 'woocommerce_email_header', $email_heading, $email ); ?>

<p><?php printf( __( "Thanks for creating an account on %s. Your username is <strong>%s</strong>", 'woocommerce' ), esc_html( $blogname ), esc_html( $user_login ) ); ?></p>

<?php if ( 'yes' === get_option( 'woocommerce_registration_generate_password' ) && $password_generated ) : ?>

	<p><?php printf( __( "Your password has been automatically generated: <strong>%s</strong>", 'woocommerce' ), esc_html( $user_pass ) ); ?></p>

<?php endif; ?>

<p><?php printf( __( 'You can access your account area to view your orders and change your password here: %s.', 'woocommerce' ), wc_get_page_permalink( 'myaccount' ) ); ?></p>

<p style="text-align: center; margin-top: 40px;"><a href="http://highfieldtraining.co.uk/course"><span style="font-family: 'Oswald';
    font-size: 13px;
    line-height: 1.2;
    letter-spacing: 0.1em;
    text-align: center;
    text-transform: uppercase;
    min-width: 170px;
    padding: 16px 20px;
    background-color: #30a8cc;
    color: #fff;
    border: none;
    border-bottom: 2px solid rgba(0, 0, 0, 0.2);">Order Now<span></a></p>

<?php do_action( 'woocommerce_email_footer', $email ); ?>
