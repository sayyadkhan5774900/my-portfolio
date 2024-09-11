<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ExperienceSectionResource\Pages;
use App\Filament\Resources\ExperienceSectionResource\RelationManagers;
use App\Models\ExperienceSection;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ExperienceSectionResource extends Resource
{
    protected static ?string $model = ExperienceSection::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Experience Section';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make()
                    ->schema([
                        Forms\Components\Grid::make(2)
                            ->schema([
                                Forms\Components\TextInput::make('heading_meta')
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('heading')
                                    ->required()
                                    ->maxLength(255),
                            ]),
                        Forms\Components\Toggle::make('status')
                            ->required(),
                    ]),
                Forms\Components\Section::make('Experiences')
                    ->collapsible()
                    ->collapsed()
                    ->schema([
                        Forms\Components\Repeater::make('experiences')
                            ->collapsible()
                            ->collapsed()
                            ->itemLabel(fn (array $state): ?string => $state['title'] ?? null)
                            ->schema([
                                Forms\Components\TextInput::make('title')
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('company')
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('duration')
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\Textarea::make('description')
                                    ->required(),
                                Forms\Components\TextInput::make('icon')
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('color')
                                    ->required()
                                    ->maxLength(255),
                            ])
                    ]),
            ]);
    }
    public static function getPages(): array
    {
        return [
            'index' => Pages\EditExperienceSection::route('/'),
        ];
    }
}
