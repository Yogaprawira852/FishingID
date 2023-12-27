@extends('layouts.main')
@section('container')
    <!-- hero section -->
    <div class="mt-4">
    <section class="swiper-container mx-10 my-5">
        <div class="swiper-wrapper">
            <!-- Slide 1 -->
            <div class="swiper-slide">
                <div class="grid lg:grid-cols-2 item bg-center justify-items-center gap-5 font-sans">
                    <div class="flex flex-col justify-center items-center">
                        <p class="w-full text-center text-4xl font-extrabold md:text-7xl text-orange-400">Best Choice For Fishing Gear</p>
                        <p class="w-full text-center text-2xl font-bold md:text-5xl py-3 text-slate-600">100% original</p>
                        <button class="text-lg md:text-2xl bg-slate-600 text-white hover:bg-slate-500 py-3 px-5 my-5 rounded-md"> Cek Katalog </button>
                    </div>
                    <div>
                        <img class="h-80 w-80 object-cover py-2 px-5 lg:w-[500px] lg:h-[500px] border-r-4 border-slate-400" src="img/hero.png" alt="">
                    </div>
                </div>
            </div>

            <!-- Slide 2 (Tambahkan slide lain jika diperlukan) -->
            <!-- <div class="swiper-slide">
                ... (Isi dengan konten slide kedua)
            </div> -->
        </div>

        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
        <!-- Add Navigation -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </section>


    </div> <!-- kaetegori -->
    <div>
        <div class=" mx-[10%] my-10 border-4 border-orange-400 rounded-lg shadow-md ">
            <p class="text-center py-5 text-base font-semibold bg-slate-200 mx-20 rounded-lg my-5">Kategori</p>
            <div class="grid grid-cols-8  justify-center  place-items-center mx-5 pb-5">
                <!-- nama kategori dan logo kategori disini -->
                <!-- looping disini -->

                <a href="" class="pb-3"> <img class="w-20" src="img/logo.png" alt="icon kategori">
                    <p>Kategori 1</p>
                </a>

                <!-- sampai sini -->
            </div>
        </div>
    </div>


    <!-- Item card -->
    <div class="mx-20 my-10">
        <div class="grid grid-cols-4 justify-items-center gap-2 py-20">
            <!-- looping dari sini -->
            @foreach ($items as $item)
                <div class="mb-8">
                    <!-- link produk -->
                    <a href="/item/{{ $item->id }}">
                        <div class="card">
                            <!-- Gambar -->
                            <img class="w-full h-full object-cover" src="img/hero.png" alt="produk">
                            <div class="p-5 flex flex-col gap-3">
                                <div>
                                    <span class="px-3 py-1 rounded-full text-xs bg-gray-100">{{ $item->category->name }} </span>
                                </div>
                                <!-- nama produk -->
                                <h2 class="font-semibold text-2xl overflow-ellipsis overflow-hidden whitespace-nowrap">
                                    {{ $item->title }}
                                </h2>
                                <div>
                                    <!-- harga -->
                                    <span class="text-xl font-bold">Rp.{{ number_format($item->price, 0, ',', '.') }}</span>
                                </div>
                                <div class="mt-5 flex gap-2">
                                    <button class="px-3 py-3 rounded bg-orange-400 hover:bg-orange-300 text-white font-semibold tracking-wider transition">
                                        Beli Sekarang
                                    </button>
                                    <button class="flex-grow flex justify-center items-center bg-gray-400 hover:bg-gray-300 transition rounded-md">
                                        <i class="fa-solid fa-cart-plus fa-xl" style="color: #000000;"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
            <!-- sampai sini -->
        </div>
         <!-- Bagian Pagination -->
         <div class="mt-10" style="text-align: left;">
            {{ $items->links() }}
        </div>
    </div>
</div>
</div>

    <script>
        var swiper = new Swiper('.swiper-container', {
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>
@endsection