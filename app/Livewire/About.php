<?php

namespace App\Livewire;

use App\Models\About as ModelAbout;
use App\Models\TeamMember;
use Livewire\Component;

class About extends Component
{
    public function render()
    {
        $sections = ModelAbout::orderBy('order', 'ASC')->get();
        $teamMembers = TeamMember::orderBy('name', 'ASC')->get();

        return view('livewire.about', compact('sections', 'teamMembers'));
    }
}
