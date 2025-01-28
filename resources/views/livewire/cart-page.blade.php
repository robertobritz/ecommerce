<div class="min-h-screen bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <section class="bg-white rounded-xl shadow-sm">
            <div class="p-6 lg:p-8">
                <!-- Cabeçalho -->
                <div class="mb-8">
                    <h1 class="text-3xl font-bold text-gray-900">Carrinho de Compras</h1>
                    <p class="mt-2 text-sm text-gray-600">Revise seus itens e prossiga para o checkout</p>
                </div>

                <div class="flex flex-col lg:flex-row gap-8">
                    <!-- Lista de Produtos -->
                    <div class="lg:w-3/4">
                        <div class="bg-gray-50 rounded-xl shadow-sm overflow-hidden">
                            <div class="overflow-x-auto">
                                <table class="w-full">
                                    <thead class="bg-white border-b border-gray-200">
                                        <tr>
                                            <th class="px-6 py-4 text-sm font-semibold text-gray-900 text-left">Produto
                                            </th>
                                            <th class="px-6 py-4 text-sm font-semibold text-gray-900 text-left">Preço
                                            </th>
                                            <th class="px-6 py-4 text-sm font-semibold text-gray-900 text-left">
                                                Quantidade</th>
                                            <th class="px-6 py-4 text-sm font-semibold text-gray-900 text-left">Total
                                            </th>
                                            <th class="px-6 py-4 text-sm font-semibold text-gray-900 text-left">Ações
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-gray-200">
                                        @forelse ($cart_items as $item)
                                            <tr wire:key='{{ $item['product_id'] }}' class="bg-white hover:bg-gray-50">
                                                <td class="px-6 py-4">
                                                    <div class="flex items-center">
                                                        <img class="w-20 h-20 rounded-lg object-cover mr-4"
                                                            src="{{ url('storage', $item['image']) }}"
                                                            alt="{{ $item['name'] }}">
                                                        <div>
                                                            <h3 class="text-sm font-medium text-gray-900">
                                                                {{ $item['name'] }}</h3>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4">
                                                    <span
                                                        class="text-sm text-gray-900">{{ Number::currency($item['unit_amount'], 'BRL') }}</span>
                                                </td>
                                                <td class="px-6 py-4">
                                                    <div class="flex items-center space-x-3">
                                                        <button wire:click='decreaseQty({{ $item['product_id'] }})'
                                                            class="inline-flex items-center justify-center w-8 h-8 text-gray-600 transition-colors border rounded-md hover:bg-gray-100">
                                                            <svg class="w-4 h-4" fill="none" stroke="currentColor"
                                                                viewBox="0 0 24 24">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2" d="M20 12H4" />
                                                            </svg>
                                                        </button>
                                                        <span
                                                            class="w-8 text-center text-gray-900">{{ $item['quantity'] }}</span>
                                                        <button wire:click='increaseQty({{ $item['product_id'] }})'
                                                            class="inline-flex items-center justify-center w-8 h-8 text-gray-600 transition-colors border rounded-md hover:bg-gray-100">
                                                            <svg class="w-4 h-4" fill="none" stroke="currentColor"
                                                                viewBox="0 0 24 24">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2" d="M12 4v16m8-8H4" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4">
                                                    <span
                                                        class="text-sm font-medium text-gray-900">{{ Number::currency($item['total_amount'], 'BRL') }}</span>
                                                </td>
                                                <td class="px-6 py-4">
                                                    <button wire:click='removeItem({{ $item['product_id'] }})'
                                                        class="inline-flex items-center px-3 py-1 text-sm font-medium text-red-700 transition-colors bg-red-100 rounded-lg hover:bg-red-200">
                                                        <svg class="w-4 h-4 mr-1.5" fill="none" stroke="currentColor"
                                                            viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                        </svg>
                                                        <span wire:loading.remove
                                                            wire:target='removeItem({{ $item['product_id'] }})'>Remover</span>
                                                        <span wire:loading
                                                            wire:target='removeItem({{ $item['product_id'] }})'>Removendo...</span>
                                                    </button>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="5" class="px-6 py-12">
                                                    <div class="text-center">
                                                        <svg class="mx-auto w-16 h-16 text-gray-400" fill="none"
                                                            stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                                        </svg>
                                                        <h3 class="mt-4 text-lg font-medium text-gray-900">Seu carrinho
                                                            está vazio</h3>
                                                        <p class="mt-2 text-sm text-gray-600">Comece a adicionar
                                                            produtos para fazer suas compras!</p>
                                                        <a href="/products"
                                                            class="inline-flex items-center justify-center px-4 py-2 mt-6 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700">
                                                            Continuar Comprando
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- Resumo do Pedido -->
                    <div class="lg:w-1/4">
                        <div class="bg-gray-50 rounded-xl shadow-sm overflow-hidden">
                            <div class="p-6">
                                <h2 class="text-lg font-semibold text-gray-900 mb-4">Resumo do Pedido</h2>

                                <div class="space-y-4">
                                    <div class="flex justify-between">
                                        <span class="text-sm text-gray-600">Subtotal</span>
                                        <span
                                            class="text-sm font-medium text-gray-900">{{ Number::currency($grand_total, 'BRL') }}</span>
                                    </div>

                                    <div class="flex justify-between">
                                        <span class="text-sm text-gray-600">Impostos</span>
                                        <span
                                            class="text-sm font-medium text-gray-900">{{ Number::currency(0, 'BRL') }}</span>
                                    </div>

                                    <div class="flex justify-between">
                                        <span class="text-sm text-gray-600">Frete</span>
                                        <span
                                            class="text-sm font-medium text-gray-900">{{ Number::currency(0, 'BRL') }}</span>
                                    </div>

                                    <div class="pt-4 border-t border-gray-200">
                                        <div class="flex justify-between">
                                            <span class="text-base font-semibold text-gray-900">Total</span>
                                            <span
                                                class="text-base font-semibold text-gray-900">{{ Number::currency($grand_total, 'BRL') }}</span>
                                        </div>
                                    </div>
                                </div>

                                @if ($cart_items)
                                    <a href="/checkout"
                                        class="mt-6 block w-full px-4 py-3 text-sm font-semibold text-center text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-colors">
                                        Finalizar Compra
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
