<?php

/**
 * @package     Joomla.Site
 * @subpackage  mod_banners
 *
 * @copyright   (C) 2006 Open Source Matters, Inc. <https://www.joomla.org>
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

namespace Rex\Module\Foondamate\Site\Helper;

use Joomla\CMS\Application\CMSApplication;
use Joomla\CMS\Component\ComponentHelper;
use Joomla\CMS\Environment\Browser;
use Joomla\Component\Banners\Site\Model\BannersModel;
use Joomla\Registry\Registry;

// phpcs:disable PSR1.Files.SideEffects
\defined('_JEXEC') or die;
// phpcs:enable PSR1.Files.SideEffects

/**
 * Helper for mod_banners
 *
 * @since  1.5
 */
class FoondamateHelper
{
    /**
     * Retrieve list of banners
     *
     * @param   Registry        $params  The module parameters
     * @param   BannersModel    $model   The model
     * @param   CMSApplication  $app     The application
     *
     * @return  mixed
     */
    public static function getList(Registry $params, BannersModel $model, CMSApplication $app)
    {
        return "HI";
//        return self::solveEquation("7x - 2 = 21");
    }
    public static function solveEquation($equation)
    {
        // Splitting the equation into left and right parts
        list($left, $right) = explode('=', $equation);
        $left = trim($left);
        $right = trim($right);

        // Finding the coefficient of x and the constant term
        preg_match('/([-]?[0-9]*\.?[0-9]+)x/', $left, $matches);
        $a = floatval($matches[1]);

        preg_match('/([-+]?[0-9]*\.?[0-9]+)$/', $left, $matches);
        $b = floatval($matches[0]);

        $c = floatval($right);

        // Displaying the steps
        $steps = "Given equation: {$a}x {$b} = {$c}\n";
        $steps .= "Step 1: Add " . (-$b) . " to both sides\n";
        $c += $b;
        $steps .= "Step 2: {$a}x = {$c}\n";
        $steps .= "Step 3: Divide both sides by {$a}\n";
        $x = $c / $a;
        $steps .= "Solution: x = {$x}\n";

        return $steps;
    }

}