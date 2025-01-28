<div class="min-h-screen px-4 py-12 bg-gray-50 sm:px-6 lg:px-8">
    <div class="max-w-2xl mx-auto">
        <!-- Cabeçalho -->
        <div class="mb-8 text-center">
            <h1 class="text-3xl font-bold text-gray-900">Meu Perfil</h1>
            <p class="mt-2 text-sm text-gray-600">Atualize suas informações pessoais</p>
        </div>

        <!-- Card principal -->
        <div class="overflow-hidden bg-white rounded-lg shadow-xl">
            <div class="p-8">
                <form wire:submit.prevent="save" class="space-y-6">
                    @if (session()->has('message'))
                        <div class="p-4 mb-6 rounded-md bg-green-50">
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <svg class="w-5 h-5 text-green-400" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm font-medium text-green-800">{{ session('message') }}</p>
                                </div>
                            </div>
                        </div>
                    @endif

                    <div class="grid grid-cols-1 gap-6">
                        <!-- Nome -->
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700">Nome</label>
                            <input wire:model.defer="name" id="name" type="text"
                                class="block w-full mt-1 transition duration-150 ease-in-out border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm" />
                            @error('name')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Email -->
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                            <input wire:model.defer="email" id="email" type="email"
                                class="block w-full mt-1 transition duration-150 ease-in-out border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm" />
                            @error('email')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Senha -->
                        <div>
                            <label for="password" class="block text-sm font-medium text-gray-700">Senha</label>
                            <div class="relative mt-1">
                                <input wire:model.defer="password" id="password" type="password"
                                    class="block w-full transition duration-150 ease-in-out border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm" />
                                <button type="button" onclick="togglePassword('password')"
                                    class="absolute inset-y-0 right-0 flex items-center pr-3 text-gray-400 hover:text-gray-600">
                                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M2.458 12C3.732 7.943 7.523 5 12 5s8.268 2.943 9.542 7c-1.274 4.057-5.065 7-9.542 7s-8.268-2.943-9.542-7z" />
                                    </svg>
                                </button>
                            </div>
                            @error('password')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Confirmação de Senha -->
                        <div>
                            <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirmar
                                Senha</label>
                            <div class="relative mt-1">
                                <input wire:model.defer="password_confirmation" id="password_confirmation"
                                    type="password"
                                    class="block w-full transition duration-150 ease-in-out border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm" />
                                <button type="button" onclick="togglePassword('password_confirmation')"
                                    class="absolute inset-y-0 right-0 flex items-center pr-3 text-gray-400 hover:text-gray-600">
                                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M2.458 12C3.732 7.943 7.523 5 12 5s8.268 2.943 9.542 7c-1.274 4.057-5.065 7-9.542 7s-8.268-2.943-9.542-7z" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Botão de Salvar -->
                    <div class="mt-8">
                        <button type="submit"
                            class="flex justify-center w-full px-4 py-3 text-sm font-medium text-white transition duration-150 ease-in-out bg-blue-600 border border-transparent rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            Salvar Alterações
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function togglePassword(fieldId) {
        const field = document.getElementById(fieldId);
        field.type = field.type === 'password' ? 'text' : 'password';
    }
</script>
