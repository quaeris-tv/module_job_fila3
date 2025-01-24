<?php

declare(strict_types=1);

namespace Modules\Job\Filament\Resources\ExportResource\Pages;

use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Modules\Job\Filament\Resources\ExportResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;

class ListExports extends XotBaseListRecords
{
    protected static string $resource = ExportResource::class;

    public function getListTableColumns(): array
    {
        return [
            TextColumn::make('id')
                ->searchable()
                ->sortable(),
            TextColumn::make('file_name')
                ->searchable()
                ->sortable()
                ->wrap(),
            TextColumn::make('file_disk')
                ->searchable()
                ->sortable(),
            TextColumn::make('exporter')
                ->searchable()
                ->sortable(),
            TextColumn::make('processed_rows')
                ->numeric()
                ->sortable(),
            TextColumn::make('total_rows')
                ->numeric()
                ->sortable(),
            TextColumn::make('successful_rows')
                ->numeric()
                ->sortable(),
            TextColumn::make('completed_at')
                ->dateTime()
                ->sortable(),
            TextColumn::make('created_at')
                ->dateTime()
                ->sortable(),
            TextColumn::make('updated_at')
                ->dateTime()
                ->sortable(),
        ];
    }

    public function getTableActions(): array
    {
        return [
            EditAction::make()
                ->label(''),
        ];
    }

    public function getTableBulkActions(): array
    {
        return [
            DeleteBulkAction::make(),
        ];
    }
}
