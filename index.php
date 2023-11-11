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
define('TemplateModule', 'template.php');
require_once(ModelsModule);
require_once(TemplateModule);

use Models\MenteeRequest;
use Models\Form;




function render_register_form(){
    $csrf_token = wp_create_nonce('csrf_token') ;
    echo get_form($csrf_token);
}

function process_form(){
    if (empty($_POST)){
        return ;
    }
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phoneNumber'];
    $description = $_POST['description'];
    $mentee_r = new MenteeRequest($first_name, $last_name, $phone, $field, $description, $email);
    $success = $mentee_r->saveToDatabase();
    if ($success){
        return 'با موفقیت ثبت شد!';
    }
    else {
        return 'ثبت اطلاعات ناموفق بود.';
    }
}

add_shortcode('mentee_register_form', 'render_register_form');
add_filter('the_post','process_form' );
