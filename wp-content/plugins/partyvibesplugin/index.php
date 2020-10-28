<?php
/*
* Plugin Name: THL Plugin 
* Plugin URI: http://thlang.janahan.dk/
* Description: This is a Newsletter Signup form Plugin for TH.Langs HF & VUC based on HTML5, CSS, JS and PHP
* Version: 1.0
* Author: Janahan, Mano & Simone    
* Author URI: http://thlang.janahan.dk/
* License: GPL2
*/

function newsletter_form()
{
    $content = '';
    $content .= '<div class="slide-fwd-tr">';
    $content .= '<div class="login-form">';
    $content .= '<div class="popupCloseButton">X</div>';
  	$content .= '<section>';
    $content .= '<h3 id="velkommen">Vi har plads til dig, når vi åbner huset</h3>';
    $content .= '<video playsinline autoplay muted loop type="video/mp4" id="logo" src=" '.plugins_url("partyvibesplugin/video/calender.mp4").' " ';
    $content .= 'alt="thlvideo">';
  	$content .= '<h5 id="tilmeld">Tilmeld dig her, og bliv opdateret, når vi holder åbent hus</h5>';
  	$content .= '</section>';
    $content .= '<section class="form">';
    $content .= '<form action="#" id="myForm">';
    $content .= '<div class="input">';
    $content .= '<input type="email" name="email" id="email" placeholder="Din mail..." required><i class="fas fa-envelope"></i>';
    $content .= '</div>';
  	$content .= '<div>';
 	$content .= '<input type="submit" value="Tilmeld" name="submitBtn" id="submitBtn2">';
    $content .= '</div>';
    $content .= '</form>';
    $content .= '</section>';
  	$content .= '</div>';
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


