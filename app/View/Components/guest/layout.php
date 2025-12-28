<?php

namespace App\View\Components\guest;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Settings\SiteProfile;
use App\Models\Department;
use App\Models\field;

class layout extends Component
{
    public $siteProfile;
    public $departments;
    public $fields;

    public function __construct()
    {
        $this->siteProfile = app(SiteProfile::class);
        $this->departments = Department::all();
        $this->fields = field::with('departments')->get();
    }

    public function render(): View|Closure|string
    {
        return view('components.guest.layout', [
            'siteProfile' => $this->siteProfile,
            'departments' => $this->departments,
            'fields' => $this->fields,
        ]);
    }
}
