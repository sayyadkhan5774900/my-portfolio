<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EducationSectionResource\Pages;
use App\Filament\Resources\EducationSectionResource\RelationManagers;
use App\Models\EducationSection;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EducationSectionResource extends Resource
{
    protected static ?string $model = EducationSection::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

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
                                    ->maxLength(255)
                                    ->columnSpan(1),
                                Forms\Components\TextInput::make('heading')
                                    ->required()
                                    ->maxLength(255)
                                    ->columnSpan(1),
                            ]),
                        Forms\Components\Toggle::make('status')
                            ->required()
                            ->columnSpan(1),
                    ]),
                Forms\Components\Section::make('Educations')
                    ->schema([
                        Forms\Components\Repeater::make('educations')
                            ->schema([
                                Forms\Components\TextInput::make('degree')
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('field')
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\RichEditor::make('description'),
                            ])
                            ->collapsible()
                            ->collapsed()
                            ->itemLabel(fn (array $state): ?string => $state['degree'] ?? null)
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
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageEducationSections::route('/'),
        ];
    }
}
