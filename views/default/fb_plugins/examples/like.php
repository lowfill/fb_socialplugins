<?php
/**
 * Like examples
 *
 * @package ElggFBSocialPlugins
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
 * @author Diego Andrés Ramírez Aragón <dramirezaragon@gmail.com>
 * @copyright Diego Andrés Ramírez Aragón 2010
 * @link http://github.com/lowfill/fb_socialplugins
 */
?>
<p>
For more information take a look at <a href="http://developers.facebook.com/docs/reference/plugins/like">Like Button</a> documentation at Facebook
</p>
<?php
echo elgg_view("fb_plugins/like");
echo elgg_view("fb_plugins/like",array('action'=>'recommend'));

echo elgg_view("fb_plugins/like",array('layout'=>'button_count'));
echo elgg_view("fb_plugins/like",array('layout'=>'button_count','action'=>'recommend'));

?>