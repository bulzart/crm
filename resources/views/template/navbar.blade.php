<head>
<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>



<style>
* {
    font-family: 'Poppins';font-size: 17px;

}
:root {
    --header-height: 3rem;
    --nav-width: 68px;
    --first-color: #fff;
    --first-color-light: #AFA5D9;
    --white-color: #F7F6FB;
    --body-font: 'Nunito', sans-serif;
    --normal-font-size: 1rem;
    --z-fixed: 100
}

*,
::before,
::after {
    box-sizing: border-box
}

body {
    position: relative;
    margin: var(--header-height) 0 0 0;
    padding: 0 1rem;
    font-family: var(--body-font);
    font-size: var(--normal-font-size);
    transition: .5s
}

a {
    text-decoration: none
}

.header {
    width: 100%;
    height: 0px;
    position: fixed;
    top: 0;
    left: 0;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0 1rem;
    background-color: var(--white-color);
    z-index: var(--z-fixed);
    transition: .5s
}

.header_toggle {
    color: var(--first-color);
    font-size: 1.5rem;
    cursor: pointer
}

.header_img {
    width: 35px;
    height: 35px;
    display: flex;
    justify-content: center;
    border-radius: 50%;
    overflow: hidden
}

.header_img img {
    width: 40px
}

.l-navbar {
    position: fixed;
    top: 0;
    left: -30%;
    width: var(--nav-width);
    height: 100vh;
    background-color: var(--first-color);
    padding: .5rem 1rem 0 0;
    transition: .7s;
    z-index: var(--z-fixed)
}

.nav {
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    overflow: hidden
}

.nav_logo,
.nav_link {
    display: grid;
    grid-template-columns: max-content max-content;
    align-items: center;
    column-gap: 1rem;
    padding: .5rem 0 .5rem 1.5rem
}

.nav_logo {
    margin-bottom: 2rem
}

.nav_logo-icon {
    font-size: 1.25rem;
    color: var(--white-color)
}

.nav_logo-name {
    color: var(--white-color);
    font-weight: 700
}

.nav_link {
    position: relative;
    color: var(--first-color-light);
    margin-bottom: 1.5rem;
    transition: .3s
}

.nav_link:hover {
    color: var(--white-color)
}

.nav_icon {
    font-size: 1.25rem
}

.show {
    left: 0
}

.body-pd {
    padding-left: 0;
}

.active {
    color: var(--white-color)
}

.active::before {
    content: '';
    position: absolute;
    left: 0;
    width: 2px;
    height: 32px;
    background-color: var(--white-color)
}

.height-100 {
    height: 100vh
}
#body-pd{
    margin: 0;
}
@media screen and (min-width: 880px) {
    body {
        margin: calc(var(--header-height) + 1rem) 0 0 0;
        padding-left: calc(var(--nav-width) + 2rem)
    }

    .header {

        height: 0px;
        padding: 0 2rem 0 calc(var(--nav-width) + 2rem)
    }

    .header_img {
        width: 40px;
        height: 40px
    }

    .header_img img {
        width: 45px
    }

    .l-navbar {
        left: 0;
        padding: 1rem 1rem 0 0
    }

    .show {
        width: calc(var(--nav-width) - 30px)
    }
    nav_link{
        text-decoration: none;
    }

    .body-pd {
        padding-left: calc(var(--nav-width))
    }

    .card {
    width: 350px;
    padding: 10px;
    border-radius: 20px;
    background: #fff;
    border: none;
    height: 350px;
    position: relative
}

.container {
    height: 100vh
}

body {
    background: #eee
}

.mobile-text {
    color: #989696b8;
    font-size: 15px
}

.form-control {
    margin-right: 12px
}

.form-control:focus {
    color: #495057;
    background-color: #fff;
    border-color: #ff8880;
    outline: 0;
    box-shadow: none
}

.cursor {
    cursor: pointer
}
#nav-bar{
    min-width: 200px;
}

}
a:link{
    text-decoration: none;
}
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
@if(Auth::guard('admins')->user()->confirmed == 0)

<body style="background: #f8f8f8;">

<div class="d-flex justify-content-center align-items-center container">
    <form action="{{route('confirmcode')}}" method="post">
        @csrf
    <div class="card py-5 px-3">
        <h5 class="m-0">Email verification</h5><span class="mobile-text">Enter the code we just send on your email <b class="text-danger">{{Auth::guard('admins')->user()->email}}</b></span>
        <div class="d-flex flex-row mt-5"><input type="text" name="c1" class="form-control" autofocus=""><input type="text" name="c2" class="form-control"><input type="text" name="c3" class="form-control"><input type="text" name="c4" class="form-control"></div>
<input type="submit" class="btn btn-success mt-2" value="Weiter">
    </div>
</div>
</form>
</body>
        @else
<body id="body-pd">
<div class="row">
        <div class="col-md-2 col-lg-2 col-xs-2 col-sm-2">
        <header class="header" id="header">
        <div class="header_toggle" id="qele"><i class='bx bx-menu' id="header-toggle"></i> </div>
        <div class="header_img"> </div>
    </header>
    <div class="l-navbar" id="nav-bar">
    <nav class="nav">
                    <div>
                        <div class="nav_list">
                            <a style="text-decoration: none;" href="{{route('dashboard')}}" class="nav_link active"> <i class='bx bx-grid-alt nav_icon text-black'></i> <span class="nav_name text-black">Home</span> </a>
                            @if(Auth::guard('admins')->check())<a style="text-decoration: none;" href="{{route('costumers')}}" class="nav_link"> <i class='bx bx-user nav_icon text-black'></i> <span class="nav_name text-black">Costumers</span> </a>@endif
                            @if(Auth::guard('admins')->user()->role == 'backoffice' || Auth::guard('admins')->user()->role == 'fieldservice' || Auth::guard('admins')->user()->role == 'admin')<a href="{{route('tasks')}}" style="text-decoration: none;" class="nav_link"> <i class='bx bx-task text-black'></i> <span class="nav_name text-black">Tasks</span> </a>@endif
                            @if(Auth::guard('admins')->user()->role == 'backoffice' || Auth::guard('admins')->user()->role == 'admin') <a href="#" style="text-decoration: none;" class="nav_link"> <i class='bx bxs-check-square text-black'></i> <span class="nav_name text-black">Status</span> </a>@endif
                            @if(Auth::guard('admins')->check())<a href="#" style="text-decoration: none;" class="nav_link"><i class='bx bx-money text-black'></i><span class="nav_name text-black">Finance</span> </a>@endif
                            @if(Auth::guard('admins')->user()->role == 'backoffice' || Auth::guard('admins')->user()->role == 'admin') <a href="#" style="text-decoration: none;" class="nav_link"><i class="far fa-window-close text-black"></i><span class="nav_name text-black">Deposit</span> </a> @endif
                            @if(Auth::guard('admins')->user()->role != 'backoffice' && Auth::guard('admins')->user()->role != 'finance' && Auth::guard('admins')->check())<a href="{{route('leads')}}" style="text-decoration: none;" class="nav_link"><i class="fas fa-newspaper text-black"></i><span class="nav_name text-black">Leads</span> </a>@endif
                            @if(Auth::guard('admins')->user()->role == 'admin' || Auth::guard('admins')->user()->role == 'menagment' || Auth::guard('admins')->user()->role == 'salesmenager')<a href="{{route('dates')}}" style="text-decoration: none;" class="nav_link"><i class="far fa-calendar-alt text-black"></i><span class="nav_name text-black">Calendar</span> </a>@endif
                            @if(Auth::guard('admins')->user()->role == 'admin' || Auth::guard('admins')->user()->role == 'menagment')<a href="#" style="text-decoration: none;" class="nav_link"><i class="far fa-calendar-alt text-black"></i><span class="nav_name text-black">Employees</span> </a>@endif
                            @if(Auth::guard('admins')->user()->role == 'admin' || Auth::guard('admins')->user()->role == 'menagment' || Auth::guard('admins')->user()->role == 'salesmenager')<a href="#" style="text-decoration: none;" class="nav_link"><i class="fas fa-sliders-h text-black"></i><span class="nav_name text-black">Prov.system</span> </a>@endif
                            @if(Auth::guard('admins')->user()->role == 'admin' || Auth::guard('admins')->user()->role == 'menagment' || Auth::guard('admins')->user()->role == 'salesmenager')<a href="#" style="text-decoration: none;" class="nav_link"><i class="fas fa-chart-pie text-black"></i><span class="nav_name text-black">Statistics</span> </a>@endif
                            @if(Auth::guard('admins')->user()->role == 'admin' || Auth::guard('admins')->user()->role == 'menagment' || Auth::guard('admins')->user()->role == 'finance')<a href="#" style="text-decoration: none;" class="nav_link"><i class="fas fa-chart-pie text-black"></i><span class="nav_name text-black">Statistics</span> </a>@endif


                        </div> <a href="{{route('logout')}}" style="text-decoration: none;" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name text-black">LogOut</span> </a>
                    </div>

                </nav>
    </div>
    <!--Container Main start-->

</div>


<div class="container-fluid col-md-10 col-lg-10 col-xs-10 col-sm-10 mt-4" id="cont">
@yield('content')
<div class="form-group container text-center pt-4">
</div>
</div>
<script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function(event) {

const showNavbar = (toggleId, navId, bodyId, headerId) =>{
const toggle = document.getElementById(toggleId),
nav = document.getElementById(navId),
bodypd = document.getElementById(bodyId),
headerpd = document.getElementById(headerId)

// Validate that all variables exist
if(toggle && nav && bodypd && headerpd){

// show navbar
nav.classList.toggle('show')
// change icon
toggle.classList.toggle('bx-x')
// add padding to body
bodypd.classList.toggle('body-pd')
// add padding to header
headerpd.classList.toggle('body-pd')

}
}

showNavbar('header-toggle','nav-bar','body-pd','header')

/*===== LINK ACTIVE =====*/
const linkColor = document.querySelectorAll('.nav_link')

function colorLink(){
if(linkColor){
linkColor.forEach(l=> l.classList.remove('active'))
this.classList.add('active')
}
}
linkColor.forEach(l=> l.addEventListener('click', colorLink))

// Your code to run since DOM is loaded and ready
});
</script>
</body>
@endif
