<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel | CBD SHOP</title>

        <!-- Fonts -->

        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" >

    </head>

    <body>
        <header>
            <nav class="navbar navbar-light bg-light text-center py-4">
                <div class="logo_bar">
                    <a class="navbar-brand" href="#">
                        <img src="{{ asset('img/logo.png') }}" alt="" width="50" height="50" class="d-inline-block align-text-middle">
                    </a>
                </div>
            </nav>
        </header>
        <main>
            <div class="container">
                <div class="products d-flex justify-content-between py-4">
                @foreach ($products as $product)
                <div class="card col-4 shadow" style="width: 18rem;">
                    <img src="{{$product['path']}}" class="card-img-top" alt="...">
                    <div class="card-body d-flex flex-column align-items-center">
                        <h5 class="text-uppercase fw-bold">{{$product['name']}}</h5>
                        <p class="card-text m-3 text-success">{{$product['details']}}</p>
                        <span>A partire da:  <span class="fs-4 mx-2"> {{$product['price']}}€/g</span></span>
                    </div>
                </div>
                @endforeach
                </div>                
            </div>
        </main>
    </body>

</html>
