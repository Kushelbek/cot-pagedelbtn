<?php
/**
 * Static and dynamic resource (e.g. HTML) strings. Can be overriden by skin files and other code.
 * @package pagedelbtn
 * @author Andrey Matsovkin
 * @copyright Copyright (c) 2011-2013
 * @license Distributed under BSD license.
 * Made with «Extension Template» (https://github.com/macik/cot-extension_template)
 */
defined('COT_CODE') or die('Wrong URL');

require_once cot_langfile('pagedelbtn','plug');

$R['page_delete'] = '<button class="btn btn-danger btn-xs" type="submit" name="rpagestate" value="-1">'.$L['Delete'].'</button>';