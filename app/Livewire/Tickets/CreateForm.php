<?php

namespace App\Livewire\Tickets;

use App\Models\Ticket;
use Illuminate\Http\Request;
use Livewire\Component;
use Livewire\Attributes\Validate;
use Livewire\WithFileUploads;

class CreateForm extends Component
{
    use WithFileUploads;

    public $country;
    public $priority;

    public $first_category;

    public $second_categories;
    public $second_category;

    public $third_categories;
    public $third_category;

    #[Validate('string|min:3|max:255')]
    public $comment;

    public $showFields;

    #[Validate('string|min:3|max:255')]
    public $customer_name;

    #[Validate('numeric')]
    public $customer_mobile;

    #[Validate('email')]
    public $customer_email;

    #[Validate('required')]
    public $issue;
    public $site;
    public $anydesk_id;
    public $customer_id;
    public $extension_number;
    public $inquiry;

    #[Validate('mimes:jpg,jpeg,png|max:1024')]
    public $attachment;

    public function mount() {
        $this->showFields = false;
    }

    public function changeFirstCategory($value) {
        if($value == 0) {
            $this->first_category = null;
            $this->second_category = null;
            $this->third_category = null;
            $this->showFields = false;
            $this->second_categories = null;
            $this->third_categories = null;
        }

        if ($value == 1) {
            $this->first_category = 'Incident';
        }

        if ($value == 2) {
            $this->first_category = 'General Request';
        }

        $this->second_categories = ['First Category', 'Second Category', 'Third Category'];
    }

    public function changeSecondCategory($value) {
        if($value == 0){
            $this->third_category = null;
            $this->showFields = false;
            $this->third_categories = null;
        } else {
            $this->second_category = $value;
            $this->third_categories = ['First Category', 'Second Category', 'Third Category'];
        }
    }

    public function changeThirdCategory($value) {
        if($value == 0){
            $this->third_category = null;
            $this->showFields = false;
        } else {
            $this->third_category = $value;
            $this->showFields = true;
        }
    }

    public function createTicket() {
        if($this->attachment) {
            $file = $this->attachment->store('attachments');
            $this->attachment = $file;
        }

        // dd([
        //     'country' => $this->country,
        //     'priority' => $this->priority,
        //     'first_category' => $this->first_category,
        //     'second_category' => $this->second_category,
        //     'third_category' => $this->third_category,
        //     'attachment' => $this->attachment ?? '',
        //     'comment' => $this->comment,
        //     'customer_name' => $this->customer_name,
        //     'customer_mobile' => $this->customer_mobile,
        //     'customer_email' => $this->customer_email,
        //     'issue' => $this->issue,
        //     'site' => $this->site,
        //     'anydesk_id' => $this->anydesk_id,
        //     'customer_id' => $this->customer_id,
        //     'extension_number' => $this->extension_number,
        //     'inquiry' => $this->inquiry
        // ]);

        Ticket::create([
            'country' => $this->country,
            'priority' => $this->priority,
            'first_category' => $this->first_category,
            'second_category' => $this->second_category,
            'third_category' => $this->third_category,
            'attachment' => $this->attachment ?? '',
            'comment' => $this->comment,

            'customer_name' => $this->customer_name,
            'customer_mobile' => $this->customer_mobile,
            'customer_email' => $this->customer_email,
            'issue' => $this->issue,
            'site' => $this->site,
            'anydesk_id' => $this->anydesk_id,
            'customer_id' => $this->customer_id,
            'extension_number' => $this->extension_number,
            'inquiry' => $this->inquiry
        ]);

        redirect()->to('/tickets/create')->with('success', 'Ticket created successfully');
    }

    public function goTo($value) {
        redirect()->to($value);
    }

    public function changeSite($value){
        $this->site = $value;
    }

    public function changeInquiry($value){
        $this->inquiry = $value;
    }

    public function changeIssue($value){
        $this->issue = $value;
    }

    public function render()
    {
        return view('livewire.tickets.create-form');
    }
}
