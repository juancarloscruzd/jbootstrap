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

// no direct access
defined('_JEXEC') or die('Restricted index access');

// load and inititialize gantry class
require_once('lib/gantry/gantry.php');

$jspath = $this->baseurl . '/templates/' . $this->template . '/js';
$imgpath = $this->baseurl . '/templates/' . $this->template . '/images';
?>
<?php if (JRequest::getString('type') == 'raw'): ?>
    <jdoc:include type="component" />
<?php else: ?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html lang="<?php echo $gantry->language; ?>" >
        <head>
          <?php
            include('gantry-head.php');
          ?>
        </head>
        <body <?php echo $gantry->displayBodyTag(); ?>>
            <div id="jb-main">
                <jdoc:include type="component" />
            </div>

        <?php if ($jquery) :?>
            <script src="<?php echo $jspath; ?>/jquery.js" type="text/javascript"></script>
        <?php endif; ?>
            <script src="<?php echo $jspath; ?>/bootstrap.min.js" type="text/javascript"></script>
        </body>
    </html>
<?php endif; ?>
<?php
$gantry->finalize();
?>
