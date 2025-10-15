@component('mail::message')
# New message from {{ $payload['name'] }}

**Email:** {{ $payload['email'] }}

**Message:**
{{ $payload['message'] }}

@endcomponent
