<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <title>
    FishingID
  </title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://fonts.googleapis.com/css2?family=Lato&family=Poppins:ital,wght@1,200&family=Rubik&display=swap" rel="stylesheet">
</head>
<body class="font-[Poppins] ">

@include('partials.navbar');

    <!-- hero section -->
    <section class="px-3 py-5 bg-neutral-100 lg:py-10">
      <div class="grid lg:grid-cols-2 item bg-center justify-items-center gap-5 font-sans mx-10">
          <div class="flex flex-col justify-center items-center">
            <p class="w-full text-center text-4xl font-extrabold md:text-7xl text-orange-400">Best Choice For Fishing Gear</p>
            <p class="w-full text-center text-2xl font-bold md:text-5xl text-slate-600">100% original</p>
            <button class="text-lg md:text-2xl bg-slate-600 text-white hover:bg-slate-500 py-3 px-5 my-5 rounded-md"> Check Katalog </button>
          </div>
        <div>
          <img class="h-80 w-80 object-cover py-2 px-5 lg:w-[500px] lg:h-[500px] border-r-4 border-slate-400" src="img/hero.png" alt="">
        </div>
      </div>
    </section>


    </div>  <!-- kaetegori -->
      <div>
        <div class=" mx-[20%] my-10 border-4 border-orange-400 rounded-lg shadow-md ">
            <p class="text-center py-5 text-base font-semibold bg-slate-200 mx-20 rounded-lg my-5">Kategori</p>    
               <div class="grid grid-cols-6   justify-between place-items-center mx-5 pb-5">
                  <!-- nama kategori dan logo kategori disini -->
                  <!-- looping disini -->
                   <a href="" class="pb-3"> <img class="w-20" src="img/logo.png" alt="icon kategori"><p>Kategori 1</p></a>
                   <!-- sampai sini -->
               </div>
           </div>
      </div>

    <!-- Item card -->

<div>    
<div class="grid grid-cols-4 justify-items-center gap-8 mx-10">
  <!-- looping dari sini -->
<div class=" ">
      <div class="card">
                                                     <!-- Gambar -->
          <img class="w-full h-full object-cover" src="img/logo.png" alt="produk">
            <div class="p-5 flex flex-col gap-3">
              <div>
                <span class="px-3 py-1 rounded-full text-xs bg-gray-100">Kategori</span>
              </div>
                                                                                                  <!-- nama produk -->
               <h2 class="font-semibold text-2xl overflow-ellipsis overflow-hidden whitespace-nowrap"> Nama Produk </h2>

              <div>
                                               <!-- harga -->
                <span class="text-xl font-bold">Rp.400.000</span>
              </div>

              <div class="mt-5 flex gap-2">
            <button class="px-3 py-3 rounded bg-orange-400 hover:bg-orange-300 text-white font-medium tracking-wider transition"> Beli Sekarang </button>
            <button class="flex-grow flex justify-center items-center bg-gray-400 hover:bg-gray-300 transition rounded-md" > <i class="opacity-70 fa-solid fa-cart-plus fa-lg" style="color: #000000;"></i> </button>
          </div>
          </div>         
      </div>   
</div>
   <!-- sampai sini -->
  

</div>   
</div>




@include('partials.Footer');
</body>
</html>