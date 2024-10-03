<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet"> --}}

    {{-- <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}"> --}}
</head>
<body>

    @include('template.navbar')
    @yield('content')
    <script src="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geP1Gnv5bo7jmcQG3KTn6K944NUTikraboxV4L2RRycdH+JBEkY80P/EgTXR1qO" crossorigin="anonymous"></script>
    {{-- <script src="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js')}}"></script> --}}

    {{-- <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script> --}}
</body>
</html>
