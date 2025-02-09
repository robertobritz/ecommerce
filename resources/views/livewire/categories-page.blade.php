<div class="flex flex-col min-h-screen">
    <!-- Conteúdo Principal -->
    <main class="flex-1 bg-gray-50">
        <div class="px-4 py-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <section class="bg-white shadow-sm rounded-xl">
                <div class="p-6">
                    <!-- Cabeçalho -->
                    <div class="mb-6">
                        <h1 class="text-2xl font-bold text-gray-900">Categorias</h1>
                        <p class="mt-1 text-sm text-gray-600">Explore nossos produtos por categoria</p>
                    </div>

                    <!-- Grid de Categorias -->
                    <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-3">
                        @foreach ($categories as $category)
                            <a href="/products?selected_categories[0]={{ $category->id }}" wire:key="{{ $category->id }}"
                                class="relative overflow-hidden transition-all duration-300 shadow-sm group bg-gray-50 rounded-xl hover:shadow-md">
                                <!-- Imagem de Fundo com Overlay -->
                                <div
                                    class="absolute inset-0 transition-opacity bg-gradient-to-r from-blue-600/10 to-purple-600/10 group-hover:opacity-75">
                                </div>

                                <!-- Conteúdo -->
                                <div class="relative p-4">
                                    <div class="flex items-center space-x-4">
                                        <!-- Imagem da Categoria -->
                                        <div class="flex-shrink-0">
                                            <img class="object-cover w-16 h-16 transition-transform duration-300 transform rounded-lg shadow-sm group-hover:scale-105"
                                                src="{{ url('storage', $category->image) }}"
                                                alt="{{ $category->name }}">
                                        </div>

                                        <!-- Informações da Categoria -->
                                        <div class="flex-1 min-w-0">
                                            <h3
                                                class="text-lg font-semibold text-gray-900 transition-colors duration-300 group-hover:text-blue-600">
                                                {{ $category->name }}
                                            </h3>
                                        </div>

                                        <!-- Ícone -->
                                        <div class="flex-shrink-0">
                                            <div
                                                class="flex items-center justify-center w-8 h-8 transition-colors duration-300 bg-white rounded-full group-hover:bg-blue-50">
                                                <svg class="w-5 h-5 text-blue-600 transition-transform duration-300 transform group-hover:translate-x-1"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    fill="none" stroke="currentColor" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round">
                                                    <path d="M9 18l6-6-6-6" />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </section>
        </div>
    </main>

    <!-- Rodapé -->
    @include('livewire.partials.footer')
</div>
