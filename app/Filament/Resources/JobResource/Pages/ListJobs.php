<?php

declare(strict_types=1);

namespace Modules\Job\Filament\Resources\JobResource\Pages;

use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ViewColumn;
use Modules\Job\Filament\Resources\JobResource;
use Modules\Xot\Filament\Pages\XotBaseListRecords;

class ListJobs extends XotBaseListRecords
{
    protected static string $resource = JobResource::class;

    public function getListTableColumns(): array
    {
        return [
            TextColumn::make('id')
                ->sortable()
                ->searchable(),
            TextColumn::make('queue'),

            // Tables\Columns\TextColumn::make('payload'),
            TextColumn::make('attempts'),
            TextColumn::make('reserved_at'),
            TextColumn::make('available_at'),
            TextColumn::make('created_at'),
            // Tables\Columns\TextColumn::make('created_by'),
            // Tables\Columns\TextColumn::make('updated_by'),
            // Tables\Columns\TextColumn::make('updated_at'),
            ViewColumn::make('payload')
                ->view('job::filament.tables.columns.array'),
        ];
    }
}
