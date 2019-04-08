<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>{{ setting("title") }}</title>
  <link rel="stylesheet" href="{{ mix("css/app.css") }}">
</head>
<body>
  @yield("body")
  <script src="{{ mix("js/app.js") }}"></script>
</body>
</html>
