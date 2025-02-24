<?php 

return [
    'resources' => 'Risorse',
    'pages' => 'Pagine',
    'widgets' => 'Widgets',
    'navigation' => [
        'name' => 'Stato Jobs',
        'plural' => 'Stati Jobs',
        'group' => [
            'name' => 'Sistema',
            'description' => 'Monitoraggio dello stato dei jobs',
        ],
        'label' => 'Stato Jobs',
        'sort' => 73,
        'icon' => 'job-status-animated',
    ],
    'fields' => [
        'name' => ['label' => 'Nome', 'tooltip' => 'Nome del job', 'placeholder' => 'Es. Job di esempio'],
        'guard_name' => ['label' => 'Guard', 'tooltip' => 'Nome del guardiano associato al job', 'placeholder' => 'Es. web'],
        'permissions' => ['label' => 'Permessi', 'tooltip' => 'Permessi richiesti per il job', 'placeholder' => 'Es. admin, user'],
        'updated_at' => ['label' => 'Aggiornato il', 'tooltip' => 'Data e ora dell\'ultimo aggiornamento'],
        'first_name' => ['label' => 'Nome', 'tooltip' => 'Nome dell\'utente'],
        'last_name' => ['label' => 'Cognome', 'tooltip' => 'Cognome dell\'utente'],
        'select_all' => [
            'name' => 'Seleziona Tutti',
            'message' => '',
            'tooltip' => 'Seleziona tutti gli elementi',
            'placeholder' => '',
        ],
    ],
    'actions' => [
        'import' => [
            'fields' => [
                'import_file' => ['label' => 'Seleziona un file XLS o CSV da caricare', 'tooltip' => 'File da caricare con i dati dei jobs'],
            ],
        ],
        'export' => [
            'filename_prefix' => 'Aree al',
            'columns' => [
                'name' => 'Nome area',
                'parent_name' => 'Nome area livello superiore',
            ],
        ],
    ],
    'messages' => [
        'no_jobs' => 'Nessun job disponibile',
        'job_started' => 'Job avviato',
        'job_completed' => 'Job completato',
        'job_failed' => 'Job fallito',
    ],
    'statuses' => [
        'active' => 'Attivo',
        'paused' => 'In Pausa',
        'completed' => 'Completato',
        'failed' => 'Fallito',
    ],
    'types' => [
        'scheduler' => 'Schedulatore',
        'queue' => 'Coda',
        'worker' => 'Worker',
        'monitor' => 'Monitor',
    ],
    'priorities' => [
        'low' => 'Bassa',
        'normal' => 'Normale',
        'high' => 'Alta',
        'urgent' => 'Urgente',
    ],
];
