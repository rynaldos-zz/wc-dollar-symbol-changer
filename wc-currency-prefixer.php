<?php

/*
 Plugin Name: Dollar symbol changer
 Plugin URI: https://profiles.wordpress.org/rynald0s
 Description: This plugin lets you change the $ currency symbol for all countries that use the $ symbol (useful for matching the country to symbol, like US$ | AU$ | NZ$ etc)
 Author: Rynaldo Stoltz
 Author URI: https://github.com/rynaldos
 Version: 1.0
 License: GPLv3 or later License
 URI: http://www.gnu.org/licenses/gpl-3.0.html
 */

if ( ! defined( 'ABSPATH' ) ) { 
    exit;
}

/**
 *
 * Check if WooCommerce is active
 *
 **/

if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {

/**
 *
 * Add settings
 *
 */

function rs_dollar_currency_prefixer_section( $sections ) {
    $sections['rs_dollar_currency_prefixer_section'] = __( 'Dollar currency prefixer', 'woocommerce' );
    return $sections;
}

add_filter( 'woocommerce_get_sections_products', 'rs_dollar_currency_prefixer_section' );

function rs_dollar_currency_prefixer_settings( $settings, $current_section ) {
    
    /**
     *
     * Check the current section is where we want to be
     *
     **/

    if ( 'rs_dollar_currency_prefixer_section' === $current_section ) {

        $prefixer_settings[] = array(
               'title' => __( 'Dollar currency code changer', 'woocommerce' ), 
               'type' => 'title',
               'desc'  => 'Please remember to add the $ symbol as part of the prefix, like so: AU or NZ',
               'id' => 'prefixer_change' 
            );

        $prefixer_settings[] = array(
                'title'    => __( 'Australian dollars', 'woocommerce' ),
                'id'       => 'currency_input_au',
                'type'     => 'text',
                'placeholder' => 'AU $',
                'default' => '$',
            );
        
        $prefixer_settings[] = array(
                'title'    => __( 'Barbadian dollars', 'woocommerce' ),
                'id'       => 'currency_input_bb',
                'type'     => 'text',
                'placeholder' => 'BB $',
            );
        
        $prefixer_settings[] = array(
                'title'    => __( 'Bermudian dollars', 'woocommerce' ),
                'id'       => 'currency_input_bm',
                'type'     => 'text',
                'placeholder' => 'BM $',
            );
        
        $prefixer_settings[] = array(
                'title'    => __( 'Brunei dollars', 'woocommerce' ),
                'id'       => 'currency_input_bn',
                'type'     => 'text',
                'placeholder' => 'BN $',
            );
        
        $prefixer_settings[] = array(
                'title'    => __( 'Bahamian dollars', 'woocommerce' ),
                'id'       => 'currency_input_bs',
                'type'     => 'text',
                'placeholder' => 'BS $',
            );
        
        $prefixer_settings[] = array(
                'title'    => __( 'Belize dollars', 'woocommerce' ),
                'id'       => 'currency_input_bz',
                'type'     => 'text',
                'placeholder' => 'BZ $',
            );
        
        $prefixer_settings[] = array(
                'title'    => __( 'Canadian dollars', 'woocommerce' ),
                'id'       => 'currency_input_ca',
                'type'     => 'text',
                'placeholder' => 'CA $',
            );
        
        $prefixer_settings[] = array(
                'title'    => __( 'Fijian dollars', 'woocommerce' ),
                'id'       => 'currency_input_fj',
                'type'     => 'text',
                'placeholder' => 'FJ $',
            );
        
        $prefixer_settings[] = array(
                'title'    => __( 'Guyanese dollars', 'woocommerce' ),
                'id'       => 'currency_input_gy',
                'type'     => 'text',
                'placeholder' => 'GY $',
            );
        
        $prefixer_settings[] = array(
                'title'    => __( 'Hong kong dollars', 'woocommerce' ),
                'id'       => 'currency_input_hk',
                'type'     => 'text',
                'placeholder' => 'HK $',
            );
        
        $prefixer_settings[] = array(
                'title'    => __( 'Jamaican dollars', 'woocommerce' ),
                'id'       => 'currency_input_jm',
                'type'     => 'text',
                'placeholder' => 'JM $',
            );
        
        $prefixer_settings[] = array(
                'title'    => __( 'Cayman islands dollars', 'woocommerce' ),
                'id'       => 'currency_input_ky',
                'type'     => 'text',
                'placeholder' => 'KY $',
            );
        
        $prefixer_settings[] = array(
                'title'    => __( 'Liberian dollars', 'woocommerce' ),
                'id'       => 'currency_input_lr',
                'type'     => 'text',
                'placeholder' => 'LR $',
            );
        
        $prefixer_settings[] = array(
                'title'    => __( 'Namibian dollars', 'woocommerce' ),
                'id'       => 'currency_input_na',
                'type'     => 'text',
                'placeholder' => 'NA $',
            );
        
        $prefixer_settings[] = array(
                'title'    => __( 'New Zealand dollars', 'woocommerce' ),
                'id'       => 'currency_input_nz',
                'type'     => 'text',
                'placeholder' => 'NZ $',
            );
        
        $prefixer_settings[] = array(
                'title'    => __( 'Solomon islands dollars', 'woocommerce' ),
                'id'       => 'currency_input_sb',
                'type'     => 'text',
                'placeholder' => 'SB $',
            );
        
        $prefixer_settings[] = array(
                'title'    => __( 'Singapore dollars', 'woocommerce' ),
                'id'       => 'currency_input_sg',
                'type'     => 'text',
                'placeholder' => 'SG $',
            );
        
        $prefixer_settings[] = array(
                'title'    => __( 'Surinamese dollars', 'woocommerce' ),
                'id'       => 'currency_input_sr',
                'type'     => 'text',
                'placeholder' => 'SR $',
            );
        
        $prefixer_settings[] = array(
                'title'    => __( 'Trinidad and Tobago dollars', 'woocommerce' ),
                'id'       => 'currency_input_tt',
                'type'     => 'text',
                'placeholder' => 'TT $',
            );
        
        $prefixer_settings[] = array(
                'title'    => __( 'New Taiwan', 'woocommerce' ),
                'id'       => 'currency_input_nt',
                'type'     => 'text',
                'placeholder' => 'NT $',
            );
        
        $prefixer_settings[] = array(
                'title'    => __( 'East Caribbean dollars', 'woocommerce' ),
                'id'       => 'currency_input_ec',
                'type'     => 'text',
                'placeholder' => 'EC $',
            );
        
            $prefixer_settings[] = array( 'type' => 'sectionend', 'id' => 'prefixer_change' );

$prefixer_settings[] = array( 'type' => 'sectionend', 'id' => 'prefixer_change' );
        return $prefixer_settings;
} else {
        return $settings;
    }

}

// ideally i would like to return the $ symbol on prefixed value without having to add it manually to input (working on this)

add_filter('woocommerce_currency_symbol', 'rs_custom_currency_symbols', 30, 2);

function rs_custom_currency_symbols( $currency_symbol, $currency ) {
        switch( $currency ) {
                
        case 'AUD':
        return __( $options = prefixer_get_settings( 'currency_input_au'), 'woocommerce' );
            break;
                
        case 'BBD':
            return __( $options = prefixer_get_settings( 'currency_input_bb'), 'woocommerce' );
            break;
                
        case 'BMD':
            return __( $options = prefixer_get_settings( 'currency_input_bm'), 'woocommerce' );
            break;
                
        case 'BND':
            return __( $options = prefixer_get_settings( 'currency_input_bn'), 'woocommerce' );
            break;
                
        case 'BSD':
            return __( $options = prefixer_get_settings( 'currency_input_bs'), 'woocommerce' );
            break;
                
        case 'BZD':
            return __( $options = prefixer_get_settings( 'currency_input_bz'), 'woocommerce' );
            break;
                
        case 'CAD':
            return __( $options = prefixer_get_settings( 'currency_input_ca'), 'woocommerce' );
            break;
                
        case 'FJD':
            return __( $options = prefixer_get_settings( 'currency_input_fj'), 'woocommerce' );
            break;
                
        case 'GYD':
            return __( $options = prefixer_get_settings( 'currency_input_gy'), 'woocommerce' );
            break;
                
        case 'HKD':
            return __( $options = prefixer_get_settings( 'currency_input_hk'), 'woocommerce' );
            break;
                
        case 'JMD':
            return __( $options = prefixer_get_settings( 'currency_input_jm'), 'woocommerce' );
            break;
                
        case 'KYD':
            return __( $options = prefixer_get_settings( 'currency_input_ky'), 'woocommerce' );
            break;
                
        case 'LRD':
            return __( $options = prefixer_get_settings( 'currency_input_lr'), 'woocommerce' );
            break;
                
        case 'NAD':
            return __( $options = prefixer_get_settings( 'currency_input_na'), 'woocommerce' );
            break;
                
        case 'NZD':
            return __( $options = prefixer_get_settings( 'currency_input_nz'), 'woocommerce' );
            break;
                
        case 'SBD':
            return __( $options = prefixer_get_settings( 'currency_input_sb'), 'woocommerce' );
            break;
                
        case 'SGD':
            return __( $options = prefixer_get_settings( 'currency_input_sg'), 'woocommerce' );
            break;
                
        case 'SRD':
            return __( $options = prefixer_get_settings( 'currency_input_sr'), 'woocommerce' );
            break;
                
        case 'TTD':
            return __( $options = prefixer_get_settings( 'currency_input_tt'), 'woocommerce' );
            break;
                
        case 'TWD':
            return __( $options = prefixer_get_settings( 'currency_input_nt'), 'woocommerce' );
            break;
                
        case 'XCD':
            return __( $options = prefixer_get_settings( 'currency_input_ec'), 'woocommerce' );
            break;
        }
    return $currency_symbol;
    }
}

add_filter( 'woocommerce_get_settings_products','rs_dollar_currency_prefixer_settings', 10, 2 );

function prefixer_get_settings( $key ) {
    $default_symbol = "$";
    $saved = get_option( $key );
    if( $saved && '' != $saved ) {
        return $saved;
    } else {
        return $default_symbol;
    }
}
