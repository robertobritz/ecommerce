<x-mail::message>
# Ordem realizada com sucesso!

Obrigado por sua compra!
O número do seu pedido é: {{ $order->id }}

<x-mail::button :url="$url">
Ver o pedido no meu perfil
</x-mail::button>

Obrigado! <br>
{{ config('app.name') }}
</x-mail::message>
