<?php

namespace App\Filament\Resources\AuthorResource\Pages;

use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\AuthorResource;

class ListAuthors extends ListRecords
{
    protected static string $resource = AuthorResource::class;
}
