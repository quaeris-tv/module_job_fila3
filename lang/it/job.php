<<<<<<< HEAD
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
    ],
    'fields' => [
        'id' => 'ID',
        'queue' => 'Coda',
        'payload' => 'Payload',
        'attempts' => 'Tentativi',
        'reserved_at' => 'Riservato il',
        'available_at' => 'Disponibile il',
        'created_at' => 'Creato il',
        'status' => 'Stato',
        'progress' => 'Progresso',
        'type' => 'Tipo',
        'name' => 'Nome',
        'description' => 'Descrizione',
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
        'run' => [
            'label' => 'Esegui',
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
=======
<?php return array (
  'pages' => 'Pagine',
  'widgets' => 'Widgets',
  'navigation' => 
  array (
    'name' => 'Job',
    'plural' => 'Jobs',
    'group' => 
    array (
      'name' => 'Jobs',
      'description' => 'Gestione dei processi in background',
    ),
    'label' => 'jobs',
    'sort' => 2,
  ),
  'fields' => 
  array (
    'id' => 'ID',
    'queue' => 'Coda',
    'payload' => 'Payload',
    'attempts' => 'Tentativi',
    'reserved_at' => 'Riservato il',
    'available_at' => 'Disponibile il',
    'created_at' => 'Creato il',
    'status' => 'Stato',
    'progress' => 'Progresso',
    'type' => 'Tipo',
    'name' => 'Nome',
    'description' => 'Descrizione',
    'guard_name' => 'Guard',
    'permissions' => 'Permessi',
    'updated_at' => 'Aggiornato il',
    'first_name' => 'Nome',
    'last_name' => 'Cognome',
    'select_all' => 
    array (
      'name' => 'Seleziona Tutti',
      'message' => '',
    ),
  ),
  'actions' => 
  array (
    'import' => 
    array (
      'fields' => 
      array (
        'import_file' => 'Seleziona un file XLS o CSV da caricare',
      ),
    ),
    'export' => 
    array (
      'filename_prefix' => 'Aree al',
      'columns' => 
      array (
        'name' => 'Nome area',
        'parent_name' => 'Nome area livello superiore',
      ),
    ),
    'run' => 
    array (
      'label' => 'Esegui',
      'modal' => 
      array (
        'heading' => 'Esegui Job',
        'description' => 'Vuoi eseguire questo job?',
      ),
      'messages' => 
      array (
        'success' => 'Job avviato con successo',
      ),
    ),
    'stop' => 
    array (
      'label' => 'Ferma',
      'modal' => 
      array (
        'heading' => 'Ferma Job',
        'description' => 'Vuoi fermare questo job?',
      ),
      'messages' => 
      array (
        'success' => 'Job fermato con successo',
      ),
    ),
    'delete' => 
    array (
      'label' => 'Elimina',
      'modal' => 
      array (
        'heading' => 'Elimina Job',
        'description' => 'Sei sicuro di voler eliminare questo job?',
      ),
      'messages' => 
      array (
        'success' => 'Job eliminato con successo',
      ),
    ),
  ),
  'messages' => 
  array (
    'no_jobs' => 'Nessun job presente',
    'job_started' => 'Job avviato',
    'job_stopped' => 'Job fermato',
    'job_completed' => 'Job completato',
    'job_failed' => 'Job fallito',
  ),
  'statuses' => 
  array (
    'pending' => 'In Attesa',
    'processing' => 'In Elaborazione',
    'completed' => 'Completato',
    'failed' => 'Fallito',
    'stopped' => 'Fermato',
  ),
  'types' => 
  array (
    'import' => 'Importazione',
    'export' => 'Esportazione',
    'process' => 'Elaborazione',
    'notification' => 'Notifica',
    'cleanup' => 'Pulizia',
  ),
);
>>>>>>> origin/dev
