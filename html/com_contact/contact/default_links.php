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
defined('_JEXEC') or die;

if ('plain' == $this->params->get('presentation_style')) :
    echo '<h3>' . JText::_('COM_CONTACT_LINKS') . '</h3>';
else :
    echo JHtml::_($this->params->get('presentation_style') . '.panel', JText::_('COM_CONTACT_LINKS'), 'display-links');
endif;
?>

<div class="contact-links nav nav-list">
    <ul>
        <?php
        foreach (range('a', 'e') as $char) :// letters 'a' to 'e'
            $link = $this->contact->params->get('link' . $char);
            $label = $this->contact->params->get('link' . $char . '_name');

            if (!$link) :
                continue;
            endif;

            // Add 'http://' if not present
            $link = (0 === strpos($link, 'http')) ? $link : 'http://' . $link;

            // If no label is present, take the link
            $label = ($label) ? $label : $link;
            ?>
            <li>
                <a href="<?php echo $link; ?>">
                    <?php echo $label; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</div>
