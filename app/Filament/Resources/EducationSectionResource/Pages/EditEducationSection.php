<?php

namespace App\Filament\Resources\EducationSectionResource\Pages;

use App\Filament\Resources\EducationSectionResource;
use App\Models\EducationSection;
use Filament\Resources\Pages\EditRecord;

class EditEducationSection extends EditRecord
{
    protected static string $resource = EducationSectionResource::class;

    public function mount($record = null): void
    {
        $this->record = EducationSection::firstOrFail();
        $this->fillForm();
    }

    protected function fillForm(): void
    {
        $this->form->fill($this->record->toArray());
    }
}
