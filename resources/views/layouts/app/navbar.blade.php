<div class="navbar fixed w-full bg-gradient-to-r from-purple-500 to-blue-800 shadow-lg transition-transform duration-300 transform -translate-y-full" id="navbar">
    <div class="flex items-center justify-start ml-4">
        <button class="btn btn-ghost btn-circle">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
            </svg>
        </button>
        <ul class="dropdown-content menu-compact mt-3 p-2 bg-white shadow rounded-box w-52">
            <li><a href="{{url('tambah')}}">Tambah Postingan</a></li>
        </ul>
    </div>
    <div class="flex items-center justify-center">
        <a href="{{url('/')}}" class="btn btn-ghost normal-case text-xl text-blue-500">RPLWhispers</a>
    </div>
    <div class="flex items-center justify-end mr-4">
        <div class="dropdown-end">
            <button class="btn btn-ghost btn-circle avatar">
                <div class="w-10 h-10 rounded-full">
                    <img src="https://i.pinimg.com/474x/08/f2/25/08f22527b5352c7acc4a14dc29ef2f95.jpg" alt="Avatar Image" />
                </div>
            </button>
            <ul class="dropdown-content menu-compact mt-3 p-2 bg-white shadow rounded-box w-52">
                <li><a>Login</a></li>
            </ul>
        </div>
    </div>
</div>
