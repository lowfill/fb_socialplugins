FB Social Plugins
=================
This plugin pretends to make easier for elgg developers use in their sites 
the new functionalites provided for the [Facebook's Social plugins](http://developers.facebook.com/plugins) API

For now it only provides support for iframe method.

Support xfbml is planned


Status
------

This is an **alpha** release. 
Currently, this plugin allow you to:

- Show like button to your site | page
- Show a like_box to your site
- Show activity related to your site
- Show an life-stream related to a page or application

Usage
-----
    <?php
   	  echo elgg_view("fb_plugins/like");
  	  echo elgg_view("fb_plugins/like",array('action'=>'recommend'));
    ?>

For detalied examples take a look to the examples page at your site (http://localhost/pg/fb_plugins).
 