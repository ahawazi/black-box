<?php

namespace App\Filament\Clusters\CreateProducts\Resources\CategoryResource\Pages;

use App\Filament\Clusters\CreateProducts\Resources\CategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCategory extends EditRecord
{
    protected static string $resource = CategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
