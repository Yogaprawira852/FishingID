@extends("layouts.main")

@section("container")   
       
    <section class=" grid grid-cols-3 mt-20 mx-20 ">
        <div class=" justify-center">
        <img class="rounded-md mb-5" src="{{ asset('img/' . $item->image) }}" alt="">
            <div class=" flex flex-row gap-5 py-5 justify-center items-center">
            @for ($i = 0; $i < 3; $i++)
                <img class="w-1/3 h-20 rounded-md" src="{{ asset('img/' . $item->image) }}" alt="">
            @endfor
            </div>     
        </div>  

            <div class=" item-center mx-10 my-10">
               <h1 class="text-xl font-bold font-lato "> {{ $item->title }} </h1>
                <div class="flex flex-row py-2">
                  <p class=" pr-10"> Sold {{ $item->totalSold }}</p>
                    <p>Rating
                    @for ($i = 1; $i <= 5; $i++)
                        @if ($i <= $item->rating)
                            <i class="fa-solid fa-star" style="color: #ffd43b;"></i>
                        @else
                            <i class="fa-regular fa-star" style="color: #ffd43b;"></i>
                        @endif
                    @endfor
                    </p>
                </div>
                   <div>
                        <h1 class="text-4xl font-bold font-lato py-5 item-price "> Rp {{ number_format($item->price, 0, ',', '.') }} </h1>
                        <p class="font-bold font-lato">Description</p>
                        <p>{{ $item->body }}</p>
                        <p class="font-bold font-lato py-5"> Shipping  <i class="fa-solid fa-box"></i></p>
                        <p><i class="fa-solid fa-location-dot"></i> Shipped From <span class="font-semibold">Bandung City</span></p>
                        <p class="py-2"><i class="fa-solid fa-truck-fast"></i> Expedition </p>
                        <div class="ml-5">
                        <p> EKSP Next Day</p>
                        <p> EKSP reguler</p>
                        <p> EKSP kargo</p>
                        </div>
                    </div> 
            </div>
                <div class="justify-center-center mx-auto my-10">
                     <h1 class="text-xl font-bold font-lato border-b-4"> Total Price </h2>
                     <h1 class="text-2xl  font-lato py-5 "> Total: Rp.{{ number_format($item->price, 0, ',', '.') }} </h1>
                     <div>                     
                        <button onclick="updateQuantity(-1)" class="border-2 rounded-md px-2"><i class="fa-solid fa-minus"></i> </button>
                            <span class="font-lato px-3">1</span>
                        <button onclick="updateQuantity(1)" class="border-2 rounded-md px-2"><i class="fa-solid fa-plus"></i> </button>
                     </div>
                    <div class="flex-col flex-grow flex font-lato">
                     <button class="bg-orange-400 rounded-md py-2 px-3 my-3 font-semibold text-white"> Beli Sekarang </button>
                     <button class="bg-slate-400 rounded-md py-2 px-3"><i class="fa-solid fa-cart-shopping"></i> Masukan Keranjang </button>
                     </div>
                </div>

    </section>
    
    <script>
            function updateQuantity(change) {
                var quantityDisplay = document.querySelector('.quantity-display');
                var currentQuantity = parseInt(quantityDisplay.textContent);
                var newQuantity = Math.max(1, currentQuantity + change);
                quantityDisplay.textContent = newQuantity;

                var itemPrice = parseFloat("{{ $item->price }}");
                var totalPrice = newQuantity * itemPrice;
                var totalDisplay = document.querySelector('.total-price');
                totalDisplay.textContent = 'Total: Rp.' + formatNumber(totalPrice);
            }
            
            function formatNumber(number) {
                return number.toFixed(0).replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            }
        </script>
@endsection