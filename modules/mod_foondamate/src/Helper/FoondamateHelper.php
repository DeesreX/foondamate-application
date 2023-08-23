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
    }
}