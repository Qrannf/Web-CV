<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale-1.0">
    <title>{{ $biodata->nama ?? 'Portfolio' }}</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700;900&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #000000;
            color: #fff;
        }
    </style>
    
    <!-- Perbaikan Mobile (Marquee) -->
    <style>
        @media (max-width: 767px) {
            .social-marquee a {
                font-size: 3.75rem !important; 
                padding-left: 1rem !important;
                padding-right: 1rem !important;
            }
            .social-marquee .dot {
                width: 0.5rem !important;
                height: 0.5rem !important;
            }
        }
    </style>
</head>


<body class="bg-black text-gray-200 font-sans scroll-smooth overflow-x-hidden">

<!-- Canvas Partikel (z-10) -->
<canvas id="particle-canvas" class="fixed top-0 left-0 w-full h-full z-10"></canvas>

{{-- HAMBURGER HEADER (z-50) --}}
<header class="fixed top-8 left-0 w-full px-6 md:px-12 z-50 flex items-center justify-between bg-transparent pointer-events-none">
    
    {{-- [PERUBAHAN] Elemen Kosong (Sekarang di Kiri) --}}
    <div class="w-8 h-8">
        {{-- Ini adalah "spacer" seukuran tombol hamburger (w-8) --}}
    </div>


    {{-- [PERUBAHAN] Tombol Hamburger (Sekarang di Kanan) --}}
    <div class="flex items-center space-x-3 pointer-events-auto">
        <button id="menuToggle"
                class="relative w-8 h-8 flex flex-col justify-between group focus:outline-none cursor-pointer">
            <span class="block h-0.5 bg-white transition-all duration-300 group-[.active]:rotate-45 group-[.active]:translate-y-3"></span>
            <span class="block h-0.5 bg-white transition-all duration-300 group-[.active]:opacity-0"></span>
            <span class="block h-0.5 bg-white transition-all duration-300 group-[.active]:-rotate-45 group-[.active]:-translate-y-3"></span>
        </button>
    </div>
</header>


    {{-- OVERLAY MENU (z-40) --}}
    <!-- [PERUBAHAN] Diubah agar muncul dari kanan -->
    <div id="overlayMenu" 
         class="fixed inset-0 bg-black/95 flex flex-col justify-center items-end pr-16 md:pr-24 space-y-4 text-4xl font-extrabold uppercase tracking-wide transform translate-x-full transition-transform duration-500 z-40">
        
        <a href="{{ url('/') }}" class="menu-link text-gray-400 hover:text-yellow-400 transition" onclick="closeMenu()">Home</a>
        <a href="{{ url('/#about') }}" class="menu-link text-gray-400 hover:text-yellow-400 transition" onclick="closeMenu()">Tentang</a>
        <a href="{{ url('/pendidikan') }}" class="menu-link text-gray-400 hover:text-yellow-400 transition" onclick="closeMenu()">Pendidikan</a>
        <a href="{{ url('/pengalaman') }}" class="menu-link text-gray-400 hover:text-yellow-400 transition" onclick="closeMenu()">Pengalaman</a>
        <a href="{{ url('/keahlian') }}" class="menu-link text-gray-400 hover:text-yellow-400 transition" onclick="closeMenu()">Keahlian</a>
    </div>

    <!-- Konten Utama (z-0, Latar Belakang) -->
    <main class="relative z-0 bg-black">
        @yield('content')
    </main>


    <!-- Pre-Footer Social Marquee (z-20) -->
    <section class="relative z-20 w-full py-12 md:py-20 overflow-hidden group social-marquee">
        <div class="flex animate-[marquee_30s_linear_infinite] group-hover:[animation-play-state:paused]">
            
            <!-- Blok Konten 1 -->
            <div class="flex-shrink-0 flex items-center justify-around w-full min-w-full">
                <a href="https://www.instagram.com/qrannf/" target="_blank" class="text-7xl md:text-9xl font-extrabold text-[#e9ff00] hover:text-white hover:line-through transition-all duration-300 px-8">INS</a>
                <span class="w-3 h-3 bg-zinc-700 rounded-full dot" aria-hidden="true"></span>
                <a href="https://x.com/qrannf" target="_blank" class="text-7xl md:text-9xl font-extrabold text-[#e9ff00] hover:text-white hover:line-through transition-all duration-300 px-8">X</a>
                <span class="w-3 h-3 bg-zinc-700 rounded-full dot" aria-hidden="true"></span>
                <a href="https://www.linkedin.com/in/syaqiran/" target="_blank" class="text-7xl md:text-9xl font-extrabold text-[#e9ff00] hover:text-white hover:line-through transition-all duration-300 px-8">LIN</a>
                <span class="w-3 h-3 bg-zinc-700 rounded-full dot" aria-hidden="true"></span>
                <a href="https://github.com/Qrannf" target="_blank" class="text-7xl md:text-9xl font-extrabold text-[#e9ff00] hover:text-white hover:line-through transition-all duration-300 px-8">GIT</a>
            </div>

            <!-- Blok Konten 2 (Kopi identik) -->
            <div class="flex-shrink-0 flex items-center justify-around w-full min-w-full" aria-hidden="true">
                <a href="https://www.instagram.com/qrannf/" target="_blank" class="text-7xl md:text-9xl font-extrabold text-[#e9ff00] hover:text-white hover:line-through transition-all duration-300 px-8">INS</a>
                <span class="w-3 h-3 bg-zinc-700 rounded-full dot" aria-hidden="true"></span>
                <a href="https://x.com/qrannf" target="_blank" class="text-7xl md:text-9xl font-extrabold text-[#e9ff00] hover:text-white hover:line-through transition-all duration-300 px-8">X</a>
                <span class="w-3 h-3 bg-zinc-700 rounded-full dot" aria-hidden="true"></span>
                <a href="https://www.linkedin.com/in/syaqiran/" target="_blank" class="text-7xl md:text-9xl font-extrabold text-[#e9ff00] hover:text-white hover:line-through transition-all duration-300 px-8">LIN</a>
                <span class="w-3 h-3 bg-zinc-700 rounded-full dot" aria-hidden="true"></span>
                <a href="https://github.com/Qrannf" target="_blank" class="text-7xl md:text-9xl font-extrabold text-[#e9ff00] hover:text-white hover:line-through transition-all duration-300 px-8">GIT</a>
            </div>
        </div>
    </section>

    <!-- Footer (z-20) -->
    <footer class="relative z-20 text-center text-gray-500 py-6 border-t border-zinc-900">
        <p>© {{ date('Y') }} {{ $biodata->nama }}. All rights reserved.</p>
    </footer>

    <!-- Tombol Scroll ke Atas (z-50) -->
    <button id="scrollTopBtn" 
        class="hidden fixed bottom-6 right-6 bg-blue-600 hover:bg-blue-700 text-white p-3 rounded-full shadow-lg transition z-50">
        ↑
    </button>

    <script>
    document.addEventListener("DOMContentLoaded", () => {

        // === MENU TOGGLE ===
        const menuBtn = document.getElementById('menuToggle');
        const overlayMenu = document.getElementById('overlayMenu');

        menuBtn.addEventListener('click', () => {
            menuBtn.classList.toggle('active');
            // [PERUBAHAN] Mengubah kelas yang di-toggle
            overlayMenu.classList.toggle('translate-x-full');
        });

        function closeMenu() {
            menuBtn.classList.remove('active'); 
            // [PERUBAHAN] Mengubah kelas yang di-add
            overlayMenu.classList.add('translate-x-full');
        }
        window.closeMenu = closeMenu;

        // === SCROLL TO TOP ===
        const scrollBtn = document.getElementById('scrollTopBtn');
        window.addEventListener('scroll', () => {
            scrollBtn.classList.toggle('hidden', window.scrollY < 400);
        });
        scrollBtn.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));

        // === PARALLAX HERO ===
        const hero = document.getElementById('hero');
        const profileImgWrapper = document.getElementById('profile-img-anim-wrapper'); 

        if (hero && profileImgWrapper) {
            hero.addEventListener('mousemove', (e) => {
                const { width, height, left, top } = hero.getBoundingClientRect();
                const x = e.clientX - left - width / 2;
                const y = e.clientY - top - height / 2;
                const moveX = x / 25;
                const moveY = y / 25;
                profileImgWrapper.style.transform = `translate(${moveX}px, ${moveY}px)`;
            });

            hero.addEventListener('mouseleave', () => {
                profileImgWrapper.style.transform = 'translate(0, 0)';
            });
        } else {
            console.warn('Elemen hero atau profile-img-anim-wrapper tidak ditemukan.');
        }

        // === ANIMASI NAMA (CASCADE/NGETIK UNTUK 2 BARIS) ===
        const nameElement = document.getElementById('hero-name-anim');
        if (nameElement) {
            const fullName = nameElement.dataset.text; 
            const breakWord = "FADLILLAH"; 
            
            let line1Text = fullName;
            let line2Text = "";

            const breakIndex = fullName.indexOf(breakWord);
            
            if (breakIndex > -1) {
                line1Text = fullName.substring(0, breakIndex); 
                line2Text = fullName.substring(breakIndex);
            }

            nameElement.innerHTML = ''; 
            let charDelay = 50;
            let totalDelay = 400; 

            // --- Proses Baris 1 ---
            const line1Span = document.createElement('span');
            line1Span.className = 'block animate-cascade-in'; 
            nameElement.appendChild(line1Span);

            line1Text.split('').forEach((char, charIndex) => {
                const span = document.createElement('span');
                span.innerHTML = char === ' ' ? '&nbsp;' : char;
                span.style.animationDelay = `${totalDelay + (charIndex * charDelay)}ms`;
                line1Span.appendChild(span);
            });

            totalDelay += (line1Text.length * charDelay) + 100; 

            // --- Proses Baris 2 (jika ada) ---
            if (line2Text) {
                const line2Span = document.createElement('span');
                line2Span.className = 'block animate-cascade-in';
                nameElement.appendChild(line2Span);

                line2Text.split('').forEach((char, charIndex) => {
                    const span = document.createElement('span');
                    span.innerHTML = char === ' ' ? '&nbsp;' : char;
                    span.style.animationDelay = `${totalDelay + (charIndex * charDelay)}ms`;
                    line2Span.appendChild(span);
                });
            }
        
        } else {
            console.warn("Elemen 'hero-name-anim' tidak ditemukan.");
        }


        // === PARTICLE NETWORK ===
        const canvas = document.getElementById('particle-canvas');
        if (canvas) {
            const ctx = canvas.getContext('2d');
            let particles = [];
            let mouse = { x: null, y: null };

            const particleColor = '#e9ff00'; 

            function resizeCanvas() {
                canvas.width = window.innerWidth;
                canvas.height = window.innerHeight;
            }
            resizeCanvas();
            window.addEventListener('resize', resizeCanvas);

            canvas.addEventListener('mousemove', (e) => {
                mouse.x = e.clientX;
                mouse.y = e.clientY;
            });
            canvas.addEventListener('mouseleave', () => {
                mouse.x = null;
                mouse.y = null;
            });

            class Particle {
                constructor() {
                    this.x = Math.random() * canvas.width;
                    this.y = Math.random() * canvas.height;
                    this.size = Math.random() * 2 + 1; 
                    this.speedX = (Math.random() * 2 - 1) * 0.5; 
                    this.speedY = (Math.random() * 2 - 1) * 0.5; 
                    this.opacity = Math.random() * 0.5 + 0.2; 
                }
                update() {
                    if (this.x > canvas.width || this.x < 0) this.speedX *= -1;
                    if (this.y > canvas.height || this.y < 0) this.speedY *= -1;
                    this.x += this.speedX;
                    this.y += this.speedY;
                }
                draw() {
                    ctx.fillStyle = `rgba(233, 255, 0, ${this.opacity})`;
                    ctx.beginPath();
                    ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
                    ctx.fill();
                }
            }

            function initParticles() {
                particles = [];
                let particleCount = (canvas.width * canvas.height) / 10000; 
                for (let i = 0; i < particleCount; i++) {
                    particles.push(new Particle());
                }
            }
            initParticles();

            function connectParticles() {
                let maxDist = 100; 
                let mouseDist = 120; 

                for (let a = 0; a < particles.length; a++) {
                    for (let b = a + 1; b < particles.length; b++) {
                        let dx = particles[a].x - particles[b].x;
                        let dy = particles[a].y - particles[b].y;
                        let dist = Math.sqrt(dx * dx + dy * dy);

                        if (dist < maxDist) {
                            let opacity = 1 - (dist / maxDist);
                            ctx.strokeStyle = `rgba(233, 255, 0, ${opacity * 0.3})`; 
                            ctx.lineWidth = 0.5;
                            ctx.beginPath();
                            ctx.moveTo(particles[a].x, particles[a].y);
                            ctx.lineTo(particles[b].x, particles[b].y);
                            ctx.stroke();
                        }
                    }
                    
                    if (mouse.x && mouse.y) {
                        let dx = particles[a].x - mouse.x;
                        let dy = particles[a].y - mouse.y;
                        let dist = Math.sqrt(dx * dx + dy * dy);

                        if (dist < mouseDist) {
                            let opacity = 1 - (dist / mouseDist);
                            ctx.strokeStyle = `rgba(233, 255, 0, ${opacity * 0.5})`; 
                            ctx.lineWidth = 1;
                            ctx.beginPath();
                            ctx.moveTo(particles[a].x, particles[a].y);
                            ctx.lineTo(mouse.x, mouse.y);
                            ctx.stroke();
                        }
                    }
                }
            }

            function animateParticles() {
                ctx.clearRect(0, 0, canvas.width, canvas.height);
                for (let particle of particles) {
                    particle.update();
                    particle.draw();
                }
                connectParticles();
                requestAnimationFrame(animateParticles);
            }
            animateParticles();
            
            window.addEventListener('resize', () => {
                resizeCanvas();
                initParticles();
            });
        }

    });
    </script>

</body>
</html>