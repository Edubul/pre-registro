<?php

namespace App\Http\Controllers;
use App\Models\MasterAccount;
use Illuminate\Http\Request;

class MasterAccountController extends Controller
{

    public function index()
    {
        $usersCount = MasterAccount::count();
        return view('auth.register',compact('usersCount'));
    }

    public function logOut(Request $request)
    {
        auth('master')->logout();
        return redirect('/');
    }
}
