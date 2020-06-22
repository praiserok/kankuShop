<!doctype html>
<html lang="en">

<head>
    <meta charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@lang('main.online_shop'): @yield('title')</title>

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/starter-template.css" rel="stylesheet">
</head>

<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ route('index') }}"><img src="/img/kanku.png" alt="Канку">@lang('main.online_shop')</a>

        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li @routeactive('index')><a href="{{ route('index') }}">@lang('main.all_products')</a></li>
                <li @routeactive('categor*')><a href="{{ route('categories') }}">@lang('main.categories')</a>
                </li>
                <li @routeactive('basket*')><a href="{{ route('basket') }}">@lang('main.basket')</a></li>
                <li><a href="{{ route('reset') }}">Скинути в початковий етап</a></li>
                <li><a href="{{ route ('locale', __('main.set_lang')) }}">@lang('main.set_lang')</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                @guest
                    <li><a href="{{ route('login') }}">@lang('main.sign_in')</a></li>
                @endguest

                @auth
                    @admin
                    <li><a href="{{ route('home') }}">@lang('main.admin')</a></li>
                @else
                    <li><a href="{{ route('person.orders.index') }}">@lang('main.my_orders')</a></li>
                    @endadmin
                    <li><a href="{{ route('get-logout') }}">@lang('main.sign_out')</a></li>
                @endauth
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="starter-template">
        @if(session()->has('success'))
            <p class="alert alert-success">{{ session()->get('success') }}</p>
        @endif
        @if(session()->has('warning'))
            <p class="alert alert-warning">{{ session()->get('warning') }}</p>
        @endif
        @yield('content')
    </div>
</div>
</body>

</html>
