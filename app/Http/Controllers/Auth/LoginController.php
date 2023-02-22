<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
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
        
    
        if (Auth::attempt($request->only('email', 'password'), $recuerdame)){
    
            $request->session()->regenerate();
    
            return $redirector->intended('panel')->with('status', 'Autenticacion Satisfactoria');
        }
    
        throw ValidationException::withMessages([
            'email' => __('auth.failed'),
        ]);
    }

    public function logout(Request $request, Redirector $redirector)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();
        
        redirect('/')->with('status', 'Desconexion Satisfactoria');
    }
}
