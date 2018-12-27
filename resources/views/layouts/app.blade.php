<!DOCTYPE html>
<html lang="{{ app()->getlocale() }}">
    <head>
        <title>@lang('messages.task')</title>
        {{ Html::style('/css/app.css') }}
        {{ Html::script('//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js') }}
    </head>

    <body>
        <div class="container">
            <nav class="navbar navbar-default">

            </nav>
        </div>

        @yield('content')
        {{ Html::script('/js/task.js') }}
    </body>
</html>
