Page deletion button
====================

Extension for Cotonti CMF. Adds user friendly delete button to page edit form

Description
-----------

Adds user friendly delete button to page edit form. So you can (if you have admin rights)
delete pages in one click.
By default changes standard radio button control for page delete.
You can manually insert delete button in any place within edit form in `page.edit.tpl` template.

Features
--------

* Works out from the box
* One-click button to delete page
* Allow to restrict user to delete own pages 

Demo page
---------

No demo page. Just install and try to edit you page.

Requirements
------------

Current version works in Cotonti Siena v0.9.14 and tested with several theme.

### Compatibility

Can work on older Siena versions but not tested.
If you have own complicated theme try to change `page.edit.tpl` and/or resource string `$R['page_delete']`


### Comments

Plugin works out from the box. For better results 


### How extension works

Simply changes standard control with delete button or use `{PAGEEDIT_FORM_DELETE}` tag in `page.edit.tpl`.


Install
-------

* Unpack, copy files to root folder of your site.
* Install via Admin → Extensions menu (`Administration panel → Extensions`)
* Checks setting in config (`Administration panel → Extensions → pagedelbtn → Configuration`).

### Comments

To see this Extension in action - open «pagedelbtn» plugin page. 

Licence
-------

Distributed under BSD license.


Author
------

[Andrey Matsovkin](https://github.com/macik/)

References
----------

* [Cotonti.com](http://Cotonti.com/) -- Home of Cotonti CMF
* [pagedelbtn on GitHub](https://github.com/macik/cot-pagedelbtn) -- pagedelbtn page on GitHub