<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Daftar Siswa</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 min-h-screen flex flex-col">

    <!-- Navbar -->
    <header class="w-full p-6 flex justify-between items-center text-white">
        <h1 class="text-2xl font-bold">📚 Daftar Siswa</h1>
        <a href="{{ route('login') }}" class="hidden md:inline bg-white text-indigo-600 px-4 py-2 rounded-lg font-semibold shadow hover:bg-gray-100">
            Login
        </a>
    </header>

    <!-- Hero + Register Card -->
    <section class="flex-1 flex flex-col md:flex-row items-center justify-center text-white px-6">
        <!-- Left: Info -->
        <div class="md:w-1/2 mb-10 md:mb-0 text-center md:text-left">
            <h2 class="text-4xl font-bold mb-4">Bergabung dengan <span class="text-yellow-300">Sistem Daftar Siswa</span></h2>
            <p class="text-lg opacity-90 mb-6">Daftar sekarang dan nikmati kemudahan mengelola data siswa, 
                aman, cepat, dan mudah diakses dari mana saja.</p>
        </div>

        <!-- Right: Register card -->
        <div class="md:w-1/3 w-full max-w-md bg-white/20 backdrop-blur-lg rounded-2xl shadow-xl p-8 text-white">
            <h2 class="text-2xl font-bold text-center mb-6">✨ Buat Akun</h2>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div>
                    <label for="name" class="block text-sm font-medium">Nama</label>
                    <input id="name" type="text" name="name" value="{{ old('name') }}"
                        class="mt-1 block w-full rounded-lg border border-gray-300 px-3 py-2 text-black focus:ring-2 focus:ring-indigo-400"
                        required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2 text-red-300" />
                </div>

                <!-- Email -->
                <div class="mt-4">
                    <label for="email" class="block text-sm font-medium">Email</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}"
                        class="mt-1 block w-full rounded-lg border border-gray-300 px-3 py-2 text-black focus:ring-2 focus:ring-indigo-400"
                        required autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-300" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <label for="password" class="block text-sm font-medium">Password</label>
                    <input id="password" type="password" name="password"
                        class="mt-1 block w-full rounded-lg border border-gray-300 px-3 py-2 text-black focus:ring-2 focus:ring-indigo-400"
                        required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-300" />
                </div>

                <!-- Confirm Password -->
                <div class="mt-4">
                    <label for="password_confirmation" class="block text-sm font-medium">Konfirmasi Password</label>
                    <input id="password_confirmation" type="password" name="password_confirmation"
                        class="mt-1 block w-full rounded-lg border border-gray-300 px-3 py-2 text-black focus:ring-2 focus:ring-indigo-400"
                        required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-red-300" />
                </div>

                <!-- Actions -->
                <div class="flex items-center justify-between mt-6">
                    <a class="text-sm hover:underline" href="{{ route('login') }}">
                        Sudah punya akun?
                    </a>

                    <button type="submit"
                        class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded-lg shadow-md transition">
                        Register
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
