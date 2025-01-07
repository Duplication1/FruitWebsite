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
  </nav>