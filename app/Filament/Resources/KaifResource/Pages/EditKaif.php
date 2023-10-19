<?php

namespace App\Filament\Resources\KaifResource\Pages;

use App\Filament\Resources\KaifResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKaif extends EditRecord
{
    protected static string $resource = KaifResource::class;

    protected function getHeaderActions(): array
    {
        return [
            //Actions\DeleteAction::make(),
        ];
    }
}
