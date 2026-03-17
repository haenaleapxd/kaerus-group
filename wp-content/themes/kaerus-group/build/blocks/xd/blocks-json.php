<?php return array(
	'alert-bar' => array(
		'$schema' => '../../../schema/block-schema.json',
		'apiVersion' => 2,
		'attributes' => array(
			'displayAlertBar' => array(
				'type' => 'boolean',
				'default' => false,
			),
		),
		'icon' => 'gm/domain',
		'name' => 'xd/alert-bar',
		'title' => 'Alert Bar',
		'keywords' => array(
			'Company',
			'Details',
		),
		'supports' => array(
			'multiple' => false,
			'custom' => array(
				'register' => true,
				'innerBlocks' => array(
					array(
						'allowedBlocks' => array(
							'core/paragraph',
						),
						'template' => array(
							array(
								'core/paragraph',
								array(
									'placeholder' => 'Enter a message...',
								),
							),
						),
						'templateLock' => 'all',
					),
				),
				'preInnerBlocksControls' => array(
					array(
						'controls' => array(
							array(
								'attribute' => 'displayAlertBar',
								'type' => 'ToggleControl',
								'label' => 'Display Alert Bar',
								'activeState' => 'checked',
							),
						),
					),
				),
			),
		),
	),
	'company-details' => array(
		'$schema' => '../../../schema/block-schema.json',
		'apiVersion' => 2,
		'icon' => 'gm/domain',
		'name' => 'xd/company-details',
		'title' => 'Company Details',
		'keywords' => array(
			'Company',
			'Details',
		),
		'attributes' => array(
			'companyName' => array(
				'type' => 'string',
				'default' => '',
			),
			'address' => array(
				'type' => 'string',
				'default' => '',
			),
			'phone1' => array(
				'type' => 'object',
				'default' => array(
				),
			),
			'phone2' => array(
				'type' => 'object',
				'default' => array(
				),
			),
			'directions' => array(
				'type' => 'object',
				'default' => array(
				),
			),
			'hours' => array(
				'type' => 'string',
				'default' => '',
			),
			'socialShareImage' => array(
				'type' => 'object',
				'default' => array(
				),
			),
		),
		'supports' => array(
			'custom' => array(
				'multiple' => false,
				'register' => true,
				'preInnerBlocksControls' => array(
					array(
						'controls' => array(
							array(
								'label' => 'Company Legal Name',
								'attribute' => 'companyName',
								'type' => 'TextControl',
								'autoComplete' => 'off',
							),
							array(
								'label' => 'Address',
								'attribute' => 'address',
								'type' => 'TextareaControl',
								'autoComplete' => 'off',
								'rows' => 8,
							),
							array(
								'label' => 'Directions',
								'type' => 'XDLinkControl',
								'attribute' => 'directions',
							),
							array(
								'label' => 'Phone 1',
								'type' => 'XDFieldGroup',
								'attribute' => 'phone1',
								'fields' => array(
									array(
										'type' => 'TextControl',
										'label' => 'Phone Label',
										'name' => 'phone1Label',
									),
									array(
										'type' => 'TextControl',
										'label' => 'Phone Number',
										'name' => 'phone1Number',
									),
									array(
										'type' => 'TextControl',
										'label' => 'Display Number (Optional)',
										'name' => 'phone1DisplayNumber',
									),
								),
							),
							array(
								'label' => 'Phone 2',
								'type' => 'XDFieldGroup',
								'attribute' => 'phone2',
								'fields' => array(
									array(
										'type' => 'TextControl',
										'label' => 'Phone Label',
										'attribute' => 'phone2Label',
										'schema' => array(
											'type' => 'string',
										),
									),
									array(
										'type' => 'TextControl',
										'label' => 'Phone Number',
										'attribute' => 'phone2Number',
										'schema' => array(
											'type' => 'string',
										),
									),
									array(
										'type' => 'TextControl',
										'label' => 'Display Number (Optional)',
										'attribute' => 'phone2DisplayNumber',
										'schema' => array(
											'type' => 'string',
										),
									),
								),
							),
							array(
								'label' => 'Hours',
								'attribute' => 'hours',
								'type' => 'TextareaControl',
								'autoComplete' => 'off',
								'rows' => 8,
							),
							array(
								'label' => 'Optional Social Share Override',
								'attribute' => 'socialShareImage',
								'type' => 'XDImageControl',
							),
						),
					),
				),
				'innerBlocks' => array(
					array(
						'allowedBlocks' => array(
						),
					),
				),
			),
		),
	),
	'footer' => array(
		'$schema' => '../../../schema/block-schema.json',
		'apiVersion' => 2,
		'icon' => 'gm/domain',
		'name' => 'xd/footer',
		'title' => 'Footer',
		'keywords' => array(
			'Footer',
		),
		'attributes' => array(
			'footerLogo' => array(
				'type' => 'object',
				'default' => array(
				),
			),
			'footerType' => array(
				'type' => 'string',
				'default' => 'footer-top-none',
				'enum' => array(
					'footer-top-small',
					'footer-top-full',
					'footer-top-none',
				),
			),
			'footerNavMenu' => array(
				'type' => 'string',
				'default' => '',
			),
			'footerMenu' => array(
				'type' => 'string',
				'default' => '',
			),
			'footerButtons' => array(
				'type' => 'object',
				'default' => '',
			),
		),
		'supports' => array(
			'custom' => array(
				'multiple' => false,
				'register' => true,
				'preInnerBlocksControls' => array(
					array(
						'context' => array(
							'attributes' => array(
								'footerType' => 'footer-top-small',
							),
						),
						'controls' => array(
							array(
								'label' => 'Footer Logo',
								'attribute' => 'footerLogo',
								'type' => 'XDFieldGroup',
								'fields' => array(
									array(
										'type' => 'XDLinkControl',
										'label' => 'Footer Logo Link',
										'attribute' => 'link',
										'showLinkTextControl' => false,
										'schema' => array(
											'type' => 'object',
										),
									),
									array(
										'type' => 'XDImageControl',
										'label' => 'Footer Logo Image',
										'style' => array(
											'--xd-image-width' => '250px',
										),
										'attribute' => 'image',
										'schema' => array(
											'type' => 'object',
										),
									),
								),
							),
						),
					),
					array(
						'context' => array(
							'attributes' => array(
								'footerType' => 'footer-top-full',
							),
						),
						'controls' => array(
							array(
								'label' => 'Footer Logo',
								'attribute' => 'footerLogo',
								'type' => 'XDFieldGroup',
								'fields' => array(
									array(
										'type' => 'XDLinkControl',
										'label' => 'Footer Logo Link',
										'attribute' => 'link',
										'showLinkTextControl' => false,
										'schema' => array(
											'type' => 'object',
										),
									),
									array(
										'type' => 'XDImageControl',
										'label' => 'Footer Logo Image',
										'style' => array(
											'--xd-image-width' => '250px',
										),
										'attribute' => 'image',
										'schema' => array(
											'type' => 'object',
										),
									),
								),
							),
							array(
								'label' => 'Footer Buttons',
								'type' => 'XDFieldGroup',
								'attribute' => 'footerButtons',
								'fields' => array(
									array(
										'label' => 'Newsletter Tagline',
										'attribute' => 'newsletterTag',
										'type' => 'TextareaControl',
										'schema' => array(
											'type' => 'string',
										),
									),
									array(
										'label' => 'Newsletter Page Link',
										'attribute' => 'newsletterLink',
										'type' => 'XDLinkControl',
										'schema' => array(
											'type' => 'object',
										),
									),
									array(
										'label' => 'Contact Page Link',
										'attribute' => 'contactLink',
										'type' => 'XDLinkControl',
										'schema' => array(
											'type' => 'object',
										),
									),
								),
							),
							array(
								'label' => 'Footer Menu',
								'attribute' => 'footerMenu',
								'type' => 'XDMenuPickerControl',
								'schema' => array(
									'type' => 'string',
								),
							),
						),
					),
					array(
					),
				),
				'innerBlocks' => array(
					array(
						'context' => array(
							'attributes' => array(
								'footerType' => 'footer-top-small',
							),
						),
						'allowedBlocks' => array(
							'core/paragraph',
						),
						'template' => array(
							array(
								'core/paragraph',
								array(
									'placeholder' => 'Enter footer copy here',
								),
							),
						),
						'templateLock' => false,
						'wrap' => true,
					),
					array(
						'context' => array(
						),
						'allowedBlocks' => array(
						),
						'template' => array(
						),
						'templateLock' => 'all',
					),
				),
				'postInnerBlocksControls' => array(
					array(
						'controls' => array(
							array(
								'label' => 'Footer Nav Menu',
								'attribute' => 'footerNavMenu',
								'type' => 'XDMenuPickerControl',
								'schema' => array(
									'type' => 'string',
								),
							),
						),
					),
				),
				'merge' => true,
			),
		),
	),
	'global-buttons' => array(
		'$schema' => '../../../schema/block-schema.json',
		'apiVersion' => 2,
		'icon' => 'gm/domain',
		'name' => 'xd/global-buttons',
		'title' => 'Global Buttons',
		'keywords' => array(
			'Menu',
			'Links',
		),
		'attributes' => array(
			'flyoutButton' => array(
				'type' => 'object',
				'default' => array(
					'url' => '/contact/',
					'title' => 'Contact Us',
				),
			),
			'navButtons' => array(
				'type' => 'object',
				'default' => array(
					'navButton1' => array(
						'url' => '/contact/',
						'title' => 'Contact Us',
					),
				),
			),
			'sideStickyButton' => array(
				'type' => 'object',
				'default' => array(
				),
			),
			'stickyButtons' => array(
				'type' => 'object',
				'default' => array(
				),
			),
			'footerButtons' => array(
				'type' => 'object',
				'default' => array(
					'contactLink' => array(
						'url' => '/contact/',
						'title' => 'Contact Us',
					),
					'newsletterTag' => 'Keep up to date by subscribing to our newsletter.',
					'newsletterLink' => array(
						'url' => '/newsletter/',
						'title' => 'Subscribe',
					),
				),
			),
		),
		'supports' => array(
			'custom' => array(
				'multiple' => false,
				'register' => true,
				'preInnerBlocksControls' => array(
					array(
						'controls' => array(
							array(
								'label' => 'Menu Flyout Button',
								'type' => 'XDLinkControl',
								'attribute' => 'flyoutButton',
							),
							array(
								'label' => 'Navigation Bar Buttons',
								'type' => 'XDFieldGroup',
								'attribute' => 'navButtons',
								'fields' => array(
									array(
										'label' => 'Navbar Button 1',
										'type' => 'XDLinkControl',
										'attribute' => 'navButton1',
										'schema' => array(
											'type' => 'object',
										),
									),
									array(
										'label' => 'Navbar Button 2',
										'type' => 'XDLinkControl',
										'attribute' => 'navButton2',
										'schema' => array(
											'type' => 'object',
										),
									),
								),
							),
							array(
								'label' => 'Side Sticky Button',
								'type' => 'XDLinkControl',
								'attribute' => 'sideStickyButton',
								'schema' => array(
									'type' => 'object',
								),
							),
							array(
								'label' => 'Mobile Sticky Buttons',
								'type' => 'XDFieldGroup',
								'attribute' => 'stickyButtons',
								'fields' => array(
									array(
										'type' => 'ToggleControl',
										'label' => 'Display Sticky Buttons',
										'attribute' => 'displayStickyButtons',
										'schema' => array(
											'type' => 'boolean',
										),
										'activeState' => 'checked',
										'default' => false,
									),
									array(
										'label' => 'Sticky Button 1',
										'type' => 'XDLinkControl',
										'attribute' => 'sticky1',
										'schema' => array(
											'type' => 'object',
										),
									),
									array(
										'label' => 'Sticky Button 2',
										'type' => 'XDLinkControl',
										'attribute' => 'sticky2',
										'schema' => array(
											'type' => 'object',
										),
									),
								),
							),
						),
					),
				),
				'innerBlocks' => array(
					array(
						'allowedBlocks' => array(
						),
					),
				),
			),
		),
	),
	'map-options' => array(
		'$schema' => '../../../schema/block-schema.json',
		'apiVersion' => 2,
		'icon' => 'gm/domain',
		'name' => 'xd/map-options',
		'title' => 'Map Options',
		'attributes' => array(
			'mapJson' => array(
				'type' => 'string',
				'default' => '',
			),
		),
		'keywords' => array(
			'Map',
			'Json',
		),
		'supports' => array(
			'custom' => array(
				'multiple' => false,
				'register' => true,
				'innerBlocks' => array(
					array(
						'allowedBlocks' => array(
						),
					),
				),
				'preInnerBlocksControls' => array(
					array(
						'controls' => array(
							array(
								'attribute' => 'mapJson',
								'type' => 'TextareaControl',
								'label' => 'Snazzy Maps Override Json',
								'rows' => 16,
							),
						),
					),
				),
			),
		),
	),
	'popup' => array(
		'$schema' => '../../../schema/block-schema.json',
		'apiVersion' => 2,
		'attributes' => array(
			'displayPopup' => array(
				'type' => 'boolean',
				'default' => false,
			),
			'image' => array(
				'type' => 'object',
				'default' => array(
					'id' => '',
					'url' => '',
				),
			),
		),
		'icon' => 'gm/domain',
		'name' => 'xd/popup',
		'title' => 'Popup',
		'keywords' => array(
			'Popup',
		),
		'supports' => array(
			'custom' => array(
				'multiple' => false,
				'register' => true,
				'innerBlocks' => array(
					array(
						'wrap' => array(
							'editorInnerBlocks' => 'xd-popup__inner',
							'preInnerBlocks' => 'pre-inner-blocks',
						),
						'allowedBlocks' => array(
							'core/heading',
							'core/paragraph',
							'xd/buttons',
						),
						'template' => array(
							array(
								'core/heading',
								array(
									'level' => 3,
								),
							),
							array(
								'core/paragraph',
							),
							array(
								'xd/buttons',
							),
						),
					),
				),
				'preInnerBlocksControls' => array(
					array(
						'controls' => array(
							array(
								'attribute' => 'displayPopup',
								'type' => 'ToggleControl',
								'label' => 'Display Popup',
								'activeState' => 'checked',
							),
							array(
								'attribute' => 'image',
								'type' => 'XDImageControl',
								'label' => 'Image - Optional',
								'help' => 'Optional',
							),
						),
					),
				),
			),
		),
	),
	'social-link' => array(
		'$schema' => '../../../schema/block-schema.json',
		'apiVersion' => 2,
		'icon' => 'wp/navigation',
		'name' => 'xd/social-link',
		'title' => 'Social Link',
		'parent' => array(
			'xd/social-links',
		),
		'keywords' => array(
			'Social',
			'Links',
		),
		'attributes' => array(
			'icon' => array(
				'type' => 'string',
				'default' => 'facebook',
			),
		),
		'supports' => array(
			'xd/link' => true,
			'custom' => array(
				'register' => true,
				'innerBlocks' => array(
					array(
						'serverSideRender' => true,
						'allowedBlocks' => array(
						),
					),
				),
				'blockControls' => array(
					array(
						'controls' => array(
							array(
								'label' => 'Icon',
								'attribute' => 'icon',
								'type' => 'XDToolbarDropdownMenu',
								'group' => 'icon',
								'options' => array(
									array(
										'icon' => 'xd/facebook',
										'label' => 'Facebook',
										'value' => 'facebook',
									),
									array(
										'icon' => 'xd/instagram',
										'label' => 'Instagram',
										'value' => 'instagram',
									),
									array(
										'icon' => 'xd/linkedin',
										'label' => 'LinkedIn',
										'value' => 'linkedin',
									),
									array(
										'icon' => 'xd/tiktok',
										'label' => 'Tiktok',
										'value' => 'tiktok',
									),
									array(
										'icon' => 'xd/twitter',
										'label' => 'Twitter',
										'value' => 'twitter',
									),
									array(
										'icon' => 'xd/twitter-x',
										'label' => 'X (Twitter)',
										'value' => 'twitter-x',
									),
									array(
										'icon' => 'xd/youtube',
										'label' => 'YouTube',
										'value' => 'youtube',
									),
									array(
										'icon' => 'xd/vimeo',
										'label' => 'Vimeo',
										'value' => 'vimeo',
									),
								),
							),
						),
					),
				),
			),
		),
	),
	'social-links' => array(
		'$schema' => '../../../schema/block-schema.json',
		'apiVersion' => 2,
		'icon' => 'wp/navigation',
		'name' => 'xd/social-links',
		'title' => 'Social Links',
		'keywords' => array(
			'Social',
			'Links',
		),
		'supports' => array(
			'custom' => array(
				'multiple' => false,
				'register' => true,
				'innerBlocks' => array(
					array(
						'allowedBlocks' => array(
							'xd/social-link',
						),
						'template' => array(
							array(
								'xd/social-link',
							),
						),
						'orientation' => 'horizontal',
					),
				),
			),
		),
	),
	'accommodation-card' => array(
		'apiVersion' => 2,
		'name' => 'xd/accommodation-card',
		'title' => 'Accommodation Card',
		'icon' => 'gm/photo-album',
		'description' => 'Accommodation card',
		'category' => 'standard',
		'keywords' => array(
			'accommodation',
			'card',
		),
		'viewStyle' => array(
			'block-styles/post-card',
			'block-styles/accommodation-card',
		),
		'editorStyle' => array(
			'block-styles/post-card',
			'block-styles/accommodation-card',
		),
		'parent' => array(
			'xd/accommodation-cards',
		),
		'attributes' => array(
			'postType' => array(
				'type' => 'string',
				'default' => 'post',
			),
			'postId' => array(
				'type' => 'integer',
				'default' => 0,
			),
		),
		'supports' => array(
			'custom' => array(
				'register' => true,
				'innerBlocks' => array(
					array(
						'wrap' => array(
							'block' => 'col-12 xd-post-card xd-post-card--accommodation',
							'serverSideRenderBlock' => 'xd-post-card xd-post-card--accommodation',
						),
						'serverSideRender' => true,
						'allowedBlocks' => array(
						),
					),
				),
				'blockControls' => array(
					array(
						'controls' => array(
							array(
								'id' => 'remove-button',
								'type' => 'XDPostCardControls',
							),
						),
					),
				),
			),
		),
	),
	'accommodation-cards' => array(
		'apiVersion' => 2,
		'attributes' => array(
			'postType' => array(
				'type' => 'string',
				'default' => 'accommodation',
			),
			'slider' => array(
				'type' => 'boolean',
				'default' => false,
			),
			'postCard' => array(
				'type' => 'integer',
				'default' => 0,
			),
			'paddingTop' => array(
				'type' => 'string',
				'default' => 'xd-pt--xs',
				'className' => true,
			),
			'paddingBottom' => array(
				'type' => 'string',
				'default' => 'xd-pb--xs',
				'className' => true,
			),
		),
		'name' => 'xd/accommodation-cards',
		'title' => 'Accommodation Cards',
		'icon' => 'admin-post',
		'viewStyle' => array(
			'block-styles/post-cards',
		),
		'editorStyle' => array(
			'block-styles/post-cards',
		),
		'description' => 'Insert a collection of cards linking to your accommodations',
		'category' => 'standard',
		'keywords' => array(
			'card',
			'cards',
		),
		'supports' => array(
			'xd/title' => true,
			'xd/padding-controls-all' => true,
			'custom' => array(
				'register' => true,
				'innerBlocks' => array(
					array(
						'context' => array(
							'attributes' => array(
								'postType' => 'accommodation',
							),
						),
						'wrap' => array(
							'block' => 'container xd-post-cards xd-post-cards--accommodations',
							'innerBlocks' => 'row',
						),
						'allowedBlocks' => array(
						),
						'renderAppender' => false,
					),
				),
				'inspectorControls' => array(
					array(
						'panels' => array(
							array(
								'title' => 'Card Selection',
								'initialOpen' => true,
								'controls' => array(
									array(
										'type' => 'XDPostSelectControl',
										'blockType' => 'xd/accommodation-card',
									),
								),
							),
						),
					),
				),
			),
		),
	),
	'accordionelement' => array(
		'$schema' => '../../schema/block-schema.json',
		'apiVersion' => 2,
		'name' => 'xd/accordionelement',
		'title' => 'Accordion Element',
		'category' => 'standard',
		'icon' => 'gm/expand-more',
		'parent' => array(
			'xd/accordion',
		),
		'attributes' => array(
			'accordionOpen' => array(
				'type' => 'boolean',
				'default' => false,
			),
			'accordionTitle' => array(
				'type' => 'string',
				'default' => '',
			),
		),
		'supports' => array(
			'custom' => array(
				'register' => true,
				'innerBlocks' => array(
					array(
						'wrap' => array(
							'block' => false,
							'outer' => false,
							'inner' => false,
							'preInnerBlocks' => 'uk-accordion-title',
							'innerBlocks' => 'uk-accordion-content',
							'postInnerBlocks' => false,
						),
						'allowedBlocks' => array(
							'core/paragraph',
							'core/heading',
							'core/list',
							'xd/buttons',
							'core/separator',
						),
						'template' => array(
							array(
								'core/paragraph',
							),
						),
					),
				),
				'inspectorControls' => array(
					array(
						'panels' => array(
							array(
								'title' => 'Accordion Element',
								'initialOpen' => false,
								'controls' => array(
									array(
										'type' => 'ToggleControl',
										'activeState' => 'checked',
										'label' => 'Accordion Item Open',
										'attribute' => 'accordionOpen',
									),
								),
							),
						),
					),
				),
				'preInnerBlocksControls' => array(
					array(
						'controls' => array(
							array(
								'attribute' => 'accordionTitle',
								'allowedFormats' => array(
								),
								'tagName' => 'h5',
								'type' => 'RichText',
								'className' => 'xd-accordionelement__title',
								'placeholder' => 'Title',
								'identifier' => 'title',
							),
						),
					),
				),
			),
		),
	),
	'accordion' => array(
		'$schema' => '../../schema/block-schema.json',
		'apiVersion' => 2,
		'name' => 'xd/accordion',
		'title' => 'Accordion',
		'description' => 'Accordion block with collapsible content',
		'category' => 'standard',
		'icon' => 'gm/reorder',
		'keywords' => array(
			'accordion',
			'content',
			'collapse',
			'list',
		),
		'viewStyle' => array(
			'block-styles/accordion',
		),
		'editorStyle' => array(
			'block-styles/accordion',
		),
		'attributes' => array(
			'accordionMultipleOpen' => array(
				'type' => 'boolean',
				'default' => false,
			),
		),
		'supports' => array(
			'custom' => array(
				'register' => true,
				'innerBlocks' => array(
					array(
						'wrap' => array(
							'block' => 'xd-width-inline',
							'outer' => 'uk-accordion',
							'inner' => false,
							'preInnerBlocks' => false,
							'innerBlocks' => false,
							'postInnerBlocks' => false,
						),
						'allowedBlocks' => array(
							'xd/accordionelement',
						),
						'template' => array(
							array(
								'xd/accordionelement',
							),
							array(
								'xd/accordionelement',
							),
							array(
								'xd/accordionelement',
							),
						),
					),
				),
				'inspectorControls' => array(
					array(
						'panels' => array(
							array(
								'title' => 'Options',
								'initialOpen' => false,
								'controls' => array(
									array(
										'type' => 'ToggleControl',
										'activeState' => 'checked',
										'label' => 'Allow Multiple Open',
										'attribute' => 'accordionMultipleOpen',
									),
								),
							),
						),
					),
				),
			),
		),
	),
	'button' => array(
		'$schema' => '../../../../kicks/editor/schema/block-schema.json',
		'apiVersion' => 2,
		'attributes' => array(
			'text' => array(
				'type' => 'string',
				'default' => '',
			),
		),
		'name' => 'xd/button',
		'parent' => array(
			'xd/buttons',
		),
		'title' => 'Button',
		'category' => 'standard',
		'description' => 'Prompt visitors to take action with a button-style link.',
		'keywords' => array(
			'link',
		),
		'icon' => 'wp/button',
		'supports' => array(
			'xd/link' => true,
			'xd/post-link' => true,
			'xd/button-style' => true,
			'xd/button-style-controls' => true,
			'xd/button-style-controls-v2' => true,
			'splitting' => true,
			'custom' => array(
				'modules' => array(
					array(
						'context' => array(
							'themeVersion' => array(
								'compare' => '>=',
								'version' => '1.0.05',
							),
						),
						'allowedModules' => array(
							'xd/link',
							'xd/post-link',
							'xd/button-style',
							'xd/button-style-controls-v2',
							'xd/button-style-invert',
						),
					),
					array(
						'context' => array(
							'themeVersion' => array(
								'compare' => '<',
								'version' => '1.0.05',
							),
						),
						'allowedModules' => array(
							'xd/link',
							'xd/post-link',
							'xd/button-style',
							'xd/button-style-controls',
						),
					),
				),
				'merge' => true,
			),
			'//xd/button-style-invert' => true,
		),
	),
	'buttons' => array(
		'$schema' => '../../schema/block-schema.json',
		'apiVersion' => 2,
		'name' => 'xd/buttons',
		'title' => 'Buttons',
		'icon' => 'wp/buttons',
		'description' => 'Prompt visitors to take action with a group of button-style links.',
		'category' => 'standard',
		'keywords' => array(
			'buttons',
		),
		'supports' => array(
			'custom' => array(
				'register' => true,
				'innerBlocks' => array(
					array(
						'wrap' => array(
							'block' => 'xd-width-inline',
						),
						'allowedBlocks' => array(
							'xd/button',
						),
						'template' => array(
							array(
								'xd/button',
							),
						),
					),
				),
			),
			'__experimentalLayout' => array(
				'allowSwitching' => false,
				'allowInheriting' => false,
				'default' => array(
					'type' => 'flex',
				),
			),
			'layout' => array(
				'allowSwitching' => false,
				'allowInheriting' => false,
				'default' => array(
					'type' => 'flex',
				),
			),
		),
	),
	'card-slider' => array(
		'$schema' => '../../schema/block-schema.json',
		'apiVersion' => 2,
		'name' => 'xd/card-slider',
		'title' => 'Card Slider',
		'description' => 'Display a slider of cards with flexible content',
		'category' => 'standard',
		'icon' => 'gm/view-carousel',
		'keywords' => array(
			'cards',
			'content',
		),
		'viewStyle' => array(
			'block-styles/card-slider',
		),
		'editorStyle' => array(
			'block-styles/card-slider',
		),
		'attributes' => array(
			'sliderType' => array(
				'type' => 'string',
				'default' => 'flex-slider',
			),
		),
		'variations' => array(
			array(
				'scope' => array(
					'inserter',
				),
				'name' => 'xd/card-slider',
				'title' => 'Card Slider',
				'category' => 'standard',
				'icon' => 'gm/view-carousel',
				'description' => 'Display a slider of cards with flexible content',
				'attributes' => array(
					'sliderType' => 'flex-slider',
				),
				'isActive' => array(
					'sliderType',
				),
				'isDefault' => true,
			),
			array(
				'scope' => array(
					'inserter',
				),
				'name' => 'xd/award-slider',
				'title' => 'Award Slider',
				'description' => 'Display a slider of award cards',
				'category' => 'standard',
				'icon' => 'awards',
				'attributes' => array(
					'sliderType' => 'award-slider',
				),
				'isActive' => array(
					'sliderType',
				),
			),
			array(
				'scope' => array(
					'inserter',
				),
				'name' => 'xd/testimonials-slider',
				'title' => 'Testimonial Slider',
				'description' => 'Display a slider of testimonials',
				'category' => 'standard',
				'icon' => 'gm/chat',
				'attributes' => array(
					'sliderType' => 'testimonial-slider',
				),
				'isActive' => array(
					'sliderType',
				),
			),
		),
		'supports' => array(
			'xd/padding' => true,
			'xd/padding-controls' => true,
			'xd/card-slider-width' => true,
			'xd/color-theme' => true,
			'xd/title' => true,
			'custom' => array(
				'register' => true,
				'innerBlocks' => array(
					array(
						'isDefault' => true,
						'wrap' => array(
							'block' => 'container xd-card-slider--flex',
							'outer' => 'row',
							'innerBlocks' => 'col-10 offset-1',
							'preInnerBlocks' => 'col-10 offset-1',
							'editorInner' => 'col-10 offset-1',
							'editorInnerBlocks' => array(
								'add' => 'row',
								'remove' => 'col-10 offset-1',
							),
							'editorPreInnerBlocks' => array(
								'remove' => 'col-10 offset-1',
								'add' => 'col-12',
							),
						),
						'allowedBlocks' => array(
							'xd/card',
						),
						'template' => array(
							array(
								'xd/card',
							),
							array(
								'xd/card',
							),
							array(
								'xd/card',
							),
						),
						'templateLock' => false,
						'orientation' => 'horizontal',
					),
					array(
						'context' => array(
							'variation' => array(
								'xd/award-slider',
							),
						),
						'wrap' => array(
							'block' => 'container xd-card-slider--awards',
							'outer' => 'row',
							'inner' => 'xd-card-slider__content col-10 offset-1',
							'editorInnerBlocks' => 'row',
						),
						'allowedBlocks' => array(
							'xd/card',
						),
						'template' => array(
							array(
								'xd/card',
							),
							array(
								'xd/card',
							),
							array(
								'xd/card',
							),
						),
					),
					array(
						'context' => array(
							'variation' => array(
								'xd/testimonials-slider',
							),
						),
						'wrap' => array(
							'block' => 'container xd-card-slider--testimonial',
							'inner' => 'xd-card-slider__content row',
							'innerBlocks' => 'col-10 col-lg-8 offset-1 offset-lg-2',
						),
						'allowedBlocks' => array(
							'xd/card',
						),
						'template' => array(
							array(
								'xd/card',
							),
							array(
								'xd/card',
							),
							array(
								'xd/card',
							),
						),
					),
					array(
						'context' => array(
							'variation' => array(
								'xd/card-slider',
							),
							'attributes' => array(
								'wideWidth' => true,
							),
						),
						'wrap' => array(
							'block' => 'container xd-card-slider--flex xd-card-slider--wide-width',
							'outer' => 'row xd-card-slider__row-wide-width',
							'innerBlocks' => 'col-11 offset-1 xd-card-slider__col-wide-width',
							'preInnerBlocks' => 'col-10 offset-1',
							'editorBlock' => array(
								'remove' => 'xd-card-slider--wide-width',
							),
							'editorOuter' => array(
								'remove' => 'xd-card-slider__row-wide-width',
							),
							'editorInner' => 'col-10 offset-1',
							'editorInnerBlocks' => array(
								'add' => 'row',
								'remove' => 'col-11 offset-1 xd-card-slider__col-wide-width',
							),
							'editorPreInnerBlocks' => array(
								'remove' => 'col-10 offset-1',
								'add' => 'col-12',
							),
						),
					),
				),
				'modules' => array(
					array(
						'context' => array(
							'variation' => array(
								'xd/testimonials-slider',
							),
						),
						'allowedModules' => array(
							'xd/padding',
							'xd/padding-controls',
							'xd/color-theme',
						),
					),
					array(
						'context' => array(
							'variation' => array(
								'xd/award-slider',
							),
						),
						'allowedModules' => array(
							'xd/padding',
							'xd/padding-controls',
							'xd/color-theme',
							'xd/title',
						),
					),
					array(
						'context' => array(
						),
						'allowedModules' => true,
					),
				),
			),
		),
	),
	'card' => array(
		'$schema' => '../../schema/block-schema.json',
		'apiVersion' => 2,
		'name' => 'xd/card',
		'title' => 'Card',
		'description' => 'Card with flexible content',
		'category' => 'standard',
		'icon' => 'gm/photo-album',
		'viewStyle' => array(
			'block-styles/card',
		),
		'editorStyle' => array(
			'block-styles/card',
		),
		'parent' => array(
			'xd/card-slider',
		),
		'keywords' => array(
			'card',
			'content',
			'card',
		),
		'supports' => array(
			'custom' => array(
				'register' => true,
				'innerBlocks' => array(
					array(
						'isDefault' => true,
						'context' => array(
							'parent' => array(
								'xd/card-slider',
							),
							'parentVariation' => array(
								'xd/card-slider',
							),
						),
						'wrap' => array(
							'block' => 'xd-card--flex col-12 col-md-6 col-xl-4',
							'innerBlocks' => 'xd-card__inner',
						),
						'allowedBlocks' => array(
							'core/paragraph',
							'core/heading',
							'xd/buttons',
							'core/separator',
							'xd/image',
							'xd/image-icon',
							'xd/video',
						),
						'template' => array(
							array(
								'xd/image',
							),
							array(
								'core/heading',
								array(
									'level' => 6,
								),
							),
							array(
								'core/paragraph',
							),
						),
						'templateLock' => false,
					),
					array(
						'context' => array(
							'parent' => array(
								'xd/card-slider',
							),
							'parentVariation' => array(
								'xd/award-slider',
							),
						),
						'wrap' => array(
							'block' => 'xd-award-card xd-card--award col-12 col-md-6 col-xl-4',
							'outer' => 'xd-award-card__content xd-card__content',
							'innerBlocks' => 'xd-award-card__inner xd-card__inner',
						),
						'allowedBlocks' => array(
							'xd/image',
							'core/paragraph',
							'core/heading',
							'xd/buttons',
						),
						'template' => array(
							array(
								'xd/image',
								array(
									'imageAlign' => 'alignCenter',
								),
							),
							array(
								'core/heading',
								array(
									'level' => 6,
									'textAlign' => 'center',
									'placeholder' => 'Award Name',
								),
							),
							array(
								'core/paragraph',
								array(
									'align' => 'center',
									'placeholder' => 'Details',
								),
							),
							array(
								'core/paragraph',
								array(
									'align' => 'center',
									'className' => 'is-style-title-lg',
									'placeholder' => 'Year',
								),
							),
						),
					),
					array(
						'context' => array(
							'parent' => array(
								'xd/card-slider',
							),
							'parentVariation' => array(
								'xd/testimonials-slider',
							),
						),
						'wrap' => array(
							'block' => 'xd-testimonial-card xd-card--testimonial col-12',
							'outer' => 'xd-testimonial-card__content xd-card__content',
							'innerBlocks' => 'xd-testimonial-card__inner xd-card__inner',
						),
						'allowedBlocks' => array(
							'core/paragraph',
							'core/heading',
						),
						'template' => array(
							array(
								'core/heading',
								array(
									'level' => 4,
									'textAlign' => 'center',
									'placeholder' => 'Testimonial',
								),
							),
							array(
								'core/heading',
								array(
									'level' => 6,
									'textAlign' => 'center',
									'placeholder' => 'Author',
								),
							),
							array(
								'core/paragraph',
								array(
									'align' => 'center',
									'className' => 'is-style-title-lg',
									'placeholder' => 'City, Province',
								),
							),
						),
					),
				),
			),
		),
	),
	'column' => array(
		'$schema' => '../../../../../themes/kicks/editor/schema/block-schema.json',
		'apiVersion' => 2,
		'name' => 'xd/column',
		'title' => 'Column',
		'description' => 'Single column of content',
		'category' => 'standard',
		'icon' => 'wp/column',
		'viewStyle' => array(
			'block-styles/xd-column',
		),
		'editorStyle' => array(
			'block-styles/xd-column',
		),
		'parent' => array(
			'xd/columns',
		),
		'keywords' => array(
			'card',
			'content',
			'column',
		),
		'attributes' => array(
			'isEmpty' => array(
				'type' => 'boolean',
				'default' => false,
			),
		),
		'supports' => array(
			'custom' => array(
				'register' => true,
				'innerBlocks' => array(
					array(
						'isDefault' => true,
						'context' => array(
							'parent' => array(
								'xd/columns',
							),
							'parentVariation' => array(
								'xd/columns',
							),
						),
						'wrap' => array(
							'innerBlocks' => 'xd-column__inner',
						),
						'allowedBlocks' => array(
							'core/paragraph',
							'core/heading',
							'core/list',
							'core/quote',
							'core/cover',
							'xd/buttons',
							'core/separator',
							'xd/image',
							'xd/image-icon',
							'xd/video',
							'xd/accordion',
							'xd/form',
						),
						'template' => array(
							array(
								'core/heading',
							),
							array(
								'core/paragraph',
							),
						),
						'templateLock' => false,
					),
					array(
						'context' => array(
							'parent' => array(
								'xd/columns',
							),
							'parentVariation' => array(
								'xd/three-column',
								'xd/four-column',
							),
						),
						'template' => array(
							array(
								'core/heading',
								array(
									'level' => 4,
								),
							),
							array(
								'core/paragraph',
							),
						),
					),
					array(
						'context' => array(
							'parent' => array(
								'xd/columns',
							),
							'parentVariation' => array(
								'xd/quick-facts',
							),
						),
						'wrap' => array(
							'innerBlocks' => 'xd-column__inner xd-quick-facts__inner',
						),
						'allowedBlocks' => array(
							'core/heading',
							'core/paragraph',
						),
						'template' => array(
							array(
								'core/heading',
							),
							array(
								'core/heading',
								array(
									'level' => '4',
								),
							),
						),
					),
					array(
						'context' => array(
							'parent' => array(
								'xd/cta',
							),
						),
						'wrap' => array(
							'block' => 'col-10 col-md-8 col-xl-6 offset-1 offset-md-2 offset-xl-1',
							'innerBlocks' => 'xd-cta__inner',
						),
						'allowedBlocks' => array(
							'core/paragraph',
							'core/heading',
							'xd/buttons',
							'core/separator',
						),
						'template' => array(
							array(
								'core/heading',
								array(
									'textAlign' => 'center',
								),
							),
							array(
								'xd/buttons',
								array(
									'layout' => array(
										'type' => 'flex',
										'justifyContent' => 'center',
									),
								),
							),
						),
					),
					array(
						'context' => array(
							'parent' => array(
								'xd/cta',
							),
							'parentVariation' => array(
								'xd/cta-two-col',
							),
						),
						'wrap' => array(
							'block' => 'col-10 col-md-8 col-xl-4 offset-1 offset-md-2 offset-xl-1',
							'innerBlocks' => 'xd-cta__inner',
						),
						'allowedBlocks' => array(
							'core/paragraph',
							'core/heading',
							'xd/buttons',
							'core/separator',
						),
						'template' => array(
							array(
								'core/heading',
								array(
									'textAlign' => 'center',
								),
							),
							array(
								'xd/buttons',
								array(
									'layout' => array(
										'type' => 'flex',
										'justifyContent' => 'center',
									),
								),
							),
						),
					),
					array(
						'context' => array(
							'parent' => array(
								'xd/cta',
							),
							'parentVariation' => array(
								'xd/cta-list',
							),
						),
						'wrap' => array(
							'block' => '',
						),
						'allowedBlocks' => array(
							'core/list',
						),
						'template' => array(
							array(
								'core/list',
								array(
									'className' => 'is-style-standard-list-with-links',
								),
							),
						),
					),
				),
				'inspectorControls' => array(
					array(
						'panels' => array(
							array(
								'initialOpen' => true,
								'title' => 'Column Settings',
								'controls' => array(
									array(
										'activeState' => 'checked',
										'type' => 'ToggleControl',
										'attribute' => 'isEmpty',
										'label' => 'Empty column',
									),
								),
							),
						),
					),
				),
			),
		),
	),
	'columns' => array(
		'$schema' => '../../schema/block-schema.json',
		'apiVersion' => 2,
		'name' => 'xd/columns',
		'title' => 'Two Column',
		'description' => 'Two columns of content that wrap on mobile and tablet',
		'category' => 'standard',
		'icon' => 'gm/view-column-2',
		'viewStyle' => array(
			'block-styles/columns',
			'block-styles/quick-facts',
		),
		'editorStyle' => array(
			'block-styles/columns',
			'block-styles/quick-facts',
		),
		'keywords' => array(
			'columns',
			'content',
		),
		'attributes' => array(
			'columnsType' => array(
				'type' => 'string',
				'default' => 'two-column',
			),
			'quickFacts' => array(
				'type' => 'boolean',
				'default' => false,
				'innerBlocksClassName' => 'xd-quick-facts__columns',
			),
		),
		'variations' => array(
			array(
				'name' => 'xd/quick-facts',
				'title' => 'Quick Facts',
				'icon' => 'gm/pin',
				'description' => 'Three column quick facts.',
				'attributes' => array(
					'quickFacts' => true,
					'columnsType' => 'three-column',
				),
				'isActive' => array(
					'quickFacts',
					'columnsType',
				),
			),
			array(
				'scope' => array(
					'inserter',
					'transform',
				),
				'name' => 'xd/columns',
				'title' => 'Two Column',
				'category' => 'standard',
				'icon' => 'gm/view-column-2',
				'description' => 'Two columns of content that wrap on mobile and tablet',
				'attributes' => array(
					'columnsType' => 'two-column',
				),
				'isActive' => array(
					'columnsType',
				),
				'isDefault' => true,
			),
			array(
				'scope' => array(
					'inserter',
					'transform',
				),
				'name' => 'xd/three-column',
				'title' => 'Three Column',
				'description' => 'Three columns of content that wrap on mobile and tablet',
				'category' => 'standard',
				'icon' => 'gm/view-week',
				'attributes' => array(
					'columnsType' => 'three-column',
				),
				'isActive' => array(
					'columnsType',
				),
			),
			array(
				'scope' => array(
					'inserter',
					'transform',
				),
				'name' => 'xd/four-column',
				'title' => 'Four Column',
				'description' => 'Four columns of content that wrap on mobile and tablet',
				'category' => 'standard',
				'icon' => 'gm/calendar-view-week',
				'attributes' => array(
					'columnsType' => 'four-column',
				),
				'isActive' => array(
					'columnsType',
				),
			),
		),
		'supports' => array(
			'anchor' => true,
			'xd/padding' => true,
			'xd/padding-controls' => true,
			'xd/color-theme' => true,
			'xd/title' => true,
			'custom' => array(
				'register' => true,
				'innerBlocks' => array(
					array(
						'isDefault' => true,
						'wrap' => array(
							'block' => 'container xd-columns--two',
							'outer' => 'row',
							'preInnerBlocks' => 'col-10 col-md-8 col-lg-10 offset-1 offset-md-2 offset-lg-1',
							'innerBlocks' => 'xd-columns__columns xd-two-column__columns col-10 col-md-8 col-lg-10 offset-1 offset-md-2 offset-lg-1',
						),
						'allowedBlocks' => array(
							'xd/column',
						),
						'template' => array(
							array(
								'xd/column',
							),
							array(
								'xd/column',
							),
						),
						'templateLock' => false,
						'orientation' => 'horizontal',
					),
					array(
						'context' => array(
							'variation' => array(
								'xd/three-column',
								'xd/quick-facts',
							),
						),
						'wrap' => array(
							'block' => 'container xd-columns--three',
							'outer' => 'row',
							'preInnerBlocks' => 'col-10 col-md-8 col-lg-10 offset-1 offset-md-2 offset-lg-1',
							'innerBlocks' => 'xd-columns__columns xd-three-column__columns col-10 col-md-8 col-lg-10 offset-1 offset-md-2 offset-lg-1',
						),
						'allowedBlocks' => array(
							'xd/column',
						),
						'template' => array(
							array(
								'xd/column',
							),
							array(
								'xd/column',
							),
							array(
								'xd/column',
							),
						),
					),
					array(
						'context' => array(
							'variation' => array(
								'xd/four-column',
							),
						),
						'wrap' => array(
							'block' => 'container xd-columns--four',
							'outer' => 'row',
							'preInnerBlocks' => 'col-10 offset-1',
							'innerBlocks' => 'xd-columns__columns xd-four-column__columns col-10 offset-1',
						),
						'allowedBlocks' => array(
							'xd/column',
						),
						'template' => array(
							array(
								'xd/column',
							),
							array(
								'xd/column',
							),
							array(
								'xd/column',
							),
							array(
								'xd/column',
							),
						),
					),
				),
			),
		),
	),
	'container' => array(
		'$schema' => '../../schema/block-schema.json',
		'apiVersion' => 2,
		'name' => 'xd/container',
		'title' => 'Container',
		'description' => 'Container',
		'category' => 'standard',
		'icon' => 'gm/width-wide',
		'viewStyle' => array(
			'block-styles/container',
		),
		'editorStyle' => array(
			'block-styles/container',
		),
		'keywords' => array(
			'container',
			'layout',
		),
		'supports' => array(
			'anchor' => true,
			'xd/id' => true,
			'xd/padding' => true,
			'xd/padding-controls' => true,
			'xd/container-width' => true,
			'xd/color-theme' => true,
			'custom' => array(
				'register' => true,
				'innerBlocks' => array(
					array(
						'context' => array(
							'postType' => array(
								'flyout',
							),
						),
						'wrap' => array(
							'innerBlocks' => array(
								'remove' => 'col-10 col-md-8 col-xl-6 offset-1 offset-md-2 offset-xl-3',
								'add' => 'xd-container__inner',
							),
							'editorInnerBlocks' => 'col-6 offset-3',
						),
					),
					array(
						'context' => array(
							'postType' => array(
								'modal',
							),
						),
						'wrap' => array(
							'innerBlocks' => array(
								'remove' => 'col-10 col-md-8 col-xl-6 offset-1 offset-md-2 offset-xl-3',
								'add' => 'xd-container__inner',
							),
						),
					),
					array(
						'isDefault' => true,
						'wrap' => array(
							'block' => 'container',
							'outer' => 'row',
							'innerBlocks' => 'xd-container__inner',
						),
						'allowedBlocks' => array(
							'core/paragraph',
							'core/heading',
							'core/list',
							'core/quote',
							'core/cover',
							'xd/buttons',
							'core/separator',
							'xd/image',
							'xd/image-icon',
							'xd/video',
							'xd/accordion',
							'xd/form',
						),
						'template' => array(
							array(
								'core/paragraph',
							),
						),
					),
				),
				'modules' => array(
					array(
						'allowedModules' => array(
							'xd/id',
							'xd/color-theme',
							'xd/padding',
							'xd/padding-controls',
						),
						'context' => array(
							'postType' => array(
								'flyout',
								'modal',
							),
						),
					),
					array(
						'allowedModules' => true,
					),
				),
			),
		),
	),
	'content' => array(
		'$schema' => '../../schema/block-schema.json',
		'apiVersion' => 3,
		'name' => 'xd/content',
		'title' => 'Content',
		'description' => 'Content block for displaying text and media.',
		'category' => 'standard',
		'parent' => array(
			'xd/grid-cell',
		),
		'icon' => 'gm/newsmode',
		'keywords' => array(
			'content',
			'layout',
		),
		'viewStyle' => array(
			'block-styles/content',
		),
		'editorStyle' => array(
			'block-styles/content',
		),
		'supports' => array(
			'anchor' => true,
			'layout' => array(
				'allowSwitching' => false,
				'allowOrientation' => false,
				'allowInheriting' => true,
				'allowJustification' => false,
				'allowSizingOnChildren' => true,
				'allowVerticalAlignment' => true,
				'allowEditing' => true,
				'allowCustomContentAndWideSize' => false,
				'default' => array(
					'type' => 'flex',
					'orientation' => 'vertical',
				),
			),
			'xd/horizontal-align' => array(
				'context' => array(
					array(
						'when' => array(
							'parent' => array(
								'xd/grid-cell',
							),
							'ancestor' => array(
								'xd/grid-layout',
							),
						),
						'supports' => array(
							'left',
							'center',
							'right',
							'wide',
						),
					),
				),
			),
			'xd/height' => array(
				'px',
				'%',
				'auto',
				'stretch',
				'custom',
			),
			'spacing' => array(
				'padding' => true,
			),
			'xd/color-theme' => true,
			'custom' => array(
				'innerBlocks' => array(
					array(
						'wrap' => array(
							'innerBlocks' => 'xd-content__inner',
						),
						'allowedBlocks' => array(
							'core/paragraph',
							'core/heading',
							'core/list',
							'core/quote',
							'core/cover',
							'xd/buttons',
							'core/separator',
							'xd/image',
							'xd/image-icon',
							'xd/video',
							'xd/accordion',
							'xd/form',
						),
						'template' => array(
							array(
								'core/paragraph',
							),
						),
					),
				),
			),
		),
	),
	'cta' => array(
		'$schema' => '../../../../../themes/kicks/editor/schema/block-schema.json',
		'apiVersion' => 2,
		'name' => 'xd/cta',
		'title' => 'CTA',
		'description' => 'Call to action',
		'category' => 'standard',
		'viewStyle' => array(
			'block-styles/cta',
		),
		'editorStyle' => array(
			'block-styles/cta',
		),
		'icon' => 'gm/call-to-action',
		'keywords' => array(
			'call to action',
			'cta',
			'column',
		),
		'attributes' => array(
			'ctaType' => array(
				'type' => 'string',
				'default' => '',
				'className' => true,
			),
			'marginTop' => array(
				'type' => 'string',
				'default' => '',
			),
			'marginBottom' => array(
				'type' => 'string',
				'default' => '',
			),
		),
		'variations' => array(
			array(
				'name' => 'xd/cta-two-col',
				'title' => 'Two Column CTA',
				'icon' => 'gm/call-to-action',
				'description' => 'Two column call to action.',
				'attributes' => array(
					'ctaType' => 'xd-cta--two-column',
					'align' => 'center',
				),
				'isActive' => array(
					'ctaType',
				),
				'innerBlocks' => array(
					array(
						'xd/column',
					),
					array(
						'xd/column',
					),
				),
			),
			array(
				'name' => 'xd/poster',
				'title' => 'Poster',
				'icon' => 'gm/wallpaper',
				'description' => 'Poster',
				'attributes' => array(
					'ctaType' => 'xd-cta--poster',
					'align' => 'center',
				),
				'isActive' => array(
					'ctaType',
				),
				'innerBlocks' => array(
					array(
						'core/heading',
					),
				),
			),
		),
		'supports' => array(
			'xd/padding' => true,
			'xd/margin' => true,
			'xd/margin-controls' => true,
			'xd/image-background' => true,
			'xd/background-overlay' => true,
			'xd/video' => true,
			'xd/cta-alignment' => true,
			'custom' => array(
				'register' => true,
				'innerBlocks' => array(
					array(
						'context' => array(
							'variation' => array(
								'xd/cta-two-col',
							),
						),
						'wrap' => array(
							'block' => 'container',
							'inner' => '',
							'innerBlocks' => 'row',
						),
						'allowedBlocks' => array(
							'xd/column',
						),
						'templateLock' => 'insert',
						'orientation' => 'horizontal',
					),
					array(
						'context' => array(
							'variation' => array(
								'xd/poster',
							),
						),
						'wrap' => array(
							'block' => 'container',
							'outer' => 'row',
							'innerBlocks' => 'col-10 col-md-8 col-xl-6 offset-1 offset-md-2 offset-xl-3 xd-cta__inner',
						),
						'allowedBlocks' => array(
							'core/paragraph',
							'core/heading',
							'xd/buttons',
							'core/separator',
						),
						'template' => array(
							array(
								'core/heading',
							),
						),
						'templateLock' => 'all',
					),
					array(
						'context' => array(
							'variation' => array(
								'xd/testimonial-poster',
							),
						),
						'wrap' => array(
							'block' => 'container',
							'outer' => 'row',
							'innerBlocks' => 'col-10 col-xl-6 offset-1 offset-xl-1 xd-cta__inner',
						),
						'allowedBlocks' => array(
							'core/paragraph',
							'core/heading',
							'xd/buttons',
							'core/separator',
						),
						'template' => array(
							array(
								'core/heading',
								array(
									'level' => 3,
								),
							),
							array(
								'core/heading',
								array(
									'level' => 6,
								),
							),
						),
						'templateLock' => 'all',
					),
					array(
						'wrap' => array(
							'block' => 'container',
							'outer' => 'row',
							'innerBlocks' => 'col-10 col-md-8 col-xl-6 offset-1 offset-md-2 xd-cta__inner',
						),
						'allowedBlocks' => array(
							'core/paragraph',
							'core/heading',
							'xd/buttons',
							'core/separator',
						),
						'template' => array(
							array(
								'core/heading',
								array(
									'textAlign' => 'center',
								),
							),
							array(
								'xd/buttons',
								array(
									'layout' => array(
										'type' => 'flex',
										'justifyContent' => 'center',
									),
								),
							),
						),
						'templateLock' => false,
					),
				),
			),
		),
	),
	'example-block' => array(
		'$schema' => '../../../../../themes/kicks/editor/schema/block-schema.json',
		'apiVersion' => 2,
		'name' => 'xd/example-block',
		'title' => 'Example',
		'description' => 'Example',
		'category' => 'standard',
		'icon' => 'gm/sunny',
		'keywords' => array(
			'example',
		),
		'usesContext' => array(
			'postId',
			'postType',
			'queryId',
		),
		'supports' => array(
			'xd/example' => true,
			'xd/image-background' => true,
			'xd/image-mobile' => true,
			'xd/link' => true,
			'xd/color-theme' => true,
			'xd/background-overlay' => true,
			'xd/background-overlay-controls' => true,
			'xd/background-blend-mode-controls' => true,
			'xd/background-opacity-controls' => true,
			'custom' => array(
				'register' => true,
				'innerBlocks' => array(
					array(
						'wrap' => true,
						'allowedBlocks' => array(
							'core/paragraph',
						),
					),
				),
				'modules' => array(
					array(
						'context' => array(
							'postType' => array(
								'post',
							),
						),
						'allowedModules' => array(
							'xd/id',
							'xd/margin',
							'xd/margin-controls',
							'xd/padding',
							'xd/padding-controls',
						),
					),
					array(
						'context' => array(
							'postType' => array(
								'page',
							),
						),
						'allowedModules' => true,
					),
				),
			),
		),
	),
	'floorplan-accordion-element' => array(
		'apiVersion' => 2,
		'name' => 'xd/floorplan-accordion-element',
		'title' => 'Floorplan',
		'icon' => 'gm/photo-album',
		'description' => 'Floorplan',
		'category' => 'standard',
		'keywords' => array(
			'floorplan',
			'accordion',
		),
		'parent' => array(
			'xd/floorplan-accordion',
		),
		'attributes' => array(
			'postType' => array(
				'type' => 'string',
				'default' => 'floorplan',
			),
			'postId' => array(
				'type' => 'integer',
				'default' => 0,
			),
		),
		'supports' => array(
			'custom' => array(
				'register' => true,
				'innerBlocks' => array(
					array(
						'serverSideRender' => true,
						'allowedBlocks' => array(
						),
					),
				),
				'blockControls' => array(
					array(
						'controls' => array(
							array(
								'id' => 'remove-button',
								'type' => 'XDPostCardControls',
							),
						),
					),
				),
			),
		),
	),
	'floorplan-accordion' => array(
		'apiVersion' => 2,
		'attributes' => array(
			'postType' => array(
				'type' => 'string',
				'default' => 'floorplan',
			),
			'postCard' => array(
				'type' => 'integer',
				'default' => 0,
			),
		),
		'name' => 'xd/floorplan-accordion',
		'title' => 'Floorplan Accordion',
		'icon' => 'admin-home',
		'viewStyle' => array(
			'block-styles/accordion',
			'block-styles/floorplan-accordion',
			'block-styles/lists',
		),
		'editorStyle' => array(
			'block-styles/accordion',
			'block-styles/floorplan-accordion',
			'block-styles/lists',
		),
		'description' => 'Insert an accordion with floorplan details',
		'category' => 'standard',
		'keywords' => array(
			'accordion',
		),
		'supports' => array(
			'xd/title' => true,
			'xd/margin' => true,
			'xd/margin-controls' => true,
			'custom' => array(
				'register' => true,
				'innerBlocks' => array(
					array(
						'context' => array(
							'attributes' => array(
								'postType' => 'floorplan',
							),
						),
						'wrap' => array(
							'block' => 'xd-accordion container',
							'inner' => 'row',
							'innerBlocks' => 'col-10 offset-1',
						),
						'allowedBlocks' => array(
						),
						'renderAppender' => false,
					),
				),
				'inspectorControls' => array(
					array(
						'panels' => array(
							array(
								'title' => 'Floorplan Selection',
								'initialOpen' => true,
								'controls' => array(
									array(
										'type' => 'XDPostSelectControl',
										'blockType' => 'xd/floorplan-accordion-element',
									),
								),
							),
						),
					),
				),
			),
		),
	),
	'floorplan-details' => array(
		'apiVersion' => 2,
		'name' => 'xd/floorplan-details',
		'title' => 'Floorplan Details',
		'icon' => 'gm/photo-album',
		'description' => 'Floorplan Details',
		'category' => 'standard',
		'attributes' => array(
			'floorPlate' => array(
				'//' => 'deprecated attribute, use floorPlates instead',
				'type' => 'object',
				'default' => array(
				),
			),
			'floorPlates' => array(
				'type' => 'array',
				'default' => array(
				),
			),
			'units' => array(
				'type' => 'array',
				'default' => array(
					array(
						'sold' => false,
					),
				),
			),
			'floorPlans' => array(
				'type' => 'array',
				'default' => array(
				),
			),
		),
		'supports' => array(
			'multiple' => false,
			'custom' => array(
				'register' => true,
				'innerBlocks' => array(
					array(
						'allowedBlocks' => array(
						),
					),
				),
				'preInnerBlocksControls' => array(
					array(
						'controls' => array(
							array(
								'attribute' => 'units',
								'type' => 'XDRepeaterField',
								'addButtonLabel' => 'Add unit',
								'label' => 'Units',
								'fields' => array(
									array(
										'attribute' => 'unit',
										'label' => 'Unit',
										'type' => 'TextControl',
										'schema' => array(
											'type' => 'number',
										),
									),
									array(
										'attribute' => 'sold',
										'type' => 'ToggleControl',
										'label' => 'Sold',
										'default' => false,
										'activeState' => 'checked',
										'schema' => array(
											'type' => 'boolean',
										),
									),
								),
							),
							array(
								'attribute' => 'floorPlates',
								'type' => 'XDGalleryPreview',
								'label' => 'Floor plates preview',
							),
							array(
								'attribute' => 'floorPlates',
								'type' => 'XDImageControl',
								'label' => 'Floor plates',
								'gallery' => true,
							),
							array(
								'attribute' => 'floorPlans',
								'type' => 'XDGalleryPreview',
								'label' => 'Floor plans preview',
							),
							array(
								'attribute' => 'floorPlans',
								'type' => 'XDImageControl',
								'label' => 'Floor plans',
								'gallery' => true,
								'className' => 'floorplans',
							),
						),
					),
				),
			),
		),
	),
	'form' => array(
		'$schema' => '../../schema/block-schema.json',
		'apiVersion' => 2,
		'name' => 'xd/form',
		'title' => 'Form',
		'description' => 'Add a Gravity Form to your page.',
		'category' => 'standard',
		'icon' => 'gm/check-box',
		'keywords' => array(
			'form',
			'gravity',
			'forms',
		),
		'attributes' => array(
			'lazyLoad' => array(
				'type' => 'boolean',
				'default' => true,
			),
			'formId' => array(
				'type' => 'integer',
				'default' => 0,
			),
			'showTitle' => array(
				'type' => 'boolean',
				'default' => true,
			),
			'showDescription' => array(
				'type' => 'boolean',
				'default' => true,
			),
		),
		'supports' => array(
			'custom' => array(
				'register' => true,
				'innerBlocks' => array(
					array(
						'wrap' => array(
							'block' => 'xd-width-inline',
						),
						'allowedBlocks' => array(
						),
						'template' => array(
						),
						'templateLock' => 'all',
						'renderAppender' => false,
					),
				),
				'inspectorControls' => array(
					array(
						'panels' => array(
							array(
								'initialOpen' => true,
								'title' => 'Form Settings',
								'controls' => array(
									array(
										'attribute' => 'formId',
										'label' => 'Select Form',
										'placeholder' => 'Search for a form',
										'type' => 'XDFormSelectControl',
									),
									array(
										'label' => 'Show Title',
										'type' => 'ToggleControl',
										'attribute' => 'showTitle',
										'activeState' => 'checked',
										'help' => 'Show the form title above the form.',
									),
									array(
										'label' => 'Show Description',
										'type' => 'ToggleControl',
										'attribute' => 'showDescription',
										'activeState' => 'checked',
										'help' => 'Show the form description above the form.',
									),
									array(
										'label' => 'Lazy Load',
										'type' => 'ToggleControl',
										'attribute' => 'lazyLoad',
										'activeState' => 'checked',
										'help' => 'Enable lazy loading for this form. This will improve page load times by only loading the form when it is in view. Some form features may not work with lazy loading enabled.',
									),
								),
							),
						),
					),
				),
				'preInnerBlocksControls' => array(
					array(
						'controls' => array(
							array(
								'attribute' => 'formId',
								'label' => 'Select Form',
								'placeholder' => 'Search for a form',
								'type' => 'XDFormSelectControl',
							),
						),
					),
				),
			),
		),
	),
	'grid-cell' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'xd/grid-cell',
		'title' => 'Grid Cell',
		'category' => 'layout',
		'icon' => 'gm/select',
		'description' => 'A resizable, responsive cell within a 24-column grid.',
		'parent' => array(
			'xd/grid-layout',
		),
		'supports' => array(
			'custom' => array(
				'innerBlocks' => array(
					array(
						'orientation' => 'vertical',
						'allowedBlocks' => array(
							'xd/content',
						),
						'template' => array(
							array(
								'xd/content',
							),
						),
						'templateLock' => false,
					),
				),
			),
			'spacing' => array(
				'padding' => true,
			),
			'html' => false,
			'xd/color-theme' => false,
			'layout' => array(
				'allowSwitching' => false,
				'allowOrientation' => false,
				'allowInheriting' => false,
				'allowJustification' => false,
				'allowSizingOnChildren' => true,
				'allowVerticalAlignment' => true,
				'allowEditing' => true,
				'allowCustomContentAndWideSize' => false,
				'default' => array(
					'type' => 'flex',
					'orientation' => 'vertical',
				),
			),
		),
		'attributes' => array(
			'colStart' => array(
				'type' => 'object',
				'default' => array(
					'desktop' => 1,
					'tablet' => 1,
					'mobile' => 1,
				),
			),
			'colSpan' => array(
				'type' => 'object',
				'default' => array(
					'desktop' => 6,
					'tablet' => 12,
					'mobile' => 24,
				),
			),
			'rowStart' => array(
				'type' => 'object',
				'default' => array(
					'desktop' => 1,
					'tablet' => 1,
					'mobile' => 1,
				),
			),
			'rowSpan' => array(
				'type' => 'object',
				'default' => array(
					'desktop' => 1,
					'tablet' => 1,
					'mobile' => 1,
				),
			),
			'gutters' => array(
				'type' => 'object',
				'default' => array(
					'top' => 'full',
					'right' => 'full',
					'bottom' => 'full',
					'left' => 'full',
				),
			),
		),
		'usesContext' => array(
			'xd/grid:previewMode',
			'xd/grid:rows',
			'xd/grid:itemsPerRow',
		),
	),
	'grid-layout' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'xd/grid-layout',
		'title' => 'Grid Layout',
		'category' => 'layout',
		'icon' => 'gm/view-quilt',
		'description' => 'A responsive 24-column grid layout block.',
		'supports' => array(
			'html' => false,
			'xd/padding' => true,
			'xd/padding-controls-all' => true,
			'xd/color-theme' => true,
		),
		'attributes' => array(
			'previewMode' => array(
				'type' => 'string',
				'default' => 'desktop',
			),
			'previewSyncOption' => array(
				'type' => 'string',
				'default' => 'local',
			),
			'rows' => array(
				'type' => 'object',
				'default' => array(
					'desktop' => 1,
					'tablet' => 1,
					'mobile' => 1,
				),
			),
			'rowHeights' => array(
				'type' => 'object',
				'default' => array(
					'desktop' => array(
						'auto',
					),
					'tablet' => array(
						'auto',
					),
					'mobile' => array(
						'auto',
					),
				),
			),
			'hasModal' => array(
				'type' => 'boolean',
				'default' => false,
			),
			'fullWidth' => array(
				'type' => 'boolean',
				'default' => false,
			),
		),
		'providesContext' => array(
			'xd/grid:previewMode' => 'previewMode',
			'xd/grid:rows' => 'rows',
		),
		'editorStyle' => array(
			'block-styles/grid-layout',
		),
		'viewStyle' => array(
			'block-styles/grid-layout',
		),
	),
	'image-gallery' => array(
		'$schema' => '../../schema/block-schema.json',
		'name' => 'xd/image-gallery',
		'apiVersion' => 2,
		'title' => 'Image Gallery',
		'category' => 'standard',
		'description' => 'Gallery.',
		'keywords' => array(
			'gallery',
		),
		'icon' => 'gm/gallery-thumbnail',
		'viewStyle' => array(
			'block-styles/image-gallery',
		),
		'editorStyle' => array(
			'block-styles/image-gallery',
		),
		'attributes' => array(
			'hasModal' => array(
				'type' => 'boolean',
				'default' => false,
			),
			'galleryLayout' => array(
				'type' => 'string',
				'default' => '4',
				'className' => array(
					1 => 'xd-image-gallery--1',
					'1l' => 'xd-image-gallery--columns xd-image-gallery--columns-11 xd-image-gallery--1 xd-image-gallery--columns-left',
					'1r' => 'xd-image-gallery--columns xd-image-gallery--columns-11 xd-image-gallery--1 xd-image-gallery--columns-right',
					4 => 'xd-image-gallery--4',
					'5l' => 'xd-image-gallery--5 xd-image-gallery--left',
					'5c' => 'xd-image-gallery--5 xd-image-gallery--center',
					'5r' => 'xd-image-gallery--5 xd-image-gallery--right',
					8 => ' xd-image-gallery--8',
				),
			),
			'paddingTop' => array(
				'type' => 'string',
				'default' => 'xd-pt--xs',
				'className' => true,
			),
			'paddingBottom' => array(
				'type' => 'string',
				'default' => 'xd-pb--xs',
				'className' => true,
			),
		),
		'supports' => array(
			'xd/id' => true,
			'xd/color-theme' => true,
			'xd/padding-controls-tiny' => true,
			'custom' => array(
				'register' => true,
				'innerBlocks' => array(
					array(
						'allowedBlocks' => array(
							'xd/image',
						),
						'template' => array(
						),
						'orientation' => 'horizontal',
						'templateLock' => false,
						'renderAppender' => false,
						'wrap' => array(
							'block' => 'container',
							'editorPostInnerBlocks' => 'xd-image-gallery__inserter',
						),
					),
				),
				'inspectorControls' => array(
					array(
						'panels' => array(
							array(
								'title' => 'Gallery Layout',
								'initialOpen' => true,
								'controls' => array(
									array(
										'attribute' => 'galleryLayout',
										'type' => 'XDButtonGroup',
										'gridColumns' => 4,
										'options' => array(
											array(
												'icon' => 'xd/full-width-image-stacked-gallery',
												'label' => 'Stacked Image',
												'value' => '1',
											),
											array(
												'icon' => 'xd/stacked-gallery-left',
												'label' => 'Stacked Image Left',
												'value' => '1l',
											),
											array(
												'icon' => 'xd/stacked-gallery-right',
												'label' => 'Stacked Image Right',
												'value' => '1r',
											),
											array(
												'icon' => 'xd/four-image-gallery',
												'label' => 'Four Image',
												'value' => '4',
											),
											array(
												'icon' => 'xd/five-image-left-gallery',
												'label' => 'Five Image Left',
												'value' => '5l',
											),
											array(
												'icon' => 'xd/five-image-center-gallery',
												'label' => 'Five Image Center',
												'value' => '5c',
											),
											array(
												'icon' => 'xd/five-image-right-gallery',
												'label' => 'Five Image Right',
												'value' => '5r',
											),
											array(
												'icon' => 'xd/eight-image-gallery',
												'label' => 'Eight Image',
												'value' => '8',
											),
										),
									),
								),
							),
							array(
								'initialOpen' => true,
								'title' => 'Gallery',
								'controls' => array(
									array(
										'type' => 'XDGalleryControl',
										'id' => 'gallery-control',
									),
									array(
										'activeState' => 'checked',
										'type' => 'ToggleControl',
										'attribute' => 'hasModal',
										'label' => 'Images open in modal widow',
									),
								),
							),
						),
					),
				),
				'postInnerBlocksControls' => array(
					array(
						'controls' => array(
							array(
								'type' => 'XDGallery',
								'id' => 'gallery',
							),
						),
					),
				),
			),
		),
	),
	'image-icon' => array(
		'$schema' => '../../schema/block-schema.json',
		'name' => 'xd/image-icon',
		'apiVersion' => 2,
		'title' => 'Icon',
		'category' => 'standard',
		'description' => 'Insert an icon to make a visual statement.',
		'keywords' => array(
			'image',
			'icon',
		),
		'icon' => 'gm/eco',
		'attributes' => array(
			'imageDesktop' => array(
				'type' => 'object',
				'default' => array(
					'id' => '',
					'url' => '',
				),
			),
		),
		'supports' => array(
			'xd/image-align' => true,
			'custom' => array(
				'innerBlocks' => array(
					array(
						'wrap' => array(
							'block' => 'xd-image xd-image--icon',
						),
					),
				),
				'inspectorControls' => array(
					array(
						'panels' => array(
							array(
								'title' => 'Icon',
								'initialOpen' => true,
								'controls' => array(
									array(
										'allowedTypes' => array(
											'image/svg+xml',
										),
										'label' => 'Icon',
										'type' => 'XDImageControl',
										'className' => 'xd-image-icon',
										'attribute' => 'imageDesktop',
									),
								),
							),
						),
					),
				),
			),
		),
	),
	'image-slider' => array(
		'$schema' => '../../schema/block-schema.json',
		'apiVersion' => 2,
		'title' => 'Image Slider',
		'name' => 'xd/image-slider',
		'icon' => 'gm/filter',
		'viewStyle' => array(
			'block-styles/image-slider',
		),
		'editorStyle' => array(
			'block-styles/image-slider',
		),
		'category' => 'standard',
		'description' => 'Image Slider',
		'keywords' => array(
			'Image Slider',
		),
		'supports' => array(
			'custom' => array(
				'register' => true,
				'innerBlocks' => array(
					array(
						'allowedBlocks' => array(
							'xd/image',
						),
						'template' => array(
						),
						'orientation' => 'horizontal',
						'templateLock' => false,
						'renderAppender' => false,
						'isDefault' => true,
						'wrap' => array(
							'editorPostInnerBlocks' => 'xd-image-slider__inserter',
						),
					),
				),
				'inspectorControls' => array(
					array(
						'panels' => array(
							array(
								'initialOpen' => true,
								'title' => 'Slider',
								'controls' => array(
									array(
										'type' => 'XDGalleryControl',
										'id' => 'gallery-control',
									),
								),
							),
						),
					),
				),
				'postInnerBlocksControls' => array(
					array(
						'controls' => array(
							array(
								'type' => 'XDGallery',
								'id' => 'gallery',
							),
						),
					),
				),
			),
		),
	),
	'image' => array(
		'$schema' => '../../schema/block-schema.json',
		'name' => 'xd/image',
		'apiVersion' => 2,
		'title' => 'Image',
		'category' => 'standard',
		'description' => 'Insert an image to make a visual statement.',
		'keywords' => array(
			'image',
			'picture',
		),
		'icon' => 'gm/image',
		'supports' => array(
			'xd/id' => true,
			'xd/link' => true,
			'xd/image-mobile' => true,
			'xd/image-desktop' => true,
			'xd/video' => true,
			'xd/video-modal' => true,
			'xd/image-align' => true,
			'xd/image-width' => true,
			'custom' => array(
				'innerBlocks' => array(
					array(
						'context' => array(
							'parent' => array(
								'xd/image-gallery',
								'xd/image-slider',
							),
						),
						'wrap' => array(
							'block' => 'xd-image--cover',
						),
					),
					array(
						'context' => array(
						),
					),
				),
				'modules' => array(
					array(
						'context' => array(
							'parent' => array(
								'xd/image-gallery',
								'xd/image-slider',
							),
						),
						'allowedModules' => array(
							'xd/video',
							'xd/video-modal',
						),
					),
					array(
						'context' => array(
							'parent' => array(
								'xd/logo-grid',
							),
						),
						'allowedModules' => array(
							'xd/link',
							'xd/image-desktop',
						),
					),
					array(
						'context' => array(
							'parent' => array(
								'xd/container',
								'xd/column',
								'xd/two-tile',
								'xd/card',
							),
						),
						'allowedModules' => array(
							'xd/link',
							'xd/image-mobile',
							'xd/image-desktop',
							'xd/image-align',
							'xd/image-width',
						),
					),
					array(
						'context' => array(
						),
						'allowedModules' => array(
							'xd/link',
							'xd/video',
							'xd/image-mobile',
							'xd/image-desktop',
							'xd/image-align',
							'xd/image-width',
						),
					),
				),
			),
		),
	),
	'logo-grid' => array(
		'$schema' => '../../schema/block-schema.json',
		'apiVersion' => 2,
		'name' => 'xd/logo-grid',
		'title' => 'Logo Grid',
		'description' => 'Add a collection of sponsors or awards to your page',
		'category' => 'standard',
		'icon' => 'gm/calendar-view-month',
		'viewStyle' => array(
			'block-styles/logo-grid',
		),
		'editorStyle' => array(
			'block-styles/logo-grid',
		),
		'keywords' => array(
			'logo',
			'grid',
		),
		'supports' => array(
			'xd/margin' => true,
			'xd/margin-controls' => true,
			'xd/title' => true,
			'custom' => array(
				'register' => true,
				'innerBlocks' => array(
					array(
						'wrap' => array(
							'block' => 'container',
							'outer' => 'row',
							'preInnerBlocks' => 'col-10 offset-1',
							'innerBlocks' => 'col-10 offset-1 xd-logo-grid__content',
						),
						'allowedBlocks' => array(
							'xd/image',
						),
						'template' => array(
							array(
								'xd/image',
							),
							array(
								'xd/image',
							),
							array(
								'xd/image',
							),
						),
						'orientation' => 'horizontal',
					),
				),
				'inspectorControls' => array(
					array(
						'panels' => array(
							array(
								'initialOpen' => true,
								'title' => 'Gallery',
								'controls' => array(
									array(
										'type' => 'XDGalleryControl',
										'id' => 'gallery-control',
									),
								),
							),
						),
					),
				),
			),
		),
	),
	'menu-item' => array(
		'apiVersion' => 2,
		'name' => 'xd/menu-item',
		'title' => 'Menu Item',
		'icon' => 'gm/photo-album',
		'description' => 'Menu item',
		'category' => 'standard',
		'keywords' => array(
			'menu',
			'item',
		),
		'parent' => array(
			'xd/tab-section',
		),
		'attributes' => array(
			'itemName' => array(
				'type' => 'string',
				'default' => '',
			),
			'price' => array(
				'type' => 'string',
				'default' => '',
			),
		),
		'supports' => array(
			'custom' => array(
				'register' => true,
				'innerBlocks' => array(
					array(
						'template' => array(
							array(
								'core/paragraph',
							),
						),
						'templateLock' => false,
					),
				),
				'preInnerBlocksControls' => array(
					array(
						'controls' => array(
							array(
								'attribute' => 'itemName',
								'autoComplete' => 'off',
								'type' => 'RichText',
								'tagName' => 'p',
								'identifier' => 'item',
								'placeholder' => 'Item Name',
								'className' => 'xd-menu-item__name',
							),
							array(
								'attribute' => 'price',
								'autoComplete' => 'off',
								'type' => 'RichText',
								'tagName' => 'p',
								'identifier' => 'price',
								'placeholder' => 'Price',
								'className' => 'xd-menu-item__price',
							),
						),
					),
				),
			),
		),
	),
	'post-card' => array(
		'$schema' => '../../schema/block-schema.json',
		'apiVersion' => 2,
		'name' => 'xd/post-card',
		'title' => 'Post Card',
		'icon' => 'gm/photo-album',
		'viewStyle' => array(
			'block-styles/post-card',
		),
		'editorStyle' => array(
			'block-styles/post-card',
		),
		'description' => 'Post card',
		'category' => 'standard',
		'keywords' => array(
			'post',
			'card',
		),
		'parent' => array(
			'xd/post-cards',
		),
		'attributes' => array(
			'postType' => array(
				'type' => 'string',
				'default' => 'post',
			),
			'postId' => array(
				'type' => 'integer',
				'default' => 0,
			),
		),
		'variations' => array(
			array(
				'icon' => 'gm/photo-album',
				'name' => 'xd/page-card',
				'title' => 'Page Card',
				'isActive' => array(
					'postType',
				),
				'attributes' => array(
					'postType' => 'page',
				),
			),
			array(
				'icon' => 'gm/photo-album',
				'name' => 'xd/post-card',
				'title' => 'Post Card',
				'isDefault' => true,
				'isActive' => array(
					'postType',
				),
				'attributes' => array(
					'postType' => 'post',
				),
			),
		),
		'supports' => array(
			'custom' => array(
				'register' => true,
				'innerBlocks' => array(
					array(
						'context' => array(
							'variation' => array(
								'xd/page-card',
							),
						),
						'wrap' => array(
							'block' => 'col-12 col-lg-4 xd-post-card xd-post-card--page',
							'serverSideRenderBlock' => 'xd-post-card xd-post-card--page',
						),
						'serverSideRender' => true,
						'allowedBlocks' => array(
						),
					),
					array(
						'context' => array(
							'variation' => array(
								'xd/post-card',
							),
						),
						'wrap' => array(
							'block' => 'col-12 col-md-6 col-xl-4 xd-post-card--post',
							'serverSideRenderBlock' => 'xd-post-card ',
						),
						'serverSideRender' => true,
						'allowedBlocks' => array(
						),
					),
				),
				'blockControls' => array(
					array(
						'controls' => array(
							array(
								'id' => 'remove-button',
								'type' => 'XDPostCardControls',
							),
						),
					),
				),
			),
		),
	),
	'post-cards' => array(
		'$schema' => '../../schema/block-schema.json',
		'apiVersion' => 2,
		'attributes' => array(
			'postType' => array(
				'type' => 'string',
				'default' => 'post',
			),
			'slider' => array(
				'type' => 'boolean',
				'default' => false,
			),
			'postCard' => array(
				'type' => 'integer',
				'default' => 0,
			),
			'paddingTop' => array(
				'type' => 'string',
				'default' => 'xd-pt--xs',
				'className' => true,
			),
			'paddingBottom' => array(
				'type' => 'string',
				'default' => 'xd-pb--xs',
				'className' => true,
			),
		),
		'name' => 'xd/post-cards',
		'title' => 'Post Cards',
		'icon' => 'admin-post',
		'viewStyle' => array(
			'block-styles/post-cards',
		),
		'editorStyle' => array(
			'block-styles/post-cards',
		),
		'description' => 'Insert a collection of cards linking to your blog posts',
		'category' => 'standard',
		'keywords' => array(
			'card',
			'cards',
		),
		'variations' => array(
			array(
				'name' => 'xd/post-cards',
				'title' => 'Post Cards',
				'icon' => 'admin-post',
				'description' => 'Insert a collection of cards linking to your posts',
				'isActive' => array(
					'postType',
				),
				'attributes' => array(
					'postType' => 'post',
				),
				'isDefault' => true,
			),
			array(
				'name' => 'xd/page-cards',
				'title' => 'Page Cards',
				'icon' => 'gm/collections-bookmark',
				'description' => 'Insert a collection of cards linking to your pages',
				'isActive' => array(
					'postType',
				),
				'attributes' => array(
					'postType' => 'page',
				),
			),
		),
		'supports' => array(
			'xd/title' => true,
			'xd/padding-controls-all' => true,
			'custom' => array(
				'register' => true,
				'innerBlocks' => array(
					array(
						'context' => array(
							'attributes' => array(
								'postType' => 'post',
							),
						),
						'wrap' => array(
							'block' => 'container xd-post-cards--posts',
							'innerBlocks' => 'row',
						),
						'allowedBlocks' => array(
						),
						'orientation' => 'horizontal',
						'renderAppender' => false,
					),
					array(
						'context' => array(
							'attributes' => array(
								'postType' => 'page',
							),
						),
						'wrap' => array(
							'block' => 'container xd-post-cards--pages',
							'innerBlocks' => 'row',
						),
						'allowedBlocks' => array(
						),
						'orientation' => 'horizontal',
						'renderAppender' => false,
					),
					array(
						'context' => array(
							'attributes' => array(
								'slider' => true,
							),
						),
						'wrap' => array(
							'block' => 'container xd-post-cards--slider',
							'editorInnerBlocks' => 'row',
						),
						'allowedBlocks' => array(
						),
						'orientation' => 'horizontal',
						'renderAppender' => false,
					),
				),
				'inspectorControls' => array(
					array(
						'context' => array(
							'variation' => array(
								'xd/post-cards',
								'xd/page-cards',
							),
						),
						'panels' => array(
							array(
								'title' => 'Display',
								'initialOpen' => true,
								'controls' => array(
									array(
										'attribute' => 'slider',
										'type' => 'XDRadioButtonGroup',
										'label' => 'Display mode',
										'options' => array(
											array(
												'label' => 'Grid',
												'value' => false,
											),
											array(
												'label' => 'Slider',
												'value' => true,
											),
										),
									),
								),
							),
							array(
								'title' => 'Card Selection',
								'initialOpen' => true,
								'controls' => array(
									array(
										'type' => 'XDPostSelectControl',
										'blockType' => 'xd/post-card',
									),
								),
							),
						),
					),
					array(
						'context' => array(
						),
					),
				),
			),
		),
	),
	'project-card' => array(
		'apiVersion' => 2,
		'name' => 'xd/project-card',
		'title' => 'Project Card',
		'icon' => 'portfolio',
		'description' => 'Project Card',
		'category' => 'standard',
		'viewStyle' => array(
			'block-styles/post-card',
			'block-styles/project-card',
			'block-styles/lists',
		),
		'editorStyle' => array(
			'block-styles/post-card',
			'block-styles/project-card',
			'block-styles/lists',
		),
		'keywords' => array(
			'project',
			'card',
		),
		'parent' => array(
			'xd/project-cards',
		),
		'attributes' => array(
			'postType' => array(
				'type' => 'string',
				'default' => 'project',
			),
			'postId' => array(
				'type' => 'integer',
				'default' => 0,
			),
		),
		'supports' => array(
			'custom' => array(
				'register' => true,
				'innerBlocks' => array(
					array(
						'wrap' => array(
							'block' => 'col-12 col-12 col-md-6 col-xl-4 xd-post-card xd-post-card--project',
							'serverSideRenderBlock' => 'xd-post-card',
						),
						'serverSideRender' => true,
						'allowedBlocks' => array(
						),
					),
				),
				'blockControls' => array(
					array(
						'controls' => array(
							array(
								'id' => 'remove-button',
								'type' => 'XDPostCardControls',
							),
						),
					),
				),
			),
		),
	),
	'project-cards' => array(
		'apiVersion' => 2,
		'attributes' => array(
			'postType' => array(
				'type' => 'string',
				'default' => 'project',
			),
			'slider' => array(
				'type' => 'boolean',
				'default' => false,
			),
			'postCard' => array(
				'type' => 'integer',
				'default' => 0,
			),
		),
		'name' => 'xd/project-cards',
		'title' => 'Project Cards',
		'icon' => 'portfolio',
		'viewStyle' => array(
			'block-styles/post-cards',
		),
		'editorStyle' => array(
			'block-styles/post-cards',
		),
		'description' => 'Insert a collection of cards linking to your projects',
		'category' => 'standard',
		'keywords' => array(
			'card',
			'cards',
		),
		'supports' => array(
			'xd/title' => true,
			'xd/margin' => true,
			'xd/margin-controls' => true,
			'custom' => array(
				'register' => true,
				'innerBlocks' => array(
					array(
						'context' => array(
							'attributes' => array(
								'postType' => 'project',
							),
						),
						'wrap' => array(
							'block' => 'container xd-project-cards xd-post-cards xd-post-cards--posts xd-post-cards--projects',
							'innerBlocks' => 'row',
						),
						'allowedBlocks' => array(
						),
						'orientation' => 'horizontal',
						'renderAppender' => false,
					),
					array(
						'context' => array(
							'attributes' => array(
								'slider' => true,
							),
						),
						'wrap' => array(
							'block' => 'container xd-project-cards xd-post-cards--slider',
							'editorInnerBlocks' => 'row',
						),
						'allowedBlocks' => array(
						),
						'orientation' => 'horizontal',
						'renderAppender' => false,
					),
				),
				'inspectorControls' => array(
					array(
						'panels' => array(
							array(
								'title' => 'Display',
								'initialOpen' => true,
								'controls' => array(
									array(
										'attribute' => 'slider',
										'type' => 'XDRadioButtonGroup',
										'label' => 'Display mode',
										'options' => array(
											array(
												'label' => 'Grid',
												'value' => false,
											),
											array(
												'label' => 'Slider',
												'value' => true,
											),
										),
									),
								),
							),
							array(
								'title' => 'Project Selection',
								'initialOpen' => true,
								'controls' => array(
									array(
										'type' => 'XDPostSelectControl',
										'blockType' => 'xd/project-card',
									),
								),
							),
						),
					),
				),
			),
		),
	),
	'promotion-card' => array(
		'apiVersion' => 2,
		'name' => 'xd/promotion-card',
		'title' => 'Promotion Card',
		'icon' => 'gm/photo-album',
		'description' => 'Promotion card',
		'category' => 'standard',
		'viewStyle' => array(
			'block-styles/post-card',
		),
		'editorStyle' => array(
			'block-styles/post-card',
		),
		'keywords' => array(
			'promotion',
			'card',
		),
		'parent' => array(
			'xd/promotion-cards',
		),
		'attributes' => array(
			'postType' => array(
				'type' => 'string',
				'default' => 'post',
			),
			'postId' => array(
				'type' => 'integer',
				'default' => 0,
			),
		),
		'supports' => array(
			'custom' => array(
				'register' => true,
				'innerBlocks' => array(
					array(
						'wrap' => array(
							'block' => 'col-12 col-md-6 col-xl-4 xd-post-card xd-post-card--promotion',
							'serverSideRenderBlock' => 'xd-post-card',
						),
						'serverSideRender' => true,
						'allowedBlocks' => array(
						),
					),
				),
				'blockControls' => array(
					array(
						'controls' => array(
							array(
								'id' => 'remove-button',
								'type' => 'XDPostCardControls',
							),
						),
					),
				),
			),
		),
	),
	'promotion-cards' => array(
		'apiVersion' => 2,
		'attributes' => array(
			'postType' => array(
				'type' => 'string',
				'default' => 'promotion',
			),
			'slider' => array(
				'type' => 'boolean',
				'default' => false,
			),
			'postCard' => array(
				'type' => 'integer',
				'default' => 0,
			),
			'readMore' => array(
				'type' => 'object',
				'default' => array(
				),
			),
			'paddingTop' => array(
				'type' => 'string',
				'default' => 'xd-pt--xs',
				'className' => true,
			),
			'paddingBottom' => array(
				'type' => 'string',
				'default' => 'xd-pb--xs',
				'className' => true,
			),
		),
		'name' => 'xd/promotion-cards',
		'title' => 'Promotion Cards',
		'icon' => 'admin-post',
		'viewStyle' => array(
			'block-styles/post-cards',
			'block-styles/promotion-cards',
		),
		'editorStyle' => array(
			'block-styles/post-cards',
			'block-styles/promotion-cards',
		),
		'description' => 'Insert a collection of cards linking to your promotions',
		'category' => 'standard',
		'keywords' => array(
			'card',
			'cards',
		),
		'supports' => array(
			'xd/title' => true,
			'xd/padding-controls-all' => true,
			'xd/color-theme' => true,
			'custom' => array(
				'register' => true,
				'innerBlocks' => array(
					array(
						'context' => array(
							'attributes' => array(
								'postType' => 'promotion',
							),
						),
						'wrap' => array(
							'block' => 'container xd-post-cards xd-post-cards--promotions',
							'innerBlocks' => 'row',
						),
						'allowedBlocks' => array(
						),
						'orientation' => 'horizontal',
						'renderAppender' => false,
					),
					array(
						'context' => array(
							'attributes' => array(
								'slider' => true,
							),
						),
						'wrap' => array(
							'block' => 'container xd-post-cards xd-post-cards--slider',
							'editorInnerBlocks' => 'row',
						),
						'allowedBlocks' => array(
						),
						'orientation' => 'horizontal',
						'renderAppender' => false,
					),
				),
				'inspectorControls' => array(
					array(
						'panels' => array(
							array(
								'title' => 'Display',
								'initialOpen' => true,
								'controls' => array(
									array(
										'attribute' => 'slider',
										'type' => 'XDRadioButtonGroup',
										'label' => 'Display mode',
										'options' => array(
											array(
												'label' => 'Grid',
												'value' => false,
											),
											array(
												'label' => 'Slider',
												'value' => true,
											),
										),
									),
								),
							),
							array(
								'title' => 'Card Selection',
								'initialOpen' => true,
								'controls' => array(
									array(
										'type' => 'XDPostSelectControl',
										'blockType' => 'xd/promotion-card',
									),
								),
							),
							array(
								'title' => 'Read More',
								'initialOpen' => true,
								'controls' => array(
									array(
										'attribute' => 'readMore',
										'type' => 'XDLinkControl',
										'label' => 'Button',
									),
								),
							),
						),
					),
				),
			),
		),
	),
	'tab-section' => array(
		'apiVersion' => 2,
		'name' => 'xd/tab-section',
		'title' => 'Tabbed Section',
		'icon' => 'gm/photo-album',
		'description' => 'Tabbed section',
		'category' => 'standard',
		'keywords' => array(
			'tab',
			'section',
		),
		'parent' => array(
			'xd/tabbed-block',
		),
		'supports' => array(
			'custom' => array(
				'register' => true,
				'innerBlocks' => array(
					array(
						'wrap' => array(
							'block' => 'xd-tabbed-menu__section xd-tab-section__inner',
						),
						'allowedBlocks' => array(
							'xd/menu-item',
							'core/heading',
						),
						'template' => array(
							array(
								'core/heading',
								array(
									'level' => 5,
									'placeholder' => 'Section heading',
								),
							),
							array(
								'xd/menu-item',
							),
							array(
								'xd/menu-item',
							),
						),
						'templateLock' => false,
					),
				),
			),
		),
	),
	'tabbed-menu' => array(
		'apiVersion' => 2,
		'name' => 'xd/tabbed-menu',
		'title' => 'Tabbed Menu',
		'icon' => 'gm/photo-album',
		'description' => 'Tabbed menu',
		'category' => 'standard',
		'keywords' => array(
			'menu',
			'tabs',
		),
		'viewStyle' => array(
			'block-styles/tabbed-menu',
		),
		'editorStyle' => array(
			'block-styles/tabbed-menu',
		),
		'attributes' => array(
			'tabs' => array(
				'type' => 'array',
				'default' => array(
				),
			),
		),
		'supports' => array(
			'xd/padding' => true,
			'xd/padding-controls' => true,
			'xd/title' => true,
			'xd/color-theme' => true,
			'custom' => array(
				'innerBlocks' => array(
					array(
						'wrap' => array(
							'block' => 'container',
							'outer' => 'row',
							'inner' => 'col-10 offset-1 col-md-8 offset-md-2 col-xl-6 offset-xl-3',
							'innerBlocks' => 'uk-switcher xd-tabbed-menu__section-wrapper',
						),
						'allowedBlocks' => array(
							'xd/tab-section',
						),
						'templateLock' => false,
					),
				),
			),
		),
	),
	'team-member-card' => array(
		'$schema' => '../../schema/block-schema.json',
		'apiVersion' => 2,
		'name' => 'xd/team-member-card',
		'title' => 'Team Member',
		'icon' => 'gm/photo-album',
		'description' => 'Card',
		'category' => 'standard',
		'keywords' => array(
			'team',
			'member',
			'card',
		),
		'parent' => array(
			'xd/post-cards',
		),
		'attributes' => array(
			'postType' => array(
				'type' => 'string',
				'default' => 'team_member',
			),
			'postId' => array(
				'type' => 'integer',
				'default' => 0,
			),
		),
		'supports' => array(
			'custom' => array(
				'register' => true,
				'innerBlocks' => array(
					array(
						'wrap' => array(
							'block' => 'xd-post-card--team-member xd-thumbnail-card',
							'serverSideRenderBlock' => 'xd-thumbnail-card',
						),
						'serverSideRender' => true,
						'allowedBlocks' => array(
						),
					),
				),
				'blockControls' => array(
					array(
						'controls' => array(
							array(
								'id' => 'card-controls',
								'type' => 'XDPostCardControls',
							),
						),
					),
				),
			),
		),
	),
	'team-members' => array(
		'$schema' => '../../../../../themes/kicks/editor/schema/block-schema.json',
		'apiVersion' => 2,
		'attributes' => array(
			'postType' => array(
				'type' => 'string',
				'default' => 'team_member',
			),
			'postCard' => array(
				'type' => 'integer',
				'default' => 0,
			),
		),
		'name' => 'xd/team-members',
		'title' => 'Team Member Cards',
		'icon' => 'gm/person',
		'description' => 'Insert a collection of team member profiles',
		'category' => 'standard',
		'keywords' => array(
			'team',
			'member',
			'cards',
		),
		'supports' => array(
			'xd/title' => true,
			'xd/padding' => true,
			'xd/padding-controls' => true,
			'xd/color-theme' => true,
			'custom' => array(
				'register' => true,
				'innerBlocks' => array(
					array(
						'wrap' => array(
							'block' => 'container',
							'outer' => 'row',
							'inner' => 'col-10 offset-1',
							'innerBlocks' => 'xd-thumbnail-cards',
						),
						'allowedBlocks' => array(
							'',
						),
						'orientation' => 'horizontal',
						'renderAppender' => false,
					),
				),
				'inspectorControls' => array(
					array(
						'panels' => array(
							array(
								'title' => 'Card Selection',
								'initialOpen' => true,
								'controls' => array(
									array(
										'type' => 'XDPostSelectControl',
										'blockType' => 'xd/team-member-card',
									),
								),
							),
						),
					),
				),
			),
		),
	),
	'testimonial-slider' => array(
		'$schema' => '../../schema/block-schema.json',
		'apiVersion' => 2,
		'name' => 'xd/testimonial-slider',
		'title' => 'Testimonial Slider',
		'icon' => 'gm/chat',
		'description' => 'Insert a collection of testimonials',
		'category' => 'standard',
		'keywords' => array(
			'slider',
			'testimonial',
		),
		'supports' => array(
			'xd/margin' => true,
			'xd/margin-controls' => true,
			'custom' => array(
				'//' => '!!!This block is deprecated and is kept for sites that make use of it!!!',
				'register' => true,
				'innerBlocks' => array(
					array(
						'wrap' => array(
							'block' => 'container xd-card-slider flex-slider xd-card-slider--testimonial',
							'inner' => 'xd-card-slider__content row',
							'innerBlocks' => 'col-10 col-lg-8 offset-1 offset-lg-2',
						),
						'allowedBlocks' => array(
							'xd/testimonial',
						),
						'template' => array(
							array(
								'xd/testimonial',
							),
							array(
								'xd/testimonial',
							),
							array(
								'xd/testimonial',
							),
						),
					),
				),
			),
		),
	),
	'testimonial' => array(
		'$schema' => '../../schema/block-schema.json',
		'apiVersion' => 2,
		'icon' => 'gm/chat',
		'viewStyle' => array(
			'block-styles/testimonial-slider',
		),
		'editorStyle' => array(
			'block-styles/testimonial-slider',
		),
		'name' => 'xd/testimonial',
		'title' => 'Testimonial',
		'keywords' => array(
			'testimonial',
			'slider',
		),
		'parent' => array(
			'xd/testimonial-slider',
		),
		'attributes' => array(
			'content' => array(
				'type' => 'string',
			),
			'name' => array(
				'type' => 'string',
			),
			'location' => array(
				'type' => 'string',
			),
		),
		'supports' => array(
			'custom' => array(
				'//' => '!!!This block is deprecated and is kept for sites that make use of it!!!',
				'register' => true,
				'innerBlocks' => array(
					array(
						'wrap' => array(
							'block' => 'xd-card xd-testimonial-card xd-card--testimonial col-12',
							'outer' => 'xd-testimonial-card__content xd-card__content',
							'innerBlocks' => 'xd-testimonial-card__inner xd-card__inner',
							'preInnerBlocks' => 'xd-testimonial-slider__inner',
						),
						'allowedBlocks' => array(
						),
					),
				),
				'preInnerBlocksControls' => array(
					array(
						'controls' => array(
							array(
								'allowedFormats' => array(
								),
								'tagName' => 'h4',
								'type' => 'RichText',
								'attribute' => 'content',
								'placeholder' => 'Testimonial....',
							),
							array(
								'allowedFormats' => array(
								),
								'tagName' => 'h6',
								'type' => 'RichText',
								'attribute' => 'name',
								'placeholder' => 'Testimonial author',
							),
							array(
								'allowedFormats' => array(
								),
								'tagName' => 'p',
								'type' => 'RichText',
								'attribute' => 'location',
								'placeholder' => 'Testimonial author city, province/state',
								'className' => 'title',
							),
						),
					),
				),
			),
		),
	),
	'timeline-item' => array(
		'$schema' => '../../schema/block-schema.json',
		'apiVersion' => 2,
		'name' => 'xd/timeline-item',
		'title' => 'Time Line Item',
		'description' => 'Time Line Item',
		'category' => 'standard',
		'icon' => 'gm/view-timeline',
		'keywords' => array(
			'time',
			'line',
		),
		'parent' => array(
			'xd/timeline',
		),
		'attributes' => array(
			'year' => array(
				'type' => 'string',
				'default' => '',
			),
		),
		'viewScript' => array(
			'blocks/time-line-item',
		),
		'supports' => array(
			'xd/id' => true,
			'xd/padding' => true,
			'xd/padding-controls' => true,
			'xd/color-theme' => true,
			'xd/image-desktop' => true,
			'xd/image-mobile' => true,
			'xd/video' => true,
			'xd/video-modal' => true,
			'custom' => array(
				'register' => true,
				'innerBlocks' => array(
					array(
						'isDefault' => true,
						'wrap' => array(
							'postInnerBlocksInside' => true,
							'block' => 'container xd-timeline__item',
							'outer' => 'row',
							'preInnerBlocks' => 'xd-timeline__image col-8 col-md-7 col-xl-4 offset-2 offset-md-3 offset-xl-1',
							'innerBlocks' => 'xd-timeline__inner col-8 col-md-7 col-xl-4 offset-2 offset-md-3 offset-xl-2',
						),
						'allowedBlocks' => array(
							'core/paragraph',
							'core/heading',
							'core/list',
							'core/quote',
							'xd/buttons',
							'core/separator',
							'xd/image',
							'xd/image-icon',
							'xd/video',
							'xd/accordion',
							'xd/form',
						),
						'template' => array(
							array(
								'core/heading',
								array(
									'level' => 4,
								),
							),
							array(
								'core/paragraph',
							),
						),
					),
				),
				'preInnerBlocksControls' => array(
					array(
						'controls' => array(
							array(
								'type' => 'RichText',
								'className' => 'xd-timeline__year d1',
								'attribute' => 'year',
								'tagName' => 'h3',
								'allowedFormats' => array(
								),
								'placeholder' => 'Year',
							),
							array(
								'type' => 'XDImage',
								'attribute' => 'imageDesktop',
							),
						),
					),
				),
			),
		),
	),
	'timeline' => array(
		'$schema' => '../../schema/block-schema.json',
		'apiVersion' => 2,
		'name' => 'xd/timeline',
		'title' => 'Timeline',
		'description' => 'Timeline',
		'viewStyle' => array(
			'block-styles/timeline',
		),
		'editorStyle' => array(
			'block-styles/timeline',
		),
		'category' => 'standard',
		'icon' => 'gm/view-timeline',
		'keywords' => array(
			'timeline',
		),
		'supports' => array(
			'anchor' => true,
			'xd/id' => true,
			'xd/title' => true,
			'custom' => array(
				'register' => true,
				'innerBlocks' => array(
					array(
						'wrap' => array(
							'innerBlocks' => 'xd-timeline__items',
						),
						'allowedBlocks' => array(
							'xd/timeline-item',
						),
						'template' => array(
							array(
								'xd/timeline-item',
							),
							array(
								'xd/timeline-item',
							),
							array(
								'xd/timeline-item',
							),
						),
					),
				),
			),
		),
	),
	'two-column-list' => array(
		'$schema' => '../../schema/block-schema.json',
		'apiVersion' => 2,
		'keywords' => array(
			'columns',
			'content',
		),
		'name' => 'xd/two-column-list',
		'title' => 'Two column List',
		'description' => 'Create two columns of bulleted, numbered, or stylized lists.',
		'category' => 'standard',
		'icon' => 'gm/view-column-2',
		'viewStyle' => array(
			'block-styles/lists',
		),
		'editorStyle' => array(
			'block-styles/lists',
		),
		'parent' => array(
			'xd/container',
		),
		'supports' => array(
			'custom' => array(
				'register' => true,
				'innerBlocks' => array(
					array(
						'allowedBlocks' => array(
							'core/list',
						),
						'template' => array(
							array(
								'core/list',
							),
							array(
								'core/list',
							),
						),
						'orientation' => 'horizontal',
					),
				),
			),
		),
	),
	'two-tile' => array(
		'$schema' => '../../schema/block-schema.json',
		'apiVersion' => 2,
		'name' => 'xd/two-tile',
		'title' => 'Two tile',
		'description' => 'Two tile',
		'category' => 'standard',
		'icon' => 'wp/media-and-text',
		'viewStyle' => array(
			'block-styles/two-tile',
		),
		'editorStyle' => array(
			'block-styles/two-tile',
		),
		'keywords' => array(
			'container',
			'layout',
		),
		'viewScript' => array(
			'blocks/two-tile',
		),
		'attributes' => array(
			'align' => array(
				'type' => 'string',
				'default' => 'left',
				'outerClassName' => array(
					'left' => '',
					'right' => 'row-reverse',
				),
			),
			'alignContent' => array(
				'type' => 'string',
				'default' => 'left',
				'className' => array(
					'top' => 'xd-two-tile--content-top',
					'center' => 'xd-two-tile--content-center',
					'bottom' => 'xd-two-tile--content-bottom',
				),
			),
			'imageWidth' => array(
				'type' => 'string',
				'default' => 'wide',
				'className' => array(
					'inline' => '',
					'wide' => 'xd-two-tile--image-wide',
				),
			),
		),
		'variations' => array(
			array(
				'scope' => array(
					'inserter',
					'transform',
				),
				'name' => 'xd/two-tile',
				'title' => 'Two tile',
				'description' => 'Two tile',
				'category' => 'standard',
				'icon' => 'gm/format-image-left',
				'attributes' => array(
					'imageWidth' => 'wide',
				),
				'isActive' => array(
					'imageWidth',
				),
				'isDefault' => true,
			),
			array(
				'scope' => array(
					'inserter',
					'transform',
				),
				'name' => 'xd/two-tile-inline',
				'title' => 'Inline two tile',
				'icon' => 'wp/media-and-text',
				'attributes' => array(
					'imageWidth' => 'inline',
				),
				'isActive' => array(
					'imageWidth',
				),
			),
		),
		'supports' => array(
			'xd/id' => true,
			'xd/padding' => true,
			'xd/padding-controls' => true,
			'xd/color-theme' => true,
			'xd/image-desktop' => true,
			'xd/image-mobile' => true,
			'xd/video' => true,
			'xd/video-modal' => true,
			'custom' => array(
				'register' => true,
				'innerBlocks' => array(
					array(
						'isDefault' => true,
						'wrap' => array(
							'inner' => false,
							'postInnerBlocksInside' => true,
							'block' => 'container',
							'outer' => 'row',
							'preInnerBlocks' => 'xd-two-tile__image col-11 col-md-10 col-xl-5 offset-md-1',
							'innerBlocks' => 'xd-two-tile__inner col-10 col-md-8 col-xl-4 offset-1 offset-md-2 offset-xl-1',
						),
						'allowedBlocks' => array(
							'core/paragraph',
							'core/heading',
							'core/list',
							'core/quote',
							'xd/buttons',
							'core/separator',
							'xd/image',
							'xd/image-icon',
							'xd/video',
							'xd/accordion',
							'xd/form',
						),
						'template' => array(
							array(
								'core/heading',
							),
							array(
								'core/paragraph',
							),
							array(
								'xd/buttons',
							),
						),
					),
					array(
						'context' => array(
							'parent' => array(
								'core/widget-area',
							),
						),
						'wrap' => array(
							'editorBlock' => 'xd-modal',
							'block' => 'container',
							'outer' => 'row',
							'preInnerBlocks' => 'xd-two-tile__image col-12  col-xl-6',
							'innerBlocks' => 'xd-two-tile__inner col-12 col-xl-6',
						),
					),
					array(
						'context' => array(
							'attributes' => array(
								'imageWidth' => 'wide',
							),
						),
						'wrap' => array(
							'block' => 'container',
							'outer' => 'row',
							'preInnerBlocks' => 'xd-two-tile__image col-12  col-xl-6',
							'innerBlocks' => 'xd-two-tile__inner col-10 col-md-8 col-xl-4 offset-1 offset-md-2 offset-xl-1',
						),
					),
				),
				'inspectorControls' => array(
					array(
						'panels' => array(
							array(
								'title' => 'Align',
								'initialOpen' => true,
								'controls' => array(
									array(
										'type' => 'XDButtonGroup',
										'gridColumns' => 8,
										'attribute' => 'align',
										'options' => array(
											array(
												'icon' => 'gm/format-image-left',
												'label' => 'Left',
												'value' => 'left',
											),
											array(
												'icon' => 'gm/format-image-right',
												'label' => 'Right',
												'value' => 'right',
											),
										),
									),
									array(
										'type' => 'XDButtonGroup',
										'gridColumns' => 8,
										'attribute' => 'alignContent',
										'label' => 'Align content',
										'options' => array(
											array(
												'icon' => 'gm/align-flex-start',
												'label' => 'Top',
												'value' => 'top',
											),
											array(
												'icon' => 'gm/align-flex-center',
												'label' => 'Middle',
												'value' => 'center',
											),
											array(
												'icon' => 'gm/align-flex-end',
												'label' => 'Bottom',
												'value' => 'bottom',
											),
										),
									),
								),
							),
						),
					),
				),
				'blockControls' => array(
					array(
						'controls' => array(
							array(
								'group' => 'align',
								'type' => 'XDToolBarButton',
								'attribute' => 'align',
								'icon' => 'gm/format-image-left',
								'label' => 'Left',
								'value' => 'left',
							),
							array(
								'group' => 'align',
								'type' => 'XDToolBarButton',
								'attribute' => 'align',
								'icon' => 'gm/format-image-right',
								'label' => 'Right',
								'value' => 'right',
							),
						),
					),
				),
				'preInnerBlocksControls' => array(
					array(
						'controls' => array(
							array(
								'type' => 'XDImage',
								'attribute' => 'imageDesktop',
							),
						),
					),
				),
				'/*postInnerBlocksControls*/' => array(
					array(
						'context' => array(
							'variation' => array(
								'xd/two-image-two-tile',
							),
						),
						'controls' => array(
							array(
								'type' => 'XDImage',
								'attribute' => 'imageSmall',
							),
						),
					),
					array(
						'context' => array(
						),
					),
				),
			),
		),
	),
	'video' => array(
		'$schema' => '../../schema/block-schema.json',
		'apiVersion' => 2,
		'name' => 'xd/video',
		'title' => 'Video',
		'description' => 'Video',
		'category' => 'standard',
		'icon' => 'gm/movie',
		'keywords' => array(
			'video',
		),
		'supports' => array(
			'xd/id' => true,
			'xd/image-video-message' => true,
			'xd/image-mobile' => true,
			'xd/image-desktop' => true,
			'xd/video' => true,
			'xd/video-modal' => true,
			'custom' => array(
				'register' => true,
				'innerBlocks' => array(
					array(
						'wrap' => array(
							'block' => 'xd-image xd-image--cover',
						),
						'allowedBlocks' => array(
						),
					),
					array(
						'context' => array(
							'parent' => array(
								'xd/container',
								'xd/column',
								'xd/two-tile',
								'xd/card',
							),
						),
						'wrap' => array(
							'block' => 'xd-image xd-video--image-cover',
						),
						'allowedBlocks' => array(
						),
					),
				),
				'preInnerBlocksControls' => array(
					array(
						'controls' => array(
							array(
								'type' => 'XDVideoControl',
								'attribute' => 'videoDesktop',
								'isPreview' => true,
							),
						),
					),
				),
			),
		),
	),
	'title-block' => array(
		'$schema' => '../../../../../themes/kicks/editor/schema/block-schema.json',
		'apiVersion' => 2,
		'name' => 'xd/title-block',
		'title' => 'Title Block',
		'description' => 'Two columns of title and subtitle with a separator line that wrap on mobile and tablet',
		'category' => 'standard',
		'icon' => 'gm/short-text',
		'viewStyle' => array(
			'block-styles/columns',
			'block-styles/title-block',
		),
		'editorStyle' => array(
			'block-styles/columns',
			'block-styles/title-block',
		),
		'keywords' => array(
			'columns',
			'content',
			'title',
			'title block',
		),
		'supports' => array(
			'anchor' => true,
			'xd/padding' => true,
			'xd/padding-controls' => true,
			'xd/color-theme' => true,
			'custom' => array(
				'register' => true,
				'innerBlocks' => array(
					array(
						'wrap' => array(
							'block' => 'container xd-columns--two',
							'outer' => 'row',
							'innerBlocks' => 'xd-columns__columns xd-two-column__columns col-10 offset-1',
						),
						'allowedBlocks' => array(
							'core/heading',
							'core/paragraph',
						),
						'template' => array(
							array(
								'core/heading',
								array(
									'placeholder' => 'Title',
									'level' => 2,
									'className' => 'xd-title-block-title xd-block-title--left offset-md-1 col-md-10 col-lg-12',
								),
							),
							array(
								'core/paragraph',
								array(
									'placeholder' => 'Subtitle',
									'className' => 'xd-title-block-title xd-block-title--right is-style-title-lg xd-title has-text-align-right',
								),
							),
						),
						'templateLock' => true,
						'orientation' => 'horizontal',
					),
				),
			),
		),
	),
);
