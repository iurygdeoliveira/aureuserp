<?php

namespace Webkul\Invoice\Filament\Clusters\Vendors\Resources;

use Webkul\Invoice\Filament\Clusters\Vendors;
use Webkul\Invoice\Filament\Clusters\Vendors\Resources\BillsResource\Pages;
use Filament\Tables\Table;
use Webkul\Account\Filament\Clusters\Customer\Resources\InvoiceResource as BaseInvoiceResource;

class BillsResource extends BaseInvoiceResource
{
    protected static ?string $navigationIcon = 'heroicon-o-credit-card';

    protected static bool $shouldRegisterNavigation = true;

    protected static ?int $navigationSort = 1;

    protected static ?string $cluster = Vendors::class;

    public static function getNavigationGroup(): ?string
    {
        return null;
    }

    public static function getModelLabel(): string
    {
        return __('Bills');
    }

    public static function getNavigationLabel(): string
    {
        return __('Bills');
    }

    public static function table(Table $table): Table
    {
        return BaseInvoiceResource::table($table);
    }

    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListBills::route('/'),
            'create' => Pages\CreateBills::route('/create'),
            'edit'   => Pages\EditBills::route('/{record}/edit'),
        ];
    }
}
