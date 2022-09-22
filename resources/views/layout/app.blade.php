<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ogani | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href={{ asset("public/css/bootstrap.min.css") }} type="text/css">
    <link rel="stylesheet" href={{ asset("public/css/font-awesome.min.css") }} type="text/css">
    <link rel="stylesheet" href={{ asset("public/css/elegant-icons.css") }} type="text/css">
    <link rel="stylesheet" href={{ asset("public/css/nice-select.css") }} type="text/css">
    <link rel="stylesheet" href={{ asset("public/css/jquery-ui.min.css") }} type="text/css">
    <link rel="stylesheet" href={{ asset("public/css/owl.carousel.min.css") }} type="text/css">
    <link rel="stylesheet" href={{ asset("public/css/slicknav.min.css") }} type="text/css">
    <link rel="stylesheet" href={{ asset("public/css/style.css") }} type="text/css">
</head>

<body>
     @yield('content')

       <!-- Js Plugins -->
    <script src={{ asset("public/js/jquery-3.3.1.min.js")}}></script>
    <script src={{ asset("public/js/bootstrap.min.js")}}></script>
    <script src={{ asset("public/js/jquery.nice-select.min.js")}}></script>
    <script src={{ asset("public/js/jquery-ui.min.js")}}></script>
    <script src={{ asset("public/js/jquery.slicknav.js")}}></script>
    <script src={{ asset("public/js/mixitup.min.js")}}></script>
    <script src={{ asset("public/js/owl.carousel.min.js")}}></script>
    <script src={{ asset("public/js/main.js")}}></script>
</body>
</html>