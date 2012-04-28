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
class GantryFeatureFontSizer extends GantryFeature {

    var $_feature_name = 'fontsizer';

    function init() {
        global $gantry;
        $fontsize = $gantry->get('font-size');
        $current_fontsize = $gantry->get('font-size-is');
        $font_sizes = array(
            0 => "xsmall",
            1 => "small",
            2 => "default",
            3 => "large",
            4 => "xlarge"
        );

        $current = array_search($current_fontsize, $font_sizes);
        if ($current !== false) {
            switch ($fontsize) {
                case 'smaller':
                    if ($current > 0)
                        $current--;
                    break;
                case 'larger':
                    if ($current < count($font_sizes) - 1)
                        $current++;
                    break;
            }
            $gantry->set('font-size-is', $font_sizes[$current]);
        }
    }

    function render($position = "") {
        global $gantry;
        ob_start();
        ?>
        <div id="jb-accessibility">
            <div class="jb-desc"><?php echo JText::_('TEXT_SIZE'); ?></div>
            <div id="jb-buttons">
                <a href="<?php echo JROUTE::_($gantry->addQueryStringParams($gantry->getCurrentUrl(array('reset-settings')), array('font-size' => 'smaller'))); ?>" title="<?php echo JText::_('DEC_FONT_SIZE'); ?>" class="small"><span class="button"></span></a>
                <a href="<?php echo JROUTE::_($gantry->addQueryStringParams($gantry->getCurrentUrl(array('reset-settings')), array('font-size' => 'larger'))); ?>" title="<?php echo JText::_('INC_FONT_SIZE'); ?>" class="large"><span class="button"></span></a>
            </div>
        </div>
        <?php
        return ob_get_clean();
    }

}