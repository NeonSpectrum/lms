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
  @include("navbar")
  @yield("body")
  <script src="{{ mix("js/app.js") }}"></script>
  @yield("script")
</body>
</html>
