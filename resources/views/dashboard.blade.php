
<head>
<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
<style>
* {
    font-family: 'Poppins';font-size: 17px;

}
:root {
    --header-height: 3rem;
    --nav-width: 68px;
    --first-color: #4723D9;
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
<script src="{{ asset('js/app.js') }}" defer></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>


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
                    <a style="text-decoration: none;" href="{{route('dashboard')}}" class="nav_link active"> <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">Home</span> </a>
                    @if(Auth::guard('admins')->check())<a style="text-decoration: none;" href="{{route('costumers')}}" class="nav_link"> <i class='bx bx-user nav_icon'></i> <span class="nav_name">Costumers</span> </a>@endif
                    @if(Auth::guard('admins')->user()->role == 'backoffice' || Auth::guard('admins')->user()->role == 'fieldservice' || Auth::guard('admins')->user()->role == 'admin')<a href="{{route('tasks')}}" style="text-decoration: none;" class="nav_link"> <i class='bx bx-task' ></i> <span class="nav_name">Tasks</span> </a>@endif
                    @if(Auth::guard('admins')->user()->role == 'backoffice' ||  Auth::guard('admins')->user()->role == 'admin') <a href="#" style="text-decoration: none;" class="nav_link"> <i class='bx bxs-check-square'></i> <span class="nav_name">Status</span> </a>@endif
                    @if(Auth::guard('admins')->check())<a href="#" style="text-decoration: none;" class="nav_link"><i class='bx bx-money'></i><span class="nav_name">Finance</span> </a>@endif
                    @if(Auth::guard('admins')->user()->role == 'backoffice' ||  Auth::guard('admins')->user()->role == 'admin') <a href="#" style="text-decoration: none;" class="nav_link"><i class="far fa-window-close"></i><span class="nav_name">Deposit</span> </a> @endif
                    @if(Auth::guard('admins')->user()->role != 'backoffice' && Auth::guard('admins')->user()->role != 'finance' && Auth::guard('admins')->check())<a href="{{route('leads')}}" style="text-decoration: none;" class="nav_link"><i class="fas fa-newspaper"></i><span class="nav_name">Leads</span> </a>@endif
                    @if(Auth::guard('admins')->user()->role == 'admin' || Auth::guard('admins')->user()->role == 'menagment' || Auth::guard('admins')->user()->role == 'salesmenager')<a href="{{route('dates')}}" style="text-decoration: none;" class="nav_link"><i class="far fa-calendar-alt"></i><span class="nav_name">Dates</span> </a>@endif
                    @if(Auth::guard('admins')->user()->role == 'admin' || Auth::guard('admins')->user()->role == 'menagment')<a href="#" style="text-decoration: none;" class="nav_link"><i class="far fa-calendar-alt"></i><span class="nav_name">Employees</span> </a>@endif
                    @if(Auth::guard('admins')->user()->role == 'admin' || Auth::guard('admins')->user()->role == 'menagment' || Auth::guard('admins')->user()->role == 'salesmenager')<a href="#" style="text-decoration: none;" class="nav_link"><i class="fas fa-sliders-h"></i><span class="nav_name">Prov.system</span> </a>@endif
                    @if(Auth::guard('admins')->user()->role == 'admin' || Auth::guard('admins')->user()->role == 'menagment' || Auth::guard('admins')->user()->role == 'salesmenager')<a href="#" style="text-decoration: none;" class="nav_link"><i class="fas fa-chart-pie"></i><span class="nav_name">Statistics</span> </a>@endif
                    @if(Auth::guard('admins')->user()->role == 'admin' || Auth::guard('admins')->user()->role == 'menagment' || Auth::guard('admins')->user()->role == 'finance')<a href="#" style="text-decoration: none;" class="nav_link"><i class="fas fa-chart-pie"></i><span class="nav_name">Statistics</span> </a>@endif


                    </div> <a href="{{route('logout')}}" style="text-decoration: none;"class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">LogOut</span> </a>
                </div>

        </nav>
    </div>
    <!--Container Main start-->

</div>


<div class="container col-md-10 col-lg-10 col-xs-10 col-sm-10 mt-4">
<div class="col-12 row">
<div id="app" class="justify-content-end d-flex mb-3">
<notifications></notifications>
      </div>
    <div class="col-12">
    <h3>Overview</h3>
    <div class="col-12">
Completed
    <div class="progress">
    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 75%">75%</div>
</div>
Done cases
<div class="progress">
  <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" style="width: 45%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">45%</div>
</div>
Open cases
<div class="progress">
  <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" style="width: 97%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"> 97%</div>
</div>
    </div>
    </div>

    <div class="mt-2 col-12">
        <div class="justify-content-end d-flex">
    <form action="{{route('fbydate')}}" method="post">
        @csrf

      <input type="date" name="fbydate" class="">
      <input type="submit" class="btn btn-primary" value="Filter">

        </form>
</div>
    <h3>Today appointments</h3>
    @foreach($appointments as $app)
    <button type="button" class="btn btn-primary mb-1" data-bs-toggle="modal" data-bs-target="#{{$app->slug}}">
  Go
</button>
<div class="modal fade" id="{{$app->slug}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content bg-light">
        <div class="d-flex justify-content-end">
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
      <div class="modal-body">
      <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q={{$app->address}},%20{{$app->location}}&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.embedgooglemap.net/blog/divi-discount-code-elegant-themes-coupon/"></a><br><style>.mapouter{position:relative;text-align:right;height:auto;width:auto;}</style><a href="https://www.embedgooglemap.net">embedgooglemap.net</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width: auto;}</style></div></div>
        <div class="text-center">
        <h3>{{$app->name}} {{$app->lname}}</h3>

        <i class="fas fa-map-marker-alt"></i>
      <h5 class="text-secondary">{{$app->address}},{{$app->location}}</h5>

        <div class="row mt-5">
            <div class="col-md-6 col-6">
            <i class="fas fa-users" style="font-size:38px;"></i>
            <br>
            <span>{{$app->count}}<span>
            People
            </div>
            <div class="col-md-6 col-6">
            <i class="far fa-calendar-alt" style="font-size:38px;"></i>
            <br>
           <span>{{$app->time}}</span>
           <br>
            </div>
        </div>
      </div>
      <div class="row text-center mt-5">
      <div class="col-md-6 col-6">
          <a href="{{route('dealnotclosed',$app->id)}}">
          <i class="far fa-window-close" style="font-size: 77px;"></i></a>
          </div>
          <div class="col-md-6 col-6">
              <a href="{{route('dealclosed',$app->id)}}">
          <i style="font-size: 77px;" class="fas fa-check-square text-success"></i>
      </a>
          </div>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>

      </div>
    </div>
  </div>
</div>
<span>{{$app->time}}</span>
   <span>{{$app->name}}</span>
    <span>{{$app->lname}}</span>
    <span>{{date('Y-m-d', strtotime($app->appointmentdate))}}</span>
    <span>Interest</span>

    <br>


    @endforeach


<!-- Modal -->
<div class="justify-content-end d-flex">

        <a  href="{{route('insertappointment')}}" class="btn btn-primary">Add Appoint</a>
    </div>
    </div>
</div>


<div class="row mt-3 justify-content-center">
<div class="col-4 col-sm-6 col-md-3 col-xs-6 col-lg-2">
<div class="text-center">

<div class="col-12"><i style="font-size: 37px;" class='bx bx-user'></i></div>
{{$leadscount}}<br>New Leads</div>
</div>
<div class="col-4 col-sm-6 col-md-3 col-xs-6 col-lg-2">
<div class="text-center">
<div class="col-12"><i style="font-size: 37px;" class='bx bxs-bell'></i></div>
0<br>Open tasks</div>
</div>
<div class="col-4 col-sm-6 col-md-3 col-xs-6 col-lg-2">
<div class="text-center">
<div class="col-12"><i style="font-size: 37px; color: red;" class="fas fa-exclamation-circle"></i></div>
0<br>Pendencies</div>
</div>
<div class="rounded col-4 col-sm-6 col-xs-6 col-md-3 col-lg-2">
<div class="text-center">
<div class="col-12"><i style="font-size: 37px;" class="far fa-calendar-check"></i></div>
{{$todayAppointCount}}<br>Today appointments</div>
</div>
<div class="col-4 col-sm-6 col-xs-6 col-md-3 col-lg-2">
<div class="text-center">
<div class="col-12"><i style="font-size: 37px;" class="far fa-comments"></i></div>
0<br>HR communications</div>
</div>
</div>
</div>
</div>
</body>

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


