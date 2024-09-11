<?php

namespace App\Filament\Resources\ServiceSectionResource\Pages;

use App\Filament\Resources\ServiceSectionResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageServiceSections extends ManageRecords
{
    protected static string $resource = ServiceSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
