<?php
/**
 * Facebook like box view
 *
 * For more detail about this @see http://developers.facebook.com/docs/reference/plugins/like-box
 *
 * @package ElggFBSocialPlugins
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
 * @author Diego Andrés Ramírez Aragón <dramirezaragon@gmail.com>
 * @copyright Diego Andrés Ramírez Aragón 2010
 * @link http://github.com/lowfill/fb_socialplugins
 *
 * @uses $vars['id'] Facebook's application id
 * @uses $vars['connections'] Number of connections to be showed
 * @uses $vars['header'] 'true' | 'false'
 * @uses $vars['stream'] 'true' | 'false'
 * @uses $vars['heigh']
 * @uses $vars['width']
 */

//FIXME Implements JavaScript SDK

$id = 185550966885;
$connections = 10;
$header="false";
$stream="false";
$width=290;
$height=300;

if(array_key_exists('id',$vars)){
    $url = $vars['id'];
}
if(array_key_exists('connections',$vars)){
    $connections = $vars['connections'];
}

if(array_key_exists('header',$vars)){
    $header = $vars['header'];
}

if(array_key_exists('stream',$vars)){
    $stream = $vars['stream'];
    if($stream){
        $height=600;
    }
}

if(array_key_exists('width',$vars)){
    $width = $vars['width'];
}

if(array_key_exists('height',$vars)){
    $width = $vars['height'];
}


$field = "<iframe src=\"http://www.facebook.com/plugins/fan.php?";
$field.= "id={$id}&amp;";
$field.= "width={$width}&amp;";
$field.= "connections={$connections}&amp;";
$field.= "stream={$stream}&amp;";
$field.= "header={$header}\" ";
$field.= "scrolling=\"no\" frameborder=\"0\" allowTransparency=\"true\"";
$field.= "style=\"border:none; overflow:hidden; width:{$width}px;height:{$height}px\"></iframe>";

echo $field;
?>
