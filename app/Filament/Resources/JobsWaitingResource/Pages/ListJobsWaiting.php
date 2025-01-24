<?php

declare(strict_types=1);

/**
 * ---.
 */

namespace Modules\Job\Filament\Resources\JobsWaitingResource\Pages;

use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Columns\TextColumn;
use Modules\Job\Filament\Resources\JobsWaitingResource;
use Modules\Job\Filament\Resources\JobsWaitingResource\Widgets\JobsWaitingOverview;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;

class ListJobsWaiting extends XotBaseListRecords
{
    public static string $resource = JobsWaitingResource::class;

    public function getHeaderActions(): array
    {
        return [];
    }

    public function getHeaderWidgets(): array
    {
        return [
            JobsWaitingOverview::class,
        ];
    }

    public function getTitle(): string
    {
        return __('jobs::translations.title');
    }

    public function getTableActions(): array
    {
        return [];
    }

    public function getTableBulkActions(): array
    {
        return [
            DeleteBulkAction::make(),
        ];
    }

    public function getGridTableColumns(): array
    {
        return [];
    }

    public function getListTableColumns(): array
    {
        return [
            TextColumn::make('id')
                ->searchable()
                ->sortable(),
            TextColumn::make('queue')
                ->searchable()
                ->sortable(),
            TextColumn::make('display_name')
                ->searchable()
                ->sortable()
                ->wrap(),
            TextColumn::make('status')
                ->badge()
<<<<<<< HEAD:Filament/Resources/JobsWaitingResource/Pages/ListJobsWaiting.php
<<<<<<< Updated upstream
<<<<<<< HEAD
                
=======
>>>>>>> origin/v0.2.10
=======
<<<<<<< Updated upstream
                
=======
                )
>>>>>>> Stashed changes
>>>>>>> Stashed changes
=======
>>>>>>> origin/dev:app/Filament/Resources/JobsWaitingResource/Pages/ListJobsWaiting.php
                ->sortable()
                ->color(
                    static fn (string $state): string => match ($state) {
                        'running' => 'primary',
                        'waiting' => 'success',
                        'failed' => 'danger',
                        default => 'secondary',
                    }
                ),
<<<<<<< HEAD:Filament/Resources/JobsWaitingResource/Pages/ListJobsWaiting.php
            TextColumn::make('display_name')
<<<<<<< Updated upstream
<<<<<<< HEAD
=======
<<<<<<< Updated upstream
>>>>>>> Stashed changes
                
                ->sortable(),
            TextColumn::make('queue')
                
                ->sortable(),
=======
>>>>>>> origin/dev:app/Filament/Resources/JobsWaitingResource/Pages/ListJobsWaiting.php
            TextColumn::make('attempts')
                ->numeric()
                ->sortable(),
            TextColumn::make('available_at')
                ->dateTime()
                ->sortable(),
            TextColumn::make('reserved_at')
                ->dateTime()
                ->sortable(),
            TextColumn::make('created_at')
<<<<<<< HEAD:Filament/Resources/JobsWaitingResource/Pages/ListJobsWaiting.php
                
=======
<<<<<<< Updated upstream
                ->sortable(),
            TextColumn::make('queue')
                ->sortable(),
            TextColumn::make('attempts')
                ->sortable(),
            TextColumn::make('reserved_at')
                ->since()
                ->sortable(),
            TextColumn::make('created_at')
>>>>>>> origin/v0.2.10
=======
                )
                ->sortable(),
            TextColumn::make('queue')
                )
                ->sortable(),
            TextColumn::make('attempts')
                )
                ->sortable(),
            TextColumn::make('reserved_at')
                )
                ->since()
                ->sortable(),
            TextColumn::make('created_at')
                )
>>>>>>> Stashed changes
>>>>>>> Stashed changes
                ->since()
=======
                ->dateTime()
                ->sortable(),
            TextColumn::make('updated_at')
                ->dateTime()
>>>>>>> origin/dev:app/Filament/Resources/JobsWaitingResource/Pages/ListJobsWaiting.php
                ->sortable(),
        ];
    }
}
