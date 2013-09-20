<?php
/* ====================
[BEGIN_COT_EXT]
Hooks=page.edit.tags
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

defined('COT_CODE') or die('Wrong URL.');

if ($cfg['plugin']['pagedelbtn']['pdb_addbuttonmode'] == 'auto'){
	require cot_incfile('pagedelbtn','plug','resources');
	if ($usr['isadmin'] || $cfg['plugin']['pagedelbtn']['pdb_allowdelete']) {
		$pageedit_array['PAGEEDIT_FORM_DELETE'] = $R['page_delete'].$L['pdb_delete_warning'];
		$pageedit_array['PAGEEDIT_DELETE_BUTTON'] = $R['page_delete'];
	} else {
		$pageedit_array['PAGEEDIT_FORM_DELETE'] = $L['pdb_restricted'];
	}
	$t->assign($pageedit_array);
}

