<?php
    /*
    * Plugin Name: Simple Brain Plugin
    * Plugin Name:       My Basics Plugin
    * Description:       This plugin deactivates the admin menu
    * Version:           1.0.1
    * Author:            Brain Sinister
    */

    /* Disable WordPress Admin Bar for all users */
    add_filter( 'show_admin_bar', '__return_false' );