<?php

namespace App\Filament\Resources\KaifResource\Pages;

use App\Filament\Resources\KaifResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKaifs extends ListRecords
{
    protected static string $resource = KaifResource::class;

    protected function getHeaderActions(): array
    {
        return [
            //ctions\CreateAction::make(),
        ];
    }
}
