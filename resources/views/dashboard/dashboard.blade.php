@extends("layouts.maindash")
@section("container")
@include('dashboard.sidebardash');

<h1 class="ml-80 mt-20 text-xl font-bold ">Welcome To TackleBox, Admin !!!</h1>
<div class="grid grid-cols-3 gap-20 ml-80 mt-10 mr-5">
        
    <div class="bg-slate-200 rounded-3xl py-10 flex flex-col shadow-lg border-4 border-orange-400">
        <h1 class=" mx-auto "><i class="fa-solid fa-box fa-2xl"></i> Total Items Listed</h1>
        <h1 class="mx-auto mt-5 text-5xl">20</h1>
        
    </div>

    <div class="bg-slate-200 rounded-3xl py-10  flex flex-col shadow-lg border-4 border-orange-400">
         <h1 class=" mx-auto "><i class="fa-solid fa-dolly fa-2xl"></i> Total Items Sold</h1>
         <h1 class="mx-auto mt-5 text-5xl">43</h1>

    </div>

    <div class="bg-slate-200 rounded-3xl py-10  flex flex-col shadow-lg border-4 border-orange-400">
         <h1 class=" mx-auto "><i class="fa-solid fa-wallet fa-2xl"></i> Total Ravenue</h1>
         <h1 class="mx-auto mt-5 text-5xl">Rp.2000.00</h1>

    </div>
</div>
<div class="ml-80 mt-10 border-b-2 mb-80 mr-5">
 
</div>
@endsection