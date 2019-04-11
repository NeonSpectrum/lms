<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="csrf-token" content=" {{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>@php $url=explode("/",$_SERVER["REQUEST_URI"]);
          echo ucwords(end($url))
         @endphp</title>
  <link rel="stylesheet" href="{{ mix("css/app.css") }}">
</head>
<body>
  <div class="layout-nav">
  @include("navbar")
<div class="layout-content">
  @yield("body")
</div>
</div>
  <script src="{{ mix("js/app.js") }}"></script>
  @yield("script")
</body>
</html>
