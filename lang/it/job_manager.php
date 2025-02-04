<<<<<<< HEAD
<?php

return [
    'pages' => 'Pagine',
    'widgets' => 'Widgets',
    'navigation' => [
        'name' => 'Job Manager',
        'plural' => 'Job Managers',
        'group' => [
            'name' => 'Jobs',
            'description' => 'Gestione avanzata dei processi',
        ],
        'label' => 'job manager',
        'sort' => 68,
    ],
    'fields' => [
        'id' => 'ID',
        'name' => 'Nome',
        'description' => 'Descrizione',
        'status' => 'Stato',
        'type' => 'Tipo',
        'priority' => 'Priorità',
        'max_attempts' => 'Tentativi Massimi',
        'timeout' => 'Timeout',
        'created_at' => 'Creato il',
        'updated_at' => 'Aggiornato il',
        'last_run' => 'Ultima Esecuzione',
        'next_run' => 'Prossima Esecuzione',
        'cron_expression' => 'Espressione Cron',
        'output' => 'Output',
        'error' => 'Errore',
        'guard_name' => 'Guard',
        'permissions' => 'Permessi',
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
                'heading' => 'Esegui Job Manager',
                'description' => 'Vuoi eseguire questo job manager?',
            ],
            'messages' => [
                'success' => 'Job manager avviato con successo',
            ],
        ],
        'pause' => [
            'label' => 'Pausa',
            'modal' => [
                'heading' => 'Metti in Pausa',
                'description' => 'Vuoi mettere in pausa questo job manager?',
            ],
            'messages' => [
                'success' => 'Job manager messo in pausa con successo',
            ],
        ],
        'resume' => [
            'label' => 'Riprendi',
            'modal' => [
                'heading' => 'Riprendi Esecuzione',
                'description' => 'Vuoi riprendere l\'esecuzione di questo job manager?',
            ],
            'messages' => [
                'success' => 'Job manager ripreso con successo',
            ],
        ],
        'delete' => [
            'label' => 'Elimina',
            'modal' => [
                'heading' => 'Elimina Job Manager',
                'description' => 'Sei sicuro di voler eliminare questo job manager?',
            ],
            'messages' => [
                'success' => 'Job manager eliminato con successo',
            ],
        ],
    ],
    'messages' => [
        'no_jobs' => 'Nessun job manager presente',
        'manager_started' => 'Job manager avviato',
        'manager_paused' => 'Job manager in pausa',
        'manager_resumed' => 'Job manager ripreso',
        'manager_completed' => 'Job manager completato',
        'manager_failed' => 'Job manager fallito',
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
=======
<?php return array (
  'pages' => 'Pagine',
  'widgets' => 'Widgets',
  'navigation' => 
  array (
    'name' => 'Job Manager',
    'plural' => 'Job Managers',
    'group' => 
    array (
      'name' => 'Jobs',
      'description' => 'Gestione avanzata dei processi',
    ),
    'label' => 'job manager',
    'sort' => 54,
  ),
  'fields' => 
  array (
    'id' => 'ID',
    'name' => 'Nome',
    'description' => 'Descrizione',
    'status' => 'Stato',
    'type' => 'Tipo',
    'priority' => 'Priorità',
    'max_attempts' => 'Tentativi Massimi',
    'timeout' => 'Timeout',
    'created_at' => 'Creato il',
    'updated_at' => 'Aggiornato il',
    'last_run' => 'Ultima Esecuzione',
    'next_run' => 'Prossima Esecuzione',
    'cron_expression' => 'Espressione Cron',
    'output' => 'Output',
    'error' => 'Errore',
    'guard_name' => 'Guard',
    'permissions' => 'Permessi',
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
        'heading' => 'Esegui Job Manager',
        'description' => 'Vuoi eseguire questo job manager?',
      ),
      'messages' => 
      array (
        'success' => 'Job manager avviato con successo',
      ),
    ),
    'pause' => 
    array (
      'label' => 'Pausa',
      'modal' => 
      array (
        'heading' => 'Metti in Pausa',
        'description' => 'Vuoi mettere in pausa questo job manager?',
      ),
      'messages' => 
      array (
        'success' => 'Job manager messo in pausa con successo',
      ),
    ),
    'resume' => 
    array (
      'label' => 'Riprendi',
      'modal' => 
      array (
        'heading' => 'Riprendi Esecuzione',
        'description' => 'Vuoi riprendere l\'esecuzione di questo job manager?',
      ),
      'messages' => 
      array (
        'success' => 'Job manager ripreso con successo',
      ),
    ),
    'delete' => 
    array (
      'label' => 'Elimina',
      'modal' => 
      array (
        'heading' => 'Elimina Job Manager',
        'description' => 'Sei sicuro di voler eliminare questo job manager?',
      ),
      'messages' => 
      array (
        'success' => 'Job manager eliminato con successo',
      ),
    ),
  ),
  'messages' => 
  array (
    'no_jobs' => 'Nessun job manager presente',
    'manager_started' => 'Job manager avviato',
    'manager_paused' => 'Job manager in pausa',
    'manager_resumed' => 'Job manager ripreso',
    'manager_completed' => 'Job manager completato',
    'manager_failed' => 'Job manager fallito',
  ),
  'statuses' => 
  array (
    'active' => 'Attivo',
    'paused' => 'In Pausa',
    'completed' => 'Completato',
    'failed' => 'Fallito',
  ),
  'types' => 
  array (
    'scheduler' => 'Schedulatore',
    'queue' => 'Coda',
    'worker' => 'Worker',
    'monitor' => 'Monitor',
  ),
  'priorities' => 
  array (
    'low' => 'Bassa',
    'normal' => 'Normale',
    'high' => 'Alta',
    'urgent' => 'Urgente',
  ),
);
>>>>>>> origin/dev
