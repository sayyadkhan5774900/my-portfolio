<?php

namespace App\Filament\Resources\ServiceSectionResource\Pages;

use App\Filament\Resources\ServiceSectionResource;
use App\Models\ServiceSection;
use Filament\Resources\Pages\EditRecord;

class EditServiceSection extends EditRecord
{
    protected static string $resource = ServiceSectionResource::class;

    public function mount($record = null): void
    {
        $this->record = ServiceSection::firstOrFail();
        $this->fillForm();
    }

    protected function fillForm(): void
    {
        $this->form->fill($this->record->toArray());
    }
}
