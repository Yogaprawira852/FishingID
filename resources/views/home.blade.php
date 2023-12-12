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

<!-- navbar -->
  <header class=" px-20">
      <nav  class="  bg-slate-300 flex justify-between items-center w-[92%] mx-auto px-7 rounded  ">
        <div>
           <a href="/"><img class="w-28" src="img/logo.png" alt=""></a>
         </div>

        <div class="flex w-96 rounded bg-white">
            <input type="search" name="search" id="search" placeholder="search"
            class="w-full border-none bg-transparent px-4 py-1 text-gray-900 outline-none">
            <button class="m-2 rounded bg-orange-400 px-4 py-2 text-white"> search</button>
        </div>
        <div>
          <a href="#" class="text-white px-6 py-3 bg-cyan-500 hover:bg-cyan-600 rounded-full">Sign In</a>
        </div>
      </nav>
  </header>

    <!-- kaetegori -->
      <div>
        <div class=" mx-[20%] my-10 border-4 border-orange-400 rounded-lg shadow-md ">
            <p class="text-center py-5 text-base font-semibold bg-slate-200 mx-20 rounded-lg my-5">Kategori</p>    
               <div class="grid grid-cols-6   justify-between place-items-center mx-5 pb-5">
                <!-- nama kategori dan logo kategori disini -->
                   <a href="" class="pb-3"> <img class="w-20" src="img/logo.png" alt="icon kategori"><p>Kategori 1</p></a>
               </div>
           </div>
      </div>

    <!-- Item card -->
<div class="grid-cols-5">
    <div class="flex 	items-center justify-center gap-10">
          <!-- item 1 -->
          <!-- looping dari line ini "hapus aja komenya nanti" -->
        <div class="w-72 min-h-[10rem] shadow-lg rounded-md overflow-hidden">
          <!-- gambar disini -->
                <img class="w-full h-full object-cover" src="img/logo.png" alt="produk">
           <div class="p-5 flex flex-col gap-3">
               <!-- judul disini -->
                 <h2 class="font-semibold text-2xl overflow-ellipsis overflow-hidden whitespace-nowrap"> Judul item</h2>
              <div>
                <!-- harga disini -->
                <span class="text-xl font-bold">
                    Rp.400.000
                </span>
                
                   <div class="mt-5 flex gap-5">
                      <button class="bg-orange-400 hover:bg-orange-300 px-6 py-2 rounded-md text-white font-medium tracking-wider transition">
                         Beli Sekarang
                      </button>
                        <button class="flex-grow flex justify-center items-center bg-slate-300 hover:bg-slate-200 transition rounded-md">
                           <i class="fa-solid fa-cart-plus fa-lg opacity-60 " style="color: #000000;"></i>
                       </button>
            </div>
          </div>   
        </div>
    </div>  
  </div>
</div>   


    
</body>
</html>