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
use Models\MenteeRequest;
require_once(ModelsModule);

$s = new MenteeRequest();