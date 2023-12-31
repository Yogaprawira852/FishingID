<header class="top-0 fixed w-full">
    <nav class="bg-slate-300 flex justify-between items-center mx-auto rounded px-6 md:px-10 py-3">
        <div class="flex items-center">
            <a href="/">
                <img class="w-16 md:w-20 mr-4 py-2" src="img/logo.png" alt="Logo">
            </a>

            <div class="hidden md:flex w-2/3 md:w-1/2 h-2/3 rounded bg-white">
              <form action="{{ route('search') }}" method="GET" class="flex items-center w-full">
                    <input type="search" name="search" id="search" placeholder="What are you looking for?"
                        class="flex-grow border-none bg-transparent px-4 py-1 text-gray-900 outline-none">
                    <button type="submit" id="searchButton"
                        class="m-2 rounded bg-orange-400 hover:bg-orange-300 px-4 py-2 text-white flex">
                        <i class="fa-solid fa-magnifying-glass" style="color: #ffffff;"></i>
                    </button>
                </form>
            </div>

            <div class="flex items-center space-x-4">
                <a href="#" class="hidden md:inline-block">
                    <button class="shadow rounded-lg hover:bg-slate-200 py-3 px-3 mx-2 buttonCart">
                        <i class="fa-solid fa-cart-shopping fa-xl" style="color: #4e6b89;"></i>
                    </button>
                </a>

                <a href="/logout"
                    class="p-2 hover:bg-gray-800 text-white text-sm no-underline hover:no-underline block">
                    <i class="fas fa-sign-out-alt fa-fw"></i> Log Out
                </a>
            </div>
    </nav>
</header>

<script>
    document.getElementById('search').addEventListener('keypress', function(e) {
        if (e.key === 'Enter') {
            window.location.href = '#';
        }
    });

    document.getElementById('searchButton').addEventListener('click', function() {
        window.location.href = '#';
    });
</script>