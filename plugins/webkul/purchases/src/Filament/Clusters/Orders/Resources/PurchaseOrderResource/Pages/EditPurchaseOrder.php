<?php

namespace Webkul\Purchase\Filament\Clusters\Orders\Resources\PurchaseOrderResource\Pages;

use Webkul\Purchase\Filament\Clusters\Orders\Resources\OrderResource\Pages\EditOrder;
use Webkul\Purchase\Filament\Clusters\Orders\Resources\PurchaseOrderResource;

class EditPurchaseOrder extends EditOrder
{
    protected static string $resource = PurchaseOrderResource::class;
}
