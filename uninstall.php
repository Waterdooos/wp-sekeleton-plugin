<?php

/**
 * Trigger this file on Plugin uninstall
 * 
 * @package CBRExamPlugin
 */

if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
  die;
}

// Remove custom post types and database data