<?php

return [
    'navigation' => [
        'name' => 'Importazione',
        'plural' => 'Importazioni',
        'group' => [
            'name' => 'Sistema',
            'description' => 'Gestione delle importazioni di dati',
        ],
        'label' => 'Importazione Dati',
        'sort' => 10,
        'icon' => 'job-import',
    ],
    'fields' => [
        'file' => 'File',
        'source' => 'Sorgente',
        'format' => 'Formato',
        'rows' => 'Righe',
        'processed' => 'Processate',
        'failed' => 'Fallite',
        'started_at' => 'Iniziato il',
        'completed_at' => 'Completato il',
        'options' => 'Opzioni',
    ],
    'formats' => [
        'csv' => 'CSV',
        'excel' => 'Excel',
        'json' => 'JSON',
        'xml' => 'XML',
    ],
    'options' => [
        'headers' => 'Prima riga contiene intestazioni',
        'delimiter' => 'Delimitatore',
        'encoding' => 'Codifica',
        'sheet' => 'Foglio di lavoro',
        'chunk_size' => 'Dimensione chunk',
    ],
    'actions' => [
        'upload' => 'Carica File',
        'start' => 'Avvia Importazione',
        'download_template' => 'Scarica Template',
        'download_failed' => 'Scarica Righe Fallite',
    ],
    'messages' => [
        'upload_success' => 'File caricato con successo',
        'import_started' => 'Importazione avviata',
        'import_completed' => 'Importazione completata',
        'import_failed' => 'Errore durante l\'importazione',
    ],
];
