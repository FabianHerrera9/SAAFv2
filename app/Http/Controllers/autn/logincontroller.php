<?php

namespace App\Http\Controllers\autn;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Contracts\JWTSubject;

class logincontroller extends Controller implements JWTSubject
    {

    public function login(Request $request)
    {
        $credencials = $request->only('email','password');
        if(Auth::attempt($credencials)){
            $request->session()->regenerate();
            return redirect()->intended('/usuarios');
        }
        return redirect('/login');

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
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
