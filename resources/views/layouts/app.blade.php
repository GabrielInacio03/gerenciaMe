<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'GerenciaMe') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

       
    <!-- Bootstrap 5.1.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />


    <style>
        .modal{
            width: 300px;
        }
        .modal-content{
            width: 300px;
        }
        .list-group-item:hover{
            background-color: rgb(59,57,57,0.164);
        }
    </style>
</head>
<body>
    <div id="page-top">
       <nav class="navbar navbar-light bg-light">
           <div class="container-fluid">
               <span class="navbar-brand mb-0 h1">{{ config('app.name', 'GerenciaMe') }}</span>
               <button class="navbar-toggler" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                   <span class="navbar-toggler-icon"></span>
               </button>
           </div>
       </nav>     
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Menu</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Test1</li>
                <li class="list-group-item">Test2</li>
                <li class="list-group-item">Test3</li>
                <li class="list-group-item">Test4</li>
                <li class="list-group-item">Test5</li>
            </ul>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
        </div>
    </div>
    </div>
    </div>

        <!-- 
        {{ config('app.name', 'GerenciaMe') }}
        -->
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
 <!-- Bootstrap core JS-->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>  
</html>
