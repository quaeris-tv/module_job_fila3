<?php

declare(strict_types=1);

namespace Modules\Job\Filament\Resources\JobResource\Pages;

use Filament\Actions\DeleteAction;
use Modules\Job\Filament\Resources\JobResource;

class EditJob extends \Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord
{
    protected static string $resource = JobResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
