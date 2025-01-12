<nav class="w-100 bg-green-300 h-32 flex items-center gap-5">
    <a href="/" class="text-white text-2xl ml-4">
        <img src="{{Vite::asset('resources/images/fruit-logo.svg')}}" alt="Gamot's Fruit" class="h-20 w-30 ml-10">
    </a>
    <ul class="flex items-center mx-auto">
      <li class="mr-4">
        <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
      </li>
      <li class="mr-4">
        <x-nav-link href="/about" :active="request()->is('about')">About</x-nav-link>
      </li>
      <li class="mr-4">
        <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
      </li>
      <li class="mr-4">
        <x-nav-link href="/store/" :active="request()->is('store')">Store</x-nav-link>
      </li>
    </ul>
    <ul class="flex items-center mx-auto">
      @guest('web')
      <li class="mr-4">
        <x-nav-link href="/user/login" :active="request()->is('user/login')">Login</x-nav-link>
      </li>
      <li class="mr-4">
        <x-nav-link href="/user/register" :active="request()->is('user/register')">Register</x-nav-link>
      </li>
      @endguest
      @auth('web')
      <li class="mr-4">
        <form method="POST" action="/user/logout">
           
            @csrf
            <button type="submit" class="bg-green-500 text-white p-2 rounded-lg">Logout</button>
        </form>
    </li>
      @endauth
    </ul>
  </nav>