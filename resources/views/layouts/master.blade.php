<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Market - @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link href="{{ asset('css/justified-nav.css') }}" rel="stylesheet">
    <style>
        body{

        }
        .custom-list-item{
            position: relative;
            display: block;
            padding: .75rem 1.25rem;
            margin-bottom: -1px;
            border: 1px solid rgba(0,0,0,.125);
        }
        a:link {
            text-decoration: none;
        }
    </style>
</head>

<body class="text-uppercase">

<div class="container">
    <div class="masthead">
        <h3 class="text-muted">
            Market
        </h3>
        <nav>
            <ul class="nav nav-justified list-group">
                <li class="custom-list-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="custom-list-item" ><a href="{{ route('customers') }}">Clientes</a></li>
                <li class="custom-list-item"><a href="{{ route('products') }}">Produtos</a></li>
                <li class="custom-list-item"><a href="{{ route('categories') }}">Categorias</a></li>
                <li class="custom-list-item"><a href="{{ route('orders') }}">Carrinho</a></li>
                <li class="custom-list-item"><a href="{{ route('about') }}">About Us</a></li>
                <li class="custom-list-item"><a href="{{ route('contact') }}">Contato</a></li>
            </ul>
        </nav>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                @yield('content')
            </div>
        </div>
    </div>

    <!-- Site footer -->
    <footer class="footer">
        <p>&copy; 2011 - {{ date('Y') }} Market - @yield('title')</p>
    </footer>

</div> <!-- /container -->
</body>
</html>
