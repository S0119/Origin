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
    <link href="{{ secure_asset('css/front.css') }}" rel="stylesheet">
  </head>
  <body>
    @include('parts/header')

    <main>
      <div class="container">
      <form>
        <div class="form-group">
          <input type="text" class="form-control" style="width: 50%;">
          <button class="btn btn-default" type="submit">検索</button>
          <input type="radio">映画
          <input type="radio">テーマパーク
          </span>
        </div>
      </form>
      <div class="container-fluid">
      <img class="card-img" img src="{{ secure_asset('image/movie-theater.png') }}" alt="">
		</div>
      <h1>トップページ</h1>
            <h2 class="text-title">新着記事</h2>
            </div>
            </div>
    </main>

    @include('parts/footer')
  </body>
</html>