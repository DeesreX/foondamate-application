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

//$list  = \Rex\Module\Foondamate\Site\Helper\FoondamateHelper::getList($params, $model, $app);
$rexHelper = new \Rex\Module\Foondamate\Site\Helper\FoondamateHelper();
$list = $rexHelper::solveEquation('7x - 2 = 21');

require ModuleHelper::getLayoutPath('mod_foondamate', $params->get('layout', 'default'));
