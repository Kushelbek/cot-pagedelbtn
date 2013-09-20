<?php
/* ====================
[BEGIN_COT_EXT]
Code=pagedelbtn
Name=Page deletion button
Category=publications-events
Description=Adds user friendly delete button to page edit form
Version=1.0.1
Date=2013-Sep-20
Author=Andrey Matsovkin
Copyright=Copyright (c) 2011-2013, Andrey Matsovkin
Notes=If your enjoy my plugin please consider donating to help support future developments. Thanks! mailto:macik.spb@gmail.com
Auth_guests=R1
Lock_guests=W2345A
Auth_members=RW1
Lock_members=2345
Recommends_modules=
Recommends_plugins=
Requires_modules=
Requires_plugins=
[END_COT_EXT]

[BEGIN_COT_EXT_CONFIG]
pdb_addbuttonmode=12:select:manual,auto:auto:Mode of Delete button integration
pdb_allowdelete=13:radio:0,1:1:Allow non admin users to delete own pages
[END_COT_EXT_CONFIG]
==================== */

/**
 * Page deletion button plugin for Cotonti CMF
 *
 * @package pagedelbtn
 * @author Andrey Matsovkin
 * @copyright Copyright (c) 2011-2013
 * @license Distributed under BSD license.
 * Made with «Extension Template» (https://github.com/macik/cot-extension_template)

 *
Allowed Var types:
var1=11:select:0,1,2,3,4,5,6:3:Description
var2=12:radio:0,1:1:Enable this
var3=13:string::test:Test string
var4=14:callback:cot_get_editors():markitup:Simple callback
var5=15:separator:::Separator
var6=16:range:0,5:1:Range
var7=17:text:0,5:1,2:Text
var8=18:custom:user_func():def_value:Description
 *
 */

defined('COT_CODE') or die('Wrong URL.');