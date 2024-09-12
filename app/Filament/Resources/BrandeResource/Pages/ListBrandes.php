<?php

namespace App\Filament\Resources\BrandeResource\Pages;

use App\Filament\Resources\BrandeResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBrandes extends ListRecords
{
    protected static string $resource = BrandeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
