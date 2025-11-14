@extends('layouts.app')

@section('content')

{{--
=================================================
 KEAHLIAN SECTION (HALAMAN PENUH)
=================================================
--}}
<section id="keahlian" class="min-h-screen pt-32 pb-24 bg-zinc-950 text-center overflow-hidden" data-aos="fade-up">
    <!-- Wrapper konten 'z-20' -->
    <div class="relative z-20">
        <h2 class="text-4xl sm:text-5xl font-bold text-[#e9ff00] mb-12 uppercase">Keahlian</h2>
        
        <div class="max-w-4xl mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 px-6">
            @foreach ($keahlian as $item)
                <div class="p-6 bg-black border border-zinc-800 rounded-xl hover:border-[#e9ff00] transition" data-aos="flip-left" data-aos-delay="100">
                    <p class="text-[#e9ff00] font-semibold">{{ $item->nama }}</p>
                    <p class="text-gray-400 text-sm mt-1">Level: {{ ucfirst($item->level) }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

@endsection