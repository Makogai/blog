<?php

namespace App\Filament\Resources\AuthorResource\Pages;

use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\AuthorResource;

class EditAuthor extends EditRecord
{
    protected static string $resource = AuthorResource::class;
}
