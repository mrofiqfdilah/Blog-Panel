  <header class="flex items-center justify-between bg-white border-b border-gray-200 px-6 py-4">
    <div class="flex items-center gap-4">
        <button id="mobileMenuBtn" class="text-2xl cursor-pointer lg:hidden">
            <i class="ri-menu-line"></i>
        </button>
        <h1 class="text-xl font-semibold">Dashboard</h1>
    </div>

    <div class="relative flex items-center gap-6">
        <i class="ri-notification-3-line text-2xl cursor-pointer"></i>
        <img id="pfpBtn" src="{{ asset('images/dashboard-pfp.png') }}" class="w-10 h-10 object-cover rounded-full cursor-pointer" />
        <div id="popupMenu" class="hidden absolute right-0 top-12 bg-white border border-gray-200 shadow-lg rounded-lg w-40 py-2">
            <a href="" class="block px-4 py-2 hover:bg-gray-100">Logout</a>
        </div>
    </div>
</header>
