<?php

/* ------------------------------------------------------------------------
  # Jootstrap - Twitter's Bootstrap for Joomla (with RocketTheme's Gantry administration)
  # ------------------------------------------------------------------------
  # author    Prieco S.A.
  # copyright Copyright (C) 2012 Prieco.com. All Rights Reserved.
  # @license - http://http://www.gnu.org/licenses/gpl-3.0.html GNU/GPL
  # Websites: http://www.prieco.com
  # Technical Support:  Forum - http://www.prieco.com/en/forum/index.html
  ------------------------------------------------------------------------- */

defined('GANTRY_VERSION') or die();

gantry_import('core.gantrylayout');

/**
 *
 * @package gantry
 * @subpackage html.layouts
 */
class GantryLayoutMod_Sidebar extends GantryLayout {

    var $render_params = array(
        'contents' => null,
        'position' => null,
        'gridCount' => null,
        'pushPull' => ''
    );

    function render($params = array()) {
        global $gantry;
        global $jbsidebars;
        if (!$jbsidebars)
            $jbsidebars = array();

        $rparams = $this->_getParams($params);
        $pushPull = ($rparams->pushPull ? ' offset' . $rparams->pushPull : '');

        ob_start();
        // XHTML LAYOUT        
        $sidebar = "            <div class=\"span{$rparams->gridCount}{$pushPull}\">
                <div id=\"jb-{$rparams->position}\" class=\"well sidebar-nav\">
                    {$rparams->contents}
                </div>
            </div>";

        echo $sidebar;
        $jbsidebars[] = $sidebar;

        return ob_get_clean();
    }

}