<?php
class MyLeftAndMainExtension extends LeftAndMainExtension  {
	function init() {
		parent::init();
		CMSMenu::remove_menu_item('Help');
	}
}