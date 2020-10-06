<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <style media="screen">

    body {
      padding:50px 30px;
      color:#343a40;
    }

    h1,h2{text-align: center;}


    .mail{
      background-color: #eddcd2;
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
