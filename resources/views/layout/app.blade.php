@vite(['resources/sass/app.scss', 'resources/js/app.js'])
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <link rel="stylesheet" href="{{asset('css/app.css')}}"> --}}
    <title>{{config('app.name','LSAPP')}}</title>
</head>
<body>
    @include('inc.navbar')
    <div class="container mt-4">
        @include('inc.messages')
        @yield('content')
    </div>
    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
</body>
</html>