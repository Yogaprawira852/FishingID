<header class="fixed w-full">
    <nav class="bg-slate-300 flex justify-between items-center mx-auto rounded px-10">
        <div class="flex flex-row">
            <a href="/"><img class="w-20 mr-5 py-2" src="{{ asset('img/logo.png') }}" alt=""></a>
        </div>

        <div class="flex items-center">
            <div class="relative inline-block">
                <button onclick="toggleDropdown('myDropdown')" class="pill-button text-slate-600 py-2 px-2 rounded-full">
                    <i class="fa-solid fa-circle-user fa-2xl" style="color: #475569;"></i> Admin
                    <i style="color: #475569;" class="fa-solid fa-caret-down"></i>
                </button>
                <div id="myDropdown" class="dropdownlist absolute bg-slate-500 rounded-md right-0 mt-3 p-3 overflow-auto hidden">
                    <div class="border-gray-800"></div>
                    <a href="/logout" class="p-2 hover:bg-gray-800 text-white text-sm no-underline hover:no-underline block">
                        <i class="fas fa-sign-out-alt fa-fw"></i> Log Out
                    </a>
                </div>
            </div>
        </div>
    </nav>
</header>

<style>
    .pill-button {
        border: 2px solid #475569;
    }

    .pill-button i {
        margin-right: 0.5rem;
    }
</style>

<script>
    function toggleDropdown(dropdownId) {
        var dropdown = document.getElementById(dropdownId);
        if (dropdown.classList.contains('hidden')) {
            dropdown.classList.remove('hidden');
        } else {
            dropdown.classList.add('hidden');
        }
    }
</script>