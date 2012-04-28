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
<?php
if (JPluginHelper::isEnabled('user', 'profile')) :
    $fields = $this->item->profile->getFieldset('profile');
    ?>
    <div class="contact-profile" id="users-profile-custom">
        <dl>
            <?php
            foreach ($fields as $profile) :
                if ($profile->value) :
                    echo '<dt>' . $profile->label . '</dt>';
                    $profile->text = htmlspecialchars($profile->value, ENT_COMPAT, 'UTF-8');

                    switch ($profile->id) :
                        case "profile_website":
                            $v_http = substr($profile->profile_value, 0, 4);

                            if ($v_http == "http") :
                                echo '<dd><a href="' . $profile->text . '">' . $profile->text . '</a></dd>';
                            else :
                                echo '<dd><a href="http://' . $profile->text . '">' . $profile->text . '</a></dd>';
                            endif;
                            break;

                        default:
                            echo '<dd>' . $profile->text . '</dd>';
                            break;
                    endswitch;
                endif;
            endforeach;
            ?>
        </dl>
    </div>
<?php endif; ?>
