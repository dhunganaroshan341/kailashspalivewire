<?php

namespace App\Livewire;

use App\Models\AboutSection;
use App\Models\BannerSlider;
use App\Models\Brand;
use App\Models\Contact;
use App\Models\Milestone;
use App\Models\News;
use App\Models\OurCommitment;
use App\Models\TestimonialSection;
use Livewire\Component;

class Home extends Component
{
    public $banners;

    public $about;

    public $brands;

    public $testimonials;

    public $commitments;

    public $milestones;

    public $news;

    public $contacts;

    public function mount()
    {
        // Fetch data
        $this->banners = BannerSlider::all();
        $this->about = AboutSection::first();
        $this->brands = Brand::all();
        $this->testimonials = TestimonialSection::all();
        $this->commitments = OurCommitment::all();
        $this->milestones = Milestone::all();
        $this->news = News::latest()->get();
        $this->contacts = Contact::all();
    }

    public function render()
    {
        return view('livewire.home');
    }
}
