<?php

namespace Webkul\Invoice\Filament\Clusters\Configuration\Resources\FiscalPositionResource\Pages;

use Webkul\Invoice\Filament\Clusters\Configuration\Resources\FiscalPositionResource;
use Webkul\Account\Filament\Clusters\Configuration\Resources\FiscalPositionResource\Pages\CreateFiscalPosition as BaseCreateFiscalPosition;

class CreateFiscalPosition extends BaseCreateFiscalPosition
{
    protected static string $resource = FiscalPositionResource::class;
}
