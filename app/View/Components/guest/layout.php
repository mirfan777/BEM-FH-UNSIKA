<?php

namespace App\View\Components\guest;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Settings\SiteProfile;
use App\Models\Division;

class layout extends Component
{
    public $siteProfile;
    public $divisions;

    public function __construct()
    {
        $this->siteProfile = app(SiteProfile::class);
        $this->divisions = Division::all();
    }

    public function render(): View|Closure|string
    {
        return view('components.guest.layout');
    }
}
