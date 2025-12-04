<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
</head>
<body class="bg-gray-100 text-black">

    <div class="flex min-h-screen">
    @include('components.admin-sidebar')


    <div class="flex-1 flex flex-col">
    @include('components.admin-navbar')

     <main class="p-6">
        <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-200">
            <h2 class="text-lg font-semibold mb-2">Welcome Back, Admin</h2>
            <p class="text-gray-500">This is your dashboard overview.</p>
        </div>
    </main>

    </div>

    </div>


   <script src="{{ asset('js/dashboard_style.js') }}"></script>
</body>
</html>
