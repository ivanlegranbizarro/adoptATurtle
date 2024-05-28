<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdn.tailwindcss.com"></script>
  <title>AdoptATurtle - @yield('title')</title>
</head>

<body class="bg-gray-100">

  @include('layouts.partials.__header')


  @include('layouts.partials.__flash-messages')

  <main class="container mx-auto mt-10" style="min-height: calc(100vh - 200px);">
    <h2 class="font-black text-center text-3xl mb-10">
      @yield('title')
    </h2>
    @yield('content')
  </main>


  <footer class="mt-10 text-center text-gray-500 font-bold uppercase my-10">
    AdoptATurtle - All rights reserved &copy; {{ now()->year }} 🐢
  </footer>


</body>

</html>
