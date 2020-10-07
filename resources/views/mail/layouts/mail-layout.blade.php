<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <style media="screen">

    body {
      padding:50px 30px;
      color:white;
    }

    h1,h2,h3{padding-top: 30px;
          text-align: center;
          color: lightgrey;
        }

    span{
      color:#f66d9b;
    }


    .mail{
      background-color: #212529;
    }


    li{
      padding-bottom: 20px;
      list-style: none;
    }


    </style>

</head>
<body>

    <div class="mail">

            @yield('content')

    </div>
</body>
</html>
