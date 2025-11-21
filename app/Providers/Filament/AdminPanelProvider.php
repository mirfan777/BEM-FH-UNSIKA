<?php

namespace App\Providers\Filament;

use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\AuthenticateSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Pages\Dashboard;
use App\Filament\Resources\Blogs\BlogResource;
use App\Filament\Resources\Divisions\DivisionResource;
use App\Filament\Resources\Members\MemberResource;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Widgets\AccountWidget;
use Filament\Widgets\FilamentInfoWidget;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Filament\Navigation\NavigationGroup;
use Filament\Navigation\NavigationItem;
use Filament\Navigation\NavigationBuilder;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->login()
            ->brandName('BEM FH Unsika - Pragya Dharma')
            ->colors([
                'primary' => Color::Amber,
            ])
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\Filament\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\Filament\Pages')
            ->pages([
                Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\Filament\Widgets')
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ])
            ->navigation(function (NavigationBuilder $builder): NavigationBuilder {
                return $builder
                    ->items([
                        NavigationItem::make('Dashboard')
                            ->icon('heroicon-o-home')
                            ->isActiveWhen(fn (): bool => request()->routeIs('filament.admin.pages.dashboard'))
                            ->url(fn (): string => Dashboard::getUrl()),
                    ])
                    ->items([
                        NavigationItem::make('Blog')
                            ->label('Kegiatan')
                            ->isActiveWhen(fn (): bool => request()->routeIs('filament.admin.resources.blogs.*'))
                            ->icon('heroicon-o-newspaper')
                            ->url(fn (): string => BlogResource::getUrl()),
                    ])
                    ->groups([
                        NavigationGroup::make()
                            ->label('Struktur Organisasi')
                            ->items([
                                NavigationItem::make('Division')
                                    ->label('Division')
                                    ->isActiveWhen(fn (): bool => request()->routeIs('filament.admin.resources.divisions.*'))
                                    ->icon('heroicon-o-building-office-2')
                                    ->url(fn (): string => DivisionResource::getUrl()),
                                NavigationItem::make('Member')
                                    ->label('Member')
                                    ->isActiveWhen(fn (): bool => request()->routeIs('filament.admin.resources.members.*'))
                                    ->icon('heroicon-o-user-group')
                                    ->url(fn (): string => MemberResource::getUrl()),
                            ]),
                    ])
                    ->groups([
                        NavigationGroup::make()
                            ->label('Pengaturan')
                            ->items([
                                NavigationItem::make('SiteProfile')
                                ->label('Profil Situs')
                                ->isActiveWhen(fn (): bool => request()->routeIs('filament.admin.pages.manage-site-profile'))
                                ->icon('heroicon-o-cog-6-tooth')
                                ->url(fn (): string => \App\Filament\Pages\ManageSiteProfile::getUrl()),
                            ]),
                        ]);
            
            });
    }
}
