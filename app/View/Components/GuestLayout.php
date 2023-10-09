<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class GuestLayout extends Component
{
    protected $title;
    protected $description;
     public function __construct($title = null, $description = null) {
        $this->title = is_null($title) ? "Laravel Mazer Stater Kit" : "$title | Laravel Mazer Stater Kit";
        $this->description = is_null($description)? "Laravel Mazer Stater Kit" : $description;
     }

    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {
        return view('layouts.guest',[
            'title' => $this->title,
            'description' => $this->description
        ]);
    }
}
