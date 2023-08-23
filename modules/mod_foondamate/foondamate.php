<?php
defined('_JEXEC') or die;

require_once __DIR__ . '/helper.php';

$layout = $params->get('layout', 'default');
require JModuleHelper::getLayoutPath('mod_mymodule', $layout);
