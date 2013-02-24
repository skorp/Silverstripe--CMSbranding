<?php
LeftAndMain::require_css('zzz_admin/css/webberz-cms-branding.css');
LeftAndMain::set_application_link('http://www.webberz.at');
LeftAndMain::setApplicationName('Webberz');
CMSMenu::remove_menu_item('ReportAdmin');
Object::add_extension('LeftAndMain', 'MyLeftAndMainExtension');