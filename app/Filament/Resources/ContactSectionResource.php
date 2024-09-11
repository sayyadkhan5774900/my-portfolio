<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContactSectionResource\Pages;
use App\Filament\Resources\ContactSectionResource\RelationManagers;
use App\Models\ContactSection;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ContactSectionResource extends Resource
{
    protected static ?string $model = ContactSection::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Contact Section';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('heading_meta')
                    ->required(),
                Forms\Components\TextInput::make('heading')
                    ->required(),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->required(),
                Forms\Components\TextInput::make('address')
                    ->required(),
                Forms\Components\TextInput::make('phone')
                    ->tel()
                    ->required(),
                Forms\Components\Toggle::make('status')
                    ->inline(false)
                    ->required(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\EditContactSection::route('/'),
        ];
    }
}
