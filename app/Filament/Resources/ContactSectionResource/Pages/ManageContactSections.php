<?php

namespace App\Filament\Resources\ContactSectionResource\Pages;

use App\Filament\Resources\ContactSectionResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageContactSections extends ManageRecords
{
    protected static string $resource = ContactSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
