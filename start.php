<?php
/**
 * Facebook social plugins plugin
 *
 * @package ElggFBSocialPlugins
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
 * @author Diego Andrés Ramírez Aragón <dramirezaragon@gmail.com>
 * @copyright Diego Andrés Ramírez Aragón 2010
 * @link http://github.com/lowfill/fb_socialplugins
 */

/**
 * Plugin initialization
 */
function fb_socialplugins_init(){

    register_page_handler('fb_plugins','fb_socialplugins_page_handler');
}

/**
 * Examples page handler
 * @param $page
 */
function fb_socialplugins_page_handler($page){
    include dirname(__FILE__)."/examples.php";
}
register_elgg_event_handler('init','system','fb_socialplugins_init');

?>