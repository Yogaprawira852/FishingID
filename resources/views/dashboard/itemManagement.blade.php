@extends("layouts.maindash")
@section("container")
@include('dashboard.sidebardash');
    <div class="ml-80 mt-20">
            <div class="flex flex-row justify-between">
                <div class="flex flex-col">
                    <h1 class="font-lato font-semibold text-black text-xl">Items Management</h1>
                    <h1 class="text-slate-400 font-semibold">You can manage your items here</h1>
                </div>
                <div class="flex flex-col">
                   <button class="bg-orange-400 mr-10 py-2 px-2 rounded-lg font-lato font-semibold text-white"> + Add Item </button>

                </div>
            </div>            

        </div>
@endsection 