<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Panel</title>

        <meta name="_token" content="{{ csrf_token() }}">
        <link rel="shortcut icon" href="{{ asset('/favicon.ico') }}">
        <link rel="stylesheet" href="<?php echo asset('assets/css/common.css')?>" type="text/css"> 

    </head>
    <body>
        <div class="wrapper d-flex align-items-stretch">
            <nav id="sidebar">
                @include('admin.layout.nav')
            </nav>
            
            <div id="content" class="p-4 p-md-5">
                @yield('content')

                @include('admin.layout.footer')
            </div>
        </div>
    </body>
</html>