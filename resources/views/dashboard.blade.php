<!doctype html>
@extends('template.navbar')
@section('content')
    <html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
              integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
              crossorigin="anonymous">
        <link rel="stylesheet" href="assets/css/style.css">


        <title>Home</title>

    </head>

    <body>

    @if(Auth::guard('admins')->user()->hasRole('admin') || Auth::guard('admins')->user()->hasRole('fs') || Auth::guard('admins')->user()->hasRole('digital'))
        <section>
            <div class="mx-4">
                <div class="py-3">
                    <div class="text-start">
                            <span class="fw-bolder">
                                ÜBERSICHT
                            </span>
                    </div>
                    <div class="text-muted">
                            <span class="">
                                Zeitraum 01.09.2021 - 31.09.2021
                                <svg xmlns="http://www.w3.org/2000/svg" class="ms-2" width="18.401" height="7.671"
                                     viewBox="0 0 18.401 7.671">
                                    <path id="Path_273" data-name="Path 273" d="M216.715,2188l8.153,5.874,8.153-5.874"
                                          transform="translate(-215.668 -2186.953)" fill="none" stroke="#b9b9b9"
                                          stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
                                </svg>
                            </span>
                    </div>
                </div>
                <div class="py-3">
                    <div class="row">
                        <div class="col-12 col-xs-6 col-sm-6 col-md-6 col-lg-3 col-xl g-0">
                            <div class="first-box "
                                 style="background-color: #BDC1CC; border-radius: 25px;  margin-left: 4%;margin-right: 4%; margin-bottom: 4%; margin-top: 4%;">
                                <div class="row">
                                    <div class="col g-0 my-auto">
                                        <div class=" ps-4">
                                                <span class="fs-2 fw-bold text-white ">
                                                  {{$tasks}}
                                                </span>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="text-end">
                                            <svg onclick="window.location.href='{{route('tasks')}}'"
                                                 style="cursor: pointer;"
                                                 xmlns="http://www.w3.org/2000/svg"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink"
                                                 viewBox="0 0 92.259 71.213">
                                                <defs>
                                                    <clipPath id="clip-path">
                                                        <rect id="Rectangle_5" data-name="Rectangle 5"
                                                              width="92.259" height="71.213" fill="#88889b"/>
                                                    </clipPath>
                                                </defs>
                                                <g id="Group_620" data-name="Group 620"
                                                   transform="translate(-558.382 -263.428)">
                                                    <g id="Group_18" data-name="Group 18"
                                                       transform="translate(558.382 263.428)"
                                                       style="isolation: isolate">
                                                        <g id="Group_9" data-name="Group 9">
                                                            <g id="Group_8" data-name="Group 8"
                                                               clip-path="url(#clip-path)">
                                                                <path id="Path_275" data-name="Path 275"
                                                                      d="M194.84,17.664v48.96c-76.146,18.951-86.384-26.255-86.428-36.46C108.283,0,102.581,0,102.581,0h74.595A17.665,17.665,0,0,1,194.84,17.664"
                                                                      transform="translate(-102.581)"
                                                                      fill="#88889b"/>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <ellipse id="Ellipse_8" data-name="Ellipse 8" cx="2.42"
                                                             cy="2.42" rx="2.42" ry="2.42"
                                                             transform="translate(617.762 283.64)" fill="#fff"/>
                                                    <ellipse id="Ellipse_9" data-name="Ellipse 9" cx="2.42"
                                                             cy="2.42" rx="2.42" ry="2.42"
                                                             transform="translate(617.762 292.384)" fill="#fff"/>
                                                </g>
                                            </svg>

                                        </div>
                                    </div>
                                </div>
                                <div class="py-3 ps-3">
                                        <span class="text-white fw-bolder">
                                        Anträge offen
                                     </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-xs-6 col-sm-6 col-md-6 col-lg-3 col-xl g-0">
                            <div class="second-box"
                                 style="background-color: #4CC590; border-radius: 25px; margin-left: 4%;margin-right: 4%; margin-bottom: 4%; margin-top: 4%;">
                                <div class="row">
                                    <div class="col g-0 my-auto">
                                        <div class=" ps-4 ">
                                                <span class="fs-2 fw-bold text-white">
                                                {{$done}}
                                                </span>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="text-end">
                                            <svg onclick="window.location.href='{{route('tasks')}}'"
                                                 style="cursor: pointer;"
                                                 xmlns="http://www.w3.org/2000/svg"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink"
                                                 viewBox="0 0 92.259 71.213">
                                                <defs>
                                                    <clipPath id="clip-path">
                                                        <rect id="Rectangle_5" data-name="Rectangle 5"
                                                              width="92.259" height="71.213" fill="#49B178"/>
                                                    </clipPath>
                                                </defs>
                                                <g id="Group_620" data-name="Group 620"
                                                   transform="translate(-558.382 -263.428)">
                                                    <g id="Group_18" data-name="Group 18"
                                                       transform="translate(558.382 263.428)"
                                                       style="isolation: isolate">
                                                        <g id="Group_9" data-name="Group 9">
                                                            <g id="Group_8" data-name="Group 8"
                                                               clip-path="url(#clip-path)">
                                                                <path id="Path_275" data-name="Path 275"
                                                                      d="M194.84,17.664v48.96c-76.146,18.951-86.384-26.255-86.428-36.46C108.283,0,102.581,0,102.581,0h74.595A17.665,17.665,0,0,1,194.84,17.664"
                                                                      transform="translate(-102.581)"
                                                                      fill="#49B178"/>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <ellipse id="Ellipse_8" data-name="Ellipse 8" cx="2.42"
                                                             cy="2.42" rx="2.42" ry="2.42"
                                                             transform="translate(617.762 283.64)" fill="#fff"/>
                                                    <ellipse id="Ellipse_9" data-name="Ellipse 9" cx="2.42"
                                                             cy="2.42" rx="2.42" ry="2.42"
                                                             transform="translate(617.762 292.384)" fill="#fff"/>
                                                </g>
                                            </svg>

                                        </div>
                                    </div>
                                </div>
                                <div class="py-3  ps-3">
                                        <span class="text-white fw-bolder">
                                            Aufgenommen
                                        </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-xs-6 col-sm-6 col-md-6 col-lg-3 col-xl g-0">
                            <div class="second-box"
                                 style="background-color: #f8ce79; border-radius: 25px; margin-left: 4%;margin-right: 4%; margin-bottom: 4%; margin-top: 4%;">
                                <div class="row">
                                    <div class="col g-0 my-auto">
                                        <div class=" ps-4 ">
                                                <span class="fs-2 fw-bold text-white">
                         {{$pending}}
                                                </span>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="text-end">
                                            <svg onclick="window.location.href='{{route('tasks')}}'"
                                                 style="cursor: pointer;"
                                                 xmlns="http://www.w3.org/2000/svg"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink"
                                                 viewBox="0 0 92.259 71.213">
                                                <defs>
                                                    <clipPath id="clip-path">
                                                        <rect id="Rectangle_5" data-name="Rectangle 5"
                                                              width="92.259" height="71.213" fill="#EDAE60"/>
                                                    </clipPath>
                                                </defs>
                                                <g id="Group_620" data-name="Group 620"
                                                   transform="translate(-558.382 -263.428)">
                                                    <g id="Group_18" data-name="Group 18"
                                                       transform="translate(558.382 263.428)"
                                                       style="isolation: isolate">
                                                        <g id="Group_9" data-name="Group 9">
                                                            <g id="Group_8" data-name="Group 8"
                                                               clip-path="url(#clip-path)">
                                                                <path id="Path_275" data-name="Path 275"
                                                                      d="M194.84,17.664v48.96c-76.146,18.951-86.384-26.255-86.428-36.46C108.283,0,102.581,0,102.581,0h74.595A17.665,17.665,0,0,1,194.84,17.664"
                                                                      transform="translate(-102.581)"
                                                                      fill="#EDAE60"/>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <ellipse id="Ellipse_8" data-name="Ellipse 8" cx="2.42"
                                                             cy="2.42" rx="2.42" ry="2.42"
                                                             transform="translate(617.762 283.64)" fill="#fff"/>
                                                    <ellipse id="Ellipse_9" data-name="Ellipse 9" cx="2.42"
                                                             cy="2.42" rx="2.42" ry="2.42"
                                                             transform="translate(617.762 292.384)" fill="#fff"/>
                                                </g>
                                            </svg>

                                        </div>
                                    </div>
                                </div>
                                <div class="py-3  ps-3">
                                        <span class="text-white fw-bolder">
                                            Aufgenommen
                                        </span>
                                </div>
                            </div>
                        </div>


                        <div class="col-12 col-xs-6 col-sm-6 col-md-6 col-lg-3 col-xl g-0">
                            <div class="fourth-box"
                                 style="background-color: #FF6262;  border-radius: 25px; margin-left: 4%;margin-right: 4%; margin-bottom: 4%; margin-top: 4%;">
                                <div class="row">
                                    <div class="col g-0 my-auto">
                                        <div class=" ps-4 ">
                                                <span class="fs-2 fw-bold text-white">
                                                    {{round($percnt,2)}}%
                                                </span>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="text-end">
                                            <svg style="cursor: pointer;"
                                                 xmlns="http://www.w3.org/2000/svg"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink"
                                                 viewBox="0 0 92.259 71.213">
                                                <defs>
                                                    <clipPath id="clip-path">
                                                        <rect id="Rectangle_5" data-name="Rectangle 5"
                                                              width="92.259" height="71.213" fill="#FD2F2F"/>
                                                    </clipPath>
                                                </defs>
                                                <g id="Group_620" data-name="Group 620"
                                                   transform="translate(-558.382 -263.428)">
                                                    <g id="Group_18" data-name="Group 18"
                                                       transform="translate(558.382 263.428)"
                                                       style="isolation: isolate">
                                                        <g id="Group_9" data-name="Group 9">
                                                            <g id="Group_8" data-name="Group 8"
                                                               clip-path="url(#clip-path)">
                                                                <path id="Path_275" data-name="Path 275"
                                                                      d="M194.84,17.664v48.96c-76.146,18.951-86.384-26.255-86.428-36.46C108.283,0,102.581,0,102.581,0h74.595A17.665,17.665,0,0,1,194.84,17.664"
                                                                      transform="translate(-102.581)"
                                                                      fill="#FD2F2F"/>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <ellipse id="Ellipse_8" data-name="Ellipse 8" cx="2.42"
                                                             cy="2.42" rx="2.42" ry="2.42"
                                                             transform="translate(617.762 283.64)" fill="#fff"/>
                                                    <ellipse id="Ellipse_9" data-name="Ellipse 9" cx="2.42"
                                                             cy="2.42" rx="2.42" ry="2.42"
                                                             transform="translate(617.762 292.384)" fill="#fff"/>
                                                </g>
                                            </svg>

                                        </div>
                                    </div>
                                </div>
                                <div class="py-3  ps-3">
                                        <span class="text-white fw-bolder">
                                            Abschlussquote
                                        </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="section-after-boxes">
                    <div class="row">
                        <div class="d-grid col-12 col-md-12 col-lg-7 col-xl-7 ">
                            <div class="calendar-div">
                                <calendar></calendar>
                            </div>
                            <div class="text-center my-4">
                                <a href="{{route('insertappointment')}}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="37.694" height="37.694"
                                         viewBox="0 0 37.694 37.694">
                                        <g id="Group_621" data-name="Group 621"
                                           transform="translate(-663.236 -976.679)">
                                            <g id="Group_550" data-name="Group 550"
                                               transform="translate(663.236 976.679)">
                                                <rect id="Rectangle_9" data-name="Rectangle 9"
                                                      width="37.694" height="37.694" rx="18.847"
                                                      fill="#4ec590"/>
                                                <g id="Group_42" data-name="Group 42"
                                                   transform="translate(12.724 12.724)">
                                                    <line id="Line_11" data-name="Line 11" y2="11.972"
                                                          transform="translate(5.986 0)" fill="none"
                                                          stroke="#fff" stroke-linecap="round"
                                                          stroke-width="2"/>
                                                    <line id="Line_12" data-name="Line 12" x1="11.972"
                                                          transform="translate(0 5.634)" fill="none"
                                                          stroke="#fff" stroke-linecap="round"
                                                          stroke-width="2"/>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                </a>
                            </div>
                        </div>

                        <div class="col-12 col-md-12 col-lg-5 col-xl-5">
                            <div class="my-1">
                                <div class="row">
                                    <div class="col">
                                        <div class="">
                                                <span class="fw-bold fs-5">
                                                    Weiteres
                                                </span>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="text-end">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="3.386" height="13.385"
                                                 viewBox="0 0 3.386 13.385">
                                                <g id="Group_622" data-name="Group 622"
                                                   transform="translate(-1471.199 -550.635)">
                                                    <circle id="Ellipse_12" data-name="Ellipse 12" cx="1.693"
                                                            cy="1.693" r="1.693" transform="translate(1471.199 555.635)"
                                                            fill="#535353"/>
                                                    <circle id="Ellipse_13" data-name="Ellipse 13" cx="1.693"
                                                            cy="1.693" r="1.693" transform="translate(1471.199 560.634)"
                                                            fill="#535353"/>
                                                    <path id="Ellipse_35" data-name="Ellipse 35"
                                                          d="M1.693,0a1.687,1.687,0,1,1-.659.133A1.687,1.687,0,0,1,1.693,0Z"
                                                          transform="translate(1471.199 550.635)" fill="#535353"/>
                                                </g>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="my-3">
                                <div class="row">
                                    <div class="col-6 col-sm-4 col-md-3 col-lg-6 col-xl-4 g-0">
                                        <div class="text-center"
                                             style="background-color: #8A8BF9; border-radius: 18px;  margin-left: 4%;margin-right: 4%; margin-bottom: 4%; margin-top: 4%;">
                                            <div class="pt-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33"
                                                     fill="#fff" class="bi bi-people-fill" viewBox="0 0 16 16">
                                                    <path
                                                        d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                                    <path fill-rule="evenodd"
                                                          d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
                                                    <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                                                </svg>
                                            </div>
                                            <div class="py-2">
                                                    <span class="fw-bold fs-5 text-white">
                                                        {{$leadscount}}
                                                    </span>
                                                <br>
                                                <span class="fw-bold fs-5 text-white">
                                                        New Leads
                                                    </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-sm-4 col-md-3 col-lg-6 col-xl-4 g-0">
                                        <div class="text-center"
                                             style="background-color: #F88DC4; border-radius: 18px; margin-left: 4%;margin-right: 4%; margin-bottom: 4%; margin-top: 4%;">
                                            <div class="pt-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33"
                                                     fill="#fff" class="bi bi-bell-fill" viewBox="0 0 16 16">
                                                    <path
                                                        d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z"/>
                                                </svg>
                                            </div>
                                            <div class="py-2">
                                                    <span class="fw-bold fs-5 text-white">

                                                    </span>
                                                <br>
                                                <span class="fw-bold fs-5 text-white">
                                                        Open Tasks
                                                    </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-sm-4 col-md-3 col-lg-6 col-xl-4 g-0">
                                        <div class="text-center"
                                             style="background-color: #4EC590; border-radius: 18px; margin-left: 4%;margin-right: 4%; margin-bottom: 4%; margin-top: 4%;">
                                            <div class="pt-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33"
                                                     fill="#fff" class="bi bi-exclamation-octagon-fill"
                                                     viewBox="0 0 16 16">
                                                    <path
                                                        d="M11.46.146A.5.5 0 0 0 11.107 0H4.893a.5.5 0 0 0-.353.146L.146 4.54A.5.5 0 0 0 0 4.893v6.214a.5.5 0 0 0 .146.353l4.394 4.394a.5.5 0 0 0 .353.146h6.214a.5.5 0 0 0 .353-.146l4.394-4.394a.5.5 0 0 0 .146-.353V4.893a.5.5 0 0 0-.146-.353L11.46.146zM8 4c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995A.905.905 0 0 1 8 4zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                                </svg>
                                            </div>
                                            <div class="py-2">
                                                    <span class="fw-bold fs-5 text-white">
                                                        {{$pendingcnt}}
                                                    </span>
                                                <br>
                                                <span class="fw-bold fs-5 text-white">
                                                        Pendencies
                                                    </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-sm-4 col-md-3 col-lg-6 col-xl-4 g-0">
                                        <div class="text-center"
                                             style="background-color: #4e5ec5; border-radius: 18px; margin-left: 4%;margin-right: 4%; margin-bottom: 4%; margin-top: 4%;">
                                            <div class="pt-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33"
                                                     fill="#fff" class="bi bi-exclamation-octagon-fill"
                                                     viewBox="0 0 16 16">
                                                    <path
                                                        d="M11.46.146A.5.5 0 0 0 11.107 0H4.893a.5.5 0 0 0-.353.146L.146 4.54A.5.5 0 0 0 0 4.893v6.214a.5.5 0 0 0 .146.353l4.394 4.394a.5.5 0 0 0 .353.146h6.214a.5.5 0 0 0 .353-.146l4.394-4.394a.5.5 0 0 0 .146-.353V4.893a.5.5 0 0 0-.146-.353L11.46.146zM8 4c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995A.905.905 0 0 1 8 4zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                                </svg>
                                            </div>
                                            <div class="py-2">
                                                    <span class="fw-bold fs-5 text-white">
                                                        {{$todayAppointCount}}
                                                    </span>
                                                <br>
                                                <span class="fw-bold fs-5 text-white">
                                                        Today App
                                                    </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-sm-4 col-md-3 col-lg-6 col-xl-4 g-0">
                                        <div class="text-center"
                                             style="background-color: #c7cb81; border-radius: 18px; margin-left: 4%;margin-right: 4%; margin-bottom: 4%; margin-top: 4%;">
                                            <div class="pt-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33"
                                                     fill="#fff" class="bi bi-exclamation-octagon-fill"
                                                     viewBox="0 0 16 16">
                                                    <path
                                                        d="M11.46.146A.5.5 0 0 0 11.107 0H4.893a.5.5 0 0 0-.353.146L.146 4.54A.5.5 0 0 0 0 4.893v6.214a.5.5 0 0 0 .146.353l4.394 4.394a.5.5 0 0 0 .353.146h6.214a.5.5 0 0 0 .353-.146l4.394-4.394a.5.5 0 0 0 .146-.353V4.893a.5.5 0 0 0-.146-.353L11.46.146zM8 4c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995A.905.905 0 0 1 8 4zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                                </svg>
                                            </div>
                                            <div class="py-2">
                                                    <span class="fw-bold fs-5 text-white">
                                                        0
                                                    </span>
                                                <br>
                                                <span class="fw-bold fs-5 text-white">
                                                        HR Comm
                                                    </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-6 col-sm-4 col-md-3 col-lg-6 col-xl-4 g-0 ">
                                        <div class="text-center box-1 "
                                             style="margin-left: 4%;margin-right: 4%; margin-bottom: 4%; margin-top: 4%;">
                                            <div class="py-4 ">
                                                <div class="py-2">
                                                    <svg id="Group_549" data-name="Group 549"
                                                         xmlns="http://www.w3.org/2000/svg" width="29.713"
                                                         height="29.713" viewBox="0 0 29.713 29.713">
                                                        <rect id="Rectangle_9" data-name="Rectangle 9"
                                                              width="29.713" height="29.713" rx="14.857"
                                                              transform="translate(0)" fill="#4ec590"/>
                                                        <g id="Group_42" data-name="Group 42"
                                                           transform="translate(10.03 10.03)">
                                                            <line id="Line_11" data-name="Line 11" y2="9.437"
                                                                  transform="translate(4.719 0)" fill="none"
                                                                  stroke="#fff" stroke-linecap="round"
                                                                  stroke-width="2"/>
                                                            <line id="Line_12" data-name="Line 12" x1="9.437"
                                                                  transform="translate(0 4.441)" fill="none"
                                                                  stroke="#fff" stroke-linecap="round"
                                                                  stroke-width="2"/>
                                                        </g>
                                                    </svg>

                                                </div>
                                                <div class="py-1">
                                                        <span class="text-muted">
                                                            Add New One
                                                        </span>
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
        </section>
    @endif
    @if(Auth::guard('admins')->user()->hasRole('backoffice') || Auth::guard('admins')->user()->hasRole('admin'))
        <div class="row" id="app">
            <div class="col-12 col-md-12">
                <todo></todo>
            </div>


            <div class="col-6 col-sm-12 col-md-12 col-lg-6 g-0">
                <div class="accordion accordion-flush mx-3 " id="accordionFlush2">
                    <div class="accordion-item my-1 py-2" style="background-color: #4EC590;">
                        <div class="p-3">
                                <span class="col text-white fw-bold fs-5">
                                Answered Pendencies
                                 </span>
                            <hr class="text-white">
                        </div>
                        <div id="flush-collapse3" class="accordion-collapse collapse show"
                             aria-labelledby="flush-heading3" data-bs-parent="#accordionFlush3">
                            <div class="accordion-body p-0 mx-2 py-2 overflow-div2"
                                 style="background-color: #4EC590; border-bottom-left-radius: 15px; border-bottom-right-radius: 15px; height: 170px; overflow-y: scroll !important; overflow-x: hidden !important;">
                                @if(!empty($pendencies))
                                    @foreach($pendencies as $pendency)
                                        @php
                                            $crypt = $pendency->family_id * 1244;
                                            $familyId = \Illuminate\Support\Facades\Crypt::encrypt($crypt);
                                        @endphp
                                        <a style="text-decoration: none"
                                           href="{{route('leadfamilyperson',$familyId)}}">
                                            <div class="py-2 my-2 mx-2"
                                                 style="background-color: #fff; border-radius: 15px; color: #000;">

                                                <div class="mx-3 ">
                                                    <div class="row">
                                                        <div class="col">
                                                        <span class="fw-bold fs-5">
                                                          {{$pendency->first_name}} {{$pendency->last_name}}
                                                        </span>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </a>
                                    @endforeach
                                @endif

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-6 col-sm-12 col-md-12 col-lg-6 g-0">
                <div class="accordion accordion-flush mx-3 " id="accordionFlush5">
                    <div class="accordion-item my-1 py-2" style="background-color: #FFEBE5;">
                        <div class="p-3">
                                <span class="col text-black fw-bold fs-5">
                                Open For More Than A Month
                                 </span>
                            <hr class="text-black">
                        </div>
                        <div id="flush-collapse5" class="accordion-collapse collapse show"
                             aria-labelledby="flush-heading5" data-bs-parent="#accordionFlush5">
                            <div class="accordion-body p-0 mx-2 py-2 overflow-div4"
                                 style="background-color: #FFEBE5; border-bottom-left-radius: 15px; border-bottom-right-radius: 15px; height: 170px; overflow-y: scroll !important; overflow-x: hidden !important;">
                                @if(!empty($morethan30))
                                    @foreach($morethan30 as $pendency)
                                        @php
                                            $crypt = $pendency->family_id * 1244;
                                            $familyId = \Illuminate\Support\Facades\Crypt::encrypt($crypt);
                                        @endphp
                                        <a style="text-decoration: none;"
                                           href="{{route('leadfamilyperson',$familyId)}}">
                                            <div class="py-2 my-2 mx-2"
                                                 style="background-color: #fff; border-radius: 15px; color: #000;">
                                                <div class="mx-3 ">
                                                    <div class="row">
                                                        <div class="col">
                                                        <span class="fw-bold fs-5">
                                                            {{$pendency->first_name}} {{$pendency->last_name}}
                                                        </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-12 col-md-12 col-lg-6 g-0">
                <div class="accordion accordion-flush mx-3 " id="accordionFlush5">
                    <div class="accordion-item my-1 py-2" style="background-color: #ececec;">
                        <div class="p-3">
                                <span class="col text-black fw-bold fs-5">
                                Add Persoals Appointment
                                 </span>
                            <hr class="text-black">
                        </div>
                        </h2>
                        <div id="flush-collapse1" class="accordion-collapse collapse show"
                             aria-labelledby="flush-heading1" data-bs-parent="#accordionFlush1">

                            <div class="accordion-body p-0 mx-2 py-2 overflow-div1"
                                 style="background-color: #F7F7F7; border-bottom-left-radius: 15px; border-bottom-right-radius: 15px; height: 170px; overflow-y: scroll !important; overflow-x: hidden !important;">
                                @if(!Auth::guard('admins')->user()->hasRole('backoffice'))
                                @foreach($personalApp as $perApp)
                                    <div class="py-2 my-2 mx-2"
                                         style="background-color: #fff; border-radius: 15px; color: #000;">
                                        <div class="mx-3 ">
                                            <div class="row">
                                                <div class="col">
                                                    <span class="fw-bold fs-5">
                                                        {{$perApp->title}}
                                                    </span>
                                                </div>
                                                <div class="col-1 text-end">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="5"
                                                         height="13"
                                                         viewBox="0 0 5 13">
                                                        <g id="Group_528" data-name="Group 528"
                                                           transform="translate(-0.239 0)">
                                                            <circle id="Ellipse_6" data-name="Ellipse 6"
                                                                    cx="2.5"
                                                                    cy="2.5" r="2.5"
                                                                    transform="translate(0.239 0)"
                                                                    fill="#000"/>
                                                            <circle id="Ellipse_7" data-name="Ellipse 7"
                                                                    cx="2.5"
                                                                    cy="2.5" r="2.5"
                                                                    transform="translate(0.239 8)"
                                                                    fill="#000"/>
                                                        </g>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="">
                                                                <span>
                                                                    Address: {{$perApp->address}}
                                                                </span>
                                            </div>
                                            <div class="">
                                                                <span>
                                                                    Time: {{$perApp->time}}
                                                                </span>
                                            </div>
                                            <div class="">
                                                                <span>
                                                                    Comment: {{$perApp->comment}}
                                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                @endif
                            </div>

                            <div class="text-center py-2">
                                <button type="button" class="btn btn-secondary" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                    +
                                </button>
                            </div>
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                 aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Add Personals
                                                Appointment</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="" action="{{route('addPersonalAppointment')}}" method="post">
                                                @csrf
                                                <input type="hidden" name="apporconId" value="1">
                                                <div class="px-2">
                                                    <label>Title</label>
                                                    <input type="text" name="title" class="form-control" required>
                                                    <label>Time</label>
                                                    <input type="time" name="time" class="form-control" required>
                                                    <label>Address</label>
                                                    <input type="text" name="address" class="form-control" required>
                                                    <label>Comment</label>
                                                    <textarea type="text" name="comment" class="form-control"
                                                              required>
                                                </textarea>
                                                    <label>Assign To</label>

                                                    <select class="form-control mb-2" name="roleid">
                                                        @if(!Auth::guard('admins')->user()->hasRole('backoffice'))
                                                        @foreach($admins as $admin)

                                                            <option value="{{$admin->id}}">{{$admin->name}}</option>
                                                        @endforeach
                                                        @endif
                                                    </select>

                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">
                                                        Close
                                                    </button>
                                                    <input type="submit" class="btn btn-success" value="Save">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @endif
            @if(Auth::guard('admins')->user()->hasRole('salesmanager'))
                <section class="my-5">
                    <div class="row my-2 mx-2">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 g-0">

                        </div>

                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 g-0">
                            <div class="personal-apponitments-div pb-2">
                                <div class="accordion accordion-flush mx-3 " id="accordionFlush1">
                                    <div class="accordion-item my-1 py-2" style="background-color: #F7F7F7;">
                                        <h2 class="accordion-header" id="flush-heading1">
                                            <button class="accordion-button collapsed d-btnn "
                                                    style="background-color: #F7F7F7;"
                                                    type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#flush-collapse1"
                                                    aria-expanded="false" aria-controls="flush-collapse1">
                                                <div class="col text-dark">
                                                    Personal Apponitments
                                                </div>

                                            </button>
                                        </h2>
                                        <div id="flush-collapse1" class="accordion-collapse collapse show"
                                             aria-labelledby="flush-heading1" data-bs-parent="#accordionFlush1">

                                            <div class="accordion-body p-0 mx-2 py-2 overflow-div1"
                                                 style="background-color: #F7F7F7; border-bottom-left-radius: 15px; border-bottom-right-radius: 15px; height: 170px; overflow-y: scroll !important; overflow-x: hidden !important;">
                                                @foreach($personalApp as $perApp)
                                                    <div class="py-2 my-2 mx-2"
                                                         style="background-color: #fff; border-radius: 15px; color: #000;">
                                                        <div class="mx-3 ">
                                                            <div class="row">
                                                                <div class="col">
                                                    <span class="fw-bold fs-5">
                                                        {{$perApp->title}}
                                                    </span>
                                                                </div>
                                                                <div class="col-1 text-end">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="5"
                                                                         height="13"
                                                                         viewBox="0 0 5 13">
                                                                        <g id="Group_528" data-name="Group 528"
                                                                           transform="translate(-0.239 0)">
                                                                            <circle id="Ellipse_6" data-name="Ellipse 6"
                                                                                    cx="2.5"
                                                                                    cy="2.5" r="2.5"
                                                                                    transform="translate(0.239 0)"
                                                                                    fill="#000"/>
                                                                            <circle id="Ellipse_7" data-name="Ellipse 7"
                                                                                    cx="2.5"
                                                                                    cy="2.5" r="2.5"
                                                                                    transform="translate(0.239 8)"
                                                                                    fill="#000"/>
                                                                        </g>
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                            <div class="">
                                                                <span>
                                                                    Address: {{$perApp->address}}
                                                                </span>
                                                            </div>
                                                            <div class="">
                                                                <span>
                                                                    Time: {{$perApp->time}}
                                                                </span>
                                                            </div>
                                                            <div class="">
                                                                <span>
                                                                    Comment: {{$perApp->comment}}
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>

                                            <div class="text-center py-2">
                                                <button type="button" class="btn btn-secondary" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal">
                                                    +
                                                </button>
                                            </div>
                                            <div class="modal fade" id="exampleModal" tabindex="-1"
                                                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Add Personal
                                                                Appointment</h5>
                                                            <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal"
                                                                    aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form class="" action="{{route('addPersonalAppointment')}}"
                                                                  method="post">
                                                                @csrf
                                                                <input type="hidden" name="apporconId" value="1">
                                                                <div class="px-2">
                                                                    <label>Title</label>
                                                                    <input type="text" name="title" class="form-control"
                                                                           required>
                                                                    <label>Time</label>
                                                                    <input type="time" name="time" class="form-control"
                                                                           required>
                                                                    <label>Address</label>
                                                                    <input type="text" name="address"
                                                                           class="form-control"
                                                                           required>
                                                                    <label>Comment</label>
                                                                    <textarea type="text" name="comment"
                                                                              class="form-control"
                                                                              required></textarea>
                                                                </div>

                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                            data-bs-dismiss="modal">Close
                                                                    </button>
                                                                    <input type="submit" class="btn btn-success"
                                                                           value="Save">
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="consultations-div pb-2">
                                    <div class="">
                                        <div class="accordion accordion-flush mx-3 " id="accordionFlush5">
                                            <div class="accordion-item my-1 py-2" style="background-color: #FFEBE5;">
                                                <h2 class="accordion-header" id="flush-heading5">
                                                    <button class="accordion-button collapsed d-btnn "
                                                            style="background-color: #FFEBE5;" type="button"
                                                            data-bs-toggle="collapse"
                                                            data-bs-target="#flush-collapse5" aria-expanded="false"
                                                            aria-controls="flush-collapse5">
                                                        <div class="col text-dark">
                                                            Consultations
                                                        </div>
                                                    </button>
                                                </h2>
                                                <div id="flush-collapse5" class="accordion-collapse collapse show"
                                                     aria-labelledby="flush-heading5" data-bs-parent="#accordionFlush5">
                                                    <div class="accordion-body p-0 mx-2 py-2 overflow-div4"
                                                         style="background-color: #FFEBE5; border-bottom-left-radius: 15px; border-bottom-right-radius: 15px; height: 170px; overflow-y: scroll !important; overflow-x: hidden !important;">
                                                        @foreach($consultation as $consult)
                                                            <div class="py-2 my-2 mx-2"
                                                                 style="background-color: #fff; border-radius: 15px; color: #000;">
                                                                <div class="mx-3 ">
                                                                    <div class="row">
                                                                        <div class="col">
                                                        <span class="fw-bold fs-5">
                                                            {{$consult->title}}
                                                        </span>
                                                                        </div>
                                                                        <div class="col-1 text-end">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                 width="5"
                                                                                 height="13"
                                                                                 viewBox="0 0 5 13">
                                                                                <g id="Group_528" data-name="Group 528"
                                                                                   transform="translate(-0.239 0)">
                                                                                    <circle id="Ellipse_6"
                                                                                            data-name="Ellipse 6"
                                                                                            cx="2.5"
                                                                                            cy="2.5" r="2.5"
                                                                                            transform="translate(0.239 0)"
                                                                                            fill="#000"/>
                                                                                    <circle id="Ellipse_7"
                                                                                            data-name="Ellipse 7"
                                                                                            cx="2.5"
                                                                                            cy="2.5" r="2.5"
                                                                                            transform="translate(0.239 8)"
                                                                                            fill="#000"/>
                                                                                </g>
                                                                            </svg>
                                                                        </div>
                                                                    </div>
                                                                    <div class="">
                                                                <span>
                                                                    Address: {{$consult->address}}
                                                                </span>
                                                                    </div>
                                                                    <div class="">
                                                                <span>
                                                                    Time: {{$consult->time}}
                                                                </span>
                                                                    </div>
                                                                    <div class="">
                                                                <span>
                                                                    Comment: {{$consult->comment}}
                                                                </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                    <div class="text-center py-2">
                                                        <button type="button" class="btn btn-light"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#consultmodal">
                                                            +
                                                        </button>
                                                    </div>
                                                    <div class="modal fade" id="consultmodal" tabindex="-1"
                                                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Add
                                                                        Consultation</h5>
                                                                    <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal"
                                                                            aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form class=""
                                                                          action="{{route('addPersonalAppointment')}}"
                                                                          method="post">
                                                                        @csrf
                                                                        <input type="hidden" name="apporconId"
                                                                               value="2">
                                                                        <div class="px-2">
                                                                            <label>Title</label>
                                                                            <input type="text" name="title"
                                                                                   class="form-control"
                                                                                   required>
                                                                            <label>Time</label>
                                                                            <input type="time" name="time"
                                                                                   class="form-control"
                                                                                   required>
                                                                            <label>Address</label>
                                                                            <input type="text" name="address"
                                                                                   class="form-control" required>
                                                                            <label>Comment</label>
                                                                            <textarea type="text" name="comment"
                                                                                      class="form-control"
                                                                                      required></textarea>
                                                                        </div>

                                                                        <div class="modal-footer">
                                                                            <button type="button"
                                                                                    class="btn btn-secondary"
                                                                                    data-bs-dismiss="modal">Close
                                                                            </button>
                                                                            <input type="submit" class="btn btn-success"
                                                                                   value="Save">
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{--                                                <div class="text-center py-2">--}}
                                                    {{--                                                    <a href="{{route('insertPersonalAppointmant',2)}}"--}}
                                                    {{--                                                       class="btn btn-light">--}}
                                                    {{--                                                        +--}}
                                                    {{--                                                    </a>--}}
                                                    {{--                                                </div>--}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="my-3">
                            <div class="row mx-2">
                                <div class="col-12 col-xs-6 col-sm-4 col-md-3 col-lg g-0">
                                    <div class="text-center"
                                         style="background-color: #8A8BF9; border-radius: 18px;  margin-left: 4%;margin-right: 4%; margin-bottom: 4%; margin-top: 4%;">
                                        <div class="pt-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33"
                                                 fill="#fff" class="bi bi-people-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                                <path fill-rule="evenodd"
                                                      d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
                                                <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                                            </svg>
                                        </div>
                                        <div class="py-2">
                                                                        <span class="fw-bold fs-5 text-white">
                                                                            {{$leadscount}}
                                                                        </span>
                                            <br>
                                            <span class="fw-bold fs-5 text-white">
                                                                            New Leads
                                                                        </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-xs-6 col-sm-4 col-md-3 col-lg g-0">
                                    <div class="text-center"
                                         style="background-color: #F88DC4; border-radius: 18px; margin-left: 4%;margin-right: 4%; margin-bottom: 4%; margin-top: 4%;">
                                        <div class="pt-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33"
                                                 fill="#fff" class="bi bi-bell-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z"/>
                                            </svg>
                                        </div>
                                        <div class="py-2">
                                                                        <span class="fw-bold fs-5 text-white">

                                                                        </span>
                                            <br>
                                            <span class="fw-bold fs-5 text-white">
                                                                            Open Tasks
                                                                        </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-xs-6 col-sm-4 col-md-3 col-lg g-0">
                                    <div class="text-center"
                                         style="background-color: #4EC590; border-radius: 18px; margin-left: 4%;margin-right: 4%; margin-bottom: 4%; margin-top: 4%;">
                                        <div class="pt-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33"
                                                 fill="#fff" class="bi bi-exclamation-octagon-fill"
                                                 viewBox="0 0 16 16">
                                                <path
                                                    d="M11.46.146A.5.5 0 0 0 11.107 0H4.893a.5.5 0 0 0-.353.146L.146 4.54A.5.5 0 0 0 0 4.893v6.214a.5.5 0 0 0 .146.353l4.394 4.394a.5.5 0 0 0 .353.146h6.214a.5.5 0 0 0 .353-.146l4.394-4.394a.5.5 0 0 0 .146-.353V4.893a.5.5 0 0 0-.146-.353L11.46.146zM8 4c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995A.905.905 0 0 1 8 4zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                            </svg>
                                        </div>
                                        <div class="py-2">
                                        <span class="fw-bold fs-5 text-white">
                                           {{$pendingcnt}}
                                                                        </span>
                                            <br>
                                            <span class="fw-bold fs-5 text-white">
                                                                            Pendencies
                                                                        </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-xs-6 col-sm-4 col-md-3 col-lg g-0">
                                    <div class="text-center"
                                         style="background-color: #4e5ec5; border-radius: 18px; margin-left: 4%;margin-right: 4%; margin-bottom: 4%; margin-top: 4%;">
                                        <div class="pt-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33"
                                                 fill="#fff" class="bi bi-exclamation-octagon-fill"
                                                 viewBox="0 0 16 16">
                                                <path
                                                    d="M11.46.146A.5.5 0 0 0 11.107 0H4.893a.5.5 0 0 0-.353.146L.146 4.54A.5.5 0 0 0 0 4.893v6.214a.5.5 0 0 0 .146.353l4.394 4.394a.5.5 0 0 0 .353.146h6.214a.5.5 0 0 0 .353-.146l4.394-4.394a.5.5 0 0 0 .146-.353V4.893a.5.5 0 0 0-.146-.353L11.46.146zM8 4c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995A.905.905 0 0 1 8 4zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                            </svg>
                                        </div>
                                        <div class="py-2">
                                                                        <span class="fw-bold fs-5 text-white">
                                                                            {{$todayAppointCount}}
                                                                        </span>
                                            <br>
                                            <span class="fw-bold fs-5 text-white">
                                                                            Today App
                                                                        </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-xs-6 col-sm-4 col-md-3 col-lg g-0">
                                    <div class="text-center"
                                         style="background-color: #c7cb81; border-radius: 18px; margin-left: 4%;margin-right: 4%; margin-bottom: 4%; margin-top: 4%;">
                                        <div class="pt-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33"
                                                 fill="#fff" class="bi bi-exclamation-octagon-fill"
                                                 viewBox="0 0 16 16">
                                                <path
                                                    d="M11.46.146A.5.5 0 0 0 11.107 0H4.893a.5.5 0 0 0-.353.146L.146 4.54A.5.5 0 0 0 0 4.893v6.214a.5.5 0 0 0 .146.353l4.394 4.394a.5.5 0 0 0 .353.146h6.214a.5.5 0 0 0 .353-.146l4.394-4.394a.5.5 0 0 0 .146-.353V4.893a.5.5 0 0 0-.146-.353L11.46.146zM8 4c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995A.905.905 0 0 1 8 4zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                            </svg>
                                        </div>
                                        <div class="py-2">
                                                                        <span class="fw-bold fs-5 text-white">
                                                                            0
                                                                        </span>
                                            <br>
                                            <span class="fw-bold fs-5 text-white">
                                                                            HR Comm
                                                                        </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-xs-6 col-sm-4 col-md-3 col-lg g-0">
                                    <div class="text-center box-1 "
                                         style="margin-left: 4%;margin-right: 4%; margin-bottom: 4%; margin-top: 4%;">
                                        <div class="py-4 ">
                                            <div class="py-2">
                                                <svg id="Group_549" data-name="Group 549"
                                                     xmlns="http://www.w3.org/2000/svg" width="29.713"
                                                     height="29.713" viewBox="0 0 29.713 29.713">
                                                    <rect id="Rectangle_9" data-name="Rectangle 9"
                                                          width="29.713" height="29.713" rx="14.857"
                                                          transform="translate(0)" fill="#4ec590"/>
                                                    <g id="Group_42" data-name="Group 42"
                                                       transform="translate(10.03 10.03)">
                                                        <line id="Line_11" data-name="Line 11" y2="9.437"
                                                              transform="translate(4.719 0)" fill="none"
                                                              stroke="#fff" stroke-linecap="round"
                                                              stroke-width="2"/>
                                                        <line id="Line_12" data-name="Line 12" x1="9.437"
                                                              transform="translate(0 4.441)" fill="none"
                                                              stroke="#fff" stroke-linecap="round"
                                                              stroke-width="2"/>
                                                    </g>
                                                </svg>

                                            </div>
                                            <div class="py-1">
                                                                            <span class="text-muted">
                                                                                Add New One
                                                                            </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                </section>



            @endif

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
                    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
                    crossorigin="anonymous">
            </script>

    </body>

    </html>
    <script>

    </script>
@endsection
<style>
    .dateee {
        border-radius: 15px;
        border: #4CC590 1px solid;
        color: #000;
        background-color: #fff;
    }

    .dateee:hover {
        background-color: #4CC590;
        border-radius: 15px;
        color: #fff;
    }

    .dateee:focus {
        background-color: #4CC590;
        border-radius: 15px;
        color: #fff;
    }

    .box-1 {
        background-image: url("data:image/svg+xml,%3csvg width='100%25' height='100%25' xmlns='http://www.w3.org/2000/svg'%3e%3crect width='100%25' height='100%25' fill='none' rx='18' ry='18' stroke='black' stroke-width='1' stroke-dasharray='7%2c 11' stroke-dashoffset='63' stroke-linecap='square'/%3e%3c/svg%3e");
        border-radius: 18px;
    }

    body {
        overflow-x: hidden !important;
    }


</style>
<style>
    /* overflow 1 */
    .overflow-div1::-webkit-scrollbar {
        width: 8px;
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

    /* ........................................................... */
    /* overflow 2 */

    .overflow-div2::-webkit-scrollbar {
        width: 8px;
    }

    /* Track */
    .overflow-div2::-webkit-scrollbar-track {
        background: transparent !important;
        border-radius: 10px;
    }

    /* Handle */
    .overflow-div2::-webkit-scrollbar-thumb {
        background: #fff;
        border-radius: 10px;
    }

    /* Handle on hover */
    .overflow-div2::-webkit-scrollbar-thumb:hover {
        background: #fff1ff;
        border-radius: 10px;
    }

    /* ........................................................... */
    /* overflow 3 */

    .overflow-div3::-webkit-scrollbar {
        width: 8px;
    }

    /* Track */
    .overflow-div3::-webkit-scrollbar-track {
        background: transparent !important;
        border-radius: 10px;
    }

    /* Handle */
    .overflow-div3::-webkit-scrollbar-thumb {
        background: #c9cad8;
        border-radius: 10px;
    }

    /* Handle on hover */
    .overflow-div3::-webkit-scrollbar-thumb:hover {
        background: #707070;
    }

    /* ...................................................... */
    /* overflow 4 */

    .overflow-div4::-webkit-scrollbar {
        width: 8px;
    }

    /* Track */
    .overflow-div4::-webkit-scrollbar-track {
        background: transparent !important;
        border-radius: 10px;
    }

    /* Handle */
    .overflow-div4::-webkit-scrollbar-thumb {
        background: #c9cad8;
        border-radius: 10px;
    }

    /* Handle on hover */
    .overflow-div4::-webkit-scrollbar-thumb:hover {
        background: #707070;
    }


    /* ................................................. */

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


    .accordion-button:not(.collapsed) {
        color: #7DBF9A;
        background-color: #fff;
        box-shadow: none;
    }

    .accordion-button:not(.collapsed)::after {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23df4759'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
        /* background-color: transparent !important; */
    }

    .accordion-button:not(.show)::after {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23df4759'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
        /* background-color: transparent !important; */
    }

    .accordion-button.green-acc:not(.collapsed)::after {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23fff'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
        /* background-color: transparent !important; */
    }

    .accordion-button.green-acc:not(.show)::after {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23fff'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
        /* background-color: transparent !important; */
    }

    .accordion-button:focus {
        border-color: transparent !important;
        border: none !important;
        box-shadow: none !important;
    }

    .name-spnnnn {
        font-weight: 600;
    }

    .fw-600 {
        font-weight: 600;
    }

    .spn-muted {
        color: #707070;
        font-weight: 600;
        font-size: 14px !important;
    }

    .spn-normal {
        font-weight: 600;
        font-size: 14px !important;
    }
</style>
