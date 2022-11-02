<nav>
    <a href="#"><img src="{{ URL::to('img/logo.jpeg') }}" alt="logo" width="240px"></a>
    <ul>
        <li><a href="/home">Dashboard</a></li>
        <li><a href="/book">Manage Books</a></li>
        <li><a href="/member">Manage Members</a></li>
        <li><a href="/record">Records</a></li>


        {{-- fungsi dari button Login/Logout --}}
        @if (Auth::user())
        <form action="{{('logout')}}" method="POST" class="d-flex">
            @csrf
            <button type="submit"><i class='bx bxs-user' style="width:25px; height:20px; text-align:center; "></i>Logout</button>
        </form>
        @else 
            <li><a href="/login"><i class='bx bxs-user' style="width:25px; height:20px; text-align:center;"></i>  Login </a></li>
        @endif
        
    </ul>
</nav>