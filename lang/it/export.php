<?php

return [
    'navigation' => [
        'name' => 'Esportazione',
        'plural' => 'Esportazioni',
        'group' => [
            'name' => 'Sistema',
            'description' => 'Gestione delle esportazioni di dati',
        ],
        'label' => 'Esportazione Dati',
        'sort' => 97,
        'icon' => 'job-export',
    ],
    'fields' => [
        'name' => 'Nome',
        'format' => 'Formato',
        'filters' => 'Filtri',
        'columns' => 'Colonne',
        'total_records' => 'Totale Record',
        'status' => 'Stato',
        'created_at' => 'Creato il',
        'completed_at' => 'Completato il',
        'download_url' => 'URL Download',
    ],
    'formats' => [
        'csv' => 'CSV',
        'excel' => 'Excel',
        'json' => 'JSON',
        'xml' => 'XML',
        'pdf' => 'PDF',
    ],
    'options' => [
        'include_headers' => 'Includi intestazioni',
        'delimiter' => 'Delimitatore',
        'encoding' => 'Codifica',
        'worksheet_name' => 'Nome foglio di lavoro',
        'chunk_size' => 'Dimensione chunk',
    ],
    'actions' => [
        'create' => 'Nuova Esportazione',
        'download' => 'Scarica',
        'cancel' => 'Annulla',
        'delete' => 'Elimina',
    ],
    'messages' => [
        'export_queued' => 'Esportazione in coda',
        'export_processing' => 'Esportazione in corso',
        'export_completed' => 'Esportazione completata',
        'export_failed' => 'Esportazione fallita',
    ],
];
