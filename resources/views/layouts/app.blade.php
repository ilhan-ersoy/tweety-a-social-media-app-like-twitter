<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">

</head>
<body>
    <div id="app">

        <section class="px-12 py-8">
            <header class="container mx-auto">
                <h1>
                    <a href="#"><img src="{{asset('images/logo.svg')}}" alt="" style="width: 200px;"></a>
                </h1>
            </header>
        </section>

        <section class="px-12">
            <main class="container mx-auto">
                <div class="lg:flex lg:justify-between">

                    @if(auth()->check())
                        <div class="lg:w-1/6 bg-gray-200 border border-black rounded-lg py-4 px-8" style="max-height: 350px;">
                            @include('components._sidebar-links')
                        </div>
                    @endif
                    <div class="lg:flex-1 lg:mx-10">

                        @yield('content')

                    </div>

                    @if(auth()->check())
                            <div class="lg:w-1/6" style="max-height: 500px;">
                                @include('components._friends-list')
                            </div>
                    @endif

                </div>
            </main>
        </section>
    </div>
</body>
</html>
