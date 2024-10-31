<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PenerimaBeasiswaResource\Pages;
use App\Models\PenerimaBeasiswa;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\DatePicker;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;

class PenerimaBeasiswaResource extends Resource
{
    protected static ?string $model = PenerimaBeasiswa::class;

    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';

    protected static ?string $navigationLabel = 'Penerima Beasiswa';
    protected static ?string $pluralModelLabel = 'Penerima Beasiswa';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                TextInput::make('nama')
                    ->required()
                    ->label('Nama'),

                DatePicker::make('tanggal_lahir')
                    ->required()
                    ->label('Tanggal Lahir'),

                Textarea::make('alamat')
                    ->required()
                    ->label('Alamat'),

                TextInput::make('jurusan')
                    ->required()
                    ->label('Jurusan'),

                TextInput::make('tahun_angkatan')
                    ->required()
                    ->label('Tahun Angkatan')
                    ->numeric()
                    ->minValue(1900)
                    ->maxValue(date('Y')),
            ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                TextColumn::make('nama')->label('Nama')->sortable()->searchable(),
                TextColumn::make('tanggal_lahir')->label('Tanggal Lahir')->date(),
                TextColumn::make('alamat')->label('Alamat')->limit(50),
                TextColumn::make('jurusan')->label('Jurusan')->sortable()->searchable(),
                TextColumn::make('tahun_angkatan')->label('Tahun Angkatan')->sortable(),
            ])
            ->filters([
                // Tambahkan filter jika diperlukan
            ])
            ->actions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->bulkActions([
                DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPenerimaBeasiswas::route('/'),
            'create' => Pages\CreatePenerimaBeasiswa::route('/create'),
            'edit' => Pages\EditPenerimaBeasiswa::route('/{record}/edit'),
        ];
    }
}
