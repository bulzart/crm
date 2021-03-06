@extends('template.navbar')
@section('content')

<head>
    <title>
        Tasks
    </title>
    <link rel="icon" type="image/png" href="img/Favicon.png">
</head>
<style>
    body{
        overflow-x: hidden;
    }
    .overflow-divvv::-webkit-scrollbar {
        width: 1px !important;
    }

    /* Track */
    .overflow-divvv::-webkit-scrollbar-track {
        background: transparent !important;
        border-radius: 10px !important;
    }

    /* Handle */
    .overflow-divvv::-webkit-scrollbar-thumb {
        background: #c9cad8 !important;
        border-radius: 10px !important;
    }

    /* Handle on hover */
    .overflow-divvv::-webkit-scrollbar-thumb:hover {
        background: #707070 !important;
        border-radius: 10px !important;
    }

    .tab-lookalike2 {
        background-color: #FFEAE4 !important;
        color: #434343 !important;
        border-bottom-left-radius: 0px !important;
        border-bottom-right-radius: 0px !important;
        border-top-left-radius: 5px !important;
        border-top-right-radius: 5px !important;
    }

    .tab-lookalike1 {
        background-color: #F7F7F7 !important;
        color: #434343 !important;
        border-bottom-left-radius: 0px !important;
        border-bottom-right-radius: 0px !important;
        border-top-left-radius: 5px !important;
        border-top-right-radius: 5px !important;
    }

    .tab-lookalike {
        background-color: #F7F7F7 !important;
        color: #FF4000 !important;
        border-bottom-left-radius: 0px !important;
        border-bottom-right-radius: 0px !important;
        border-top-left-radius: 5px !important;
        border-top-right-radius: 5px !important;
    }

    .header-open-task1 {
        background-color: #F7F7F7 !important;
        border-bottom-left-radius: 20px !important;
        border-bottom-right-radius: 20px !important;
        border-top-left-radius: 20px !important;
        border-top-right-radius: 0px !important;

    }

    .header-open-task1-pink {
        background-color: #FFEAE4 !important;
        border-bottom-left-radius: 20px !important;
        border-bottom-right-radius: 20px !important;
        border-top-left-radius: 20px !important;
        border-top-right-radius: 0px;

    }

    .header-open-task {
        background-color: #F7F7F7 !important;
    }

    .header-open-task-pink {
        background-color: #FFEAE4 !important;
    }

    .priority-spnn {
        background-color: #ad2b2b !important;
        border-radius: 35px !important;
        color: #fff !important;
    }

    .open-task-box {
        border-radius: 35px !important;
        background-color: #fff;
        border: none !important;
    }

    .pendzen-box {
        border-radius: 35px !important;
        background-color: #EAECF0 !important;
        border: none !important;

    }

    .third-box {
        border-radius: 35px !important;
        background-color: #fff !important;
        border: #707070 1px solid !important;

    }

    .task-box {
        background-color: #F7F7F7 !important;
        border-radius: 12px !important;
    }

    .name-spnnnn {
        font-weight: 600 !important;
    }

    .fw-600 {
        font-weight: 600 !important;
    }

    .spn-muted {
        color: #707070 !important;
        font-weight: 600 !important;
        font-size: 14px !important;
    }

    .spn-normal {
        font-weight: 600;
        font-size: 14px !important;
    }
</style>
@if(Auth::guard('admins')->user()->hasRole('fs') || Auth::guard('admins')->user()->hasRole('admin'))
<div class="row me-5 mt-5 mb-5" class="tasks_8211__">
    <div class="col-12 col-sm-12 col-md-12 col-lg p-0 m-2 ">
        <div class="open-task-box px-4 py-2" style="border: none !important; border-radius: 35px !important;">
            <div class="headerrrr d-flex justify-content-between">
                <h5><b>Offene Aufgaben</b></h5>
                <span class="fw-600 px-5 py-2 tab-lookalike" style="background-color: #F7F7F7; border-top-left-radius: 15px !important; border-top-right-radius: 15px !important;">{{$opencnt}}</span>
            </div>
            <div class="header-open-task1" style="background: #f7f7f7; border-bottom-right-radius: 35px !important; border-bottom-left-radius: 35px !important; border-top-left-radius: 35px !important;">
                <div class="row mx-3 py-3 header-open-task">
                    <div class="col-3 g-0">
                        <div class="">
                            <span class="spn-muted">
                                Datum
                            </span>
                        </div>
                    </div>
                    <div class="col g-0">
                        <div class="">
                            <span class="spn-muted">
                                Beschreibung
                            </span>
                        </div>
                    </div>
                    <div class="col g-0">
                        <div class="">
                            <span class="spn-muted">
                                Kundenname
                            </span>
                        </div>
                    </div>
                    <div class="col-1 g-0">
                        <div class="text-end">
                            <span class="spn-muted">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 28.391 27.587">
                                    <g id="Group_850" data-name="Group 850" transform="translate(1.25)">
                                        <g id="Group_17" data-name="Group 17">
                                            <line id="Line_5" data-name="Line 5" x2="25.891" transform="translate(0 24.217)" fill="none" stroke="#8e8e8e" stroke-linecap="round" stroke-width="2.5" />
                                            <line id="Line_6" data-name="Line 6" x2="25.891" transform="translate(0 13.488)" fill="none" stroke="#8e8e8e" stroke-linecap="round" stroke-width="2.5" />
                                            <line id="Line_7" data-name="Line 7" x2="25.891" transform="translate(0 2.76)" fill="none" stroke="#8e8e8e" stroke-linecap="round" stroke-width="2.5" />
                                            <g id="Ellipse_4" data-name="Ellipse 4" transform="translate(4.926 21.457)" fill="#8e8e8e" stroke="#8e8e8e" stroke-width="1">
                                                <ellipse cx="2.815" cy="3.065" rx="2.815" ry="3.065" stroke="none" />
                                                <ellipse cx="2.815" cy="3.065" rx="2.315" ry="2.565" fill="none" />
                                            </g>
                                            <g id="Ellipse_5" data-name="Ellipse 5" transform="translate(16.186 10.728)" fill="#8e8e8e" stroke="#8e8e8e" stroke-width="1">
                                                <ellipse cx="2.815" cy="3.065" rx="2.815" ry="3.065" stroke="none" />
                                                <ellipse cx="2.815" cy="3.065" rx="2.315" ry="2.565" fill="none" />
                                            </g>
                                            <g id="Ellipse_6" data-name="Ellipse 6" transform="translate(4.926)" fill="#8e8e8e" stroke="#8e8e8e" stroke-width="1">
                                                <ellipse cx="2.815" cy="3.065" rx="2.815" ry="3.065" stroke="none" />
                                                <ellipse cx="2.815" cy="3.065" rx="2.315" ry="2.565" fill="none" />
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </span>
                        </div>
                    </div>
                </div>
                <hr class="text-black " style="color: #fff !important; height: 2px; margin: 0 !important; opacity: 1;">
                <div class="overflow-divvv" style="height: 30vh; overflow: auto; overflow-x: hidden;">
                    @foreach($tasks as $task)
                    @php
                    $leadss = $task->id * 1244;
                    $taskId = \Illuminate\Support\Facades\Crypt::encrypt($leadss);
                    @endphp
                    <div onclick="window.location.href='{{route('leadfamilyperson',$taskId)}}'" class="row my-1 mx-3 header-open-task" style="cursor: pointer;">
                        <div class="col-3 g-0">
                            <div class="">
                                <span class="spn-normal">
                                    25.01.2021
                                    <!-- Appointment Date duhet mu shfaq -->
                                </span>
                            </div>
                        </div>
                        <div class="col g-0">
                            <div class="">
                                <span class="spn-normal">
                                    {{ucfirst($task->first_name)}}
                                </span>
                            </div>
                        </div>
                        <div class="col g-0">
                            <div class="">
                                <span class="spn-normal">
                                    {{ucfirst($task->last_name)}}
                                </span>
                            </div>
                        </div>
                        <div class="col-1 g-0">
                            <div class="text-end">
                                <span class="spn-muted">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="7" height="21" viewBox="0 0 7 31">
                                        <g id="Group_851" data-name="Group 851" transform="translate(0.082)">
                                            <circle id="Ellipse_57" data-name="Ellipse 57" cx="3.5" cy="3.5" r="3.5" transform="translate(-0.082)" fill="#ccc" />
                                            <circle id="Ellipse_58" data-name="Ellipse 58" cx="3.5" cy="3.5" r="3.5" transform="translate(-0.082 12)" fill="#ccc" />
                                            <circle id="Ellipse_59" data-name="Ellipse 59" cx="3.5" cy="3.5" r="3.5" transform="translate(-0.082 24)" fill="#ccc" />
                                        </g>
                                    </svg>
                                </span>
                            </div>
                        </div>

                    </div>
                    <hr class="text-black" style="color: #fff !important; height: 2px; margin: 0 !important; opacity: 1;">
                    @endforeach
                </div>
                @if($tasks->count() > 1)
                <div class="text-end py-3">
                    @if($tasks->currentPage() > 1)
                    <span class="px-2" onclick="window.location.href='{{route('tasks',['page' => $tasks->currentPage() -1 ])}}'">
                        <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34">
                            <g id="Group_757" data-name="Group 757" transform="translate(0.082)">
                                <path id="Path_281" data-name="Path 281" d="M0,0,9.679,7.316,0,14.631" transform="translate(20.741 24.316) rotate(180)" fill="none" stroke="#ccc" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                <g id="Ellipse_55" data-name="Ellipse 55" transform="translate(-0.082)" fill="none" stroke="#ccc" stroke-width="2">
                                    <circle cx="17" cy="17" r="17" stroke="none" />
                                    <circle cx="17" cy="17" r="16" fill="none" />
                                </g>
                            </g>
                        </svg>
                    </span>
                    @endif
                    <span class="px-2" onclick="window.location.href='{{route('tasks',['page' => $tasks->currentPage() +1])}}'">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="34" height="34" viewBox="0 0 34 34">
                            <defs>

                            </defs>
                            <g id="Group_758" data-name="Group 758" transform="translate(34.082 34) rotate(180)">
                                <g transform="matrix(-1, 0, 0, -1, 34.08, 34)">
                                    <path id="Path_281-2" data-name="Path 281" d="M0,0,9.679,7.316,0,14.631" transform="translate(13.13 9.68)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                </g>
                                <g id="Ellipse_55" data-name="Ellipse 55" transform="translate(0.082)" fill="none" stroke="#000" stroke-width="2">
                                    <circle cx="17" cy="17" r="17" stroke="none" />
                                    <circle cx="17" cy="17" r="16" fill="none" />
                                </g>
                            </g>
                        </svg>
                    </span>
                </div>
                @endif
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-12 col-md-12 col-lg p-0 m-2 ">
        <div class="open-task-box px-4 py-2" style="border: none !important; border-radius: 35px !important;">
            <div class="headerrrr d-flex justify-content-between">
                <h5><b>Geburstage / Jubil??en</b></h5>
                <span class="fw-600 px-5 py-2 tab-lookalike1" style="background-color: #F7F7F7; border-top-left-radius: 15px !important; border-top-right-radius: 15px !important;"></span>
            </div>
            <div class=" header-open-task1" style="background: #f7f7f7; border-bottom-right-radius: 35px !important; border-bottom-left-radius: 35px !important; border-top-left-radius: 35px !important;">
                <div class="row mx-3 py-3 header-open-task">
                    <div class="col-3 g-0">
                        <div class="">
                            <span class="spn-muted">
                                Datum
                            </span>
                        </div>
                    </div>
                    <div class="col g-0">
                        <div class="">
                            <span class="spn-muted">
                                Beschreibung
                            </span>
                        </div>
                    </div>
                    <div class="col g-0">
                        <div class="">
                            <span class="spn-muted">
                                Kundenname
                            </span>
                        </div>
                    </div>
                    <div class="col-1 g-0">
                        <div class="text-end">
                            <span class="spn-muted">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 28.391 27.587">
                                    <g id="Group_850" data-name="Group 850" transform="translate(1.25)">
                                        <g id="Group_17" data-name="Group 17">
                                            <line id="Line_5" data-name="Line 5" x2="25.891" transform="translate(0 24.217)" fill="none" stroke="#8e8e8e" stroke-linecap="round" stroke-width="2.5" />
                                            <line id="Line_6" data-name="Line 6" x2="25.891" transform="translate(0 13.488)" fill="none" stroke="#8e8e8e" stroke-linecap="round" stroke-width="2.5" />
                                            <line id="Line_7" data-name="Line 7" x2="25.891" transform="translate(0 2.76)" fill="none" stroke="#8e8e8e" stroke-linecap="round" stroke-width="2.5" />
                                            <g id="Ellipse_4" data-name="Ellipse 4" transform="translate(4.926 21.457)" fill="#8e8e8e" stroke="#8e8e8e" stroke-width="1">
                                                <ellipse cx="2.815" cy="3.065" rx="2.815" ry="3.065" stroke="none" />
                                                <ellipse cx="2.815" cy="3.065" rx="2.315" ry="2.565" fill="none" />
                                            </g>
                                            <g id="Ellipse_5" data-name="Ellipse 5" transform="translate(16.186 10.728)" fill="#8e8e8e" stroke="#8e8e8e" stroke-width="1">
                                                <ellipse cx="2.815" cy="3.065" rx="2.815" ry="3.065" stroke="none" />
                                                <ellipse cx="2.815" cy="3.065" rx="2.315" ry="2.565" fill="none" />
                                            </g>
                                            <g id="Ellipse_6" data-name="Ellipse 6" transform="translate(4.926)" fill="#8e8e8e" stroke="#8e8e8e" stroke-width="1">
                                                <ellipse cx="2.815" cy="3.065" rx="2.815" ry="3.065" stroke="none" />
                                                <ellipse cx="2.815" cy="3.065" rx="2.315" ry="2.565" fill="none" />
                                            </g>
                                        </g>
                                    </g>
                                </svg>

                            </span>
                        </div>
                    </div>
                </div>
                <hr class="text-black" style="color: #fff !important; height: 2px; margin: 0 !important; opacity: 1;">
                <div style="height: 30vh; overflow: auto; overflow-x: hidden;">
                    @foreach($birthdays as $birth)
                    <div onclick="window.location.href='{{route('leadfamilyperson',$taskId)}}'" class="row my-1 mx-3 header-open-task" style="cursor: pointer;">
                        <div class="col-3 g-0">
                            <div class="">
                                <span class="spn-normal">
                                    {{$birth['birthday']}}

                                </span>
                            </div>
                        </div>
                        <div class="col g-0">
                            <div class="">
                                <span class="spn-normal">
                                    {{$birth['name']}}
                                </span>
                            </div>
                        </div>
                        <div class="col g-0">
                            <div class="">
                                <span class="spn-normal">
                                    {{$birth['lname']}}
                                </span>
                            </div>
                        </div>
                        <div class="col-1 g-0">
                            <div class="text-end">
                                <span class="spn-muted">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="7" height="21" viewBox="0 0 7 31">
                                        <g id="Group_851" data-name="Group 851" transform="translate(0.082)">
                                            <circle id="Ellipse_57" data-name="Ellipse 57" cx="3.5" cy="3.5" r="3.5" transform="translate(-0.082)" fill="#ccc" />
                                            <circle id="Ellipse_58" data-name="Ellipse 58" cx="3.5" cy="3.5" r="3.5" transform="translate(-0.082 12)" fill="#ccc" />
                                            <circle id="Ellipse_59" data-name="Ellipse 59" cx="3.5" cy="3.5" r="3.5" transform="translate(-0.082 24)" fill="#ccc" />
                                        </g>
                                    </svg>
                                </span>
                            </div>
                        </div>

                    </div>
                    <hr class="text-black" style="color: #fff !important; height: 2px; margin: 0 !important; opacity: 1;">
                    @endforeach
                </div>
                <div class="text-end py-3">
                    <span class="px-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34">
                            <g id="Group_757" data-name="Group 757" transform="translate(0.082)">
                                <path id="Path_281" data-name="Path 281" d="M0,0,9.679,7.316,0,14.631" transform="translate(20.741 24.316) rotate(180)" fill="none" stroke="#ccc" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                <g id="Ellipse_55" data-name="Ellipse 55" transform="translate(-0.082)" fill="none" stroke="#ccc" stroke-width="2">
                                    <circle cx="17" cy="17" r="17" stroke="none" />
                                    <circle cx="17" cy="17" r="16" fill="none" />
                                </g>
                            </g>
                        </svg>

                    </span>
                    <span class="px-2">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="34" height="34" viewBox="0 0 34 34">
                            <defs>

                            </defs>
                            <g id="Group_758" data-name="Group 758" transform="translate(34.082 34) rotate(180)">
                                <g transform="matrix(-1, 0, 0, -1, 34.08, 34)">
                                    <path id="Path_281-2" data-name="Path 281" d="M0,0,9.679,7.316,0,14.631" transform="translate(13.13 9.68)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                </g>
                                <g id="Ellipse_55" data-name="Ellipse 55" transform="translate(0.082)" fill="none" stroke="#000" stroke-width="2">
                                    <circle cx="17" cy="17" r="17" stroke="none" />
                                    <circle cx="17" cy="17" r="16" fill="none" />
                                </g>
                            </g>
                        </svg>


                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 my-2">
        <div class="open-task-box px-4 py-2" style="border: none !important; border-radius: 35px !important;">
            <div class="headerrrr d-flex justify-content-between">
                <span class="fw-600">
                    <h5><b>Pendenzen / Zur Nachbearbeitung!</b></h5>
                </span>
                <span class="fw-600 px-4 py-2 tab-lookalike2" style="background-color: #ffebe5;  border-top-left-radius: 15px !important; border-top-right-radius: 15px !important;">{{count($pending)}}</span>
            </div>
            <div class="header-open-task1-pink" style="background: #ffebe5; border-bottom-right-radius: 35px !important; border-bottom-left-radius: 35px !important; border-top-left-radius: 35px !important;">
                <div class="row mx-3 py-3 header-open-task-pink">
                    <div class="col g-0">
                        <div class="">
                            <span class="spn-muted">
                                Datum
                            </span>
                        </div>
                    </div>
                    <div class="col g-0">
                        <div class="">
                            <span class="spn-muted">
                                Beschreibung
                            </span>
                        </div>
                    </div>
                    <div class="col g-0">
                        <div class="">
                            <span class="spn-muted">
                                Kundenname
                            </span>
                        </div>
                    </div>
                    <div class="col g-0">
                        <div class="">
                            <span class="spn-muted">
                                Kontaktperson
                            </span>
                        </div>
                    </div>
                    <div class="col g-0">
                        <div class="">
                            <span class="spn-muted">
                                Priority
                            </span>
                        </div>
                    </div>
                    <div class="col-1 g-0">
                        <div class="text-end">
                            <span class="spn-muted">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 28.391 27.587">
                                    <g id="Group_850" data-name="Group 850" transform="translate(1.25)">
                                        <g id="Group_17" data-name="Group 17">
                                            <line id="Line_5" data-name="Line 5" x2="25.891" transform="translate(0 24.217)" fill="none" stroke="#8e8e8e" stroke-linecap="round" stroke-width="2.5" />
                                            <line id="Line_6" data-name="Line 6" x2="25.891" transform="translate(0 13.488)" fill="none" stroke="#8e8e8e" stroke-linecap="round" stroke-width="2.5" />
                                            <line id="Line_7" data-name="Line 7" x2="25.891" transform="translate(0 2.76)" fill="none" stroke="#8e8e8e" stroke-linecap="round" stroke-width="2.5" />
                                            <g id="Ellipse_4" data-name="Ellipse 4" transform="translate(4.926 21.457)" fill="#8e8e8e" stroke="#8e8e8e" stroke-width="1">
                                                <ellipse cx="2.815" cy="3.065" rx="2.815" ry="3.065" stroke="none" />
                                                <ellipse cx="2.815" cy="3.065" rx="2.315" ry="2.565" fill="none" />
                                            </g>
                                            <g id="Ellipse_5" data-name="Ellipse 5" transform="translate(16.186 10.728)" fill="#8e8e8e" stroke="#8e8e8e" stroke-width="1">
                                                <ellipse cx="2.815" cy="3.065" rx="2.815" ry="3.065" stroke="none" />
                                                <ellipse cx="2.815" cy="3.065" rx="2.315" ry="2.565" fill="none" />
                                            </g>
                                            <g id="Ellipse_6" data-name="Ellipse 6" transform="translate(4.926)" fill="#8e8e8e" stroke="#8e8e8e" stroke-width="1">
                                                <ellipse cx="2.815" cy="3.065" rx="2.815" ry="3.065" stroke="none" />
                                                <ellipse cx="2.815" cy="3.065" rx="2.315" ry="2.565" fill="none" />
                                            </g>
                                        </g>
                                    </g>
                                </svg>

                            </span>
                        </div>
                    </div>
                </div>
                <hr class="text-black" style="color: #fff !important; height: 2px; margin: 0 !important; opacity: 1;">
                <div class="overflow-divvv" style="height: 10vh; overflow: auto;">
                    @foreach($pending as $task)
                    @php
                    $leadss = $task->id * 1244;
                    $taskId = \Illuminate\Support\Facades\Crypt::encrypt($leadss);
                    @endphp
                    <div class="row my-1 mx-3 header-open-task-pink" onclick="window.location.href='{{route('leadfamilyperson',$taskId)}}'">
                        <div class="col g-0">
                            <div class="">
                                <span class="spn-normal">
                                    21.09.2022
                                </span>
                            </div>
                        </div>
                        <div class="col g-0">
                            <div class="">
                                <span class="spn-normal">
                                    {{ucfirst($task->first_name)}}
                                </span>
                            </div>
                        </div>
                        <div class="col g-0">
                            <div class="">
                                <span class="spn-normal">
                                    {{ucfirst($task->last_name)}}
                                </span>
                            </div>
                        </div>
                        <div class="col g-0">
                            <div class="">
                                <span class="spn-normal">
                                    {{$task->description}}
                                </span>
                            </div>
                        </div>
                        <div class="col g-0">
                            <div class="">
                                <span class="spn-normal">
                                    Max Mustermann
                                </span>
                            </div>
                        </div>
                        <div class="col-1 g-0">
                            <div class="text-end">
                                <span class="spn-muted">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="7" height="21" viewBox="0 0 7 31">
                                        <g id="Group_851" data-name="Group 851" transform="translate(0.082)">
                                            <circle id="Ellipse_57" data-name="Ellipse 57" cx="3.5" cy="3.5" r="3.5" transform="translate(-0.082)" fill="#ccc" />
                                            <circle id="Ellipse_58" data-name="Ellipse 58" cx="3.5" cy="3.5" r="3.5" transform="translate(-0.082 12)" fill="#ccc" />
                                            <circle id="Ellipse_59" data-name="Ellipse 59" cx="3.5" cy="3.5" r="3.5" transform="translate(-0.082 24)" fill="#ccc" />
                                        </g>
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>
                    <hr class="text-black" style="color: #fff !important; height: 2px; margin: 0 !important; opacity: 1;">
                    @endforeach
                </div>
                <div class="text-end py-3">
                    <span class="px-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34">
                            <g id="Group_757" data-name="Group 757" transform="translate(0.082)">
                                <path id="Path_281" data-name="Path 281" d="M0,0,9.679,7.316,0,14.631" transform="translate(20.741 24.316) rotate(180)" fill="none" stroke="#ccc" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                <g id="Ellipse_55" data-name="Ellipse 55" transform="translate(-0.082)" fill="none" stroke="#ccc" stroke-width="2">
                                    <circle cx="17" cy="17" r="17" stroke="none" />
                                    <circle cx="17" cy="17" r="16" fill="none" />
                                </g>
                            </g>
                        </svg>

                    </span>
                    <span class="px-2">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="34" height="34" viewBox="0 0 34 34">
                            <defs>

                            </defs>
                            <g id="Group_758" data-name="Group 758" transform="translate(34.082 34) rotate(180)">
                                <g transform="matrix(-1, 0, 0, -1, 34.08, 34)">
                                    <path id="Path_281-2" data-name="Path 281" d="M0,0,9.679,7.316,0,14.631" transform="translate(13.13 9.68)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                </g>
                                <g id="Ellipse_55" data-name="Ellipse 55" transform="translate(0.082)" fill="none" stroke="#000" stroke-width="2">
                                    <circle cx="17" cy="17" r="17" stroke="none" />
                                    <circle cx="17" cy="17" r="16" fill="none" />
                                </g>
                            </g>
                        </svg>


                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@if(Auth::guard('admins')->user()->hasRole('backoffice') || Auth::guard('admins')->user()->hasRole('admin'))
<div class="row me-5 px-4 justify-content-center">
    <div class="col-md-6 col-12 mb-3">
        <div style="background: #F7F7F7; border-radius: 25px; padding: 5%;">
            <div class="row">
                <div class="col-12" style="cursor: pointer;">
                    <span style="color: #000; font-size: larger;"><b>Answered Tasks</b><span style="color: #4EC590; padding-left: 10px;"><b>{{count($answered)}}</b></span></span>
                    <br><br>
                    <form action="{{route('tasks')}}" style="width: 100%;" method="post">
                        @csrf
                        <div class="input-group mb-3" style="border-radius: 8px !important;">
                            <input type="text" name="searchpend" style=" font-weight: 500; border: transparent !important;" placeholder="Search by name" class="form-control">
                            <input type="submit" class="btn" style="background-color: #4EC590; color: #fff; font-weight: 600; padding-left: 8%; padding-right: 8%;" value="Search">
                        </div>
                        <!-- <input type="text" name="searchpend" class="form-control" placeholder="Search by name">
                        <input type="submit" class="btn btn-danger" value="Search"> -->
                    </form>

                </div>

            </div>
            <br>
            <script>
                var intvaluecount = 1;
                var truefalsee = [];

                var intvaluecount2 = 1;
                var truefalsee2 = [];
            </script>
            <div id="collapse__">
                <div class="collapse2___ pe-3" style="height: 350px; overflow: scroll; overflow-x: hidden;">
                    @foreach($answered as $task)
                    @php
                    $leadss = $task->family_id * 1244;
                    $taskId = \Illuminate\Support\Facades\Crypt::encrypt($leadss);
                    @endphp
                    <div style="background: #4EC590; color: #fff; border-radius: 8px; cursor: pointer;">
                        <a data-bs-toggle="collapse" id="demo23{{$taskId}}" style="text-decoration:none;">
                            <div class="px-3 py-2">
                                <h5 class="m-1"><b>{{ucfirst($task->first_name)}} {{ucfirst($task->last_name)}} </b><span style="float: right;"><span><span class="px-2" style="font-size: 19px;"><i class="bi bi-chat justify-content-end"></i></span></span><span id="demo23span{{$taskId}}" class="bi bi-chevron-down"></span></span></h5>
                            </div>
                        </a>

                        <div id="demo{{$taskId}}" class="collapse px-3 py-2">
                            <h6 class="m-1"><b>Client:</b> {{ucfirst($task->first_name)}}</h6>
                            <h6 class="m-1"><b>Title:</b> {{$task->description}}</h6>
                            <h6 class="m-1"><b>Date & Time:</b> 03.02.2022 13:00 (data)</h6>
                            <h6 class="m-1"><b>Description:</b> <span> {{$task->description }}</span></h6>
                            <button class="btn m-1" onclick="window.location.href='{{route('leadfamilyperson',$taskId)}}'" style="background-color: #fff; color: #4EC590; font-weight: 600; padding-left: 8%; padding-right: 8%;">Open</button>
                        </div>
                        <script>
                            truefalsee["sss" + intvaluecount] = false;
                            $(document).ready(function(){
                                $("#demo23{{$taskId}}").click(function(){

                                    $("#demo{{$taskId}}").collapse('toggle');
                                    if(truefalsee["sss" + intvaluecount] === false){
                                        $("#demo23span{{$taskId}}").addClass("bi bi-chevron-down bi-chevron-up");
                                        truefalsee["sss" + intvaluecount] = true;
                                    }else{
                                        $("#demo23span{{$taskId}}").removeClass("bi bi-chevron-up");
                                        truefalsee["sss" + intvaluecount] = false;
                                    }
                                });
                            });
                            intvaluecount++;
                        </script>
                    </div>
                    <br>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-12 mb-3">
        <div style="background: #f8f8f8;border-radius: 25px; padding: 5%;">
            <div class="row">
                <span style="color: #000; font-size: larger;"><b>Open Tasks</b><span style="color: #EF696A; padding-left: 10px;"><b>{{count($opened)}}</b></span></span>
                <br><br>
                <div class="col-12" style="cursor: pointer;" id="Offene_Aufgaben__1">
                    <form action="{{route('tasks')}}" style="width: 100%;" method="post">
                        @csrf
                        <div class="input-group mb-3" style="border-radius: 8px !important;">
                            <input type="text" name="searchopen" placeholder="Search by name" style=" font-weight: 500; border: transparent !important;" class="form-control">
                            <input type="submit" class="btn" style="background-color: #EF696A; color: #fff; font-weight: 600; padding-left: 8%; padding-right: 8%;" value="Search">
                        </div>
                    </form>

                </div>

            </div>
            <br>
            <div id="first_collapse">
                <div class="collapse23___ pe-3" style="height: 350px; overflow: scroll; overflow-x: hidden;">
                    @foreach($opened as $task)
                    @php
                    $leadss = $task->family_id * 1244;
                    $taskId = \Illuminate\Support\Facades\Crypt::encrypt($leadss);
                    @endphp

                    <div style="background: #EF696A; color: #fff; border-radius: 8px; cursor: pointer">

                        @php
                        $leadss = $task->admin_id * 1244;
                        $taskAdminId = \Illuminate\Support\Facades\Crypt::encrypt($leadss);

                        $leadss = Auth::user()->id * 1244;
                        $authUserId = \Illuminate\Support\Facades\Crypt::encrypt($leadss);

                        @endphp

                        <a data-bs-toggle="collapse" id="demo23_2{{$authUserId}}" style="text-decoration:none;">
                            <div class="px-3 py-2">
                                <h5 class="m-1">
                                    <b>{{ucfirst($task->first_name)}} {{ucfirst($task->last_name)}} </b>
                                    <span style="float: right;">
                                        <span onclick="window.location.href='{{route('chat',[$taskAdminId,$authUserId])}}'">
                                            <span class="px-2" style="font-size: 19px;">
                                                <i class="bi bi-chat justify-content-end"></i>
                                            </span>
                                        </span>
                                        <span id="demo23span_2{{$authUserId}}" class="bi bi-chevron-down"></span>
                                    </span>
                                </h5>
                            </div>
                        </a>


                        <div id="demo_2{{$authUserId}}" class="collapse px-3 py-2">
                            <h6 class="m-1"><b>Client: {{ucfirst($task->first_name)}}</b> </h6>
                            <h6 class="m-1"><b>Title:</b> {{$task->description}}</h6>
                            <h6 class="m-1"><b>Date & Time:</b> {{$task->created_at}}</h6>
                            <h6 class="m-1"><b>Description:</b> <span> {{$task->description}} </span></h6>
                            <button class="btn m-1" onclick="window.location.href='{{route('leadfamilyperson',$taskId)}}'" style="background-color: #fff; color: #EF696A; font-weight: 600; padding-left: 8%; padding-right: 8%;">Open</button>
                        </div>
                        <script>
                            truefalsee2["sss" + intvaluecount2] = false;
                            $(document).ready(function(){
                                $("#demo23_2{{$authUserId}}").click(function(){

                                    $("#demo_2{{$authUserId}}").collapse('toggle');
                                    if(truefalsee2["sss" + intvaluecount2] === false){
                                        $("#demo23span_2{{$authUserId}}").addClass("bi bi-chevron-down bi-chevron-up");
                                        truefalsee2["sss" + intvaluecount2] = true;
                                    }else{
                                        $("#demo23span_2{{$authUserId}}").removeClass("bi bi-chevron-up");
                                        truefalsee2["sss" + intvaluecount2] = false;
                                    }
                                });
                            });
                            intvaluecount2++;
                        </script>
                    </div>

                    <br>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

</div>
@endif
@endsection
<style>
    body{
        overflow-x: hidden;
    }
    .overflow-divvv::-webkit-scrollbar {
        width: 1px !important;
    }

    /* Track */
    .overflow-divvv::-webkit-scrollbar-track {
        background: transparent !important;
        border-radius: 10px !important;
    }

    /* Handle */
    .overflow-divvv::-webkit-scrollbar-thumb {
        background: #c9cad8 !important;
        border-radius: 10px !important;
    }

    /* Handle on hover */
    .overflow-divvv::-webkit-scrollbar-thumb:hover {
        background: #707070 !important;
        border-radius: 10px !important;
    }

    .tab-lookalike2 {
        background-color: #FFEAE4 !important;
        color: #434343 !important;
        border-bottom-left-radius: 0px !important;
        border-bottom-right-radius: 0px !important;
        border-top-left-radius: 5px !important;
        border-top-right-radius: 5px !important;
    }

    .tab-lookalike1 {
        background-color: #F7F7F7 !important;
        color: #434343 !important;
        border-bottom-left-radius: 0px !important;
        border-bottom-right-radius: 0px !important;
        border-top-left-radius: 5px !important;
        border-top-right-radius: 5px !important;
    }

    .tab-lookalike {
        background-color: #F7F7F7 !important;
        color: #FF4000 !important;
        border-bottom-left-radius: 0px !important;
        border-bottom-right-radius: 0px !important;
        border-top-left-radius: 5px !important;
        border-top-right-radius: 5px !important;
    }

    .header-open-task1 {
        background-color: #F7F7F7 !important;
        border-bottom-left-radius: 20px !important;
        border-bottom-right-radius: 20px !important;
        border-top-left-radius: 20px !important;
        border-top-right-radius: 0px !important;

    }

    .header-open-task1-pink {
        background-color: #FFEAE4 !important;
        border-bottom-left-radius: 20px !important;
        border-bottom-right-radius: 20px !important;
        border-top-left-radius: 20px !important;
        border-top-right-radius: 0px;

    }

    .header-open-task {
        background-color: #F7F7F7 !important;
    }

    .header-open-task-pink {
        background-color: #FFEAE4 !important;
    }

    .priority-spnn {
        background-color: #ad2b2b !important;
        border-radius: 35px !important;
        color: #fff !important;
    }

    .open-task-box {
        border-radius: 35px !important;
        background-color: #fff;
        border: none !important;
    }

    .pendzen-box {
        border-radius: 35px !important;
        background-color: #EAECF0 !important;
        border: none !important;

    }

    .third-box {
        border-radius: 35px !important;
        background-color: #fff !important;
        border: #707070 1px solid !important;

    }

    .task-box {
        background-color: #F7F7F7 !important;
        border-radius: 12px !important;
    }

    .name-spnnnn {
        font-weight: 600 !important;
    }

    .fw-600 {
        font-weight: 600 !important;
    }

    .spn-muted {
        color: #707070 !important;
        font-weight: 600 !important;
        font-size: 14px !important;
    }

    .spn-normal {
        font-weight: 600;
        font-size: 14px !important;
    }
</style>
