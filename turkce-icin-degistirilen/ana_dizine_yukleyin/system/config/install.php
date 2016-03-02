<?php
// Site
$_['site_base']         = substr(HTTP_SERVER, 7);
$_['site_ssl']          = false;

// Language
$_['language_default']  = 'tr-tr';
$_['language_autoload'] = array('tr-tr');

// Actions
$_['action_default']    = 'install/step_1';
$_['action_router']     = 'startup/router';
$_['action_error']      = 'error/not_found';
$_['action_pre_action'] = array(
	'startup/language',
	'startup/upgrade',
	'startup/database'
);