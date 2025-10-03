<?php

namespace App\Filament\Resources\Blogs\Pages;

use App\Filament\Resources\Blogs\BlogResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Database\Eloquent\Model;

class EditBlog extends EditRecord
{
    protected static string $resource = BlogResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make()
                ->label('View Blog')
                ->icon('heroicon-o-eye'),
            DeleteAction::make()
                ->label('Delete Blog')
                ->icon('heroicon-o-trash'),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getSavedNotificationTitle(): ?string
    {
        return 'Blog post updated successfully!';
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        // Add any data mutations before saving
        $data['updated_at'] = now();
        
        return $data;
    }

    protected function handleRecordUpdate(Model $record, array $data): Model
    {
        $record = parent::handleRecordUpdate($record, $data);
        
        // You can add additional logic here after updating the record
        // For example: clear cache, send notifications, etc.
        
        return $record;
    }
}