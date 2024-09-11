<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SkillSectionResource\Pages;
use App\Filament\Resources\SkillSectionResource\RelationManagers;
use App\Models\SkillSection;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SkillSectionResource extends Resource
{
    protected static ?string $model = SkillSection::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Skills Section';

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
                        Forms\Components\RichEditor::make('description')
                            ->required(),
                        Forms\Components\Toggle::make('status')
                            ->required(),
                    ]),
                Forms\Components\Section::make('Skills')
                    ->schema([
                        Forms\Components\Repeater::make('skills')
                            ->schema([
                                Forms\Components\TextInput::make('name')
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('color')
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('percentage')
                                    ->required()
                                    ->numeric(),
                            ])
                            ->collapsible()
                            ->collapsed()
                            ->itemLabel(fn (array $state): ?string => $state['name'] ?? null)
                    ])
                    ->collapsible()
                    ->collapsed(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\EditSkillSection::route('/'),
        ];
    }
}
