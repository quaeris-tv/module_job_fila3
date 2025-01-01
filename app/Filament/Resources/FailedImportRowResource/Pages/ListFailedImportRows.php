<?php

declare(strict_types=1);

namespace Modules\Job\Filament\Resources\FailedImportRowResource\Pages;

use Filament\Tables\Columns\TextColumn;
use Modules\Job\Filament\Resources\FailedImportRowResource;
use Modules\Xot\Filament\Pages\XotBaseListRecords;

class ListFailedImportRows extends XotBaseListRecords
{
    protected static string $resource = FailedImportRowResource::class;

    public function getListTableColumns(): array
    {
        return [
            TextColumn::make('id'),
            TextColumn::make('data'),
            TextColumn::make('import_id'),
            TextColumn::make('validation_error'),
        ];
    }
}
