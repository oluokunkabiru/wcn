@php
    $configuration =App\Models\Configuration::where('id', 1)->first();
    switch ($level) {
        case 'success':
        case 'error':
            $color = $level;
            break;
        default:
            $color = 'red';
    }
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Verification</title>
</head>
<style>
    .container{
        background-image: linear-gradient(310deg, rgba(0, 0, 0, 0.88), rgba(2, 2, 2, 0.88)), url("{{ $configuration->getMedia('logo')->first()->getFullUrl() }}");
        background-size: cover;
        background-position: center;
        padding: 10%;
        border-radius: 5%;
        color: white;

    }
</style>
<body>
    <div class="container">
        <h1 style="text-align: center; font-size:20px; color:white; padding:2px">{{ strtoupper($configuration->name) }}</h1>
        <h3>Dear, {{ isset(Auth::user()->name)?ucwords(Auth::user()->name):"new member" }}</h3>
        <h5>Please click below button to verify your email</h5>
        <h3 style="color: white">WHY?</h3>
        <h3>Your email is needed to verify incase of notification and password reseting</h3>
        @component('mail::button', ['url' => $actionUrl, 'color' => $color])
        {{ $actionText }}
        @endcomponent
        {{-- Salutation --}}
@if (! empty($salutation))
{{ $salutation }}
@else
@lang('Regards'),<br>
{{-- {{ config('app.name') }} --}}
@endif

{{-- Subcopy --}}
@isset($actionText)
@slot('subcopy')
@lang(
    "If you're having trouble clicking the \":actionText\" button, copy and paste the URL below\n".
    'into your web browser:',
    [
        'actionText' => $actionText,
    ]
) <span class="break-all">[{{ $displayableActionUrl }}]({{ $actionUrl }})</span>
@endslot
@endisset
    </div>
</body>
</html>

