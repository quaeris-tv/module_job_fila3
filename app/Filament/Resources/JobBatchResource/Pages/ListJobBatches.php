<?php

/**
 * @see https://gitlab.com/amvisor/filament-failed-jobs/-/blob/master/src/resources/JobBatchesResource/Pages/ListJobBatches.php?ref_type=heads
 */

declare(strict_types=1);

namespace Modules\Job\Filament\Resources\JobBatchResource\Pages;

use Filament\Actions\Action;
use Filament\Notifications\Notification;
use Filament\Tables;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Support\Facades\Artisan;
use Modules\Job\Filament\Resources\JobBatchResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;
use Webmozart\Assert\Assert;

class ListJobBatches extends XotBaseListRecords
{
    protected static string $resource = JobBatchResource::class;

    /**
     * @return array<string, Tables\Columns\Column>
     */
    public function getListTableColumns(): array
    {
        Assert::string($date_format = config('app.date_format'), '['.__LINE__.']['.class_basename(__CLASS__).']');

        return [
            'id' => TextColumn::make('id')
                ->searchable()
                ->sortable()
                ->copyable(),
            'name' => TextColumn::make('name')
                ->searchable()
                ->sortable()
                ->wrap(),
            'total_jobs' => TextColumn::make('total_jobs')
                ->numeric()
                ->sortable(),
            'pending_jobs' => TextColumn::make('pending_jobs')
                ->numeric()
                ->sortable(),
            'failed_jobs' => TextColumn::make('failed_jobs')
                ->numeric()
                ->sortable(),
            'progress' => TextColumn::make('progress')
                ->formatStateUsing(fn ($record) => $record->progress().'%')
                ->sortable(),
            'failed_job_ids' => TextColumn::make('failed_job_ids')
                ->wrap()
                ->searchable()
                ->limit(50),
            'options' => TextColumn::make('options')
                ->wrap()
                ->searchable(),
            'cancelled_at' => TextColumn::make('cancelled_at')
                ->dateTime($date_format)
                ->sortable(),
            'created_at' => TextColumn::make('created_at')
                ->dateTime($date_format)
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
            'finished_at' => TextColumn::make('finished_at')
                ->dateTime($date_format)
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
        ];
    }

    /**
     * @return array<string, Tables\Actions\Action|Tables\Actions\ActionGroup>
     */
    public function getTableActions(): array
    {
        return [];
    }

    /**
     * @return array<string, Tables\Actions\BulkAction>
     */
    public function getTableBulkActions(): array
    {
        return [
            'delete' => DeleteBulkAction::make(),
        ];
    }

    /**
     * @return array<Action>
     */
    protected function getHeaderActions(): array
    {
        return [
            Action::make('prune_batches')
                ->requiresConfirmation()
                ->color('danger')
                ->action(
                    static function (): void {
                        Artisan::call('queue:prune-batches');
                        Notification::make()
                            ->title('All batches have been pruned.')
                            ->success()
                            ->send();
                    }
                ),
        ];
    }
}
