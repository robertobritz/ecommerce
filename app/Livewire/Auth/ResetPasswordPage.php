<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Livewire\Attributes\Title;
use Livewire\Attributes\Url;
use Livewire\Component;
use Illuminate\Support\Str;

#[Title('Recuperação de Senha')]
class ResetPasswordPage extends Component
{
    public $token;
    #[Url]
    public $email;
    public $password;
    public $password_confirmation;

    public function mount($token)
    {
        $this->token = $token;
    }

    public function save()
    {
        $this->validate([
            'token' => 'required',
            'email' => 'required|email|exists:users,email',
            'password' => 'required|min:8|max:255|confirmed',
        ], [
            'token.required' => 'Token inválido',
            'email.required' => 'O campo e-mail é obrigatório',
            'email.email' => 'Digite um endereço de e-mail válido',
            'email.exists' => 'Este e-mail não está cadastrado em nosso sistema',
            'password.required' => 'O campo senha é obrigatório',
            'password.min' => 'A senha deve ter no mínimo 8 caracteres',
            'password.max' => 'A senha não pode ter mais que 255 caracteres',
            'password.confirmed' => 'A confirmação da senha não corresponde'
        ]);

        $status = Password::reset(
            [
                'email' => $this->email,
                'password' => $this->password,
                'password_confirmation' => $this->password_confirmation,
                'token' => $this->token,
            ],
            function (User $user, string $password) {
                // Atualiza a senha e o token de "lembrar-me"
                $user->forceFill([
                    'password' => Hash::make($password),
                ])->setRememberToken(Str::random(60));
                $user->save();

                // Dispara o evento de redefinição de senha
                event(new PasswordReset($user));
            }
        );

        // Se a redefinição foi bem-sucedida
        if ($status === Password::PASSWORD_RESET) {
            // Recupera o usuário pelo e-mail
            $user = User::where('email', $this->email)->first();

            // Autentica o usuário
            Auth::login($user);

            // Redireciona para a página inicial
            return redirect('/')->with('success', 'Senha alterada com sucesso!');
        }

        // Caso contrário, retorna mensagem de erro
        session()->flash('error', 'Não foi possível redefinir sua senha. Por favor, tente novamente.');
        return null;
    }

    public function render()
    {
        return view('livewire.auth.reset-password-page');
    }
}
