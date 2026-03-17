<?php
/**
 * Block context
 *
 * @package Kicks
 *
 * @var array $attributes
 * @var WP_Block $block
 * @var \XD\Types\XD_Template_Props $block_props
 * @var string $content
 * @var array $context
 * @var array<WP_Block> $inner_blocks
 * @var array $parent
 * @var array $templates
 * @var string $variation
 * @var \XD\Types\XD_Block_Wrap $wrap
 * @var array $xd_context
 *
 * @phpcs:disable WordPress.WP.GlobalVariablesOverride.Prohibited
 */

use function Leap\Editor\Block_Render\xd_get_block_variation;

// when the last element of a column is a heading, remove the inner class and add a heading class.
// This prevents the heading bottom margin from being removed
// and allows the row gap to be removed with the heading class.

$is_empty = $attributes['isEmpty'];

if ( $is_empty ) {
	$wrap->block->class_name[] = 'xd-column--empty';
}
