<?php

namespace App\Filament\Resources\Blogs\Pages;

use App\Filament\Resources\Blogs\BlogResource;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;

class CreateBlog extends CreateRecord
{
    protected static string $resource = BlogResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getCreatedNotificationTitle(): ?string
    {
        return 'Blog post created successfully!';
    }

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        // Set author_id to current user if not set
        if (empty($data['author_id'])) {
            $data['author_id'] = auth()->id();
        }

        return $data;
    }

    protected function handleRecordCreation(array $data): Model
    {
        $record = parent::handleRecordCreation($data);
        
        // You can add additional logic here after creating the record
        // For example: clear cache, send notifications, etc.
        
        return $record;
    }
}