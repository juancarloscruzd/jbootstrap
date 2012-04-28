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

defined('JPATH_BASE') or die();

gantry_import('core.gantryfeature');

/**
 * @package     gantry
 * @subpackage  features
 */
class GantryFeatureStyleDeclaration extends GantryFeature {
    var $_feature_name = 'styledeclaration';

    function isEnabled() {
        global $gantry;
        $menu_enabled = $this->get('enabled');

        if (1 == (int)$menu_enabled) return true;
        return false;
    }

	function init() {
        global $gantry;

        //inline css for dynamic stuff
        $css  = 'body {background:'.$gantry->get('bgcolor').';}';
        $css .= 'body a {color:'.$gantry->get('linkcolor').';}';
        $css .= '#jb-header {background:'.$gantry->get('headercolor').';}';
        $css .= '#jb-bottom {background:'.$gantry->get('bottomcolor').';}';
        $css .= '#jb-footer, #jb-copyright, #jb-menu {background:'.$gantry->get('footercolor').';}';

        
        $gantry->addInlineStyle($css);

        //style stuff
        $gantry->addStyle($gantry->get('cssstyle').".css");
	}

}