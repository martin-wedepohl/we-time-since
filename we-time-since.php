<?php    // phpcs:ignore
/**
 * Display the time (years/days) since a certain date
 *
 * @package           WETimeSince
 * @author            Martin Wedepohl
 * @copyright         2020 Wedepohl Engineering
 * @license           GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name:       WE Time Since
 * Plugin URI:        https://github.com/martin-wedepohl/we-time-since
 * Description:       Display the time (years/days) since a certain date.
 * Version:           1.0.5
 * Requires at least: 4.9
 * Requires PHP:      5.6
 * Author:            Martin Wedepohl
 * Author URI:        https://wedepohlengineering.com/
 * License:           GPL v2 or later
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       we-time-since
 *
 * The plugin we-time-since is free software: you can redistribute it
 * and/or modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation, either version 3 of
 * the License, or any later version.
 *
 * we-time-since is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with we_time-since. If not, see https://www.gnu.org/licenses/gpl-3.0.html.
 */

if ( ! defined( 'ABSPATH' ) ) {
	die;
}

if ( ! class_exists( 'WETimeSince' ) ) {

	/**
	 * Class WETimeSince
	 *
	 * Provides all the functionality for a shortcode that will display the number
	 * of years or days since a certain date.
	 *
	 * @package WETimeSince
	 */
	class WETimeSince {

		/**
		 * Class constructor adds the shortcode.
		 *
		 * @since 1.0.0
		 */
		public function __construct() {

			add_shortcode( 'we_time_since', array( $this, 'time_since' ) );

		}

		/**
		 * Return the time since a date.
		 *
		 * Format [we_time_since y=Y m=M d=D type='T']
		 * Where  Y is the year (required)
		 *        M is the month 1-12 (optional) - default 1
		 *        D is the day   1-31 (optional) - default 1
		 *        T is the type  year or day (optional) - default year
		 *
		 * @since 1.0.0
		 *
		 * @param array $atts Attributes passed in from the shortcode.
		 *
		 * @return string Text string for time since the date.
		 */
		public function time_since( $atts ): string {

			do_action( 'before_we_time_since', $atts );

			// Process the attributes.
			$atts = shortcode_atts(
				array(
					'y'    => 0,
					'm'    => 1,
					'd'    => 1,
					'type' => 'year',
				),
				$atts,
				'we_time_since'
			);

			if ( true === checkdate( $atts['m'], $atts['d'], $atts['y'] ) ) {
				$now      = \current_time( 'Y-m-d' );
				$now_date = new \DateTime( $now );
				$date     = new \DateTime( "{$atts['y']}-{$atts['m']}-{$atts['d']}" );
				$diff     = $date->diff( $now_date );
				if ( 'year' === $atts['type'] ) {
					$html = $diff->format( '%y' );
				} else {
					$html = $diff->format( '%a' );
				}
			} else {
				$html = __( 'ERROR the date supplied is invalid', 'we-time-since' );
			}

			do_action( 'after_we_time_since', $atts );

			$html = apply_filters( 'we_time_since', $html );

			return $html;

		}

	}

	new WETimeSince();

}
