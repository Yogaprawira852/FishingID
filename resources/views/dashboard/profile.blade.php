@extends("layouts.maindash")
@section("container")
@include('dashboard.sidebardash');
        <img class="w-full mb-2 " src="img/banner.png" alt="">

    <div class="ml-80 ">
        <div class="flex flex-row">
            <img class="rounded-full w-40   object-cover object-top border-2 border-gray-200" src="img/logo.png" alt="">
            <h1 class="font-poppins font-bold text-slate-700  text-4xl my-auto px-5 ">Admin</h1>
        </div>  
        <div class="mt-5 flex flex-col mb-60">
            <div class="border-b-2  flex flex-row justify-between mr-5">
            <h1 class="pt-3 font-semibold">Biodata</h1>
            <a class="bg-orange-400 text-white font-semibold rounded-lg pt-1.5 px-2 " href="">Edit Profile <i class="fa-solid fa-pen-to-square"></i></a>
            </div>
            <h1 class="pt-3">Nama            : Admin </h1>
            <h1>Tanggal Lahir   : 7 januari 2003 </h1>
            <h1>Jenis Kelamin   : Pria </h1>
            <div class="border-b-2">
            <h1 class="pt-3 font-semibold">Contact</h1>
            </div>
            <h1 class="pt-3">Email   : admin@gmail.com</h1>
            <h1>Phone   : 088815423546</h1>
        </div>

    </div>

@endsection