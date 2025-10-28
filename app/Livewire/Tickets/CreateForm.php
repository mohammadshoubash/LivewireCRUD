<?php

namespace App\Livewire\Tickets;

use Illuminate\Support\Facades\Request;
use Livewire\Component;

class CreateForm extends Component
{
    public $country;
    public $priority;
    public $first_category;
    public $second_category;
    public $third_category;

    public function mount() {

    }

    public function changeFirstCategory($value) {
        if ($value == 1) {
            $this->first_category = $value;
        }

        if ($value == 2) {
            $this->first_category = $value;
        }
    }

    public function changeSecondCategory($value) {
        dd($value);
    }

    public function changeThirdCategory($value) {
        dd($value);
    }

    public function createTicket(Request $request) {
        dd($request);
    }

    public function goTo($value) {
        redirect()->to($value);
    }

    public function render()
    {
        return view('livewire.tickets.create-form');
    }
}
