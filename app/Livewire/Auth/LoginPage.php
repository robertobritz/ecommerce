<?php

namespace App\Livewire\Auth;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Login')]

class LoginPage extends Component
{
    public $email;
    public $password;

    public function save(){
        $this->validate([
            'email' => 'required|email|max:255|exists:users,email',
            'password' => 'required|min:8|max:255'
        ], [
            'email.required' => 'O campo e-mail é obrigatório',
            'email.email' => 'Digite um endereço de e-mail válido',
            'email.exists' => 'Este e-mail não está cadastrado em nosso sistema',
            'email.max' => 'O e-mail não pode ter mais que 255 caracteres',
            'password.required' => 'O campo senha é obrigatório',
            'password.min' => 'A senha deve ter no mínimo 8 caracteres',
            'password.max' => 'A senha não pode ter mais que 255 caracteres'
        ]);

        if (!auth()->attempt(['email' => $this->email, 'password' => $this->password])) {
            session()->flash('error', 'E-mail ou senha inválidos');
            return;
        }

        return redirect()->intended();

    }
    public function render()
    {
        return view('livewire.auth.login-page');
    }
}
