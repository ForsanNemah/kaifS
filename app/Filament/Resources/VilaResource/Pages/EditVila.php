<?php

namespace App\Filament\Resources\VilaResource\Pages;

use App\Filament\Resources\VilaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditVila extends EditRecord
{
    protected static string $resource = VilaResource::class;

    protected function getHeaderActions(): array
    {
        return [
           // Actions\DeleteAction::make(),
        ];
    }
}
