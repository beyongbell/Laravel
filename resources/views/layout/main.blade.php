<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title> @yield('title') </title>
        {{--  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">  --}}
        @if(isset($style))
            @foreach ($style as $css)
                 {{Html::style($css)}}
            @endforeach
        @endif
        {{Html::style('css/bootstrap.min.css')}} 
        {{Html::style('css/list/style.css')}}
    </head>
    <body>
        <div class="container">
            @yield('content')
        </div>
        {{--  <script type="text/javascript" src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/popper.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
          --}}
        {{Html::script('js/jquery-3.2.1.min.js')}}
        {{Html::script('js/popper.js')}}
        {{Html::script('js/bootstrap.min.js')}}
    </body>
</html>