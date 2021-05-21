<?php

namespace Fragen\WP_CLI_Runner;

class Runner {

	/**
	 * Bootstrap WP-CLI with the bare minimum so we can instantiate custom classes that extend WP_CLI_Commands
	 *
	 * @param string $vendorDir
	 */
	public static function init( $vendorDir ) {
		if ( ! defined( 'WP_CLI_VERSION' ) ) {
			define( 'WP_CLI_VERSION', '2.x' );
		}

		if ( ! defined( 'WP_CLI_ROOT' ) ) {
			define( 'WP_CLI_ROOT', $vendorDir . '/wp-cli/wp-cli' );
		}

		include_once WP_CLI_ROOT . '/php/utils.php';
		include_once WP_CLI_ROOT . '/php/dispatcher.php';
		include_once WP_CLI_ROOT . '/php/class-wp-cli.php';
		include_once WP_CLI_ROOT . '/php/class-wp-cli-command.php';

		\WP_CLI\Utils\load_dependencies();

		\WP_CLI::set_logger( new Logger() );
	}
}
