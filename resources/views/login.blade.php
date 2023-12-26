@extends("layouts.main")
@section("container")

    <section class=" mx-auto pt-10">
    <div class="flex items-center justify-center min-h-screen bg-gray-100">
      <div
        class=" flex flex-col m-6 space-y-8 bg-white shadow-2xl rounded-2xl md:flex-row md:space-y-0"
      >
        <!-- left side -->
        <div class="flex flex-col justify-center p-8 md:p-14">
          <span class="mb-3 text-4xl font-bold">Selamat Datang </span>
          <span class="font-light text-gray-400 mb-8">
            Silahkan Masukan Informasi Login Anda !!
          </span>
          <div class="py-4">
            <span class="mb-2 text-md">Username</span>
            <input
              type="text"
              class="w-full p-2 border border-gray-300 rounded-md placeholder:font-light placeholder:text-gray-500"
              name="Username"
              id="Username"
            />
          </div>
          <div class="py-4">
            <span class="mb-2 text-md">Password</span>
            <input
              type="password"
              name="pass"
              id="pass"
              class="w-full p-2 border border-gray-300 rounded-md placeholder:font-light placeholder:text-gray-500"
            />
          </div>
          <div class="flex justify-between w-full py-4">
            <div class="mr-24">
            </div>
          </div>
          
          <button
            class="w-full bg-orange-400 text-white p-2 rounded-lg mb-6 hover:bg-white  hover:border hover:border-gray-300"
          >
            Sign in
          </button>
          <div class="text-center text-gray-400">
            Dont'have an account?
            <span class="font-bold text-black">Sign up for free</span>
          </div>
        </div>
        <!-- {/* right side */} -->
        <div class="">
          <img
            src="img/sky.jpg"
            alt="img"
            class="w-[400px] h-full hidden rounded-r-2xl md:block object-cover"
          />
          <!-- text on image  -->
          <div
            class="absolute hidden bottom-10 right-6 p-6 bg-white bg-opacity-30 backdrop-blur-sm rounded drop-shadow-lg md:block"
          >
          </div>
        </div>
      </div>
    </div>
    </section>

@endsection