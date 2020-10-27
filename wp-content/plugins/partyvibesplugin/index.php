<?php
/*
* Plugin Name: Partyvibes Plugin 
* Plugin URI: http://localhost/learningwordpress/cheers
* Description: This is a Newsletter Signup form Plugin for Cheers based on HTML5, CSS, JS and PHP
* Version: 2.9.9
* Author: Murat Kilic
* Author URI: http://localhost/learningwordpress/cheers
* License: GPL2
*/

function newsletter_form()
{
    $content = '';
    $content .= '<div class="login-form">';
    $content .= '<div class="popupCloseButton">X</div>';
  	$content .= '<section>';
    $content .= '<h3 id="velkommen">Welcome TO </h3>';
    $content .= '<img id="logo" src=" '.plugins_url("partyvibesplugin/img/logo.png").' " ';
    $content .= 'alt="Cheers Logo">';
  	$content .= '<h5 id="tilmeld">Sign up for our weekly partyvibes</h5>';
  	$content .= '</section>';
    $content .= '<section class="form">';
    $content .= '<form action="#" id="myForm">';
    $content .= '<div class="input">';
    $content .= '<input type="email" name="email" id="email" placeholder="Enter your name here..." required><i class="fas fa-envelope"></i>';
    $content .= '</div>';
  	$content .= '<div>';
 	$content .= '<input type="submit" value="LET THE GAME BEGIN!" name="submitBtn" id="submitBtn2">';
    $content .= '</div>';
  	$content .= '<div>';
 	$content .= '<input type="button" value="No, I\'m boring" name="submitBtn" id="submitBtn">';
    $content .= '</div>';
    $content .= '</form>';
    $content .= '</section>';
  	$content .= '</div>';
    return $content;
}

    #First parameter is a self choosen name for a unique short-code. Second parameter is the name of the function that creates the newsletter
    add_shortcode('show_partyvibesplugin','newsletter_form');
    
    add_action('wp_enqueue_scripts','register_styles_and_scripts_for_plugin');
    

    function register_styles_and_scripts_for_plugin() 
    {
        wp_enqueue_style('fontAwesomCDN', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css');
        
        wp_enqueue_style('CustomFontMontserrat','https://fonts.googleapis.com/css?family=Montserrat:400,500,800&display=swap');
        
        wp_enqueue_style('CustomStylesheet', plugins_url('partyvibesplugin/css/style.css'));
        
        wp_deregister_script('jquery');
        
        wp_enqueue_script('jquery','https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), null, true);
        
        wp_enqueue_script('CustomScript', plugins_url('partyvibesplugin/js/script.js'), array('jquery'), null, true);
    }


