<?php

namespace App\Livewire;

use App\Models\News as ModelsNews;
use Livewire\Component;

class NewsDetail extends Component
{
    public function render($id)
    {
        $newsItem = ModelsNews::where('id', $id)->first();

        return view('livewire.news-detail', compact('newsItem'));
    }
}
