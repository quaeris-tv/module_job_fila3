<?php

return [
    'navigation' => [
        'name' => 'Batch Jobs',
        'plural' => 'Batch Jobs',
        'group' => [
            'name' => 'Sistema',
            'description' => 'Gestione dei job batch e delle code di elaborazione',
        ],
        'label' => 'Job Batch',
        'sort' => 10,
        'icon' => 'job-batch-animated',
    ],
    'fields' => [
        'id' => ['label' => 'ID'],
        'name' => ['label' => 'Nome', 'tooltip' => 'Nome del job batch', 'placeholder' => 'Inserisci il nome del job'],
        'total_jobs' => ['label' => 'Jobs Totali', 'tooltip' => 'Numero totale di jobs in questo batch'],
        'pending_jobs' => ['label' => 'Jobs in Attesa', 'tooltip' => 'Numero di jobs in attesa di elaborazione'],
        'failed_jobs' => ['label' => 'Jobs Falliti', 'tooltip' => 'Numero di jobs che sono falliti durante l\'elaborazione'],
        'failed_job_ids' => ['label' => 'ID Jobs Falliti', 'tooltip' => 'Elenco degli ID dei jobs falliti'],
        'options' => ['label' => 'Opzioni', 'tooltip' => 'Opzioni per configurare il batch job'],
        'created_at' => ['label' => 'Creato il', 'tooltip' => 'Data di creazione del job batch'],
        'cancelled_at' => ['label' => 'Cancellato il', 'tooltip' => 'Data di cancellazione del job batch'],
        'finished_at' => ['label' => 'Terminato il', 'tooltip' => 'Data di completamento del job batch'],
        'guard_name' => ['label' => 'Guard', 'tooltip' => 'Tipo di guardia associata'],
        'permissions' => ['label' => 'Permessi', 'tooltip' => 'Permessi associati al job batch'],
        'updated_at' => ['label' => 'Aggiornato il', 'tooltip' => 'Data dell\'ultimo aggiornamento del job batch'],
    ],
    'actions' => [
        'import' => [
            'label' => 'Importa',
            'icon' => 'import-icon',
            'color' => 'primary',
            'fields' => [
                'import_file' => ['label' => 'Seleziona un file XLS o CSV da caricare', 'tooltip' => 'Carica un file per l\'importazione', 'placeholder' => 'Seleziona il file'],
            ],
        ],
        'retry' => [
            'label' => 'Riprova',
            'icon' => 'retry-icon',
            'color' => 'warning',
            'modal' => [
                'heading' => 'Riprova Jobs Falliti',
                'description' => 'Vuoi riprovare ad eseguire i jobs falliti?',
            ],
            'messages' => [
                'success' => 'Jobs riavviati con successo',
            ],
        ],
        'cancel' => [
            'label' => 'Cancella',
            'icon' => 'cancel-icon',
            'color' => 'danger',
            'modal' => [
                'heading' => 'Cancella Batch',
                'description' => 'Sei sicuro di voler cancellare questo batch?',
            ],
            'messages' => [
                'success' => 'Batch cancellato con successo',
            ],
        ],
    ],
    'messages' => [
        'no_failed_jobs' => 'Nessun job fallito',
        'batch_cancelled' => 'Batch cancellato',
        'batch_finished' => 'Batch completato',
        'batch_processing' => 'Batch in elaborazione',
    ],
];
