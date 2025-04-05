<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <title>{{$page_title ?? 'FxBullish'}}</title>
    @vite('resources/css/app.css')
    @fluxAppearance
    @livewireStyles
    @yield('styles')
</head>

<body>
    <nav class="sticky top-0 bg-gray-800 hidden md:block">
        This is a Fixed header
    </nav>

      <div class="text-white flex items-center mr-5 md:hidden float-right sticky top-0">
        <button class="btn-mobile roun">
          <svg class="h-6 w-6 block" x-description="Heroicon name: outline/menu" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
          </svg>
        </button>
      </div>
    <div aria-describedby="menu-mobile" id="menu-mobile" class="flex flex-col bg-gray-900 text-white py-4 md:hidden">
        <a class="py-3 mx-3 my-1 bg-gray-800 hover:text-white px-4 rounded-xl font-medium text-right" href="#">Dashboard</a>
        <a class="py-2 mx-3 my-1 hover:bg-gray-800 hover:text-white text-gray-400 px-4 rounded-xl font-medium" href="#">Team</a>
        <a class="py-2 mx-3 my-1 hover:bg-gray-800 hover:text-white text-gray-400 px-4 rounded-xl font-medium" href="#">Projects</a>
        <a class="py-2 mx-3 my-1 hover:bg-gray-800 hover:text-white text-gray-400 px-4 rounded-xl font-medium" href="#">Calendar</a>
        <a class="py-2 mx-3 my-1 hover:bg-gray-800 hover:text-white text-gray-400 px-4 rounded-xl font-medium" href="#">Report</a>
        <div class="border-t border-gray-500 pt-2 w-full">
          <div class="profile">
            <div class="flex items-center space-x-5">
              <img class="h-8 rounded-2xl ml-5" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="profile" />
              <div class="text-gray-300 font-medium flex-col items-center justify-center">
                <p class="relative top-1 text-gray-400 hover:text-gray-200 text-lg">Toom Cook</p>
                <p class="relative bottom-1 text-s text-gray-400 hover:text-gray-200">toom@correo.com</p>
              </div>
            </div>
            <div></div>
          </div>
          <div class="flex w-full items-start flex-wrap mt-2">
            <a href="#" class="mx-2 w-full font-medium text-gray-300 py-2 rounded-xl hover:bg-gray-800 px-4">Profile</a>
            <a href="#" class="mx-2 w-full font-medium text-gray-300 py-2 rounded-xl hover:bg-gray-800 px-4">Settings</a>
            <a href="#" class="mx-2 w-full font-medium text-gray-300 py-2 rounded-xl hover:bg-gray-800 px-4">Log out</a>
          </div>
        </div>
      </div>
    <div class="bg-amber-400 w-full min-h-screen">
        <flux:main class="container mx-auto">
            @yield('content')
        </flux:main>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/home.js') }}"></script>
    @fluxScripts
    @livewireScripts
    @stack('scripts')
    @yield('scripts')
</body>

</html>
