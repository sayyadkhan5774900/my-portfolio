<?php

namespace App\Filament\Resources\SkillSectionResource\Pages;

use App\Filament\Resources\SkillSectionResource;
use App\Models\SkillSection;
use Filament\Resources\Pages\EditRecord;

class EditSkillSection extends EditRecord
{
    protected static string $resource = SkillSectionResource::class;

    public function mount($record = null): void
    {
        $this->record = SkillSection::firstOrFail();
        $this->fillForm();
    }

    protected function fillForm(): void
    {
        $this->form->fill($this->record->toArray());
    }
}
