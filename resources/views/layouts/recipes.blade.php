<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Recipe Book</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Dancing+Script">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </head>
    <body>
        <header class="fixed-top shadow">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" style="font-family: 'Dancing Script', serif;" href="{{ route('recipes') }}">RecipeBook</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <form class="d-flex" id="searchForm" action="{{ route('search.recipe') }}">
                                    <input id="searchTerm" name="searchTerm" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                </form>
                            </li>
                        </ul>
                        <div class="dropdown">
                            @if (session('userId') != NULL)
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">{{ session('username') }}</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{ route('profile') }}">Profile</a></li>
                                <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
                            </ul>
                            @else
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item"><a class="nav-link" href="{{ route('loginForm') }}" aria-expanded="false">Login</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('registerForm') }}" aria-expanded="false">Register</a></li>
                            </ul>
                            @endif
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        <main class="container py-4 mt-5">
            @yield('content')
        </main>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <script>
            $(document).ready(function(){
                $('#searchForm').submit(function(e){
                    e.preventDefault();
                    var width = $(this).width(); var position = $(this).position(); var height = $('header').height();
                    $.get($(this).attr('action') + '?' + $(this).serialize(), function(res){
                        $('.search-results').remove();
                        var results = $(res).css('width', width).css('top', height).css('left', position.left).addClass('mt-3 search-result');
                        $('body').append(results);
                    });
                });
                $('#searchTerm').on('keyup', function(){
                    if($(this).val() != ''){
                        $(this).parent().submit();
                    }
                    else{
                        $('.search-results').remove();
                    }
                });
                $('main').on('click', function(){
                    $('.search-results').remove();
                });
            });
        </script>
    </body>
</html>