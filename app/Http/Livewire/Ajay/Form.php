<?php

namespace App\Http\Livewire\Ajay;

use Livewire\Component;

class Form extends Component
{

    public $model;

    public function mount()
    {
        // return view('livewire.ajay.form');
    }


    public function render()
    {
        return view('livewire.ajay.form');
    }

    public function updated($propertName)
    {
        $this->validateOnly($propertName);
    }
    public function rules()
    {
        $rules = [];
        $rules['name'] = 'required';
        return $rules;
    }
}
