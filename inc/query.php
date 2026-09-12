<?php
if (!defined('ABSPATH')) {
  exit;
}

function wazeka_query_vars($vars)
{
  $vars[] = 'works_type';
  $vars[] = 'property_category';
  $vars[] = 'event_area';
  return $vars;
}
add_filter('query_vars', 'wazeka_query_vars');
