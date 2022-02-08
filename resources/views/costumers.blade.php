@extends('template.navbar')
@section('content')

<body>
    <div class="suchen-div my-3 mx-4">
        <div class="input-group">
            <div class="suchen-style1 py-2 ps-4">
                <svg id="Group_978" data-name="Group 978" xmlns="http://www.w3.org/2000/svg" width="28" viewBox="0 0 32.504 28.358">
                    <g id="Ellipse_2" data-name="Ellipse 2" transform="translate(0)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2">
                        <ellipse cx="12.438" cy="12.438" rx="12.438" ry="12.438" stroke="none" />
                        <ellipse cx="12.438" cy="12.438" rx="11.438" ry="11.438" fill="none" />
                    </g>
                    <line id="Line_4" data-name="Line 4" x2="8.532" y2="7.141" transform="translate(22.563 19.808)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2" />
                </svg>
            </div>
            <div class="suchen-style2 py-2 pe-4">
                <form method="post" action="{{route('search')}}">
                    @csrf
                    <input type="text" class="ms-3 bg-transparent border-0 input-suchen" name="searchname" placeholder="Suche (Kundenname, Vert )">
                </form>
            </div>
        </div>
    </div>

    <div class="kunderportfolio-div mx-4 my-4">
        <div class="header kundenstyle1 px-3 py-3">
            <div class="d-flex justify-content-between ">
                <span class="fs-5 fw-600">Kundenportfolio</span>
                <div class="dropdown ">
                    <button class="dropdown-toggle border-0" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20.391" height="20.587" viewBox="0 0 28.391 27.587">
                                <g id="Group_980" data-name="Group 980" transform="translate(1.25)">
                                    <g id="Group_17" data-name="Group 17">
                                        <line id="Line_5" data-name="Line 5" x2="25.891" transform="translate(0 24.217)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2.5" />
                                        <line id="Line_6" data-name="Line 6" x2="25.891" transform="translate(0 13.488)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2.5" />
                                        <line id="Line_7" data-name="Line 7" x2="25.891" transform="translate(0 2.76)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2.5" />
                                        <g id="Ellipse_4" data-name="Ellipse 4" transform="translate(4.926 21.457)" stroke="#000" stroke-width="1">
                                            <ellipse cx="2.815" cy="3.065" rx="2.815" ry="3.065" stroke="none" />
                                            <ellipse cx="2.815" cy="3.065" rx="2.315" ry="2.565" fill="none" />
                                        </g>
                                        <g id="Ellipse_5" data-name="Ellipse 5" transform="translate(16.186 10.728)" stroke="#000" stroke-width="1">
                                            <ellipse cx="2.815" cy="3.065" rx="2.815" ry="3.065" stroke="none" />
                                            <ellipse cx="2.815" cy="3.065" rx="2.315" ry="2.565" fill="none" />
                                        </g>
                                        <g id="Ellipse_6" data-name="Ellipse 6" transform="translate(4.926)" stroke="#000" stroke-width="1">
                                            <ellipse cx="2.815" cy="3.065" rx="2.815" ry="3.065" stroke="none" />
                                            <ellipse cx="2.815" cy="3.065" rx="2.315" ry="2.565" fill="none" />
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </span>

                    </button>
                    <form method="post" action="{{route('search')}}" class="dropdown-menu px-2" aria-labelledby="dropdownMenuButton1">
                        <label for="from-date" class="fw-600">From</label>
                        <input type="date" name="from-date" class="dropdown-item" name="searchdate1">
                        <label for="to-date" class="fw-600">To</label>
                        <input type="date" name="to-date" class="dropdown-item" name="searchdate2">
                        <input type="submit" class="border-0 bg-secondary text-light fw-600 my-2 text-center rounded dropdown-item" value="Submit">
                    </form>
                </div>
            </div>
        </div>

        <div class="content kundenstyle2 px-3">
            <div class="table-responsive bg-color1 ovrflw kundenstyle2" style="overflow: auto; height: 62vh;">
                <table class="table table-borderless bg-white">
                    <thead>
                        <tr class="bg-color1" style="border: none; border-bottom: 2px #fff solid !important;">
                            <th scope="col" class="header-styling">ID</th>
                            <th scope="col" class="header-styling">Vorname</th>
                            <th scope="col" class="header-styling">Nachname</th>
                            <th scope="col" class="header-styling">Mandatiert</th>
                            <th scope="col" class="header-styling">Abschlusse</th>
                            <th scope="col" class="header-styling">Pramiee</th>
                            <th scope="col" class="header-styling">Status</th>
                            
                        </tr>
                    </thead>
                   
                    @if(!$data == [])
                    @for($i = 0; $i < count($data); $i++) @php $leadss=$data[$i]->id * 1244;
                        $datId = \Illuminate\Support\Facades\Crypt::encrypt($leadss);
                        @endphp
                        <tbody id="body-table-edit" onclick="window.location.href='{{route('costumer_form', $datId)}}'" style="border-radius: 8px !important; cursor: pointer; border: none;border-bottom: 5px #F0F0F0 solid;border-top: 5px #F0F0F0 solid;">
                            <tr style="padding: 1% !important;">
                                <th scope="row" style="font-weight: 400 !important;">1001</th>
                                <td>Altin</td>
                                <td>Ahmetaj</td>
                                <td>Ja</td>
                                <td>Grundversicherung</td>
                                <td>251.00CHF</td>
                                <td class="status1" id="status">AUFGENOMMEN</td>
                            </tr>
                            <tr style="padding: 1% !important;" id="table-row-edit">
                                <th scope="row"></th>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Grundversicherung</td>
                                <td>251.00CHF</td>
                                <td class="status2" id="status">PROVISIONIERT</td>
                            </tr>
                            <tr style="padding: 1% !important;" id="table-row-edit">
                                <th scope="row"></th>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Grundversicherung</td>
                                <td>251.00CHF</td>
                                <td class="status3" id="status">OFFEN</td>
                            </tr>
                            <tr style="padding: 1% !important;" id="table-row-edit">
                                <th scope="row"></th>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Grundversicherung</td>
                                <td>251.00CHF</td>
                                <td class="status3" id="status">OFFEN</td>
                            </tr>
                        </tbody>
                        @endfor
                        @endif
                </table>

            </div>
            <div class="d-flex justify-content-end mb-1" style="background-color: #F0F0F0;">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="70" height="34" viewBox="0 0 97 34">
                    <defs>
                        <filter id="Path_281" x="71.499" y="5.284" width="18.08" height="23.433" filterUnits="userSpaceOnUse">
                            <feOffset input="SourceAlpha" />
                            <feGaussianBlur stdDeviation="1" result="blur" />
                            <feFlood flood-opacity="0.161" />
                            <feComposite operator="in" in2="blur" />
                            <feComposite in="SourceGraphic" />
                        </filter>
                    </defs>
                    <g id="Group_981" data-name="Group 981" transform="translate(-0.094)">
                        <g id="Group_757" data-name="Group 757">
                            <path id="Path_281-2" data-name="Path 281" d="M0,0,9.679,7.316,0,14.631" transform="translate(20.684 24.316) rotate(180)" fill="none" stroke="#ccc" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                            <g id="Ellipse_55" data-name="Ellipse 55" transform="translate(0.094)" fill="none" stroke="#ccc" stroke-width="2">
                                <circle cx="17" cy="17" r="17" stroke="none" />
                                <circle cx="17" cy="17" r="16" fill="none" />
                            </g>
                        </g>
                        <g id="Group_758" data-name="Group 758" transform="translate(97 34) rotate(180)">
                            <g transform="matrix(-1, 0, 0, -1, 96.91, 34)">
                                <path id="Path_281-3" data-name="Path 281" d="M0,0,9.679,7.316,0,14.631" transform="translate(75.9 9.68)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                            </g>
                            <g id="Ellipse_55-2" data-name="Ellipse 55" transform="translate(-0.094)" fill="none" stroke="#000" stroke-width="2">
                                <circle cx="17" cy="17" r="17" stroke="none" />
                                <circle cx="17" cy="17" r="16" fill="none" />
                            </g>
                        </g>
                    </g>
                </svg>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

{{--<section>--}}
{{-- <div class="px-4">--}}
{{-- <div class="row">--}}
{{-- <div class="col my-auto">--}}
{{-- <div class="search-divvv">--}}
{{-- <div class="input-group ">--}}
{{-- <span class="px-3 my-auto">--}}
{{-- <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"--}}
{{-- class="bi bi-search" viewBox="0 0 16 16">--}}
{{-- <path--}}
{{-- d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />--}}
{{-- </svg>--}}
{{-- </span>--}}
{{-- <form method="post" action="{{route('search')}}">--}}
{{-- @csrf--}}
{{-- <input type="text" class="form-control search-bar-one" name="searchname"--}}
{{-- placeholder="Suche (Kundenname,Vertragsnummer)" aria-label="Username"--}}
{{-- aria-describedby="basic-addon1">--}}
{{-- </form>--}}
{{-- </div>--}}
{{-- </div>--}}
{{-- </div>--}}
{{-- <div class="col-3 text-right my-2">--}}
{{-- <div class="pull-right text-end">--}}
{{-- <button class="border-0 px-2 pt-1 pb-2 me-2"--}}
{{-- style="background-color: #C4C6D2; border-radius: 12px;">--}}
{{-- <svg xmlns="http://www.w3.org/2000/svg" height="22px" fill="#fff" class="bi bi-bell"--}}
{{-- viewBox="0 0 16 16">--}}
{{-- <path--}}
{{-- d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z" />--}}
{{-- </svg>--}}
{{-- </button>--}}
{{-- <button class="border-0 px-2 pt-1 pb-2" style="background-color: #C4C6D2; border-radius: 12px;">--}}
{{-- <svg xmlns="http://www.w3.org/2000/svg" height="22px" viewBox="0 0 28.063 28.637">--}}
{{-- <g id="Group_2" data-name="Group 2" transform="translate(1 1)">--}}
{{-- <circle id="Ellipse_3" data-name="Ellipse 3" cx="6.803" cy="6.803" r="6.803"--}}
{{-- transform="translate(6.229)" fill="none" stroke="#fff" stroke-linecap="round"--}}
{{-- stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" />--}}
{{-- <path id="Path_1" data-name="Path 1" d="M2,102.218a13.032,13.032,0,0,1,26.063,0"--}}
{{-- transform="translate(-2 -75.581)" fill="none" stroke="#fff"--}}
{{-- stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"--}}
{{-- stroke-width="2" />--}}
{{-- </g>--}}
{{-- </svg>--}}
{{-- </button>--}}
{{-- </div>--}}
{{-- </div>--}}
{{-- </div>--}}
{{-- </div>--}}
{{--</section>--}}

{{--<section>--}}
{{-- <div class="mx-3">--}}
{{-- <div class="clientt-box">--}}
{{-- <div class="header-third-box row mx-4">--}}
{{-- <div class="col">--}}
{{-- <div class=" py-3">--}}
{{-- <span class="fs-4 name-spnnnn">--}}
{{-- Kundenportfolio--}}
{{-- </span>--}}
{{-- </div>--}}
{{-- </div>--}}
{{-- <div class="d-flex justify-content-end col my-auto input-group">--}}
{{-- <a href="{{route('searchword')}}" style="text-decoration: none;color: #434343;cursor: pointer" class="px-2 my-auto fw-600 border-0 bg-white">--}}
{{-- <span>--}}
{{-- <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"--}}
{{-- class="bi bi-sort-down" viewBox="0 0 16 16">--}}
{{-- <path--}}
{{-- d="M3.5 2.5a.5.5 0 0 0-1 0v8.793l-1.146-1.147a.5.5 0 0 0-.708.708l2 1.999.007.007a.497.497 0 0 0 .7-.006l2-2a.5.5 0 0 0-.707-.708L3.5 11.293V2.5zm3.5 1a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zM7.5 6a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zm0 3a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zm0 3a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1z" />--}}
{{-- </svg>--}}
{{-- </span>--}}
{{-- Sortiren--}}
{{-- </a>--}}
{{-- <div class="dropdown dropstart px-2 fw-600">--}}
{{-- <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"--}}
{{-- data-bs-toggle="dropdown" aria-expanded="false">--}}
{{-- <span>--}}
{{-- <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"--}}
{{-- class="bi bi-funnel" viewBox="0 0 16 16">--}}
{{-- <path--}}
{{-- d="M1.5 1.5A.5.5 0 0 1 2 1h12a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.128.334L10 8.692V13.5a.5.5 0 0 1-.342.474l-3 1A.5.5 0 0 1 6 14.5V8.692L1.628 3.834A.5.5 0 0 1 1.5 3.5v-2zm1 .5v1.308l4.372 4.858A.5.5 0 0 1 7 8.5v5.306l2-.666V8.5a.5.5 0 0 1 .128-.334L13.5 3.308V2h-11z" />--}}
{{-- </svg>--}}
{{-- </span>--}}
{{-- Filter--}}
{{-- </button>--}}
{{-- <form method="post" action="{{route('search')}}" class="dropdown-menu px-2" aria-labelledby="dropdownMenuButton1">--}}
{{-- @csrf--}}
{{-- <label for="from-date" class="fw-600">From</label>--}}
{{-- <input type="date" class="dropdown-item" name="searchdate1">--}}
{{-- <label for="to-date" class="fw-600">To</label>--}}
{{-- <input type="date" class="dropdown-item" name="searchdate2">--}}
{{-- <input type="submit"--}}
{{-- class="border-0 bg-secondary text-light fw-600 my-2 text-center rounded dropdown-item"--}}
{{-- value="Submit">--}}
{{-- </form>--}}
{{-- </div>--}}
{{-- </div>--}}
{{-- </div>--}}
{{-- <div class="my-3 mx-3">--}}
{{-- <div class="row my-1 mx-3 ">--}}
{{-- <div class="col g-0">--}}
{{-- <div class="">--}}
{{-- <span class="spn-muted">--}}
{{-- ID--}}
{{-- </span>--}}
{{-- </div>--}}
{{-- </div>--}}
{{-- <div class="col g-0">--}}
{{-- <div class="">--}}
{{-- <span class="spn-muted">--}}
{{-- Vorname--}}
{{-- </span>--}}
{{-- </div>--}}
{{-- </div>--}}
{{-- <div class="col g-0">--}}
{{-- <div class="">--}}
{{-- <span class="spn-muted">--}}
{{-- Nachname--}}
{{-- </span>--}}
{{-- </div>--}}
{{-- </div>--}}
{{-- <div class="col g-0">--}}
{{-- <div class="">--}}
{{-- <span class="spn-muted">--}}
{{-- Mandatiert--}}
{{-- </span>--}}
{{-- </div>--}}
{{-- </div>--}}
{{-- <div class="col g-0">--}}
{{-- <div class="">--}}
{{-- <span class="spn-muted">--}}
{{-- Abschlusse--}}
{{-- </span>--}}
{{-- </div>--}}
{{-- </div>--}}
{{-- <div class="col g-0">--}}
{{-- <div class="">--}}
{{-- <span class="spn-muted">--}}
{{-- Pramiee--}}
{{-- </span>--}}
{{-- </div>--}}
{{-- </div>--}}
{{-- <div class="col g-0">--}}
{{-- <div class="">--}}
{{-- <span class="spn-muted">--}}
{{-- <div class="col g-0">--}}
{{-- <div class="">--}}
{{-- <span class="spn-muted">--}}
{{-- Status--}}
{{-- </span>--}}
{{-- </div>--}}
{{-- </div>--}}
{{-- </span>--}}
{{-- </div>--}}
{{-- </div>--}}
{{-- </div>--}}
{{-- <hr class="">--}}
{{-- </div>--}}
{{-- <div class="mx-3 my-2 ">--}}
{{-- <div class="scroll-1" style="font-size: 14px;">--}}
{{-- @if(!$data == [])--}}
{{-- @for($i = 0; $i < count($data); $i++)--}}
{{-- @php--}}
{{-- $leadss = $data[$i]->id * 1244;--}}
{{-- $datId = \Illuminate\Support\Facades\Crypt::encrypt($leadss);--}}
{{-- @endphp--}}
{{-- <a style="text-decoration: none; color: black" href="{{route('costumer_form',$datId)}}">--}}
{{-- <div class="row my-1 mx-3">--}}
{{-- <div class="col g-0">--}}
{{-- <div class="">--}}
{{-- <span class="spn-normal">--}}
{{-- {{$data[$i]->id}}--}}
{{-- </span>--}}
{{-- </div>--}}
{{-- </div>--}}
{{-- <div class="col g-0">--}}
{{-- <div class="">--}}
{{-- <span class="spn-normal">--}}
{{-- {{$data[$i]->first_name}}--}}
{{-- </span>--}}
{{-- </div>--}}
{{-- </div>--}}
{{-- <div class="col g-0">--}}
{{-- <div class="">--}}
{{-- <span class="spn-normal">--}}
{{-- {{$data[$i]->last_name}}--}}
{{-- </span>--}}
{{-- </div>--}}
{{-- </div>--}}
{{-- <div class="col g-0">--}}
{{-- <div class="">--}}
{{-- <span class="spn-normal">--}}
{{-- {{$data[$i]->status}}--}}
{{-- </span>--}}
{{-- </div>--}}
{{-- </div>--}}


{{-- <div class="col g-0">--}}
{{-- @if(empty($grundversicherungP[$i]))--}}
{{-- <div class="">--}}
{{-- <span class="spn-normal">--}}

{{-- </span>--}}
{{-- </div>--}}
{{-- </div>--}}
{{-- <div class="col g-0">--}}
{{-- <div class="">--}}
{{-- <span class="spn-normal">--}}

{{-- </span>--}}
{{-- </div>--}}
{{-- </div>--}}

{{-- <div class="col g-0">--}}
{{-- <div class=" ">--}}
{{-- </div>--}}
{{-- @endif--}}
{{-- @if(!empty($grundversicherungP[$i]))--}}
{{-- <div class="">--}}
{{-- <span class="spn-normal">--}}
{{-- Grundversicherung--}}
{{-- </span>--}}
{{-- </div>--}}
{{-- </div>--}}
{{-- <div class="col g-0">--}}
{{-- <div class="">--}}
{{-- <span class="spn-normal">--}}
{{-- {{$grundversicherungP[$i]->total_commisions_PG}} CHF--}}
{{-- </span>--}}
{{-- </div>--}}
{{-- </div>--}}

{{-- <div class="col g-0">--}}
{{-- <div class=" ">--}}
{{-- @if($grundversicherungP[$i]->status_PG == 'notselected')--}}
{{-- <button type="button" class="w-100 priority-spnn-1 border-0 fw-600 bg-secondary">--}}
{{-- {{strtoupper($grundversicherungP[$i]->status_PG)}}--}}
{{-- </button>--}}
{{-- @endif--}}
{{-- @if($grundversicherungP[$i]->status_PG == 'Aufgenomen')--}}
{{-- <button type="button" class="w-100 priority-spnn-1 border-0 fw-600">--}}
{{-- {{strtoupper($grundversicherungP[$i]->status_PG)}}--}}
{{-- </button>--}}
{{-- @endif--}}
{{-- @if($grundversicherungP[$i]->status_PG == 'Offen')--}}
{{-- <button type="button" class="w-100 priority-spnn-1 border-0 fw-600 bg-warning">--}}
{{-- {{strtoupper($grundversicherungP[$i]->status_PG)}}--}}
{{-- </button>--}}
{{-- @endif--}}
{{-- @if($grundversicherungP[$i]->status_PG == 'Provisionert')--}}
{{-- <button type="button" class="w-100 priority-spnn-1 border-0 fw-600 bg-success">--}}
{{-- {{strtoupper($grundversicherungP[$i]->status_PG)}}--}}
{{-- </button>--}}
{{-- @endif--}}
{{-- @if($grundversicherungP[$i]->status_PG == 'Zuruckgezogen')--}}
{{-- <button type="button" class="w-100 priority-spnn-1 border-0 fw-600 bg-info">--}}
{{-- {{strtoupper($grundversicherungP[$i]->status_PG)}}--}}
{{-- </button>--}}
{{-- @endif--}}
{{-- @if($grundversicherungP[$i]->status_PG == 'Abgelehnt')--}}
{{-- <button type="button" class="w-100 priority-spnn-1 border-0 fw-600 bg-danger">--}}
{{-- {{strtoupper($grundversicherungP[$i]->status_PG)}}--}}
{{-- </button>--}}
{{-- @endif--}}
{{-- </div>--}}
{{-- @endif--}}
{{-- </div>--}}

{{-- </div>--}}

{{-- <div class="row my-1 mx-3">--}}
{{-- <div class="col g-0">--}}
{{-- <div class="">--}}
{{-- <span class="spn-normal">--}}

{{-- </span>--}}
{{-- </div>--}}
{{-- </div>--}}
{{-- <div class="col g-0">--}}
{{-- <div class="">--}}
{{-- <span class="spn-normal">--}}

{{-- </span>--}}
{{-- </div>--}}
{{-- </div>--}}
{{-- <div class="col g-0">--}}
{{-- <div class="">--}}
{{-- <span class="spn-normal">--}}

{{-- </span>--}}
{{-- </div>--}}
{{-- </div>--}}
{{-- <div class="col g-0">--}}
{{-- <div class="">--}}
{{-- <span class="spn-normal">--}}

{{-- </span>--}}
{{-- </div>--}}
{{-- </div>--}}

{{-- <div class="col g-0">--}}
{{-- @if(!empty($retchsschutzP[$i]))--}}
{{-- <div class="">--}}
{{-- <span class="spn-normal">--}}
{{-- Rechtsschutz--}}
{{-- </span>--}}
{{-- </div>--}}
{{-- </div>--}}
{{-- <div class="col g-0">--}}
{{-- <div class="">--}}
{{-- <span class="spn-normal">--}}
{{-- {{$retchsschutzP[$i]->total_commisions_PR}} CHF--}}
{{-- </span>--}}
{{-- </div>--}}
{{-- </div>--}}
{{-- <div class="col g-0">--}}
{{-- <div class=" ">--}}
{{-- @if($retchsschutzP[$i]->status_PR == 'notselected')--}}
{{-- <button type="button" class="w-100 priority-spnn-1 border-0 fw-600 bg-secondary">--}}
{{-- {{strtoupper($retchsschutzP[$i]->status_PR)}}--}}
{{-- </button>--}}
{{-- @endif--}}
{{-- @if($retchsschutzP[$i]->status_PR == 'Aufgenomen')--}}
{{-- <button type="button" class="w-100 priority-spnn-1 border-0 fw-600">--}}
{{-- {{strtoupper($retchsschutzP[$i]->status_PR)}}--}}
{{-- </button>--}}
{{-- @endif--}}
{{-- @if($retchsschutzP[$i]->status_PR == 'Offen')--}}
{{-- <button type="button" class="w-100 priority-spnn-1 border-0 fw-600 bg-warning">--}}
{{-- {{strtoupper($retchsschutzP[$i]->status_PR)}}--}}
{{-- </button>--}}
{{-- @endif--}}
{{-- @if($retchsschutzP[$i]->status_PR == 'Provisionert')--}}
{{-- <button type="button" class="w-100 priority-spnn-1 border-0 fw-600 bg-success">--}}
{{-- {{strtoupper($retchsschutzP[$i]->status_PR)}}--}}
{{-- </button>--}}
{{-- @endif--}}
{{-- </div>--}}
{{-- @endif--}}
{{-- </div>--}}

{{-- </div>--}}
{{-- <div class="row my-1 mx-3">--}}
{{-- <div class="col g-0">--}}
{{-- <div class="">--}}
{{-- <span class="spn-normal">--}}

{{-- </span>--}}
{{-- </div>--}}
{{-- </div>--}}
{{-- <div class="col g-0">--}}
{{-- <div class="">--}}
{{-- <span class="spn-normal">--}}

{{-- </span>--}}
{{-- </div>--}}
{{-- </div>--}}
{{-- <div class="col g-0">--}}
{{-- <div class="">--}}
{{-- <span class="spn-normal">--}}

{{-- </span>--}}
{{-- </div>--}}
{{-- </div>--}}
{{-- <div class="col g-0">--}}
{{-- <div class="">--}}
{{-- <span class="spn-normal">--}}

{{-- </span>--}}
{{-- </div>--}}
{{-- </div>--}}

{{-- <div class="col g-0">--}}
{{-- @if(!empty($vorsorgeP[$i]))--}}
{{-- <div class="">--}}
{{-- <span class="spn-normal">--}}
{{-- Vorsorge--}}
{{-- </span>--}}
{{-- </div>--}}
{{-- </div>--}}
{{-- <div class="col g-0">--}}
{{-- <div class="">--}}
{{-- <span class="spn-normal">--}}
{{-- {{$vorsorgeP[$i]->total_commisions_PV}} CHF--}}
{{-- </span>--}}
{{-- </div>--}}
{{-- </div>--}}
{{-- <div class="col g-0">--}}
{{-- <div class=" ">--}}
{{-- @if($vorsorgeP[$i]->status_PV == 'notselected')--}}
{{-- <button type="button" class="w-100 priority-spnn-1 border-0 fw-600 bg-secondary">--}}
{{-- {{strtoupper($vorsorgeP[$i]->status_PV)}}--}}
{{-- </button>--}}
{{-- @endif--}}
{{-- @if($vorsorgeP[$i]->status_PV == 'Aufgenomen')--}}
{{-- <button type="button" class="w-100 priority-spnn-1 border-0 fw-600">--}}
{{-- {{strtoupper($vorsorgeP[$i]->status_PV)}}--}}
{{-- </button>--}}
{{-- @endif--}}
{{-- @if($vorsorgeP[$i]->status_PV == 'Offen')--}}
{{-- <button type="button" class="w-100 priority-spnn-1 border-0 fw-600 bg-warning">--}}
{{-- {{strtoupper($vorsorgeP[$i]->status_PV)}}--}}
{{-- </button>--}}
{{-- @endif--}}
{{-- @if($vorsorgeP[$i]->status_PV == 'Provisionert')--}}
{{-- <button type="button" class="w-100 priority-spnn-1 border-0 fw-600 bg-success">--}}
{{-- {{strtoupper($vorsorgeP[$i]->status_PV)}}--}}
{{-- </button>--}}
{{-- @endif--}}
{{-- </div>--}}
{{-- @endif--}}
{{-- </div>--}}

{{-- </div>--}}
{{-- <div class="row my-1 mx-3">--}}
{{-- <div class="col g-0">--}}
{{-- <div class="">--}}
{{-- <span class="spn-normal">--}}

{{-- </span>--}}
{{-- </div>--}}
{{-- </div>--}}
{{-- <div class="col g-0">--}}
{{-- <div class="">--}}
{{-- <span class="spn-normal">--}}

{{-- </span>--}}
{{-- </div>--}}
{{-- </div>--}}
{{-- <div class="col g-0">--}}
{{-- <div class="">--}}
{{-- <span class="spn-normal">--}}

{{-- </span>--}}
{{-- </div>--}}
{{-- </div>--}}
{{-- <div class="col g-0">--}}
{{-- <div class="">--}}
{{-- <span class="spn-normal">--}}

{{-- </span>--}}
{{-- </div>--}}
{{-- </div>--}}

{{-- <div class="col g-0">--}}
{{-- @if(!empty($zusatzversicherungP[$i]))--}}
{{-- <div class="">--}}
{{-- <span class="spn-normal">--}}
{{-- Zusatzversicherung--}}
{{-- </span>--}}
{{-- </div>--}}
{{-- </div>--}}
{{-- <div class="col g-0">--}}
{{-- <div class="">--}}
{{-- <span class="spn-normal">--}}
{{-- {{$zusatzversicherungP[$i]->total_commisions_PZ}} CHF--}}
{{-- </span>--}}
{{-- </div>--}}
{{-- </div>--}}
{{-- <div class="col g-0">--}}
{{-- <div class=" ">--}}
{{-- @if($zusatzversicherungP[$i]->status_PZ == 'notselected')--}}
{{-- <button type="button" class="w-100 priority-spnn-1 border-0 fw-600 bg-secondary">--}}
{{-- {{strtoupper($zusatzversicherungP[$i]->status_PZ)}}--}}
{{-- </button>--}}
{{-- @endif--}}
{{-- @if($zusatzversicherungP[$i]->status_PZ == 'Aufgenomen')--}}
{{-- <button type="button" class="w-100 priority-spnn-1 border-0 fw-600">--}}
{{-- {{strtoupper($zusatzversicherungP[$i]->status_PZ)}}--}}
{{-- </button>--}}
{{-- @endif--}}
{{-- @if($zusatzversicherungP[$i]->status_PZ == 'Offen')--}}
{{-- <button type="button" class="w-100 priority-spnn-1 border-0 fw-600 bg-warning">--}}
{{-- {{strtoupper($zusatzversicherungP[$i]->status_PZ)}}--}}
{{-- </button>--}}
{{-- @endif--}}
{{-- @if($zusatzversicherungP[$i]->status_PZ == 'Provisionert')--}}
{{-- <button type="button" class="w-100 priority-spnn-1 border-0 fw-600 bg-success">--}}
{{-- {{strtoupper($zusatzversicherungP[$i]->status_PZ)}}--}}
{{-- </button>--}}
{{-- @endif--}}
{{-- </div>--}}
{{-- @endif--}}
{{-- </div>--}}

{{-- </div>--}}
{{-- <div class="row my-1 mx-3">--}}
{{-- <div class="col g-0">--}}
{{-- <div class="">--}}
{{-- <span class="spn-normal">--}}

{{-- </span>--}}
{{-- </div>--}}
{{-- </div>--}}
{{-- <div class="col g-0">--}}
{{-- <div class="">--}}
{{-- <span class="spn-normal">--}}

{{-- </span>--}}
{{-- </div>--}}
{{-- </div>--}}
{{-- <div class="col g-0">--}}
{{-- <div class="">--}}
{{-- <span class="spn-normal">--}}

{{-- </span>--}}
{{-- </div>--}}
{{-- </div>--}}
{{-- <div class="col g-0">--}}
{{-- <div class="">--}}
{{-- <span class="spn-normal">--}}

{{-- </span>--}}
{{-- </div>--}}
{{-- </div>--}}

{{-- <div class="col g-0">--}}
{{-- @if(!empty($autoversicherungP[$i]))--}}
{{-- <div class="">--}}
{{-- <span class="spn-normal">--}}
{{-- Autoversicherung--}}
{{-- </span>--}}
{{-- </div>--}}
{{-- </div>--}}
{{-- <div class="col g-0">--}}
{{-- <div class="">--}}
{{-- <span class="spn-normal">--}}
{{-- {{$autoversicherungP[$i]->total_commisions_PA}} CHF--}}
{{-- </span>--}}
{{-- </div>--}}
{{-- </div>--}}
{{-- <div class="col g-0">--}}
{{-- <div class=" ">--}}
{{-- @if($autoversicherungP[$i]->status_PA == 'notselected')--}}
{{-- <button type="button" class="w-100 priority-spnn-1 border-0 fw-600 bg-secondary">--}}
{{-- {{strtoupper($autoversicherungP[$i]->status_PA)}}--}}
{{-- </button>--}}
{{-- @endif--}}
{{-- @if($autoversicherungP[$i]->status_PA == 'Aufgenomen')--}}
{{-- <button type="button" class="w-100 priority-spnn-1 border-0 fw-600">--}}
{{-- {{strtoupper($autoversicherungP[$i]->status_PA)}}--}}
{{-- </button>--}}
{{-- @endif--}}
{{-- @if($autoversicherungP[$i]->status_PA == 'Offen')--}}
{{-- <button type="button" class="w-100 priority-spnn-1 border-0 fw-600 bg-warning">--}}
{{-- {{strtoupper($autoversicherungP[$i]->status_PA)}}--}}
{{-- </button>--}}
{{-- @endif--}}
{{-- @if($autoversicherungP[$i]->status_PA == 'Provisionert')--}}
{{-- <button type="button" class="w-100 priority-spnn-1 border-0 fw-600 bg-success">--}}
{{-- {{strtoupper($autoversicherungP[$i]->status_PA)}}--}}
{{-- </button>--}}
{{-- @endif--}}
{{-- </div>--}}
{{-- @endif--}}
{{-- </div>--}}

{{-- </div>--}}
{{-- <div class="row my-1 mx-3">--}}
{{-- <div class="col g-0">--}}
{{-- <div class="">--}}
{{-- <span class="spn-normal">--}}

{{-- </span>--}}
{{-- </div>--}}
{{-- </div>--}}
{{-- <div class="col g-0">--}}
{{-- <div class="">--}}
{{-- <span class="spn-normal">--}}

{{-- </span>--}}
{{-- </div>--}}
{{-- </div>--}}
{{-- <div class="col g-0">--}}
{{-- <div class="">--}}
{{-- <span class="spn-normal">--}}

{{-- </span>--}}
{{-- </div>--}}
{{-- </div>--}}
{{-- <div class="col g-0">--}}
{{-- <div class="">--}}
{{-- <span class="spn-normal">--}}

{{-- </span>--}}
{{-- </div>--}}
{{-- </div>--}}

{{-- <div class="col g-0">--}}
{{-- @if(!empty($hausratP[$i]))--}}
{{-- <div class="">--}}
{{-- <span class="spn-normal">--}}
{{-- Hausrat--}}
{{-- </span>--}}
{{-- </div>--}}
{{-- </div>--}}
{{-- <div class="col g-0">--}}
{{-- <div class="">--}}
{{-- <span class="spn-normal">--}}
{{-- {{$hausratP[$i]->total_commisions_PH}} CHF--}}
{{-- </span>--}}
{{-- </div>--}}
{{-- </div>--}}
{{-- <div class="col g-0">--}}
{{-- <div class=" ">--}}
{{-- @if($hausratP[$i]->status_PH == 'notselected')--}}
{{-- <button type="button" class="w-100 priority-spnn-1 border-0 fw-600 bg-secondary">--}}
{{-- {{strtoupper($hausratP[$i]->status_PH)}}--}}
{{-- </button>--}}
{{-- @endif--}}
{{-- @if($hausratP[$i]->status_PH == 'Aufgenomen')--}}
{{-- <button type="button" class="w-100 priority-spnn-1 border-0 fw-600">--}}
{{-- {{strtoupper($hausratP[$i]->status_PH)}}--}}
{{-- </button>--}}
{{-- @endif--}}
{{-- @if($hausratP[$i]->status_PH == 'Offen')--}}
{{-- <button type="button" class="w-100 priority-spnn-1 border-0 fw-600 bg-warning">--}}
{{-- {{strtoupper($hausratP[$i]->status_PH)}}--}}
{{-- </button>--}}
{{-- @endif--}}
{{-- @if($hausratP[$i]->status_PH == 'Provisionert')--}}
{{-- <button type="button" class="w-100 priority-spnn-1 border-0 fw-600 bg-success">--}}
{{-- {{strtoupper($hausratP[$i]->status_PH)}}--}}
{{-- </button>--}}
{{-- @endif--}}
{{-- </div>--}}
{{-- @endif--}}
{{-- </div>--}}

{{-- </div>--}}
{{-- </a>--}}
{{-- <hr>--}}
{{-- @endfor--}}
{{-- @endif--}}
{{-- </div>--}}

{{-- </div>--}}

{{-- </div>--}}
{{-- </div>--}}
{{--</section>--}}

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>

@endsection
<style>
    /* overflow 1 */
    .ovrflw::-webkit-scrollbar {
        width: 4px;
        height: 4px;
    }

    /* Track */
    .ovrflw::-webkit-scrollbar-track {
        background: transparent !important;
        border-radius: 10px;
    }

    /* Handle */
    .ovrflw::-webkit-scrollbar-thumb {
        background: #c9cad8;
        border-radius: 10px;
    }

    /* Handle on hover */
    .ovrflw::-webkit-scrollbar-thumb:hover {
        background: #707070;
        border-radius: 10px;
    }

    .input-suchen:focus-visible {
        outline: none;

    }

    .suchen-style1 {
        background-color: #F0F0F0;
        border-bottom-left-radius: 16px;
        border-bottom-right-radius: 0;
        border-top-left-radius: 16px;
        border-top-right-radius: 0;
    }

    .suchen-style2 {
        background-color: #F0F0F0;
        border-bottom-left-radius: 0;
        border-bottom-right-radius: 16px;
        border-top-left-radius: 0;
        border-top-right-radius: 16px;
    }

    .dropdown button:after {
        display: none;
    }

    .header-styling {
        font-weight: 500 !important;
        color: #767676 !important;
        position: sticky !important;
        top: 0;
        background-color: #F0F0F0 !important;
    }

    .table {
        margin-bottom: 0 !important;
    }

    #body-table-edit td {
        margin-top: 0.3rem !important;
        margin-bottom: 0.3rem !important;
    }

    #status {
        margin-left: 0.5rem;
        margin-right: 0.5rem;
    }

    .status1 {
        background-color: #6FCE96 !important;
        font-weight: 600;
        border-radius: 10px;
        color: #fff;
        display: flex;
        justify-content: center;
    }

    .status2 {
        background-color: #239654 !important;
        font-weight: 600;
        border-radius: 10px;
        color: #fff;
        display: flex;
        justify-content: center;
    }

    .status3 {
        background-color: #F1CA4B !important;
        font-weight: 600;
        border-radius: 10px;
        color: #fff;
        display: flex;
        justify-content: center;
    }

    table tbody {
        border-top: 15px solid white;
    }

    .bg-color1 {
        background-color: #F0F0F0;
    }

    .kundenstyle1 {
        background-color: #F0F0F0;
        border-bottom-left-radius: 0px;
        border-bottom-right-radius: 0px;
        border-top-left-radius: 15px;
        border-top-right-radius: 15px;
    }

    .kundenstyle2 {
        background-color: #F0F0F0;
        border-bottom-left-radius: 15px;
        border-bottom-right-radius: 15px;
        border-top-left-radius: 0px;
        border-top-right-radius: 0px;
    }
</style>
{{--<style>--}}
{{-- .scroll-1 {--}}
{{-- height: 300px;--}}
{{-- overflow-y: scroll;--}}
{{-- overflow-x: hidden !important;--}}
{{-- }--}}
{{-- .scroll-1::-webkit-scrollbar {--}}
{{-- width: 4px !important;--}}
{{-- }--}}
{{-- /* Track */--}}
{{-- .scroll-1::-webkit-scrollbar-track {--}}
{{-- background: transparent !important;--}}
{{-- border-radius: 10px;--}}
{{-- }--}}
{{-- /* Handle */--}}
{{-- .scroll-1::-webkit-scrollbar-thumb {--}}
{{-- background: #91dfa1;--}}
{{-- border-radius: 10px;--}}
{{-- }--}}
{{-- /* Handle on hover */--}}
{{-- .scroll-1::-webkit-scrollbar-thumb:hover {--}}
{{-- background: #91dfa1;--}}
{{-- }--}}
{{-- .search-bar-one {--}}
{{-- border: none !important;--}}
{{-- border-bottom: #474747 1px solid !important;--}}
{{-- border-radius: 0 !important;--}}
{{-- }--}}

{{-- .search-bar-one::placeholder {--}}
{{-- font-weight: 600;--}}
{{-- font-size: 14px;--}}
{{-- }--}}

{{-- .form-control:focus {--}}
{{-- border-color: #ced4da!important;--}}
{{-- box-shadow: none!important;--}}
{{-- }--}}

{{-- .clientt-box {--}}
{{-- border-radius: 35px !important;--}}
{{-- background-color: #fff;--}}
{{-- border: #707070 1px solid;--}}
{{-- }--}}

{{-- .priority-spnn-1 {--}}
{{-- background-color: rgb(100, 199, 100);--}}
{{-- color: #fff;--}}
{{-- border-radius: 15px;--}}
{{-- font-size: 10px !important;--}}
{{-- }--}}

{{-- .name-spnnnn {--}}
{{-- font-weight: 600;--}}
{{-- }--}}

{{-- .fw-600 {--}}
{{-- font-weight: 600;--}}
{{-- }--}}

{{-- .spn-muted {--}}
{{-- color: #707070;--}}
{{-- font-weight: 600;--}}
{{-- font-size: 14px !important;--}}
{{-- }--}}

{{-- .spn-normal {--}}
{{-- font-weight: 600;--}}
{{-- font-size: 12px !important;--}}
{{-- }--}}
{{-- .nav-itemsss a:hover {--}}
{{-- background-color: #c9cad8;--}}
{{-- color: #000;--}}
{{-- }--}}

{{-- .nav-itemsss a:focus {--}}
{{-- background-color: #474747;--}}
{{-- color: #fff;--}}
{{-- }--}}

{{-- @media (max-width: 999.98px) {--}}
{{-- .nav-texttt {--}}
{{-- display: none;--}}
{{-- }--}}

{{-- .navvv {--}}
{{-- width: 80px !important;--}}
{{-- text-align: center !important;--}}
{{-- }--}}
{{-- }--}}
{{-- body{--}}
{{-- overflow-x: hidden !important;--}}
{{-- }--}}
{{--</style>--}}