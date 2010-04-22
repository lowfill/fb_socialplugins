<?php
/**
 * Fb_social_plugins examples view
 *
 * @package ElggFBSocialPlugins
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
 * @author Diego Andrés Ramírez Aragón <dramirezaragon@gmail.com>
 * @copyright Diego Andrés Ramírez Aragón 2010
 * @link http://github.com/lowfill/fb_socialplugins
 */


$option = get_input('option','like');
$selected="class=\"selected\"";
if(!empty($option)){
    $var="{$option}_selected";
    $$var=$selected;
}
?>

<div id="elgg_horizontal_tabbed_nav">
  <ul>
  <li><a href="<?php echo $vars['url']."pg/fb_plugins/?option=like";?>" <?php echo $like_selected?>><?php echo elgg_echo("fb_plugins:like");?></a></li>
  <li><a href="<?php echo $vars['url']."pg/fb_plugins/?option=like_box";?>" <?php echo $like_box_selected?>><?php echo elgg_echo("fb_plugins:like_box");?></a></li>
  <li><a href="<?php echo $vars['url']."pg/fb_plugins/?option=activity";?>" <?php echo $activity_selected?>><?php echo elgg_echo("fb_plugins:activity");?></a></li>
  <li><a href="<?php echo $vars['url']."pg/fb_plugins/?option=livefeed";?>" <?php echo $livefeed_selected?>><?php echo elgg_echo("fb_plugins:livefeed");?></a></li>
  <li><a href="<?php echo $vars['url']."pg/fb_plugins/?option=recommendations";?>" <?php echo $recommendations_selected?>><?php echo elgg_echo("fb_plugins:recommendations");?></a></li>
  </ul>
</div>
<?php
    echo elgg_view("fb_plugins/examples/{$option}",$vars);
?>
