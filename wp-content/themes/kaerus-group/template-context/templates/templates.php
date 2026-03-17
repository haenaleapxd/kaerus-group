<?php
/**
 * Twig template context.
 *
 * @package Kicks
 *
 * @var \XD\Types\XD_Template_Props $template_props
 * @var \XD\Types\XD_Post $post
 * @var \Timber\PostQuery<\XD\Types\XD_Post> $posts
 * @var \Timber\Theme $theme
 * @var \Timber\Site $site
 * @var \Timber\User $user
 * @var \Timber\Request $request
 *
 * @phpcs:disable WordPress.WP.GlobalVariablesOverride.Prohibited
 */

/**
 * Template Context.
 */
use function Leap\Editor\Block_Render\xd_render_block;
// Nav button 2.
if ( ! empty( $template_props->global_buttons->nav_buttons['navButton2'] ) ) {
	$nav_button_2 = xd_render_block(
		'xd/button',
		array_merge(
			$template_props->global_buttons->nav_buttons['navButton2'],
			array(
				'text'        => $template_props->global_buttons->nav_buttons['navButton2']['title'],
				'buttonStyle' => 'xd-button--ghost',
			)
		)
	);
	$needle       = 'class="';
	$pos          = strpos( $nav_button_2, $needle );
	$template_props->global_buttons->nav_buttons['navButton2']['content'] = substr_replace(
		$nav_button_2,
		'role="menuitem" class="',
		$pos,
		strlen( $needle )
	);
	if ( ! empty( $template_props->global_buttons->nav_buttons['navButton2']['entityId'] ) &&
	! empty( $template_props->global_buttons->nav_buttons['navButton2']['type'] ) ) {
		if ( 'modal' === $template_props->global_buttons->nav_buttons['navButton2']['type'] ) {
			$popups[] = $template_props->global_buttons->nav_buttons['navButton2']['entityId'];
		}
		if ( 'flyout' === $template_props->global_buttons->nav_buttons['navButton2']['type'] ) {
			$flyouts[] = $template_props->global_buttons->nav_buttons['navButton2']['entityId'];
		}
	}
}
