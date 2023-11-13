<?php
    /*
    * Plugin Name: Simple Brain Plugin
    * Plugin Name:       My Basics Plugin
    * Description:       This plugin deactivates the admin menu
    * Version:           1.0.1
    * Author:            Brain Sinister
    */

    add_filter( 'show_admin_bar', '__return_false');