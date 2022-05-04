<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=ù, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset("css/app.css")}}">
    <title>Document</title>
</head>
<body>
    @include('partials.header')
    <section>
        @yield('banner-content')
    </section>
    <main>
        @yield('main-content')
    </main>
    @include('partials.footer')
</body>
</html>