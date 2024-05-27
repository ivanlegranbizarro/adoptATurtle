<header class="p-5 border-b bg-white shadow">
  <div class="container mx-auto flex justify-between items-center">
    <h1 class="text-3xl font-black">
      <a href="{{ route('tortugas.index') }}">AdoptATurtle</a>
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
