<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Appointments</title>
</head>

<body>
<div class="row">
    <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-xxl-2 d-flex">
        <div class="d-flex navvv bg-light" style="height: 100% !important; position: fixed;">
            <div class="nav-itemsss overflow-div1 bg-light">
                <div class="">
                    <a href="{{route('dashboard')}}" class="nav-link link-dark rounded" aria-current="page"
                       style="border-radius: 9px;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                             class="bi bi-house"
                             viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                  d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                            <path fill-rule="evenodd"
                                  d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                        </svg>
                        <span class="ps-1 nav-texttt">Home</span>
                    </a>
                </div>
                @if(Auth::guard('admins')->user()->hasRole('backoffice') || Auth::guard('admins')->user()->hasRole('fs') || Auth::guard('admins')->user()->hasRole('admin'))
                    <div class="">
                        <a href="{{route('tasks')}}" class="nav-link link-dark rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-speedometer2" viewBox="0 0 16 16">
                                <path
                                    d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z"/>
                                <path fill-rule="evenodd"
                                      d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z"/>
                            </svg>
                            <span class="ps-1 nav-texttt">Tasks</span>
                        </a>
                    </div>
                @endif
                @if(Auth::guard('admins')->user()->hasRole('admin') || Auth::guard('admins')->user()->hasRole('fs') || Auth::guard('admins')->user()->hasRole('salesmanager') ||Auth::guard('admins')->user()->hasRole('menagment'))
                    <div class="">
                        <a href="{{route('leads')}}" class="nav-link link-dark rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-calendar3"
                                 viewBox="0 0 16 16">
                                <path
                                    d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z"/>
                                <path
                                    d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                            </svg>
                            <span class="ps-1 nav-texttt">Leads</span>
                        </a>
                    </div>
                @endif
                <div class="">
                    <a href="#" class="nav-link link-dark rounded">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                             class="bi bi-grid"
                             viewBox="0 0 16 16">
                            <path
                                d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z"/>
                        </svg>
                        <span class="ps-1 nav-texttt">Finance</span>
                    </a>
                </div>
                @if(Auth::guard('admins')->user()->hasRole('backoffice') || Auth::guard('admins')->user()->hasRole('admin'))
                    <div class="">
                        <a href="{{route('status')}}" class="nav-link link-dark rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-clipboard-data" viewBox="0 0 16 16">
                                <path
                                    d="M4 11a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0v-1zm6-4a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0V7zM7 9a1 1 0 0 1 2 0v3a1 1 0 1 1-2 0V9z"/>
                                <path
                                    d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
                                <path
                                    d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
                            </svg>
                            <span class="ps-1 nav-texttt">Status</span>
                        </a>
                    </div>
                @endif
                @if(Auth::guard('admins')->check())
                    <div class="">
                        <a href="{{route('costumers')}}" class="nav-link link-dark rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-person-circle" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                <path fill-rule="evenodd"
                                      d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                            </svg>
                            <span class="ps-1 nav-texttt">Costumers</span>
                        </a>
                    </div>
                @endif
                @if(Auth::guard('admins')->user()->hasRole('backoffice') || Auth::guard('admins')->user()->hasRole('admin'))
                    <div class="">
                        <a href="#" class="nav-link link-dark rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-cash-coin"
                                 viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                      d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z"/>
                                <path
                                    d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z"/>
                                <path
                                    d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z"/>
                                <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z"/>
                            </svg>
                            <span class="ps-1 nav-texttt">Deposit</span>
                        </a>
                    </div>
                @endif
                @if(Auth::guard('admins')->user()->hasRole('backoffice') || Auth::guard('admins')->user()->hasRole('admin'))
                    <div class="">
                        <a href="#" class="nav-link link-dark rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-x-square"
                                 viewBox="0 0 16 16">
                                <path
                                    d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                                <path
                                    d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                            </svg>
                            <span class="ps-1 nav-texttt">Cancelations</span>
                        </a>
                    </div>
                @endif
                @if(Auth::guard('admins')->user()->hasRole('fs') || Auth::guard('admins')->user()->hasRole('salesmanager') || Auth::guard('admins')->user()->hasRole('menagment') || Auth::guard('admins')->user()->hasRole('admin'))
                    @if(Auth::guard('admins')->user()->hasRole('salesmanager'))
                        <div class="">
                            <a href="{{route('Appointments')}}" class="nav-link link-dark rounded">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                     class="bi bi-calendar-check" viewBox="0 0 16 16">
                                    <path
                                        d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                                    <path
                                        d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                                </svg>
                                <span class="ps-1 nav-texttt">Calendar</span>
                            </a>
                        </div>
                    @else
                        <div class="">
                            <a href="{{route('calendar')}}" class="nav-link link-dark rounded">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                     class="bi bi-calendar-check" viewBox="0 0 16 16">
                                    <path
                                        d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                                    <path
                                        d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                                </svg>
                                <span class="ps-1 nav-texttt">Calendar</span>
                            </a>
                        </div>
                    @endif

                @endif
                @if(Auth::guard('admins')->user()->hasRole('salesmanager') ||Auth::guard('admins')->user()->hasRole('menagment') || Auth::guard('admins')->user()->hasRole('admin'))
                    @if(Auth::guard('admins')->user()->hasRole('salesmanager'))
                        <div class="">
                            <a href="{{route('calendar')}}" class="nav-link link-dark rounded">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                     class="bi bi-calendar-date" viewBox="0 0 16 16">
                                    <path
                                        d="M6.445 11.688V6.354h-.633A12.6 12.6 0 0 0 4.5 7.16v.695c.375-.257.969-.62 1.258-.777h.012v4.61h.675zm1.188-1.305c.047.64.594 1.406 1.703 1.406 1.258 0 2-1.066 2-2.871 0-1.934-.781-2.668-1.953-2.668-.926 0-1.797.672-1.797 1.809 0 1.16.824 1.77 1.676 1.77.746 0 1.23-.376 1.383-.79h.027c-.004 1.316-.461 2.164-1.305 2.164-.664 0-1.008-.45-1.05-.82h-.684zm2.953-2.317c0 .696-.559 1.18-1.184 1.18-.601 0-1.144-.383-1.144-1.2 0-.823.582-1.21 1.168-1.21.633 0 1.16.398 1.16 1.23z"/>
                                    <path
                                        d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                                </svg>
                                <span class="ps-1 nav-texttt">Dates</span>
                            </a>
                        </div>
                    @else
                        <div class="">
                            <a href="{{route('dates')}}" class="nav-link link-dark rounded">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                     class="bi bi-calendar-date" viewBox="0 0 16 16">
                                    <path
                                        d="M6.445 11.688V6.354h-.633A12.6 12.6 0 0 0 4.5 7.16v.695c.375-.257.969-.62 1.258-.777h.012v4.61h.675zm1.188-1.305c.047.64.594 1.406 1.703 1.406 1.258 0 2-1.066 2-2.871 0-1.934-.781-2.668-1.953-2.668-.926 0-1.797.672-1.797 1.809 0 1.16.824 1.77 1.676 1.77.746 0 1.23-.376 1.383-.79h.027c-.004 1.316-.461 2.164-1.305 2.164-.664 0-1.008-.45-1.05-.82h-.684zm2.953-2.317c0 .696-.559 1.18-1.184 1.18-.601 0-1.144-.383-1.144-1.2 0-.823.582-1.21 1.168-1.21.633 0 1.16.398 1.16 1.23z"/>
                                    <path
                                        d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                                </svg>
                                <span class="ps-1 nav-texttt">Dates</span>
                            </a>
                        </div>
                    @endif
                @endif
                @if(Auth::guard('admins')->user()->hasRole('admin') || Auth::guard('admins')->user()->hasRole('menagment') || Auth::guard('admins')->user()->hasRole('salesmanager'))
                    <div class="">
                        <a href="#" class="nav-link link-dark rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-people-fill"
                                 viewBox="0 0 16 16">
                                <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                <path fill-rule="evenodd"
                                      d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
                                <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                            </svg>
                            <span class="ps-1 nav-texttt">Employees</span>
                        </a>
                    </div>
                @endif
                @if(Auth::guard('admins')->user()->hasRole('finance') || Auth::guard('admins')->user()->hasRole('admin'))
                    <div class="">
                        <a href="#" class="nav-link link-dark rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-percent" viewBox="0 0 16 16">
                                <path
                                    d="M13.442 2.558a.625.625 0 0 1 0 .884l-10 10a.625.625 0 1 1-.884-.884l10-10a.625.625 0 0 1 .884 0zM4.5 6a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5zm7 6a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                            </svg>
                            <span class="ps-1 nav-texttt">Commisions</span>
                        </a>
                    </div>
                @endif
                @if(Auth::guard('admins')->user()->hasRole('admin') || Auth::guard('admins')->user()->hasRole('menagment') || Auth::guard('admins')->user()->hasRole('salesmanager'))
                    <div class="">
                        <a href="#" class="nav-link link-dark rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-diagram-2-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                      d="M6 3.5A1.5 1.5 0 0 1 7.5 2h1A1.5 1.5 0 0 1 10 3.5v1A1.5 1.5 0 0 1 8.5 6v1H11a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-1 0V8h-5v.5a.5.5 0 0 1-1 0v-1A.5.5 0 0 1 5 7h2.5V6A1.5 1.5 0 0 1 6 4.5v-1zm-3 8A1.5 1.5 0 0 1 4.5 10h1A1.5 1.5 0 0 1 7 11.5v1A1.5 1.5 0 0 1 5.5 14h-1A1.5 1.5 0 0 1 3 12.5v-1zm6 0a1.5 1.5 0 0 1 1.5-1.5h1a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1-1.5 1.5h-1A1.5 1.5 0 0 1 9 12.5v-1z"/>
                            </svg>
                            <span class="ps-1 nav-texttt">Prov.system</span>
                        </a>
                    </div>
                @endif
                @if(Auth::guard('admins')->user()->hasRole('admin') || Auth::guard('admins')->user()->hasRole('menagment') || Auth::guard('admins')->user()->hasRole('salesmanager'))
                    <div class="">
                        <a href="#" class="nav-link link-dark  rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-bar-chart-fill" viewBox="0 0 16 16">
                                <path
                                    d="M1 11a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-3zm5-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V2z"/>
                            </svg>
                            <span class="ps-1 nav-texttt">Statistics</span>
                        </a>
                    </div>
                @endif
                @if(Auth::guard('admins')->user()->hasRole('menagment') || Auth::guard('admins')->user()->hasRole('finance') ||Auth::guard('admins')->user()->hasRole('admin') )
                    <div class="">
                        <a href="#" class="nav-link link-dark rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-diagram-2-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                      d="M6 3.5A1.5 1.5 0 0 1 7.5 2h1A1.5 1.5 0 0 1 10 3.5v1A1.5 1.5 0 0 1 8.5 6v1H11a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-1 0V8h-5v.5a.5.5 0 0 1-1 0v-1A.5.5 0 0 1 5 7h2.5V6A1.5 1.5 0 0 1 6 4.5v-1zm-3 8A1.5 1.5 0 0 1 4.5 10h1A1.5 1.5 0 0 1 7 11.5v1A1.5 1.5 0 0 1 5.5 14h-1A1.5 1.5 0 0 1 3 12.5v-1zm6 0a1.5 1.5 0 0 1 1.5-1.5h1a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1-1.5 1.5h-1A1.5 1.5 0 0 1 9 12.5v-1z"/>
                            </svg>
                            <span class="ps-1 nav-texttt">Trust</span>
                        </a>
                    </div>
                @endif
            </div>
            <hr>
            <div class="dropdown user-drop bg-light w-100 py-3 d-flex justify-content-center" style="position: absolute; bottom:0; left:0; border: none; border-top: 1px #c4c4c4 solid;">

                <a href="#" class="d-flex align-items-center link-dark text-decoration-none " id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-up" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z"/>
                    </svg>
                </a>
                <ul class="dropdown-menu dropup text-small shadow" aria-labelledby="dropdownUser2">
                    @if(Auth::guard('admins')->user()->hasRole('admin'))<li><a class="dropdown-item" href="{{route('addnewuser')}}">Add New User</a></li>@endif
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
    <div class="col">
        <section>
            @if(\Session::has('success'))
                <div class="alert alert-success alert-dismissible fade show col-12 container" role="alert">
                    {!! \Session::get('success') !!}
                </div>
            @endif

        </section>

        <div class="row">

            <div class="col py-4">
                <section>

                    <div class="container">

                        <div class="accepted-section row">
                            <div class="mt-2">
                                <a href="{{route('tasks')}}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="white"
                                         class="bi bi-chevron-left" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                              d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                                    </svg>
                                </a>
                            </div>
                            <div
                                class="header-section-name text-center col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 g-0 my-auto">
                                <div class="py-3 ">
                                    <div class="mx-3">
                                    <span class="fs-3 fw-bold text-color-header1">
                                        {{$app->first_name}}
                                    </span>
                                    </div>
                                    <div class="mx-3">
                                    <span class="fs-6 text-color-header1">
                                        <span class="">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12.587" height="16.243"
                                                 viewBox="0 0 8.587 12.243">
                                                <path id="Path_170" data-name="Path 170"
                                                      d="M1507.522,2353.695l.285-.4c.45-.637.916-1.3,1.32-1.908a17.1,17.1,0,0,0,1.607-2.977,3.3,3.3,0,0,0,.287-1.836,3.541,3.541,0,0,0-3.492-2.981,3.5,3.5,0,0,0-2.866,1.494,3.146,3.146,0,0,0-.606,2.37,6.507,6.507,0,0,0,.733,1.932,32.418,32.418,0,0,0,2.511,4.006c.072.1.145.2.22.3m.009-9.063h.024a2.481,2.481,0,0,1-.023,4.963h-.028a2.486,2.486,0,0,1-2.446-2.508,2.475,2.475,0,0,1,2.474-2.455m0,9.964c-.23-.312-.449-.6-.66-.9a32.713,32.713,0,0,1-2.552-4.072,7.013,7.013,0,0,1-.785-2.091,3.7,3.7,0,0,1,.695-2.752,4.05,4.05,0,0,1,7.31,1.7,3.861,3.861,0,0,1-.319,2.12,17.67,17.67,0,0,1-1.656,3.068C1508.941,2352.621,1508.181,2353.663,1507.534,2354.6Zm0-9.438a1.955,1.955,0,0,0-.021,3.91h.023a1.955,1.955,0,0,0,.018-3.91Z"
                                                      transform="translate(-1503.243 -2342.783)" fill="#fff"
                                                      stroke="#fff"
                                                      stroke-width="0.5"/>
                                            </svg>
                                        </span>
                                        {{$app->address}}
                                    </span>
                                    </div>
                                    <div class="input-group justify-content-center mt-3">
                                        <button class="py-2 border-0 static-btn1 m-1">
                                        <span class="bg-dark py-1 px-3 people-svg-span">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#fff"
                                                 class="bi bi-people-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                                <path fill-rule="evenodd"
                                                      d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
                                                <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                                            </svg>
                                        </span>
                                            <span class="px-2" style="font-size: 14px;">
                                            {{$app->number_of_persons}} Persons
                                        </span>
                                        </button>
                                        <button class="py-2 border-0 static-btn1 m-1">
                                        <span class="bg-dark py-1 px-3 people-svg-span">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#fff"
                                                 class="bi bi-people-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                                <path fill-rule="evenodd"
                                                      d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
                                                <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                                            </svg>
                                        </span>
                                            <span class="px-2" style="font-size: 14px;">
                                            {{$app->created_at}}
                                        </span>
                                        </button>
                                    </div>
                                    <div class="mx-3">
                                        <hr class="hr-style">
                                    </div>
                                </div>
                            </div>

                            <div class="other-people-accordion  py-4 col-12 col-sm-12 col-md-12 col-lg col-xl g-0">
                                <div class="border-left-div">
                                    <div class="accordion accordion-flush mx-3 " id="accordionFlushExample">

                                        @php
                                            $leadss = $app->id * 1244;
                                            $appId = \Illuminate\Support\Facades\Crypt::encrypt($leadss);
                                        @endphp
                                        <form action="{{route('completeapp',$appId)}}" method="post">
                                            @csrf
                                            <div class="accordion-item my-1">
                                                <h2 class="accordion-header" id="flush-headingOne">
                                                    <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse"
                                                            data-bs-target="#flush-collapseOne"
                                                            aria-expanded="false" aria-controls="flush-collapseOne">
                                                        Person 1 erfassen
                                                    </button>
                                                </h2>
                                                <div id="flush-collapseOne" class="accordion-collapse collapse show"
                                                     aria-labelledby="flush-headingOne"
                                                     data-bs-parent="#accordionFlushExample">
                                                    <div class="accordion-body p-0 mx-2 py-2">
                                                        <div class="row g-3 align-items-center m-1">
                                                            <div class="col-4">
                                                                <label for="inputTxt4"
                                                                       class="col-form-label">Vorname:</label>
                                                            </div>
                                                            <div class="col">
                                                                <input type="text" id="inputTxt4" class="form-control"
                                                                       aria-describedby="passwordHelpInline"
                                                                       name="fname1">
                                                            </div>
                                                        </div>
                                                        <div class="row g-3 align-items-center m-1">
                                                            <div class="col-4">
                                                                <label for="inputTxt5"
                                                                       class="col-form-label">Nachname:</label>
                                                            </div>
                                                            <div class="col">
                                                                <input type="text" id="inputTxt5" class="form-control"
                                                                       name="lname1"
                                                                       aria-describedby="passwordHelpInline">
                                                            </div>
                                                        </div>
                                                        <div class="row g-3 align-items-center m-1">
                                                            <div class="col-4">
                                                                <label for="inputTxt6"
                                                                       class="col-form-label">Geburtstag:</label>
                                                            </div>
                                                            <div class="col">
                                                                <input type="date" id="inputTxt6" class="form-control"
                                                                       aria-describedby="passwordHelpInline"
                                                                       name="birthday1">
                                                            </div>
                                                        </div>
                                                        <div class="text-end">
                                                            <button class="accept-btn m-2 py-1 px-5 collapsed"
                                                                    type="button"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#flush-collapseOne"
                                                                    aria-expanded="false"
                                                                    aria-controls="flush-collapseOne">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="23.232"
                                                                     height="23.805" viewBox="0 0 46.232 33.805">
                                                                    <path id="Path_277" data-name="Path 277"
                                                                          d="M8370.12,999.407l15.7,15.954,7.778-8.812,19.931-22.581"
                                                                          transform="translate(-8368.706 -982.557)"
                                                                          fill="none"
                                                                          stroke="currentColor" stroke-linecap="round"
                                                                          stroke-linejoin="round" stroke-width="3"/>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                    </div>
                                    <div class="text-center">
                                        <input type="submit" class="btn btn-success text-center mt-2 col-10 py-2"
                                               style="border-radius: 35px;">
                                    </div>

                                </div>

                            </div>

                            </form>
                        </div>
                </section>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
<script>
    var count = <?php echo $app->number_of_persons;?>;
    for (i = 2; i <= count; i++) {
        $("#accordionFlushExample").append(' <div class="accordion-item my-1">' +
            '                                        <h2 class="accordion-header" id="flush-headingTwo">' +
            '                                            <button class="accordion-button collapsed d-btnn" type="button"' +
            '                                                data-bs-toggle="collapse" data-bs-target="#flush-collapse' + i + '"' +
            '                                                aria-expanded="false" aria-controls="flush-collapse' + i + '"' + '>' +
            '                                                Person' + i + ' erfassen' +
            '                                            </button>' +
            '                                        </h2>' +
            '                                        <div id="flush-collapse' + i + '"' + 'class="accordion-collapse collapse"' +
            '                                            aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">' +
            '                                            <div class="accordion-body p-0 mx-2 py-2 ">' +
            '                                                <div class="row g-3 align-items-center m-1">' +
            '                                                    <div class="col-4">' +
            '                                                        <label for="inputTxt4" class="col-form-label">Vorname:</label>' +
            '                                                    </div>' +
            '                                                    <div class="col">' +
            '                                                        <input type="text" id="inputTxt4" class="form-control" name="fname' + i + '"' +
            '                                                           aria-describedby="passwordHelpInline">' +
            '                                                    </div>' +
            '                                                </div>' +
            '                                                <div class="row g-3 align-items-center m-1">' +
            '                                                    <div class="col-4">' +
            '                                                        <label for="inputTxt5" class="col-form-label">Nachname:</label>' +
            '                                                    </div>' +
            '                                                    <div class="col">' +
            '                                                        <input type="text" id="inputTxt5" class="form-control"' +
            '                                                            aria-describedby="passwordHelpInline" name="lname' + i + '">' +
            '                                                    </div>' +
            '                                                </div>' +
            '                                                <div class="row g-3 align-items-center m-1">' +
            '                                                    <div class="col-4">' +
            '                                                        <label for="inputTxt6"' +
            '                                                            class="col-form-label">Geburtstag:</label>' +
            '                                                    </div>' +
            '                                                    <div class="col">' +
            '                                                        <input type="date" id="inputTxt6" class="form-control" name="birthday' + i + '"' +
            '                                                            aria-describedby="passwordHelpInline">' +
            '                                                    </div>' +
            '                                                </div>' +
            '                                                <div class="text-end">' +
            '                                                    <button class="accept-btn m-2 py-1 px-5 collapsed" type="button"' +
            '                                                        data-bs-toggle="collapse" data-bs-target="#flush-collapse' + i + '"' +
            '                                                        aria-expanded="false" aria-controls="flush-collapseTwo' + '"' + '>' +
            '                                                        <svg xmlns="http://www.w3.org/2000/svg" width="23.232"' +
            '                                                            height="23.805" viewBox="0 0 46.232 33.805">' +
            '                                                            <path id="Path_277" data-name="Path 277"' +
            '                                                                d="M8370.12,999.407l15.7,15.954,7.778-8.812,19.931-22.581"' +
            '                                                                transform="translate(-8368.706 -982.557)" fill="none"' +
            '                                                                stroke="currentColor" stroke-linecap="round"' +
            '                                                                stroke-linejoin="round" stroke-width="3" />' +
            '                                                        </svg>' +
            '                                                    </button>' +
            '                                                </div>' +
            '                                            </div>' +
            '                                        </div>' +
            '                                    </div>');
    }
</script>
</body>
</html>
<style>
    /* overflow 1 */
    .overflow-div1::-webkit-scrollbar {
        width: 3px !important;
    }

    /* Track */
    .overflow-div1::-webkit-scrollbar-track {
        background: transparent !important;
        border-radius: 10px;
    }

    /* Handle */
    .overflow-div1::-webkit-scrollbar-thumb {
        background: #c9cad8;
        border-radius: 10px;
    }

    /* Handle on hover */
    .overflow-div1::-webkit-scrollbar-thumb:hover {
        background: #707070;
        border-radius: 10px;
    }
    .nav-itemsss {
        height: 92vh !important;
        overflow-y: scroll !important;

        /* overflow-x: hidden !important; */
    }
    .nav-link {
        padding-right: 1.8rem !important;
        padding-left: 1.8rem !important;
    }

    .nav-itemsss a:hover {
        background-color: #e0e1e6;
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
            width: fit-content !important;
            text-align: center !important;
            margin-left: auto !important;
            margin-right: auto !important;
        }
        /* .user-drop {
            position: fixed !important;
            bottom: 0;
            width: fit-content !important;
        } */

    }
    body {
        overflow-x: hidden;
    }

    .collapsed .d-btnn {
        background-color: #c8ddd1;
        opacity: 0.4;
    }

    .d-btnn {
        opacity: 1;
    }

    .form-control:focus {
        border-color: #ced4da;
        box-shadow: none;
    }

    .accordion-button {
        color: #7DBF9A;
        font-weight: bold;
        border-radius: 15px !important;
    }

    .accordion-item {
        border-radius: 15px !important;
    }

    .hr-style {
        color: #fff !important;
        height: 3px !important;
        border-radius: 50px;
        opacity: 1;
        display: none;
    }

    .border-left-div {
        border: none !important;
        border-left: 3px solid #fff !important;

    }

    @media (max-width: 991.98px) {
        .hr-style {
            display: block;
        }

        .border-left-div {
            border: none !important;
            border-left: none !important;
        }
    }


    .accepted-section {
            background-color: #7DBF9A;
        border-radius: 19px;
    }

    .decline-btn {
        border: 2px solid #FF0D13;
        border-radius: 13px !important;
        background-color: #fff;
        color: #FF0D13;

    }

    .decline-btn:hover {
        background-color: #FF0D13;
        color: #fff !important;
    }

    .accept-btn {
        border: 2px solid #63D4A4;
        border-radius: 13px !important;
        background-color: #fff;
        color: #63D4A4 !important;
    }

    .accept-btn:hover {
        border: 2px solid #63D4A4;
        background-color: #63D4A4;
        color: #fff !important;
    }

    .text-color-header1 {
        color: #fff;
    }

    .people-icon-div {
        background-color: #525353;
        margin: 3px;
    }

    .static-btn1 {
        background-color: #fff !important;
        border-radius: 8px !important;
    }

    .people-svg-span {
        border-radius: 8px;
    }

    .accordion-button:not(.collapsed) {
        color: #7DBF9A;
        background-color: #fff;
        box-shadow: none;
    }

    .accordion-button:not(.collapsed)::after {
        content: '';
    }

    .accordion-button:focus {
        border-color: transparent !important;
        border: none !important;
        box-shadow: none !important;
    }
</style>
