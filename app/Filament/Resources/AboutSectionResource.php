<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AboutSectionResource\Pages;
use App\Filament\Resources\AboutSectionResource\RelationManagers;
use App\Models\AboutSection;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AboutSectionResource extends Resource
{
    protected static ?string $model = AboutSection::class;

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
                Forms\Components\Section::make('Description')
                    ->schema([
                        Forms\Components\RichEditor::make('description')
                            ->required(),
                    ]),
                Forms\Components\Section::make('Hire Information')
                    ->schema([
                        Forms\Components\RichEditor::make('hire_heading')
                            ->required(),
                        Forms\Components\Grid::make(2)
                            ->schema([
                                Forms\Components\TextInput::make('hire_button_text')
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('hire_button_link')
                                    ->required()
                                    ->maxLength(255),
                            ]),
                    ]),
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
                            ])
                            ->minItems(1)
                            ->maxItems(10)
                            ->collapsible(),
                    ])
                    ->collapsible()
                    ->collapsed(),
            ]);
    }


    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('heading_meta')
                    ->searchable(),
                Tables\Columns\TextColumn::make('heading')
                    ->searchable(),
                Tables\Columns\TextColumn::make('hire_heading')
                    ->searchable(),
                Tables\Columns\TextColumn::make('hire_button_text')
                    ->searchable(),
                Tables\Columns\TextColumn::make('hire_button_link')
                    ->searchable(),
                Tables\Columns\IconColumn::make('status')
                    ->boolean(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageAboutSections::route('/'),
        ];
    }

    public static function canCreate(): bool
    {
        return false;
    }
}
