<?php

namespace App\Livewire;

use App\Models\AboutSection;
use App\Models\BannerSlider;
use App\Models\BrandJourney;
use App\Models\Contact;
use App\Models\HomeContactSectionDescription;
use App\Models\MileStone;
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

    public $contactDescriptions;

    public function mount()
    {
        // Fetch data
        $this->banners = BannerSlider::all();
        $this->about = AboutSection::first();
        $this->brands = BrandJourney::all();
        $this->testimonials = TestimonialSection::all();
        $this->commitments = OurCommitment::all();
        $this->milestones = MileStone::all();
        $this->news = News::latest()->get();
        $this->contacts = Contact::all();
        $this->contactDescriptions = HomeContactSectionDescription::firstOrFail();
    }

    public function render()
    {

        return view('livewire.home');
    }
}
