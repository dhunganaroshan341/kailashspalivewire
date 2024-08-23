<?php

namespace App\Livewire\Front;

use Livewire\Component;

class News extends Component
{
    // protected $news = News::all();

    public function render()
    {
        $news = News::all();

        return view('livewire.news_notice', compact('news'));
    }
}
