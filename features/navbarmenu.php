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
class GantryFeatureNavbarMenu extends GantryFeature {

    var $_feature_name = 'navbarmenu';
    var $_feature_prefix = 'menu';
    var $_menu_picker = 'menu-type';

    function init() {
        global $gantry;
    }

    function isEnabled() {
        global $gantry;
        $menu_enabled = $gantry->get('menu-enabled');
        $selected_menu = $gantry->get($this->_menu_picker);
        if (1 == (int) $menu_enabled && $selected_menu == $this->_feature_name)
            return true;
        return false;
    }

    function isInPosition($position) {
        if ($this->get('mainmenu-position') == $position)
            return true;
        return false;
    }

    function isOrderable() {
        return false;
    }

    function render($position = "") {
        global $gantry;
        $output = '';
        $renderer = $gantry->document->loadRenderer('module');
        $options = array('style' => "raw");

        $params = array();
        $group_params = $gantry->getParams($this->_feature_prefix . "-" . $this->_feature_name, true);
        $group_params_reg = new JRegistry();
        foreach ($group_params as $param_name => $param_value) {
            $group_params_reg->set($param_name, $param_value['value']);
        }

        if ($position == $this->get('mainmenu-position')) {
            $params = $gantry->getParams($this->_feature_prefix . "-" . $this->_feature_name . "-mainmenu", true);
            $module = JModuleHelper::getModule('mod_menu', '_z_empty');
            $reg = new JRegistry();
            foreach ($params as $param_name => $param_value) {
                $reg->set($param_name, $param_value['value']);
            }
            $reg->merge($group_params_reg);
            $module->params = $reg->toString();
            $output .= $renderer->render($module, $options);
        }

        return $output;
    }

}
