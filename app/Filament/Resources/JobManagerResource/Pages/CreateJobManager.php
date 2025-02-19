<?php

/**
 * --.
 */

declare(strict_types=1);

namespace Modules\Job\Filament\Resources\JobManagerResource\Pages;

use Filament\Resources\Pages\CreateRecord;
use Modules\Job\Filament\Resources\JobManagerResource;

class CreateJobManager extends \Modules\Xot\Filament\Resources\Pages\XotBaseCreateRecord
{
    protected static string $resource = JobManagerResource::class;
}
