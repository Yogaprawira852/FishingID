@extends("layouts.maindash")
@section("container")
@include('dashboard.sidebardash');
    <div class="ml-80 mt-20">
            <div class="flex flex-row justify-between border-b-2 ">
                <div class="flex flex-col">
                    <h1 class="font-lato font-semibold text-black text-xl">Items Management</h1>
                    <h1 class="text-slate-400 font-semibold">You can manage your items here</h1>
                </div>
                <div class="flex flex-col">
                   <button class="bg-orange-400 mr-10 py-2 px-2 rounded-lg font-lato font-semibold text-white"> + Add Item </button>

                </div>
            </div>        
            <div>
            <table class="w-full border-b border-gray-200 mt-10">
        <thead>
          <tr class="text-sm font-medium text-gray-700 border-b border-gray-200">
            <td class="pl-10">
              <div class="flex items-center gap-x-4">
                <span class="font-semibold">Product Name</span>
              </div>
            </td>
            <td class="py-4 px-4 text-center">Price</td>
            <td class="py-4 px-4 text-center">sold</td>
            <td class="py-4 px-4 text-center">Rating</td>
            <td class="py-4 pr-10 pl-4 text-center">
              <FilterIcon class="w-6 h-6 fill-current" />
            </td>
          </tr>
        </thead>
        <tbody>
          <tr
            class="hover:bg-gray-100 transition-colors group">
            <!-- looping dari sini -->
            <!--      |
                      v    link item. jika di klik ke halaman item -->
            <a href=" #"><td class="flex gap-x-4 items-center py-4 pl-10">
                                                                 <!-- link Hapus Item ini  -->
            <a class="p-2 bg-gray-200 rounded-md hover:bg-gray-300" href="  "><i class="fa-solid fa-trash-can" style="color: #878787;"></i></a>
              <img
                src="img/logo.png"
                alt=""
                class="w-40 aspect-[3/2] rounded-lg object-cover object-top border border-gray-200"
              />
              <div>
                <span class="text-lg font-semibold text-gray-700">
           <!-- nama Produk -->
                  nama
                </span>
                                                     <!-- Kategori -->
                <div class="font-medium text-gray-400">kategori</div>
              </div>
            </td>                               
                                             <!-- Harga -->
            <td class="font-medium text-center">Rp.20.000</td>
                                        <!-- jumlah terjual -->
            <td class="font-medium text-center">200</td>
            <td class="text-center">
                                <!-- rating /5 -->
              <span class="font-medium">4</span>
              <span class="text-gray-400">/5</span>
            </td>
            <td>
              <div class="flex gap-x-2 justify-center items-center">
             <!-- link edit item ini  -->
              <a href="#" class="p-2 bg-gray-200 rounded-md hover:bg-gray-300"><i class="fa-solid fa-pen-to-square" style="color: #969696;"></i>
                </a>
              </div>
            </td>
          </tr></a>
          <!-- sampai sini -->
        </tbody>
      </table>
            </div>    
        </div>
@endsection 