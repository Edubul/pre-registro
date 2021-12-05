<?php

namespace App\Http\Livewire;

use App\Models\GameAccount;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class CreateGameAccount extends Component
{
    public $openModal = false;
    public $userid;
    public $user_pass;
    public $state = [];


    // public $rules = [
    //     'userid'    => ['required', 'unique:login','min:5'],
    //     'user_pass' => ['required','confirmed'],
    // ];


    public function store()
    {
        $validatedData = Validator::make($this->state, [
			'userid' => 'required',
			'user_pass' => 'required|confirmed',
		])->validate();

        $validatedData['email'] = auth('master')->user()->email;
        $validatedData['master_acc_id'] = auth('master')->user()->id;
        GameAccount::create($validatedData);
        
        $this->dispatchBrowserEvent('swal:modal',[
            'type' => 'success',
            'title' => 'Game account created succesfully',
            'text' => ''
        ]);


        session()->flash('Success','Game account created!');
        $this->reset();
    }


    public function openModalCreateGameAccount()
    {
        $this->resetErrorBag();
        $this->openModal = true;
    }

    public function render()
    {
        return view('livewire.create-game-account');
    }
}
