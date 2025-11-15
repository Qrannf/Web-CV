@extends('layouts.app')

@section('content')

{{--
=================================================
 PENGALAMAN SECTION (HALAMAN PENUH)
=================================================
--}}
<section id="pengalaman" class="min-h-screen pt-32 pb-24 bg-black text-center overflow-hidden" data-aos="fade-up">
    <div class="relative z-20">
        <h2 class="text-4xl sm:text-5xl font-bold text-[#e9ff00] mb-12 uppercase">Pengalaman</h2>
        
        <div class="max-w-3xl mx-auto space-y-6 px-6">
            @foreach ($pengalaman as $item)
                <div class="p-6 bg-zinc-950 border border-zinc-800 rounded-xl text-left hover:border-[#e9ff00] transition" data-aos="zoom-in-up">
                    <h3 class="text-xl font-bold text-[#e9ff00]">{{ $item->title }}</h3>
                    <p class="text-gray-400">{{ $item->organisasi }} ({{ $item->start_date }} - {{ $item->end_date }})</p>
                    <p class="text-gray-500 mt-2">{{ $item->description }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

@endsection