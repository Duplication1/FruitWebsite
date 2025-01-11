<nav class="w-100 bg-green-300 h-32 flex items-center gap-5">
    @guest('admin')
  <a href="/" class="text-white text-2xl ml-4">
      <img src="{{ Vite::asset('resources/images/fruit-logo.svg') }}" alt="Gamot's Fruit" class="h-20 w-30 ml-10">
  </a>
  @endguest
  @auth('admin')
  <a href="/admin/dashboard" class="text-white text-2xl ml-4">
    <img src="{{ Vite::asset('resources/images/fruit-logo.svg') }}" alt="Gamot's Fruit" class="h-20 w-30 ml-10">
</a>
  @endauth
  <ul class="flex items-center mx-auto">
      @guest('admin')
      <li class="mr-4">
          <x-nav-link href="/admin" :active="request()->is('admin')">Login</x-nav-link>
      </li>
      <li class="mr-4">
          <x-nav-link href="/admin/register" :active="request()->is('admin/register')">Register</x-nav-link>
      </li>
      @endguest
      @auth('admin')
      <li class="mr-4">
          <x-nav-link href="/admin/dashboard" :active="request()->is('admin/dashboard')">Dashboard</x-nav-link>
      </li>
      <li class="mr-4">
        <x-nav-link href="/admin/manage-store" :active="request()->is('admin/manage-store')">Manage Store</x-nav-link>
    </li>
      <li class="mr-4">
          <form method="POST" action="/admin/logout">
              @csrf
              <button type="submit" class="bg-green-500 text-white p-2 rounded-lg">Logout</button>
          </form>
      </li>
      @endauth
  </ul>
</nav>