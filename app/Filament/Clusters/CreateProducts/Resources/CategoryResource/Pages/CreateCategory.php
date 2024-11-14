<?php

namespace App\Filament\Clusters\CreateProducts\Resources\CategoryResource\Pages;

use App\Filament\Clusters\CreateProducts\Resources\CategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateCategory extends CreateRecord
{
    protected static string $resource = CategoryResource::class;
}
