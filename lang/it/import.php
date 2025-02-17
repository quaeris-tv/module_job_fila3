<?php return array (
  'navigation' => 
  array (
    'name' => 'Importazione',
    'plural' => 'Importazioni',
    'group' => 
    array (
      'name' => 'Sistema',
      'description' => 'Gestione delle importazioni di dati',
    ),
    'label' => 'Importazione Dati',
    'sort' => 51,
    'icon' => 'job-import',
  ),
  'fields' => 
  array (
    'file' => 'File',
    'source' => 'Sorgente',
    'format' => 'Formato',
    'rows' => 'Righe',
    'processed' => 'Processate',
    'failed' => 'Fallite',
    'started_at' => 'Iniziato il',
    'completed_at' => 'Completato il',
    'options' => 'Opzioni',
  ),
  'formats' => 
  array (
    'csv' => 'CSV',
    'excel' => 'Excel',
    'json' => 'JSON',
    'xml' => 'XML',
  ),
  'options' => 
  array (
    'headers' => 'Prima riga contiene intestazioni',
    'delimiter' => 'Delimitatore',
    'encoding' => 'Codifica',
    'sheet' => 'Foglio di lavoro',
    'chunk_size' => 'Dimensione chunk',
  ),
  'actions' => 
  array (
    'upload' => 'Carica File',
    'start' => 'Avvia Importazione',
    'download_template' => 'Scarica Template',
    'download_failed' => 'Scarica Righe Fallite',
  ),
  'messages' => 
  array (
    'upload_success' => 'File caricato con successo',
    'import_started' => 'Importazione avviata',
    'import_completed' => 'Importazione completata',
    'import_failed' => 'Errore durante l\'importazione',
  ),
);