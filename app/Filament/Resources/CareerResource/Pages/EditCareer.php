<?php

namespace App\Filament\Resources\CareerResource\Pages;

use App\Filament\Resources\CareerResource;
use Carbon\Carbon;
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\EditRecord;

class EditCareer extends EditRecord
{
    protected static string $resource = CareerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
            Actions\Action::make('unpublish_career')
                ->icon('heroicon-m-star')
                ->color('warning')
                ->requiresConfirmation()
                ->action(function () {
                    $this->record->published_on = null;
                    $this->record->save();
                    Notification::make()
                        ->title('Published career successfully')
                        ->success()
                        ->send();
                })
                ->resetFormData($this->record)
                ->hidden(condition: $this->record->published_on == null),
            Actions\Action::make('publish_career')
                ->icon('heroicon-m-star')
                ->color('success')
                ->requiresConfirmation()
                ->action(function () {
                    $this->record->published_on = Carbon::now();
                    $this->record->save();
                    Notification::make()
                        ->title('Published career successfully')
                        ->success()
                        ->send();
                })
                ->resetFormData($this->record)
                ->hidden(condition: $this->record->published_on != null)
        ];
    }
}
