
<span class="absolute text-white text-4xl top-5 left-4 " >
    <i class="bi bi-filter-left px-2 bg-gray-900 rounded-md"></i>
  </span>
  <div class="sidebar fixed top-0 bottom-0 lg:left-0 left-[-300px] duration-1000
    p-2 w-[300px] overflow-y-auto text-center bg-slate-300  h-screen">
    <div class="text-gray-100 text-xl">
    <a href="/"><div class="  flex items-center rounded-md ">
         <img class="w-20 py-2" src="img/logo.png" alt="">
        <h1 class="text-[15px]  ml-3 text-lg text-slate-600 font-extrabold">FishingID TackleBox</h1>
      </div></a>
      <hr class="my-2 text-gray-600">

      <div>
        <a href="/"><div class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300   hover:bg-slate-400">
        <i class="fa-solid fa-house" style="color: #475569;"></i>
          <span class="text-[15px] ml-4 text-slate-600 font-semibold">Home</span>
        </div></a>
        <a href="/dashboard"><div class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 {{Request::is('dashboard')?'border-l-4 border-orange-400':''}}   hover:bg-slate-400">
        <i class="fa-solid fa-chart-line" style="color: #475569;"></i>
          <span class="text-[15px] ml-4 text-slate-600 font-semibold">Dashboard</span>
        </div></a>
        <a href="/itemManagement"><div class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 {{Request::is('itemManagement')?'border-l-4 border-orange-400':''}}   hover:bg-slate-400">
        <i class="fa-solid fa-boxes-stacked" style="color: #475569;"></i>
          <span class="text-[15px] ml-4 text-slate-600 font-semibold">Items Manegement</span>
        </div></a>
        <a href="/profile"><div class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 {{Request::is('profile')?'border-l-4 border-orange-400':''}}  hover:bg-slate-400">
        <i class="fa-solid fa-user" style="color: #475569 ;"></i>
          <span class="text-[15px] ml-4 text-slate-600 font-semibold">Profile</span>
        </div></a>
       
       

       
        <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 border-t-2   hover:bg-slate-400">
          <i class="fa-solid fa-arrow-right-from-bracket" style="color: #14346c;"></i>
          <span class="text-[15px] ml-4 text-slate-600 font-semibold">Logout</span>
        </div>

      </div>
    </div>
  </div>

