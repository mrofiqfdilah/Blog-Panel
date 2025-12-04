 <aside id="sidebar"
    class="fixed lg:static -translate-x-full lg:translate-x-0
           top-0 left-0 h-full lg:h-screen w-64 bg-white
           border-r border-gray-200 p-5 space-y-6
           transition-all duration-300 z-50">
    <div class="flex items-center justify-between lg:block">
        <h2 class="text-xl font-semibold">Admin Panel</h2>
        <button id="closeSidebar" class="text-2xl lg:hidden">
            <i class="ri-close-line"></i>
        </button>
    </div>
    <nav class="space-y-2 mt-4">
        <a href="#" class="flex items-center gap-3 px-4 py-2 rounded-lg bg-black text-white">
            <i class="ri-dashboard-line text-xl"></i>
            <span>Dashboard</span>
        </a>
        <a href="#" class="flex items-center gap-3 px-4 py-2 rounded-lg hover:bg-gray-100">
            <i class="ri-article-line text-xl"></i>
            <span>Posts</span>
        </a>
        <a href="#" class="flex items-center gap-3 px-4 py-2 rounded-lg hover:bg-gray-100">
            <i class="ri-folder-line text-xl"></i>
            <span>Categories</span>
        </a>
    </nav>
</aside>
