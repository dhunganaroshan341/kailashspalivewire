<?php

namespace App\Livewire;

use App\Models\News as ModelsNews;
use Livewire\Component;

class NewsDetail extends Component
{
    public $slug; // Property for the slug

    public function mount($slug)
    {
        $this->slug = $slug;
    }

    public function render()
    {
        $newsItem = ModelsNews::where('slug', $this->slug)->firstOrFail();
        $otherPosts = ModelsNews::where('slug', '!=', $this->slug)
            ->orderBy('published_at', 'desc')
            ->take(5) // Adjust the number of other posts as needed
            ->get();

        return view('livewire.news-detail', compact('newsItem', 'otherPosts'));
    }
}

//  older code::

// namespace App\Livewire;

// use App\Models\News as ModelsNews;
// use Livewire\Component;

// class NewsDetail extends Component
// {
//     public $slug; // Add a public property for the slug

//     public function mount($slug)
//     {
//         $this->slug = $slug;
//     }

//     public function render()
//     {
//         $newsItem = ModelsNews::where('slug', $this->slug)->firstOrFail();
//         $otherPosts = ModelsNews::where('slug', '!=', $this->slug)
//             ->orderBy('published_at', 'desc')
//             ->take(5) // Adjust the number of other posts as needed
//             ->get();

//         return view('livewire.news-detail', compact('newsItem', 'otherPosts'));
//     }
// }
