<?php

/**
 * @file
 * This file contains the main theme functions hooks and overrides.
 */

 
//remove unneeded styling from header
function seedly_css_alter(&$css) {
    unset($css[drupal_get_path('module','system').'/system.theme.css']);
    unset($css[drupal_get_path('module','system').'/system.menus.css']);
    //unset($css[drupal_get_path('module','system').'/system.base.css']);
    unset($css[drupal_get_path('module','system').'/system.messages.css']);
    
    unset($css[drupal_get_path('module','overlay').'/overlay-parent.css']);
    unset($css[drupal_get_path('module','aggregator').'/aggregator.css']);
    unset($css[drupal_get_path('module','comment').'/comment.css']);
    unset($css[drupal_get_path('module','field').'/theme/field.css']);
    unset($css[drupal_get_path('module','node').'/node.css']);
    unset($css[drupal_get_path('module','search').'/search.css']);
    unset($css[drupal_get_path('module','user').'/user.css']);
}