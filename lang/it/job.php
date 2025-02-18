<?php

return [
    'pages' => 'Pagine',
    'widgets' => 'Widgets',
    'navigation' => [
        'name' => 'Job',
        'plural' => 'Jobs',
        'group' => [
            'name' => 'Jobs',
            'description' => 'Gestione dei processi in background',
        ],
        'label' => 'jobs',
        'sort' => 17,
        'icon' => 'heroicon-o-computer-desktop',
    ],
    'fields' => [
        'id' => ['label' => 'ID'],
        'queue' => ['label' => 'Coda'],
        'payload' => ['label' => 'Payload'],
        'attempts' => ['label' => 'Tentativi'],
        'reserved_at' => ['label' => 'Riservato il'],
        'available_at' => ['label' => 'Disponibile il'],
        'created_at' => ['label' => 'Creato il'],
        'status' => ['label' => 'Stato'],
        'progress' => ['label' => 'Progresso'],
        'type' => ['label' => 'Tipo'],
        'name' => ['label' => 'Nome'],
        'description' => ['label' => 'Descrizione'],
        'guard_name' => ['label' => 'Guard'],
        'permissions' => ['label' => 'Permessi'],
        'updated_at' => ['label' => 'Aggiornato il'],
        'first_name' => ['label' => 'Nome'],
        'last_name' => ['label' => 'Cognome'],
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
                'import_file' => ['label' => 'Seleziona un file XLS o CSV da caricare'],
            ],
        ],
        'export' => [
            'label' => 'Esporta',
            'tooltip' => 'Esporta dati in un file',
            'filename_prefix' => 'Aree al',
            'columns' => [
                'name' => ['label' => 'Nome area'],
                'parent_name' => ['label' => 'Nome area livello superiore'],
            ],
        ],
        'run' => [
            'label' => 'Esegui',
            'icon' => 'play',
            'color' => 'green',
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
