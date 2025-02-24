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
        'name' => [
            'label' => 'Nome',
            'tooltip' => 'Nome dell\'esportazione',
            'placeholder' => 'Inserisci il nome dell\'esportazione',
        ],
        'format' => [
            'label' => 'Formato',
            'tooltip' => 'Formato del file esportato',
        ],
        'filters' => [
            'label' => 'Filtri',
            'tooltip' => 'Filtri applicati ai dati',
        ],
        'columns' => [
            'label' => 'Colonne',
            'tooltip' => 'Colonne incluse nell\'esportazione',
        ],
        'total_records' => [
            'label' => 'Totale Record',
        ],
        'status' => [
            'label' => 'Stato',
        ],
        'created_at' => [
            'label' => 'Creato il',
        ],
        'completed_at' => [
            'label' => 'Completato il',
        ],
        'download_url' => [
            'label' => 'URL Download',
        ],
    ],
    'formats' => [
        'csv' => 'CSV',
        'excel' => 'Excel',
        'json' => 'JSON',
        'xml' => 'XML',
        'pdf' => 'PDF',
    ],
    'options' => [
        'include_headers' => [
            'label' => 'Includi intestazioni',
        ],
        'delimiter' => [
            'label' => 'Delimitatore',
        ],
        'encoding' => [
            'label' => 'Codifica',
        ],
        'worksheet_name' => [
            'label' => 'Nome foglio di lavoro',
        ],
        'chunk_size' => [
            'label' => 'Dimensione chunk',
        ],
    ],
    'actions' => [
        'create' => [
            'label' => 'Nuova Esportazione',
            'icon' => 'plus',
            'color' => 'success',
        ],
        'download' => [
            'label' => 'Scarica',
            'icon' => 'download',
            'color' => 'primary',
        ],
        'cancel' => [
            'label' => 'Annulla',
            'icon' => 'times',
            'color' => 'warning',
        ],
        'delete' => [
            'label' => 'Elimina',
            'icon' => 'trash',
            'color' => 'danger',
        ],
    ],
    'messages' => [
        'export_queued' => 'Esportazione in coda',
        'export_processing' => 'Esportazione in corso',
        'export_completed' => 'Esportazione completata',
        'export_failed' => 'Esportazione fallita',
    ],
];