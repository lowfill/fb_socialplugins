<?php
/**
 * Like box examples
 *
 * @package ElggFBSocialPlugins
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
 * @author Diego Andrés Ramírez Aragón <dramirezaragon@gmail.com>
 * @copyright Diego Andrés Ramírez Aragón 2010
 * @link http://github.com/lowfill/fb_socialplugins
 */
?>
<p>
For more information take a look at <a href="http://developers.facebook.com/docs/reference/plugins/like-box">Like Box</a> documentation at Facebook
</p>
<?php
echo elgg_view("fb_plugins/like_box");
echo "&nbsp;";
echo elgg_view("fb_plugins/like_box",array('header'=>'true'));
echo "<div class=\"clearfloat\"></div><p>&nbsp;</p>";
echo elgg_view("fb_plugins/like_box",array('stream'=>'true','connections'=>5));
?>