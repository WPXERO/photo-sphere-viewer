=== Photo Sphere Viewer --Renders 360° panoramas shots ===
Contributors: wpxero
Tags: elementor, shortcode, gutenberg, 360, 360 degree, gallery, image, panorama, tour
Stable tag: 1.2.0
Requires PHP: 7.0.0
Requires at least: 5.0.0
Tested up to: 6.4.2
License: GPL3
License URI: http://www.gnu.org/licenses/gpl-3.0.html
Elementor requires at least: 3.0.0
Elementor tested up to: 3.19.0

Photo Sphere Viewer is an amazing plugin that creates  360° panorama shots out of any kind of picture. This plugin supports any kind of panoramic file such as .jpeg, .png, .mp4, and so on. the great thing is you can use it anywhere in WordPress using shortcode, Elementor Widgets, and Gutenberg Blocks.


== Description ==
Photo Sphere Viewer renders 360° panoramas shots with Photo Sphere, the new camera mode of Android 4.2 Jelly Bean, and above. It also supports cube panoramas. It works with touch screens too!

This plugin is very easy to use and anyone can use it without any coding knowledge.
You can embed any panoramic photos, and videos in Posts, Pages, Widget areas, and WooCommerce product pages. It comes with everything you need to make the most of your panoramic pictures.



== You can use this plugin in two ways ==
    * Using Elementor widget
    * Using WordPress default Shortcode
We will show you both ways of applying this feature in action.

= Using Elementor widget=
1. Inserting widget
2. Find the Photo Sphere Viewer widget from the widget menu and drag it inside the page.
Content tab
3. The Content tab has the base settings for the layout of the content. There are two sections here.

=Content=
Here, you can adjust the image height & width by the scrollbars on the top of the menu. There is a caption field below that. Then comes the Image field.

At the end of the section, you can see a field named Navbar where you can select from a number of specified options (download, fullscreen). You can see the chosen option at the navbar of the image.
Controls

Go to Content> Controls
The controls section has two parts. The Standard section has options for FoV (field of view), Zoom level, image dimension, and a bunch of switchers. Turning on/off these switchers will affect specific actions.

The Advanced section has speed controls for mouse, move, and zoom.

=Style tab=
With the style tab, you can customize the appearance of the content by color, border, etc.
Navbar

Here, you can change the color, typography, and alignment of the navbar.

==Using WordPress default Shortcode==
You can use Photo Sphere Viewer using the shortcode. For this, you don’t have to go inside the Elementor page editor, just the default Gutenberg page editor will do.

Open a page in Gutenberg editor and insert the Shortcode widget. Then insert the following lines:
[photo_sphere_viewer]
You can summon every function this widget has inside the specific commands in the shortcode. For example, if you want to change the caption, you have to insert this code:
[photo_sphere_viewer caption="This is new caption"]
Similar to the command above, you can enter these texts below for the corresponding functions.
image="bdthemes-photo-sphere-viewer/assets/img/photo-sphere-viewer.jpg"
caption="New Caption"
navbar="autorotate,download,caption,fullscreen,..."
width="100"
height="80"
min_fov="30"
max_fov="90"
default_zoom_lavel="50"
default_longitude="0"
default_latitude="0"
longitude_range="0"
latitude_range="0"
autorotate_delay="20"
autorotate_speed="10"
fish_eye="no"
mouse_wheel="yes"
mousewheel_ctrl_key="no"
mouse_move="yes"
touch_move_two_fingers="yes"
capture_cursor="no"
move_speed="1"
mouse_wheel_speed="1"
zoom_button_increment="2"
canvas_background="#333"
Note: Use space before entering a new command. You can use any kind of image from any resource.

== Installation ==
1. Download the plugin.
2. From the WordPress Admin Panel, click on Plugins => Add New.
3. Click on Upload, so you can directly upload your plugin zip file.
4. Use the browse button to select the plugin zip file that was downloaded, and then click on Install Now.
5. Once installed, click "Activate".

== Changelog ==

=2.0.0=
* WordPress and Elementor latest version compatibility issue fixed

=1.1.0=
* Elementor Latest Version compatibility issue fixed

=1.0.1=
* Shortcode Features Added

=1.0.0=
* Initial Release
