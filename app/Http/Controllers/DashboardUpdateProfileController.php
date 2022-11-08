<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardUpdateProfileController extends Controller
{
    public function edit() 
    {
        return view('dashboard.users.edit');
    }



    public function update(Request $request) 
    {
        $request->validate([
            'name' => ['string', 'max:191', 'required'],
            'email' => ['email:dns','string', 'max:191', 'required', 'unique:users,email'. auth()->id()],
            'username' => ['alpha_num','string', 'max:191', 'required'],
        ]);


        auth()->user()->update([
            'name' => $request->name,
            'email' => $request->email,
            'username' => $request->username,
        ]);

        return back()->with('Message', 'Profile telah diubah');
    }
}
