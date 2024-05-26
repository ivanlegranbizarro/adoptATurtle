<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdn.tailwindcss.com"></script>
  <title>AdoptATurtle - @yield('title')</title>
</head>

<body class="bg-gray-100">
  <header class="p-5 border-b bg-white shadow">
    <div class="container mx-auto flex justify-between items-center">
      <h1 class="text-3xl font-black">
        AdoptATurtle
      </h1>
      <nav class="flex gap-2 items-center">
        @guest()
        <a class="font-bold uppercase text-gray-600 text-sm" href="{{ route('login') }}">login</a>
        <a class="font-bold uppercase text-gray-600 text-sm" href="{{ route('register') }}">crear cuenta</a>
        @endguest
        @auth()
        <a class="font-bold uppercase text-gray-600 text-sm" href="{{ route('logout') }}">logout</a>
        @endauth
      </nav>
    </div>
  </header>

  @if (session('success'))
  <p class="text-green-500 font-bold text-lg text-center my-5" role="alert">
    {{ session('success') }}
  </p>
  @endif

  <main class="container mx-auto mt-10">
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
