<?php

namespace App\Http\Controllers\autn;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Usuarios;
class logincontroller extends Controller
{
    public function  from_login(){

        return view('modules.autn.from_login');

    }
    public function autn(Request $request){

       $user=Usuarios::where('CORREOUSU','=',$request->input('CORREOUSU'))->first();
       if($user){
           if ($user->CONTASEÑAUSU==$request->input('CONTASEÑAUSU')){

               session(['user'=>$user]);
               return redirect()->route('usuarios.index');

           }
           else{

               return redirect()->route('autn.form_login');

           }

       }
       else{
           return redirect()->route('autn.form_login');
       }

    }
}
