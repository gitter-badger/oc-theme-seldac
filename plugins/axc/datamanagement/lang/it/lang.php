<?

/**
 * @author Alex Carrega <contact@alexcarrega.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 */

/**
 * EN localization
 * @var array
 */
return [
	'plugin' => [
		'description' => 'Fornisce funzionalità per la gestione dei dati',
		'label' => 'Gestione Dati'
	],
	'settings' => [
		'label' => 'Gestione Dati',
		'description' => 'Configura le impostazionif per Data Management',
	],
	'link' => [
		'breadcrumb' => [
			'title' => 'Gestione Link'
		],
		'component' => [
			'name' => 'Elenco Link',
			'description' => 'fornisce vari metodi per ottenere liste di link'
		],
		'form' => [
			'cancel' => 'Annulla',
			'create' => [
				'button' => 'Crea',
				'close' => 'Crea e Chiudi',
				'flash' => [ 'save' => 'Link creato correttamente' ],
				'indicator' => 'Creazione link...',
				'title' => 'Nuovo Link'
			],
			'deleting' => 
			[
				'text' => 'Eliminazione link...',
				'confirm' => 'Sei sicuro di voler eliminare questo link?'
			],
			'fields' => [
				'title' => [
					'label' => 'Titolo',
					'placeholder' => 'inserire il titolo',
					'comment' => 'Il titolo del link deve essere univoco e compreso tra 50 e 100 caratteri'
				],
				'url' => [
					'label' => 'URL',
					'placeholder' => 'inserire l\'URL',
					'comment' => 'L\'URL del link deve essere univoco'
				],
				'image' => [
					'label' => 'Immagine',
					'comment' => 'La dimensione dell\'immagine del link sarà %dx%d'
				],
				'position' => [
					'label' => 'Posizione',
					'placeholder' => 'inserire la posizione',
					'comment' => 'I link sarammo visualizzati in ordine secondo il valore della posizione'
				],
				'published' => [
					'label' => 'Pubblicato',
					'comment' => 'Solo i link pubblicati saranno visualizzati'
				],
				'description' => [
					'label' => 'Descrizione',
					'comment' => 'Informazioni di dettaglio relative al link'
				]
			],
			'update' => [
				'button' => 'Salva',
				'close' => 'Salva e Chiudi',
				'flash' => [
					'save' => 'Link modificato correttamente',
					'delete' => 'Link eliminato correttamente'
				],
				'indicator' => 'Salvataggio link...',
				'title' => 'Modifica Link'
			]
		],
		'list' => [
			'created' => 'Creato',
			'description' => 'Descrizione',
			'published' => 'Pubblicato',
			'hide_not_published' => 'Nascondere i link non pubblicati',
			'image' => [
				'title' => 'Immagine del Link',
				'label' => 'Immagine'
			],
			'link' => 'Link',
			'open_external_link' => 'Apri URL in un\'altra finestra',
			'timestamp' => 'Stat.',
			'updated' => 'Aggiornato'
		],
		'settings' => [
			'tab' => 'Link',
			'fields' => [
				'image' => [
					'width' => [
						'comment' => 'Larghezza dell\'immagine del link',
						'label' => 'Larghezza Immagine',
						'placeholder' => 'inserire la larghezza dell\'immagine del link'
					],
					'height' => [
						'comment' => 'Altezza dell\'immagine del link',
						'label' => 'Altezza Immagine',
						'placeholder' => 'inserire l\'altezza dell\'immagine del link'
					]
				]
			]
		],
		'toolbar' => [
			'new' => 'Nuovo'
		],
		'widget' => [
			'label' => 'Staistiche Link',
			'published' => 'Pubblicati',
			'link' => 'Link',
			'link_published' => '%s su %s link pubblicati',
			'previous_month' => 'mese precedente: %s',
			'goal_meter' => 'Rapporto',
			'total' => 'Totali',
			'title' => 'Link'
		]
	]
];