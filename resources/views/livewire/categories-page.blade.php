<div class="min-h-screen bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <section class="bg-white rounded-xl shadow-sm">
            <div class="p-6 lg:p-8">
                <!-- Cabeçalho -->
                <div class="mb-8">
                    <h1 class="text-3xl font-bold text-gray-900">Categorias</h1>
                    <p class="mt-2 text-sm text-gray-600">Explore nossos produtos por categoria</p>
                </div>

                <!-- Grid de Categorias -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach ($categories as $category)
                        <a href="/products?selected_categories[0]={{ $category->id }}" wire:key="{{ $category->id }}"
                            class="group relative overflow-hidden bg-gray-50 rounded-xl shadow-sm hover:shadow-md transition-all duration-300">

                            <!-- Imagem de Fundo com Overlay -->
                            <div
                                class="absolute inset-0 bg-gradient-to-r from-blue-600/10 to-purple-600/10 group-hover:opacity-75 transition-opacity">
                            </div>

                            <!-- Conteúdo -->
                            <div class="relative p-6">
                                <div class="flex items-center space-x-4">
                                    <!-- Imagem da Categoria -->
                                    <div class="flex-shrink-0">
                                        <img class="w-20 h-20 object-cover rounded-lg shadow-sm transform group-hover:scale-105 transition-transform duration-300"
                                            src="{{ url('storage', $category->image) }}" alt="{{ $category->name }}">
                                    </div>

                                    <!-- Informações da Categoria -->
                                    <div class="flex-1 min-w-0">
                                        <h3
                                            class="text-xl font-semibold text-gray-900 group-hover:text-blue-600 transition-colors duration-300">
                                            {{ $category->name }}
                                        </h3>
                                    </div>

                                    <!-- Ícone -->
                                    <div class="flex-shrink-0">
                                        <div
                                            class="flex items-center justify-center w-8 h-8 rounded-full bg-white group-hover:bg-blue-50 transition-colors duration-300">
                                            <svg class="w-5 h-5 text-blue-600 transform group-hover:translate-x-1 transition-transform duration-300"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round">
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
</div>
