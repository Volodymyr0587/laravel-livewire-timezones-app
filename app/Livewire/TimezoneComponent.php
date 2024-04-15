<?php

namespace App\Livewire;

use Carbon\Carbon;
use Livewire\Component;

class TimezoneComponent extends Component
{
    public $selectedTimezone;
    public $currentTime;
    // public $showForm = true;

    public function getTime()
    {
        $this->currentTime = Carbon::now($this->selectedTimezone)->toDateTimeString();
        // $this->showForm = true; // Hide the form after getting the time
    }

    public function render()
    {
        $timezones = timezone_identifiers_list();
        return view('livewire.timezone-component', compact('timezones'))->layout('welcome');;
    }
}
