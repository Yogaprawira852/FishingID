@extends("admin.layouts.main")
@section("container")
@include('admin.layouts.sidebar');

<h1 class="ml-80 mt-20 text-xl font-bold ">Welcome To Dashboard, Admin !!!</h1>
<div class="grid grid-cols-3 gap-20 ml-80 mt-10 mr-5">

    <div class="bg-slate-200 rounded-3xl py-10 flex flex-col shadow-lg border-4 border-orange-400">
        <h1 class=" mx-auto "><i class="fa-solid fa-box fa-2xl"></i> Total Items</h1>
        <h1 class="mx-auto mt-5 text-5xl">{{ $totalItems }}</h1>

    </div>

    <div class="bg-slate-200 rounded-3xl py-10  flex flex-col shadow-lg border-4 border-orange-400">
         <h1 class=" mx-auto "><i class="fa-solid fa-dolly fa-2xl"></i> Total Categories</h1>
         <h1 class="mx-auto mt-5 text-5xl">{{ $totalCategories }}</h1>

    </div>

    <div class="bg-slate-200 rounded-3xl py-10  flex flex-col shadow-lg border-4 border-orange-400">
         <h1 class=" mx-auto "><i class="fa-solid fa-wallet fa-2xl"></i> Total Ravenue</h1>
         <h1 class="mx-auto mt-5 text-4xl overflow-hidden">Rp.200.000.000.00</h1>

    </div>
</div>
<div class="ml-80 mt-10 border-b-2 mb-80 mr-5">

</div>
@endsection