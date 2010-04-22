<?php
/**
 * Fb_social_plugins general views controller
 *
 * @package ElggFBSocialPlugins
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
 * @author Diego Andrés Ramírez Aragón <dramirezaragon@gmail.com>
 * @copyright Diego Andrés Ramírez Aragón 2010
 * @link http://github.com/lowfill/fb_socialplugins
 */

require_once(dirname(dirname(dirname(__FILE__))) . "/engine/start.php");

global $CONFIG;

$title = elgg_echo("fb_plugins:example:title");
$body =  elgg_view_title($title).elgg_view('page_elements/contentwrapper',array('body'=>elgg_view("fb_plugins/examples")));

$body = elgg_view_layout('one_column',$body);

// Finally draw the page
page_draw($title, $body);
?>