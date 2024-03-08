<x-mail::message>
# Introduction

The body of your message.

<x-mail::button :url="''">
Button Text
</x-mail::button>
Thanks,<br>
{{ config('app.name') }}

<div>
    Price: {{ $order->price }}
</div>
</x-mail::message>
