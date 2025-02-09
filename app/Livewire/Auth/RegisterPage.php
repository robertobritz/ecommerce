<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Title;
use Livewire\Component;


#[Title('Registro')]

class RegisterPage extends Component
{
    public $name;
    public $email;
    public $password;

    // registerr user
    public function save(){
        $this->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|min:6|max:255',
        ], [
            'name.required' => 'O campo nome é obrigatório',
            'name.max' => 'O nome não pode ter mais que 255 caracteres',
            'email.required' => 'O campo e-mail é obrigatório',
            'email.email' => 'Digite um endereço de e-mail válido',
            'email.unique' => 'Este e-mail já está cadastrado',
            'email.max' => 'O e-mail não pode ter mais que 255 caracteres',
            'password.required' => 'O campo senha é obrigatório',
            'password.min' => 'A senha deve ter no mínimo 6 caracteres',
            'password.max' => 'A senha não pode ter mais que 255 caracteres'
        ]);

        //save database
        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' =>  Hash::make($this->password),
        ]);

        // login user
        //Auth::login($user);
        auth()->login($user);

        // redirect to home page
        return redirect()->intended();       //to('/');
    }
    public function render()
    {
        return view('livewire.auth.register-page');
    }
}
