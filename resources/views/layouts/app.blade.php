<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('partials._head')
</head>
<body>
    <div id="app">
       {{-- Navigation --}}
        @include('partials._nav')
       {{-- End Navigation --}}

       {{-- Content --}}
        <main class="py-4">
            @yield('content')
        </main>
        {{-- End Content --}}
    </div>
</body>
</html>
