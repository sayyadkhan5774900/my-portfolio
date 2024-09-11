<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CounterSectionResource\Pages;
use App\Filament\Resources\CounterSectionResource\RelationManagers;
use App\Models\CounterSection;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CounterSectionResource extends Resource
{
    protected static ?string $model = CounterSection::class;

    protected static ?string $navigationLabel = 'Counters Section';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

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
                Forms\Components\FileUpload::make('background_image')
                    ->image()
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\Toggle::make('status')
                    ->label('Active')
                    ->default(true),
                Forms\Components\Section::make('Counter Information')
                    ->schema([
                        Forms\Components\Repeater::make('counters')
                            ->schema([
                                Forms\Components\TextInput::make('label')
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('icon')
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('data_to')
                                    ->required()
                                    ->numeric(),
                                Forms\Components\TextInput::make('data_speed')
                                    ->required()
                                    ->numeric(),
                                Forms\Components\TextInput::make('data_refresh_interval')
                                    ->required()
                                    ->numeric(),
                            ])
                            ->collapsible()
                            ->collapsed()
                            ->itemLabel(fn(array $state): ?string => $state['label'] ?? null)
                    ])
                    ->collapsible()
                    ->collapsed(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\EditCounterSection::route('/'),
        ];
    }
}
