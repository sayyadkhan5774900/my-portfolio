<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WorkSectionResource\Pages;
use App\Filament\Resources\WorkSectionResource\RelationManagers;
use App\Models\WorkSection;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class WorkSectionResource extends Resource
{
    protected static ?string $model = WorkSection::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('General Information')
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
                        Forms\Components\Grid::make(1)
                            ->schema([
                                Forms\Components\Toggle::make('status')
                                    ->required(),
                            ]),
                    ]),
                Forms\Components\Section::make('Works')
                    ->collapsible()
                    ->collapsed()
                    ->schema([
                        Forms\Components\Repeater::make('works')
                            ->collapsible()
                            ->collapsed()
                            ->itemLabel(fn (array $state): ?string => $state['title'] ?? null)
                            ->schema([
                                Forms\Components\TextInput::make('title')
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('category')
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\FileUpload::make('image    ')
                                    ->image()
                                    ->required()
                                    ->columnSpanFull(),
                                Forms\Components\TextInput::make('link')
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('icon_share')
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('icon_eye')
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('icon_heart')
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('views')
                                    ->required()
                                    ->numeric(),
                                Forms\Components\TextInput::make('likes')
                                    ->required()
                                    ->numeric(),
                            ]),
                    ]),
            ]);
    }
    public static function getPages(): array
    {
        return [
            'index' => Pages\EditWorkSection::route('/'),
          ];
    }
}
