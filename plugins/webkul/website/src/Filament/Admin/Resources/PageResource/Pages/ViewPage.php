<?php

namespace Webkul\Website\Filament\Admin\Resources\PageResource\Pages;

use Webkul\Website\Filament\Admin\Resources\PageResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;
use Filament\Notifications\Notification;

class ViewPage extends ViewRecord
{
    protected static string $resource = PageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()
                ->successNotification(
                    Notification::make()
                        ->success()
                        ->title(__('website::filament/admin/resources/page/pages/view-record.header-actions.delete.notification.title'))
                        ->body(__('website::filament/admin/resources/page/pages/view-record.header-actions.delete.notification.body')),
                ),
        ];
    }
}
