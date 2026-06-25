@extends('layouts.app')

@section('content')
<div class="space-y-6 animate-fade-in">
    <div class="bg-gray-800 p-8 rounded-3xl border border-gray-700 shadow-xl">
        <h1 class="text-3xl font-extrabold text-white tracking-tight">Data Pembayaran</h1>
        <p class="text-gray-400 mt-2 text-lg">Kelola dan verifikasi pembayaran pelanggan di sini.</p>
    </div>

    <div class="bg-gray-800/50 rounded-3xl border border-gray-700 overflow-hidden shadow-inner">
        <div class="grid grid-cols-5 px-8 py-4 border-b border-gray-700 text-[10px] font-bold text-gray-500 uppercase tracking-widest">
            <div>ID Transaksi</div>
            <div>Metode</div>
            <div>Jumlah</div>
            <div>Status</div>
            <div class="text-right">Aksi</div>
        </div>

        <div class="divide-y divide-gray-700">
            <div class="grid grid-cols-5 px-8 py-6 items-center hover:bg-gray-750 transition-colors cursor-pointer">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-gray-900 flex items-center justify-center border border-gray-700 text-indigo-400 font-bold font-mono">
                        #PAY
                    </div>
                    <div class="text-white font-medium">9921</div>
                </div>

                <div>
                    <span class="inline-flex items-center px-4 py-1.5 rounded-full text-xs font-semibold bg-gray-900 text-gray-300 border border-gray-700">
                        Transfer Bank
                    </span>
                </div>

                <div class="text-white font-bold text-lg">
                    Rp 150.000
                </div>

                <div>
                    <span class="inline-flex items-center gap-1.5 px-4 py-1.5 rounded-full text-xs font-bold bg-yellow-500/10 text-yellow-400 border border-yellow-500/20">
                        <span class="w-1.5 h-1.5 rounded-full bg-yellow-400"></span>
                        Menunggu
                    </span>
                </div>

                <div class="text-right flex items-center justify-end gap-2">
                    <button class="bg-green-600 hover:bg-green-500 text-white px-4 py-2 rounded-xl text-xs font-bold transition-all transform hover:scale-105">
                        Verifikasi
                    </button>
                    <button class="bg-gray-700 hover:bg-red-600 text-gray-300 hover:text-white px-4 py-2 rounded-xl text-xs font-bold transition-all transform hover:scale-105">
                        Hapus
                    </button>
                </div>
            </div>
            </div>
    </div>
</div>
@endsection