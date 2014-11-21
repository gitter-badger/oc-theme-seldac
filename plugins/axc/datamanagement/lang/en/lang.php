<?

/**
 * @author Alex Carrega <contact@alexcarrega.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 */

/**
 * IT localization.
 * @var array
 */
return [
	'plugin' => [
		'description' => 'Provides functionalities for data management',
		'label' => 'Data Management'
	],
	'settings' => [
		'label' => 'Data Management',
		'description' => 'Configure Data Management settings',
	],
	'link' => [
		'breadcrumb' => [
			'title' => 'Link Management'
		],
		'component' => [
			'name' => 'Link List',
			'description' => 'provide various methods to get lists of links'
		],
		'form' => [
			'cancel' => 'Cancel',
			'create' => [
				'button' => 'Create',
				'close' => 'Create and Close',
				'flash' => [ 'save' => 'Link created successfully' ],
				'indicator' => 'Creating link...',
				'title' => 'Create Link'
			],
			'deleting' => 
			[
				'text' => 'Deleting link...',
				'confirm' => 'Do you really want to delete this link?'
			],
			'fields' => [
				'title' => [
					'label' => 'Title',
					'placeholder' => 'insert the title',
					'comment' => 'The title of the link must be unique and comprise between 5 and 100 characters'
				],
				'url' => [
					'label' => 'URL',
					'placeholder' => 'insert the URL',
					'comment' => 'The URL of the link must be unique'
				],
				'image' => [
					'label' => 'Image',
					'comment' => 'The size of the link image will be %dx%d'
				],
				'position' => [
					'label' => 'Position',
					'placeholder' => 'insert the position',
					'comment' => 'The links will be showed in order based on position value'
				],
				'published' => [
					'label' => 'Published',
					'comment' => 'The links will be showed only if published'
				],
				'description' => [
					'label' => 'Description',
					'comment' => 'Information details'
				]
			],
			'update' => [
				'button' => 'Save',
				'close' => 'Save and Close',
				'flash' => [
					'save' => 'Link updated successfully',
					'delete' => 'Link deleted successfully'
				],
				'indicator' => 'Saving link...',
				'title' => 'Edit Link'
			]
		],
		'list' => [
			'created' => 'Created',
			'description' => 'Description',
			'published' => 'Published',
			'hide_not_published' => 'Hide not published links',
			'image' => [
				'title' => 'Link Image',
				'label' => 'Image'
			],
			'link' => 'Link',
			'open_external_link' => 'Open URL in another window',
			'timestamp' => 'Stats',
			'updated' => 'Updated'
		],
		'settings' => [
			'tab' => 'Link',
			'fields' => [
				'image' => [
					'width' => [
						'comment' => 'Width of the link image',
						'label' => 'Image Width',
						'placeholder' => 'insert the width of the link image'
					],
					'height' => [
						'comment' => 'Height of the link image',
						'label' => 'Image Height',
						'placeholder' => 'insert the height of the link image'
					]
				]
			]
		],
		'toolbar' => [
			'new' => 'New'
		],
		'widget' => [
			'label' => 'Link Statistics',
			'published' => 'Published',
			'goal_meter' => 'Ratio',
			'link' => 'Links',
			'link_published' => '%s of %s links published',
			'previous_month' => 'previous month: %s',
			'total' => 'Total',
			'title' => 'Link'
		]
	]
];