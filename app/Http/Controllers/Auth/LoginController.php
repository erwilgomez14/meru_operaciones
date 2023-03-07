<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    //
    public function login(Request $request, Redirector $redirector)
    {
        
        $recuerdame = ($request->filled('remember'));

        $user = User::where('uid', $request->email)->get()->first();

          /*dd($user);*/

        if($user->clave === md5($request->password) && $user->idstatus === 1)
        {
            Auth::login($user);

            $request->session()->regenerate();

            // return redirect('panel');
            // return 'logeado';
           return $redirector->to('panel')->with('status', 'Autenticacion Satisfactoria');
            

            
        //     $request->session()->regenerate();

        //     // return redirect('panel');
        //     ;

        }
        
    
        // if (Auth::attempt($request->only('email', 'password'), $recuerdame)){
    
        //     $request->session()->regenerate();
    
        //     return $redirector->intended('panel')->with('status', 'Autenticacion Satisfactoria');
        // }
    
        throw ValidationException::withMessages([
            'email' => __('auth.failed'),
        ]);
    }

    public function logout(Request $request, Redirector $redirector)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();
        
        return $redirector->to('/')->with('status', 'Desconexion Satisfactoria');
    }
}
