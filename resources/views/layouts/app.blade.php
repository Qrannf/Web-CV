<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $biodata->nama ?? 'Portfolio' }}</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700;900&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #121212;
            color: #fff;
        }
    </style>
</head>


<body class="bg-gray-950 text-gray-200 font-sans scroll-smooth overflow-x-hidden">

{{-- HAMBURGER HEADER --}}
<header class="fixed top-8 left-0 w-full px-12 z-50 flex items-center justify-between bg-transparent pointer-events-none">
    
    {{-- Tombol Hamburger (Kiri) --}}
    <div class="flex items-center space-x-3 pointer-events-auto">
        <button id="menuToggle"
                class="relative w-8 h-8 flex flex-col justify-between group focus:outline-none cursor-pointer">
            <span class="block h-0.5 bg-white transition-all duration-300 group-[.active]:rotate-45 group-[.active]:translate-y-3"></span>
            <span class="block h-0.5 bg-white transition-all duration-300 group-[.active]:opacity-0"></span>
            <span class="block h-0.5 bg-white transition-all duration-300 group-[.active]:-rotate-45 group-[.active]:-translate-y-3"></span>
        </button>
    </div>

</header>


    {{-- OVERLAY MENU (slide kiri kayak template) --}}
    <div id="overlayMenu" 
         class="fixed inset-0 bg-gray-950/95 flex flex-col justify-center pl-16 space-y-4 text-4xl font-extrabold uppercase tracking-wide transform -translate-x-full transition-transform duration-500 z-40">
        
        {{-- Link Menu --}}
        <a href="#hero" class="menu-link text-gray-400 hover:text-yellow-400 transition" onclick="closeMenu()">Home</a>
        <a href="#about" class="menu-link text-gray-400 hover:text-yellow-400 transition" onclick="closeMenu()">Tentang</a>
        <a href="#pendidikan" class="menu-link text-gray-400 hover:text-yellow-400 transition" onclick="closeMenu()">Pendidikan</a>
        <a href="#pengalaman" class="menu-link text-gray-400 hover:text-yellow-400 transition" onclick="closeMenu()">Pengalaman</a>
        <a href="#keahlian" class="menu-link text-gray-400 hover:text-yellow-400 transition" onclick="closeMenu()">Keahlian</a>
    </div>

    {{-- [PERBAIKAN] Menambahkan kelas "fade-zoom-in" di sini --}}
    <main class="fade-zoom-in">
        @yield('content')
    </main>

    {{-- FOOTER --}}
    <footer class="text-center text-gray-500 py-6 border-t border-gray-800 mt-16">
        <p>© {{ date('Y') }} {{ $biodata->nama }}. All rights reserved.</p>
    </footer>

    {{-- Tombol Scroll ke Atas --}}
    <button id="scrollTopBtn" 
        class="hidden fixed bottom-6 right-6 bg-blue-600 hover:bg-blue-700 text-white p-3 rounded-full shadow-lg transition">
        ↑
    </button>

    <script>
document.addEventListener("DOMContentLoaded", () => {

    // === MENU TOGGLE ===
    const menuBtn = document.getElementById('menuToggle');
    const overlayMenu = document.getElementById('overlayMenu');

    menuBtn.addEventListener('click', () => {
        // [PERBAIKAN] Menambahkan toggle 'active' untuk animasi X
        menuBtn.classList.toggle('active'); 
        overlayMenu.classList.toggle('-translate-x-full');
    });

    function closeMenu() {
        menuBtn.classList.remove('active'); // Pastikan X kembali jadi hamburger
        overlayMenu.classList.add('-translate-x-full');
    }
    window.closeMenu = closeMenu; // biar fungsi global tetap bisa dipanggil dari link

    // === SCROLL TO TOP ===
    const scrollBtn = document.getElementById('scrollTopBtn');
    window.addEventListener('scroll', () => {
        scrollBtn.classList.toggle('hidden', window.scrollY < 400);
    });
    scrollBtn.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));

    // === PARALLAX HERO ===
    const hero = document.getElementById('hero');
    const profileImg = document.getElementById('profile-img');

    if (hero && profileImg) {
        hero.addEventListener('mousemove', (e) => {
            const { width, height, left, top } = hero.getBoundingClientRect();
            const x = e.clientX - left - width / 2;
            const y = e.clientY - top - height / 2;
            const moveX = x / 25;
            const moveY = y / 25;
            profileImg.style.transform = `translate(${moveX}px, ${moveY}px) scale(1.05)`;
        });

        hero.addEventListener('mouseleave', () => {
            profileImg.style.transform = 'translate(0, 0)';
        });
    } else {
        // Ini normal jika 'hero' tidak ada di setiap halaman
        // console.warn('Elemen hero atau profile-img tidak ditemukan.');
    }

});
</script>


</body>
</html>