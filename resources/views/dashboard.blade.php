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
    .delay-1 { animation-delay: 0.1s; }
    .delay-2 { animation-delay: 0.2s; }
    .delay-3 { animation-delay: 0.3s; }
    .delay-4 { animation-delay: 0.4s; }
    .delay-5 { animation-delay: 0.5s; }
</style>

<div class="space-y-6 animate-fade-in">
    <div class="bg-gray-800 p-6 rounded-2xl border border-gray-700">
        <h1 class="text-2xl font-bold">Overview Dashboard</h1>
        <p class="text-gray-400 text-sm mt-1">Selamat datang kembali di panel kendali utama Anda.</p>
    </div>

  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
    
    <div class="bg-gray-800 p-6 rounded-2xl border border-gray-700 flex justify-between items-center shadow-lg animate-card delay-1">
        <div>
            <p class="text-xs text-gray-400 uppercase tracking-wider">Total User</p>
            <h3 class="text-xl font-bold mt-2 text-white"><span class="text-white-300 font-extrabold mr-1">3</span> Users</h3>
        </div>
        <i class='bx bx-user text-2xl text-gray-500'></i>
    </div>

    <div class="bg-gray-800 p-6 rounded-2xl border border-gray-700 flex justify-between items-center shadow-lg animate-card delay-2">
        <div>
            <p class="text-xs text-gray-400 uppercase tracking-wider">Total Categories</p>
            <h3 class="text-xl font-bold mt-2 text-white"><span class="text-white-300 font-extrabold mr-1">4</span> Categories</h3>
        </div>
        <i class='bx bx-folder text-2xl text-gray-500'></i>
    </div>

    <div class="bg-gray-800 p-6 rounded-2xl border border-gray-700 flex justify-between items-center shadow-lg animate-card delay-3">
        <div>
            <p class="text-xs text-gray-400 uppercase tracking-wider">Total Products</p>
            <h3 class="text-xl font-bold mt-2 text-white"><span class="text-white-300 font-extrabold mr-1">5</span> Products</h3>
        </div>
        <i class='bx bx-package text-2xl text-gray-500'></i>
    </div>

</div>

<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
    
    <div class="bg-gray-800 p-6 rounded-2xl border border-gray-700 flex justify-between items-center shadow-lg animate-card delay-4">
        <div>
            <p class="text-xs text-gray-400 uppercase tracking-wider">Total Transactions</p>
            <h3 class="text-xl font-bold mt-2 text-white"><span class="text-white-300 font-extrabold mr-1">2</span> Transactions</h3>
        </div>
        <i class='bx bx-credit-card text-2xl text-gray-500'></i>
    </div>

    <div class="bg-gray-800 p-6 rounded-2xl border border-gray-700 flex justify-between items-center shadow-lg animate-card delay-5">
        <div>
            <p class="text-xs text-gray-400 uppercase tracking-wider">Total Comments</p>
            <h3 class="text-xl font-bold mt-2 text-white"><span class="text-white-300 font-extrabold mr-1">1</span> Comments</h3>
        </div>
        <i class='bx bx-message-square-dots text-2xl text-gray-500'></i>
    </div>

</div>
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <div class="lg:col-span-2 bg-gray-800 p-6 rounded-2xl border border-gray-700 flex flex-col md:flex-row gap-6 shadow-lg">
            <div class="flex-grow flex flex-col justify-between space-y-4">
                <div>
                    <p class="text-xs text-gray-400 uppercase tracking-wider">Recent Post</p>
                    <h3 class="text-lg font-bold text-white mt-2">Analisis & Update Mingguan</h3>
                    <p class="text-sm text-gray-400 mt-2 leading-relaxed">Pantau performa penjualan, kelola produk unggulan, dan pantau ulasan pelanggan Anda secara real-time.</p>
                </div>
                <a href="#" class="text-sm font-semibold text-blue-400 hover:text-blue-300 flex items-center gap-1 transition-colors">
                    Selengkapnya →
                </a>
            </div>
            <div class="w-full md:w-44 h-36 flex-shrink-0 rounded-xl overflow-hidden bg-gray-900 border border-gray-700/50">
               <img src="{{ asset('storage/image/logodash.webp') }}" class="w-full h-full object-cover filter brightness-90" alt="Kopi Kenangan">
            </div>
        </div>

        <div class="relative rounded-2xl overflow-hidden border border-gray-700 flex flex-col justify-between p-6 min-h-[160px] bg-gradient-to-t from-gray-950 via-gray-900/50 to-transparent group">
            <div class="absolute inset-0 z-0">
                <img src="{{ asset('storage/image/categories.jpg') }}" class="w-full h-full object-cover filter brightness-[0.35]" alt="Kopi Enak">
            </div>
            
     <div class="relative z-10">

                <h3 class="text-xl font-bold text-white tracking-wide">Categories</h3>

            </div>

            <div class="relative z-10">

              <a href="{{ route('categories.index') }}" class="group text-sm font-semibold text-white hover:text-blue-400 flex items-center gap-2 transition-all">
    View All Product 
    <span class="group-hover:translate-x-2 transition-transform duration-300">→</span>
</a>

            </div>

        </div>

    </div> 


@endsection