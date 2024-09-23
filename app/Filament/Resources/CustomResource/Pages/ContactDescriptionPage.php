<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class ContactDescriptionPage extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-pencil-alt';  // You can change the icon here

    protected static ?string $navigationLabel = 'Home Contact Description';    // Menu label

    protected static string $view = 'filament.pages.contact-description'; // View that will be rendered

    // Define the slug/route to access the page in the admin panel
    protected static ?string $slug = 'contact-description';

    // Optionally set the order in which this appears in the navigation menu
    protected static ?int $navigationSort = 1;

    // Optionally restrict this page to certain roles or permissions
    //     protected static function shouldRegisterNavigation(): bool
    //     {
    //         return true;
    //     }
}
