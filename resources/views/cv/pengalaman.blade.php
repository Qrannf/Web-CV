@extends('layouts.app')

@section('content')
<div class="p-8">
  <h1 class="text-2xl font-bold mb-6">Pengalaman</h1>

  @foreach ($pengalaman as $item)
    <div class="mb-6 border-b pb-4">
      <h2 class="text-xl font-semibold">{{ $item->title }}</h2>
      <p class="text-gray-600">{{ $item->organisasi }}</p>
      <p class="text-sm text-gray-500">{{ $item->start_date }} - {{ $item->end_date }}</p>
      <p class="mt-2">{{ $item->description }}</p>
    </div>
  @endforeach
</div>
@endsection
