<?php

namespace App\Livewire\Front;

use App\Models\News as ModelNews;
use Livewire\Component;

class News extends Component
{
    // protected $news = News::all();

    public function render()
    {
        $news = ModelNews::all();

        return view('livewire.news_notice', compact('news'));
    }
}
