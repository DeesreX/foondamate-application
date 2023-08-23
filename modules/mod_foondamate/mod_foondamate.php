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
	$result = Rex\Module\Foondamate\Site\Helper\FoondamateHelper::solveEquation($equation);
	// You can now use $result to display the solution.
}

$equations = [
    "5x + 3 = 2x - 7",
    "3x - 4 = 11",
    "7x = 21",
    "x + 10 = 6",
    "9x - 4 = 5x + 6",
    "4x + 2 = 4",
    "6 - 2x = 3x + 4",
    "7x - 3 = 4x + 2",
    "8x = 8",
    "5 - x = 3x + 2"
];

$rexHelper = new \Rex\Module\Foondamate\Site\Helper\FoondamateHelper();

require ModuleHelper::getLayoutPath('mod_foondamate', $params->get('layout', 'default'));
