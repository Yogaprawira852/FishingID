@extends("layouts.main")

@section("container")   
        <div class=""><img class="w-20" src="img/logo.png" alt=""> </div>


    <section class=" grid grid-cols-3 mx-20 ">
        <div class=" justify-center">
            <img class="rounded-md" src="img/logo.png" alt="">
            <div class=" flex flex-row gap-5 py-5 justify-center items-center">
                <img class="W-24 h-24 rounded-md" src="img/logo.png" alt="">
                <img class="W-24 h-24 rounded-md" src="img/logo.png" alt="">
                <img class="W-24 h-24 rounded-md" src="img/logo.png" alt="">
                <img class="W-24 h-24 rounded-md" src="img/logo.png" alt="">
            
            </div>     
        </div>  

            <div class=" item-center mx-10 my-10">
               <h1 class="text-xl font-bold font-lato "> Judul Produk | Jenis Produk | Tipe Produk </h2>
                <div class="flex flex-row py-2">
                  <p class=" pr-10"> Terjual +20 </p>
                    <p>Rating 
                        <i class="fa-solid fa-star" style="color: #ffd43b;"></i>
                        <i class="fa-solid fa-star" style="color: #ffd43b;"></i>
                        <i class="fa-solid fa-star" style="color: #ffd43b;"></i>
                        <i class="fa-solid fa-star" style="color: #ffd43b;"></i>
                        <i class="fa-solid fa-star" style="color: #ffd43b;"></i> 
                    </p>
                </div>
                   <div>
                        <h1 class="text-4xl font-bold font-lato py-5 "> Rp400.000 </h1>
                        <p class="font-bold font-lato">Deskripsi</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus eget mollis eros. Vivamus in nisi lacinia, sagittis massa sit amet, imperdiet lacus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Aenean tellus neque, eleifend eu semper sit amet, accumsan a tortor. Duis consequat magna ut turpis facilisis, in aliquet velit porttitor. Nulla sodales tristique metus, nec dictum mauris tincidunt et.</p>
                        <p class="font-bold font-lato py-5"> Pengiriman  <i class="fa-solid fa-box"></i></p>
                        <p><i class="fa-solid fa-location-dot"></i> Dikirim dari <span class="font-semibold">Kota Bandung</span></p>
                        <p class="py-2"><i class="fa-solid fa-truck-fast"></i> Ekspedisi </p>
                        <div class="ml-5">
                        <p> EKSP Next Day</p>
                        <p> EKSP reguler</p>
                        <p> EKSP kargo</p>
                        </div>
                    </div> 
            </div>
                <div class="justify-center-center mx-auto my-10">
                     <h1 class="text-xl font-bold font-lato border-b-4"> Total Harga </h2>
                     <h1 class="text-2xl  font-lato py-5 "> Rp400.000 </h1>
                     <div>                     
                        <button class="border-2 rounded-md px-2"><i class="fa-solid fa-minus"></i> </button>
                            <span class="font-lato px-3">1</span>
                        <button class="border-2 rounded-md px-2"><i class="fa-solid fa-plus"></i> </button>
                     </div>
                    <div class="flex-col flex-grow flex font-lato">
                     <button class="bg-orange-400 rounded-md py-2 px-3 my-3 font-semibold text-white"> Beli Sekarang </button>
                     <button class="bg-slate-400 rounded-md py-2 px-3"><i class="fa-solid fa-cart-shopping"></i> Masukan Keranjang </button>
                     </div>
                </div>

    </section>
    

@endsection