<?php

namespace App\Filament\Resources\CounterSectionResource\Pages;

use App\Filament\Resources\CounterSectionResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageCounterSections extends ManageRecords
{
    protected static string $resource = CounterSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
