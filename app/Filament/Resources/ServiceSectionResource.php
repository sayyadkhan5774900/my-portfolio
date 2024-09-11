<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ServiceSectionResource\Pages;
use App\Filament\Resources\ServiceSectionResource\RelationManagers;
use App\Models\ServiceSection;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ServiceSectionResource extends Resource
{
    protected static ?string $model = ServiceSection::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Services Section';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('heading_meta')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('heading')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Toggle::make('status')
                    ->label('Active')
                    ->default(true),
                Forms\Components\Section::make('Services')
                    ->schema([
                        Forms\Components\Repeater::make('services')
                            ->schema([
                                Forms\Components\TextInput::make('title')
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('icon')
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('color_class')
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\RichEditor::make('description'),
                            ])
                            ->collapsible()
                            ->collapsed()
                            ->itemLabel(fn(array $state): ?string => $state['title'] ?? null)
                    ])
                    ->collapsible()
                    ->collapsed(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\EditServiceSection::route('/'),
        ];
    }

    public static function canCreate(): bool
    {
        return false;
    }
}
