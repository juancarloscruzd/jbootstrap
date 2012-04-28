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
class GantryFeatureDate extends GantryFeature {
    var $_feature_name = 'date';
   
	function render($position="") {
		global $gantry;
		ob_start();

		$now = &JFactory::getDate();		
		$format = $this->get('formats');

	    ?>
		<div class="date-block">
			<span class="date"><?php echo $now->toFormat($format); ?></span>
		</div>
		<?php
	    return ob_get_clean();
	}
	
}