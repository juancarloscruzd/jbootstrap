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
?>
<?php if ($this->params->get('show_articles')) : ?>
    <div class="contact-articles">

        <ol>
            <?php foreach ($this->item->articles as $article) : ?>
                <li>
                    <?php $link = JRoute::_('index.php?option=com_content&view=article&id=' . $article->id); ?>
                    <?php echo '<a href="' . $link . '">' ?>
                    <?php echo $article->text = htmlspecialchars($article->title, ENT_COMPAT, 'UTF-8'); ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ol>
    </div>
<?php endif; ?>
