<?php

namespace App\Filament\Resources\EducationSectionResource\Pages;

use App\Filament\Resources\EducationSectionResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageEducationSections extends ManageRecords
{
    protected static string $resource = EducationSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
