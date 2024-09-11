<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HeroSectionResource\Pages;
use App\Filament\Resources\HeroSectionResource\RelationManagers;
use App\Models\HeroSection;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class HeroSectionResource extends Resource
{
    protected static ?string $model = HeroSection::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Hero Section';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\RichEditor::make('subtitle')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\Grid::make(3)
                    ->schema([
                        Forms\Components\TextInput::make('button_text')
                            ->required(),
                        Forms\Components\TextInput::make('button_icon')
                            ->required(),
                        Forms\Components\TextInput::make('button_link')
                            ->required(),
                    ]),
                Forms\Components\FileUpload::make('background_image')
                    ->image()
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\Toggle::make('status')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->html(),
                Tables\Columns\TextColumn::make('subtitle')
                    ->searchable()
                    ->html(),
                Tables\Columns\TextColumn::make('button_text')
                    ->searchable(),
                Tables\Columns\TextColumn::make('button_icon')
                    ->searchable(),
                Tables\Columns\TextColumn::make('button_link')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('background_image'),
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
            'index' => Pages\ManageHeroSections::route('/'),
        ];
    }
}
