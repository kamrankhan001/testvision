<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{asset('images/logo/logo.png')}}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Vision | @yield('title')</title>

    <style>
      .dropdown:hover .dropdown-menu {
        display: block;
      }
    </style>

</head>
<body class="bg-white text-gray-800">
    
    <nav class="w-full bg-white shadow-md">
        <div x-data="{ open: false }" class="flex flex-col max-w-screen-xl px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
          {{-- Logo & Hamburger --}}
          <div class=" flex flex-row items-center justify-between">
            <a href="#" class="font-semibold tracking-widest text-gray-900 uppercase rounded-lg dark-mode:text-white focus:outline-none focus:shadow-outline">
                <img src="{{asset('images/logo/logo.png')}}" alt="logo" class="w-20 h-20">
            </a>
            <button class="md:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
              <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
              </svg>
            </button>
          </div>

          <nav :class="{'flex': open, 'hidden': !open}" class="flex-col flex-grow pb-4 md:pb-0 hidden md:flex md:justify-end md:flex-row">

            <a class="px-2 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="{{route('home')}}">Home</a>
            <a class="px-2 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="{{route('about')}}">About</a>
            <div @click.away="open = false" class="relative" x-data="{ open: false }">
              {{-- Dropdown Button --}}
              <button @click="open = !open" class="flex flex-row items-center w-full px-2 py-2 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg md:w-auto md:inline md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                <span>Our Services</span>
                <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
              </button>

              {{-- Dropdown links --}}
              <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48 z-30">
                <div class="px-2 py-2 bg-white rounded-md shadow dark-mode:bg-gray-800">

                    {{-- Graphic Designing Dropdown --}}
                    <div class="dropdown inline-block relative">
                      <button class="font-semibold py-2 px-4 rounded text-sm inline-flex items-center">
                        <span class="mr-1">Graphic Designing</span>
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/> </svg>
                      </button>
                      <ul class="dropdown-menu absolute hidden text-gray-700 pt-1">
                        <li class=""><a class="rounded-t bg-gray-100 hover:bg-gray-200 py-2 px-2 block whitespace-no-wrap" href="#">Brand Identity</a></li>
                        <li class=""><a class="bg-gray-100   hover:bg-gray-200 py-2 px-2 block whitespace-no-wrap" href="#">Company Pofile Design</a></li>
                        <li class=""><a class="rounded-b bg-gray-100 hover:bg-gray-200 py-2 px-2 block whitespace-no-wrap" href="#">Flex Brochure</a></li>
                        <li class=""><a class="rounded-b bg-gray-100 hover:bg-gray-200 py-2 px-2 block whitespace-no-wrap" href="#">Packaging Design</a></li>
                        <li class=""><a class="rounded-b bg-gray-100 hover:bg-gray-200 py-2 px-2 block whitespace-no-wrap" href="#">banner design</a></li>
                      </ul>
                    </div>
                  
                  <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Logo Designing</a>
                  <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Social Media Marketing</a>
                  <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">brand packages</a>
                  <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Web Development & Designing</a>
                  <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">animation video</a>
                  <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Video Editing</a>
                  <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">TVC's</a>
                  <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Panaflex Printing & Pasting</a>
                </div>
              </div>

            </div> 
            <a class="px-2 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Why Us</a>
            <a class="px-2 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Book a Call</a>

             

          </nav>

        </div>
    </nav>
    

    @yield('home')

    @yield('about')

    <footer class="text-gray-800 bg-gray-200">
      <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-wrap md:text-left text-center order-first">
          <div class="lg:w-1/4 md:w-1/2 w-full px-4">
            <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">CATEGORIES</h2>
            <nav class="list-none mb-10">
              <li>
                <a class="text-gray-600 hover:text-gray-800">First Link</a>
              </li>
              <li>
                <a class="text-gray-600 hover:text-gray-800">Second Link</a>
              </li>
              <li>
                <a class="text-gray-600 hover:text-gray-800">Third Link</a>
              </li>
              <li>
                <a class="text-gray-600 hover:text-gray-800">Fourth Link</a>
              </li>
            </nav>
          </div>
          <div class="lg:w-1/4 md:w-1/2 w-full px-4">
            <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">CATEGORIES</h2>
            <nav class="list-none mb-10">
              <li>
                <a class="text-gray-600 hover:text-gray-800">First Link</a>
              </li>
              <li>
                <a class="text-gray-600 hover:text-gray-800">Second Link</a>
              </li>
              <li>
                <a class="text-gray-600 hover:text-gray-800">Third Link</a>
              </li>
              <li>
                <a class="text-gray-600 hover:text-gray-800">Fourth Link</a>
              </li>
            </nav>
          </div>
          <div class="lg:w-1/4 md:w-1/2 w-full px-4">
            <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">CATEGORIES</h2>
            <nav class="list-none mb-10">
              <li>
                <a class="text-gray-600 hover:text-gray-800">First Link</a>
              </li>
              <li>
                <a class="text-gray-600 hover:text-gray-800">Second Link</a>
              </li>
              <li>
                <a class="text-gray-600 hover:text-gray-800">Third Link</a>
              </li>
              <li>
                <a class="text-gray-600 hover:text-gray-800">Fourth Link</a>
              </li>
            </nav>
          </div>
          <div class="lg:w-1/4 md:w-1/2 w-full px-4">
            <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">SUBSCRIBE</h2>
            <div class="flex xl:flex-nowrap md:flex-nowrap lg:flex-wrap flex-wrap justify-center items-end md:justify-start">
              <div class="relative w-40 sm:w-auto xl:mr-4 lg:mr-0 sm:mr-4 mr-2">
                <label for="footer-field" class="leading-7 text-sm text-gray-600">Placeholder</label>
                <input type="text" id="footer-field" name="footer-field" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:bg-transparent focus:ring-2 focus:ring-indigo-200 focus:border-indigo-500 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
              </div>
              <button class="lg:mt-2 xl:mt-0 flex-shrink-0 inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">Button</button>
            </div>
            <p class="text-gray-500 text-sm mt-2 md:text-left text-center">Bitters chicharrones fanny pack
              <br class="lg:block hidden">waistcoat green juice
            </p>
          </div>
        </div>
      </div>
      <div class="bg-gray-100">
        <div class="container px-5 py-6 mx-auto flex items-center sm:flex-row flex-col">
          <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
            <img src="{{asset('images/logo/logo.png')}}" alt="logo" class="w-8 h-8">
            <span class="ml-3 text-xl">Vision Marketing & Productions</span>
          </a>
          <p class="text-sm text-gray-500 sm:ml-6 sm:mt-0 mt-4">© 2020 Tailblocks —
            <a href="https://twitter.com/knyttneve" rel="noopener noreferrer" class="text-gray-600 ml-1" target="_blank">@knyttneve</a>
          </p>
          <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
            <a class="text-gray-500">
              <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
              </svg>
            </a>
            <a class="ml-3 text-gray-500">
              <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
              </svg>
            </a>
            <a class="ml-3 text-gray-500">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
              </svg>
            </a>
            <a class="ml-3 text-gray-500">
              <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
                <circle cx="4" cy="4" r="2" stroke="none"></circle>
              </svg>
            </a>
          </span>
        </div>
      </div>
    </footer>

</body>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

</body>
</html>