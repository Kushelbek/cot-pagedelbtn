<?php
/**
 * Localization file for Page deletion button
 * @author Andrey Matsovkin
 * @copyright Copyright (c) 2011-2013
 * @license Distributed under BSD license.
 * Made with «Extension Template» (https://github.com/macik/cot-extension_template)
*/

defined('COT_CODE') or die('Wrong URL');

$L['info_desc'] ='Добавляет в форму редактирования страниц удобную и понятную кнопку для удаления текущей страницы'; // plugin description

$L['cfg_pdb_addbuttonmode'] = array('Режим добавления кнопки','в `ручном` режиме вы должны самостоятельно изменить файл шаблона `page.edit.tpl`');
$L['cfg_pdb_addbuttonmode_params'] = array('ручной','авто');

$L['cfg_pdb_allowdelete'] = array('Разрешить пользователям без права администрирования удалять собственные страницы');

$admin_conf_help = 'Если вы используете ручной режим, то вам необходимо самостоятельно отредактировать файл шаблона `page.edit.tpl`.
				Он может находиться в одном из следующих каталогов: <br />
<ul>
	<li>`themes/{имя_темы_оформления}/`</li>
	<li>`themes/{имя_темы_оформления}/modules/`</li>
	<li>`themes/{имя_темы_оформления}/modules/page/`</li>
	<li>`modules/page/tpl/`</li>
</ul>
<br />
Для отображения кнопки `удалить` добавьте в шаблон следующий тег (например рядом с кодом остальных кнопкок): <br />
<pre>{PAGEEDIT_DELETE_BUTTON}</pre>';

$L['pdb_delete_warning'] = ' (страница будет удалена без дополнительных запросов)';
$L['pdb_restricted'] = '[вам запрещено выполнять это действие]';
