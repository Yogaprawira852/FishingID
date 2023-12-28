<header class="fixed w-[100%]  ">
      <nav  class="  bg-slate-300 flex justify-between items-center  mx-auto  rounded px-10  ">
        <div class="flex flex-row">
           <a  href="/"><img class="w-20 mr-5 py-2" src="img/logo.png" alt=""></a>
         </div>

        <div class=" "> 
        <div class="relative inline-block">
                            <button onclick="toggleDD('myDropdown')" class="drop-button text-slate-600 py-2 px-2"><i class="fa-solid fa-circle-user fa-2xl" style="color: #475569;"></i> Admin <i style="color: #475569;" class="fa-solid fa-caret-down"></i></button>
                            <div id="myDropdown" class="dropdownlist absolute bg-slate-500 rounded-md right-0 mt-3 p-3 overflow-auto z-30 invisible">
                              <a href="#" class="p-2 hover:bg-gray-800 text-white text-sm no-underline hover:no-underline block"><i class="fa fa-user fa-fw "></i> Profile</a>
                              <a href="#" class="p-2 hover:bg-gray-800 text-white text-sm no-underline hover:no-underline block"><i class="fa-solid fa-chart-line" style="color: #ffffff;"></i> Dashboard</a>
                              <div class="border border-gray-800"></div>
                              <a href="#" class="p-2 hover:bg-gray-800 text-white text-sm no-underline hover:no-underline block"><i class="fas fa-sign-out-alt fa-fw"></i> Log Out</a>
                              <input type="text" class=" opacity-0 drop-search p-2 text-gray-600" placeholder="Search.." id="myInput" onkeyup="filterDD('myDropdown','myInput')">
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>  
        </div>
      </nav>
  </header>

  <script>
    /*Toggle dropdown list*/
    function toggleDD(myDropMenu) {
        document.getElementById(myDropMenu).classList.toggle("invisible");
    }
    /*Filter dropdown options*/
    function filterDD(myDropMenu, myDropMenuSearch) {
        var input, filter, ul, li, a, i;
        input = document.getElementById(myDropMenuSearch);
        filter = input.value.toUpperCase();
        div = document.getElementById(myDropMenu);
        a = div.getElementsByTagName("a");
        for (i = 0; i < a.length; i++) {
            if (a[i].innerHTML.toUpperCase().indexOf(filter) > -1) {
                a[i].style.display = "";
            } else {
                a[i].style.display = "none";
            }
        }
    }
    // Close the dropdown menu if the user clicks outside of it
    window.onclick = function(event) {
        if (!event.target.matches('.drop-button') && !event.target.matches('.drop-search')) {
            var dropdowns = document.getElementsByClassName("dropdownlist");
            for (var i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (!openDropdown.classList.contains('invisible')) {
                    openDropdown.classList.add('invisible');
                }
            }
        }
    }
</script>