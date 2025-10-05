<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use App\Models\Visitor;
use Carbon\Carbon;

class VisitorStatsWidget extends ChartWidget
{
    
    protected int | string | array $columnSpan = 'full';

    public ?string $filter = 'today';

    protected function getData(): array
    {
        $data = $this->getVisitorData();
        
        return [
            'datasets' => [
                [
                    'label' => 'Visitors',
                    'data' => array_values($data),
                    'backgroundColor' => [
                        'rgba(59, 130, 246, 0.1)',
                    ],
                    'borderColor' => [
                        'rgb(59, 130, 246)',
                    ],
                    'borderWidth' => 2,
                    'fill' => true,
                ],
            ],
            'labels' => array_keys($data),
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }

    protected function getFilters(): ?array
    {
        return [
            'today' => 'Today',
            'week' => 'This Week',
            'month' => 'This Month',
            'year' => 'This Year',
        ];
    }

    private function getVisitorData(): array
    {
        $data = [];

        switch ($this->filter) {
            case 'today':
                for ($hour = 0; $hour < 24; $hour++) {
                    $count = Visitor::whereDate('created_at', Carbon::today())
                        ->whereRaw('HOUR(created_at) = ?', [$hour])
                        ->count();
                    $data[sprintf('%02d:00', $hour)] = $count;
                }
                break;

            case 'week':
                for ($day = 0; $day < 7; $day++) {
                    $date = Carbon::now()->startOfWeek()->addDays($day);
                    $count = Visitor::whereDate('created_at', $date)->count();
                    $data[$date->format('D')] = $count;
                }
                break;

            case 'month':
                $daysInMonth = Carbon::now()->daysInMonth;
                for ($day = 1; $day <= $daysInMonth; $day++) {
                    $date = Carbon::now()->startOfMonth()->addDays($day - 1);
                    $count = Visitor::whereDate('created_at', $date)->count();
                    $data[$day] = $count;
                }
                break;

            case 'year':
                for ($month = 1; $month <= 12; $month++) {
                    $count = Visitor::whereMonth('created_at', $month)
                        ->whereYear('created_at', Carbon::now()->year)
                        ->count();
                    $data[Carbon::create()->month($month)->format('M')] = $count;
                }
                break;
        }

        return $data;
    }
}
