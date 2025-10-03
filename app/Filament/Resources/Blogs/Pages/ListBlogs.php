<?php

namespace App\Filament\Resources\Blogs\Pages;

use App\Filament\Resources\Blogs\BlogResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;   
use Illuminate\Database\Eloquent\Builder;

class ListBlogs extends ListRecords
{
    protected static string $resource = BlogResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make()
                ->label('Create New Blog Post')
                ->icon('heroicon-o-plus'),
        ];
    }

    public function getTabs(): array
    {
        return [
            'all' => Tab::make('All Posts')
                ->badge(fn () => $this->getModel()::count()),
                
            'my_posts' => Tab::make('My Posts')
                ->modifyQueryUsing(fn (Builder $query) => $query->where('author_id', auth()->id()))
                ->badge(fn () => $this->getModel()::where('author_id', auth()->id())->count()),
                
            'recent' => Tab::make('Recent')
                ->modifyQueryUsing(fn (Builder $query) => $query->where('created_at', '>=', now()->subWeek()))
                ->badge(fn () => $this->getModel()::where('created_at', '>=', now()->subWeek())->count()),
        ];
    }

    protected function getTableRecordsPerPageSelectOptions(): array
    {
        return [10, 25, 50, 100];
    }
}