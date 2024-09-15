<?php

namespace App\Providers;

use Filament\Facades\Filament;
use Illuminate\Support\ServiceProvider;

class FilamentServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
        // Filament::navigationGroup('About Page')
        //     ->icon('heroicon-o-document'); // Icon for the navigation group
        // Filament::navigationGroup('Brands Page')
        //     ->icon('heroicon-o-document'); // Icon for the navigation group
        // Filament::navigationGroup('contact Page')
        //     ->icon('heroicon-o-document'); // Icon for the navigation group
        // Filament::navigationGroup('Gallery Page')
        //     ->icon('heroicon-o-document'); // Icon for the navigation group
        // Filament::navigationGroup('Home Control')
        //     ->icon('heroicon-o-document'); // Icon for the navigation group
        // Filament::navigationGroup('Blog')
        //     ->icon('heroicon-o-document'); // Icon for the navigation group
    }
}
