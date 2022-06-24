<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <!-- header -->
  @include('partials.header')
  <!-- / header -->

  <!-- main -->
  @yield('main-content')
  <main></main>
  <!-- / main -->

  <!-- footer -->
  @include('partials.footer')
  <!-- / footer -->
</body>
</html>

<style> /* debug*/
  main {
    height: 400px
  }
</style>