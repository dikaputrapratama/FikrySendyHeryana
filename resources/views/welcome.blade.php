<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio Saya</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-gray-100 font-sans min-h-screen">
    <!-- Header / Hero Section -->
    <header class="bg-slate-800 border-b border-slate-700 py-12 px-6 text-center">
        <h1 class="text-4xl font-extrabold text-blue-400">Halo, Saya <span class="text-white">fikry</span></h1>
        <p class="text-gray-400 mt-2 text-lg">Web Developer / Software Engineer</p>
    </header>

    <!-- Content Section -->
    <main class="max-w-4xl mx-auto mt-10 p-6 space-y-8">
        <!-- Tentang Saya -->
        <section class="bg-slate-800 p-6 rounded-xl shadow-lg border border-slate-700">
            <h2 class="text-2xl font-bold text-blue-400 mb-3 border-b border-slate-700 pb-2">Tentang Saya</h2>
            <p class="text-gray-300 leading-relaxed">
                Saya seorang pengembang web yang berfokus pada pembuatan aplikasi web modern menggunakan Laravel, Tailwind CSS, dan ekosistem PHP.
            </p>
        </section>

        <!-- Proyek Saya -->
        <section class="bg-slate-800 p-6 rounded-xl shadow-lg border border-slate-700">
            <h2 class="text-2xl font-bold text-blue-400 mb-4 border-b border-slate-700 pb-2">Proyek Saya</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="bg-slate-700/50 p-4 rounded-lg border border-slate-600">
                    <h3 class="font-bold text-lg text-white mb-1">Proyek 1</h3>
                    <p class="text-sm text-gray-300">Sistem Manajemen Toko Online</p>
                </div>
                <div class="bg-slate-700/50 p-4 rounded-lg border border-slate-600">
                    <h3 class="font-bold text-lg text-white mb-1">Proyek 2</h3>
                    <p class="text-sm text-gray-300">Aplikasi Kasir Berbasis Web</p>
                </div>
            </div>
        </section>
    </main>
</body>
</html>
