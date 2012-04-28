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
class GantryFeatureResetSettings extends GantryFeature {

    var $_feature_name = 'resetsettings';

    function render($position = "") {
        global $gantry;
        ob_start();
        ?>
        <div id="gantry-resetsettings">
            [ <a href="<?php echo JROUTE::_($gantry->addQueryStringParams($gantry->getCurrentUrl($gantry->_setbyurl), array('reset-settings' => ''))); ?>"><?php echo $this->get('text'); ?></a> ]
        </div>
        <?php
        return ob_get_clean();
    }

}