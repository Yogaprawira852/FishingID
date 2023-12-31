@extends('user.layouts.main')

@section('container')
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8 my-32">
        \
        <div class="mb-8">
            <!-- link produk -->
            @foreach ($items as $item)
            @php
                    $ID = $item->id;
                    $Judul = $item->title;
            @endphp
                <a href="/item/{{ $item->id }}">
                        <div class="card">
                            <!-- Gambar -->
                            <img class="w-full h-full object-cover" src="img/hero.png" alt="produk">
                            <div class="p-5 flex flex-col gap-3">
                                <div>
                                    <span class="px-3 py-1 rounded-full text-xs bg-gray-100">{{ $item->category->name }}
                                    </span>
                                </div>
                                <!-- nama produk -->
                                <h2 class="font-semibold text-2xl overflow-ellipsis overflow-hidden whitespace-nowrap">
                                    {{$Judul }}
                                </h2>
                                <div>
                                    <!-- harga -->
                                    <span class="text-xl font-bold">Rp.{{ number_format($item->price, 0, ',', '.') }}</span>
                                </div>
                                <div class="mt-5 flex gap-2">
                                    <button
                                        class="px-3 py-3 rounded bg-orange-400 hover:bg-orange-300 text-white font-semibold tracking-wider transition">
                                        Buy now
                                    </button>
                                    <button
                                        class="flex-grow flex justify-center items-center bg-gray-400 hover:bg-gray-300 transition rounded-md">
                                        <i class="fa-solid fa-cart-plus fa-xl" style="color: #000000;"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
    </div>
@endsection