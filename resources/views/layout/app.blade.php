<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
  <!-- header -->
  @include('partials.header')
  <!-- / header -->

  <div class="banner">
    <div class="banner-btn">
      <button>
        <strong>CURRENT SERIES</strong>
      </button>
    </div>
  </div>
  <!-- main -->
  @yield('main_content')
  <!-- / main -->

  <!-- footer -->
  @include('partials.footer')
  <!-- / footer -->
</body>
</html>
