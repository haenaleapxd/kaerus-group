<?php
/**
 * Scrollspy setup.
 *
 * @package Kicks
 *
 * @phpcs:disable Squiz.PHP.CommentedOutCode.Found
 * @phpcs:disable Squiz.Commenting.InlineComment.InvalidEndChar
 */

// Example:

/**
 * Register scrollspy rules.
 */
function xdc_register_scrollspy_rules() {

	// xd_deregister_scrollspy_rule( '.hero-full');

	// register new rule
	xd_register_scrollspy_rule(
		'.xd-title-block',
		array(
			'target' => '.xd-title-block *',
			'delay'  => 100,
		)
	);
	xd_register_scrollspy_rule(
		'.xd-grid-layout',
		array(
			'target' => '.xd-grid-layout .xd-grid-cell',
			'delay'  => 300,
		)
	);
}
add_action( 'after_setup_theme', 'xdc_register_scrollspy_rules' );
