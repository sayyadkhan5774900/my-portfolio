<?php

namespace App\Filament\Resources\SkillSectionResource\Pages;

use App\Filament\Resources\SkillSectionResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageSkillSections extends ManageRecords
{
    protected static string $resource = SkillSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
