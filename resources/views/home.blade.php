<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <link href="https://fonts.googleapis.com/css2?family=Lato&family=Poppins:ital,wght@1,200&family=Rubik&display=swap" rel="stylesheet">
</head>
<body class="font-[Poppins] ">

  <header class=" px-20">
      <nav  class="  bg-slate-300 flex justify-between items-center w-[92%] mx-auto px-7 rounded  ">
        <div>
           <img class="w-28" src="img/logo.png" alt="">
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

  

</body>
</html>