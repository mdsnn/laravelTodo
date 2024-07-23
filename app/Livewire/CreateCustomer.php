<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Customer;

class CreateCustomer extends Component
{
    public $name = '';
    public $email = '';
    public $phone = '';
    public function render()
    {
        return view('livewire.create-customer');
    }
    public function save()
    {
        $validated=$this->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:customers',
            'phone' => 'required|max:255|unique:customers'
        ]);
        Customer::create($validated);
        //$this->reset();
        session()->flash('success', 'Customer created successfully');
        return $this->redirect('/customers', navigate:true);
    }
}
