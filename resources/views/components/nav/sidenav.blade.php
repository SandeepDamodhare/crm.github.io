<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: "Lato", sans-serif;
}

/* Style the sidenav links and the dropdown button */
.sidenav a, .dropdown-btn {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: #818181;
  display: block;
  border: none;
  background: none;
  width: 100%;
  text-align: left;
  cursor: pointer;
  outline: none;
}

/* On mouse-over */
.sidenav a:hover, .dropdown-btn:hover {
  color: #f1f1f1;
}

/* Main content */
.main {
  margin-left: 200px; /* Same as the width of the sidenav */
  font-size: 20px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

/* Add an active class to the active dropdown button */
.active {
  background-color: green;
  color: white;
}

/* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
.dropdown-container {
  display: none;
  background-color: 000000;
  padding-left: 8px;
}

/* Optional: Style the caret down icon */
.fa-caret-down {
  float: right;
  padding-right: 8px;
}

/* Some media queries for responsiveness */
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body>

@php
if (!isset($activeNavItem)) {
    $activeNavItem = null;
}
@endphp

<nav class="col-2 h-100 px-0 navbar position-fixed navbar-expand-lg bg-dark d-flex align-items-start">
  <div class="container px-0">
    <ul class="navbar-nav flex-column mx-auto">
      <li class="nav-item"><h3 style="color:white;">
        <a class="nav-link @if ($activeNavItem === 'dashboard') bg-primary bg-gradient @endif ps-3 pe-5 text-white" href="{{ route('dashboard') }}">
          <i class="bi bi-house-door-fill me-2"></i>
          Dashboard
        </a>
      </li>
      @can('viewAny', Silber\Bouncer\Database\Role::class)
  <div class="sidenav">
         <button class="dropdown-btn"><h3 style="color:white;">
          <i class="bi bi-incognito me-2"></i>
          Employees
         <i class="fa fa-caret-down"></i>
        </button>
     <div class="dropdown-container">
       <a class="nav-link @if ($activeNavItem === 'create') bg-primary bg-gradient @endif ps-3 pe-5 text-white"
          href="{{ route('roles.create') }}">Add Employees</a>
       <a class="nav-link @if ($activeNavItem === 'roles') bg-primary bg-gradient @endif ps-3 pe-5 text-white"
          href="{{ route('roles.index') }}">View Employees</a>
       <a class="nav-link @if ($activeNavItem === 'create') bg-primary bg-gradient @endif ps-3 pe-5 text-white"
          href="{{ route('users.create') }}">Add Profile</a>
       <a class="nav-link @if ($activeNavItem === 'roles') bg-primary bg-gradient @endif ps-3 pe-5 text-white"
          href="{{ route('users.index') }}">View Profile</a>
     </div></h3>
  </div>
      @endcan
  <div class="sidenav">
         <button class="dropdown-btn"><h3 style="color:white;">
          <i class="bi bi-person-lines-fill me-2"></i>
          Leads
         <i class="fa fa-caret-down"></i>
        </button>
     <div class="dropdown-container">
       <a class="nav-link @if ($activeNavItem === 'create') bg-primary bg-gradient @endif ps-3 pe-5 text-white"
          href="{{ route('users.create') }}">Add Lead</a>
       <a class="nav-link @if ($activeNavItem === 'roles') bg-primary bg-gradient @endif ps-3 pe-5 text-white"
          href="{{ route('users.index') }}">View Lead</a>
     </div></h3>
  </div>
  <div class="sidenav">
         <button class="dropdown-btn"><h3 style="color:white;">
          <i class="bi bi-people-fill me-2"></i>
          Customers
         <i class="fa fa-caret-down"></i>
        </button>
     <div class="dropdown-container">
       <a class="nav-link @if ($activeNavItem === 'create') bg-primary bg-gradient @endif ps-3 pe-5 text-white"
          href="{{ route('clients.create') }}">Add Customer</a>
       <a class="nav-link @if ($activeNavItem === 'roles') bg-primary bg-gradient @endif ps-3 pe-5 text-white"
          href="{{ route('clients.index') }}">View Customer</a>
     </div></h3>
  </div>
  <div class="sidenav">
         <button class="dropdown-btn"><h3 style="color:white;">
          <i class="bi bi-clipboard2-check-fill me-2"></i>
          Quotations
         <i class="fa fa-caret-down"></i>
        </button>
     <div class="dropdown-container">
       <a class="nav-link @if ($activeNavItem === 'create') bg-primary bg-gradient @endif ps-3 pe-5 text-white"
          href="{{ route('tasks.create') }}">Add Quotations</a>
       <a class="nav-link @if ($activeNavItem === 'roles') bg-primary bg-gradient @endif ps-3 pe-5 text-white"
          href="{{ route('tasks.index') }}">View Quotations</a>
     </div></h3>
  </div>

  <div class="sidenav">
         <button class="dropdown-btn"><h3 style="color:white;">
          <i class="bi bi-clipboard2-check-fill me-2"></i>
          Account
        </button>
  </div>
  <div class="sidenav">
         <button class="dropdown-btn"><h3 style="color:white;">
          <i class="bi bi-clipboard2-check-fill me-2"></i>
          Invoices
        </button>
  </div>
  <div class="sidenav">
         <button class="dropdown-btn"><h3 style="color:white;">
          <i class="bi bi-clipboard2-check-fill me-2"></i>
          Marketing
        </button>
  </div>
    </ul>
  </div>
</nav>

<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;
for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
</script>
</body>
</html> 