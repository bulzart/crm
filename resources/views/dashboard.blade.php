<head xmlns="http://www.w3.org/1999/html">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <style>
        * {
            font-family: 'Poppins';
            font-size: 17px;

        }
        .maprouter{
            position:relative;text-align:right;height:auto;width:auto;
        }
        .gmap_canvas {overflow:hidden;background:none!important;height:500px;width: auto;}

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

        #body-pd {
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

            nav_link {
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

            #nav-bar {
                min-width: 200px;
            }

        }

        a:link {
            text-decoration: none;
        }
        .eventt {
            display: block !important;
        }

        .no-event {
            display: none !important;
        }

        .dayy {
            text-align: center !important;
        }
        .active-dayy {
            border: #000 solid 1px !important;
            border-radius: 20px !important;
        }

        .this-month {
            font-size: 15px !important;
            font-weight: bold !important;
        }

        .not-this-month {
            font-size: 15px !important;
            font-weight: bold !important;
            color: #A0A0A0;
        }

        .monthh {
            font-size: 10px !important;
            font-weight: bold !important;
            color: #A0A0A0;
        }
        .owl-dots{
            display: none;
        }
        #Ellipse_55{
            display: none;
        }
        .modal-backdrop{
            display: none;
        }



    </style>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <title>Google Maps Multiple Markers</title>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD-HHCaYZ4N-VoJTrQObXqU4zRs73hMsmM"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>


<body id="body-pd">
    <div class="row">
        <div class="col-md-1 col-lg-1 col-xs-2 col-sm-2">
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


        <div class="container col-md-10 col-lg-10 col-xs-10 col-sm-10 mt-4" id="app">
            <div class="col-12 row">
                <div class="justify-content-end d-flex mb-3">
                    <notifications></notifications>
                </div>
                @if(Auth::guard('admins')->user()->role != 'backoffice')
                <div class="col-12">
                    <h3>Overview</h3>
                    <div class="row">
                        <div class="col-4 col-md-4">
                            Open cases
                            <div id="open1">
                                <div class="justify-content-end text-end">
                                    <div class="icon-div">
                                        <a href="{{route('tasks')}}"><i class="bi bi-three-dots-vertical the-wrap mt-2 text-white" style="font-size: 22px;"></i></a>
                                    </div>
                                    <div class="justify-content-center d-flex">
                                    <p style="font-size: 35px;" class="text-white mx-2 my-2">{{$opencnt}}</p>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 col-md-4">
                            Pending cases

                            <div id="pro1">
                            <div class="justify-content-end text-end">
                                    <div class="icon-div">
                                    <a href="{{route('tasks')}}"> <i class="bi bi-three-dots-vertical the-wrap1 mt-2 text-white" style="font-size: 22px;"></i></a>
                                    </div>
                                </div>
                                <div class="justify-content-center d-flex">
                                    <p style="font-size: 35px;" class="text-white mx-2 my-2">{{$pendingcnt}}</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-4 col-md-4">
                            Done cases
                            <div id="done1">

                            <div class="justify-content-end text-end">
                                    <div class="icon-div">
                                    <a href="{{route('tasks')}}"><i class="bi bi-three-dots-vertical the-wrap2 mt-2 text-white" style="font-size: 22px;"></i></a>
                                    </div>
                                </div>
                                <div class="justify-content-center d-flex">
                                    <p style="font-size: 35px;" class="text-white mx-2 my-2">{{round($percnt,2)}}%</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


            </div>


            <div class="row mt-3">
       <div class="col-md-6 col-sm-6 col-12">
           <div class="row">
           <div class="col-md-12 col-12">
           <div class="weekly-calendarr">
            <div class="row text-center mx-3" >





            </div>
			</div>
    </div>
               <div class="col-md-12 col-12">
          <calendar></calendar>


    </div>
    </div>
    </div>


            <div class="col-md-6 col-sm-6 col-12 row">
                <div class="col-4 col-sm-6 col-md-4 col-xs-6 col-lg-4 mb-2">
                <div class="text-center text-white p-2" style="background: #792765; border-radius: 12px;">
                        <div class="col-12"><i style="font-size: 42px;" class='bx bx-user'></i></div>
                        {{$leadscount}}<br><span>New Leads </span>
                    </div>
                </div>
                <div class="col-4 col-sm-6 col-md-4 col-xs-6 col-lg-4 mb-2">
                <div class="text-center text-white p-2" style="background: #fe86c6; border-radius: 12px;">
                        <div class="col-12"><i style="font-size: 42px;" class='bx bxs-bell'></i></div>
                        {{$opencnt}}<br><span>Open tasks</span>
                    </div>
                </div>
                <div class="col-4 col-sm-6 col-md-4 col-xs-6 col-lg-4 mb-2" id="pend">
                    <div class="text-center text-white p-2" style="background: #8a8bff; border-radius: 12px;">
                        <div class="col-12"><i style="font-size: 42px;" class="fas fa-exclamation-circle"></i></div>
                        {{$pendingcnt}}<br><span>Pendencies</span>
                    </div>
                </div>
                <div class="rounded col-4 col-sm-6 col-xs-6 col-md-4 col-lg-4 mb-2">
                    <div class="text-center text-white p-2" style="background: #ffbe6a; border-radius: 12px;">
                        <div class="col-12"><i style="font-size: 42px;" class="fas fa-calendar-alt"></i></div>
                        {{$todayAppointCount}}<br><span>Today appointments</span>
                    </div>
                </div>
                <div class="col-4 col-sm-6 col-xs-6 col-md-4 col-lg-4 mb-2">
                    <div class="text-center text-white p-2" style="background: #00c78c; border-radius: 12px;">
                        <div class="col-12"><i style="font-size: 42px;" class="fas fa-comment"></i></div>
                        0<br><span>HR communications</span>
                    </div>
                </div>
    </div>
                <div class="btninsertapp">
                    <a href="{{route('insertappointment')}}">
                        <button type="submit">+</button>
                    </a>
                </div>
            </div>
            @endif
            <div class="col-md-12 col-12">

                <todo></todo>
            </div>
            <div class="col-md-6 col-12 mt-5">

    </div>
            <div class="col-md-6 col-12 mt-5">
             @if(isset($morethan30))
                    @foreach($morethan30 as $more)
           <a href="{{route('document',$more->id)}}"><h5 class="h5">{{$more->name}} {{$more->lname}}</h5></a>
             @endforeach
                 @endif
            </div>
        </div>

    </div>





</body>


<script type="text/javascript">


    document.addEventListener("DOMContentLoaded", function(event) {
        const showNavbar = (toggleId, navId, bodyId, headerId) => {
            const toggle = document.getElementById(toggleId),
                nav = document.getElementById(navId),
                bodypd = document.getElementById(bodyId),
                headerpd = document.getElementById(headerId)

            // Validate that all variables exist
            if (toggle && nav && bodypd && headerpd) {

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


        showNavbar('header-toggle', 'nav-bar', 'body-pd', 'header')

        /*===== LINK ACTIVE =====*/
        const linkColor = document.querySelectorAll('.nav_link')

        function colorLink() {
            if (linkColor) {
                linkColor.forEach(l => l.classList.remove('active'))
                this.classList.add('active')
            }
        }
        linkColor.forEach(l => l.addEventListener('click', colorLink))

        // Your code to run since DOM is loaded and ready
    });
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script><!-- latest jquery file -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script type="text/javascript">
$(document).ready(function() {
            $(".owl-carousel").owlCarousel();
        });

        $('.owl-carousel').owlCarousel({
            loop: false,
            center: false,
            nav: true,
            dots: false,
            infinite: false,
            nav: false,

            responsive: {
                0: {
                    items: 1
                },
                900: {
                    items: 5
                },
                1200: {
                    items: 5
                },
                1400: {
                    items: 5
                }

            }
        });
  </script>


