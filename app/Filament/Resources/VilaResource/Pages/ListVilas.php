<?php

namespace App\Filament\Resources\VilaResource\Pages;

use App\Filament\Resources\VilaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListVilas extends ListRecords
{
    protected static string $resource = VilaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            //Actions\CreateAction::make(),
        ];
    }
}
