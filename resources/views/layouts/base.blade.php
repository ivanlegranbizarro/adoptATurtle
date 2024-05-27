<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdn.tailwindcss.com"></script>
  <title>AdoptATurtle - @yield('title')</title>
</head>

<body class="bg-gray-100">

  <turbo-frame id="header">
    @include('layouts.partials.__header')
  </turbo-frame>


  <turbo-frame id="flash-messages">
    @include('layouts.partials.__flash-messages')
  </turbo-frame>

  <turbo-frame id="main-content">
    <main class="container mx-auto mt-10">
      <h2 class="font-black text-center text-3xl mb-10">
        @yield('title')
      </h2>
      @yield('content')
    </main>
  </turbo-frame>


  <footer class="mt-10 text-center text-gray-500 font-bold uppercase my-10">
    AdoptATurtle - All rights reserved &copy; {{ now()->year }} 🐢
  </footer>


</body>

</html>
