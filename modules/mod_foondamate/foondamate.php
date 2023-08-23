<?php

/**
 * @package     Joomla.Site
 * @subpackage  mod_banners
 *
 * @copyright   (C) 2005 Open Source Matters, Inc. <https://www.joomla.org>
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

use Joomla\CMS\Helper\ModuleHelper;
use Joomla\Component\Banners\Administrator\Helper\BannersHelper as BannersComponentHelper;
use Joomla\Module\Banners\Site\Helper\BannersHelper;

\Rex\Module\Foondamate\Site\Helper\FoondamateHelper::getList();
$model = $app->bootComponent('com_banners')->getMVCFactory()->createModel('Banners', 'Site', ['ignore_request' => true]);
$list  = \Rex\Module\Foondamate\Site\Helper\FoondamateHelper::getList($params, $model, $app);

require ModuleHelper::getLayoutPath('mod_foondamate', $params->get('layout', 'default'));
