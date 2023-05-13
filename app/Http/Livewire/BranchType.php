<?php

namespace App\Http\Livewire;

use Livewire\Component;

class BranchType extends Component
{


    public $model;


    public $instituteId;
    public $submitButton;
    public $name;
    public $phone;
    public $amount;
    public $isValidatedForm = false;


    public function mount()
    {
        $this->name = $this->model->name;
        $this->phone = $this->model->name;
        $this->amount = $this->model->amount;
    }

    public function render()
    {

        return view('livewire.branch-type');
    }

    public function rules()
    {
        $rules = [];

        $rules['name']           = 'required';
        $rules['phone']           = 'required';
        $rules['amount']           = 'required';

        return $rules;
    }
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submitForm()
    {
        $validatedData = $this->validate();
        if($validatedData){
            $this->isValidatedForm = true;
        }
}
}
