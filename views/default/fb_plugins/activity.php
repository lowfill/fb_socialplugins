<?php
/**
 * Facebook Activity view
 *
 * For more detail about this @see http://developers.facebook.com/docs/reference/plugins/activity
 *
 * @package ElggFBSocialPlugins
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
 * @author Diego Andrés Ramírez Aragón <dramirezaragon@gmail.com>
 * @copyright Diego Andrés Ramírez Aragón 2010
 * @link http://github.com/lowfill/fb_socialplugins
 *
 * @uses $vars['site']
 * @uses $vars['color_scheme'] Valid values light | dark
 * @uses $vars['header'] 'true' | 'false'
 * @uses $vars['width']
 * @uses $vars['height']
 */

//FIXME Implements JavaScript SDK

$site = $vars['url'];
if(array_key_exists('site',$vars)){
    $site = $vars['site'];
}
$color_scheme="light";
if(array_key_exists('color_scheme',$vars) && in_array($vars['color_scheme'],array('light','dark'))){
    $color_scheme = $vars['color_scheme'];
}

$header="true";
if(array_key_exists('header',$vars)){
    $action = $vars['header'];
}

$width=300;
if(array_key_exists('width',$vars)){
    $width = $vars['width'];
}

$height=500;
if(array_key_exists('height',$vars)){
    $width = $vars['height'];
}

$field = "<iframe src=\"http://www.facebook.com/plugins/activity.php?";
$field.= "site={$site}&amp;";
$field.= "width={$width}&amp;";
$field.= "height={$height}&amp;";
$field.= "header={$header}&amp;";
$field.= "colorscheme={$color_scheme}\" ";
$field.= "scrolling=\"no\" frameborder=\"0\" allowTransparency=\"true\"";
$field.= "style=\"border:none; overflow:hidden; width:{$width}px; height:{$header}px\"></iframe>";

echo $field;
?>