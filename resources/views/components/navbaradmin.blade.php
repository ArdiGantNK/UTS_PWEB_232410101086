<nav class="bg-white p-4 flex items-center justify-center shadow-md sticky top-0 z-50">
    <div class="flex space-x-4 items-center">
        <a href="{{ route('home') }}" class="flex items-center py-2 px-3 text-gray-800 font-semibold">
            <img src="{{ asset('img/AU.png') }}" alt="Logo" class="h-10 w-10 mr-1">
        </a>
        <a href="/dashboard" class="py-2 px-3 text-gray-800 font-semibold hover:text-blue-300">Dashboard</a>
        <a href="/profile" class="py-2 px-3 text-gray-800 font-semibold hover:text-blue-300">Profile</a>
        <a href="/pengelolaan" class="py-2 px-3 text-gray-800 font-semibold hover:text-blue-300">Pengelolaan</a>
        <a href="{{ route('logout') }}" class="py-2 px-3 text-gray-800 font-semibold hover:text-blue-300">Logout</a>
    </div>
</nav>
