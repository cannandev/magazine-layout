<?php

/**
 * Returns HTML for a wrapper for a menu sub-tree.
 *
 * @param $variables
 *   An associative array containing:
 *   - tree: An HTML string containing the tree's items.
 *
 * @see template_preprocess_menu_tree()
 * @ingroup themeable
 */
function goop_menu_tree__menu_company_links($variables) {
  return '<ul class="menu company-nav block-menu block">' . $variables['tree'] . '</ul>';
}

function goop_menu_tree__menu_social_links($variables) {
  return '<ul class="menu social-links block-menu block">' . $variables['tree'] . '</ul>';
}