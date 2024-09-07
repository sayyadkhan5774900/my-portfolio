<?php

namespace App\Filament\Resources\AboutSectionResource\Pages;

use App\Filament\Resources\AboutSectionResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageAboutSections extends ManageRecords
{
    protected static string $resource = AboutSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
