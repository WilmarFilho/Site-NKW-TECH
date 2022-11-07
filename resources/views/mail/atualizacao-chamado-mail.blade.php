@component('mail::message')
# Olá

O chamado teve uma nova atualização.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Obrigado,<br>
{{ config('app.name') }}
@endcomponent
