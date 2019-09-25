@component('mail::message')
Thank You For Subscription
@component('mail::table')

@endcomponent
@component('mail::button', ['url' => $invoices[0]->invoice_pdf])
Invoice Link
@endcomponent
![{{  config('app.name') }}]({{ asset('ajaxloader.gif') }})
Thanks,<br>
{{ config('app.name') }}
@endcomponent
