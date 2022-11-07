@component('mail::message')
# Olá

Temos um novo chamado de {{$nome}}

@component('mail::button', ['url' => $url])
Clique aqui para ver o chamado
@endcomponent

Obrigado,<br>
{{ config('app.name') }}
@endcomponent
