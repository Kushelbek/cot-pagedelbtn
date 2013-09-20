<?php
/**
 * Localization file for Page deletion button
 * @author Andrey Matsovkin
 * @copyright Copyright (c) 2011-2013
 * @license Distributed under BSD license.
 * Made with «Extension Template» (https://github.com/macik/cot-extension_template)
*/

defined('COT_CODE') or die('Wrong URL');

$L['info_desc'] ='Adds user friendly delete button to page edit form'; // plugin description

$L['cfg_pdb_addbuttonmode'] = array('Mode of Delete button integration','in `manual` mode you need to edit `page.edit.tpl` by your own');
$L['cfg_pdb_addbuttonmode_params'] = array('manual','auto');

$L['cfg_pdb_allowdelete'] = array('Allow non admin users to delete own pages');

$admin_conf_help = 'If you choose `manual` mode integration, you should edit `page.edit.tpl` template file.
It can be located in one of the following folders: <br />
<ul>
	<li>`themes/{theme_name}/`</li>
	<li>`themes/{theme_name}/modules/`</li>
	<li>`themes/{theme_name}/modules/page/`</li>
	<li>`modules/page/tpl/`</li>
</ul>
<br />
For enabling `delete` button in form add this tag to template: <br />
<pre>{PAGEEDIT_DELETE_BUTTON}</pre>';

$L['pdb_delete_warning'] = ' (page will be deleted without confirmation)';
$L['pdb_restricted'] = '[you not allowed to do this]';
