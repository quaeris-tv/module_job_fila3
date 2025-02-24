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
        'file' => [
            'label' => 'File',
            'tooltip' => 'Seleziona il file da importare',
            'placeholder' => 'Carica un file',
        ],
        'source' => [
            'label' => 'Sorgente',
            'tooltip' => 'Indica la sorgente da cui proviene il file',
            'placeholder' => 'Es. Sito web, Database',
        ],
        'format' => [
            'label' => 'Formato',
            'tooltip' => 'Formato del file da importare',
            'placeholder' => 'Seleziona il formato',
        ],
        'rows' => [
            'label' => 'Righe',
            'tooltip' => 'Numero di righe nel file',
            'placeholder' => 'Conto righe',
        ],
        'processed' => [
            'label' => 'Processate',
            'tooltip' => 'Righe correttamente importate',
            'placeholder' => '0',
        ],
        'failed' => [
            'label' => 'Fallite',
            'tooltip' => 'Righe non riuscite nell\'importazione',
            'placeholder' => '0',
        ],
        'started_at' => [
            'label' => 'Iniziato il',
            'tooltip' => 'Data e ora di inizio dell\'importazione',
            'placeholder' => 'Non iniziato',
        ],
        'completed_at' => [
            'label' => 'Completato il',
            'tooltip' => 'Data e ora di completamento dell\'importazione',
            'placeholder' => 'Non completato',
        ],
        'options' => [
            'label' => 'Opzioni',
            'tooltip' => 'Impostazioni opzionali per il file',
        ],
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
        'upload' => [
            'label' => 'Carica File',
            'icon' => 'upload',
            'color' => 'primary',
            'tooltip' => 'Carica il file da importare',
            'placeholder' => 'Seleziona un file da caricare',
        ],
        'start' => [
            'label' => 'Avvia Importazione',
            'icon' => 'play',
            'color' => 'success',
            'tooltip' => 'Avvia l\'importazione dei dati',
            'placeholder' => 'Avvia',
        ],
        'download_template' => [
            'label' => 'Scarica Template',
            'icon' => 'download',
            'color' => 'secondary',
            'tooltip' => 'Scarica un template di esempio',
            'placeholder' => 'Scarica template',
        ],
        'download_failed' => [
            'label' => 'Scarica Righe Fallite',
            'icon' => 'warning',
            'color' => 'danger',
            'tooltip' => 'Scarica il file delle righe fallite',
            'placeholder' => 'Scarica errori',
        ],
    ],
    'messages' => [
        'upload_success' => 'File caricato con successo',
        'import_started' => 'Importazione avviata',
        'import_completed' => 'Importazione completata',
        'import_failed' => 'Errore durante l\'importazione',
    ],
];
