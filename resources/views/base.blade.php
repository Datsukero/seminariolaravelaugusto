<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Seminario Augusto Novos Framework">
  <meta name="author" content="Grupo IFPR TADS 2016">
  <link rel="icon" href="favicon.ico">

  <!-- Chrome, Firefox OS and Opera -->
  <meta name="theme-color" content="#343a40">
  <!-- iOS Safari -->
  <meta name="apple-mobile-web-app-status-bar-style" content="#343a40">
  
  <title>Mensagens com LARAVEL</title>

  <!-- Bootstrap core CSS -->
  <link href="static/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="static/css/offcanvas.css" rel="stylesheet">
  <!-- Google Fonts Core Lato -->
  <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
  <!-- Fonts Awesome Core -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  <!-- Main CSS -->
  <link href="static/css/main.css" rel="stylesheet" type="text/css">

</head>

<body class="bg-light">

  @include('navbar')

  <main role="main" class="container">
    @section('content') @show
  </main>

  <!-- Bootstrap core JavaScript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script>
    window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')
  </script>
  <script src="static/js/popper.min.js"></script>
  <script src="static/js/bootstrap.min.js"></script>
  <script src="static/js/holder.min.js"></script>
  <script src="static/js/offcanvas.js"></script>
</body>

</html>