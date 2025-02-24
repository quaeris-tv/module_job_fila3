<?php

return [
    'navigation' => [
        'name' => 'Scheduler',
        'plural' => 'Scheduler',
        'group' => [
            'name' => 'Sistema',
            'description' => 'Gestione dei jobs programmati',
        ],
        'label' => 'Job Scheduler',
        'sort' => 82,
        'icon' => 'job-schedule-animated',
    ],
    'fields' => [
        'name' => [
            'label' => 'Nome',
            'tooltip' => 'Inserisci il nome del job schedulato',
            'placeholder' => 'Es. Backup Database',
        ],
        'guard_name' => [
            'label' => 'Guard',
            'tooltip' => 'Seleziona il guard di riferimento per il job',
            'placeholder' => 'Es. web',
        ],
        'permissions' => [
            'label' => 'Permessi',
            'tooltip' => 'Seleziona i permessi per il job schedulato',
            'placeholder' => 'Es. admin, user',
        ],
        'command' => [
            'label' => 'Comando',
            'tooltip' => 'Inserisci il comando da eseguire',
            'placeholder' => 'Es. php artisan migrate',
        ],
        'arguments' => [
            'label' => 'Argomenti',
            'tooltip' => 'Specifica gli argomenti per il comando',
            'placeholder' => 'Es. --force',
        ],
        'options' => [
            'label' => 'Opzioni',
            'tooltip' => 'Specifica le opzioni per il comando',
            'placeholder' => 'Es. --quiet',
        ],
        'expression' => [
            'label' => 'Espressione Cron',
            'tooltip' => 'Definisci l\'espressione cron per l\'esecuzione del job',
            'placeholder' => 'Es. * * * * *',
        ],
        'log_filename' => [
            'label' => 'Nome del Log',
            'tooltip' => 'Nome del file di log per il job',
            'placeholder' => 'Es. job.log',
        ],
        'output' => [
            'label' => 'Output',
            'tooltip' => 'Visualizza l\'output del comando',
            'placeholder' => 'Es. Successo/Errore',
        ],
        'status' => [
            'label' => 'Stato',
            'tooltip' => 'Seleziona lo stato del job',
            'placeholder' => 'Es. Attivo, Inattivo',
        ],
        'created_at' => [
            'label' => 'Creato il',
            'tooltip' => 'Data di creazione del job',
        ],
        'updated_at' => [
            'label' => 'Ultimo aggiornamento',
            'tooltip' => 'Data dell\'ultimo aggiornamento del job',
        ],
        'environments' => [
            'label' => 'Ambienti',
            'tooltip' => 'Seleziona gli ambienti per l\'esecuzione del job',
            'placeholder' => 'Es. produzione, sviluppo',
        ],
    ],
    'actions' => [
        'inactivate' => [
            'label' => 'Inattivare',
            'tooltip' => 'Inattiva il job schedulato',
            'icon' => 'icon-inactive',
            'color' => 'text-red-600',
        ],
        'activate' => [
            'label' => 'Attivare',
            'tooltip' => 'Attiva il job schedulato',
            'icon' => 'icon-active',
            'color' => 'text-green-600',
        ],
        'history' => [
            'label' => 'Storico',
            'tooltip' => 'Visualizza lo storico delle esecuzioni',
            'icon' => 'icon-history',
            'color' => 'text-blue-600',
        ],
        'run' => [
            'label' => 'Esegui Ora',
            'modal' => [
                'heading' => 'Esegui Schedule',
                'description' => 'Vuoi eseguire questo schedule ora?',
            ],
            'messages' => [
                'success' => 'Schedule eseguito con successo',
            ],
            'tooltip' => 'Esegui il job schedulato immediatamente',
            'icon' => 'icon-play',
            'color' => 'text-yellow-600',
        ],
        'delete' => [
            'label' => 'Elimina',
            'modal' => [
                'heading' => 'Elimina Schedule',
                'description' => 'Sei sicuro di voler eliminare questo schedule?',
            ],
            'messages' => [
                'success' => 'Schedule eliminato con successo',
            ],
            'tooltip' => 'Elimina il job schedulato',
            'icon' => 'icon-trash',
            'color' => 'text-gray-600',
        ],
    ],
    'validation' => [
        'cron' => 'Il campo deve essere compilato nel formato di espressione cron.',
        'regex' => 'Il campo :attribute deve contenere solo lettere, numeri, trattini e underscore. È consentita anche la virgola.',
    ],
    'messages' => [
        'no-records-found' => 'Nessun record trovato.',
        'save-success' => 'Dati salvati con successo.',
        'save-error' => 'Errore nel salvataggio dei dati.',
        'timezone' => 'Tutti gli schedule saranno eseguiti nel fuso orario: ',
    ],
    'frequencies' => [
        'everyMinute' => 'Ogni Minuto',
        'everyFiveMinutes' => 'Ogni 5 Minuti',
        'everyTenMinutes' => 'Ogni 10 Minuti',
        'everyFifteenMinutes' => 'Ogni 15 Minuti',
        'everyThirtyMinutes' => 'Ogni 30 Minuti',
        'hourly' => 'Ogni Ora',
        'daily' => 'Ogni Giorno',
        'weekly' => 'Ogni Settimana',
        'monthly' => 'Ogni Mese',
        'quarterly' => 'Ogni Trimestre',
        'yearly' => 'Ogni Anno',
    ],
    'days' => [
        'sunday' => 'Domenica',
        'monday' => 'Lunedì',
        'tuesday' => 'Martedì',
        'wednesday' => 'Mercoledì',
        'thursday' => 'Giovedì',
        'friday' => 'Venerdì',
        'saturday' => 'Sabato',
    ],
    'cron' => [
        'help' => [
            'title' => 'Aiuto Espressioni Cron',
            'minute' => 'Minuto (0-59)',
            'hour' => 'Ora (0-23)',
            'day_of_month' => 'Giorno del Mese (1-31)',
            'month' => 'Mese (1-12)',
            'day_of_week' => 'Giorno della Settimana (0-6)',
            'examples' => [
                'every_minute' => '* * * * * - Ogni minuto',
                'every_hour' => '0 * * * * - Ogni ora',
                'every_day' => '0 0 * * * - Ogni giorno a mezzanotte',
                'every_monday' => '0 0 * * 1 - Ogni lunedì a mezzanotte',
            ],
        ],
    ],
];
