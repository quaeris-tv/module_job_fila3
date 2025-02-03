<?php

declare(strict_types=1);

namespace Modules\Job\Filament\Resources;

use Modules\Job\Filament\Resources\JobResource\Pages;
use Modules\Job\Filament\Resources\JobResource\Widgets;
use Modules\Job\Models\Job;
use Modules\Xot\Filament\Resources\XotBaseResource;

class JobResource extends XotBaseResource
{
    protected static ?string $model = Job::class;

    protected static ?string $navigationIcon = 'heroicon-o-circle-stack';

    protected static ?string $recordTitleAttribute = 'name';

    public static function getFormSchema(): array
    {
        return [
            \Filament\Forms\Components\TextInput::make('queue')
                ->required()
                ->maxLength(255),
            \Filament\Forms\Components\TextInput::make('payload')
                ->required(),
            \Filament\Forms\Components\TextInput::make('attempts')
                ->numeric()
                ->required(),
            \Filament\Forms\Components\DateTimePicker::make('available_at')
                ->required(),
            \Filament\Forms\Components\DateTimePicker::make('created_at')
                ->required(),
        ];
    }

    public static function getRelations(): array
    {
        return [
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListJobs::route('/'),
            'create' => Pages\CreateJob::route('/create'),
            'board' => Pages\BoardJobs::route('/board'),
            'edit' => Pages\EditJob::route('/{record}/edit'),
        ];
    }

    public static function getWidgets(): array
    {
        return [
            Widgets\JobStatsOverview::class,
        ];
    }
}
