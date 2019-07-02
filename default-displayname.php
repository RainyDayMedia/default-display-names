<?php
/*
Plugin Name: Default Display Names
Plugin URI: https://github.com/RainyDayMedia/public-display-names
Version: 0.2.0
Description: Changes the default public display name for new and existing users.
Author: RDMCrew
Author URI: https://github.com/RainyDayMedia/
*/

// Exit if accessed directly.
if (!defined('ABSPATH')) {
    exit;
}

require_once(__DIR__ . '/includes/functions.php');

/* Version check */
global $wp_version;
$exit_msg='Substitute Displayname requires WordPress 2.5 or newer.  <a href="http://codex.wordpress.org/Upgrading_WordPress">Please update!</a>';
if (version_compare($wp_version,"2.5","<")) {
    exit ($exit_msg);
}
