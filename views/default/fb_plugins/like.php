<?php
/**
 * Facebook like view
 *
 * For more detail about this @see http://developers.facebook.com/docs/reference/plugins/like
 *
 * @package ElggFBSocialPlugins
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
 * @author Diego Andrés Ramírez Aragón <dramirezaragon@gmail.com>
 * @copyright Diego Andrés Ramírez Aragón 2010
 * @link http://github.com/lowfill/fb_socialplugins
 *
 * @uses $vars['page']
 * @uses $vars['layout'] standard | button_count
 * @uses $vars['color_scheme'] light | dark
 * @uses $vars['action'] like | recommend
 * @uses $vars['show_faces'] true | false
 * @uses $vars['width']
 */

//FIXME Implements JavaScript SDK

$url = $vars['url'];
if(array_key_exists('page',$vars)){
    $url = $vars['page'];
}
$layout = "standard";
if(array_key_exists('layout',$vars) && in_array($vars['layout'],array('standard','button_count'))){
    $layout = $vars['layout'];
}

$color_scheme="light";
if(array_key_exists('color_scheme',$vars) && in_array($vars['color_scheme'],array('light','dark'))){
    $color_scheme = $vars['color_scheme'];
}

$action="like";
if(array_key_exists('action',$vars) && in_array($vars['action'],array('like','recommend'))){
    $action = $vars['action'];
}

$show_faces=false;
if(array_key_exists('show_faces',$vars)){
    $show_faces = $vars['show_faces'];
}

$width=450;
if(array_key_exists('width',$vars)){
    $width = $vars['width'];
}


$field = "<iframe src=\"http://www.facebook.com/plugins/like.php?";
$field.= "href={$url}&amp;";
$field.= "layout={$layout}&amp;";
$field.= "show_faces={$show_faces}&amp;";
$field.= "width={$width}&amp;";
$field.= "action={$action}&amp;";
$field.= "colorscheme={$color_scheme}\" ";
$field.= "scrolling=\"no\" frameborder=\"0\" allowTransparency=\"true\"";
$field.= "style=\"border:none; overflow:hidden; width:{$width}px; height:30px\"></iframe>";

echo $field;
?>
