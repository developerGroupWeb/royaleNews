@include('piles.styles')

@include('piles.scripts')


<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @stack('head')

    <title>{{$title ?? ''}}</title>

</head>
<body>

@yield('content')

</body>
</html>
