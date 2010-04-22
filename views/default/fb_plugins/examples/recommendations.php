<?php
/**
 * Recommendations examples
 *
 * @package ElggFBSocialPlugins
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
 * @author Diego Andrés Ramírez Aragón <dramirezaragon@gmail.com>
 * @copyright Diego Andrés Ramírez Aragón 2010
 * @link http://github.com/lowfill/fb_socialplugins
 */
?>
<p>
For more information take a look at <a href="http://developers.facebook.com/docs/reference/plugins/recommendations">Recommendations</a> documentation at Facebook
</p>
<?php

echo elgg_view("fb_plugins/recommendations");
echo "&nbsp;&nbsp;";
echo elgg_view("fb_plugins/recommendations",array('site'=>'elgg.org','color_scheme'=>'dark'));


?>