<nav>
    <a href="#"><img src="{{ URL::to('img/logo.jpeg') }}" alt="logo" width="240px"></a>
    <ul>
        <li><a href="/home">Home</a></li>
        <li><a href="/book">Manage Books</a></li>
        <li><a href="/member">Manage Members</a></li>
        <li><a href="/record">Records</a></li>


        {{-- fungsi dari button Login/Logout --}}
        @if (Auth::user())
        <form action="{{ route('logout')}}" method="POST" class="d-flex" id="form-logout">
            @csrf
            <button id="logout" class="logout"><i class='bx bxs-user' style="width:25px; height:20px; text-align:center; "></i>Logout</button>
        </form>
        @else 
            <li><a href="/login"><i class='bx bxs-user' style="width:25px; height:20px; text-align:center;"></i>  Login </a></li>
        @endif
        
    </ul>
</nav>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.getElementById("logout").addEventListener("click",(e) => {
        e.preventDefault()
        Swal.fire({
    title: 'Are you sure you want to logout?',
    text: "",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'logout'
  }).then((result) => {
    if (result.isConfirmed) {
        document.getElementById("form-logout").submit()
    }
  })
    })
    </script>