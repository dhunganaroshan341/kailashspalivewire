<?php

namespace App\Filament\Resources\CustomResource\Pages;

use App\Filament\Resources\CustomResource;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Resources\Pages\Page;

class AboutDescription extends Page implements HasForms
{
    use InteractsWithForms;

    // protected static string $resource = CustomResource::class;
    public ?array $data = [];

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.resources.custom-resource.pages.about-description';

    public function mount(): void
    {
        $this->form->fill();
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                RichEditor::make('description')
                    ->required(),
                FileUpload::make('image')->disk('public')->directory('images'),
            ])
            ->statePath('data');
    }
}
