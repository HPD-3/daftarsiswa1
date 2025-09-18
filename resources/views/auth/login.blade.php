<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Daftar Siswa</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 min-h-screen flex flex-col">

    <!-- Navbar / Branding -->
    <header class="w-full p-6 flex justify-between items-center text-white">
        <h1 class="text-2xl font-bold">📚 Daftar Siswa</h1>
        <a href="{{ route('register') }}" class="hidden md:inline bg-white text-indigo-600 px-4 py-2 rounded-lg font-semibold shadow hover:bg-gray-100">
            Daftar Akun
        </a>
    </header>

    <!-- Hero Section -->
    <section class="flex-1 flex flex-col md:flex-row items-center justify-center text-white px-6">
        <!-- Left text -->
        <div class="md:w-1/2 mb-10 md:mb-0 text-center md:text-left">
            <h2 class="text-4xl font-bold mb-4">Selamat Datang di <span class="text-yellow-300">Sistem Daftar Siswa</span></h2>
            <p class="text-lg opacity-90 mb-6">Kelola data siswa dengan mudah, cepat, dan aman.  
               Login sekarang untuk mulai mengatur data sekolah Anda.</p>
        </div>

        <!-- Right: Login card -->
        <div class="md:w-1/3 w-full max-w-md bg-white/20 backdrop-blur-lg rounded-2xl shadow-xl p-8 text-white">
            <h2 class="text-2xl font-bold text-center mb-6">🔑 Login</h2>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email -->
                <div>
                    <label for="email" class="block text-sm font-medium">Email</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}"
                        class="mt-1 block w-full rounded-lg border border-gray-300 px-3 py-2 text-black focus:ring-2 focus:ring-indigo-400"
                        required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-300" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <label for="password" class="block text-sm font-medium">Password</label>
                    <input id="password" type="password" name="password"
                        class="mt-1 block w-full rounded-lg border border-gray-300 px-3 py-2 text-black focus:ring-2 focus:ring-indigo-400"
                        required autocomplete="current-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-300" />
                </div>

                <!-- Remember -->
                <div class="flex items-center mt-4">
                    <input id="remember_me" type="checkbox" name="remember"
                        class="rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                    <label for="remember_me" class="ms-2 text-sm">Ingat saya</label>
                </div>

                <!-- Actions -->
                <div class="flex items-center justify-between mt-6">
                    @if (Route::has('register'))
                        <a class="text-sm hover:underline" href="{{ route('register') }}">
                            Belum punya akun?
                        </a>
                    @endif

                    <button type="submit"
                        class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded-lg shadow-md transition">
                        Masuk
                    </button>
                </div>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center text-white py-4 opacity-70">
        &copy; {{ date('Y') }} Sistem Daftar Siswa - All Rights Reserved
    </footer>
</body>
</html>
