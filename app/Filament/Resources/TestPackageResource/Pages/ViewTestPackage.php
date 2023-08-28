<?php

namespace App\Filament\Resources\TestPackageResource\Pages;

use App\Filament\Resources\TestPackageResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewTestPackage extends ViewRecord
{
    protected static string $resource = TestPackageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
