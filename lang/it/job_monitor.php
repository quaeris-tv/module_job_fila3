<?php 

return [
    'pages' => 'Pagine',
    'widgets' => 'Widgets',
    'navigation' => [
        'name' => 'Monitor Jobs',
        'plural' => 'Monitor Jobs',
        'group' => [
            'name' => 'Sistema',
            'description' => 'Gestione e monitoraggio dei jobs di sistema',
        ],
        'label' => 'Monitor Jobs',
        'sort' => 72,
        'icon' => 'job-monitor-animated',
    ],
    'fields' => [
        'name' => ['label' => 'Nome', 'tooltip' => 'Inserisci il nome del job', 'placeholder' => 'Es. Job di esempio'],
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
        'source' => ['label' => 'Sorgente', 'tooltip' => 'Specifica la sorgente da cui proviene il job', 'placeholder' => 'Es. database, API'],
    ],
    'actions' => [
        'retry' => [
            'label' => 'Riprova',
            'modal' => [
                'heading' => 'Riprova Jobs Falliti',
                'description' => 'Vuoi riprovare ad eseguire i jobs falliti?',
            ],
            'messages' => [
                'success' => 'Jobs riavviati con successo',
            ],
            'icon' => 'retry-icon',
            'color' => 'green',
            'tooltip' => 'Riprova i jobs che sono falliti',
        ],
        'cancel' => [
            'label' => 'Cancella',
            'modal' => [
                'heading' => 'Cancella Job',
                'description' => 'Sei sicuro di voler cancellare questo job?',
            ],
            'messages' => [
                'success' => 'Job cancellato con successo',
            ],
            'icon' => 'cancel-icon',
            'color' => 'red',
            'tooltip' => 'Cancella il job selezionato',
        ],
        'pause' => [
            'label' => 'Pausa',
            'modal' => [
                'heading' => 'Metti in Pausa',
                'description' => 'Vuoi mettere in pausa questo job?',
            ],
            'messages' => [
                'success' => 'Job messo in pausa con successo',
            ],
            'icon' => 'pause-icon',
            'color' => 'yellow',
            'tooltip' => 'Metti il job in pausa',
        ],
        'resume' => [
            'label' => 'Riprendi',
            'modal' => [
                'heading' => 'Riprendi Job',
                'description' => 'Vuoi riprendere l\'esecuzione di questo job?',
            ],
            'messages' => [
                'success' => 'Job ripreso con successo',
            ],
            'icon' => 'resume-icon',
            'color' => 'blue',
            'tooltip' => 'Riprendi l\'esecuzione del job',
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
