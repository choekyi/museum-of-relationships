<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        @include('includes.css')
        <title> @yield('title')</title>
    </head>
    <body>
<div id="app">

  <the-header @yield('headstyle')></the-header>
  <the-breadcrumbs></the-breadcrumbs>
      <div class="container">
            @yield('content')
        </div>

  </div>
  <script type="text/javascript" src="/js/app.js"></script>
    </body>
</html>
