<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="csrf-token" content=" {{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>{{ setting("title") }}</title>
  <link rel="stylesheet" href="{{ mix("css/app.css") }}">
</head>
<body>
  <div style="display: flex;height:100%;">
  @include("navbar")
<div style='flex:1'>
  @yield("body")
</div>
</div>
  <script src="{{ mix("js/app.js") }}"></script>
  @yield("script")
</body>
</html>
