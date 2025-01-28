<div class="w-full max-w-[85rem] py-10 px-4 sm:px-6 lg:px-8 mx-auto">
    <h1 class="text-4xl font-bold text-slate-500">My Profile</h1>
    <div class="flex flex-col p-5 mt-4 bg-white rounded shadow-lg">
        <div class="-m-1.5 overflow-x-auto">
            <div class="p-1.5 min-w-full inline-block align-middle">
                <div class="overflow-hidden">
                    <!-- Formulário de edição de perfil -->
                    <form wire:submit.prevent="save" class="space-y-6">

                        <!-- Exibição de mensagem de sucesso -->
                        @if (session()->has('message'))
                            <div
                                class="p-2 text-center text-green-600 bg-green-100 rounded dark:text-green-400 dark:bg-green-800">
                                {{ session('message') }}
                            </div>
                        @endif

                        <!-- Campo para o nome -->
                        <div>
                            <label for="name"
                                class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">Name</label>
                            <input wire:model.defer="name" id="name" type="text"
                                class="w-full px-4 py-2 text-gray-800 bg-gray-100 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-slate-800 dark:text-gray-200 dark:focus:ring-blue-400 dark:focus:border-blue-400" />
                            @error('name')
                                <span class="text-sm text-red-600 dark:text-red-400">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Campo para o e-mail -->
                        <div>
                            <label for="email"
                                class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">Email</label>
                            <input wire:model.defer="email" id="email" type="email"
                                class="w-full px-4 py-2 text-gray-800 bg-gray-100 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-slate-800 dark:text-gray-200 dark:focus:ring-blue-400 dark:focus:border-blue-400" />
                            @error('email')
                                <span class="text-sm text-red-600 dark:text-red-400">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Campo para a senha -->
                        <div class="relative">
                            <label for="password"
                                class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">Password <button
                                    type="button" onclick="togglePassword('password')"
                                    class="absolute top-[30px] right-4 text-gray-500 hover:text-gray-800 dark:text-gray-400 dark:hover:text-gray-200">
                                    <!-- Ícone de olho -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M2.458 12C3.732 7.943 7.523 5 12 5s8.268 2.943 9.542 7c-1.274 4.057-5.065 7-9.542 7s-8.268-2.943-9.542-7z" />
                                    </svg>
                                </button></label>
                            <input wire:model.defer="password" id="password" type="password"
                                class="w-full px-4 py-2 text-gray-800 bg-gray-100 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-slate-800 dark:text-gray-200 dark:focus:ring-blue-400 dark:focus:border-blue-400" />
                            @error('password')
                                <span class="text-sm text-red-600 dark:text-red-400">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Campo para confirmação da senha -->
                        <div class="relative">
                            <label for="password_confirmation"
                                class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">Confirm
                                Password <button type="button" onclick="togglePassword('password_confirmation')"
                                    class="absolute top-[30px] right-4 text-gray-500 hover:text-gray-800 dark:text-gray-400 dark:hover:text-gray-200">
                                    <!-- Ícone de olho -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M2.458 12C3.732 7.943 7.523 5 12 5s8.268 2.943 9.542 7c-1.274 4.057-5.065 7-9.542 7s-8.268-2.943-9.542-7z" />
                                    </svg>
                                </button></label>
                            <input wire:model.defer="password_confirmation" id="password_confirmation" type="password"
                                class="w-full px-4 py-2 text-gray-800 bg-gray-100 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-slate-800 dark:text-gray-200 dark:focus:ring-blue-400 dark:focus:border-blue-400" />

                        </div>

                        <!-- Botão de salvar -->
                        <div class="text-center">
                            <button type="submit" <div class="text-center">
                                <button type="submit"
                                    class="w-full px-6 py-2 text-white bg-blue-500 rounded-lg shadow-lg hover:bg-blue-600 dark:bg-blue-600 dark:hover:bg-blue-700">
                                    Save Changes
                                </button>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Script para alternar a visibilidade da senha -->
<script>
    function togglePassword(fieldId) {
        const field = document.getElementById(fieldId);
        field.type = field.type === 'password' ? 'text' : 'password';
    }
</script>
