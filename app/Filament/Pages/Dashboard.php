<?php

namespace App\Filament\Pages;

use Filament\Pages\Dashboard as BaseDashboard;


class Dashboard extends BaseDashboard
{

    protected function getHeaderWidgets(): array
    {
        return [
            \App\Filament\Widgets\VisitorStatsWidget::class,
            \App\Filament\Widgets\ContactFormSubmission::class,
        ];
    }
    
}