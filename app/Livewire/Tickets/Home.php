<?php

namespace App\Livewire\Tickets;

use Livewire\Component;
use Livewire\Attributes\On;
use App\Models\Ticket;

class Home extends Component
{
    public $message;
    public $tickets;

    public function mount() {
        $this->tickets = Ticket::all();
    }

    public function render()
    {
        return view('livewire.tickets.home');
    }
}
