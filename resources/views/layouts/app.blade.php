<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <title>{{ config('app.name', 'GerenciaMe') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">   
   
    <!-- Bootstrap 5.1.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

    <style>
    body {
        margin: 0;
        padding: 0;
        font-family: 'montserrat';
        background: #e3e9f7
    }

    .logo {
        padding: 20px
    }

    nav ul {
        margin: 0;
        padding: 0;
        height: 100%;
        width: 260px;
        position: fixed;
        top: 0;
        left: 0;
        background-color: #2b2626
    }

    nav ul li {
        list-style: none
    }

    nav ul li a {
        display: block;
        font-family: 'montserrat';
        text-decoration: none;
        text-transform: uppercase;
        font-size: 17px;
        color: #fff;
        position: relative;
        padding: 15px 0px 15px 25px;
        transition: all 0.5s
    }

    nav ul li a:before {
        content: '';
        position: absolute;
        top: 0;
        right: 0;
        height: 100%;
        background: #e3e9f7;
        border-radius: 40px 0 0 40px;
        z-index: -1;
        transition: all 1s
    }

    nav ul li a:hover {
        color: #2b2626
    }

    nav ul li a:hover:before {
        width: 95%
    }

    .wrapper {
        margin-left: 260px
    }

    .section {
        display: grid;
        place-items: center;
        min-height: 100vh;
        text-align: center
    }

    .box-area h2 {
        text-transform: uppercase;
        font-size: 30px
    }
    </style>
</head>
<body id="page-top">   
    <nav>
        <ul>
            <li class="logo"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAh1BMVEVMr1D0QzYhlvP/wQf/////vgD0Nia63LtAq0Ww0vn6t7T/460AkfL+6+r6q6X3aV/0ST1SslZwv3Sv2rDs9uz7wL3D48T0PjEpmvP/xBBOq/b/zjv/45M1oPT/xxz/+OW32vv/6bD1VEhctl/zJg8zqDj94N7h7+Hd6/z/8tsAjPKcz/ro8/4BGhbPAAABo0lEQVR4nO3cR24CQRBA0bLdBBucwAlwxDnc/3wGeWOQWE61ZvT+BUpP1d3LjlLK8cnp2V7T9Y/K/wbDaLrzyfRiNSlKuVz2rxsHVhBGDJ+v1sLLvQRfHeGqqxLHyxRgLeHzRZz0U4C1hMNpnOassJYwJtH8K1pXeB5JwGrCICQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQk3Fk/qZct4eswqTjK6m1D+D7IKkrXI2x/hO2PsP0Rtj/C9kfY/uIwq4+NuZ+jrGKc1NfhhnDUyyr2kxpvCw+SIiQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQk3Cm86bhwFvOOCxfxPe60sHcbP3edFt4/RHnMuYl1hLOn9Y/lj3cZB7WGsHf/9Pcn+8/3vPk95gtni9uH1aRfSsqUbkvWwSAAAAAASUVORK5CYII=" width="89px" height="89px"></li>
            <li><a href="#"><i class="fa fa-home"></i>&nbsp; Home</a></li>
            <li><a href="#"><i class="fa fa-book"></i>&nbsp; Book</a></li>
            <li><a href="#"><i class="fa fa-users"></i>&nbsp; Users</a></li>
            <li><a href="#"><i class="fa fa-picture-o"></i>&nbsp; Pictures</a></li>
            <li><a href="#"><i class="fa fa-phone"></i>&nbsp; Contact</a></li>
        </ul>
    </nav>
    <div class="wrapper">
    <main class="py-4">
        @yield('content')    
    </main>
    </div>   
    <!-- 
    {{ config('app.name', 'GerenciaMe') }}
     
    -->
    
   
</body>
 <!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>  


</html>
