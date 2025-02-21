<?php

namespace Webkul\Account\Filament\Clusters\Configuration\Resources\FiscalPositionResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Webkul\Account\Filament\Clusters\Configuration\Resources\FiscalPositionResource;

class ListFiscalPositions extends ListRecords
{
    protected static string $resource = FiscalPositionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->icon('heroicon-o-plus-circle'),
        ];
    }
}
