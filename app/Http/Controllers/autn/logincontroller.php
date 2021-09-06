<?php

namespace App\Http\Controllers\autn;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Usuarios;
use Tymon\JWTAuth\Contracts\JWTSubject;

class logincontroller extends Controller implements JWTSubject
{
    public function from_login()
    {
        return view('modules.autn.from_login');
    }
    public function autn(Request $request)
    {
        $user = Usuarios::where('Email', '=', $request->input('Email'))->first();
        if ($user) {
            if ($user->Password == $request->input('Password')) {
                session(['user' => $user]);
                return redirect()->route('usuarios.index');
            } else {

                return redirect()->route('autn.form_login');

            }
        } else {
            return redirect()->route('autn.form_login');
        }
    }
    public function getJWTIdentifier()
    {
        // TODO: Implement getJWTIdentifier() method.
        return $this->getKey();
    }
    public function getJWTCustomClaims()
    {
        // TODO: Implement getJWTCustomClaims() method.
        return[];
    }
}
