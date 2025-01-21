<?php return array (
  'pages' => 'Pagine',
  'widgets' => 'schedule',
  'navigation' => 
  array (
    'name' => 'Schedulatore',
    'plural' => 'Schedulatori',
    'group' => 
    array (
      'name' => 'Jobs',
      'description' => 'Gestione dei job schedulati',
    ),
    'label' => 'schedulatore',
    'sort' => 24,
  ),
  'resource' => 
  array (
    'single' => 'Schedule',
    'plural' => 'Schedules',
    'navigation' => 'Settings',
    'history' => 'Show run history',
  ),
  'fields' => 
  array (
    'name' => 'Nome',
    'guard_name' => 'Guard',
    'permissions' => 'Permessi',
    'first_name' => 'Nome',
    'last_name' => 'Cognome',
    'select_all' => 
    array (
      'name' => 'Seleziona Tutti',
      'message' => '',
    ),
    'command' => 'Command',
    'arguments' => 'Arguments',
    'options' => 'Options',
    'options_with_value' => 'Options with Value',
    'expression' => 'Cron Expression',
    'log_filename' => 'Log filename',
    'output' => 'Output',
    'even_in_maintenance_mode' => 'Even in maintenance mode',
    'without_overlapping' => 'Without overlapping',
    'on_one_server' => 'Execute scheduling only on one server',
    'webhook_before' => 'URL Before',
    'webhook_after' => 'URL After',
    'email_output' => 'Email for sending output',
    'sendmail_success' => 'Send email in case of success to execute the command',
    'sendmail_error' => 'Send email in case of failure to execute the command',
    'log_success' => 'Write command output into history table in case of success to execute the command',
    'log_error' => 'Write command output into history table in case of failure to execute the command',
    'status' => 'Status',
    'actions' => 'Actions',
    'data-type' => 'Data type',
    'run_in_background' => 'Run in background',
    'created_at' => 'Created At',
    'updated_at' => 'Updated At',
    'never' => 'Never',
    'environments' => 'Environments',
    'id' => 'ID',
    'description' => 'Descrizione',
    'parameters' => 'Parametri',
    'timezone' => 'Fuso Orario',
    'last_run' => 'Ultima Esecuzione',
    'next_run' => 'Prossima Esecuzione',
    'error' => 'Errore',
    'run_in_maintenance' => 'Esegui in Manutenzione',
  ),
  'messages' => 
  array (
    'no-records-found' => 'No records found.',
    'save-success' => 'Data saved successfully.',
    'save-error' => 'Error saving data.',
    'timezone' => 'All schedules will be executed in the timezone: ',
    'select' => 'Select a command',
    'custom' => 'Custom Command',
    'custom-command-here' => 'Custom Command here (e.g. `cat /proc/cpuinfo` or `artisan db:migrate`)',
    'help-cron-expression' => 'If necessary click here and use a tool to facilitate the creation of the cron expression',
    'help-log-filename' => 'If log file is set, the log messages from this cron are written to storage/logs/<log filename>.log',
    'help-type' => 'Multiple :type can be specified separated by commas',
    'attention-type-function' => 'ATTENTION: parameters of the type \'function\' are executed before the execution of the scheduling and its return is passed as parameter. Use with care, it can break your job',
    'delete_cronjob' => 'Delete cronjob',
    'delete_cronjob_confirm' => 'Do you really want to delete the cronjob ":cronjob"?',
    'no_schedules' => 'Nessuno schedule presente',
    'schedule_started' => 'Schedule avviato',
    'schedule_completed' => 'Schedule completato',
    'schedule_failed' => 'Schedule fallito',
    'invalid_expression' => 'Espressione cron non valida',
  ),
  'status' => 
  array (
    'active' => 'Active',
    'inactive' => 'Inactive',
    'trashed' => 'Trashed',
    'running' => 'In Esecuzione',
    'failed' => 'Fallito',
  ),
  'buttons' => 
  array (
    'inactivate' => 'Inactivate',
    'activate' => 'Activate',
    'history' => 'History',
    'run' => 
    array (
      'label' => 'Esegui Ora',
      'modal' => 
      array (
        'heading' => 'Esegui Schedule',
        'description' => 'Vuoi eseguire questo schedule ora?',
      ),
      'messages' => 
      array (
        'success' => 'Schedule eseguito con successo',
      ),
    ),
    'toggle' => 
    array (
      'label' => 'Attiva/Disattiva',
      'modal' => 
      array (
        'heading' => 'Modifica Stato',
        'description' => 'Vuoi modificare lo stato di questo schedule?',
      ),
      'messages' => 
      array (
        'success' => 'Stato modificato con successo',
      ),
    ),
    'delete' => 
    array (
      'label' => 'Elimina',
      'modal' => 
      array (
        'heading' => 'Elimina Schedule',
        'description' => 'Sei sicuro di voler eliminare questo schedule?',
      ),
      'messages' => 
      array (
        'success' => 'Schedule eliminato con successo',
      ),
    ),
  ),
  'validation' => 
  array (
    'cron' => 'The field must be filled in the cron expression format.',
    'regex' => 'The :attribute field must only contain letters, numbers, dashes, and underscores. Comma is also allowed.',
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
  ),
  'frequencies' => 
  array (
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
  ),
  'days' => 
  array (
    'sunday' => 'Domenica',
    'monday' => 'Lunedì',
    'tuesday' => 'Martedì',
    'wednesday' => 'Mercoledì',
    'thursday' => 'Giovedì',
    'friday' => 'Venerdì',
    'saturday' => 'Sabato',
  ),
  'cron' => 
  array (
    'help' => 
    array (
      'title' => 'Aiuto Espressioni Cron',
      'minute' => 'Minuto (0-59)',
      'hour' => 'Ora (0-23)',
      'day_of_month' => 'Giorno del Mese (1-31)',
      'month' => 'Mese (1-12)',
      'day_of_week' => 'Giorno della Settimana (0-6)',
      'examples' => 
      array (
        'every_minute' => '* * * * * - Ogni minuto',
        'every_hour' => '0 * * * * - Ogni ora',
        'every_day' => '0 0 * * * - Ogni giorno a mezzanotte',
        'every_monday' => '0 0 * * 1 - Ogni lunedì a mezzanotte',
      ),
    ),
  ),
);