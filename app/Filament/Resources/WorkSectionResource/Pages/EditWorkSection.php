<?php

namespace App\Filament\Resources\WorkSectionResource\Pages;

use App\Filament\Resources\WorkSectionResource;
use App\Models\WorkSection;
use Filament\Resources\Pages\EditRecord;

class EditWorkSection extends EditRecord
{
    protected static string $resource = WorkSectionResource::class;

    public function mount($record = null): void
    {
        $this->record = WorkSection::firstOrFail();
        $this->fillForm();
    }

    protected function fillForm(): void
    {
        $this->form->fill($this->record->toArray());
    }
}
