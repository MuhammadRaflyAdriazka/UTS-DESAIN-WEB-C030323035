<?php

namespace App\Filament\Resources\PenerimabeasiswaResource\Pages;

use App\Filament\Resources\PenerimabeasiswaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPenerimabeasiswas extends ListRecords
{
    protected static string $resource = PenerimabeasiswaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
