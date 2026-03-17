<?php return array(
	'embed' => array(
		'name' => 'core/embed',
		'viewStyle' => array(
			'block-styles/embed',
		),
		'editorStyle' => array(
			'block-styles/embed',
		),
	),
	'list-item' => array(
		'$schema' => '../../../schema/block-schema.json',
		'name' => 'core/list-item',
		'title' => 'List Item',
		'supports' => array(
			'customClassName' => false,
		),
	),
	'list' => array(
		'$schema' => '../../../schema/block-schema.json',
		'name' => 'core/list',
		'title' => 'List',
		'description' => 'Create a bulleted, numbered, or stylized list.',
		'viewStyle' => array(
			'block-styles/lists',
		),
		'editorStyle' => array(
			'block-styles/lists',
		),
		'supports' => array(
			'custom' => array(
				'inspectorControls' => array(
					array(
						'panels' => array(
							array(
								'initialOpen' => true,
								'title' => 'List Style',
								'controls' => array(
									array(
										'attribute' => 'className',
										'type' => 'XDButtonGroup',
										'gridColumns' => 8,
										'options' => array(
											array(
												'value' => '',
												'label' => 'Default',
												'icon' => 'gm/format-list-bulleted',
											),
											array(
												'value' => 'is-style-standard-list',
												'label' => 'Standard List',
												'icon' => 'gm/reorder',
											),
											array(
												'value' => 'is-style-standard-list-with-checkmarks',
												'label' => 'Standard List With Checkmarks',
												'icon' => 'gm/checklist',
											),
											array(
												'value' => 'is-style-standard-list-with-links',
												'label' => 'Link List With Arrows',
												'icon' => 'gm/link',
											),
										),
									),
								),
							),
						),
					),
				),
			),
		),
	),
	'paragraph' => array(
		'$schema' => '../../../schema/block-schema.json',
		'name' => 'core/paragraph',
		'title' => 'Paragraph',
		'example' => array(
		),
		'styles' => array(
			array(
				'name' => 'body-1',
				'label' => 'Body 1',
			),
			array(
				'name' => 'body-2',
				'label' => 'Body 2',
				'isDefault' => true,
			),
			array(
				'name' => 'body-3',
				'label' => 'Body 3',
			),
			array(
				'name' => 'title-lg',
				'label' => 'Title Large',
			),
			array(
				'name' => 'title-sm',
				'label' => 'Title Small',
			),
		),
	),
	'heading' => array(
		'/*block styles overrides in widgets*/' => '',
		'name' => 'core/heading',
		'parent' => array(
			'xd/container',
		),
		'styles' => array(
			array(
				'name' => 'display-1',
				'label' => 'Display 1',
			),
			array(
				'name' => 'display-2',
				'label' => 'Display 2',
			),
		),
	),
);
