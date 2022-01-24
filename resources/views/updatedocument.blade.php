<!doctype html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
          integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/8.4.6/css/intlTelInput.css" rel="stylesheet"/>
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Document</title>
</head>

<body>

<!-- <section>
  <div class="px-4">
    <div class="row">
      <div class="col">
        <img src="assets/images/logo.png" class="img-fluid" style="height: 66px;">
      </div>
      <div class="col text-right my-2 ">
        <div class="pull-right text-end">
          <button class="border-0 px-2 pt-1 pb-2 me-2" style="background-color: #C4C6D2; border-radius: 12px;">
            <svg id="Group_1" data-name="Group 1" xmlns="http://www.w3.org/2000/svg" width="" height="22px"
              viewBox="0 0 32.504 28.358">
              <g id="Ellipse_2" data-name="Ellipse 2" transform="translate(0)" fill="none" stroke="#fff"
                stroke-linecap="round" stroke-width="2">
                <ellipse cx="12.438" cy="12.438" rx="12.438" ry="12.438" stroke="none" />
                <ellipse cx="12.438" cy="12.438" rx="11.438" ry="11.438" fill="none" />
              </g>
              <line id="Line_4" data-name="Line 4" x2="8.532" y2="7.141" transform="translate(22.563 19.808)"
                fill="none" stroke="#fff" stroke-linecap="round" stroke-width="2" />
            </svg>
          </button>
          <button class="border-0 px-2 pt-1 pb-2" style="background-color: #C4C6D2; border-radius: 12px;">
            <svg xmlns="http://www.w3.org/2000/svg" width="" height="22px" viewBox="0 0 28.063 28.637">
              <g id="Group_2" data-name="Group 2" transform="translate(1 1)">
                <circle id="Ellipse_3" data-name="Ellipse 3" cx="6.803" cy="6.803" r="6.803"
                  transform="translate(6.229)" fill="none" stroke="#fff" stroke-linecap="round"
                  stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" />
                <path id="Path_1" data-name="Path 1" d="M2,102.218a13.032,13.032,0,0,1,26.063,0"
                  transform="translate(-2 -75.581)" fill="none" stroke="#fff" stroke-linecap="round"
                  stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" />
              </g>
            </svg>
          </button>
        </div>
      </div>
    </div>
  </div>
</section> -->

<style>
    .nav-itemsss a:hover {
        background-color: #c9cad8;
        color: #000;
    }

    .nav-itemsss a:focus {
        background-color: #474747;
        color: #fff;
    }

    @media (max-width: 999.98px) {
        .nav-texttt {
            display: none;
        }

        .navvv {
            width: 80px !important;
            text-align: center !important;
        }

    }

    @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Poppins:wght@200;800;900&display=swap');
    body {
        font-family: 'Montserrat', sans-serif;
    }
</style>
<form method="post" enctype="multipart/form-data" id="forma">
    @csrf
    <div class="row">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-xxl-2 d-flex">
            <ul class="nav nav-pills flex-column mb-auto  nav-itemsss">
                <li class="nav-item">
                    <a href="{{route('dashboard')}}" class="nav-link link-dark lh-1" aria-current="page">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                             class="bi bi-house" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                  d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                            <path fill-rule="evenodd"
                                  d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                        </svg>
                        <span class="ps-2 nav-texttt">Home</span>
                    </a>
                </li>
                @if(Auth::guard('admins')->user()->hasRole('backoffice') || Auth::guard('admins')->user()->hasRole('fs') || Auth::guard('admins')->user()->hasRole('admin'))
                    <li>
                        <a href="{{route('tasks')}}" class="nav-link link-dark">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-speedometer2" viewBox="0 0 16 16">
                                <path
                                    d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z"/>
                                <path fill-rule="evenodd"
                                      d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z"/>
                            </svg>
                            <span class="ps-2 nav-texttt">Tasks</span>
                        </a>
                    </li>
                @endif
                @if(Auth::guard('admins')->user()->hasRole('admin') || Auth::guard('admins')->user()->hasRole('fs') || Auth::guard('admins')->user()->hasRole('salesmanager') ||Auth::guard('admins')->user()->hasRole('menagment'))
                    <li>
                        <a href="{{route('leads')}}" class="nav-link link-dark">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-calendar3" viewBox="0 0 16 16">
                                <path
                                    d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z"/>
                                <path
                                    d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                            </svg>
                            <span class="ps-2 nav-texttt">Leads</span>
                        </a>
                    </li>
                @endif
                <li>
                    <a href="#" class="nav-link link-dark">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                             class="bi bi-grid" viewBox="0 0 16 16">
                            <path
                                d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z"/>
                        </svg>
                        <span class="ps-2 nav-texttt">Finance</span>
                    </a>
                </li>
                @if(Auth::guard('admins')->user()->hasRole('backoffice') || Auth::guard('admins')->user()->hasRole('admin'))
                    <li>
                        <a href="#" class="nav-link link-dark">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-clipboard-data" viewBox="0 0 16 16">
                                <path
                                    d="M4 11a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0v-1zm6-4a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0V7zM7 9a1 1 0 0 1 2 0v3a1 1 0 1 1-2 0V9z"/>
                                <path
                                    d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
                                <path
                                    d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
                            </svg>
                            <span class="ps-2 nav-texttt">Status</span>
                        </a>
                    </li>
                @endif
                @if(Auth::guard('admins')->check())
                    <li>
                        <a href="{{route('costumers')}}" class="nav-link link-dark">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-person-circle" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                <path fill-rule="evenodd"
                                      d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                            </svg>
                            <span class="ps-2 nav-texttt">Costumers</span>
                        </a>
                    </li>
                @endif
                @if(Auth::guard('admins')->user()->hasRole('backoffice') || Auth::guard('admins')->user()->hasRole('admin'))
                    <li>
                        <a href="#" class="nav-link link-dark">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-cash-coin" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                      d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z"/>
                                <path
                                    d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z"/>
                                <path
                                    d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z"/>
                                <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z"/>
                            </svg>
                            <span class="ps-2 nav-texttt">Deposit</span>
                        </a>
                    </li>
                @endif
                @if(Auth::guard('admins')->user()->hasRole('backoffice') || Auth::guard('admins')->user()->hasRole('admin'))
                    <li>
                        <a href="#" class="nav-link link-dark">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-x-square" viewBox="0 0 16 16">
                                <path
                                    d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                                <path
                                    d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                            </svg>
                            <span class="ps-2 nav-texttt">Cancelations</span>
                        </a>
                    </li>
                @endif
                @if(Auth::guard('admins')->user()->hasRole('fs') || Auth::guard('admins')->user()->hasRole('salesmanager') || Auth::guard('admins')->user()->hasRole('menagment') || Auth::guard('admins')->user()->hasRole('admin'))
                    <li>
                        <a href="{{route('calendar')}}" class="nav-link link-dark">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-calendar-check" viewBox="0 0 16 16">
                                <path
                                    d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                                <path
                                    d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                            </svg>
                            <span class="ps-2 nav-texttt">Calendar</span>
                        </a>
                    </li>
                @endif
                @if(Auth::guard('admins')->user()->hasRole('salesmanager') ||Auth::guard('admins')->user()->hasRole('menagment') || Auth::guard('admins')->user()->hasRole('admin'))
                    <li>
                        <a href="{{route('dates')}}" class="nav-link link-dark">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-calendar-date" viewBox="0 0 16 16">
                                <path
                                    d="M6.445 11.688V6.354h-.633A12.6 12.6 0 0 0 4.5 7.16v.695c.375-.257.969-.62 1.258-.777h.012v4.61h.675zm1.188-1.305c.047.64.594 1.406 1.703 1.406 1.258 0 2-1.066 2-2.871 0-1.934-.781-2.668-1.953-2.668-.926 0-1.797.672-1.797 1.809 0 1.16.824 1.77 1.676 1.77.746 0 1.23-.376 1.383-.79h.027c-.004 1.316-.461 2.164-1.305 2.164-.664 0-1.008-.45-1.05-.82h-.684zm2.953-2.317c0 .696-.559 1.18-1.184 1.18-.601 0-1.144-.383-1.144-1.2 0-.823.582-1.21 1.168-1.21.633 0 1.16.398 1.16 1.23z"/>
                                <path
                                    d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                            </svg>
                            <span class="ps-2 nav-texttt">Dates</span>
                        </a>
                    </li>
                @endif
                @if(Auth::guard('admins')->user()->hasRole('admin') || Auth::guard('admins')->user()->hasRole('menagment'))
                    <li>
                        <a href="#" class="nav-link link-dark">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-people-fill" viewBox="0 0 16 16">
                                <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                <path fill-rule="evenodd"
                                      d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
                                <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                            </svg>
                            <span class="ps-2 nav-texttt">Employees</span>
                        </a>
                    </li>
                @endif
                @if(Auth::guard('admins')->user()->hasRole('finance') || Auth::guard('admins')->user()->hasRole('admin'))
                    <li>
                        <a href="#" class="nav-link link-dark">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-people-fill" viewBox="0 0 16 16">
                                <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                <path fill-rule="evenodd"
                                      d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
                                <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                            </svg>
                            <span class="ps-2 nav-texttt">Commisions</span>
                        </a>
                    </li>
                @endif
                @if(Auth::guard('admins')->user()->hasRole('admin') || Auth::guard('admins')->user()->hasRole('menagment') || Auth::guard('admins')->user()->hasRole('salesmanager'))
                    <li class="">
                        <a href="#" class="nav-link link-dark">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-diagram-2-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                      d="M6 3.5A1.5 1.5 0 0 1 7.5 2h1A1.5 1.5 0 0 1 10 3.5v1A1.5 1.5 0 0 1 8.5 6v1H11a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-1 0V8h-5v.5a.5.5 0 0 1-1 0v-1A.5.5 0 0 1 5 7h2.5V6A1.5 1.5 0 0 1 6 4.5v-1zm-3 8A1.5 1.5 0 0 1 4.5 10h1A1.5 1.5 0 0 1 7 11.5v1A1.5 1.5 0 0 1 5.5 14h-1A1.5 1.5 0 0 1 3 12.5v-1zm6 0a1.5 1.5 0 0 1 1.5-1.5h1a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1-1.5 1.5h-1A1.5 1.5 0 0 1 9 12.5v-1z"/>
                            </svg>
                            <span class="ps-2 nav-texttt">Prov.system</span>
                        </a>
                    </li>
                @endif
                @if(Auth::guard('admins')->user()->hasRole('admin') || Auth::guard('admins')->user()->hasRole('menagment') || Auth::guard('admins')->user()->hasRole('salesmanager'))
                    <li class="">
                        <a href="#" class="nav-link link-dark">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-bar-chart" viewBox="0 0 16 16">
                                <path
                                    d="M4 11H2v3h2v-3zm5-4H7v7h2V7zm5-5v12h-2V2h2zm-2-1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1h-2zM6 7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7zm-5 4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-3z"/>
                            </svg>
                            <span class="ps-2 nav-texttt">Statistics</span>
                        </a>
                    </li>
                @endif
                @if(Auth::guard('admins')->user()->hasRole('menagment') || Auth::guard('admins')->user()->hasRole('finance') ||Auth::guard('admins')->user()->hasRole('admin') )
                    <li class="">
                        <a href="#" class="nav-link link-dark">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-wallet2" viewBox="0 0 16 16">
                                <path
                                    d="M12.136.326A1.5 1.5 0 0 1 14 1.78V3h.5A1.5 1.5 0 0 1 16 4.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 13.5v-9a1.5 1.5 0 0 1 1.432-1.499L12.136.326zM5.562 3H13V1.78a.5.5 0 0 0-.621-.484L5.562 3zM1.5 4a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-13z"/>
                            </svg>
                            <span class="ps-2 nav-texttt">Trust</span>
                        </a>
                    </li>
                @endif
            </ul>
        </div>
        <div class="col">
            <div class="my-5 mx-4">
                <div class="" style="background-color: #EFEFEF;border-radius: 22px;">
                    <div class="py-4 px-3">
              <span class="fs-4">
               {{$lead->first_name}}</a>
              </span><br>
                        <span class="fs-6 text-muted">
                {{$lead->address}}
              </span>
                    </div>
                    <div class="row mx-4">
                        <nav class="g-0">
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <button class="nav-link active col krankenkasse-btn" id="nav-home-tab"
                                        data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab"
                                        aria-controls="nav-home" aria-selected="true" onclick="changecnt(0)">
                                    Krankenkasse
                                </button>
                                <button class="nav-link col auto-btn" id="nav-profile-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-profile" type="button" role="tab"
                                        aria-controls="nav-profile" aria-selected="false" onclick="changecnt(1)">Auto
                                </button>
                                <button class="nav-link  col sachen-btn" id="nav-contact-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-contact" type="button" role="tab"
                                        aria-controls="nav-contact" aria-selected="false" onclick="changecnt(2)">Sachen
                                </button>
                                <button class="nav-link  col vorsorge-btn" id="nav-fourth-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-fourth" type="button" role="tab" aria-controls="nav-fourth"
                                        aria-selected="false" onclick="changecnt(3)">Vorsorge
                                </button>
                            </div>
                        </nav>
                    </div>
                    <div class="tab-content mx-4 pb-3" id="nav-tabContent">
                        <div class="tab-pane fade show active krankenkasse-content mb-3" id="nav-home" role="tabpanel"
                             aria-labelledby="nav-home-tab">
                            <div class="row mx-4">
                                <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 mt-4">
                                    <div class="" style="background-color: #EFEFEF; border-radius: 13px;">
                                        <div class="py-2 px-2">
                                            <div class="row mx-2">
                                                <div class="col-7 d-flex g-0">
                                                    <div class="">
                              <span class="fw-bold" style=" font-size: 12px;">
                                Vorversicherer
                              </span>
                                                    </div>
                                                </div>
                                                <!-- <div class="col g-0 d-flex justify-content-end">
                                                <div class="select-div text-end">
                                                  <select name="pre_insurer" class="fw-bold" id=""  style="background-color: #EFEFEF; font-size: 12px;color:#9F9F9F;">
                                                    <option selected>Select</option>
                                                    <option value="1">Ja</option>
                                                    <option value="2">Nein</option>
                                                  </select>
                                                </div>
                                              </div> -->
                                            </div>
                                            <div class="upload-box mx-1 my-2">
                                                <div class="mx-1 my-2 p-4 text-center">
                                                    <label for="file-input-0">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="53" height="53"
                                                             viewBox="0 0 53 53">
                                                            <g id="Group_621" data-name="Group 621"
                                                               transform="translate(-78.283 -14.777)">
                                                                <circle id="Ellipse_31" data-name="Ellipse 31" cx="26.5"
                                                                        cy="26.5" r="26.5"
                                                                        transform="translate(78.283 14.777)"
                                                                        fill="#5f5f5f"/>
                                                                <g id="Group_326" data-name="Group 326"
                                                                   transform="translate(95.656 31.893)">
                                                                    <path id="Path_234" data-name="Path 234"
                                                                          d="M.6,8.9a.6.6,0,0,1,.6.6v3.011a1.2,1.2,0,0,0,1.2,1.2H16.863a1.2,1.2,0,0,0,1.2-1.2V9.5a.6.6,0,1,1,1.2,0v3.011a2.408,2.408,0,0,1-2.409,2.409H2.409A2.408,2.408,0,0,1,0,12.514V9.5a.6.6,0,0,1,.6-.6"
                                                                          transform="translate(0 1.82)" fill="#fff"
                                                                          stroke="#fff" stroke-width="0.5"/>
                                                                    <path id="Path_235" data-name="Path 235"
                                                                          d="M8.29.177a.6.6,0,0,1,.852,0h0l3.613,3.613a.6.6,0,1,1-.853.853L9.318,2.057V12.648a.6.6,0,1,1-1.2,0V2.057L5.529,4.643a.6.6,0,0,1-.853-.853Z"
                                                                          transform="translate(0.92 0)" fill="#fff"
                                                                          stroke="#fff" stroke-width="0.5"/>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </label>

                                                    @if(isset($data->datakk->pre_insurer))
                                                        <input type="file" name="pre_insurer"
                                                               value="{{$data->datakk->pre_insurer}}"
                                                               id="file-input-0" class="svg-div w-100 border-0  g-0"
                                                               onchange="upload(this)">
                                                        <a href="{{route('showfile',$data->datakk->pre_insurer)}}"><input
                                                                type="text" class="form-control text-center"
                                                                id="file-input-0c" disabled
                                                                style="background:none; border:none;"
                                                                value="{{$data->datakk->pre_insurer}}"></a>
                                                    @else
                                                        <input type="file" name="pre_insurer" id="file-input-0"
                                                               class="svg-div w-100 border-0  g-0"
                                                               onchange="upload(this)">
                                                        <input type="text" class="form-control text-center"
                                                               id="file-input-0c" disabled
                                                               style="background:none; border:none;">
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 mt-4">
                                    <div class="" style="background-color: #EFEFEF; border-radius: 13px;">
                                        <div class="py-2 px-2">
                                            <div class="row mx-2">
                                                <div class="col-7 d-flex g-0">
                                                    <div class="">
                              <span class="fw-bold" style="font-size: 12px;">
                                ID Notwending
                              </span>
                                                    </div>
                                                </div>
                                                <!-- <div class="col g-0 d-flex justify-content-end">
                                                <div class="select-div text-end">
                                                  <select name="id_required" class="fw-bold" id=""
                                                    style="background-color: #EFEFEF; font-size: 12px;color:#9F9F9F;">
                                                    <option selected>Select</option>
                                                    <option value="1">Ja</option>
                                                    <option value="2">Nein</option>
                                                  </select>
                                                </div>
                                              </div> -->
                                            </div>
                                            <div class="upload-box mx-1 my-2">
                                                <div class="mx-1 my-2 p-4 text-center">
                                                    <label for="file-input-1">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="53" height="53"
                                                             viewBox="0 0 53 53">
                                                            <g id="Group_621" data-name="Group 621"
                                                               transform="translate(-78.283 -14.777)">
                                                                <circle id="Ellipse_31" data-name="Ellipse 31" cx="26.5"
                                                                        cy="26.5" r="26.5"
                                                                        transform="translate(78.283 14.777)"
                                                                        fill="#5f5f5f"/>
                                                                <g id="Group_326" data-name="Group 326"
                                                                   transform="translate(95.656 31.893)">
                                                                    <path id="Path_234" data-name="Path 234"
                                                                          d="M.6,8.9a.6.6,0,0,1,.6.6v3.011a1.2,1.2,0,0,0,1.2,1.2H16.863a1.2,1.2,0,0,0,1.2-1.2V9.5a.6.6,0,1,1,1.2,0v3.011a2.408,2.408,0,0,1-2.409,2.409H2.409A2.408,2.408,0,0,1,0,12.514V9.5a.6.6,0,0,1,.6-.6"
                                                                          transform="translate(0 1.82)" fill="#fff"
                                                                          stroke="#fff" stroke-width="0.5"/>
                                                                    <path id="Path_235" data-name="Path 235"
                                                                          d="M8.29.177a.6.6,0,0,1,.852,0h0l3.613,3.613a.6.6,0,1,1-.853.853L9.318,2.057V12.648a.6.6,0,1,1-1.2,0V2.057L5.529,4.643a.6.6,0,0,1-.853-.853Z"
                                                                          transform="translate(0.92 0)" fill="#fff"
                                                                          stroke="#fff" stroke-width="0.5"/>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </label>

                                                    @if(isset($data->datakk->id_required))
                                                        <input type="file" id="file-input-1"
                                                               class="svg-div w-100 border-0  g-0"
                                                               onchange="upload(this);"
                                                               value="{{$data->datakk->id_required}}"
                                                               name="id_required">
                                                        <a href="{{route('showfile',$data->datakk->id_required)}}">
                                                            <input type="text" class="form-control text-center"
                                                                   id="file-input-1c" disabled
                                                                   style="background:none; border:none;"
                                                                   value="{{$data->datakk->id_required}}"></a>
                                                    @else
                                                        <input type="file" id="file-input-1"
                                                               class="svg-div w-100 border-0  g-0"
                                                               onchange="upload(this);" name="id_required">
                                                        <input type="text" class="form-control text-center"
                                                               id="file-input-1c" disabled
                                                               style="background:none; border:none;">
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 mt-4">
                                    <div class="" style="background-color: #EFEFEF; border-radius: 13px;">
                                        <div class="py-2 px-2">
                                            <div class="row mx-2">
                                                <div class="col-8 g-0 d-flex">
                                                    <div class="text-nowrap">
                              <span class="fw-bold" style=" font-size: 12px;">
                                Kundingung durch
                              </span>
                                                    </div>
                                                </div>
                                                <!-- <div class="col g-0 d-flex justify-content-end">
                                                <div class="select-div text-end">
                                                  <select name="noname" class="fw-bold" id=""
                                                    style="background-color: #EFEFEF; font-size: 12px;color:#9F9F9F;">
                                                    <option selected>Select</option>
                                                    <option value="1">Ja</option>
                                                    <option value="2">Nein</option>
                                                  </select>
                                                </div>
                                              </div> -->
                                            </div>
                                            <div class="upload-box mx-1 my-2">
                                                <div class="mx-1 my-2 p-4 text-center">
                                                    <label for="file-input-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="53" height="53"
                                                             viewBox="0 0 53 53">
                                                            <g id="Group_621" data-name="Group 621"
                                                               transform="translate(-78.283 -14.777)">
                                                                <circle id="Ellipse_31" data-name="Ellipse 31" cx="26.5"
                                                                        cy="26.5" r="26.5"
                                                                        transform="translate(78.283 14.777)"
                                                                        fill="#5f5f5f"/>
                                                                <g id="Group_326" data-name="Group 326"
                                                                   transform="translate(95.656 31.893)">
                                                                    <path id="Path_234" data-name="Path 234"
                                                                          d="M.6,8.9a.6.6,0,0,1,.6.6v3.011a1.2,1.2,0,0,0,1.2,1.2H16.863a1.2,1.2,0,0,0,1.2-1.2V9.5a.6.6,0,1,1,1.2,0v3.011a2.408,2.408,0,0,1-2.409,2.409H2.409A2.408,2.408,0,0,1,0,12.514V9.5a.6.6,0,0,1,.6-.6"
                                                                          transform="translate(0 1.82)" fill="#fff"
                                                                          stroke="#fff" stroke-width="0.5"/>
                                                                    <path id="Path_235" data-name="Path 235"
                                                                          d="M8.29.177a.6.6,0,0,1,.852,0h0l3.613,3.613a.6.6,0,1,1-.853.853L9.318,2.057V12.648a.6.6,0,1,1-1.2,0V2.057L5.529,4.643a.6.6,0,0,1-.853-.853Z"
                                                                          transform="translate(0.92 0)" fill="#fff"
                                                                          stroke="#fff" stroke-width="0.5"/>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </label>
                                                    @if(isset($data->datakk->notice_by))
                                                        <input type="file" id="file-input-2"
                                                               class="svg-div w-100 border-0  g-0"
                                                               onchange="upload(this);" name="notice_by"
                                                               value="{{$data->datakk->notice_by}}">
                                                        <a href="{{route('showfile',$data->datakk->notice_by)}}">
                                                            <input type="text" class="form-control text-center"
                                                                   id="file-input-2c" disabled
                                                                   style="background:transparent; border:none;"
                                                                   value="{{$data->datakk->notice_by}}"></a>
                                                    @else
                                                        <input type="file" id="file-input-2"
                                                               class="svg-div w-100 border-0  g-0"
                                                               onchange="upload(this);" name="notice_by">
                                                        <input type="text" class="form-control text-center"
                                                               id="file-input-2c" disabled
                                                               style="background:transparent; border:none;">
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 mt-4">
                                    <div class="" style="background-color: #EFEFEF; border-radius: 13px;">
                                        <div class="py-2 px-2">
                                            <div class="row mx-2">
                                                <div class="col-7 d-flex g-0">
                                                    <div class="">
                              <span class="fw-bold" style=" font-size: 12px;">
                                Vollmacht
                              </span>
                                                    </div>
                                                </div>
                                                <!-- <div class="col g-0 d-flex justify-content-end">
                                                <div class="select-div text-end ">
                                                  <select name="power_of_attorney" class="fw-bold" id=""
                                                    style="background-color: #EFEFEF; font-size: 12px;color:#9F9F9F;">
                                                    <option selected>Select</option>
                                                    <option value="1">Ja</option>
                                                    <option value="2">Nein</option>
                                                  </select>
                                                </div>
                                              </div> -->
                                            </div>
                                            <div class="upload-box mx-1 my-2">
                                                <div class="mx-1 my-2 p-4 text-center">
                                                    <label for="file-input-3">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="53" height="53"
                                                             viewBox="0 0 53 53">
                                                            <g id="Group_621" data-name="Group 621"
                                                               transform="translate(-78.283 -14.777)">
                                                                <circle id="Ellipse_31" data-name="Ellipse 31" cx="26.5"
                                                                        cy="26.5" r="26.5"
                                                                        transform="translate(78.283 14.777)"
                                                                        fill="#5f5f5f"/>
                                                                <g id="Group_326" data-name="Group 326"
                                                                   transform="translate(95.656 31.893)">
                                                                    <path id="Path_234" data-name="Path 234"
                                                                          d="M.6,8.9a.6.6,0,0,1,.6.6v3.011a1.2,1.2,0,0,0,1.2,1.2H16.863a1.2,1.2,0,0,0,1.2-1.2V9.5a.6.6,0,1,1,1.2,0v3.011a2.408,2.408,0,0,1-2.409,2.409H2.409A2.408,2.408,0,0,1,0,12.514V9.5a.6.6,0,0,1,.6-.6"
                                                                          transform="translate(0 1.82)" fill="#fff"
                                                                          stroke="#fff" stroke-width="0.5"/>
                                                                    <path id="Path_235" data-name="Path 235"
                                                                          d="M8.29.177a.6.6,0,0,1,.852,0h0l3.613,3.613a.6.6,0,1,1-.853.853L9.318,2.057V12.648a.6.6,0,1,1-1.2,0V2.057L5.529,4.643a.6.6,0,0,1-.853-.853Z"
                                                                          transform="translate(0.92 0)" fill="#fff"
                                                                          stroke="#fff" stroke-width="0.5"/>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </label>
                                                    @if(isset($data->datakk->power_of_attorney))
                                                        <input type="file" id="file-input-3"
                                                               class="svg-div w-100 border-0  g-0"
                                                               onchange="upload(this);" name="power_of_attorney"
                                                               value="{{$data->datakk->power_of_attorney}}">
                                                        <a href="{{route('showfile',$data->datakk->power_of_attorney)}}">
                                                            <input type="text" class="form-control text-center"
                                                                   id="file-input-3c" disabled
                                                                   style="background:transparent; border:none;"
                                                                   value="{{$data->datakk->power_of_attorney}}"></a>
                                                    @else
                                                        <input type="file" id="file-input-3"
                                                               class="svg-div w-100 border-0  g-0"
                                                               onchange="upload(this);" name="power_of_attorney">
                                                        <input type="text" class="form-control text-center"
                                                               id="file-input-3c" disabled
                                                               style="background:transparent; border:none;">
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center mt-3 pb-3">
                                <div class="row">
                                    <div class="col g-0 text-end my-auto">
                                        <div class="">
                        <span class="pe-2" style="color: #9F9F9F;">

                        </span>
                                        </div>
                                    </div>
                                    <div class="col g-0 text-start">
                                        <div id="buton">
                                            <button class="px-5 py-2" type="button"
                                                    style="border: none; border-radius: 9px; background-color:#285F52;"
                                                    id="nextonee__" onclick="nextonee()">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="58.155" height="19.159"
                                                     viewBox="0 0 58.155 19.159">
                                                    <g id="Group_453" data-name="Group 453"
                                                       transform="translate(0.004)">
                                                        <line id="Line_16" data-name="Line 16" x2="51.954" y2="0.2"
                                                              transform="translate(0 9.287)" fill="none"
                                                              stroke="#3fd599" stroke-width="2"/>
                                                        <path id="Polygon_2" data-name="Polygon 2"
                                                              d="M9.58,0l9.58,11.642H0Z"
                                                              transform="translate(58.151 0) rotate(90)"
                                                              fill="#3fd599"/>
                                                    </g>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade auto-content" id="nav-profile" role="tabpanel"
                             aria-labelledby="nav-profile-tab">
                            <div class="row mx-4">
                                <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 my-4 ">
                                    <div class="accordion accordion-flush" id="accordionFlushExample1">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="flush-headingOne">
                                                <button id="button1" class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" onclick="hideSpan();"
                                                        data-bs-target="#flush-collapseOne" aria-expanded="false"
                                                        aria-controls="flush-collapseOne"
                                                        style="background-color: #EFEFEF !important; border-radius: 10px;">
                                                    <div class="d-block">
                                                        <div class="">
                                <span class="fs-6" id="title-span" style="font-weight: 600;">
                                  Gegenofferte?
                                </span>
                                                        </div>
                                                        <div class="lh-1 " id="bastelle-span">
                                <span class="" style="font-size: 13px;">
                                  Bestelle eine Gegenofferte
                                  für eine bestehende Autoversicherung
                                </span>
                                                        </div>
                                                    </div>
                                                </button>
                                            </h2>
                                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                                 aria-labelledby="flush-headingOne"
                                                 data-bs-parent="#accordionFlushExample1">
                                                <div class="accordion-body"
                                                     style="background-color: #EFEFEF !important; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
                                                    <div class="">
                                                        <div class="">
                                <span class="" style="font-size: 13px;">
                                  Police Hochladen:
                                </span>
                                                        </div>
                                                        <div class="">
                                                            <div class="upload-box mx-1 my-2">
                                                                <div class="mx-1 my-2 p-4 text-center">
                                                                    <label for="file-input-4">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                             width="53" height="53" viewBox="0 0 53 53">
                                                                            <g id="Group_621" data-name="Group 621"
                                                                               transform="translate(-78.283 -14.777)">
                                                                                <circle id="Ellipse_31"
                                                                                        data-name="Ellipse 31" cx="26.5"
                                                                                        cy="26.5" r="26.5"
                                                                                        transform="translate(78.283 14.777)"
                                                                                        fill="#5f5f5f"/>
                                                                                <g id="Group_326" data-name="Group 326"
                                                                                   transform="translate(95.656 31.893)">
                                                                                    <path id="Path_234"
                                                                                          data-name="Path 234"
                                                                                          d="M.6,8.9a.6.6,0,0,1,.6.6v3.011a1.2,1.2,0,0,0,1.2,1.2H16.863a1.2,1.2,0,0,0,1.2-1.2V9.5a.6.6,0,1,1,1.2,0v3.011a2.408,2.408,0,0,1-2.409,2.409H2.409A2.408,2.408,0,0,1,0,12.514V9.5a.6.6,0,0,1,.6-.6"
                                                                                          transform="translate(0 1.82)"
                                                                                          fill="#fff" stroke="#fff"
                                                                                          stroke-width="0.5"/>
                                                                                    <path id="Path_235"
                                                                                          data-name="Path 235"
                                                                                          d="M8.29.177a.6.6,0,0,1,.852,0h0l3.613,3.613a.6.6,0,1,1-.853.853L9.318,2.057V12.648a.6.6,0,1,1-1.2,0V2.057L5.529,4.643a.6.6,0,0,1-.853-.853Z"
                                                                                          transform="translate(0.92 0)"
                                                                                          fill="#fff" stroke="#fff"
                                                                                          stroke-width="0.5"/>
                                                                                </g>
                                                                            </g>
                                                                        </svg>
                                                                    </label>
                                                                    @if(isset($data->prevention->upload_police))
                                                                        <input type="file" id="file-input-4"
                                                                               class="svg-div w-100 border-0  g-0"
                                                                               onchange="upload(this);"
                                                                               value="{{$data->prevention->upload_police}}"
                                                                               name="upload_police">
                                                                        <a href="{{route('showfile',$data->prevention->upload_police)}}">
                                                                            <input type="text"
                                                                                   class="form-control text-center"
                                                                                   id="file-input-4a" disabled
                                                                                   style="background:transparent; border:none;"
                                                                                   value="{{$data->prevention->upload_police}}"></a>
                                                                    @else
                                                                        <input type="file" id="file-input-4a"
                                                                               class="svg-div w-100 border-0  g-0"
                                                                               onchange="upload(this);"
                                                                               name="upload_police">
                                                                        <input type="text"
                                                                               class="form-control text-center"
                                                                               id="file-input-4a" disabled
                                                                               style="background:transparent; border:none;">
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="">
                                                            <div class="row mx-2">
                                                                <div class="col-5 d-flex g-0">
                                                                    <div class="text-nowrap">
                                      <span class="fw-bold" style=" font-size: 12px;">
                                        Vergleichsart:
                                      </span>
                                                                    </div>
                                                                </div>
                                                                <div class="col g-0 d-flex justify-content-end">
                                                                    <div class="select-div text-end ">
                                                                        <select name="comparison_type" class="fw-bold"
                                                                                id=""
                                                                                style="background-color: #EFEFEF; font-size: 12px;color:#9F9F9F;">
                                                                            @if(isset($data->counter->comparison_type))
                                                                                <option
                                                                                    value="{{$data->counter->comparison_type}}"
                                                                                    selected>{{$data->counter->comparison_type}}</option>
                                                                            @else
                                                                                <option selected>Select</option>
                                                                                <option value="1">1:1 Deckung</option>
                                                                                <option value="2">1:1 Deckung</option>
                                                                            @endif
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="">
                                                            <div class="mb-3 mt-3">
                                                                <label for="exampleFormControlTextarea1"
                                                                       class="form-label" style="font-size: 13px;">Kommentar</label>
                                                                @if(isset($data->counter->comment))
                                                                    <textarea name="comment" class="form-control"
                                                                              id="exampleFormControlTextarea1"
                                                                              rows="3">{{$data->counter->comment}}</textarea>
                                                                @else
                                                                    <textarea name="comment" class="form-control"
                                                                              id="exampleFormControlTextarea1"
                                                                              rows="3"></textarea>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 my-4">
                                    <div class="accordion accordion-flush" id="accordionFlushExample2">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="flush-headingTwo">
                                                <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                                        aria-expanded="false" aria-controls="flush-collapseOne"
                                                        style="background-color: #EFEFEF !important; border-radius: 10px;">
                                                    <div class="d-block">
                                                        <div class="">
                                <span class="fs-6" id="title-span" style="font-weight: 600;">
                                  Neues Fahrzeug
                                </span>
                                                        </div>
                                                        <div class="lh-1 " id="bastelle-span">
                                <span class="" style="font-size: 13px;">
                                  Bestelle eine Offerte für ein neu einzulösendes Fahrzeug.
                                </span>
                                                        </div>
                                                    </div>
                                                </button>
                                            </h2>
                                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                                 aria-labelledby="flush-headingTwo"
                                                 data-bs-parent="#accordionFlushExample2">
                                                <div class="accordion-body"
                                                     style="background-color: #EFEFEF !important; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
                                                    <div class="">
                                                        <div class="row">
                                                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                                <div class="my-3">
                                                                    <div class="">
                                                                        <div class="">
                                        <span class="">
                                          Fahrzeugausweis hochladen
                                        </span>
                                                                        </div>
                                                                        <div class="upload-box mx-1 my-2">
                                                                            <div class="mx-1 my-2 p-4 text-center">
                                                                                <label for="file-input-5">
                                                                                    <svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="53" height="53"
                                                                                        viewBox="0 0 53 53">
                                                                                        <g id="Group_621"
                                                                                           data-name="Group 621"
                                                                                           transform="translate(-78.283 -14.777)">
                                                                                            <circle id="Ellipse_31"
                                                                                                    data-name="Ellipse 31"
                                                                                                    cx="26.5" cy="26.5"
                                                                                                    r="26.5"
                                                                                                    transform="translate(78.283 14.777)"
                                                                                                    fill="#5f5f5f"/>
                                                                                            <g id="Group_326"
                                                                                               data-name="Group 326"
                                                                                               transform="translate(95.656 31.893)">
                                                                                                <path id="Path_234"
                                                                                                      data-name="Path 234"
                                                                                                      d="M.6,8.9a.6.6,0,0,1,.6.6v3.011a1.2,1.2,0,0,0,1.2,1.2H16.863a1.2,1.2,0,0,0,1.2-1.2V9.5a.6.6,0,1,1,1.2,0v3.011a2.408,2.408,0,0,1-2.409,2.409H2.409A2.408,2.408,0,0,1,0,12.514V9.5a.6.6,0,0,1,.6-.6"
                                                                                                      transform="translate(0 1.82)"
                                                                                                      fill="#fff"
                                                                                                      stroke="#fff"
                                                                                                      stroke-width="0.5"/>
                                                                                                <path id="Path_235"
                                                                                                      data-name="Path 235"
                                                                                                      d="M8.29.177a.6.6,0,0,1,.852,0h0l3.613,3.613a.6.6,0,1,1-.853.853L9.318,2.057V12.648a.6.6,0,1,1-1.2,0V2.057L5.529,4.643a.6.6,0,0,1-.853-.853Z"
                                                                                                      transform="translate(0.92 0)"
                                                                                                      fill="#fff"
                                                                                                      stroke="#fff"
                                                                                                      stroke-width="0.5"/>
                                                                                            </g>
                                                                                        </g>
                                                                                    </svg>
                                                                                </label>
                                                                                <input type="file" id="file-input-5"
                                                                                       class="svg-div w-100 border-0  g-0"
                                                                                       onchange="upload(this);"
                                                                                       name="vehicle_id">
                                                                                <input type="text"
                                                                                       class="form-control text-center"
                                                                                       id="file-input-5c" disabled
                                                                                       style="background:transparent; border:none;">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <div class="">
                                                                    <div class="row">
                                                                        <div class="col">
                                                                            <div class="">
                                          <span>
                                            Leasing:
                                          </span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col">
                                                                            <div class="btn-group w-100" role="group"
                                                                                 aria-label="Basic radio toggle button group">
                                                                                @if(isset($data->fahrzeug->comparison_type))
                                                                                    @if($data->fahrzeug->comparison_type == 'Ja')
                                                                                        <input type="radio"
                                                                                               class="btn-check"
                                                                                               value="Ja"
                                                                                               name="leasing"
                                                                                               id="btnradio1"
                                                                                               autocomplete="off"
                                                                                               checked>
                                                                                        <label
                                                                                            class="btn btn-outline-secondary w-100 g-0"
                                                                                            value="Ja" for="btnradio1">Ja</label>
                                                                                        <input type="radio"
                                                                                               class="btn-check"
                                                                                               value="Nein"
                                                                                               name="leasing"
                                                                                               id="btnradio1"
                                                                                               autocomplete="off">
                                                                                        <label
                                                                                            class="btn btn-outline-secondary w-100 g-0"
                                                                                            value="Nein"
                                                                                            for="btnradio1">Nein</label>
                                                                                    @else
                                                                                        <input type="radio"
                                                                                               class="btn-check"
                                                                                               value="Ja" name="leasing"
                                                                                               id="btnradio1"
                                                                                               autocomplete="off">
                                                                                        <label
                                                                                            class="btn btn-outline-secondary w-100 g-0"
                                                                                            value="Ja" for="btnradio1">Ja</label>
                                                                                        <input type="radio"
                                                                                               class="btn-check"
                                                                                               value="Nein"
                                                                                               name="leasing"
                                                                                               id="btnradio1"
                                                                                               autocomplete="off"
                                                                                               checked>
                                                                                        <label
                                                                                            class="btn btn-outline-secondary w-100 g-0"
                                                                                            value="Nein"
                                                                                            for="btnradio1">Nein</label>
                                                                                    @endif
                                                                                @else
                                                                                    <input type="radio"
                                                                                           class="btn-check" value="Ja"
                                                                                           name="leasing" id="btnradio1"
                                                                                           autocomplete="off">
                                                                                    <label
                                                                                        class="btn btn-outline-secondary w-100 g-0"
                                                                                        value="Ja"
                                                                                        for="btnradio1">Ja</label>
                                                                                    <input type="radio"
                                                                                           class="btn-check"
                                                                                           name="leasing" value="Nein"
                                                                                           id="btnradio2"
                                                                                           autocomplete="off">
                                                                                    <label
                                                                                        class="btn btn-outline-secondary w-100 g-0 "
                                                                                        for="btnradio2">Nein</label>
                                                                                @endif
                                                                            </div>
                                                                            <div class="">
                                                                                <select name="leasing_name"
                                                                                        class="w-100 slct1" id="">
                                                                                    @if(isset($data->fahrzeug->leasing_name))
                                                                                        <option
                                                                                            value="{{$data->fahrzeug->leasing_name}}">{{$data->fahrzeug->leasing_name}}</option>
                                                                                    @else
                                                                                        <option value="Gesellschaft">
                                                                                            Gesellschaft
                                                                                        </option>
                                                                                    @endif
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="my-3">
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="">
                                                                        <div class="">
                                        <span class="fw-bold">
                                          Fahrzeuginformationen
                                        </span>
                                                                        </div>
                                                                        <div class="select-div text-end d-flex my-2">
                                                                            <div class="text-nowrap">
                                          <span class="fw-normal">
                                            Kaufjahr
                                          </span>
                                                                            </div>
                                                                            <select name="year_of_purchase"
                                                                                    class="fw-normal" id=""
                                                                                    style="background-color: #EFEFEF;">
                                                                                @if(isset($data->fahrzeug->year_of_purchase))
                                                                                    <option
                                                                                        value="{{$data->fahrzeug->year_of_purchase}}"
                                                                                        selected>{{$data->fahrzeug->year_of_purchase}}</option>
                                                                                @else
                                                                                    <option value="2021" selected>2021
                                                                                    </option>
                                                                                    <option value="2020">2020</option>
                                                                                    <option value="2019">2019</option>
                                                                                @endif
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="date-input-div mb-2">
                                                                        <div class="">
                                        <span>
                                          Este inverkehrssetzung:
                                        </span>
                                                                        </div>
                                                                        @if(isset($data->fahrzeug->year_of_purchase))
                                                                            <input name="placing_on_the_market"
                                                                                   type="date"
                                                                                   value="{{$data->fahrzeug->year_of_purchase}}"
                                                                                   class="py-1 border-0">
                                                                        @else
                                                                            <input name="placing_on_the_market"
                                                                                   type="date" class="py-1 border-0">
                                                                        @endif
                                                                    </div>
                                                                    <div class="date-input-div mb-2">
                                                                        <div class="">
                                        <span>
                                          Beginn Versicherung:
                                        </span>
                                                                        </div>
                                                                        @if(isset($data->fahrzeug->insurance_date))
                                                                            <input name="insurance_date" type="date"
                                                                                   class="py-1 border-0"
                                                                                   value="{{$data->fahrzeug->insurance_date}}">
                                                                        @else
                                                                            <input name="insurance_date" type="date"
                                                                                   class="py-1 border-0">
                                                                        @endif
                                                                    </div>
                                                                    <div class="input-select-div mb-2">
                                                                        <div class="">
                                        <span class="">
                                          Eingelöster Kanton:
                                        </span>
                                                                        </div>
                                                                        <select name="noname" class="form-select w-75"
                                                                                aria-label="Default select example">
                                                                            <option selected></option>
                                                                            <option value="1">One</option>
                                                                            <option value="2">Two</option>
                                                                            <option value="3">Three</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="input-div1 mb-2">
                                                                        <div class="">
                                        <span class="">
                                          KM - Stand:
                                        </span>
                                                                        </div>
                                                                        @if(isset($data->fahrzeug->km_stood))
                                                                            <input name="km_stood" class="py-1"
                                                                                   type="text"
                                                                                   value="{{$data->fahrzeug->km_stood}}">
                                                                        @else
                                                                            <input name="km_stood" class="py-1"
                                                                                   type="text" id="">
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="">
                                                                        <div class="">
                                        <span class="fw-bold">
                                          Lenkerinformation
                                        </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="date-input-div mb-2">
                                                                        <div class="">
                                        <span>
                                          Erste inverkehrssetzung:
                                        </span>
                                                                        </div>
                                                                        @if(isset($data->fahrzeug->placing_on_the_market))
                                                                            <input name="placing_on_the_market"
                                                                                   type="date" class="py-1 border-0"
                                                                                   value="{{$data->fahrzeug->placing_on_the_market}}">
                                                                        @else
                                                                            <input name="placing_on_the_market"
                                                                                   type="date" class="py-1 border-0">
                                                                        @endif
                                                                    </div>
                                                                    <div class="input-select-div mb-2">
                                                                        <div class="">
                                        <span class="">
                                          Nationalitat:
                                        </span>
                                                                        </div>
                                                                        <select name="nationality"
                                                                                class="form-select w-75"
                                                                                aria-label="Default select example">
                                                                            @if(isset($data->fahrzeug->nationality))
                                                                                <option selected
                                                                                        value="{{$data->fahrzeug->nationality}}">{{$data->fahrzeug->nationality}}</option>
                                                                            @else
                                                                                <option selected></option>
                                                                                <option value="1">One</option>
                                                                                <option value="2">Two</option>
                                                                                <option value="3">Three</option>
                                                                            @endif
                                                                        </select>
                                                                    </div>
                                                                    <div class="input-select-div mb-2">
                                                                        <div class="">
                                        <span class="">
                                          Häufigster Lenker?
                                        </span>
                                                                        </div>
                                                                        <select name="most_common"
                                                                                class="form-select w-75"
                                                                                aria-label="Default select example">
                                                                            @if(isset($data->fahrzeug->most_common))
                                                                                <option
                                                                                    value="{{$data->fahrzeug->most_common}}"
                                                                                    selected>{{$data->fahrzeug->most_common}}</option>
                                                                            @else
                                                                                <option selected></option>
                                                                                <option value="1">One</option>
                                                                                <option value="2">Two</option>
                                                                                <option value="3">Three</option>
                                                                            @endif
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="my-3">
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="">
                                      <span class="fw-normal fs-5">
                                        Gewünschte Deckung
                                      </span>
                                                                    </div>
                                                                    <div class="input-select-div mb-2">
                                                                        <div class="">
                                        <span class="">
                                          Versischerung:
                                        </span>
                                                                        </div>

                                                                        <select name="insurance"
                                                                                class="form-select w-75"
                                                                                aria-label="Default select example">
                                                                            @if(isset($data->fahrzeug->insurance))
                                                                                <option
                                                                                    selected>{{$data->fahrzeug->insurance}}</option>
                                                                            @else
                                                                                <option selected></option>
                                                                                <option value="1">One</option>
                                                                                <option value="2">Two</option>
                                                                                <option value="3">Three</option>
                                                                            @endif
                                                                        </select>
                                                                    </div>
                                                                    <div class="input-select-div mb-2">
                                                                        <div class="">
                                        <span class="">
                                          Selbstbehalt Teilkasko:
                                        </span>
                                                                        </div>
                                                                        <select name="deductible"
                                                                                class="form-select w-75"
                                                                                aria-label="Default select example">
                                                                            @if(isset($data->fahrzeug->deductible))
                                                                                <option selected
                                                                                        value="{{$data->fahrzeug->deductible}}"></option>
                                                                            @else
                                                                                <option selected></option>
                                                                                <option value="1">One</option>
                                                                                <option value="2">Two</option>
                                                                                <option value="3">Three</option>
                                                                            @endif
                                                                        </select>
                                                                    </div>
                                                                    <div class="input-select-div mb-2">
                                                                        <div class="">
                                        <span class="">
                                          Mitgeführte Sachen:
                                        </span>
                                                                        </div>
                                                                        <select name="carried" class="form-select w-75"
                                                                                aria-label="Default select example">
                                                                            @if(isset($data->fahrzeug->carried))
                                                                                <option
                                                                                    value="{{$data->fahrzeug->carried}}"
                                                                                    selected>{{$data->fahrzeug->carried}}</option>
                                                                            @else
                                                                                <option selected></option>
                                                                                <option value="1">One</option>
                                                                                <option value="2">Two</option>
                                                                                <option value="3">Three</option>
                                                                            @endif
                                                                        </select>
                                                                    </div>
                                                                    <div class="">
                                      <span>
                                        Reparaturwerkstatt:
                                      </span>
                                                                        <!-- <div class="input-group mb-2">
                                                                        <input name="noname" type="text" placeholder="Partnergarage" class="form-control" aria-label=""
                                                                          aria-describedby="basic-addon1">
                                                                        <input name="noname" type="text" placeholder="Freie Wahl" class="form-control" aria-label=""
                                                                          aria-describedby="basic-addon1">
                                                                      </div> -->
                                                                        <div class="btn-group w-100" role="group"
                                                                             aria-label="Basic radio toggle button group">
                                                                            @if(isset($data->fahrzeug->repair_shop))
                                                                                <input type="radio" class="btn-check "
                                                                                       name="repair_shop"
                                                                                       id="btnradio1_"
                                                                                       value="{{$data->fahrzeug->repair_shop}}"
                                                                                       checked>
                                                                                <label
                                                                                    class="btn btn-outline-secondary w-100 g-0"
                                                                                    for="btnradio1_">{{$data->fahrzeug->repair_shop}}</label>
                                                                            @else
                                                                                <input type="radio" class="btn-check "
                                                                                       name="repair_shop"
                                                                                       id="btnradio1_"
                                                                                       value="{{$data->fahrzeug->repair_shop}}"
                                                                                       checked>
                                                                                <label
                                                                                    class="btn btn-outline-secondary w-100 g-0"
                                                                                    for="btnradio1_">{{$data->fahrzeug->repair_shop}}</label>
                                                                                <input type="radio" class="btn-check"
                                                                                       name="repair_shop"
                                                                                       value="Freie Wahl"
                                                                                       id="btnradio2_">
                                                                                <label
                                                                                    class="btn btn-outline-secondary w-100 g-0 "
                                                                                    for="btnradio2_">Freie Wahl</label>
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                    <div class="input-div1 mb-2">
                                                                        <div class="">
                                        <span class="">
                                          + Unfalldeckung:
                                        </span>
                                                                        </div>
                                                                        @if(isset($data->fahrzeug->accident_coverage))
                                                                        <input value="{{$data->fahrzeug->accident_coverage}}" name="accident_coverage" class="py-1"
                                                                               type="text" id="">
                                                                        @else
                                                                            <input name="accident_coverage" class="py-1"
                                                                                   type="text" id="">
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="input-div1 mb-2">
                                                                        <div class="">
                                        <span class="">
                                          + Verkehrsrechtsschutz:
                                        </span>
                                                                        </div>
                                                                        @if(isset($data->fahrzeug->traffic_legal_protection))
                                                                            <input value="{{$data->fahrzeug->traffic_legal_protection}}" name="traffic_legal_protection"
                                                                                   class="py-1" type="text" id="">
                                                                            @else
                                                                            <input name="traffic_legal_protection"
                                                                                   class="py-1" type="text" id="">
                                                                            @endif
                                                                    </div>
                                                                    <div class="input-div1 mb-2">
                                                                        <div class="">
                                        <span class="">
                                          + Grobfahrlässigkeitschutz:
                                        </span>
                                                                        </div>
                                                                        @if(isset($data->fahrzeug->grossly))
                                                                            <input value="{{$data->fahrzeug->grossly}}" name="grossly" class="py-1" type="text"
                                                                                   id="">
                                                                            @else
                                                                            <input name="grossly" class="py-1" type="text"
                                                                                    id="">
                                                                            @endif
                                                                    </div>
                                                                    <div class="input-div1 mb-2">
                                                                        <div class="">
                                        <span class="">
                                          + Glasschutz:
                                        </span>
                                                                        </div>
                                                                        @if(isset($data->fahrzeug->glass_protection))
                                                                            <input value="{{$data->fahrzeug->glass_protection}}" name="glass_protection" class="py-1"
                                                                                   type="text" id="">
                                                                            @else
                                                                            <input name="glass_protection" class="py-1"
                                                                                   type="text" id="">
                                                                            @endif

                                                                    </div>
                                                                    <div class="input-div1 mb-2">
                                                                        <div class="">
                                        <span class="">
                                          + Parkschaden:
                                        </span>
                                                                        </div>
                                                                        @if(isset($data->fahrzeug->parking_damage))
                                                                            <input value="{{$data->fahrzeug->parking_damag}}" name="parking_damage" class="py-1"
                                                                                   type="text" id="">
                                                                            @else
                                                                            <input name="parking_damage" class="py-1"
                                                                                   type="text" id="">
                                                                            @endif
                                                                    </div>
                                                                    <div class="input-div1 mb-2">
                                                                        <div class="">
                                        <span class="">
                                          + 24h Pannenhilfe:
                                        </span>
                                                                        </div>
                                                                        @if(isset($data->fahrzeug->hour_breakdown_assistance))
                                                                            <input value="{{$data->fahrzeug->hour_breakdown_assistance}}" name="hour_breakdown_assistance"
                                                                                   class="py-1" type="text" id="">
                                                                            @else
                                                                            <input name="hour_breakdown_assistance"
                                                                                   class="py-1" type="text" id="">
                                                                            @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="buton" class="py-2 text-center">
                                    <button class="px-5 py-2" type="button"
                                            style="border: none; border-radius: 9px; background-color:#285F52;"
                                            id="nextonee__" onclick="nextonee()">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="58.155" height="19.159"
                                             viewBox="0 0 58.155 19.159">
                                            <g id="Group_453" data-name="Group 453" transform="translate(0.004)">
                                                <line id="Line_16" data-name="Line 16" x2="51.954" y2="0.2"
                                                      transform="translate(0 9.287)" fill="none" stroke="#3fd599"
                                                      stroke-width="2"/>
                                                <path id="Polygon_2" data-name="Polygon 2" d="M9.58,0l9.58,11.642H0Z"
                                                      transform="translate(58.151 0) rotate(90)" fill="#3fd599"/>
                                            </g>
                                        </svg>
                                    </button>

                                </div>
                            </div>
                        </div>


                        <div class="tab-pane fade  sachen-content" id="nav-contact" role="tabpanel"
                             aria-labelledby="nav-contact-tab">
                            <div class="row">
                                <div class="col-12">
                                    <div class="my-3 mx-3"
                                         style="color:#434343; background-color: #EFEFEF; border-radius: 13px;">
                                        <div class="mx-3 py-3">
                                            <div class=" my-2">
                          <span class="fs-5 fw-bold">
                            3a/3b Anfragen
                          </span>
                                            </div>
                                            <div class="row ">
                                                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xd-4">
                                                    <div class="">
                                                        <div class="input-div1 mb-2">
                                                            <div class="">
                                  <span class="" style="font-size: 15px;">
                                    Nationalitat:
                                  </span>
                                                            </div>
                                                            @if(isset($data->things->nationality_sachen))
                                                                <input value="{{$data->things->nationality_sachen}}" name="nationality_sachen" class="py-1" type="text"
                                                                       id="">
                                                                @else
                                                                <input name="nationality_sachen" class="py-1" type="text"
                                                                       id="">
                                                                @endif
                                                        </div>
                                                        <div class="input-select-div mb-2">
                                                            <div class="">
                                  <span class="" style="font-size: 15px;">
                                    Aufenthaltsgenehmigung
                                  </span>
                                                            </div>
                                                            <select name="residence_permit" class="form-select w-75"
                                                                    aria-label="Default select example">
                                                                @if(isset($data->things->residence_permit))
                                                                    <option
                                                                        value="{{$data->things->carried}}"
                                                                        selected>{{$data->things->carried}}</option>
                                                                @else
                                                                    <option selected></option>
                                                                    <option value="1">One</option>
                                                                    <option value="2">Two</option>
                                                                    <option value="3">Three</option>
                                                                @endif
                                                            </select>
                                                        </div>
                                                        <div class=" mb-2">
                                                            <label for="telephone_nr">Telefonnumer </label> <br>
                                                            <div class="input-group">
                                                                @if(isset($data->things->telephone_nr))
                                                                    <input value="{{$data->things->telephone_nr}}" name="telephone_nr" id="int-tel" type="tel"
                                                                           class="form-control">
                                                                @else
                                                                    <input name="telephone_nr" id="int-tel" type="tel"
                                                                           class="form-control">
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="input-div1 mb-2">
                                                            <div class="">
                                  <span class="" style="font-size: 15px;">
                                    Email
                                  </span>
                                                            </div>
                                                            @if(isset($data->things->email))
                                                                <input value="{{$data->things->email}}" name="email" class="py-1" type="email" id="">
                                                            @else
                                                                <input name="email" class="py-1" type="email" id="">
                                                            @endif
                                                        </div>
                                                        <div class="input-select-div mb-2">
                                                            <div class="">
                                  <span class="" style="font-size: 15px;">
                                    Zivilstand
                                  </span>
                                                            </div>
                                                            <select name="zivilstand" class="form-select w-75"
                                                                    aria-label="Default select example">
                                                                @if(isset($data->things->zivilstand))
                                                                    <option
                                                                        value="{{$data->things->zivilstand}}"
                                                                        selected>{{$data->things->zivilstand}}</option>
                                                                @else
                                                                    <option selected></option>
                                                                    <option value="1">One</option>
                                                                    <option value="2">Two</option>
                                                                    <option value="3">Three</option>
                                                                @endif
                                                            </select>
                                                        </div>
                                                        <div class="input-select-div mb-2">
                                                            <div class="">
                                  <span class="" style="font-size: 15px;">
                                    Arbeitsverhältnis
                                  </span>
                                                            </div>
                                                            <select name="employment_relationship"
                                                                    class="form-select w-75"
                                                                    aria-label="Default select example">
                                                                @if(isset($data->things->employment_relationship))
                                                                    <option
                                                                        value="{{$data->things->employment_relationship}}"
                                                                        selected>{{$data->things->employment_relationship}}</option>
                                                                @else
                                                                    <option selected></option>
                                                                    <option value="1">One</option>
                                                                    <option value="2">Two</option>
                                                                    <option value="3">Three</option>
                                                                @endif
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xd-4">
                                                    <div class="">
                                                        <div class="input-div1 mb-2">
                                                            <div class="">
                                  <span class="" style="font-size: 15px;">
                                    Beruf:
                                  </span>
                                                            </div>
                                                            @if(isset($data->things->job))
                                                                <input value="{{$data->things->job}}" name="job" class="py-1" type="text" id="">
                                                            @else
                                                                <input name="job" class="py-1" type="text" id="">
                                                            @endif
                                                        </div>
                                                        <div class="input-select-div mb-2">
                                                            <div class="">
                                  <span class="" style="font-size: 15px;">
                                    Zahlungsrythmus:
                                  </span>
                                                            </div>
                                                            <select name="payment_frequency" class="form-select w-75"
                                                                    aria-label="Default select example">
                                                                @if(isset($data->things->payment_frequency))
                                                                    <option
                                                                        value="{{$data->things->payment_frequency}}"
                                                                        selected>{{$data->things->payment_frequency}}</option>
                                                                @else
                                                                    <option selected></option>
                                                                    <option value="1">One</option>
                                                                    <option value="2">Two</option>
                                                                    <option value="3">Three</option>
                                                                @endif
                                                            </select>
                                                        </div>
                                                        <!-- input groupd here asap -->
                                                        <div class="input-div1 mb-2">
                                                            <div class="">
                                  <span class="" style="font-size: 15px;">
                                    Betrag pro Monat:
                                  </span>
                                                            </div>
                                                            @if(isset($data->things->email))
                                                                <input value="{{$data->things->email}}" name="amount_per_month" class="py-1" type="email"
                                                                       id="">
                                                                @else
                                                                <input name="amount_per_month" class="py-1" type="email"
                                                                       id="">
                                                                @endif
                                                        </div>
                                                        <div class="input-select-div mb-2">
                                                            <div class="">
                                  <span class="" style="font-size: 15px;">
                                    Anteli Garantie/Fond:
                                  </span>
                                                            </div>
                                                            <select name="share_guarantee" class="form-select w-75"
                                                                    aria-label="Default select example">
                                                                @if(isset($data->things->share_guarantee))
                                                                    <option
                                                                        value="{{$data->things->share_guarantee}}"
                                                                        selected>{{$data->things->share_guarantee}}</option>
                                                                @else
                                                                    <option selected></option>
                                                                    <option value="1">One</option>
                                                                    <option value="2">Two</option>
                                                                    <option value="3">Three</option>
                                                                @endif
                                                            </select>
                                                        </div>
                                                        <div class="date-input-div mb-2">
                                                            <div class="">
                                  <span style="font-size: 15px;">
                                    Vertragsbeginn ab:
                                  </span>
                                                            </div>
                                                            @if(isset($data->things->start_of_contract))
                                                                <input value="{{$data->things->start_of_contract}}" name="start_of_contract" type="date"
                                                                       class="py-1 border-0">
                                                                @else
                                                                <input name="start_of_contract" type="date"
                                                                       class="py-1 border-0">
                                                                @endif
                                                        </div>
                                                        <div class="group-button-div mb-2">
                                                            <div class="">
                                  <span style="font-size: 15px;">
                                    Pramienbefreiung:
                                  </span>
                                                            </div>
                                                            <div class="btn-group" role="group"
                                                                 aria-label="Basic radio toggle button group">
                                                                @if(isset($data->things->premium_exemption))
                                                                    @if($data->things->premium_exemption == 'Ja')
                                                                    <input type="radio" class="btn-check"
                                                                           name="premium_exemption"
                                                                           value="Ja"
                                                                           id="btnradio3"
                                                                           autocomplete="off"
                                                                           checked>
                                                                    <label class="btn btn-outline-secondary"
                                                                           for="btnradio3">Ja</label>
                                                                    <input type="radio" class="btn-check"
                                                                           name="premium_exemption"
                                                                           value="Nein"
                                                                           id="btnradio4"
                                                                           autocomplete="off">
                                                                    <label class="btn btn-outline-secondary"
                                                                           for="btnradio4">Nein</label>
                                                                @else
                                                                    <input type="radio" class="btn-check"
                                                                           name="premium_exemption"
                                                                           value="Ja"
                                                                           id="btnradio3"
                                                                           autocomplete="off"
                                                                           >
                                                                    <label class="btn btn-outline-secondary"
                                                                           for="btnradio3">Ja</label>

                                                                    <input type="radio" class="btn-check"
                                                                           name="premium_exemption"
                                                                           value="Nein"
                                                                           id="btnradio4"
                                                                           autocomplete="off"
                                                                           checked>
                                                                    <label class="btn btn-outline-secondary"
                                                                           for="btnradio4">Nein</label>
                                                                @endif
                                                                @else
                                                                    <input type="radio" class="btn-check"
                                                                           name="premium_exemption"
                                                                           value="Ja"
                                                                           id="btnradio3"
                                                                           autocomplete="off">
                                                                    <label class="btn btn-outline-secondary"
                                                                           for="btnradio3">Ja</label>
                                                                    <input type="radio" class="btn-check"
                                                                           name="premium_exemption"
                                                                           value="Nein"
                                                                           id="btnradio4"
                                                                           autocomplete="off">
                                                                    <label class="btn btn-outline-secondary"
                                                                           for="btnradio4">Nein</label>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xd-4">
                                                    <div class="">
                                                        <div class="group-button-div mb-2">
                                                            <div class="">
                                  <span style="font-size: 15px;">
                                    EU - Rente:
                                  </span>
                                                            </div>
                                                            <div class="btn-group" role="group"
                                                                 aria-label="Basic radio toggle button group">
                                                                @if(isset($data->things->eu_pension))
                                                                    @if($data->things->eu_pension == 'Ja')
                                                                <input type="radio" class="btn-check"
                                                                       name="eu_pension"
                                                                       value="Ja"
                                                                       id="btnradio5"
                                                                       autocomplete="off"
                                                                       checked>
                                                                <label class="btn btn-outline-secondary"
                                                                       for="btnradio5">Ja</label>

                                                                <input type="radio" class="btn-check"
                                                                       name="eu_pension"
                                                                       value="Nein"
                                                                       id="btnradio6"
                                                                       autocomplete="off">
                                                                <label class="btn btn-outline-secondary"
                                                                       for="btnradio6">Nein</label>
                                                                @else
                                                                    <input type="radio" class="btn-check"
                                                                           name="eu_pension"
                                                                           value="Ja"
                                                                           id="btnradio5"
                                                                           autocomplete="off"
                                                                           >
                                                                    <label class="btn btn-outline-secondary"
                                                                           for="btnradio5">Ja</label>

                                                                    <input type="radio" class="btn-check"
                                                                           name="eu_pension"
                                                                           value="Nein"
                                                                           id="btnradio6"
                                                                           autocomplete="off"
                                                                           checked>
                                                                    <label class="btn btn-outline-secondary"
                                                                           for="btnradio6">Nein</label>
                                                                @endif
                                                                @else
                                                                    <input type="radio" class="btn-check"
                                                                           name="eu_pension"
                                                                           value="Ja"
                                                                           id="btnradio5"
                                                                           autocomplete="off">
                                                                    <label class="btn btn-outline-secondary"
                                                                           for="btnradio5">Ja</label>

                                                                    <input type="radio" class="btn-check"
                                                                           name="eu_pension"
                                                                           value="Nein"
                                                                           id="btnradio6"
                                                                           autocomplete="off">
                                                                    <label class="btn btn-outline-secondary"
                                                                           for="btnradio6">Nein</label>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="group-button-div mb-2">
                                                            <div class="">
                                  <span style="font-size: 15px;">
                                    Todesfalkapital:
                                  </span>
                                                            </div>
                                                            <div class="btn-group" role="group"
                                                                 aria-label="Basic radio toggle button group">
                                                                @if(isset($data->things->death_benefit))
                                                                    @if($data->things->death_benefit == 'Ja')
                                                                    <input type="radio" class="btn-check"
                                                                           name="death_benefit"
                                                                           value="Ja"
                                                                           id="btnradio7"
                                                                           autocomplete="off"
                                                                           checked>
                                                                    <label class="btn btn-outline-secondary"
                                                                           for="btnradio7">Ja</label>

                                                                    <input type="radio" class="btn-check"
                                                                           name="death_benefit"
                                                                           value="Nein"
                                                                           id="btnradio8"
                                                                           autocomplete="off">
                                                                    <label class="btn btn-outline-secondary"
                                                                           for="btnradio8">Nein</label>
                                                                @else
                                                                    <input type="radio" class="btn-check"
                                                                           name="death_benefit"
                                                                           value="Ja}"
                                                                           id="btnradio7"
                                                                           autocomplete="off">
                                                                    <label class="btn btn-outline-secondary"
                                                                           for="btnradio7">Ja</label>

                                                                    <input type="radio" class="btn-check"
                                                                           name="death_benefit"
                                                                           value="Nein"
                                                                           id="btnradio8"
                                                                           autocomplete="off"
                                                                           checked>
                                                                    <label class="btn btn-outline-secondary"
                                                                           for="btnradio8">Nein</label>
                                                                @endif
                                                                @else
                                                                    <input type="radio" class="btn-check"
                                                                           name="death_benefit"
                                                                           value="Ja}"
                                                                           id="btnradio7"
                                                                           autocomplete="off">
                                                                    <label class="btn btn-outline-secondary"
                                                                           for="btnradio7">Ja</label>

                                                                    <input type="radio" class="btn-check"
                                                                           name="death_benefit"
                                                                           value="Nein"
                                                                           id="btnradio8"
                                                                           autocomplete="off">
                                                                    <label class="btn btn-outline-secondary"
                                                                           for="btnradio8">Nein</label>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="group-button-div mb-2">
                                                            <div class="">
                                  <span style="font-size: 15px;">
                                    Raucher:
                                  </span>
                                                            </div>
                                                            <div class="btn-group" role="group"
                                                                 aria-label="Basic radio toggle button group">
                                                                @if(isset($data->things->smoker))
                                                                    @if($data->things->smoker == 'Ja')
                                                                    <input type="radio"
                                                                           class="btn-check"
                                                                           name="smoker"
                                                                           value="Ja"
                                                                           id="btnradio9"
                                                                           autocomplete="off"
                                                                           checked>
                                                                    <label class="btn btn-outline-secondary"
                                                                           for="btnradio9">Ja</label>

                                                                    <input type="radio"
                                                                           class="btn-check"
                                                                           name="smoker"
                                                                           value="Nein"
                                                                           id="btnradio10"
                                                                           autocomplete="off">
                                                                    <label class="btn btn-outline-secondary"
                                                                           for="btnradio10">Nein</label>
                                                                    @else
                                                                        <input type="radio"
                                                                               class="btn-check"
                                                                               name="smoker"
                                                                               value="Ja"
                                                                               id="btnradio9"
                                                                               autocomplete="off">
                                                                        <label class="btn btn-outline-secondary"
                                                                               for="btnradio9">Ja</label>

                                                                        <input type="radio"
                                                                               class="btn-check"
                                                                               name="smoker"
                                                                               value="Nein"
                                                                               id="btnradio10"
                                                                               autocomplete="off"
                                                                               checked>
                                                                        <label class="btn btn-outline-secondary"
                                                                               for="btnradio10">Nein</label>
                                                                    @endif
                                                                @else
                                                                    <input type="radio"
                                                                           class="btn-check"
                                                                           name="smoker"
                                                                           value="Ja"
                                                                           id="btnradio9"
                                                                           autocomplete="off">
                                                                    <label class="btn btn-outline-secondary"
                                                                           for="btnradio9">Ja</label>

                                                                    <input type="radio"
                                                                           class="btn-check"
                                                                           name="smoker"
                                                                           value="Nein"
                                                                           id="btnradio10"
                                                                           autocomplete="off">
                                                                    <label class="btn btn-outline-secondary"
                                                                           for="btnradio10">Nein</label>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="mb-2">
                                                            <label for="exampleFormControlTextarea2" class="form-label">Gewünschte
                                                                Gesellschaften:</label>
                                                            @if(isset($data->things->desired))
                                                                <textarea name="desired" class="form-control"
                                                                          id="exampleFormControlTextarea2"
                                                                          rows="3">{{$data->things->desired}}</textarea>
                                                                @else
                                                                <textarea name="desired" class="form-control"
                                                                          id="exampleFormControlTextarea2"
                                                                          rows="3"></textarea>
                                                                @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center  pb-3">
                                <div class="row">
                                    <div class="col g-0 text-end my-auto">
                                        <div class="">
                        <span class="pe-2" style="color: #9F9F9F;">

                        </span>
                                        </div>
                                    </div>
                                    <div class="col g-0 text-start">
                                        <div class="">
                                            <button class="px-5 py-2" type="button"
                                                    style="border: none; border-radius: 9px; background-color:#285F52;"
                                                    onclick="nextonee()">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="58.155" height="19.159"
                                                     viewBox="0 0 58.155 19.159">
                                                    <g id="Group_453" data-name="Group 453"
                                                       transform="translate(0.004)">
                                                        <line id="Line_16" data-name="Line 16" x2="51.954" y2="0.2"
                                                              transform="translate(0 9.287)" fill="none"
                                                              stroke="#3fd599" stroke-width="2"/>
                                                        <path id="Polygon_2" data-name="Polygon 2"
                                                              d="M9.58,0l9.58,11.642H0Z"
                                                              transform="translate(58.151 0) rotate(90)"
                                                              fill="#3fd599"/>
                                                    </g>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade  vorsorge-content" id="nav-fourth" role="tabpanel"
                             aria-labelledby="nav-fourth-tab">
                            <div class="row mx-4">
                                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 my-3 ">
                                    <div class="mb-2">
                      <span class="fw-bold fs-6">
                        Hausrat- & Privathaftpflicht
                      </span>
                                    </div>
                                    <div class="accordion accordion-flush" id="accordionFlushExample3">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="flush-headingThree">
                                                <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                                                        aria-expanded="false" aria-controls="flush-collapseOne"
                                                        style="background-color: #EFEFEF !important; border-radius: 10px;">
                                                    <div class="d-block">
                                                        <div class="">
                                <span class="fs-6" id="title-span" style="font-weight: 600;">
                                  Gegenofferte?
                                </span>
                                                        </div>
                                                        <div class="lh-1 " id="bastelle-span">
                                <span class="" style="font-size: 13px;">
                                  Bestelle eine Gegenofferte für eine bestehende Hausrat- / Prifathaftlichtversicherung.
                                </span>
                                                        </div>
                                                    </div>
                                                </button>
                                            </h2>
                                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                                 aria-labelledby="flush-headingThree"
                                                 data-bs-parent="#accordionFlushExample3">
                                                <div class="accordion-body"
                                                     style="background-color: #EFEFEF !important; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
                                                    <div class="">
                                                        <div class="">
                                <span class="" style="font-size: 13px;">
                                  Police Hochladen:
                                </span>
                                                        </div>
                                                        <div class="">
                                                            <div class="upload-box mx-1 my-2">
                                                                <div class="mx-1 my-2 p-4 text-center">
                                                                    <label for="file-input-6">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                             width="53" height="53" viewBox="0 0 53 53">
                                                                            <g id="Group_621" data-name="Group 621"
                                                                               transform="translate(-78.283 -14.777)">
                                                                                <circle id="Ellipse_31"
                                                                                        data-name="Ellipse 31" cx="26.5"
                                                                                        cy="26.5" r="26.5"
                                                                                        transform="translate(78.283 14.777)"
                                                                                        fill="#5f5f5f"/>
                                                                                <g id="Group_326" data-name="Group 326"
                                                                                   transform="translate(95.656 31.893)">
                                                                                    <path id="Path_234"
                                                                                          data-name="Path 234"
                                                                                          d="M.6,8.9a.6.6,0,0,1,.6.6v3.011a1.2,1.2,0,0,0,1.2,1.2H16.863a1.2,1.2,0,0,0,1.2-1.2V9.5a.6.6,0,1,1,1.2,0v3.011a2.408,2.408,0,0,1-2.409,2.409H2.409A2.408,2.408,0,0,1,0,12.514V9.5a.6.6,0,0,1,.6-.6"
                                                                                          transform="translate(0 1.82)"
                                                                                          fill="#fff" stroke="#fff"
                                                                                          stroke-width="0.5"/>
                                                                                    <path id="Path_235"
                                                                                          data-name="Path 235"
                                                                                          d="M8.29.177a.6.6,0,0,1,.852,0h0l3.613,3.613a.6.6,0,1,1-.853.853L9.318,2.057V12.648a.6.6,0,1,1-1.2,0V2.057L5.529,4.643a.6.6,0,0,1-.853-.853Z"
                                                                                          transform="translate(0.92 0)"
                                                                                          fill="#fff" stroke="#fff"
                                                                                          stroke-width="0.5"/>
                                                                                </g>
                                                                            </g>
                                                                        </svg>
                                                                    </label>
                                                                    @if(isset($data->prevention->upload_police__))
                                                                    <input type="file" id="file-input-6"
                                                                           class="svg-div w-100 border-0  g-0"
                                                                           onchange="upload(this);"
                                                                           name="upload_police__"
                                                                           value="{{$data->prevention->upload_police__}}">
                                                                        <a href="{{route('showfile',$data->prevention->upload_police__)}}">
                                                                    <input type="text" class="form-control text-center"
                                                                           id="file-input-6c" disabled
                                                                           style="background:transparent;border:none;"
                                                                           value="{{$data->prevention->upload_police__}}">
                                                                    @else
                                                                    <input type="file" id="file-input-6"
                                                                           class="svg-div w-100 border-0  g-0"
                                                                           onchange="upload(this);"
                                                                           name="upload_police__">
                                                                    <input type="text" class="form-control text-center"
                                                                           id="file-input-6c" disabled
                                                                           style="background:transparent;border:none;">
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="">
                                                            <div class="row mx-2">
                                                                <div class="col-5 d-flex g-0">
                                                                    <div class="text-nowrap">
                                      <span class="fw-bold" style=" font-size: 12px;">
                                        Vergleichsart:
                                      </span>
                                                                    </div>
                                                                </div>
                                                                <div class="col g-0 d-flex justify-content-end">
                                                                    <div class="select-div text-end ">
                                                                        <select name="comparison_type" class="fw-bold"
                                                                                id=""
                                                                                style="background-color: #EFEFEF; font-size: 12px;color:#9F9F9F;">
                                                                            @if(isset($data->prevention->comparison_type))
                                                                                <option
                                                                                    value="{{$data->prevention->comparison_type}}"
                                                                                    selected>{{$data->prevention->comparison_type}}</option>
                                                                            @else
                                                                                <option selected>Select</option>
                                                                                <option value="1">1:1 Deckung</option>
                                                                                <option value="2">1:1 Deckung</option>
                                                                            @endif
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="">
                                                            <div class="mb-3 mt-3">
                                                                <label for="exampleFormControlTextarea2"
                                                                       class="form-label" style="font-size: 13px;">Kommentar</label>
                                                                <textarea name="comment__" class="form-control"
                                                                          id="exampleFormControlTextarea2"
                                                                          rows="3"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 my-3 ">
                                    <div class="mb-2">
                      <span class="fw-bold fs-6">
                        Hausrat- & Privathaftpflicht
                      </span>
                                    </div>
                                    <div class="accordion accordion-flush" id="accordionFlushExample4">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="flush-headingFour">
                                                <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseFour"
                                                        aria-expanded="false" aria-controls="flush-collapseOne"
                                                        style="background-color: #EFEFEF !important; border-radius: 10px;">
                                                    <div class="d-block">
                                                        <div class="">
                                <span class="fs-6" id="title-span" style="font-weight: 600;">
                                  Neue Sachversicherung
                                </span>
                                                        </div>
                                                        <div class="lh-1 " id="bastelle-span">
                                <span class="" style="font-size: 13px;">
                                  Bestelle eine Offerte für eine neue Hausrat- / Haftpflichtversicherung.
                                </span>
                                                        </div>
                                                    </div>
                                                </button>
                                            </h2>
                                            <div id="flush-collapseFour" class="accordion-collapse collapse"
                                                 aria-labelledby="flush-headingFour"
                                                 data-bs-parent="#accordionFlushExample">
                                                <div class="accordion-body"
                                                     style="background-color: #EFEFEF !important; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
                                                    <div class="">
                                                        <div class="row mx-2">
                                                            <div class="col-5 d-flex g-0">
                                                                <div class="text-nowrap">
                                    <span class="fw-bold" style=" font-size: 15px;">
                                      Neue Anfarge
                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="col g-0 d-flex justify-content-end">
                                                                <div class="select-div text-end ">
                                                                    <select name="noname" class="fw-bold" id=""
                                                                            style="background-color: #EFEFEF; font-size: 15px;color:#9F9F9F;">
                                                                        <option selected>Select</option>
                                                                        <option value="1">Ja</option>
                                                                        <option value="2">Nein</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="my-2">
                                                            <div class="input-select-div">
                                                                <div class="">
                                    <span class="" style="font-size: 15px;">
                                      Anzahl Personen
                                    </span>
                                                                </div>
                                                                <select name="number_of_people" class="form-select w-50"
                                                                        aria-label="Default select example">
                                                                    @if(isset($data->prevention->number_of_people))
                                                                        <option
                                                                            value="{{$data->prevention->number_of_people}}"
                                                                            selected>{{$data->prevention->number_of_people}}</option>
                                                                    @else
                                                                        <option selected></option>
                                                                        <option value="1">One</option>
                                                                        <option value="2">Two</option>
                                                                        <option value="3">Three</option>
                                                                    @endif
                                                                </select>
                                                            </div>
                                                            <div class="input-select-div">
                                                                <div class="">
                                    <span class="" style="font-size: 15px;">
                                      Anzahl Zimmer
                                    </span>
                                                                </div>
                                                                <select name="number_of_rooms" class="form-select w-50"
                                                                        aria-label="Default select example">
                                                                    @if(isset($data->prevention->number_of_rooms))
                                                                        <option
                                                                            value="{{$data->prevention->number_of_rooms}}"
                                                                            selected>{{$data->prevention->number_of_rooms}}</option>
                                                                    @else
                                                                        <option selected></option>
                                                                        <option value="1">One</option>
                                                                        <option value="2">Two</option>
                                                                        <option value="3">Three</option>
                                                                    @endif
                                                                </select>
                                                            </div>
                                                            <div class="input-div1">
                                                                <div class="">
                                    <span class="" style="font-size: 15px;">
                                      Versicherungsumme
                                    </span>
                                                                </div>
                                                                @if(isset($data->prevention->sum_insured))
                                                                    <input value="{{$data->prevention->sum_insured}}" name="sum_insured" class="py-1" type="text"
                                                                           id="">
                                                                    @else
                                                                    <input name="sum_insured" class="py-1" type="text"
                                                                           id="">
                                                                    @endif
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="exampleFormControlTextarea4"
                                                                       class="form-label" style="font-size: 15px;">Gewünschte
                                                                    Zusatzdeckung:</label>
                                                                @if(isset($data->prevention->desired_additional_coverag))
                                                                    <textarea name="desired_additional_coverag"
                                                                              class="form-control"
                                                                              id="exampleFormControlTextarea4"
                                                                              rows="3">{{$data->prevention->desired_additional_coverag}}</textarea>
                                                                    @else
                                                                    <textarea name="desired_additional_coverag"
                                                                              class="form-control"
                                                                              id="exampleFormControlTextarea4"
                                                                              rows="3"></textarea>
                                                                    @endif
                                                            </div>
                                                            <div class="input-select-div">
                                                                <div class="">
                                    <span class="" style="font-size: 15px;">
                                      Pricathaftpflicht?
                                    </span>
                                                                </div>
                                                                <select name="personal_liability"
                                                                        class="form-select w-50"
                                                                        aria-label="Default select example">
                                                                    @if(isset($data->prevention->personal_liability))
                                                                        <option
                                                                            value="{{$data->prevention->personal_liability}}"
                                                                            selected>{{$data->prevention->personal_liability}}</option>
                                                                    @else
                                                                        <option selected></option>
                                                                        <option value="1">One</option>
                                                                        <option value="2">Two</option>
                                                                        <option value="3">Three</option>
                                                                    @endif
                                                                </select>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 my-3">
                                    <div class="mb-2">
                      <span class="fw-bold fs-6">
                        Rechtsschutzversicherung
                      </span>
                                    </div>
                                    <div class="accordion accordion-flush" id="accordionFlushExample5">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="flush-headingFive">
                                                <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseFive"
                                                        aria-expanded="false" aria-controls="flush-collapseOne"
                                                        style="background-color: #EFEFEF !important; border-radius: 10px;">
                                                    <div class="d-block">
                                                        <div class="">
                                <span class="fs-6" id="title-span" style="font-weight: 600;">
                                  Gesellschaft wählen?
                                </span>
                                                        </div>
                                                        <div class="lh-1 " id="bastelle-span">
                                <span class="" style="font-size: 13px;">
                                  Bestelle eine Offerte für eine neue Hausrat- / Haftpflichtversicherung.
                                </span>
                                                        </div>
                                                    </div>
                                                </button>
                                            </h2>
                                            <div id="flush-collapseFive" class="accordion-collapse collapse"
                                                 aria-labelledby="flush-headingFive"
                                                 data-bs-parent="#accordionFlushExampleFive">
                                                <div class="accordion-body"
                                                     style="background-color: #EFEFEF !important; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
                                                    <div class="">
                                                        <div class="row mx-2">
                                                            <div class="col-5 d-flex g-0">
                                                                <div class="text-nowrap">
                                    <span class="fw-bold" style=" font-size: 15px;">
                                      Neue Anfarge
                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="col g-0 d-flex justify-content-end">
                                                                <div class="select-div text-end ">
                                                                    <select name="noname" class="fw-bold" id=""
                                                                            style="background-color: #EFEFEF; font-size: 15px;color:#9F9F9F;">
                                                                        <option selected>Select</option>
                                                                        <option value="1">Ja</option>
                                                                        <option value="2">Nein</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="input-div1">
                                                            <div class="">
                                  <span class="" style="font-size: 15px;">
                                    Gesellschaft
                                  </span>
                                                            </div>
                                                            @if(isset($data->prevention->society))
                                                                <input value="{{$data->prevention->society}}" name="society" class="py-1" type="text" id="">
                                                                @else
                                                                <input name="society" class="py-1" type="text" id="">
                                                                @endif
                                                        </div>
                                                        <div class="input-select-div">
                                                            <div class="">
                                  <span class="" style="font-size: 15px;">
                                    Anzahl Personen
                                  </span>
                                                            </div>
                                                            <select name="noname" class="form-select w-50"
                                                                    aria-label="Default select example">
                                                                <option selected></option>
                                                                <option value="1">One</option>
                                                                <option value="2">Two</option>
                                                                <option value="3">Three</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center mt-3 pb-3">
                                    <div class="row">
                                        <div class="col g-0 text-end my-auto">
                                            <div class="">
                          <span class="pe-2" style="color: #9F9F9F;">

                          </span>
                                            </div>
                                        </div>
                                        <div class="col g-0 text-start">

                                   
    
 

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                      </div>
                      <div class="col g-0 text-center">
                     
                          <button class="px-5 py-2" id="submitt" type="button" style="border: none; border-radius: 9px; background-color:#285F52;" title="Overwrite" onclick="edit();">
                          <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#fff" class="bi bi-capslock-fill" viewBox="0 0 16 16">
  <path d="M7.27 1.047a1 1 0 0 1 1.46 0l6.345 6.77c.6.638.146 1.683-.73 1.683H11.5v1a1 1 0 0 1-1 1h-5a1 1 0 0 1-1-1v-1H1.654C.78 9.5.326 8.455.924 7.816L7.27 1.047zM4.5 13.5a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1h-5a1 1 0 0 1-1-1v-1z"/>
</svg>
                          </button>
           
                                     <button class="px-5 py-2" id="submitt1" type="button" style="border: none; border-radius: 9px; background-color:#285F52;" title="Accept" onclick="accept();">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#fff" class="bi bi-check-circle" viewBox="0 0 16 16">
                              <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                              <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                            </svg>
                          </button>
            
                        
                      </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<style>
    .btn-group label {
        box-shadow: none !important;
    }

    .input-group .form-control:focus {
        border-color: #ced4da !important;
        box-shadow: none !important;
    }

    .slct1 {
        border: none !important;
        border-bottom-right-radius: 5px !important;
        border-bottom-left-radius: 5px !important;
    }

    .slct1:focus-visible {
        outline: none;
    }

    .date-input-div input[type="date"]:focus-visible {
        outline: none;
    }

    .ja-group-btn {
        width: 85px;
        font-size: 14px;
        border: none;
        background-color: #fff;
        border-bottom-left-radius: 12px;
        border-top-left-radius: 12px;
        border-right: 1px #9F9F9F solid !important;
    }

    .ja-group-btn:hover {
        background-color: #dfdbdb;
    }

    .ja-group-btn:focus {
        background-color: #a3a3a3;
        color: #fff;
    }

    .ja-group-btn1 {
        font-size: 14px;
        border: none;
        border-bottom: #C4C6D2 1px solid;
        background-color: #fff;
        border-bottom-left-radius: 0;
        border-top-left-radius: 12px;
        border-right: 1px #9F9F9F solid !important;
    }

    .ja-group-btn1:hover {
        background-color: #dfdbdb;
    }

    .ja-group-btn1:focus {
        background-color: #a3a3a3;
        color: #fff;
    }

    .nein-group-btn {
        width: 85px;
        font-size: 14px;
        border: none;
        background-color: #fff;
        border-bottom-right-radius: 12px;
        border-top-right-radius: 12px;
        border-left: 1px #c9c8c8 solid !important;
    }

    .nein-group-btn:hover {
        background-color: #dfdbdb;
    }

    .nein-group-btn:focus {
        background-color: #a3a3a3;
        color: #fff;
    }

    .nein-group-btn1 {
        font-size: 14px;
        border: none;
        border-bottom: #C4C6D2 1px solid;
        background-color: #fff;
        border-bottom-right-radius: 0;
        border-top-right-radius: 12px;
        border-left: 1px #c9c8c8 solid !important;
    }

    .nein-group-btn1:hover {
        background-color: #dfdbdb;
    }

    .nein-group-btn1:focus {
        background-color: #a3a3a3;
        color: #fff;
    }

    .input-select-div select:focus {
        outline: none;
        box-shadow: none;
        border-color: #fff;
    }

    .input-select-div select {
        border-radius: 7px !important;

    }

    .input-div1 input {
        border: none;
        border-radius: 5px;
    }

    .input-div1 input:focus-visible {
        outline: none;
    }

    .accordion-button:focus {
        background-color: #fff !important;
        color: #434343;
        box-shadow: none;
        border-color: #434343;
    }

    .accordion-button:not(.collapsed) {
        color: #434343;
        background-color: #fff;
        box-shadow: none;
    }

    .select-div select {
        border: none;
    }

    .select-div select:focus-visible {
        outline: none;
    }

    .upload-box input[type="file"] {
        display: none;
    }

    .krankenkasse-content {
        background-color: #fff;
        border-bottom-left-radius: 17px !important;
        border-bottom-right-radius: 17px !important;
        border-top-right-radius: 17px !important;
    }

    .auto-content {
        background-color: #fff;
        border-bottom-left-radius: 17px !important;
        border-bottom-right-radius: 17px !important;
        border-top-right-radius: 17px !important;
        border-top-left-radius: 17px !important;
    }

    .sachen-content {
        background-color: #fff;
        border-bottom-left-radius: 17px !important;
        border-bottom-right-radius: 17px !important;
        border-top-right-radius: 17px !important;
        border-top-left-radius: 17px !important;
    }

    .vorsorge-content {
        background-color: #fff;
        border-bottom-left-radius: 17px !important;
        border-bottom-right-radius: 17px !important;
        border-top-left-radius: 17px !important;
    }

    .krankenkasse-btn {
        color: black;
        font-weight: 600;
        border: none !important;
        border-top-left-radius: 15px !important;
        border-top-right-radius: 15px !important;
    }

    .krankenkasse-btn:hover {
        color: black;
    }

    .auto-btn {
        color: black;
        font-weight: 600;
        border: none !important;
        border-top-left-radius: 15px !important;
        border-top-right-radius: 15px !important;
    }

    .auto-btn:hover {
        color: black;
    }

    .sachen-btn {
        color: black;
        font-weight: 600;
        border: none !important;
        border-top-left-radius: 15px !important;
        border-top-right-radius: 15px !important;
    }

    .sachen-btn:hover {
        color: black;
    }

    .vorsorge-btn {
        color: black;
        font-weight: 600;
        border: none !important;
        border-top-left-radius: 15px !important;
        border-top-right-radius: 15px !important;
    }

    .vorsorge-btn:hover {
        color: black;
    }

    .upload-box {
        background-image: url("data:image/svg+xml,%3csvg width='100%25' height='100%25' xmlns='http://www.w3.org/2000/svg'%3e%3crect width='100%25' height='100%25' fill='none' rx='9' ry='9' stroke='%23333' stroke-width='3' stroke-dasharray='6%2c 14' stroke-dashoffset='0' stroke-linecap='square'/%3e%3c/svg%3e");
        border-radius: 9px;
    }
</style>
<script>
    var cntt = 0;
    let position = [
        '<button class="nav-link col krankenkasse-btn active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true"><svg xmlns="http://www.w3.org/2000/svg" width="58.155" height="19.159" viewBox="0 0 58.155 19.159">  <g id="Group_453" data-name="Group 453" transform="translate(0.004)"> <line id="Line_16" data-name="Line 16" x2="51.954" y2="0.2" transform="translate(0 9.287)" fill="none" stroke="#3fd599" stroke-width="2"></line>  <path id="Polygon_2" data-name="Polygon 2" d="M9.58,0l9.58,11.642H0Z" transform="translate(58.151 0) rotate(90)" fill="#3fd599"></path> </g></svg></button>',
        '<button class="nav-link col auto-btn" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false"><svg xmlns="http://www.w3.org/2000/svg" width="58.155" height="19.159" viewBox="0 0 58.155 19.159"><g id="Group_453" data-name="Group 453" transform="translate(0.004)">    <line id="Line_16" data-name="Line 16" x2="51.954" y2="0.2" transform="translate(0 9.287)" fill="none" stroke="#3fd599" stroke-width="2"></line>  <path id="Polygon_2" data-name="Polygon 2" d="M9.58,0l9.58,11.642H0Z" transform="translate(58.151 0) rotate(90)" fill="#3fd599"></path>   </g>    </svg></button>',
        '<button class="nav-link col sachen-btn" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false"><svg xmlns="http://www.w3.org/2000/svg" width="58.155" height="19.159" viewBox="0 0 58.155 19.159">  <g id="Group_453" data-name="Group 453" transform="translate(0.004)">      <line id="Line_16" data-name="Line 16" x2="51.954" y2="0.2" transform="translate(0 9.287)" fill="none" stroke="#3fd599" stroke-width="2"></line>    <path id="Polygon_2" data-name="Polygon 2" d="M9.58,0l9.58,11.642H0Z" transform="translate(58.151 0) rotate(90)" fill="#3fd599"></path></g></svg></button>',
        '<button class="nav-link  col vorsorge-btn" id="nav-fourth-tab" data-bs-toggle="tab" data-bs-target="#nav-fourth" type="button" role="tab" aria-controls="nav-fourth" aria-selected="false"><svg xmlns="http://www.w3.org/2000/svg" width="58.155" height="19.159" viewBox="0 0 58.155 19.159">  <g id="Group_453" data-name="Group 453" transform="translate(0.004)">     <line id="Line_16" data-name="Line 16" x2="51.954" y2="0.2" transform="translate(0 9.287)" fill="none" stroke="#3fd599" stroke-width="2"></line>   <path id="Polygon_2" data-name="Polygon 2" d="M9.58,0l9.58,11.642H0Z" transform="translate(58.151 0) rotate(90)" fill="#3fd599"></path></g> </svg></button>'
    ];

    function edit() {
        document.getElementById('forma').action = "<?php echo route('updateLeadDataKK', [Crypt::encrypt($lead->lead->id * 1244), Crypt::encrypt($lead->id * 1244)])?>";
        document.getElementById('forma').submit();
    }

      function accept(){
        <?php 
        
           echo 'document.getElementById("forma").action ="' . route('acceptdata',[Crypt::encrypt($lead->id * 1244),true]) .'";';   
           echo 'document.getElementById("forma").submit();';
           ?>

    }


    function upload(x) {
        var fullPath = x.value;
        if (fullPath) {
            var startIndex = (fullPath.indexOf('\\') >= 0 ? fullPath.lastIndexOf('\\') : fullPath.lastIndexOf('/'));
            var filename = fullPath.substring(startIndex);
            if (filename.indexOf('\\') === 0 || filename.indexOf('/') === 0) {
                filename = filename.substring(1);
            }
            document.getElementById(x.id + 'c').value = filename;
        }
    }

    function changecnt(x) {
        cntt = x;
        if (x == 3) {
            document.getElementById("submitt").type = "submit";
        }
    }

    function nextonee() {
        if (cntt < 5 && cntt > -1) {
            if (cntt == 0) {
                $('#nav-profile').addClass('active show');
                $('#nav-home').removeClass('active show');
                $('#nav-profile-tab').addClass('active');
                $('#nav-home-tab').removeClass('active');
            }
            if (cntt == 1) {
                $('#nav-contact').addClass('active show');
                $('#nav-profile').removeClass('active show');
                $('#nav-contact-tab').addClass('active');
                $('#nav-profile-tab').removeClass('active');
            }
            if (cntt == 2) {
                $('#nav-fourth').addClass('active show');
                $('#nav-contact').removeClass('active show');
                $('#nav-fourth-tab').addClass('active');
                $('#nav-contact-tab').removeClass('active');
                document.getElementById("submitt").type = "submit";
            }
            if (cntt == 3) {
                document.getElementById("submitt").type = "submit";
            }
            cntt++;
        }
    }

    function hideSpan() {
        if (document.getElementById("bastelle-span").style.display === "none") {
            document.getElementById("bastelle-span").style.display = "block";
            document.getElementById("button1").style.setProperty("border-bottom-left-radius", "10px", "important");
            document.getElementById("button1").style.setProperty("border-bottom-right-radius", "10px", "important");
        } else {
            document.getElementById("bastelle-span").style.display = "none";
            document.getElementById("button1").style.setProperty("border-bottom-left-radius", "0px", "important");
            document.getElementById("button1").style.setProperty("border-bottom-right-radius", "0px", "important");
        }
    }
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>
