<?php
/* ====================
[BEGIN_COT_EXT]
Hooks=page.edit.update.first
[END_COT_EXT]
==================== */

/**
 * Page deletion button
 *
 * @package pagedelbtn
 * @author Andrey Matsovkin
 * @copyright Copyright (c) 2011-2013
 * @license Distributed under BSD license.
 * Made with «Extension Template» (https://github.com/macik/cot-extension_template)
 */

defined('COT_PAGES') or die('Wrong URL.');

if ($usr['isadmin'] || $cfg['plugin']['pagedelbtn']['pdb_allowdelete']) {
	if ( cot_import('rpagestate', 'POST', 'INT') == -1 ){
		$_POST['rpagedelete'] = 1;
	}
} else {
	$_POST['rpagedelete'] = 0;
	$_POST['rpagestate'] = 1;
}