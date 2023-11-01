<?php

/*
 * Plugin Name: Encurtador
 * Plugin Author: Marcio Fao
 */

require_once('process_shortener.php');
require_once('cpt-ui.php');
require_once('acf.php');

 //add template page
 add_filter( 'theme_page_templates', 'enc_add_page_template_to_dropdown' );


/**
* Add page templates.
*
* @param  array  $templates  The list of page templates
*
* @return array  $templates  The modified list of page templates
*/
function enc_add_page_template_to_dropdown( $templates )
{
   $templates[plugin_dir_path( __FILE__ ) . 'templates/page-shortener.php'] = __( 'Encurtador', 'enc' );

   return $templates;
}


add_filter( 'template_include', 'enc_change_page_template', 99 );


/**
 * Change the page template to the selected template on the dropdown
 * 
 * @param $template
 *
 * @return mixed
 */
function enc_change_page_template($template)
{
    if (is_page()) {
        $meta = get_post_meta(get_the_ID());

        if (!empty($meta['_wp_page_template'][0]) && $meta['_wp_page_template'][0] != $template) {
            $template = $meta['_wp_page_template'][0];
        }
    }

    return $template;
}