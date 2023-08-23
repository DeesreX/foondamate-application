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
    public static function getList($equation)
    {
        return self::solveEquation($equation);
    }
    public static function solveEquation($equation)
    {
        // Splitting the equation into left and right parts
        list($left, $right) = explode('=', $equation);
        $left = trim($left);
        $right = trim($right);

        // Finding the coefficient of x and the constant term on the left side
        preg_match('/([-]?[0-9]*\.?[0-9]+)?x/', $left, $matches);
        $a = isset($matches[1]) ? floatval($matches[1]) : 0;

        preg_match('/([-+]?[0-9]*\.?[0-9]+)$/', $left, $matches);
        $b = isset($matches[0]) ? floatval($matches[0]) : 0;

        // Finding the coefficient of x and the constant term on the right side
        preg_match('/([-]?[0-9]*\.?[0-9]+)?x/', $right, $matches);
        $c = isset($matches[1]) ? floatval($matches[1]) : 0;

        preg_match('/([-+]?[0-9]*\.?[0-9]+)$/', $right, $matches);
        $d = isset($matches[0]) ? floatval($matches[0]) : 0;

        // Simplifying the equation to the form of ax + b = 0
        $a -= $c;
        $b -= $d;

        $steps = [];

        // Displaying the steps
        $steps[0] = "Given equation: {$a}x + {$b} = 0\n";
        $steps[1] .= "Step 1: Add " . (-$b) . " to both sides\n";
        $c = -$b;
        $steps[2] .= "Step 2: {$a}x = {$c}\n";
        $steps[3] .= "Step 3: Divide both sides by {$a}\n";
        $x = $c / $a;
        $steps[4] .= "Solution: x = {$x}\n";

        return $steps;
    }


}