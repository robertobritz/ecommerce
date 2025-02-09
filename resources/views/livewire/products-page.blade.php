<div class="min-h-screen bg-gray-50">
    <div class="px-4 py-8 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <section class="bg-white shadow-sm rounded-xl">
            <div class="p-6 lg:p-8">
                <div class="flex flex-wrap -mx-4">
                    <!-- Sidebar de Filtros -->
                    <div class="w-full px-4 lg:w-1/4">
                        <!-- Categorias -->
                        <div class="mb-6 overflow-hidden bg-white rounded-lg shadow-sm">
                            <div class="p-5 border-b border-gray-100">
                                <h2 class="text-xl font-semibold text-gray-800">Categorias</h2>
                            </div>
                            <div class="p-5">
                                <ul class="space-y-3">
                                    @foreach ($categories as $category)
                                        <li wire:key="{{ $category->id }}">
                                            <label class="flex items-center cursor-pointer group">
                                                <input type="checkbox" wire:model.live="selected_categories"
                                                    id="{{ $category->slug }}" value="{{ $category->id }}"
                                                    class="w-5 h-5 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                                                <span
                                                    class="ml-3 text-gray-700 transition-colors group-hover:text-blue-600">
                                                    {{ $category->name }}
                                                </span>
                                            </label>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                        <!-- Marcas -->
                        <div class="mb-6 overflow-hidden bg-white rounded-lg shadow-sm">
                            <div class="p-5 border-b border-gray-100">
                                <h2 class="text-xl font-semibold text-gray-800">Marcas</h2>
                            </div>
                            <div class="p-5">
                                <ul class="space-y-3">
                                    @foreach ($brands as $brand)
                                        <li wire:key="{{ $brand->id }}">
                                            <label class="flex items-center cursor-pointer group">
                                                <input type="checkbox" wire:model.live="selected_brands"
                                                    id="{{ $brand->slug }}" value="{{ $brand->id }}"
                                                    class="w-5 h-5 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                                                <span
                                                    class="ml-3 text-gray-700 transition-colors group-hover:text-blue-600">
                                                    {{ $brand->name }}
                                                </span>
                                            </label>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                        <!-- Status do Produto -->
                        <div class="mb-6 overflow-hidden bg-white rounded-lg shadow-sm">
                            <div class="p-5 border-b border-gray-100">
                                <h2 class="text-xl font-semibold text-gray-800">Status do Produto</h2>
                            </div>
                            <div class="p-5">
                                <ul class="space-y-3">
                                    <li>
                                        <label class="flex items-center cursor-pointer group">
                                            <input type="checkbox" id="featured" wire:model.live="featured"
                                                value="1"
                                                class="w-5 h-5 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                                            <span
                                                class="ml-3 text-gray-700 transition-colors group-hover:text-blue-600">
                                                Produtos em Destaque
                                            </span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="flex items-center cursor-pointer group">
                                            <input type="checkbox" wire:model.live="on_sale" id="on_sale"
                                                value="1"
                                                class="w-5 h-5 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                                            <span
                                                class="ml-3 text-gray-700 transition-colors group-hover:text-blue-600">
                                                Em Promoção
                                            </span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Preço -->
                        <div class="mb-6 overflow-hidden bg-white rounded-lg shadow-sm">
                            <div class="p-5 border-b border-gray-100">
                                <h2 class="text-xl font-semibold text-gray-800">Preço</h2>
                            </div>
                            <div class="p-5">
                                <div class="mb-4">
                                    <div class="text-lg font-medium text-blue-600">
                                        {{ Number::currency($price_range, 'BRL') }}
                                    </div>
                                    <input type="range" wire:model.live="price_range"
                                        class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer accent-blue-600"
                                        max="50000" value="25000" step="25000">
                                </div>
                                <div class="flex justify-between text-sm text-gray-600">
                                    <span>{{ Number::currency(100, 'BRL') }}</span>
                                    <span>{{ Number::currency(50000, 'BRL') }}</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Lista de Produtos -->
                    <div class="w-full px-4 lg:w-3/4">
                        <!-- Ordenação -->
                        <div class="mb-6">
                            <div class="flex items-center justify-between p-4 bg-white rounded-lg shadow-sm">
                                <select wire:model.live="sort"
                                    class="block w-48 border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                    <option value="latest">Mais Recentes</option>
                                    <option value="price">Por Preço</option>
                                </select>
                            </div>
                        </div>

                        <!-- Grid de Produtos -->
                        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                            @foreach ($products as $product)
                                <div wire:key="{{ $product->id }}" class="group">
                                    <div
                                        class="overflow-hidden transition-shadow bg-white rounded-lg shadow-sm hover:shadow-md">
                                        <!-- Imagem do Produto -->
                                        <a href="/products/{{ $product->slug }}"
                                            class="block bg-gray-200 aspect-w-1 aspect-h-1">
                                            <img src="{{ isset($product->images[0]) ? url('storage', $product->images[0]) : 'path/para/imagem_padrao.jpg' }}"
                                                class="object-cover w-full h-64 transition-transform transform group-hover:scale-105">
                                        </a>

                                        <!-- Informações do Produto -->
                                        <div class="p-5">
                                            <h3 class="mb-2 text-lg font-medium text-gray-900">
                                                {{ $product->name }}
                                            </h3>
                                            <p class="mb-4 text-xl font-bold text-blue-600">
                                                {{ Number::currency($product->price, 'BRL') }}
                                            </p>

                                            <!-- Botão Adicionar ao Carrinho -->
                                            <button wire:click.prevent='addToCart({{ $product->id }})'
                                                class="flex items-center justify-center w-full px-4 py-2 text-sm font-medium text-white transition-colors bg-blue-600 border border-transparent rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                                </svg>
                                                <span wire:loading.remove wire:target='addToCart({{ $product->id }})'>
                                                    Adicionar ao Carrinho
                                                </span>
                                                <span wire:loading wire:target='addToCart({{ $product->id }})'>
                                                    Adicionando...
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <!-- Paginação -->
                        <div class="mt-8">
                            {{ $products->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- Rodapé -->
    @include('livewire.partials.footer')
</div>
