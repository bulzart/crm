@extends('template.navbar')
@section('content')

    <body>
    <div class="suchen-div my-3 mx-4">
        <form method="post" action="{{route('search')}}">
            @csrf
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
                    <input type="text" class="ms-3 bg-transparent border-0 input-suchen" name="searchname" placeholder="Suche (Kundenname, Vert )">

            </div>
        </div>
        </form>
    </div>

    <div class="kunderportfolio-div mx-4 my-4">
        <div class="header kundenstyle1 px-3 py-3">
            <div class="d-flex justify-content-between ">
                <span class="fs-5 fw-600">Kundenportfolio</span>
                <div class="d-flex justify-content-end col my-auto input-group">
                    <a href="{{route('searchword')}}" style="text-decoration: none;color: #434343;cursor: pointer" class="px-2 my-auto fw-600 border-0">

                                <svg xmlns="http://www.w3.org/2000/svg" width="23" fill="#000"
                                     class="bi bi-sort-down" viewBox="0 0 16 16">
                                    <path
                                        d="M3.5 2.5a.5.5 0 0 0-1 0v8.793l-1.146-1.147a.5.5 0 0 0-.708.708l2 1.999.007.007a.497.497 0 0 0 .7-.006l2-2a.5.5 0 0 0-.707-.708L3.5 11.293V2.5zm3.5 1a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zM7.5 6a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zm0 3a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zm0 3a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1z" />
                                </svg>

                    </a>
                    <div class="dropdown  px-2 fw-600">
                        <button class="dropdown-toggle border-0" type="button" id="dropdownMenuButton1"
                                data-bs-toggle="dropdown" aria-expanded="false">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20.391" height="20.587"
                                 viewBox="0 0 28.391 27.587">
                                <g id="Group_980" data-name="Group 980" transform="translate(1.25)">
                                    <g id="Group_17" data-name="Group 17">
                                        <line id="Line_5" data-name="Line 5" x2="25.891" transform="translate(0 24.217)"
                                              fill="none" stroke="#000" stroke-linecap="round" stroke-width="2.5" />
                                        <line id="Line_6" data-name="Line 6" x2="25.891" transform="translate(0 13.488)"
                                              fill="none" stroke="#000" stroke-linecap="round" stroke-width="2.5" />
                                        <line id="Line_7" data-name="Line 7" x2="25.891" transform="translate(0 2.76)"
                                              fill="none" stroke="#000" stroke-linecap="round" stroke-width="2.5" />
                                        <g id="Ellipse_4" data-name="Ellipse 4" transform="translate(4.926 21.457)"
                                           stroke="#000" stroke-width="1">
                                            <ellipse cx="2.815" cy="3.065" rx="2.815" ry="3.065" stroke="none" />
                                            <ellipse cx="2.815" cy="3.065" rx="2.315" ry="2.565" fill="none" />
                                        </g>
                                        <g id="Ellipse_5" data-name="Ellipse 5" transform="translate(16.186 10.728)"
                                           stroke="#000" stroke-width="1">
                                            <ellipse cx="2.815" cy="3.065" rx="2.815" ry="3.065" stroke="none" />
                                            <ellipse cx="2.815" cy="3.065" rx="2.315" ry="2.565" fill="none" />
                                        </g>
                                        <g id="Ellipse_6" data-name="Ellipse 6" transform="translate(4.926)"
                                           stroke="#000" stroke-width="1">
                                            <ellipse cx="2.815" cy="3.065" rx="2.815" ry="3.065" stroke="none" />
                                            <ellipse cx="2.815" cy="3.065" rx="2.315" ry="2.565" fill="none" />
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </span>

                        </button>
                        <form method="post" action="{{route('search')}}" class="dropdown-menu px-2" aria-labelledby="dropdownMenuButton1">
                            @csrf
                            <label for="from-date" class="fw-600">From</label>
                            <input type="date" class="dropdown-item" name="searchdate1">
                            <label for="to-date" class="fw-600">To</label>
                            <input type="date" class="dropdown-item" name="searchdate2">
                            <input type="submit"
                                   class="border-0 bg-secondary text-light fw-600 my-2 text-center rounded dropdown-item"
                                   value="Submit">
                        </form>
                    </div>
                </div>
{{--                <div class="dropdown">--}}
{{--                    <button class="dropdown-toggle border-0" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">--}}
{{--                        <span>--}}
{{--                            <svg xmlns="http://www.w3.org/2000/svg" width="20.391" height="20.587" viewBox="0 0 28.391 27.587">--}}
{{--                                <g id="Group_980" data-name="Group 980" transform="translate(1.25)">--}}
{{--                                    <g id="Group_17" data-name="Group 17">--}}
{{--                                        <line id="Line_5" data-name="Line 5" x2="25.891" transform="translate(0 24.217)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2.5" />--}}
{{--                                        <line id="Line_6" data-name="Line 6" x2="25.891" transform="translate(0 13.488)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2.5" />--}}
{{--                                        <line id="Line_7" data-name="Line 7" x2="25.891" transform="translate(0 2.76)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2.5" />--}}
{{--                                        <g id="Ellipse_4" data-name="Ellipse 4" transform="translate(4.926 21.457)" stroke="#000" stroke-width="1">--}}
{{--                                            <ellipse cx="2.815" cy="3.065" rx="2.815" ry="3.065" stroke="none" />--}}
{{--                                            <ellipse cx="2.815" cy="3.065" rx="2.315" ry="2.565" fill="none" />--}}
{{--                                        </g>--}}
{{--                                        <g id="Ellipse_5" data-name="Ellipse 5" transform="translate(16.186 10.728)" stroke="#000" stroke-width="1">--}}
{{--                                            <ellipse cx="2.815" cy="3.065" rx="2.815" ry="3.065" stroke="none" />--}}
{{--                                            <ellipse cx="2.815" cy="3.065" rx="2.315" ry="2.565" fill="none" />--}}
{{--                                        </g>--}}
{{--                                        <g id="Ellipse_6" data-name="Ellipse 6" transform="translate(4.926)" stroke="#000" stroke-width="1">--}}
{{--                                            <ellipse cx="2.815" cy="3.065" rx="2.815" ry="3.065" stroke="none" />--}}
{{--                                            <ellipse cx="2.815" cy="3.065" rx="2.315" ry="2.565" fill="none" />--}}
{{--                                        </g>--}}
{{--                                    </g>--}}
{{--                                </g>--}}
{{--                            </svg>--}}
{{--                        </span>--}}
{{--                    </button>--}}
{{--                    <form method="post" action="{{route('search')}}" class="dropdown-menu px-2" aria-labelledby="dropdownMenuButton2">--}}
{{--                        @csrf--}}
{{--                        <label for="from-date" class="fw-600">From</label>--}}
{{--                        <input type="date" name="from-date" class="dropdown-item" name="searchdate1">--}}
{{--                        <label for="to-date" class="fw-600">To</label>--}}
{{--                        <input type="date" name="to-date" class="dropdown-item" name="searchdate2">--}}
{{--                        <input type="submit" class="border-0 bg-secondary text-light fw-600 my-2 text-center rounded dropdown-item" value="Submit">--}}
{{--                    </form>--}}
{{--                </div>--}}

            </div>
        </div>

        <div class="content kundenstyle2 px-3">
            <div class="table-responsive bg-color1 ovrflw kundenstyle2" style="overflow: auto; height: 62vh;">
                <table class="table table-borderless bg-white ">
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
                        <tbody id="body-table-edit" onclick="window.location.href='{{route('costumer_form', $datId)}}'" style="cursor: pointer; border: none;border-bottom: 12px #F0F0F0 solid;border-top: 5px #F0F0F0 solid;">
                        <tr>
                            <th scope="row" style="font-weight: 400 !important;">{{$data[$i]->id}}</th>
                            <td>{{$data[$i]->first_name}}</td>
                            <td>{{$data[$i]->last_name}}</td>
                            <td>{{$data[$i]->status}}</td>
                            @if(!empty($grundversicherungP[$i]))
                            <td>Grundversicherung</td>
                            <td>{{$grundversicherungP[$i]->total_commisions_PG}} CHF</td>

                                @if($grundversicherungP[$i]->status_PG == 'notselected')
                                    <td class="status1 border-0 fw-600 bg-secondary" id="status">{{strtoupper($grundversicherungP[$i]->status_PG)}}</td>
                                @endif
                                @if($grundversicherungP[$i]->status_PG == 'Aufgenomen')
                                    <td class="status1 border-0 fw-600 greencol" id="status">
                                        {{strtoupper($grundversicherungP[$i]->status_PG)}}</td>
                                @endif
                                @if($grundversicherungP[$i]->status_PG == 'Offen')
                                    <td class="status1 border-0 fw-600 bg-warning" id="status">{{strtoupper($grundversicherungP[$i]->status_PG)}}</td>
                                @endif
                                @if($grundversicherungP[$i]->status_PG == 'Provisionert')
                                    <td class="status1 border-0 fw-600 bg-success" id="status">{{strtoupper($grundversicherungP[$i]->status_PG)}}</td>
                                @endif
                                @if($grundversicherungP[$i]->status_PG == 'Zuruckgezogen')
                                    <td class="status1 border-0 fw-600 bg-info" id="status">{{strtoupper($grundversicherungP[$i]->status_PG)}}</td>
                                @endif
                                @if($grundversicherungP[$i]->status_PG == 'Abgelehnt')
                                    <td class="status1 border-0 fw-600 bg-danger" id="status">{{strtoupper($grundversicherungP[$i]->status_PG)}}</td>
                                @endif
                            @endif
                        </tr>
                        <tr id="table-row-edit">
                            <th scope="row"></th>
                            <td></td>
                            <td></td>
                            <td></td>
                            @if(!empty($retchsschutzP[$i]))
                            <td>Rechtsschutz</td>
                            <td>{{$retchsschutzP[$i]->total_commisions_PR}} CHF</td>
                                @if($retchsschutzP[$i]->status_PR == 'notselected')
                                    <td class="status1 bg-secondary" id="status">{{strtoupper($retchsschutzP[$i]->status_PR)}}</td>
                                @endif
                                @if($retchsschutzP[$i]->status_PR == 'Aufgenomen')
                                    <td class="status1 greencol border-0 fw-600" id="status">{{strtoupper($retchsschutzP[$i]->status_PR)}}</td>
                                @endif
                                @if($retchsschutzP[$i]->status_PR == 'Offen')
                                    <td class="status1 border-0 fw-600 bg-warning" id="status">{{strtoupper($retchsschutzP[$i]->status_PR)}}</td>
                                @endif
                                @if($retchsschutzP[$i]->status_PR == 'Provisionert')
                                    <td class="status1 border-0 fw-600 bg-success" id="status">{{strtoupper($retchsschutzP[$i]->status_PR)}}</td>
                                @endif
                                @if($retchsschutzP[$i]->status_PR == 'Zuruckgezogen')
                                    <td class="status1 border-0 fw-600 bg-info" id="status">{{strtoupper($retchsschutzP[$i]->status_PR)}}</td>
                                @endif
                                @if($retchsschutzP[$i]->status_PR == 'Abgelehnt')
                                    <td class="status1 border-0 fw-600 bg-danger" id="status">{{strtoupper($retchsschutzP[$i]->status_PR)}}</td>
                                @endif
                                @endif
                        </tr>
                        <tr id="table-row-edit">
                            <th scope="row"></th>
                            <td></td>
                            <td></td>
                            <td></td>
                            @if(!empty($vorsorgeP[$i]))
                            <td>Vorsorge</td>
                            <td>{{$vorsorgeP[$i]->total_commisions_PV}} CHF</td>
                                @if($vorsorgeP[$i]->status_PV == 'notselected')
                                    <td class="status1 bg-secondary" id="status">{{strtoupper($vorsorgeP[$i]->status_PV)}}</td>
                                @endif
                                @if($vorsorgeP[$i]->status_PV == 'Aufgenomen')
                                    <td class="status1 greencol border-0 fw-600" id="status">{{strtoupper($vorsorgeP[$i]->status_PV)}}</td>
                                @endif
                                @if($vorsorgeP[$i]->status_PV == 'Offen')
                                    <td class="status1 border-0 fw-600 bg-warning" id="status">{{strtoupper($vorsorgeP[$i]->status_PV)}}</td>
                                @endif
                                @if($vorsorgeP[$i]->status_PV == 'Provisionert')
                                    <td class="status1 border-0 fw-600 bg-success" id="status">{{strtoupper($vorsorgeP[$i]->status_PV)}}</td>
                                @endif
                                @if($vorsorgeP[$i]->status_PV == 'Zuruckgezogen')
                                    <td class="status1 border-0 fw-600 bg-info" id="status">{{strtoupper($vorsorgeP[$i]->status_PV)}}</td>
                                @endif
                                @if($vorsorgeP[$i]->status_PV == 'Abgelehnt')
                                    <td class="status1 border-0 fw-600 bg-danger" id="status">{{strtoupper($vorsorgeP[$i]->status_PV)}}</td>
                                @endif
                            @endif
                        </tr>
                        <tr id="table-row-edit">
                            <th scope="row"></th>
                            <td></td>
                            <td></td>
                            <td></td>
                            @if(!empty($zusatzversicherungP[$i]))
                            <td>Zusatzversicherung</td>
                            <td>{{$zusatzversicherungP[$i]->total_commisions_PZ}} CHF</td>
                                @if($zusatzversicherungP[$i]->status_PZ == 'notselected')
                                    <td class="status1 bg-secondary" id="status">{{strtoupper($zusatzversicherungP[$i]->status_PZ)}}</td>
                                @endif
                                @if($zusatzversicherungP[$i]->status_PZ == 'Aufgenomen')
                                    <td class="status1 greencol border-0 fw-600" id="status">{{strtoupper($zusatzversicherungP[$i]->status_PZ)}}</td>
                                @endif
                                @if($zusatzversicherungP[$i]->status_PZ == 'Offen')
                                    <td class="status1 border-0 fw-600 bg-warning" id="status">{{strtoupper($zusatzversicherungP[$i]->status_PZ)}}</td>
                                @endif
                                @if($zusatzversicherungP[$i]->status_PZ == 'Provisionert')
                                    <td class="status1 border-0 fw-600 bg-success" id="status">{{strtoupper($zusatzversicherungP[$i]->status_PZ)}}</td>
                                @endif
                                @if($zusatzversicherungP[$i]->status_PZ == 'Zuruckgezogen')
                                    <td class="status1 border-0 fw-600 bg-info" id="status">{{strtoupper($zusatzversicherungP[$i]->status_PZ)}}</td>
                                @endif
                                @if($zusatzversicherungP[$i]->status_PZ == 'Abgelehnt')
                                    <td class="status1 border-0 fw-600 bg-danger" id="status">{{strtoupper($zusatzversicherungP[$i]->status_PZ)}}</td>
                                @endif
                            @endif
                        </tr>
                        <tr id="table-row-edit">
                            <th scope="row"></th>
                            <td></td>
                            <td></td>
                            <td></td>
                            @if(!empty($autoversicherungP[$i]))
                            <td>Autoversicherung</td>
                            <td>{{$autoversicherungP[$i]->total_commisions_PA}} CHF</td>
                                @if($autoversicherungP[$i]->status_PA == 'notselected')
                                    <td class="status1 bg-secondary" id="status">{{strtoupper($autoversicherungP[$i]->status_PA)}}</td>
                                @endif
                                @if($autoversicherungP[$i]->status_PA == 'Aufgenomen')
                                    <td class="status1 greencol border-0 fw-600" id="status">{{strtoupper($autoversicherungP[$i]->status_PA)}}</td>
                                @endif
                                @if($autoversicherungP[$i]->status_PA == 'Offen')
                                    <td class="status1 border-0 fw-600 bg-warning" id="status">{{strtoupper($autoversicherungP[$i]->status_PA)}}</td>
                                @endif
                                @if($autoversicherungP[$i]->status_PA == 'Provisionert')
                                    <td class="status1 border-0 fw-600 bg-success" id="status">{{strtoupper($autoversicherungP[$i]->status_PA)}}</td>
                                @endif
                                @if($autoversicherungP[$i]->status_PA == 'Zuruckgezogen')
                                    <td class="status1 border-0 fw-600 bg-info" id="status">{{strtoupper($autoversicherungP[$i]->status_PA)}}</td>
                                @endif
                                @if($autoversicherungP[$i]->status_PA == 'Abgelehnt')
                                    <td class="status1 border-0 fw-600 bg-danger" id="status">{{strtoupper($autoversicherungP[$i]->status_PA)}}</td>
                                @endif
                            @endif
                        </tr>
                        <tr id="table-row-edit">
                            <th scope="row"></th>
                            <td></td>
                            <td></td>
                            <td></td>
                            @if(!empty($hausratP[$i]))
                            <td>Hausrat</td>
                            <td>{{$hausratP[$i]->total_commisions_PH}} CHF</td>
                                @if($hausratP[$i]->status_PH == 'notselected')
                                    <td class="status1 bg-secondary" id="status">{{strtoupper($hausratP[$i]->status_PH)}}</td>
                                @endif
                                @if($hausratP[$i]->status_PH == 'Aufgenomen')
                                    <td class="status1 greencol border-0 fw-600" id="status">{{strtoupper($hausratP[$i]->status_PH)}}</td>
                                @endif
                                @if($hausratP[$i]->status_PH == 'Offen')
                                    <td class="status1 border-0 fw-600 bg-warning" id="status">{{strtoupper($hausratP[$i]->status_PH)}}</td>
                                @endif
                                @if($hausratP[$i]->status_PH == 'Provisionert')
                                    <td class="status1 border-0 fw-600 bg-success" id="status">{{strtoupper($hausratP[$i]->status_PH)}}</td>
                                @endif
                                @if($hausratP[$i]->status_PH == 'Zuruckgezogen')
                                    <td class="status1 border-0 fw-600 bg-info" id="status">{{strtoupper($hausratP[$i]->status_PH)}}</td>
                                @endif
                                @if($hausratP[$i]->status_PH == 'Abgelehnt')
                                    <td class="status1 border-0 fw-600 bg-danger" id="status">{{strtoupper($hausratP[$i]->status_PH)}}</td>
                                @endif
                            @endif
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

        font-weight: 600;
        border-radius: 10px;
        color: #fff;
        display: flex;
        justify-content: center;
    }

    .status2 {
        /*background-color: #239654 !important;*/
        font-weight: 600;
        border-radius: 10px;
        color: #fff;
        display: flex;
        justify-content: center;
    }

    .status3 {
        /*background-color: #F1CA4B !important;*/
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
    .greencol{
        background-color: rgb(100, 199, 100) !important;
    }
</style>

