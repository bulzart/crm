<head>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>



</head>
<style>
    /*.nav-itemsss {*/
    /*    height: 93%;*/
    /*    overflow: scroll !important;*/
    /*}*/
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

</style>

<body>

<div class="row">
    <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-xxl-2 d-flex">
        <div class="d-flex flex-column flex-shrink-0 p-3 bg-light navvv"
             style="height: 100% !important; position: fixed;">
{{--            <a href="#" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">--}}
{{--                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="30" viewBox="0 0 100 67">--}}
{{--                    <g id="Group_620" data-name="Group 620" transform="translate(-1350 -165)">--}}
{{--                        <g id="Polygon_4" data-name="Polygon 4" transform="translate(1450 228) rotate(180)" fill="#e2e2e2">--}}
{{--                            <path--}}
{{--                                d="M 43.0809211730957 33.5 L 0.9190800189971924 33.5 L 22 0.9203982949256897 L 43.0809211730957 33.5 Z"--}}
{{--                                stroke="none" />--}}
{{--                            <path--}}
{{--                                d="M 22 1.840770721435547 L 1.838142395019531 33 L 42.16185760498047 33 L 22 1.840770721435547 M 22 3.814697265625e-06 L 44 34 L 0 34 L 22 3.814697265625e-06 Z"--}}
{{--                                stroke="none" fill="#707070" />--}}
{{--                        </g>--}}
{{--                        <g id="Path_316" data-name="Path 316" transform="translate(1374 190)" fill="#707070">--}}
{{--                            <path d="M 50.2048454284668 41 L 1.795153379440308 41 L 26 1.899863123893738 L 50.2048454284668 41 Z"--}}
{{--                                  stroke="none" />--}}
{{--                            <path--}}
{{--                                d="M 26 3.799720764160156 L 3.590301513671875 40 L 48.40969848632813 40 L 26 3.799720764160156 M 26 0 L 52 42 L 0 42 L 26 0 Z"--}}
{{--                                stroke="none" fill="#707070" />--}}
{{--                        </g>--}}
{{--                        <g id="Polygon_5" data-name="Polygon 5" transform="translate(1394 228) rotate(180)" fill="#e2e2e2">--}}
{{--                            <path--}}
{{--                                d="M 43.0809211730957 33.5 L 0.9190800189971924 33.5 L 22 0.9203982949256897 L 43.0809211730957 33.5 Z"--}}
{{--                                stroke="none" />--}}
{{--                            <path--}}
{{--                                d="M 22 1.840770721435547 L 1.838142395019531 33 L 42.16185760498047 33 L 22 1.840770721435547 M 22 3.814697265625e-06 L 44 34 L 0 34 L 22 3.814697265625e-06 Z"--}}
{{--                                stroke="none" fill="#707070" />--}}
{{--                        </g>--}}
{{--                        <g id="Ellipse_35" data-name="Ellipse 35" transform="translate(1389 165)" fill="#e2e2e2" stroke="#707070"--}}
{{--                           stroke-width="1">--}}
{{--                            <circle cx="11" cy="11" r="11" stroke="none" />--}}
{{--                            <circle cx="11" cy="11" r="10.5" fill="none" />--}}
{{--                        </g>--}}
{{--                        <g id="Ellipse_36" data-name="Ellipse 36" transform="translate(1419 173)" fill="#707070" stroke="#707070"--}}
{{--                           stroke-width="2">--}}
{{--                            <ellipse cx="9" cy="8.5" rx="9" ry="8.5" stroke="none" />--}}
{{--                            <ellipse cx="9" cy="8.5" rx="8" ry="7.5" fill="none" />--}}
{{--                        </g>--}}
{{--                        <g id="Ellipse_37" data-name="Ellipse 37" transform="translate(1363 173)" fill="#707070" stroke="#707070"--}}
{{--                           stroke-width="2">--}}
{{--                            <ellipse cx="9" cy="8.5" rx="9" ry="8.5" stroke="none" />--}}
{{--                            <ellipse cx="9" cy="8.5" rx="8" ry="7.5" fill="none" />--}}
{{--                        </g>--}}
{{--                    </g>--}}
{{--                </svg>--}}
{{--                <span class="fs-5 nav-texttt">DL FINANCE</span>--}}
{{--            </a>--}}
{{--            <hr>--}}

            <ul class="nav nav-pills flex-column mb-auto  nav-itemsss">
                <li class="nav-item">
                    <a href="{{route('dashboard')}}" class="nav-link link-dark lh-1" aria-current="page">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-house"
                             viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                  d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                            <path fill-rule="evenodd"
                                  d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
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
                                d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z" />
                            <path fill-rule="evenodd"
                                  d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z" />
                        </svg>
                        <span class="ps-2 nav-texttt">Tasks</span>
                    </a>
                </li>
                @endif
                @if(Auth::guard('admins')->user()->hasRole('admin') || Auth::guard('admins')->user()->hasRole('fs') || Auth::guard('admins')->user()->hasRole('salesmanager') ||Auth::guard('admins')->user()->hasRole('menagment'))
                <li>
                    <a href="{{route('leads')}}" class="nav-link link-dark">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar3"
                             viewBox="0 0 16 16">
                            <path
                                d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z" />
                            <path
                                d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                        </svg>
                        <span class="ps-2 nav-texttt">Leads</span>
                    </a>
                </li>
                @endif
                <li>
                    <a href="#" class="nav-link link-dark">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-grid"
                             viewBox="0 0 16 16">
                            <path
                                d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z" />
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
                                d="M4 11a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0v-1zm6-4a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0V7zM7 9a1 1 0 0 1 2 0v3a1 1 0 1 1-2 0V9z" />
                            <path
                                d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z" />
                            <path
                                d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z" />
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
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                            <path fill-rule="evenodd"
                                  d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                        </svg>
                        <span class="ps-2 nav-texttt">Costumers</span>
                    </a>
                </li>
                @endif
                @if(Auth::guard('admins')->user()->hasRole('backoffice') || Auth::guard('admins')->user()->hasRole('admin'))
                <li>
                    <a href="#" class="nav-link link-dark">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cash-coin"
                             viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z" />
                            <path
                                d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z" />
                            <path
                                d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z" />
                            <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z" />
                        </svg>
                        <span class="ps-2 nav-texttt">Deposit</span>
                    </a>
                </li>
                @endif
                @if(Auth::guard('admins')->user()->hasRole('backoffice') || Auth::guard('admins')->user()->hasRole('admin'))
                <li>
                    <a href="#" class="nav-link link-dark">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-square"
                             viewBox="0 0 16 16">
                            <path
                                d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                            <path
                                d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
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
                                d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                            <path
                                d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
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
                                d="M6.445 11.688V6.354h-.633A12.6 12.6 0 0 0 4.5 7.16v.695c.375-.257.969-.62 1.258-.777h.012v4.61h.675zm1.188-1.305c.047.64.594 1.406 1.703 1.406 1.258 0 2-1.066 2-2.871 0-1.934-.781-2.668-1.953-2.668-.926 0-1.797.672-1.797 1.809 0 1.16.824 1.77 1.676 1.77.746 0 1.23-.376 1.383-.79h.027c-.004 1.316-.461 2.164-1.305 2.164-.664 0-1.008-.45-1.05-.82h-.684zm2.953-2.317c0 .696-.559 1.18-1.184 1.18-.601 0-1.144-.383-1.144-1.2 0-.823.582-1.21 1.168-1.21.633 0 1.16.398 1.16 1.23z" />
                            <path
                                d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
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
                            <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                            <path fill-rule="evenodd"
                                  d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z" />
                            <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z" />
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
                            <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                            <path fill-rule="evenodd"
                                  d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z" />
                            <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z" />
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
                                  d="M6 3.5A1.5 1.5 0 0 1 7.5 2h1A1.5 1.5 0 0 1 10 3.5v1A1.5 1.5 0 0 1 8.5 6v1H11a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-1 0V8h-5v.5a.5.5 0 0 1-1 0v-1A.5.5 0 0 1 5 7h2.5V6A1.5 1.5 0 0 1 6 4.5v-1zm-3 8A1.5 1.5 0 0 1 4.5 10h1A1.5 1.5 0 0 1 7 11.5v1A1.5 1.5 0 0 1 5.5 14h-1A1.5 1.5 0 0 1 3 12.5v-1zm6 0a1.5 1.5 0 0 1 1.5-1.5h1a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1-1.5 1.5h-1A1.5 1.5 0 0 1 9 12.5v-1z" />
                        </svg>
                        <span class="ps-2 nav-texttt">Prov.system</span>
                    </a>
                </li>
                @endif
                @if(Auth::guard('admins')->user()->hasRole('admin') || Auth::guard('admins')->user()->hasRole('menagment') || Auth::guard('admins')->user()->hasRole('salesmanager'))
                <li class="">
                    <a href="#" class="nav-link link-dark">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bar-chart" viewBox="0 0 16 16">
                            <path d="M4 11H2v3h2v-3zm5-4H7v7h2V7zm5-5v12h-2V2h2zm-2-1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1h-2zM6 7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7zm-5 4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-3z"/>
                        </svg>
                        <span class="ps-2 nav-texttt">Statistics</span>
                    </a>
                </li>
                    @endif
                @if(Auth::guard('admins')->user()->hasRole('menagment') || Auth::guard('admins')->user()->hasRole('finance') ||Auth::guard('admins')->user()->hasRole('admin') )
                <li class="">
                    <a href="#" class="nav-link link-dark">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-wallet2" viewBox="0 0 16 16">
                            <path d="M12.136.326A1.5 1.5 0 0 1 14 1.78V3h.5A1.5 1.5 0 0 1 16 4.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 13.5v-9a1.5 1.5 0 0 1 1.432-1.499L12.136.326zM5.562 3H13V1.78a.5.5 0 0 0-.621-.484L5.562 3zM1.5 4a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-13z"/>
                        </svg>
                        <span class="ps-2 nav-texttt">Trust</span>
                    </a>
                </li>
                    @endif
            </ul>
            <hr>
            <div class="dropdown profile-div">
                <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle"
                   id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">

                    <strong>mdo</strong>
                </a>
                <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
                    <li><a class="dropdown-item" href="#">New project...</a></li>
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="{{route('logout')}}">Sign out</a></li>
                </ul>
            </div>
        </div>
    </div>


<div class="container-fluid col" id="app">
    @if(\Session::has('success'))
        <div class="alert alert-success alert-dismissible fade show col-12" role="alert">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            {!! \Session::get('success') !!}
        </div>
    @endif
        @if(\Session::has('fail'))
            <div class="alert alert-danger alert-dismissible fade show col-12" role="alert">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                {!! \Session::get('fail') !!}
            </div>
        @endif
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
<script>
    cnt = 1;
    vehcnt = 1;
    counte = 1;
    newre = 1;
    chsc = 1;
    count = 1;
    function openHealth() {
        document.getElementById("health").style.display = "block";
        document.getElementById("car").style.display = "none";
        document.getElementById("finance").style.display = "none";
        document.getElementById("more").style.display = "none";
    }

    function openCar() {
        document.getElementById('health').style.display = "none";
        document.getElementById('car').style.display = "block";
        document.getElementById("finance").style.display = "none";
        document.getElementById("more").style.display = "none";

    }

    function openFinance() {
        document.getElementById('health').style.display = "none";
        document.getElementById('car').style.display = "none";
        document.getElementById("finance").style.display = "block";
        document.getElementById("more").style.display = "none";
    }

    function openMore() {
        document.getElementById('health').style.display = "none";
        document.getElementById('car').style.display = "none";
        document.getElementById("finance").style.display = "none";
        document.getElementById("more").style.display = "block";
    }

    function openCounterOffer() {


        if(cnt % 2 == 1)
        document.getElementById('counteroffer').innerHTML = '@if(isset($data->uploadpolice))' +
'	<input class="form-control" type="file" name="uploadpolice" value=""> ' +
'@else ' +
'	<input class="form-control" type="file" name="uploadpolice">   ' +
'@endif ' +
'	<input type="text" name="comment" placeholder="Comment">';
        else
        document.getElementById('counteroffer').innerHTML = '@if(isset($data->uploadpolice))' +
'	<input class="form-control" type="file" name="uploadpolice" value=""> ' +
'@else ' +
'	<input class="form-control" type="file" name="uploadpolice">   ' +
'@endif 	' +
'	<input type="text" name="comment" placeholder="Comment" value="">';


        if(cnt % 2 == 1){
        document.getElementById('counteroffer').innerHTML = '';
        }
        else{
        document.getElementById('counteroffer').innerHTML = "";
        }

        cnt++;
        vehcnt = 1;
        document.getElementById('newVehicle').innerHTML = "";
        document.getElementById('anotherNewVehicle').innerHTML = '';
    }

    function openNewVehicle() {
        if(vehcnt % 2 == 1){
        document.getElementById('newVehicle').innerHTML =
            '<label>Upload vehicle ID</label> ' +
            '	@if(isset($data->uploadvehicleid)) ' +
            '		<input class="form-control" type="file" name="uploadvehicleid" value=""> ' +
            '	@else ' +
            '		<input class="form-control" type="file" name="uploadvehicleid"> ' +
            '	@endif ' +
            '</div> ' +
            '<div> ' +
            '	<h6>Lesing</h6> ' +
            '	<input onclick="openYesCheckBox()" type="radio" name="leasing" id="yes" value="Yes"> ' +
            '	<label for="yes">Yes</label> <div class="hide" id="leasingname"> ' +
            '	<input type="text" name="leasingname" placeholder="Lesaing Name"> ' +
            '</div> ' +
            '<input type="radio" name="leasing" id="no" value="No"> ' +
            '	<label for="no">No</label> ' +
            '</div> ' +
            '<br> ' +
            '<hr> ' +
            '<h4>Vahicle Information</h4> ' +
            '<div> ' +
            '	<span>Purchase Year</span> ' +
            '	<select name="yearpurchase"> ' +
            '		@for($i = \Carbon\Carbon::now()->format("Y");$i>=1950;$i--) ' +
            '		<option value="{{$i}}">{{$i}}</option> ' +
            '		@endfor ' +
            '	</select> ' +
            '</div> ' +
            '<div> ' +
            '	<label>First Commissioning</label> ' +
            '	@if(isset($data->firstcommissioning)) ' +
            '		<input type="date" class="form-control" name="firstcommissioning" value="{{$data->firstcommissioning}}"> ' +
            '	@else ' +
            '		<input type="date" class="form-control" name="firstcommissioning"> ' +
            '	@endif ' +
            '</div> ' +
            '<div> ' +
            '	<label>Start Insurance</label> ' +
            '	@if(isset($data->startinsurance)) ' +
            '		<input type="date" class="form-control" name="startinsurance" value="{{$data->startinsurance}}"> ' +
            '	@else ' +
            '		<input type="date" class="form-control" name="startinsurance">  ' +
            '	@endif ' +
            '</div> ' +
            '<div> ' +
            '	<label>Kanton:</label> ' +
            '	<select name="kanton"> ' +
            '		@if(isset($data->kanton))' +
            '            <option selected value="{{$data->kanton}}">{{$data->kanton}}</option> ' +
            '        @endif' +
            '		<option>Zürich</option> ' +
            '		<option>Bern / Berne</option> ' +
            '		<option>Luzern</option> ' +
            '		<option>Uri</option> ' +
            '		<option>Schwyz</option> ' +
            '		<option>Unterwalden</option> ' +
            '		<option>Glarus</option> ' +
            '		<option>Zug</option> ' +
            '		<option>Freiburg / Fribourg</option> ' +
            '		<option>Solothurn</option> ' +
            '		<option>Basel</option> ' +
            '		<option>Schaffhausen</option> ' +
            '		<option>Appenzell</option> ' +
            '		<option>Sankt Gallen</option> ' +
            '		<option>Graubünden</option> ' +
            '		<option>Aargau</option> ' +
            '		<option>Thurgau</option> ' +
            '		<option>Ticino</option> ' +
            '		<option>Vaud</option> ' +
            '		<option>Valais / Wallis</option> ' +
            '		<option>Neuchâtel</option> ' +
            '		<option>Genève</option> ' +
            '		<option>Jura</option> ' +
            '	</select> ' +
            '</div> ' +
            '<div> ' +
            '	<label>KM-Stand</label> ' +
            '	@if(isset($data->kmstand)) ' +
            '		<input class="form-control" type="number" name="kmstand" value="{{$data->kmstand}}"> ' +
            '	@else ' +
            '		<input class="form-control" type="number" name="kmstand"> ' +
            '	@endif' +
            '</div> ' +
            '<hr> ' +
            '<h4>Driver Information</h4> ' +
            '<div> ' +
            '	<label>Date of issue of drivers license</label> ' +
            '	@if(isset($data->dateofissueofdriverslicense)) ' +
            '		<input class="form-control" type="date" name="dateofissueofdriverslicense" value="{{$data->dateofissueofdriverslicense}}">  ' +
            '	@else ' +
            '		<input class="form-control" type="date" name="dateofissueofdriverslicense"> ' +
            '	@endif' +
            '</div> ' +
            '<div> ' +
            '	<label>Nationality: </label> ' +
            '	@if(isset($data->nationality)) ' +
            '		<input class="form-control" type="text" name="nationality" value="{{$data->nationality}}"> ' +
            '	@else ' +
            '		<input class="form-control" type="text" name="nationality">  ' +
            '	@endif' +
            '</div> ' +
            '<div> ' +
            '	<label>Lenker? </label> ' +
            '	<select name="lenker"> ' +
            '		@if(isset($data->lenker))' +
            '            <option selected value="{{$data->lenker}}">{{$data->lenker}}</option> ' +
            '        @endif' +
            '		<option>Yes</option> ' +
            '		<option>No</option> ' +
            '	</select> ' +
            '</div> ' +
            '<hr> ' +
            '	<h4>Desired Coverage</h4> ' +
            '<div> ' +
            '	<label>Insurance</label> ' +
            '	<select name="insurance"> ' +
            '		@if(isset($data->insurance))' +
            '            <option selected value="{{$data->insurance}}">{{$data->insurance}}</option> ' +
            '        @endif' +
            '		<option>300</option> ' +
            '		<option>500</option> ' +
            '		<option>1000 (drivers under 25 years)</option> ' +
            '	</select> ' +
            '</div> ' +
            '<div> ' +
            '	<label>Deduction Part: </label> ' +
            '	<select name="deductionpart"> ' +
            '		@for($i = 1000;$i<=20000;$i+=1000) ' +
            '		@if(isset($data->deductionpart))' +
            '            <option selected value="{{$data->deductionpart}}">{{$data->deductionpart}}</option> ' +
            '        @endif' +
            '		<option>{{$i}}</option> ' +
            '		@endfor ' +
            '	</select>	' +
            '</div> ' +
            '<div> ' +
            '	<label>Things Carried: </label> ' +
            '	@if(isset($data->thingscarried)) ' +
            '		<input type="text" class="form-control" name="thingscarried" value="{{$data->thingscarried}}"> ' +
            '	@else ' +
            '		<input type="text" class="form-control" name="thingscarried"> ' +
            '	@endif ' +
            '</div> ' +
            '<div> ' +
            '	@if(isset($data->partnergarage)) ' +
            '		@if($data->partnergarage == "Parter Garage") ' +
            '			<label>Repair Shop: </label>' +
            '			<br> ' +
            '			<input type="radio" name="partnergarage" value="Parter Garage" checked> ' +
            '			<label for="partnergarage">Partener Garage</label> ' +
            '		@else ' +
            '			<input type="radio" name="partnergarage" value="Free Choice" checked> ' +
            '			<label for="partnergarage">Free Choice</label> ' +
            '		@endif ' +
            '		<label>Repair Shop: </label>' +
            '		<br> ' +
            '		<input type="radio" name="partnergarage" value="Parter Garage"> ' +
            '		<label for="partnergarage">Partener Garage</label> ' +
            '		<input type="radio" name="partnergarage" value="Free Choice"> ' +
            '		<label for="partnergarage">Free Choice</label> ' +
            '	@endif ' +
            '</div> ' +
            '<div> ' +
            '	@if(isset($data->accidentcoverage)) ' +
            '		@if($data->accidentcoverage == "Yes") ' +
            '			<label>Accident Coverage: </label>' +
            '			<br> ' +
            '			<input type="radio" name="accidentcoverage" value="Yes" checked> ' +
            '			<label for="accidentcoverage">Yes</label> ' +
            '		@else ' +
            '			<input type="radio" name="accidentcoverage" value="No" checked> ' +
            '			<label for="accidentcoverage">No</label> ' +
            '		@endif ' +
            '		<label>Accident Coverage: </label>' +
            '		<br> ' +
            '		<input type="radio" name="accidentcoverage" value="Yes"> ' +
            '		<label for="accidentcoverage">Yes</label> ' +
            '		<input type="radio" name="accidentcoverage" value="No"> ' +
            '		<label for="accidentcoverage">No</label> ' +
            '	@endif ' +
            '</div> ' +
            '<div> ' +
            '	@if(isset($data->trafficrightsprotection)) ' +
            '		@if($data->trafficrightsprotection == "Yes") ' +
            '			<label>Traffic Rights Protection: </label>' +
            '			<br> ' +
            '			<input type="radio" name="trafficrightsprotection" value="Yes" checked> ' +
            '			<label for="trafficrightsprotection">Yes</label> ' +
            '		@else ' +
            '			<input type="radio" name="trafficrightsprotection" value="No" checked> ' +
            '			<label for="trafficrightsprotection">No</label> ' +
            '	@endif ' +
            '		<label>Traffic Rights Protection: </label>' +
            '		<br> ' +
            '		<input type="radio" name="trafficrightsprotection" value="Yes"> ' +
            '		<label for="trafficrightsprotection">Yes</label> ' +
            '		<input type="radio" name="trafficrightsprotection" value="No"> ' +
            '		<label for="trafficrightsprotection">No</label> ' +
            '	@endif ' +
            '</div> ' +
            '<div> ' +
            '	@if(isset($data->grossnegligenceprotection)) ' +
            '		@if($data->grossnegligenceprotection == "Yes") ' +
            '			<label>Gross Negligence Protection: </label>' +
            '			<br> ' +
            '			<input type="radio" name="grossnegligenceprotection" value="Yes" checked> ' +
            '			<label for="grossnegligenceprotection">Yes</label> ' +
            '		@else ' +
            '			<input type="radio" name="grossnegligenceprotection" value="No" checked> ' +
            '			<label for="grossnegligenceprotection">No</label> ' +
            '		@endif ' +
            '		<label>Gross Negligence Protection: </label>' +
            '		<br> ' +
            '		<input type="radio" name="grossnegligenceprotection" value="Yes"> ' +
            '		<label for="grossnegligenceprotection">Yes</label> ' +
            '		<input type="radio" name="grossnegligenceprotection" value="No">' +
            '		<label for="grossnegligenceprotection">No</label> ' +
            '	@endif ' +
            '</div> ' +
            '<div> ' +
            '	@if(isset($data->glassprotection)) ' +
            '		@if($data->glassprotection == "Yes") ' +
            '			<label>Glass Protection: </label>' +
            '			<br> ' +
            '			<input type="radio" name="glassprotection" value="Yes" checked> ' +
            '			<label for="glassprotection">Yes</label> ' +
            '		@else ' +
            '			<input type="radio" name="glassprotection" value="No" checked> ' +
            '			<label for="glassprotection">No</label> ' +
            '		@endif ' +
            '		<label>Glass Protection: </label>' +
            '		<br> ' +
            '		<input type="radio" name="glassprotection" value="Yes"> ' +
            '		<label for="glassprotection">Yes</label> ' +
            '		<input type="radio" name="glassprotection" value="No"> ' +
            '		<label for="glassprotection">No</label> ' +
            '	@endif ' +
            '</div> ' +
            '<div> ' +
            '	@if(isset($data->parkingdamage)) ' +
            '		@if($data->parkingdamage == "Yes") ' +
            '			<label>Parking Damage: </label>' +
            '			<br> ' +
            '			<input type="radio" name="parkingdamage" value="Yes" checked> ' +
            '			<label for="parkingdamage">Yes</label> ' +
            '		@else ' +
            '			<input type="radio" name="parkingdamage" value="No" checked> ' +
            '			<label for="parkingdamage">No</label> ' +
            '		@endif ' +
            '		<label>Parking Damage: </label>' +
            '		<br> ' +
            '		<input type="radio" name="parkingdamage" value="Yes"> ' +
            '		<label for="parkingdamage">Yes</label> ' +
            '		<input type="radio" name="parkingdamage" value="No"> ' +
            '		<label for="parkingdamage">No</label> ' +
            '	@endif ' +
            '</div> ' +
            '<div> ' +
            '	@if(isset($data->roadsideassistance)) ' +
            '		@if($data->roadsideassistance == "Yes") ' +
            '			<label>24H Roadside Assistance: </label>' +
            '			<br> ' +
            '			<input type="radio" name="roadsideassistance" value="Yes" checked> ' +
            '			<label for="roadsideassistance">Yes</label> ' +
            '		@else ' +
            '			<input type="radio" name="roadsideassistance" value="No" checked> ' +
            '			<label for="roadsideassistance">No</label> ' +
            '		@endif ' +
            '		<label>24H Roadside Assistance: </label>' +
            '		<br> ' +
            '		<input type="radio" name="roadsideassistance" value="Yes" >' +
            '		<label for="roadsideassistance">Yes</label> ' +
            '		<input type="radio" name="roadsideassistance" value="No" > ' +
            '		<label for="roadsideassistance">No</label> ' +
            '	@endif ' +
            '</div> ' +
            '<div> ' +
            '	<label>Car Comment</label>' +
            '	@if(isset($data->carcomment)) ' +
            '		<input type="text" class="form-control" name="carcomment" value="{{$data->carcomment}}"> ' +
            '	@else ' +
            '		<input type="text" class="form-control" name="carcomment"> ' +
            '	@endif	' +
            '	<br> ' +
            '	<input type="button" class="btn btn-info" onClick="openAnotherNewVehicle()" value="Add Another One">' +
            '</div>';
        }
        else{
        document.getElementById('newVehicle').innerHTML = "";}
        vehcnt++;
        cnt = 1;
        document.getElementById('counteroffer').innerHTML = "";
        document.getElementById('anotherNewVehicle').innerHTML = '';

    }

    function openYesCheckBox() {
        document.getElementById('leasingname').classList.toggle('hide');
    }

    function openCounteroffered() {
        if(counte % 2 == 1){
        document.getElementById('counteroffered').innerHTML =
            '<h4>Counteroffer</h4>  ' +
            '<div>' +
            '      <label>Upload Police</label>' +
            '	  @if(isset($data->uploadpolice2))' +
            '	  <input type="file" name="uploadpolice2" class="form-control" value="{{$data->uploadpolice2}}">' +
            '	  @else' +
            '	  <input type="file" name="uploadpolice2" class="form-control">' +
            '	  @endif' +
            '	  <label>Comment At Police: </label>' +
            '	  @if(isset($data->commentatpolice))' +
            '	  <input type="text" name="commentatpolice" value="{{$data->commentatpolice}}">   ' +
            '	  @else' +
            '	  <input type="text" name="commentatpolice"> @endif' +
            '</div>';
        }
        else{
            document.getElementById('counteroffered').innerHTML = '';
        }
        counte++;
        document.getElementById('newrequest').innerHTML = "";
        document.getElementById('choosesociety').innerHTML = "";
        document.getElementById('anotherNewVehicle').innerHTML = '';
        newre = 1;
        chsc = 1;
    }

    function openNewPropertyInsurance() {
        if(newre % 2 == 1){
            document.getElementById('newrequest').innerHTML = '<h4>New Request</h4>' +
'<div>' +
'	<label>Number Of People</label>' +
'	<select name="numberofpeople">' +
'		@for($i = 1;$i<=30;$i++)' +
'			@if(isset($data->numberofpeople))' +
'				<option selected value="{{$data->numberofpeople}}">{{$data->numberofpeople}}</option>' +
'			@endif' +
'			<option>{{$i}}</option>' +
'		@endfor' +
'	</select>' +
'</div>' +
'<div>' +
'	<label>Number Of Rooms</label>' +
'	<select name="numberofrooms">' +
'		@for($i = 1;$i<=30;$i++)' +
'			@if(isset($data->numberofrooms))' +
'				<option selected value="{{$data->numberofrooms}}">{{$data->numberofrooms}}</option>' +
'			@endif' +
'			<option>{{$i}}</option>' +
'		@endfor' +
'	</select>' +
'</div>' +
'<div>' +
'	<label>Insuranceamount: </label>' +
'		@if(isset($data->insuranceamount))' +
'		<input type="number" name="insuranceamount" class="form-control" value="{{$data->insuranceamount}}">' +
'		@else' +
'		<input type="number" name="insuranceamount" class="form-control">' +
'		@endif' +
'</div>' +
'<div>' +
'	<label>Wished Additional Things: </label>' +
'		@if(isset($data->wishedadditionalthings))' +
'		<input type="text" name="wishedadditionalthings" class="form-control" value="{{$data->wishedadditionalthings}}">' +
'		@else' +
'		<input type="text" name="wishedadditionalthings" class="form-control">' +
'		@endif' +
'</div>' +
'<div>' +
'	<label>Private Liability: </label>' +
'	<br>' +
'	@if(isset($data->privateliability))  ' +
'		@if($data->privateliability == "Yes")' +
'			<input type="radio" name="privateliability" value="Yes" checked>' +
'			<label for="privateliability">Yes</label>' +
'		@else' +
'			<input type="radio" name="privateliability" value="No" checked>' +
'			<label for="privateliability">No</label>' +
'		@endif ' +
'	@else' +
'		<input type="radio" name="privateliability" value="Yes" >' +
'		<label for="privateliability">Yes</label>' +
'		<input type="radio" name="privateliability" value="No" >' +
'		<label for="privateliability">No</label>' +
'	@endif ' +
'</div>';
        }else{
            document.getElementById('newrequest').innerHTML = "";
        }
        newre++;
        document.getElementById('counteroffered').innerHTML = '';
        document.getElementById('choosesociety').innerHTML = "";
        document.getElementById('anotherNewVehicle').innerHTML = '';
        counte = 1;
        chsc = 1;
    }

    function openChoiceSociety() {
        if(chsc % 2 == 1) {
            document.getElementById('choosesociety').innerHTML =
            '<div> ' +
'	<h4>Legal Protection Insurance</h4> ' +
'	<div> ' +
'		<label>Society</label> ' +
'		@if(isset($data->society))' +
'		<input type="text" name="society" class="form-control" value="{{$data->society}}"> ' +
'		@else' +
'		<input type="text" name="society" class="form-control"> ' +
'		@endif' +
'	</div> ' +
'	<div> ' +
'		<label>Number Of People at Insurance</label> ' +
'		<select name="numberofpeopleinsurance">' +
'			@for($i = 1;$i<=30;$i++)' +
'				@if(isset($data->numberofpeopleinsurance))' +
'					<option selected value="{{$data->numberofpeopleinsurance}}">{{$data->numberofpeopleinsurance}}</option> ' +
'				@endif' +
'				<option>{{$i}}</option>' +
'			@endfor' +
'		</select>' +
'	</div> ' +
'</div>';
        }else{
            document.getElementById('choosesociety').innerHTML = "";
        }
        chsc++;
        document.getElementById('counteroffered').innerHTML = "";
        document.getElementById('newrequest').innerHTML = "";
        document.getElementById('anotherNewVehicle').innerHTML = '';
        counte = 1;
        newre = 1;
    }

    function openAnotherNewVehicle(){

        document.getElementById('anotherNewVehicle').innerHTML += '<div id="counter' + count +'"></div>';
        document.getElementById('counter'+ count).innerHTML +=
        '<label>Upload vehicle ID</label> ' +
'@if(isset($data->uploadvehicleid)) ' +
'<input class="form-control" type="file" name="uploadvehicleid'+ count+ '" value="{{$data->uploadvehicleid}}"> ' +
'@else ' +
'<input class="form-control" type="file" name="uploadvehicleid'+ count+ '"> ' +
'@endif ' +
'</div>' +
'<div>' +
'  <h6>Lesing</h6>' +
'  <input onclick="openYesCheckBox()" type="radio" name="leasing'+ count+ '" id="yes" value="Yes">' +
'  <label for="yes">Yes</label>' +
'  <div class="hide" id="leasingname">' +
'    <input type="text" name="leasingname'+ count+ '" placeholder="Lesaing Name">' +
'  </div>' +
'  <input type="radio" name="leasing'+ count+ '" id="no" value="No">' +
'  <label for="no">No</label>' +
'</div>' +
'<br>' +
'<hr>' +
'<h4>Vahicle Information</h4>' +
'<div>' +
'  <span>Purchase Year</span>' +
'  <select name="yearpurchase'+ count+ '"> @for($i = \Carbon\Carbon::now()->format("Y");$i>=1950;$i--) <option value="{{$i}}">{{$i}}</option> @endfor </select>' +
'</div>' +
'<div>' +
'  <label>First Commissioning</label>' +
'	@if(isset($data->firstcommissioning)) ' +
'	<input type="date" class="form-control" name="firstcommissioning'+ count+ '" value="{{$data->firstcommissioning}}">' +
'	@else ' +
'	<input type="date" class="form-control" name="firstcommissioning'+ count+ '"> ' +
'	@endif' +
'</div>' +
'<div>' +
'  <label>Start Insurance</label>' +
'	@if(isset($data->startinsurance)) ' +
'	<input type="date" class="form-control" name="startinsurance'+ count+ '" value="{{$data->startinsurance}}">' +
'	@else ' +
'	<input type="date" class="form-control" name="startinsurance'+ count+ '">' +
'	@endif' +
'</div>' +
'<div>' +
'  <label>Kanton:</label>' +
'  <select name="kanton">' +
'	@if(isset($data->kanton))' +
'        <option selected value="{{$data->kanton}}">{{$data->kanton}}</option>' +
'	@endif' +
'    <option>Zürich</option>' +
'    <option>Bern / Berne</option>' +
'    <option>Luzern</option>' +
'    <option>Uri</option>' +
'    <option>Schwyz</option>' +
'    <option>Unterwalden</option>' +
'    <option>Glarus</option>' +
'    <option>Zug</option>' +
'    <option>Freiburg / Fribourg</option>' +
'    <option>Solothurn</option>' +
'    <option>Basel</option>' +
'    <option>Schaffhausen</option>' +
'    <option>Appenzell</option>' +
'    <option>Sankt Gallen</option>' +
'    <option>Graubünden</option>' +
'    <option>Aargau</option>' +
'    <option>Thurgau</option>' +
'    <option>Ticino</option>' +
'    <option>Vaud</option>' +
'    <option>Valais / Wallis</option>' +
'    <option>Neuchâtel</option>' +
'    <option>Genève</option>' +
'    <option>Jura</option>' +
'  </select>' +
'</div>' +
'<div>' +
'  <label>KM-Stand</label>' +
'	@if(isset($data->kmstand)) ' +
'	<input class="form-control" type="number" name="kmstand'+ count+ '" value="{{$data->kmstand}}">' +
'	@else ' +
'	<input class="form-control" type="number" name="kmstand'+ count+ '">' +
'	@endif' +
'</div>' +
'<hr>' +
'<h4>Driver Information</h4>' +
'<div>' +
'  <label>Date of issue of drivers license</label>' +
'	@if(isset($data->dateofissueofdriverslicense)) ' +
'	<input class="form-control" type="date" name="dateofissueofdriverslicense'+ count+ '" value="{{$data->dateofissueofdriverslicense}}">' +
'	@else ' +
'	<input class="form-control" type="date" name="dateofissueofdriverslicense'+ count+ '">' +
'	@endif' +
'</div>' +
'<div>' +
'  <label>Nationality: </label>' +
'	@if(isset($data->nationality)) ' +
'	<input class="form-control" type="text" name="nationality'+ count+ '" value="{{$data->nationality}}">' +
'	@else ' +
'	<input class="form-control" type="text" name="nationality'+ count+ '">' +
'	@endif' +
'</div>' +
'<div>' +
'  <label>Lenker? </label>' +
'  <select name="lenker'+ count+ '">' +
'	@if(isset($data->lenker))' +
'        <option selected value="{{$data->lenker}}">{{$data->lenker}}</option>' +
'	@endif' +
'    <option>Yes</option>' +
'    <option>No</option>' +
'  </select>' +
'</div>' +
'<hr>' +
'<h4>Desired Coverage</h4>' +
'<div>' +
'  <label>Insurance</label>' +
'  <select name="insurance'+ count+ '">' +
'	@if(isset($data->insurance))' +
'        <option selected value="{{$data->insurance}}">{{$data->insurance}}</option>' +
'	@endif' +
'    <option>300</option>' +
'    <option>500</option>' +
'    <option>1000 (drivers under 25 years)</option>' +
'  </select>' +
'</div>' +
'<div>' +
'  <label>Deduction Part: </label>' +
'  <select name="deductionpart'+ count+ '"> ' +
'	@for($i = 1000;$i<=20000;$i+=1000) ' +
'		@if(isset($data->deductionpart))' +
'			<option selected value="{{$data->deductionpart}}">{{$data->deductionpart}}</option>' +
'		@endif' +
'      <option>{{$i}}</option> ' +
'	@endfor ' +
'  </select>' +
'</div>' +
'<div>' +
'  <label>Things Carried: </label>' +
'	@if(isset($data->thingscarried)) ' +
'	<input type="text" class="form-control" name="thingscarried'+ count+ '" value="{{$data->thingscarried}}">' +
'	@else ' +
'	<input type="text" class="form-control" name="thingscarried'+ count+ '">' +
'	@endif' +
'</div>' +
'<div> @if(isset($data->partnergarage)) @if($data->partnergarage == "Parter Garage") <label>Repair Shop: </label>' +
'  <br>' +
'  <input type="radio" name="partnergarage'+ count+ '" value="Parter Garage" checked>' +
'  <label for="partnergarage">Partener Garage</label> @else <input type="radio" name="partnergarage'+ count+ '" value="Free Choice" checked>' +
'  <label for="partnergarage">Free Choice</label> @endif <label>Repair Shop: </label>' +
'  <br>' +
'  <input type="radio" name="partnergarage'+ count+ '" value="Parter Garage">' +
'  <label for="partnergarage">Partener Garage</label>' +
'  <input type="radio" name="partnergarage'+ count+ '" value="Free Choice">' +
'  <label for="partnergarage">Free Choice</label> @endif' +
'</div>' +
'<div> @if(isset($data->accidentcoverage)) @if($data->accidentcoverage == "Yes") <label>Accident Coverage: </label>' +
'  <br>' +
'  <input type="radio" name="accidentcoverage'+ count+ '" value="Yes" checked>' +
'  <label for="accidentcoverage">Yes</label> @else <input type="radio" name="accidentcoverage'+ count+ '" value="No" checked>' +
'  <label for="accidentcoverage">No</label> @endif <label>Accident Coverage: </label>' +
'  <br>' +
'  <input type="radio" name="accidentcoverage'+ count+ '" value="Yes">' +
'  <label for="accidentcoverage">Yes</label>' +
'  <input type="radio" name="accidentcoverage'+ count+ '" value="No">' +
'  <label for="accidentcoverage">No</label> @endif' +
'</div>' +
'<div> @if(isset($data->trafficrightsprotection)) @if($data->trafficrightsprotection == "Yes") <label>Traffic Rights Protection: </label>' +
'  <br>' +
'  <input type="radio" name="trafficrightsprotection'+ count+ '" value="Yes" checked>' +
'  <label for="trafficrightsprotection">Yes</label> @else <input type="radio" name="trafficrightsprotection'+ count+ '" value="No" checked>' +
'  <label for="trafficrightsprotection">No</label> @endif <label>Traffic Rights Protection: </label>' +
'  <br>' +
'  <input type="radio" name="trafficrightsprotection'+ count+ '" value="Yes">' +
'  <label for="trafficrightsprotection">Yes</label>' +
'  <input type="radio" name="trafficrightsprotection'+ count+ '" value="No">' +
'  <label for="trafficrightsprotection">No</label> @endif' +
'</div>' +
'<div> @if(isset($data->grossnegligenceprotection)) @if($data->grossnegligenceprotection == "Yes") <label>Gross Negligence Protection: </label>' +
'  <br>' +
'  <input type="radio" name="grossnegligenceprotection'+ count+ '" value="Yes" checked>' +
'  <label for="grossnegligenceprotection">Yes</label> @else <input type="radio" name="grossnegligenceprotection'+ count+ '" value="No" checked>' +
'  <label for="grossnegligenceprotection">No</label> @endif <label>Gross Negligence Protection: </label>' +
'  <br>' +
'  <input type="radio" name="grossnegligenceprotection'+ count+ '" value="Yes">' +
'  <label for="grossnegligenceprotection">Yes</label>' +
'  <input type="radio" name="grossnegligenceprotection'+ count+ '" value="No">' +
'  <label for="grossnegligenceprotection">No</label> @endif' +
'</div>' +
'<div> @if(isset($data->glassprotection)) @if($data->glassprotection == "Yes") <label>Glass Protection: </label>' +
'  <br>' +
'  <input type="radio" name="glassprotection'+ count+ '" value="Yes" checked>' +
'  <label for="glassprotection">Yes</label> @else <input type="radio" name="glassprotection'+ count+ '" value="No" checked>' +
'  <label for="glassprotection">No</label> @endif <label>Glass Protection: </label>' +
'  <br>' +
'  <input type="radio" name="glassprotection'+ count+ '" value="Yes">' +
'  <label for="glassprotection">Yes</label>' +
'  <input type="radio" name="glassprotection'+ count+ '" value="No">' +
'  <label for="glassprotection">No</label> @endif' +
'</div>' +
'<div> @if(isset($data->parkingdamage)) @if($data->parkingdamage == "Yes") <label>Parking Damage: </label>' +
'  <br>' +
'  <input type="radio" name="parkingdamage'+ count+ '" value="Yes" checked>' +
'  <label for="parkingdamage">Yes</label> @else <input type="radio" name="parkingdamage'+ count+ '" value="No" checked>' +
'  <label for="parkingdamage">No</label> @endif <label>Parking Damage: </label>' +
'  <br>' +
'  <input type="radio" name="parkingdamage'+ count+ '" value="Yes">' +
'  <label for="parkingdamage">Yes</label>' +
'  <input type="radio" name="parkingdamage'+ count+ '" value="No">' +
'  <label for="parkingdamage">No</label> @endif' +
'</div>' +
'<div> @if(isset($data->roadsideassistance)) @if($data->roadsideassistance == "Yes") <label>24H Roadside Assistance: </label>' +
'  <br>' +
'  <input type="radio" name="roadsideassistance'+ count+ '" value="Yes" checked>' +
'  <label for="roadsideassistance">Yes</label> @else <input type="radio" name="roadsideassistance'+ count+ '" value="No" checked>' +
'  <label for="roadsideassistance">No</label> @endif <label>24H Roadside Assistance: </label>' +
'  <br>' +
'  <input type="radio" name="roadsideassistance'+ count+ '" value="Yes">' +
'  <label for="roadsideassistance">Yes</label>' +
'  <input type="radio" name="roadsideassistance'+ count+ '" value="No">' +
'  <label for="roadsideassistance">No</label> @endif' +
'</div>' +
'<div>' +
'  <label>Car Comment</label>' +
'	@if(isset($data->carcomment)) ' +
'	<input type="text" class="form-control" name="carcomment'+ count+ '" value="{{$data->carcomment}}">' +
'	@else ' +
'	<input type="text" class="form-control" name="carcomment'+ count+ '">' +
'	@endif' +
'  <br>' +
'  <input type="button" class="btn btn-info" onClick="openAnotherNewVehicle()" value="Add Another One">' +
'  <input type="button" class="btn btn-danger" onClick="deleteAnotherNewVehicle()" value="Delete">' +
'</div>';
        count++;
        document.getElementById('count').value = count;
    }

    function deleteAnotherNewVehicle(){
        document.getElementById('counter'+ --count).innerHTML = '';
        document.getElementById('count').value = count;
    }

    var Offene_Aufgaben__bool = false;

    $(document).ready(function(){
        $("#Offene_Aufgaben__").click(function(){
            $("#first_collapse").collapse('toggle');
            if(Offene_Aufgaben__bool == false){
                $("#Offene_Aufgaben_arrow__").addClass("bi bi-caret-down-fill bi-caret-up-fill");
                Offene_Aufgaben__bool = true;
            }else{
                $("#Offene_Aufgaben_arrow__").removeClass("bi bi-caret-up-fill");
                Offene_Aufgaben__bool = false;
            }
        });
    });

    var Pending__bool = false;

    $(document).ready(function(){
        $("#Pending__").click(function(){
            $("#collapse__").collapse('toggle');
            if(Pending__bool == false){
                $("#Pending_arrow__").addClass("bi bi-caret-down-fill bi-caret-up-fill");
                Pending__bool = true;
            }else{
                $("#Pending_arrow__").removeClass("bi bi-caret-up-fill");
                Pending__bool = false;
            }
        });
    });
</script>



