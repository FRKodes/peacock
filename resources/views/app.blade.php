<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        @include('partials.metas')
        @include('partials.styles')
    </head>
    <body>
        <header>
            @include('partials.nav')
        </header>
        <section id="app">
            @yield('content')
        </section>
        <footer>
            @include('partials.footer')
        </footer>
        <script src="{{ url('js/app.js') }}"></script>
        <script src="{{ url('js/all.js') }}"></script>
    </body>
</html>
