<!DOCTYPE html>
<html lang="en" class="dark">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Login Form</title>

    <!-- Flowbite CSS -->
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />

    <!-- Website Pendaftaran Siswa icon -->
    <link rel="shortcut icon" href="{{ asset('images/all-logo/jaguar-icon-title.png')}}" type="image/x-icon" />

    <!-- Load Vite -->
    @viteReactRefresh
    @vite(['resources/css/app.css', 'resources/js/app.jsx'])
    <!-- Google Fonts: Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">
</head>

<body class="font-[inter] bg-white dark:bg-black">
<!-- Hyperspeed Background -->
<div id="hyperspeed-bg" class="fixed inset-0 z-0"></div>
<!-- Overlay Gelap -->
<div class="fixed inset-0 z-[1] bg-black/10"></div>
    <!-- Form Login -->

    <section class="h-screen grid grid-cols-1 relative z-10">
        <!-- Left: Login Form -->
        <div class="flex items-center justify-center xl:justify-center">
                    <!-- Alert sukses -->
        @if(session('success'))
            <div class="p-4 mb-4 text-green-800 bg-green-100 rounded-lg">
                {{ session('success') }}
            </div>
        @endif

        <!-- Alert error -->
        @if(session('error'))
            <div class="p-4 mb-4 text-red-800 bg-red-100 rounded-lg">
                {{ session('error') }}
            </div>
        @endif
            <form class="w-full max-w-xl bg-transparent ms-0 xl:ms-12" method="post" action="/admin/login">
                @csrf
                <h1 class="mb-10 text-2xl md:text-4xl lg:text-5xl font-bold text-[var(--txt-primary)]">Hallo, Admin</h1>
                <div class="mb-6">
                    <label class="block mb-2 text-xl text-[var(--txt-primary)]" for="username">Username</label>
                    <input
                        class="text-lg w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring focus:ring-[var(--bg-primary2)] bg-transparent text-[var(--txt-primary)]"
                        type="text" name="username" id="username" placeholder="Masukkan Username" required>
                </div>
                <div class="mb-12">
                    <label class="block mb-2 text-[var(--txt-primary)] text-xl" for="password">Password</label>
                    <input
                        class="text-lg w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring focus:ring-[var(--bg-primary2)] bg-transparent text-[var(--txt-primary)]"
                        type="password" name="password" id="password" placeholder="Masukkan password" required>
                </div>
                <div class="my-3">
                    <button type="submit" name="login"
                        class="block w-full text-center cursor-pointer py-3 px-4 bg-[var(--bg-primary3)] hover:bg-[var(--bg-secondary)] text-[var(--txt-secondary)] font-bold rounded-xl shadow-md text-xl transition-all duration-500">
                        MASUK
                    </button>
                </div>
            </form>
        </div>
    </section>

    <!-- Tutup Form Login -->

    <!-- Flowbite Script -->
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>

</body>

</html>


