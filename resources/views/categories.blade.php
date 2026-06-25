@extends('layouts.app') 

@section('content')

<style>
    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .animate-card {
        animation: fadeInUp 0.6s ease-out forwards;
        opacity: 0;
    }
</style>

@php
    $kategori = [
        ['nama' => 'Valorant',   'img' => 'cate1.jpg',          'link' => '#'],
        ['nama' => 'Dota 2',      'img' => 'cate2.jpg', 'link' => '#'],
        ['nama' => 'Roblox',         'img' => 'cate3.jpg',       'link' => '#'],
        ['nama' => 'Counter-Strike',     'img' => 'cate4.jpg',  'link' => '#'],
        ['nama' => 'Marvel Rivals',    'img' => 'cate5.jpg',          'link' => '#'], 
        ['nama' => 'Apex Legends',   'img' => 'cate6.jpg', 'link' => '#'], 
        ['nama' => 'Fornite',     'img' => 'cate7.jpg',       'link' => '#'], 
        ['nama' => 'Wuthering Waves',      'img' => 'cate8.jpg',  'link' => '#'], 
    ];
@endphp

<div class="space-y-6">
    <div class="bg-gray-800 p-6 rounded-2xl border border-gray-700">
        <h1 class="text-2xl font-bold text-white">Kategori Produk</h1>
        <p class="text-gray-400 text-sm mt-1">Total ada {{ count($kategori) }} kategori tersedia.</p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        @foreach ($kategori as $index => $item)
        <div class="relative rounded-2xl overflow-hidden border border-gray-700 flex flex-col justify-between p-6 min-h-[160px] bg-gradient-to-t from-gray-950 via-gray-900/50 to-transparent group shadow-lg animate-card" 
            style="animation-delay: {{ ($index + 1) * 0.1 }}s;">
            
            <div class="absolute inset-0 z-0">
                {{-- Memanggil file dari public/image/ --}}
                <img src="{{ asset('storage/image/' . $item['img']) }}" 
                     class="w-full h-full object-cover filter brightness-[0.35] group-hover:scale-105 transition-transform duration-500" 
                     alt="{{ $item['nama'] }}">
            </div>
            
            <div class="relative z-10">
                <h3 class="text-xl font-bold text-white tracking-wide">{{ $item['nama'] }}</h3>
            </div>
            
            <div class="relative z-10">
                <a href="{{ $item['link'] }}" class="text-sm font-semibold text-white/90 hover:text-blue-400 flex items-center gap-2 group-hover:translate-x-1 transition-all">
                    View All →
                </a>
            </div>
        </div>
        @endforeach
    </div> 
</div>

@endsection