<header class="top-0 fixed w-[100%]">
        <nav class="bg-slate-300 flex justify-between items-center mx-auto rounded px-10">
            <div class="flex flex-row">
                <a href="/"><img class="w-20 mr-5 py-2" src="img/logo.png" alt=""></a>
            </div>

            <div class="flex w-[55%] h-2/3 rounded mx-5 bg-white">
                <input type="search" name="search" id="search" placeholder="What are you looking for?"
                    class="w-full border-none bg-transparent px-4 py-1 text-gray-900 outline-none">
                <button id="searchButton"
                    class="m-2 rounded bg-orange-400 hover:bg-orange-300 px-4 py-2 text-white flex">
                    <i class="fa-solid fa-magnifying-glass" style="color: #ffffff;"></i>
                </button>
            </div>

            <div>
                <a href="/login?message=login">
                    <button class="shadow rounded-lg hover:bg-slate-200 py-3 px-3 mx-5 buttonCart">
                        <i class="fa-solid fa-cart-shopping fa-xl " style="color: #4e6b89;"></i>
                    </button>
                </a>
                <a href="/login" id="loginButton"
                    class="text-white pl-4 py-3 font-semibold bg-cyan-500 hover:bg-cyan-600 rounded-full">
                    Sign In<i class="px-3 py-2 fa-solid fa-arrow-right-to-bracket fa-lg" style="color: #ffffff;"></i>
                </a>
            </div>
        </nav>
    </header>

    <script>
        document.getElementById('search').addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                window.location.href = '/login?message=login';
            }
        });
        document.getElementById('searchButton').addEventListener('click', function() {
            window.location.href = '/login?message=login';
        });
    </script>