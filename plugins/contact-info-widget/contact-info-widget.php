<?php

/**
 * RED WordPress Widget Boilerplate
 *
 * The RED Widget Boilerplate is an organized, maintainable boilerplate for building widgets using WordPress best practices.
 *
 * Lightly forked from the WordPress Widget Boilerplate by @tommcfarlin.
 *
 * @package   Tent_Contact_Info
 * @author    Kieran Devlin <kjrdevlin@gmail.com>
 * @license   GPL-2.0+
 * @link      https://github.com/KieranDevlin/inhabitent
 * @copyright 2015 Kieran Devlin
 *
 * @wordpress-plugin
 * Plugin Name:       Tent_Contact_Info
 * Plugin URI:        https://github.com/KieranDevlin/inhabitent
 * Description:       A widget that displays Inhabitent's contact information - phone, email, and address
 * Version:           1.0.0
 * Author:            Kieran Devlin
 * Author URI:        https://github.com/KieranDevlin
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

// Prevent direct file access
if (!defined('ABSPATH')) {
	exit;
}

class Tent_Contact_Info extends WP_Widget
{

	/**
	 *
	 * Unique identifier for your widget.
	 *
	 * @since    1.0.0
	 *
	 * @var      string
	 */
	protected $widget_slug = 'tent-contact-info';

	/*--------------------------------------------------*/
	/* Constructor
	/*--------------------------------------------------*/

	/**
	 * Specifies the classname and description, and instantiates the widget.
	 */
	public function __construct()
	{
		parent::__construct(
			$this->get_widget_slug(),
			'Tent Contact Info',
			array(
				'classname'  => $this->get_widget_slug() . '-class',
				'description' => 'This widget displays contact information, phone number, email, and address for the Inhabitent custom theme.'
			)
		);
	} // end constructor

	/**
	 * Return the widget slug.
	 *
	 * @since    1.0.0
	 *
	 * @return    Plugin slug variable.
	 */
	public function get_widget_slug()
	{
		return $this->widget_slug;
	}

	/*--------------------------------------------------*/
	/* Widget API Functions
	/*--------------------------------------------------*/

	/**
	 * Outputs the content of the widget.
	 *
	 * @param array $args     The array of form elements
	 * @param array $instance The current instance of the widget
	 */
	public function widget($args, $instance)
	{

		if (!isset($args['widget_id'])) {
			$args['widget_id'] = $this->id;
		}

		// go on with your widget logic, put everything into a string and …

		extract($args, EXTR_SKIP);

		$widget_string = $before_widget;

		// Manipulate the widget's values based on their input fields
		$title = empty($instance['title']) ? '' : apply_filters('widget_title', $instance['title']);
		$phone = empty($instance['phone']) ? '' : $instance['phone'];
		$email = empty($instance['email']) ? '' : $instance['email'];
		$address = empty($instance['address']) ? '' : $instance['address'];

		ob_start();

		if ($title) {
			$widget_string .= $before_title;
			$widget_string .= $title;
			$widget_string .= $after_title;
		}

		include(plugin_dir_path(__FILE__) . 'views/widget.php');
		$widget_string .= ob_get_clean();
		$widget_string .= $after_widget;

		print $widget_string;
	} // end widget

	/**
	 * Processes the widget's options to be saved.
	 *
	 * @param array $new_instance The new instance of values to be generated via the update.
	 * @param array $old_instance The previous instance of values before the update.
	 */
	public function update($new_instance, $old_instance)
	{

		$instance = $old_instance;

		$instance['title'] = strip_tags($new_instance['title']);
		$instance['phone'] = strip_tags($new_instance['phone']);
		$instance['email'] = strip_tags($new_instance['email']);
		$instance['address'] = strip_tags($new_instance['address']);

		return $instance;
	} // end widget

	/**
	 * Generates the administration form for the widget.
	 *
	 * @param array $instance The array of keys and values for the widget.
	 */
	public function form($instance)
	{
		$instance = wp_parse_args(
			(array) $instance,
			array(
				'title' => 'My Widget Title',
				'phone' => '',
				'email' => '',
				'address' => '',
			)
		);

		$title = strip_tags($instance['title']);
		$phone = strip_tags($instance['phone']);
		$email = strip_tags($instance['email']);
		$address = strip_tags($instance['address']);


		// Display the admin form
		include(plugin_dir_path(__FILE__) . 'views/admin.php');
	} // end form

} // end class

add_action('widgets_init', function () {
	register_widget('Tent_Contact_Info');
});
