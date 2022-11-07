@component('mail::message')
# Olá {{$nome}}

O chamado teve uma nova atualização.

@component('mail::button', ['url' => $url])
Clique aqui para ver o chamado
@endcomponent

Obrigado,<br>
{{ config('app.name') }}
@endcomponent
