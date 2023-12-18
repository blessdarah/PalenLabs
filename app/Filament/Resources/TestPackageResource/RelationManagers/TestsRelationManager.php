<?php

namespace App\Filament\Resources\TestPackageResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Collection;

class TestsRelationManager extends RelationManager
{
    protected static string $relationship = 'tests';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('lab_test_id')
                    ->relationship('labTest', 'name')
                    ->preload()
                    ->searchable()
                    ->required(),
                Forms\Components\Select::make('gender')
                    ->options([
                        'all' => 'All',
                        'male' => 'Male only',
                        'female' => 'Female only'
                    ])
                ->required(),
                Forms\Components\Textarea::make('comment')
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('test_package_id')
            ->columns([
                Tables\Columns\TextColumn::make('labTest.name')->label("Lab test"),
                Tables\Columns\TextColumn::make('gender'),
                Tables\Columns\TextColumn::make('comment'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
            ]);
    }
}
