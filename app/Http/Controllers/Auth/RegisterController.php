<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'username' => ['required', 'string', 'max:50'],
            'email' => ['required', 'string', 'email', 'max:50', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'max:20'],
            'alamat' => ['required', 'string', 'max:32'],
            'nohp' => ['required', 'min:11', 'max:13', 'regex:/(0)[0-9]{10}/'],
            'foto' => ['required', 'mimes:jpeg,jpg,png']
        ]);

        $user = new \App\User;
        $user->role = 'user';
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->alamat = $request->alamat;
        $user->nohp = $request->nohp;
        $user->remember_token = Str::random(60);
        $user->save();
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('foto/', $request->file('foto')->getClientOriginalName());
            $user->foto = $request->file('foto')->getClientOriginalName();
            $user->save();
        }

        return redirect('/')->with('sukses', 'Data Berhasil Dibuat');
    }
}
