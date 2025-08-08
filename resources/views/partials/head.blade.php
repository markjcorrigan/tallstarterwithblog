<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<title>
    @if(!empty($title))
{{--        {{ $title }} | {{ config('app.name') }}--}}
        {{ $title }}
    @else
        {{ config('app.name') }}
    @endif
</title>
<link rel="icon" type="image/svg+xml" href="{{ asset('images/favicon.svg') }}">
<link rel="preconnect" href="https://fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

{{--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">--}}

{{--<link rel="stylesheet" href="{{ asset('fontawesome6/css/all.css') }}" >--}}
{{--<link rel="stylesheet" href="{{ url('css/fontawesome') }}">--}}
<link rel="stylesheet" href="{{ asset('fontawesome6\css\all.min.css') }}">



@vite(['resources/css/app.css', 'resources/js/app.js'])
@fluxAppearance
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<x-livewire-alert::scripts />


