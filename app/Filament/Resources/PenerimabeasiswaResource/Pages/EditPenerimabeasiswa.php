<?php

namespace App\Filament\Resources\PenerimabeasiswaResource\Pages;

use App\Filament\Resources\PenerimabeasiswaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPenerimabeasiswa extends EditRecord
{
    protected static string $resource = PenerimabeasiswaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
