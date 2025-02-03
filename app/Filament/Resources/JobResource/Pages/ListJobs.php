<?php

declare(strict_types=1);

namespace Modules\Job\Filament\Resources\JobResource\Pages;

use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ViewColumn;
use Modules\Job\Filament\Resources\JobResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;
use Filament\Tables\Columns\Column;

class ListJobs extends XotBaseListRecords
{
    protected static string $resource = JobResource::class;

    /**
     * @return array<string, \Filament\Tables\Columns\Column>
     */
    public function getListTableColumns(): array
    {
        return [
            'id' => TextColumn::make('id')
                ->searchable()
                ->sortable(),
            'queue' => TextColumn::make('queue')
                ->searchable()
                ->sortable(),
            'payload' => TextColumn::make('payload')
                ->wrap()
                ->searchable(),
            'attempts' => TextColumn::make('attempts')
                ->numeric()
                ->sortable(),
            'status' => TextColumn::make('status')
                ->badge()
                ->color(fn (string $state): string => match ($state) {
                    'running' => 'primary',
                    'waiting' => 'warning',
                    default => 'danger',
                }),
            'reserved_at' => TextColumn::make('reserved_at')
                ->dateTime()
                ->sortable(),
            'available_at' => TextColumn::make('available_at')
                ->dateTime()
                ->sortable(),
            'created_at' => TextColumn::make('created_at')
                ->dateTime()
                ->sortable(),
            'payload_view' => ViewColumn::make('payload')
                ->view('job::filament.tables.columns.array'),
        ];
    }

    public function getTableFilters(): array
    {
        return [
            \Filament\Tables\Filters\SelectFilter::make('status')
                ->options([
                    'running' => 'Running',
                    'waiting' => 'Waiting',
                    'failed' => 'Failed',
                ]),
            \Filament\Tables\Filters\SelectFilter::make('queue')
                ->options(fn () => \Modules\Job\Models\Job::distinct()->pluck('queue', 'queue')->toArray()),
        ];
    }

    public function getTableActions(): array
    {
        return [
            \Filament\Tables\Actions\ViewAction::make(),
            \Filament\Tables\Actions\DeleteAction::make(),
        ];
    }

    public function getTableBulkActions(): array
    {
        return [
            \Filament\Tables\Actions\DeleteBulkAction::make(),
        ];
    }
}
