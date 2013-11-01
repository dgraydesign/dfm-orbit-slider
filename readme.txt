=== DFM Orbit Slider ===

Author URI: http://digitalfirstmedia.com
Plugin URI: http://github.com/dgraydesign/dfm-orbit-slider
Author: Debbie Gray
License: GNU General Public License version 3.0
License URI: http://www.gnu.org/licenses/gpl-3.0.html

This plugin is a WordPress implementation of the Zurb Foundation Orbit Slider for the Strapit WordPress theme.

=== Usage ===

In any WordPress page or post edit area, add the [orbitslider] shortcode immediately followed by the opening [orbitslidercontent] shortcode, then create an unordered list and add your images as list items. Make sure there are no paragraph returns or spaces between your list and the shortcodes. Immediately following the list, add the closing [/orbitslidercontent] shortcode. Note: the [orbitslider] shortcode is self-closing and doesn't need a closing tag. Its function is to add the necessary scripts to the header and footer of your page.

Click the "text" tab (next to the visual tab) at the top right in the editing panel, and add "data-orbit" to your opening ul tag. Example: <ul data-orbit>.

= Options =

Width: Width can be set in pixels for a fixed-width (non-responsive) slider by adding the width option to the orbitslidercontent opening shortcode, for example: width="200px". For a responsive slider, width can be set using the Strapit column class (http://sandbox.digitalfirstmedia.com/strapit/css.php#grid) for the desired width, for example: columns="md-8".

JavaScript Options: Can be added to the opening <ul> tag to control speed and other options like so: <ul data-orbit data-options="timer_speed:2500; bullets:false;">. See the Foundation Orbit page for a full list of JS options: http://foundation.zurb.com/docs/components/orbit.html.

Captions: If captions are desired, insert the shortcode [orbitcaption]your caption text[/orbitcaption] immediately before the closing </li> for each image (be careful to place your cursor immediately after the image with no spaces or returns). Alternatively, in text view only, you can add <div class="orbit-caption">your caption</div> before each closing </li>.

= Example =

Example markup with responsive size option:

[orbitslider][orbitslidercontent columns="md-8"]
<ul data-orbit="">
	<li><img class="alignnone size-full wp-image-67" alt="slide1" src="http://yourdomain.com/image1-path.jpg" width="645" height="363" />[orbitcaption]Caption1[/orbitcaption]</li>
	<li><img class="alignnone size-full wp-image-35" alt="slide2" src="http://yourdomain.com/image2-path.jpg" width="645" height="363" />[orbitcaption]Caption2[/orbitcaption]</li>
	<li><img class="alignnone size-full wp-image-34" alt="slide3" src="http://yourdomain.com/image3-path.jpg" width="645" height="363" />[orbitcaption]Caption3[/orbitcaption]</li>
</ul>
[/orbitslidercontent]
