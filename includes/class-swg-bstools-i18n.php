<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://stonewallgroup.com
 * @since      1.0.0
 *
 * @package    Swg_Bstools
 * @subpackage Swg_Bstools/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Swg_Bstools
 * @subpackage Swg_Bstools/includes
 * @author     Eric Griffiths <egriffiths@stonewallgroup.com>
 */
class Swg_Bstools_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'swg-bstools',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
