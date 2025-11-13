@extends('layouts.app')

@section('content')
<div class="p-8">
  <h1 class="text-2xl font-bold mb-4">Daftar Keahlian</h1>

  @foreach ($keahlian as $item)
    <div class="mb-4 border-b pb-2">
      <p class="font-semibold">{{ $item->nama }}</p>
      <p class="text-gray-500 text-sm">Level: {{ ucfirst($item->level) }}</p>
    </div>
  @endforeach
</div>
@endsection
