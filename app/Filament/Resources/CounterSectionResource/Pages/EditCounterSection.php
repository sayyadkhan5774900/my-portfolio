<?php

namespace App\Filament\Resources\CounterSectionResource\Pages;

use App\Filament\Resources\CounterSectionResource;
use App\Models\CounterSection;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCounterSection extends EditRecord
{
    protected static string $resource = CounterSectionResource::class;

    public function mount($record = null): void
    {
        $this->record = CounterSection::firstOrFail();
        $this->fillForm();
    }

    protected function fillForm(): void
    {
        $this->form->fill($this->record->toArray());
    }
}
