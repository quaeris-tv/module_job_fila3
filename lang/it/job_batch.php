<?php

return [
    'pages' => 'Pagine',
    'widgets' => 'Widgets',
    'navigation' => [
        'name' => 'Job Batch',
        'plural' => 'Job Batches',
        'group' => [
            'name' => 'Jobs',
            'description' => 'Gestione dei processi in background',
        ],
        'label' => 'job batch',
        'sort' => 46,
    ],
    'fields' => [
        'id' => 'ID',
        'name' => 'Nome',
        'total_jobs' => 'Jobs Totali',
        'pending_jobs' => 'Jobs in Attesa',
        'failed_jobs' => 'Jobs Falliti',
        'failed_job_ids' => 'ID Jobs Falliti',
        'options' => 'Opzioni',
        'created_at' => 'Creato il',
        'cancelled_at' => 'Cancellato il',
        'finished_at' => 'Terminato il',
        'guard_name' => 'Guard',
        'permissions' => 'Permessi',
        'updated_at' => 'Aggiornato il',
        'first_name' => 'Nome',
        'last_name' => 'Cognome',
        'select_all' => [
            'name' => 'Seleziona Tutti',
            'message' => '',
        ],
    ],
    'actions' => [
        'import' => [
            'fields' => [
                'import_file' => 'Seleziona un file XLS o CSV da caricare',
            ],
        ],
        'export' => [
            'filename_prefix' => 'Aree al',
            'columns' => [
                'name' => 'Nome area',
                'parent_name' => 'Nome area livello superiore',
            ],
        ],
        'retry' => [
            'label' => 'Riprova',
            'modal' => [
                'heading' => 'Riprova Jobs Falliti',
                'description' => 'Vuoi riprovare ad eseguire i jobs falliti?',
            ],
            'messages' => [
                'success' => 'Jobs riavviati con successo',
            ],
        ],
        'cancel' => [
            'label' => 'Cancella',
            'modal' => [
                'heading' => 'Cancella Batch',
                'description' => 'Sei sicuro di voler cancellare questo batch?',
            ],
            'messages' => [
                'success' => 'Batch cancellato con successo',
            ],
        ],
    ],
    'messages' => [
        'no_failed_jobs' => 'Nessun job fallito',
        'batch_cancelled' => 'Batch cancellato',
        'batch_finished' => 'Batch completato',
        'batch_processing' => 'Batch in elaborazione',
    ],
];
