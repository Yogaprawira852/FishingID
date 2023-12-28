@extends('layouts.main')

@section('container')
    <style>
        .total-price-container {
            text-align: center;
            margin-top: 20px;
        }

        .quantity-controls {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 10px;
        }

        .quantity-btn {
            border: 2px solid #4a5568;
            border-radius: 0.375rem;
            padding: 0.5rem;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .quantity-btn:hover {
            background-color: #cbd5e0;
        }

        .quantity-display {
            font-family: 'Lato', sans-serif;
            font-size: 1.25rem;
            font-weight: bold;
            margin: 0 1rem;
        }

        .total-price {
            font-family: 'Lato', sans-serif;
            font-size: 1.5rem;
            font-weight: bold;
            margin-top: 20px;
        }

        .buyButton,
        .cartButton {
            margin-top: 20px;
        }
    </style>
    <section class="grid grid-cols-3 mx-20 my-10">
        <div class="flex justify-center">
            <div class="flex flex-col items-center">
                <img class="rounded-md mb-5" src="{{ asset('img/' . $item->image) }}" alt="">
                <div class="flex gap-2">
                    @for ($i = 0; $i < 3; $i++)
                        <img class="w-1/3 h-20 rounded-md" src="{{ asset('img/' . $item->image) }}" alt="">
                    @endfor
                </div>
            </div>
        </div>

        <div class="mx-10 my-3rem">
            <h1 class="text-2xl font-bold font-lato">{{ $item->title }}</h1>
            <div class="flex flex-wrap gap-2 py-5">
                <span class="bg-orange-500 text-white px-3 py-1 rounded-full text-sm">{{ $item->category->name }}</span>
            </div>
            <div class="flex items-center py-2">
                <p class="pr-10">Sold {{ $item->totalSold }}</p>
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
                <h1 class="text-4xl font-bold font-lato py-5">Rp.{{ number_format($item->price, 0, ',', '.') }}</h1>
                <p class="font-bold font-lato">Description</p>
                <p>{{ $item->body }}</p>
                <p class="font-bold font-lato py-5">Shipping <i class="fa-solid fa-box"></i></p>
                <p><i class="fa-solid fa-location-dot"></i> Shipped from <span class="font-semibold">Bandung City</span></p>
                <p class="py-2"><i class="fa-solid fa-truck-fast"></i> Expedition </p>
                <div class="ml-5">
                    <p> EKSP Next Day</p>
                    <p> EKSP regular</p>
                    <p> EKSP cargo</p>
                </div>
            </div>
        </div>

        <div class="total-price-container">
            <h1 class="text-xl font-bold font-lato border-b-2 mb-3">Total Price</h1>
            <div class="quantity-controls">
                <button class="quantity-btn " onclick="updateQuantity(-1)">
                    <i class="fa-solid fa-minus"></i>
                </button>
                <span class="quantity-display border-2 border-black py-1 rounded-md px-10">1</span>
                <button class="quantity-btn " onclick="updateQuantity(1)">
                    <i class="fa-solid fa-plus"></i>
                </button>
            </div>
            <div class="total-price">
                Total: Rp.{{ number_format($item->price, 0, ',', '.') }}
            </div>
            <a href="/login?message=login">
                <button class="bg-orange-500 hover:bg-orange-600 text-white rounded-md py-2 px-4 font-semibold transition duration-300 buyButton">
                    Buy Now
                </button>
            </a>
            <a href="/login?message=login">
                <button class="bg-gray-700 hover:bg-gray-800 text-white rounded-md py-2 px-4 font-semibold mt-2 transition duration-300 cartButton">
                    <i class="fa-solid fa-cart-shopping"></i> Add to Cart
                </button>
            </a>
        </div>

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
    </section>
@endsection