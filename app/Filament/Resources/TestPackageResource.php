<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TestPackageResource\Pages;
use App\Filament\Resources\TestPackageResource\RelationManagers;
use App\Models\TestPackage;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TestPackageResource extends Resource
{
    protected static ?string $model = TestPackage::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('package_type_id')
                    ->relationship('packageType', 'name')
                    ->preload()
                    ->searchable()
                    ->label(__('testPackage.packageType'))
                    ->required(),
                Forms\Components\Select::make('package_category_id')
                    ->relationship('category', 'name')
                    ->preload()
                    ->label(__('testPackage.category'))
                    ->required(),
                Forms\Components\TextInput::make('name')
                    ->label(__('testPackage.name'))
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('description')
                    ->required()
                    ->label(__('testPackage.description'))
                    ->maxLength(255),
                Forms\Components\TextInput::make('price')
                    ->required()
                    ->label(__('testPackage.price'))
                    ->maxLength(255),
                Forms\Components\ColorPicker::make('theme')
                    ->label(__('testPackage.theme'))
                    ->required(),
                Forms\Components\TextInput::make('icon')
                    ->label(__('testPackage.icon'))
                    ->maxLength(255),
                Forms\Components\Toggle::make('is_public')
                    ->label(__('testPackage.isPublic')),
                Forms\Components\FileUpload::make('image')
                    ->label(__('testPackage.image'))
                    ->image()
                    ->preserveFilenames(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('packageType.name')
                    ->sortable(),
                Tables\Columns\TextColumn::make('category.name')
                    ->sortable(),
                Tables\Columns\TextColumn::make('description')
                    ->searchable(),
                Tables\Columns\TextColumn::make('price')
                    ->searchable(),
                Tables\Columns\TextColumn::make('theme')
                    ->searchable(),
                Tables\Columns\TextColumn::make('icon')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('deleted_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\ForceDeleteBulkAction::make(),
                    Tables\Actions\RestoreBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            RelationManagers\TestsRelationManager::make()
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTestPackages::route('/'),
            'create' => Pages\CreateTestPackage::route('/create'),
            'view' => Pages\ViewTestPackage::route('/{record}'),
            'edit' => Pages\EditTestPackage::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
