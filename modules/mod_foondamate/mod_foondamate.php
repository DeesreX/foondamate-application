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

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['equation'])) {
	$equation = $_POST['equation'];
	$list = Rex\Module\Foondamate\Site\Helper\FoondamateHelper::solveEquation($equation);
	// You can now use $result to display the solution.
}

$rexHelper = new \Rex\Module\Foondamate\Site\Helper\FoondamateHelper();

require ModuleHelper::getLayoutPath('mod_foondamate', $params->get('layout', 'default'));
