<?php

namespace App\Livewire;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

use Livewire\Component;

class EditProfile extends Component
{
    public $name; // Armazena o nome do usuário
    public $email; // Armazena o e-mail do usuário
    public $password; // Armazena a senha temporária inserida
    public $password_confirmation; // Armazena a confirmação da senha temporária

    public function mount()
    {
        // Preenche os campos com os dados do usuário autenticado
        $user = Auth::user();
        $this->name = $user->name;
        $this->email = $user->email;
    }

    public function save()
    {
        // Valida os dados do formulário
        $validatedData = $this->validate([
            'name' => ['required', 'string', 'max:255'], // Nome é obrigatório, tipo string, com no máximo 255 caracteres
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,' . Auth::id()], // E-mail é obrigatório, válido, único, exceto para o próprio usuário
            'password' => ['nullable', 'confirmed', Password::defaults()], // Senha opcional, mas deve ser confirmada
        ]);

        // Atualiza os dados do usuário no banco de dados
        $user = Auth::user();
        $user->update([
            'name' => $this->name,
            'email' => $this->email,
        ]);

        // Atualiza a senha, se foi preenchida
        if ($this->password) {
            $user->update(['password' => bcrypt($this->password)]);
        }

        // Exibe uma mensagem de sucesso
        session()->flash('message', 'Profile updated successfully!');
    }
    public function render()
    {
        return view('livewire.edit-profile');
    }
}
