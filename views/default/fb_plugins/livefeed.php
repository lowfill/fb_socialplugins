<?php
/**
 * Facebook live stream view
 *
 * For more detail about this @see http://developers.facebook.com/docs/reference/plugins/live-stream
 *
 * @package ElggFBSocialPlugins
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
 * @author Diego Andrés Ramírez Aragón <dramirezaragon@gmail.com>
 * @copyright Diego Andrés Ramírez Aragón 2010
 * @link http://github.com/lowfill/fb_socialplugins
 *
 * @uses $vars['app_id']
 * @uses $vars['width']
 * @uses $vars['height']
 */

//FIXME Implements JavaScript SDK

$app_id = 255955255198;
if(array_key_exists('app_id',$vars)){
    $app_id = $vars['app_id'];
}

$width=420;
if(array_key_exists('width',$vars)){
    $width = $vars['width'];
}

$height=500;
if(array_key_exists('height',$vars)){
    $width = $vars['height'];
}

$field = "<iframe src=\"http://www.facebook.com/plugins/livefeed.php?";
$field.= "app_id={$app_id}&amp;";
$field.= "width={$width}&amp;";
$field.= "height={$height}\" ";
$field.= "scrolling=\"no\" frameborder=\"0\" allowTransparency=\"true\"";
$field.= "style=\"border:none; overflow:hidden; width:{$width}px; height:{$header}px\"></iframe>";

echo $field;
?>
