<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function loginSubmit(Request $request)
    {
        // form validation
        $request->validate(
            [
                'text_username' => 'required|email',
                'text_password' => 'required|min:6|max:16'
            ],
            [
                'text_username.required' =>  'O username é obrigatório.',
                'text_username.email' =>  'Username deve ser um email válido.',
                'text_password.required' =>  'O password é obrigatório.',
                'text_password.min' =>  'O password deve ter pelo menos :min caracteres.',
                'text_password.max' =>  'O password deve ter no máximo :max caracteres.'
            ]
        );

        $username = $request->input('text_username');
        $password = $request->input('text_password');

        $user = User::Where('username', $username)
                        ->Where('deleted_at', NULL)
                        ->first();
        
        if (!$user) {
            return redirect()
                    ->back()
                    ->withInput()
                    ->with('loginError', 'Username ou password incorretos!');
        }

        if(!password_verify($password, $user->password)) {
            return redirect()
                    ->back()
                    ->withInput()
                    ->with('loginError', 'Username ou password incorretos!');
        }

        $user->last_login = date('Y-m-d H:i:s');
        $user->save();

        session([
            'user' => [
                'id' => $user->id,
                'username' => $user->username
            ]
        ]);

        echo 'Login com sucesso';
    }

    public function logout()
    {
        session()->forget('user');
        return redirect()->to('/login');
    }
}
