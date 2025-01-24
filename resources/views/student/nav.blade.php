<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light ml-0" id="main-header">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li id="home" class="nav-item"> {{--d-sm-inline-block--}}
            <a href="{{url("/dashboard")}}" class="nav-link">{{__("Dashboard")}}</a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto my-auto">
        <li class="nav-item d-none" id="companies">
            <input type="hidden" value="{{\Illuminate\Support\Facades\Auth::id()}}" id="userId">
            <input type="hidden" value="" id="companyID">
            <select class="custom-select border-0" id="companySelect">
            </select>
        </li>
        <li class="nav-item dropdown">
            <a class="mx-3 user-panel" data-toggle="dropdown" href="#">
                <img src="{{url('/theme/img/user-icon-160.png')}}">
            </a>
            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                <a href="{{url('/logout')}}" class="dropdown-item" onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
                    <i class="fas fa-lock mr-2"></i> Logout
                </a>
                <form id="logout-form" action="{{url('/logout')}}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>
    </ul>
</nav>
<!-- /.navbar -->
<script>
    document.addEventListener("DOMContentLoaded",function (){
        var main_navbar = document.getElementById("main-header");
        var company_id = localStorage.getItem("company_id");
        if(company_id){
             var companies = document.getElementById("companies");
             // var home = document.getElementById("home");
             // var contact = document.getElementById("contact");
             companies.classList.remove("d-none");
             // home.classList.remove("d-none");
             // contact.classList.remove("d-none");
             main_navbar.classList.remove("ml-0");
        }
    });
</script>
