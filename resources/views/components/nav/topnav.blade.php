

<nav class="navbar bg-dark sticky-top shadow-sm">

    <li class="dropdown">
      <a class="dropdown-toggle text-decoration-none text-white" href="#" id="navbarDropdown" role="button"
        data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi-globe"></i>
        {{ auth()->user()->name }}
      </a></p>
      <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
        <li>
          <a class="dropdown-item" href="{{ route('users.show', auth()->user()) }}"><i
              class="bi bi-person-fill me-2"></i>Profile</a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>
        <li>
          <form id="logout-form" method="POST" action="{{ route('logout') }}">
            @csrf
          </form>
          <a class="dropdown-item" id="logout-anchor" href=""><i class="bi bi-box-arrow-left me-2"></i>Sign out</a>
        </li>
      </ul>
    </li>
  </div>


    <a class="navbar-brand text-white" href="">
<img class="logo" src="images/logo.jpg" alt="logo"  width="1500" height="100" ></a>


</nav>



@section('script')
  @parent
  document.getElementById('logout-anchor').addEventListener("click", function(event) {
    event.preventDefault();
    document.getElementById('logout-form').submit();
  });
@endsection
