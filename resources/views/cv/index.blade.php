@extends('layouts.app')

@section('content')

{{-- Hero Section tidak perlu animasi scroll, karena sudah terlihat --}}
<section id="hero"
    class="min-h-screen flex flex-col justify-center items-center text-center relative overflow-hidden bg-[#121212] select-none">

{{-- FOTO PROFIL DI ATAS --}}
<div class="relative z-10 mb-6" id="profile-wrapper">
    <div id="profile-img"
        class="w-44 h-44 rounded-full overflow-hidden transition-transform duration-300 ease-out will-change-transform">
        <img src="{{ asset('storage/' . $biodata->profile_image) }}" 
            alt="Foto Profil" 
            class="w-full h-full object-cover">
    </div>
</div>


    {{-- NAMA BESAR --}}
    <h1 class="text-[12vw] sm:text-[10vw] md:text-[9vw] font-extrabold opacity-80 leading-none tracking-tight z-0 px-8 text-center max-w-[90%] mx-auto animate-text-shine">
        {{ strtoupper($biodata->nama) }}
    </h1>

    {{-- INFORMASI KONTAK DI BAWAH HERO --}}
    <div class="absolute bottom-12 left-0 right-0 z-10 px-6">
        <div class="max-w-5xl mx-auto flex flex-col md:flex-row justify-center items-center gap-4 md:gap-10 text-center text-gray-400 text-sm">
            
            {{-- Alamat --}}
            <div class="flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill text-yellow-400" viewBox="0 0 16 16">
                    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                </svg>
                <span>{{ $biodata->alamat }}</span>
            </div>

            {{-- Email --}}
            <div class="flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill text-yellow-400" viewBox="0 0 16 16">
                    <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.558z"/>
                </svg>
                <a href="mailto:{{ $biodata->email }}" class="hover:text-yellow-400 transition-colors">{{ $biodata->email }}</a>
            </div>

            {{-- Telepon --}}
            <div class="flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill text-yellow-400" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                </svg>
                <a href="tel:{{ $biodata->telepon }}" class="hover:text-yellow-400 transition-colors">{{ $biodata->telepon }}</a>
            </div>
        </div>
    </div>

</section>







{{-- ABOUT SECTION --}}
{{-- [ANIMASI] Menambahkan data-aos="fade-up" --}}
<section id="about" class="py-24 bg-black text-center" data-aos="fade-up">
    <div class="max-w-3xl mx-auto">
        <h2 class="text-3xl font-bold text-[#e9ff00] mb-6 uppercase">About</h2>
        <p class="text-gray-400 leading-relaxed text-lg">{{ $biodata->about }}</p>
    </div>
</section>

{{-- PENDIDIKAN --}}
{{-- [ANIMASI] Menambahkan data-aos="fade-up" --}}
<section id="pendidikan" class="py-24 bg-zinc-950 text-center" data-aos="fade-up">
    <h2 class="text-3xl font-bold text-[#e9ff00] mb-10 uppercase">Education</h2>
    <div class="max-w-3xl mx-auto space-y-6">
        @foreach ($pendidikan as $item)
            {{-- [ANIMASI] Menambahkan data-aos="zoom-in-up" untuk setiap card --}}
            <div class="p-6 bg-black border border-zinc-800 rounded-xl text-left hover:border-[#e9ff00] transition" data-aos="zoom-in-up">
                <h3 class="text-xl font-bold text-[#e9ff00]">{{ $item->nama_sekolah }}</h3>
                <p class="text-gray-400">{{ $item->gelar }} ({{ $item->start_year }} - {{ $item->end_year }})</p>
                <p class="text-gray-500 mt-2">{{ $item->description }}</p>
            </div>
        @endforeach
    </div>
</section>

{{-- PENGALAMAN --}}
{{-- [ANIMASI] Menambahkan data-aos="fade-up" --}}
<section id="pengalaman" class="py-24 bg-black text-center" data-aos="fade-up">
    <h2 class="text-3xl font-bold text-[#e9ff00] mb-10 uppercase">Experience</h2>
    <div class="max-w-3xl mx-auto space-y-6">
        @foreach ($pengalaman as $item)
            {{-- [ANIMASI] Menambahkan data-aos="zoom-in-up" untuk setiap card --}}
            <div class="p-6 bg-zinc-950 border border-zinc-800 rounded-xl text-left hover:border-[#e9ff00] transition" data-aos="zoom-in-up" data-aos-delay="100">
                <h3 class="text-xl font-bold text-[#e9ff00]">{{ $item->title }}</h3>
                <p class="text-gray-400">{{ $item->organisasi }} ({{ $item->start_date }} - {{ $item->end_date }})</p>
                <p class="text-gray-500 mt-2">{{ $item->description }}</p>
            </div>
        @endforeach
    </div>
</section>

{{-- KEAHLIAN --}}
{{-- [ANIMASI] Menambahkan data-aos="fade-up" --}}
<section id="keahlian" class="py-24 bg-zinc-950 text-center" data-aos="fade-up">
    <h2 class="text-3xl font-bold text-[#e9ff00] mb-10 uppercase">Skills</h2>
    <div class="max-w-4xl mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($keahlian as $item)
            {{-- [ANIMASI] Menambahkan data-aos="flip-left" untuk setiap card --}}
            <div class="p-6 bg-black border border-zinc-800 rounded-xl hover:border-[#e9ff00] transition" data-aos="flip-left" data-aos-delay="50">
                <p class="text-[#e9ff00] font-semibold">{{ $item->nama }}</p>
                <p class="text-gray-400 text-sm mt-1">Level: {{ ucfirst($item->level) }}</p>
            </div>
        @endforeach
    </div>
</section>

@endsection