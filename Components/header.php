<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mobile-Responsive Navbar</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
  <nav class="bg-white shadow-lg">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center justify-between h-16 mb-0"> <!-- Removed bottom margin -->
      <!-- Mobile Menu Button -->
      <div class="sm:hidden">
        <button id="mobile-menu-button" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-black hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
          <span class="sr-only">Open main menu</span>
          <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
        </button>
      </div>

      <!-- Logo -->
      <a href="#" class="flex-shrink-0 flex items-center text-xl font-bold text-rose-900">
        Pearl & Prestige
      </a>

      <!-- Desktop Navigation -->
      <div class="hidden sm:ml-6 sm:flex sm:space-x-8">
        <a href="#" class="text-gray-900 hover:bg-gray-200 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium transition duration-300 ease-in-out">
          New Arrivals
        </a>
        <a href="#" class="text-gray-900 hover:bg-gray-200 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium transition duration-300 ease-in-out">
          Women
        </a>
        <a href="#" class="text-gray-900 hover:bg-gray-200 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium transition duration-300 ease-in-out">
          Men
        </a>
        <a href="#" class="text-gray-900 hover:bg-gray-200 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium transition duration-300 ease-in-out">
          Gifts
        </a>
        <a href="#" class="text-gray-900 hover:bg-gray-200 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium transition duration-300 ease-in-out">
          Contacts
        </a>
      </div>

      <!-- User and Cart Icons -->
      <div class="flex items-center space-x-2">
        <a href="#" class="text-gray-400 hover:text-gray-500 px-2 py-2 rounded-md text-sm font-medium transition duration-300 ease-in-out">
          <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
          </svg>
        </a>
        <a href="#" class="text-gray-400 hover:text-gray-500 px-2 py-2 rounded-md text-sm font-medium transition duration-300 ease-in-out">
          <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
          </svg>
        </a>
      </div>

    </div>

    <!-- Mobile Navigation Menu -->
    <div id="mobile-menu" class="sm:hidden hidden">
      <div class="pt-2 pb-3 space-y-1">
        <a href="#" class="text-gray-900 hover:bg-gray-200 block px-2 py-1 rounded-md text-base font-medium">
          New Arrivals
        </a>
        <a href="#" class="text-gray-900 hover:bg-gray-200 block px-2 py-1 rounded-md text-base font-medium">
          Women
        </a>
        <a href="#" class="text-gray-900 hover:bg-gray-200 block px-2 py-1 rounded-md text-base font-medium">
          Men
        </a>
        <a href="#" class="text-gray-900 hover:bg-gray-200 block px-2 py-1 rounded-md text-base font-medium">
          Gifts
        </a>
        <a href="#" class="text-gray-900 hover:bg-gray-200 block px-2 py-1 rounded-md text-base font-medium">
          Contacts
        </a>
      </div>
    </div>
  </nav>

  <!-- Mobile Menu Toggle Script -->
  <script>
    document.getElementById('mobile-menu-button').addEventListener('click', function() {
      var mobileMenu = document.getElementById('mobile-menu');
      mobileMenu.classList.toggle('hidden');
    });
  </script>
</body>
</html>
