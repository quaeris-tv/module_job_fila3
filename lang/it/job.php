<?php

return [
    'pages' => 'Pagine',
    'widgets' => 'Widgets',

    'navigation' => [
        'name' => 'Jobs',
        'plural' => 'Jobs',
        'group' => [
            'name' => 'Jobs',
            'description' => 'Gestione dei processi in background',
        ],
        'label' => 'Jobs',
        'sort' => 30,
        'icon' => 'job.navigation',
    ],

    'fields' => [
        'id' => [
            'label' => 'ID',
            'tooltip' => 'Identificatore univoco del job',
        ],
        'queue' => [
            'label' => 'Coda',
            'tooltip' => 'La coda in cui il job è stato messo in attesa',
        ],
        'payload' => [
            'label' => 'Payload',
            'tooltip' => 'Dati associati al job',
        ],
        'attempts' => [
            'label' => 'Tentativi',
            'tooltip' => 'Numero di tentativi eseguiti per il job',
        ],
        'reserved_at' => [
            'label' => 'Riservato il',
            'tooltip' => 'Quando il job è stato riservato per l’esecuzione',
        ],
        'available_at' => [
            'label' => 'Disponibile il',
            'tooltip' => 'Quando il job diventa disponibile per l’esecuzione',
        ],
        'created_at' => [
            'label' => 'Creato il',
            'tooltip' => 'Data di creazione del job',
        ],
        'status' => [
            'label' => 'Stato',
            'tooltip' => 'Stato corrente del job',
        ],
        'progress' => [
            'label' => 'Progresso',
            'tooltip' => 'Percentuale di completamento del job',
        ],
        'type' => [
            'label' => 'Tipo',
            'tooltip' => 'Tipo di job (import, export, etc.)',
        ],
        'name' => [
            'label' => 'Nome',
            'tooltip' => 'Nome identificativo del job',
        ],
        'description' => [
            'label' => 'Descrizione',
            'tooltip' => 'Descrizione dettagliata del job',
        ],
        'guard_name' => [
            'label' => 'Guard',
            'tooltip' => 'Guard di accesso per il job',
        ],
        'permissions' => [
            'label' => 'Permessi',
            'tooltip' => 'Permessi associati al job',
        ],
        'updated_at' => [
            'label' => 'Aggiornato il',
            'tooltip' => 'Data dell’ultimo aggiornamento del job',
        ],
        'first_name' => [
            'label' => 'Nome',
            'tooltip' => 'Nome dell’utente che ha creato il job',
        ],
        'last_name' => [
            'label' => 'Cognome',
            'tooltip' => 'Cognome dell’utente che ha creato il job',
        ],
        'select_all' => [
            'label' => 'Seleziona Tutti',
            'tooltip' => 'Seleziona tutti gli elementi disponibili',
        ],
    ],

    'actions' => [
        'import' => [
            'label' => 'Importa',
            'tooltip' => 'Importa dati da un file',
            'fields' => [
                'import_file' => [
                    'label' => 'Seleziona un file XLS o CSV da caricare',
                    'placeholder' => 'Seleziona il file...',
                ],
            ],
        ],
        'export' => [
            'label' => 'Esporta',
            'tooltip' => 'Esporta dati in un file',
            'filename_prefix' => 'Aree al',
            'columns' => [
                'name' => [
                    'label' => 'Nome area',
                ],
                'parent_name' => [
                    'label' => 'Nome area livello superiore',
                ],
            ],
        ],
        'run' => [
            'label' => 'Esegui',
            'icon' => 'play',
            'color' => 'green',
            'tooltip' => 'Avvia l’esecuzione del job',
            'modal' => [
                'heading' => 'Esegui Job',
                'description' => 'Vuoi eseguire questo job?',
            ],
            'messages' => [
                'success' => 'Job avviato con successo',
            ],
        ],
        'stop' => [
            'label' => 'Ferma',
            'icon' => 'pause',
            'color' => 'red',
            'tooltip' => 'Ferma l’esecuzione del job',
            'modal' => [
                'heading' => 'Ferma Job',
                'description' => 'Vuoi fermare questo job?',
            ],
            'messages' => [
                'success' => 'Job fermato con successo',
            ],
        ],
        'delete' => [
            'label' => 'Elimina',
            'icon' => 'trash',
            'color' => 'red',
            'tooltip' => 'Elimina definitivamente questo job',
            'modal' => [
                'heading' => 'Elimina Job',
                'description' => 'Sei sicuro di voler eliminare questo job?',
            ],
            'messages' => [
                'success' => 'Job eliminato con successo',
            ],
        ],
    ],

    'messages' => [
        'no_jobs' => 'Nessun job presente',
        'job_started' => 'Job avviato',
        'job_stopped' => 'Job fermato',
        'job_completed' => 'Job completato',
        'job_failed' => 'Job fallito',
    ],

    'statuses' => [
        'pending' => 'In Attesa',
        'processing' => 'In Elaborazione',
        'completed' => 'Completato',
        'failed' => 'Fallito',
        'stopped' => 'Fermato',
    ],

    'types' => [
        'import' => 'Importazione',
        'export' => 'Esportazione',
        'process' => 'Elaborazione',
        'notification' => 'Notifica',
        'cleanup' => 'Pulizia',
    ],
];
