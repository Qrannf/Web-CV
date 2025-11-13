@extends('layouts.app')

@section('content')
<div class="p-8">
  <h1 class="text-2xl font-bold mb-6">Riwayat Pendidikan</h1>

  @foreach ($pendidikan as $item)
    <div class="mb-6 border-b pb-4">
      <h2 class="text-xl font-semibold">{{ $item->nama_sekolah }}</h2>
      <p class="text-gray-600">{{ $item->gelar }}</p>
      <p class="text-sm text-gray-500">{{ $item->start_year }} - {{ $item->end_year }}</p>
      <p class="mt-2">{{ $item->description }}</p>
    </div>
  @endforeach
</div>
@endsection
