<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Panel | Signin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }
    </style>
</head>

<body class="bg-white text-black">
    <div class="min-h-screen flex items-center justify-center px-4">
        <div class="w-full max-w-md">
            <h1 class="text-3xl font-semibold text-center mb-2">
                Sign In
            </h1>
            <p class="text-center text-gray-500 mb-8">
                Blog Panel Dashboard
            </p>
            <form action="{{ route('signin_store') }}" method="POST" class="space-y-5 bg-white border border-gray-200 rounded-xl p-6 shadow-sm">
                @csrf
                <div>
                    <label class="block mb-1 text-sm font-medium">Email</label>
                    <input
                        type="email"
                        name="email"
                        class="w-full rounded-lg border border-gray-300 px-4 py-2.5 outline-none"
                        placeholder="Enter your email"
                        required
                    >
                </div>
                <div>
                    <label class="block mb-1 text-sm font-medium">Password</label>

                    <div class="relative">
                        <input
                            type="password"
                            name="password"
                            id="passwordInput"
                            class="w-full rounded-lg outline-none border border-gray-300 px-4 py-2.5 pr-12 "
                            placeholder="Enter your password"
                            required
                        >
                        <i id="togglePassword" class="ri-eye-off-line absolute right-4 top-1/2 -translate-y-1/2 text-xl cursor-pointer text-gray-500"></i>
                    </div>
                </div>
                <button
                    type="submit"
                    class="w-full bg-black text-white py-3 rounded-lg font-medium hover:bg-gray-900 transition">
                    Sign in now
                </button>
            </form>
        </div>
    </div>

    <script src="{{ asset('js/signin_style.js') }}"></script>
</body>
</html>
