<?php

namespace App\Http\Livewire;
use App\Models\GameAccount;
use Livewire\Component;
use Livewire\WithPagination;

class AccountTable extends Component
{
    use WithPagination;

    public function render()
    {
        $accounts = GameAccount::select('login.userid','login.state')->where('master_acc_id','=',auth('master')->user()->id)->paginate(3);
        return view('livewire.account-table', compact('accounts'));
    }
}
