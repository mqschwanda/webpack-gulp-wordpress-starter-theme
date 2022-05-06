<?php

// Admin functions here

add_filter('contextual_help_list','contextual_help_list_remove');
function contextual_help_list_remove(){
  global $current_screen;
  $current_screen->remove_help_tabs();
}
