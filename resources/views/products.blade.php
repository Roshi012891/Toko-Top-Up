@extends('layouts.app')

@section('content')
<div class="px-8 space-y-8 animate-in fade-in duration-500">

    {{-- 1. Pesan Sukses dengan Animasi --}}
    @if(session('success'))
        {{-- Tambahkan kelas opacity-0 dan translate-y untuk persiapan animasi --}}
        <div id="success-alert" 
             class="w-full bg-green-500/10 text-green-400 p-4 rounded-2xl border border-green-500/20 font-bold text-sm shadow-lg 
                    transition-all duration-500 ease-out opacity-0 translate-y-[-20px]">
            {{ session('success') }}
        </div>
    @endif

    {{-- 2. Header & Tombol --}}
    <div class="flex justify-between items-center pb-8 border-b border-gray-800">
        <div>
            <h1 class="text-4xl font-black text-white tracking-tighter">Manajemen Produk</h1>
            <p class="text-gray-500 mt-1 font-medium">Sistem kendali inventaris & stok terpadu.</p>
        </div>
        <a href="{{ route('products.create') }}" class="bg-blue-600 hover:bg-blue-500 text-white px-8 py-3 rounded-2xl font-bold transition-all shadow-[0_0_20px_-5px_rgba(37,99,235,0.3)] active:scale-95 whitespace-nowrap">
            + Tambah Produk
        </a>
    </div>

    {{-- 3. Grid Produk --}}
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 gap-y-10">
        @if($products->count() > 0)
            <div class="col-span-full text-xs font-bold text-gray-500 uppercase tracking-widest mt-2">Daftar Produk Aktif</div>
        @endif

        @forelse($products as $product)
            <div class="group bg-gray-900/50 border border-gray-700/50 backdrop-blur-xl rounded-3xl p-6 transition-all hover:border-blue-500/50 hover:shadow-[0_0_40px_-10px_rgba(59,130,246,0.2)]">
                <div class="flex gap-4">
                    <div class="w-20 h-20 bg-gray-800 rounded-2xl flex items-center justify-center text-gray-500 font-bold border border-gray-700/50">IMG</div>
                    <div>
                        <span class="inline-flex items-center px-3 py-1 bg-blue-500/10 text-blue-400 rounded-full text-[10px] font-bold uppercase tracking-widest border border-blue-500/10">
                            {{ $product->category }}
                        </span>
                        <h3 class="text-white font-bold text-lg mt-2 group-hover:text-blue-400 transition-colors">{{ $product->name }}</h3>
                    </div>
                </div>
                <div class="mt-6 pt-5 border-t border-gray-700/50 flex items-center justify-between">
                    <p class="text-sm font-bold text-white"><span class="text-[10px] font-medium text-gray-500 mr-1">Rp</span>{{ number_format($product->price, 0, ',', '.') }}</p>
                    <div class="flex gap-2">
                        <button class="px-5 py-2.5 bg-gray-800 hover:bg-gray-700 text-white rounded-xl text-xs font-bold transition-all">Edit</button>
                        <button class="px-5 py-2.5 bg-red-500/10 hover:bg-red-500/20 text-red-400 rounded-xl text-xs font-bold transition-all">Hapus</button>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-span-full py-20 text-center text-gray-500 font-bold">Belum ada produk.</div>
        @endforelse
    </div>
</div>

{{-- 4. Script Auto-Hide & Animasi --}}
<script>
    window.addEventListener('DOMContentLoaded', () => {
        const alert = document.getElementById('success-alert');
        if (alert) {
            // Trigger animasi muncul
            setTimeout(() => {
                alert.style.opacity = "1";
                alert.style.transform = "translateY(0)";
            }, 100);

            // Trigger animasi hilang setelah 3 detik
            setTimeout(() => {
                alert.style.opacity = "0";
                alert.style.transform = "translateY(-20px)";
                // Hapus elemen dari layout setelah animasi fade selesai
                setTimeout(() => { alert.style.display = "none"; }, 500);
            }, 3000);
        }
    });
</script>
@endsection