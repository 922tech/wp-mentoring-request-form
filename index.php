<?php
/**
 * @package glw-mentoring-form
 * @version 1.0.0
 */
/*
Plugin Name: GLW Mentoring Form
Plugin URI: http://wordpress.org/plugins/hello-dolly/
Description: Installing this plugin your website will be have a form page by which the users can register and the data will be saved in a separated DB table.
Author: *****************  Martin Aras  ***************** 
Version: 1.0.0
Author URI: http://ma.tt/
*/
define('ModelsModule', 'models.php');
require_once(ModelsModule);

use Models\MenteeRequest;
use Models\Form;


function render_register_form(){
    $form = new Form();
    $s = new MenteeRequest();
    return $form->input_text($name='fname', $label='First name', $grid_num=10,);
    // $csrf_token = wp_create_nonce('csrf_token') ;
    // $form_document = $form->generate($csrf_token);
    // echo $form_document;
}


add_shortcode('mentee_register_form', 'render_register_form');