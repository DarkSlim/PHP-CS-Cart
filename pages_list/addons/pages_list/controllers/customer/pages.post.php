<?php
/***************************************************************************
*                                                                          *
*    Copyright (c) 2004 Simbirsk Technologies Ltd. All rights reserved.    *
*                                                                          *
* This  is  commercial  software,  only  users  who have purchased a valid *
* license  and  accept  to the terms of the  License Agreement can install *
* and use this program.                                                    *
*                                                                          *
****************************************************************************
* PLEASE READ THE FULL TEXT  OF THE SOFTWARE  LICENSE   AGREEMENT  IN  THE *
* "copyright.txt" FILE PROVIDED WITH THIS DISTRIBUTION PACKAGE.            *
****************************************************************************/


//
// $Id: pages.php 10229 2010-07-27 14:21:39Z 2tl $
//

if ( !defined('AREA') ) { die('Access denied'); }

 elseif ($mode == 'list') {
	$params = $_REQUEST;
	$params['paginate'] = true;
	$params['status'] = 'A';
	$params['parent_id'] = Registry::get('addons.pages_list.parent_page_id');
	list($pages, $params) = fn_get_pages($params, Registry::get('settings.Appearance.elements_per_page'));

	// Get title for the pages list
	$parent_page = fn_get_page_data(Registry::get('addons.pages_list.parent_page_id'));

	$view->assign('pages', $pages);
	$view->assign('pages_list_title', $parent_page['page']);
}

?>