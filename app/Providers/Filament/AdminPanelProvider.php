<?php

namespace App\Providers\Filament;

use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Pages;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Widgets;
use Firefly\FilamentBlog\Blog;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\AuthenticateSession;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Rmsramos\Activitylog\ActivitylogPlugin;
use Schmeits\FilamentUmami\FilamentUmamiPlugin;
use Solutionforest\FilamentScaffold\FilamentScaffoldPlugin;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->plugins([FilamentScaffoldPlugin::make(),
                ActivitylogPlugin::make(),
                FilamentUmamiPlugin::make(),
                Blog::make(),
            ]
            )
            ->default()
            ->id('admin')
            ->path('admin')
            ->login()
            ->colors([
                'primary' => Color::Amber,
            ])
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\\Filament\\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\\Filament\\Pages')
            // ->pages([
            //     Pages\Dashboard::class,
            // ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\\Filament\\Widgets')
            ->widgets([
                // Widgets\AccountWidget::class,
                // Widgets\FilamentInfoWidget::class,
                // this is the grouped stats widget
                // \Schmeits\FilamentUmami\Widgets\UmamiWidgetStatsGrouped::class,

                // these are the separate stats widgets
                // \Schmeits\FilamentUmami\Widgets\UmamiWidgetStatsLiveVisitors::class,
                // \Schmeits\FilamentUmami\Widgets\UmamiWidgetStatsPageViews::class,
                // \Schmeits\FilamentUmami\Widgets\UmamiWidgetStatsVisitors::class,
                // \Schmeits\FilamentUmami\Widgets\UmamiWidgetStatsVisits::class,
                // \Schmeits\FilamentUmami\Widgets\UmamiWidgetStatsBounces::class,
                // \Schmeits\FilamentUmami\Widgets\UmamiWidgetStatsTotalTime::class,

                // // and some table widgets
                // \Schmeits\FilamentUmami\Widgets\UmamiWidgetTableUrls::class,
                // \Schmeits\FilamentUmami\Widgets\UmamiWidgetTableTitle::class,
                // \Schmeits\FilamentUmami\Widgets\UmamiWidgetTableReferrers::class,
                // \Schmeits\FilamentUmami\Widgets\UmamiWidgetTableCountry::class,
                // \Schmeits\FilamentUmami\Widgets\UmamiWidgetTableRegion::class,
                // \Schmeits\FilamentUmami\Widgets\UmamiWidgetTableCity::class,
                // \Schmeits\FilamentUmami\Widgets\UmamiWidgetTableDevice::class,
                // \Schmeits\FilamentUmami\Widgets\UmamiWidgetTableOs::class,
                // \Schmeits\FilamentUmami\Widgets\UmamiWidgetTableBrowser::class,
                // \Schmeits\FilamentUmami\Widgets\UmamiWidgetTableLanguage::class,
                // \Schmeits\FilamentUmami\Widgets\UmamiWidgetTableScreen::class,
                // \Schmeits\FilamentUmami\Widgets\UmamiWidgetTableEvents::class,
                // \Schmeits\FilamentUmami\Widgets\UmamiWidgetTableQuery::class,

                // grouped table widgets
                // \Schmeits\FilamentUmami\Widgets\UmamiWidgetTableGroupedPages::class,
                // \Schmeits\FilamentUmami\Widgets\UmamiWidgetTableGroupedGeo::class,
                // \Schmeits\FilamentUmami\Widgets\UmamiWidgetTableGroupedClientInfo::class,

                // chart widgets
                // \Schmeits\FilamentUmami\Widgets\UmamiWidgetGraphPageViews::class,
                // \Schmeits\FilamentUmami\Widgets\UmamiWidgetGraphSessions::class,
                // \Schmeits\FilamentUmami\Widgets\UmamiWidgetGraphEvents::class,
            ])
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
            ]);
    }
}
