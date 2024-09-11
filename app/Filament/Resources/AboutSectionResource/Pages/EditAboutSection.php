<?php

namespace App\Filament\Resources\AboutSectionResource\Pages;

use App\Filament\Resources\AboutSectionResource;
use Filament\Resources\Pages\EditRecord;
use App\Models\AboutSection;

class EditAboutSection extends EditRecord
{
    protected static string $resource = AboutSectionResource::class;

    public function mount($record = null): void
    {
        $this->record = AboutSection::firstOrFail();
        $this->fillForm();
    }

    protected function fillForm(): void
    {
        $this->form->fill($this->record->toArray());
    }
}
