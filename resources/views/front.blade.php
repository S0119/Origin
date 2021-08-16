<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title','TICKET')</title>

    <script src="{{ secure_asset('js/app.js') }}" defer></script>

    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=raleway:300,400,600" rel="stylesheet" type="text/css">

    <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ secure_asset('css/admin.css') }}" rel="stylesheet">
  </head>
  <body>
    @include('parts/header')

    <main>
      <img src="C:/Users/moyas/Downloads/movie-theater.png" class="ticket-banner">
      <p>この画像の上にaboutを書く</p>
      <h1>トップページ</h1>
      <div class="main">
        <div class="container">
          <div class="card-contents">
            <h2 class="text-title">新着記事</h2>
            <div class="post-list-area">
            </div>
          </div>
        </div>
      </div>
      <img src="C:/Users/moyas/Downloads/movie-theater.png" class="ticket-banner">
    </main>

    @include('parts/footer')
  </body>
</html>