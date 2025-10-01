=== Photo Sphere Viewer – Render Stunning 360° Panorama Shots ===
Contributors: wpxero
Tags: 360, panorama, gallery, 360 degree, virtual tour
Version: 1.3.2
Stable tag: 1.3.2
Requires PHP: 7.0
Requires at least: 5.0
Tested up to: 6.8.1
License: GPL3
License URI: http://www.gnu.org/licenses/gpl-3.0.html
Donate Link: https://wpxero.com/pricing/
Elementor requires at least: 3.0
Elementor tested up to: 3.28.4

== Description ==
📸 **Photo Sphere Viewer** is a powerful WordPress plugin for rendering 360° panoramas from various image and video formats, including JPEG, PNG, and MP4. With compatibility for both Elementor Widgets and Gutenberg Blocks, you can display immersive panoramic experiences anywhere on your WordPress site, whether on posts, pages, widget areas, or WooCommerce product pages. With no coding skills required, it’s easy for anyone to enhance their site with captivating 360° views.

== 🎯 Features ==
- **Multiple Display Options:** Use Elementor Widget or WordPress Shortcode
- **Customizable Controls:** Adjust field of view, zoom, dimensions, and more
- **Responsive and Interactive:** Works seamlessly on touch screens and desktops
- **Compatibility:** Works with the latest WordPress and Elementor versions
- **Easy Installation:** Quickly add and configure your 360° panoramas

### 🔧 How to Use

#### 1. Using Elementor Widget
1. Open the Elementor editor and insert the **Photo Sphere Viewer** widget.
2. Customize settings in the **Content** and **Style** tabs:
   - **Content Tab:** Adjust height, width, captions, and more.
   - **Controls:** Set field of view, zoom levels, and enable/disable specific actions.
   - **Advanced Controls:** Control speeds for mouse, movement, and zoom interactions.
   - **Style Tab:** Customize appearance with color, border, and typography settings.

#### 2. Using WordPress Shortcode
Use the Photo Sphere Viewer shortcode directly in the Gutenberg editor (Shortcode block) or anywhere shortcodes are supported.

Basic usage:

`[photo_sphere_viewer]`

Example with a few options:

`[photo_sphere_viewer image="https://example.com/panorama.jpg" caption="Stunning Panorama" width="100" height="80"]`

Examples with advanced options:

`[photo_sphere_viewer image="https://example.com/pano.jpg" navbar="autorotate,download,caption,fullscreen" min_fov="30" max_fov="90" default_zoom_lavel="50" autorotate_delay="1500" autorotate_speed="20" fish_eye="no" mouse_wheel="yes" mousewheel_ctrl_key="no" mouse_move="yes" touch_move_two_fingers="yes" capture_cursor="no" move_speed="1" mouse_wheel_speed="1" zoom_button_increment="2" canvas_background="#333"]`

**All Shortcode Attributes** (with defaults):

  - **image** (string) — URL of the panorama image.
  - Default: plugin demo image `bryce-canyon-national-park.jpg`.

- **caption** (string) — Caption text displayed in the viewer.
  - Default: "From shortcodes".

- **navbar** (comma-separated list) — Controls shown in the toolbar.
  - Default: `autorotate,download,caption,fullscreen`
  - Allowed items: `autorotate`, `download`, `caption`, `fullscreen`.
- **width** (number) — Viewer width as percentage of the container.
  - Default: `100` (interpreted as `100%`).
- **height** (number) — Viewer height in viewport height units.
  - Default: `80` (interpreted as `80vh`).
- **min_fov** (number) — Minimum field of view.
  - Default: `30`.
- **max_fov** (number) — Maximum field of view.
  - Default: `90`.
- **default_zoom_lavel** (number) — Initial zoom level.
  - Default: `50`.
- **default_longitude** (number) — Initial longitude (radians or degrees depending on core library config).
  - Default: `0`.
- **default_latitude** (number) — Initial latitude.
  - Default: `0`.
- **longitude_range** (number|array) — Limit horizontal range. Use `0` for no limit.
  - Default: `0`.
- **latitude_range** (number|array) — Limit vertical range. Use `0` for no limit.
  - Default: `0`.
- **autorotate_delay** (number) — Delay in ms before auto-rotate starts. Empty disables.
  - Default: empty (disabled).
- **autorotate_speed** (number) — Auto-rotate speed; higher is faster.
  - Default: `10` (internally scaled to the library’s expected value).
- **fish_eye** (yes|no) — Enable fisheye effect.
  - Default: `no`.
- **mouse_wheel** (yes|no) — Enable zoom with mouse wheel.
  - Default: `yes`.
- **mousewheel_ctrl_key** (yes|no) — Require Ctrl key for mouse wheel.
  - Default: `no`.
- **mouse_move** (yes|no) — Enable mouse move (drag) controls.
  - Default: `yes`.
- **touch_move_two_fingers** (yes|no) — Require two fingers to move on touch.
  - Default: `yes`.
- **capture_cursor** (yes|no) — Capture cursor while interacting.
  - Default: `no`.
- **move_speed** (number) — Move speed multiplier.
  - Default: `1`.
- **mouse_wheel_speed** (number) — Mouse wheel zoom speed multiplier.
  - Default: `1`.
- **zoom_button_increment** (number) — Zoom step for +/- buttons.
  - Default: `2`.
- **canvas_background** (CSS color) — Viewer canvas background color.
  - Default: `#333`.


Notes:
- Width and height are interpreted as `%` and `vh` respectively by the viewer.
- Boolean-like attributes accept `yes` or `no`.
- If `autorotate_delay` is empty, auto-rotate is disabled regardless of `autorotate_speed`.

== 🚀 Installation ==

1. Download the plugin as a .zip file.
2. In the WordPress Admin Panel, navigate to **Plugins > Add New**.
3. Click on **Upload Plugin**, choose the .zip file, and click **Install Now**.
4. After installation, click **Activate** to enable the plugin on your site.

== Frequently Asked Questions ==

**Q1: What types of files are supported by Photo Sphere Viewer?**
A: Photo Sphere Viewer supports JPEG, PNG, MP4, and other common panoramic formats.

**Q2: Can I use this plugin without Elementor?**
A: Yes, the plugin works with both Elementor and Gutenberg. You can use the shortcode feature directly in the Gutenberg editor.

**Q3: How do I adjust the zoom and field of view?**
A: Use the Elementor widget’s **Controls** tab or set options directly in the shortcode to customize zoom, field of view, and other controls.

**Q4: Is Photo Sphere Viewer mobile responsive?**
A: Yes, it is fully responsive and works seamlessly on touch screens.

== Screenshots ==

1. 📷 **Panorama in Elementor** – Showcasing a 360° panorama displayed using Elementor.
2. 🛠 **Settings Panel** – Photo Sphere Viewer settings panel in Elementor for customizing panorama display options.
3. 🔤 **Shortcode Example** – Using the Photo Sphere Viewer shortcode in Gutenberg.
4. 📱 **Responsive Preview** – Panorama view on mobile and touch devices.

==  Upgrade Notice ==

**1.3.2**
Upgrade to ensure compatibility with the latest WordPress and Elementor versions.

== Changelog ==

## 1.3.2 [01st May 2025]
- WordPress and Elementor latest version compatibility issue fixed

## 1.3.1 [21st December 2024]
- System Improved.
- Compatibility updates for the latest WordPress and Elementor versions

## 1.3.0 [09th October 2024]
- Compatibility updates for the latest WordPress and Elementor versions

## 1.2.0 [09th October 2023]
- WordPress and Elementor latest version compatibility issue fixed

## 1.1.0 [15th March 2023]
-Elementor latest version compatibility issue fixed

## 1.0.1 [15th May 2022]
- Shortcode Features Added

## 1.0.0 [06th February 2022]
- Initial Release