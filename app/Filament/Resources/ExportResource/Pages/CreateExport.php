<?php

declare(strict_types=1);

namespace Modules\Job\Filament\Resources\ExportResource\Pages;

use Filament\Resources\Pages\CreateRecord;
use Modules\Job\Filament\Resources\ExportResource;

class CreateExport extends \Modules\Xot\Filament\Resources\Pages\XotBaseCreateRecord
{
    protected static string $resource = ExportResource::class;
}
