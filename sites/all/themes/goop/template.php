<?php

/**
 * Returns logic and variables available to the page.tpl.php
 * @param $variables
**/
function goop_preprocess_page(&$variables) {
	if ($variables['region'] = 'footer') {
		$variables['copy_year'] = format_date(time(), 'custom', 'Y');
	}
}

/**
 * Returns HTML for a wrapper for a menu sub-tree.
 *
 * @param $variables
 *   An associative array containing:
 *   - tree: An HTML string containing the tree's items.
 */
function goop_menu_tree__menu_company_links($variables) {
  return '<ul class="menu company-nav block-menu block">' . $variables['tree'] . '</ul>';
}

function goop_menu_tree__menu_social_links($variables) {
  return '<ul class="menu social-links block-menu block">' . $variables['tree'] . '</ul>';
}