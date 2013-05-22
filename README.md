DiscoveryNG for Wordpress (dngforwp)
========

A little Wordpress plugin to better interact with DiscoveryNG. 

It provide:
  * a shortcode to embed catalog's titles through an iframe


Shortcode
---------

The shortcode is self-closing and must have the OPAC url for the title. An example is:

[dng url=http://dngtest.comperio.it/opac/detail/view/test:catalog:1088951]

Here are the attributes you can use:

 * **url**, the URL of the title from catalog
 * **width**, for the iframe width (default is *600px*)
 * **height**, for the iframe width (default is *300px*)
 * **coversize**, for the size of the cover. Options are: small, normal, large (default is *normal*)
 * **showabstract**, *1* is default and show the abstract (if exist), *0* to not show the abstract
