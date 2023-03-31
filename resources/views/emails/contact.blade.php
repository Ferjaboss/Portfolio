@component('mail::message')
# Mail from {{ $name }}
## Send from: {{ $email }}

{{ $body }}.

Thanks,<br>
{{ config('app.name') }}
@endcomponent
