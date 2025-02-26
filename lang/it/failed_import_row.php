<?php

return [
    'pages' => 'Pagine',
    'widgets' => 'Widgets',
    'navigation' => [
        'name' => 'Righe Import Fallite',
        'plural' => 'Righe Import Fallite',
        'group' => [
            'name' => 'Import/Export',
            'description' => 'Gestione delle righe di importazione fallite',
        ],
        'label' => 'righe import fallite',
        'sort' => 80,
        'icon' => 'job-failed-import-animated',
    ],
    'fields' => [
        'id' => [
            'label' => 'ID',
            'tooltip' => 'Identificativo univoco della riga di importazione.',
            'placeholder' => 'Inserisci ID',
        ],
        'import_id' => [
            'label' => 'ID Importazione',
            'tooltip' => 'ID dell\'importazione a cui questa riga appartiene.',
            'placeholder' => 'Inserisci ID Importazione',
        ],
        'row_number' => [
            'label' => 'Numero Riga',
            'tooltip' => 'Numero progressivo della riga di importazione.',
            'placeholder' => 'Inserisci numero riga',
        ],
        'data' => [
            'label' => 'Dati',
            'tooltip' => 'Contenuto della riga importata che ha causato un errore.',
            'placeholder' => 'Visualizza i dati della riga',
        ],
        'errors' => [
            'label' => 'Errori',
            'tooltip' => 'Descrizione degli errori che hanno causato il fallimento della riga.',
            'placeholder' => 'Visualizza gli errori',
        ],
        'created_at' => [
            'label' => 'Creato il',
            'tooltip' => 'Data e ora di creazione della riga fallita.',
            'placeholder' => 'Data di creazione',
        ],
        'updated_at' => [
            'label' => 'Aggiornato il',
            'tooltip' => 'Data e ora dell\'ultima modifica alla riga.',
            'placeholder' => 'Data di aggiornamento',
        ],
        'resolved_at' => [
            'label' => 'Risolto il',
            'tooltip' => 'Data e ora in cui l\'errore è stato risolto.',
            'placeholder' => 'Data di risoluzione',
        ],
        'resolved_by' => [
            'label' => 'Risolto da',
            'tooltip' => 'Persona che ha risolto l\'errore.',
            'placeholder' => 'Inserisci il risolutore',
        ],
        'resolution_notes' => [
            'label' => 'Note Risoluzione',
            'tooltip' => 'Dettagli relativi alla risoluzione dell\'errore.',
            'placeholder' => 'Inserisci le note sulla risoluzione',
        ],
        'status' => [
            'label' => 'Stato',
            'tooltip' => 'Lo stato attuale della riga di importazione (In attesa, Risolto, Saltato, etc.).',
            'placeholder' => 'Seleziona stato',
        ],
        'validation_error' => [
            'label' => 'Errore di Validazione',
            'tooltip' => 'Errore specifico di validazione, se presente.',
            'placeholder' => 'Errore di validazione',
        ],
    ],
    'actions' => [
        'resolve' => [
            'label' => 'Risolvi',
            'icon' => 'check-circle',
            'color' => 'success',
            'modal' => [
                'heading' => 'Risolvi Errore',
                'description' => 'Inserisci i dati corretti per risolvere l\'errore.',
            ],
            'messages' => [
                'success' => 'Errore risolto con successo.',
            ],
        ],
        'retry' => [
            'label' => 'Riprova',
            'icon' => 'refresh',
            'color' => 'primary',
            'modal' => [
                'heading' => 'Riprova Importazione',
                'description' => 'Vuoi riprovare l\'importazione di questa riga?',
            ],
            'messages' => [
                'success' => 'Riga riprovata con successo.',
            ],
        ],
        'skip' => [
            'label' => 'Salta',
            'icon' => 'skip-forward',
            'color' => 'warning',
            'modal' => [
                'heading' => 'Salta Riga',
                'description' => 'Sei sicuro di voler saltare questa riga?',
            ],
            'messages' => [
                'success' => 'Riga saltata con successo.',
            ],
        ],
        'bulk_resolve' => [
            'label' => 'Risolvi Selezionati',
            'icon' => 'check-all',
            'color' => 'success',
            'modal' => [
                'heading' => 'Risolvi Errori Selezionati',
                'description' => 'Vuoi risolvere tutti gli errori selezionati?',
            ],
            'messages' => [
                'success' => 'Errori risolti con successo.',
            ],
        ],
        'import' => [
            'fields' => [
                'import_file' => 'Seleziona un file XLS o CSV da caricare',
                'tooltip' => 'Carica il file da importare (XLS o CSV).',
            ],
        ],
        'export' => [
            'filename_prefix' => 'Aree al',
            'columns' => [
                'name' => 'Nome area',
                'parent_name' => 'Nome area livello superiore',
            ],
            'tooltip' => 'Esporta i dati delle aree selezionate.',
        ],
    ],
    'messages' => [
        'no_failed_rows' => 'Nessuna riga fallita.',
        'row_resolved' => 'Riga risolta con successo.',
        'row_retried' => 'Riga riprovata con successo.',
        'row_skipped' => 'Riga saltata.',
        'multiple_resolved' => ':count righe risolte con successo.',
    ],
    'statuses' => [
        'pending' => 'In Attesa',
        'resolved' => 'Risolto',
        'skipped' => 'Saltato',
        'retried' => 'Riprovato',
    ],
    'error_types' => [
        'validation' => 'Errore di Validazione',
        'data_format' => 'Formato Dati Errato',
        'missing_data' => 'Dati Mancanti',
        'duplicate' => 'Dato Duplicato',
        'reference' => 'Riferimento Non Trovato',
        'system' => 'Errore di Sistema',
    ],
    'model' => [
        'label' => 'Failed Import Row Model',
    ],
    'plural' => [
        'model' => [
            'label' => 'Failed Import Rows',
        ],
    ],
];
