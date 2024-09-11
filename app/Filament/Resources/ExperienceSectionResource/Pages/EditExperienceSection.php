<?php

namespace App\Filament\Resources\ExperienceSectionResource\Pages;

use App\Filament\Resources\ExperienceSectionResource;
use App\Models\ExperienceSection;
use Filament\Resources\Pages\EditRecord;

class EditExperienceSection extends EditRecord
{
    protected static string $resource = ExperienceSectionResource::class;

    public function mount($record = null): void
    {
        $this->record = ExperienceSection::firstOrFail();
        $this->fillForm();
    }

    protected function fillForm(): void
    {
        $this->form->fill($this->record->toArray());
    }
}
