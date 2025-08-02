<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<title>
    @if(!empty($title))
        {{ $title }} | {{ config('app.name') }}
    @else
        {{ config('app.name') }}
    @endif
</title>
{{--<link rel="preconnect" href="https://fonts.bunny.net">--}}
{{--<link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />--}}
{{--<link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">--}}





{{--<link rel="stylesheet" href="{{ asset('bootstrapfourfivetwo/css/bootstrap.css') }}" />--}}
<link rel="stylesheet" href="{{ asset('fontawesome6/css/all.css') }}" >
{{--<link rel="stylesheet" href="{{ asset('bootstrapfourthreeone/css/jquery-ui.css') }}">--}}
{{--<link rel="stylesheet" href="{{ asset('css/styles.css') }}">--}}
@vite(['resources/css/app.css', 'resources/js/app.js'])
@fluxAppearance
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<x-livewire-alert::scripts />


