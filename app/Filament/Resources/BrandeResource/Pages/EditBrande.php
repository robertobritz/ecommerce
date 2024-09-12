<?php

namespace App\Filament\Resources\BrandeResource\Pages;

use App\Filament\Resources\BrandeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBrande extends EditRecord
{
    protected static string $resource = BrandeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
