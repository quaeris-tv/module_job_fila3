<?php return array (
  'pages' => 'Pagine',
  'widgets' => 'Widgets',
  'navigation' => 
  array (
    'name' => 'Jobs in Attesa',
    'plural' => 'Jobs in Attesa',
    'group' => 
    array (
      'name' => 'Jobs',
      'description' => 'Gestione dei jobs in attesa di esecuzione',
    ),
    'label' => 'jobs in attesa',
    'sort' => 8,
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
    'priority' => 'Priorità',
    'type' => 'Tipo',
    'name' => 'Nome',
    'description' => 'Descrizione',
    'delay' => 'Ritardo',
    'timeout' => 'Timeout',
    'tags' => 'Tags',
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
    'process' => 
    array (
      'label' => 'Processa',
      'modal' => 
      array (
        'heading' => 'Processa Job',
        'description' => 'Vuoi processare questo job in attesa?',
      ),
      'messages' => 
      array (
        'success' => 'Job processato con successo',
      ),
    ),
    'cancel' => 
    array (
      'label' => 'Cancella',
      'modal' => 
      array (
        'heading' => 'Cancella Job',
        'description' => 'Vuoi cancellare questo job in attesa?',
      ),
      'messages' => 
      array (
        'success' => 'Job cancellato con successo',
      ),
    ),
    'retry' => 
    array (
      'label' => 'Riprova',
      'modal' => 
      array (
        'heading' => 'Riprova Job',
        'description' => 'Vuoi riprovare questo job?',
      ),
      'messages' => 
      array (
        'success' => 'Job riprovato con successo',
      ),
    ),
  ),
  'messages' => 
  array (
    'no_jobs' => 'Nessun job in attesa',
    'job_processed' => 'Job processato',
    'job_cancelled' => 'Job cancellato',
    'job_retried' => 'Job riprovato',
  ),
  'statuses' => 
  array (
    'waiting' => 'In Attesa',
    'reserved' => 'Riservato',
    'delayed' => 'Ritardato',
    'ready' => 'Pronto',
  ),
  'priorities' => 
  array (
    'low' => 'Bassa',
    'normal' => 'Normale',
    'high' => 'Alta',
    'urgent' => 'Urgente',
  ),
  'types' => 
  array (
    'default' => 'Default',
    'scheduled' => 'Schedulato',
    'recurring' => 'Ricorrente',
    'batch' => 'Batch',
  ),
);