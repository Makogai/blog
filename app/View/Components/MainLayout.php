<?php

namespace App\View\Components;

use App\Settings\GeneralSettings;
use Illuminate\View\Component;
use Vedmant\FeedReader\Facades\FeedReader;

class MainLayout extends Component
{
    public $websiteName;
    public $facebook;
    public $instagram;
    public $youtube;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->websiteName = app(GeneralSettings::class)->site_name;
        $this->facebook = app(GeneralSettings::class)->facebook;
        $this->instagram = app(GeneralSettings::class)->instagram;
        $this->youtube = app(GeneralSettings::class)->youtube;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('layouts.main');
    }
}
