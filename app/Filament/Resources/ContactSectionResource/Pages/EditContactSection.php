<?php

namespace App\Filament\Resources\ContactSectionResource\Pages;

use App\Filament\Resources\ContactSectionResource;
use App\Models\ContactSection;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditContactSection extends EditRecord
{
    protected static string $resource = ContactSectionResource::class;

    public function mount($record = null): void
    {
        $this->record = ContactSection::firstOrFail();
        $this->fillForm();
    }

    protected function fillForm(): void
    {
        $this->form->fill($this->record->toArray());
    }
}
