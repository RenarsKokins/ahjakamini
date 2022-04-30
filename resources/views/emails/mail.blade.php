@component('mail::message')
# Introduction

Kāds aizsūtīja jaunu ziņu no mājaslapas.

Vārds: {{$request->name}}
E-pasts: {{$request->email}}
Telefona numurs: {{$request->phone}}

Temats: {{$request->title}}
Ziņa:
{{$request->message}}
@endcomponent
