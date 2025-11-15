@extends('layouts.app')

@section('content')

{{--
=================================================
 PENDIDIKAN SECTION (HALAMAN PENUH)
=================================================
--}}
<section id="pendidikan" class="min-h-screen pt-32 pb-24 bg-zinc-950 text-center overflow-hidden" data-aos="fade-up">
    <div class="relative z-20">
        <h2 class="text-4xl sm:text-5xl font-bold text-[#e9ff00] mb-12 uppercase">Pendidikan</h2>
        
        <div class="max-w-3xl mx-auto space-y-6 px-6">
            @foreach ($pendidikan as $item)
                <div class="p-6 bg-black border border-zinc-800 rounded-xl text-left hover:border-[#e9ff00] transition" data-aos="zoom-in-up">
                    <h3 class="text-xl font-bold text-[#e9ff00]">{{ $item->nama_sekolah }}</h3>
                    <p class="text-gray-400">{{ $item->gelar }} ({{ $item->start_year }} - {{ $item->end_year }})</p>
                    <p class="text-gray-500 mt-2">{{ $item->description }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

@endsection