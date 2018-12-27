<!DOCTYPE html>
<html lang="{{ app()->getlocale() }}">
    <head>
        <title>@lang('messages.task')</title>
        {{ Html::style('/css/app.css') }}
    </head>

    <body>
        <div class="container">
            <nav class="navbar navbar-default">

            </nav>
        </div>

        @yield('content')
    </body>
</html>
