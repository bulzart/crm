@extends('template.navbar')
    @section('content')
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/css/style.css">
    <title>Costumers</title>
</head>

<body>
<section>
    <div class="px-4">
        <div class="row">
            <div class="col my-auto">
                <div class="search-divvv">
                    <div class="input-group ">
                            <span class="px-3 my-auto">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                     class="bi bi-search" viewBox="0 0 16 16">
                                    <path
                                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                </svg>
                            </span>
                        <form method="get" action="{{route('search')}}">
                            @csrf
                        <input type="text" class="form-control search-bar-one" name="searchname"
                               placeholder="Suche (Kundenname,Vertragsnummer)" aria-label="Username"
                               aria-describedby="basic-addon1">
                            <input type="date"  class="dropdown-item" name="searchdate1" style="display: none">
                            <input type="date" class="dropdown-item" name="searchdate2" style="display: none">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-3 text-right my-2">
                <div class="pull-right text-end">
                    <button class="border-0 px-2 pt-1 pb-2 me-2"
                            style="background-color: #C4C6D2; border-radius: 12px;">
                        <svg xmlns="http://www.w3.org/2000/svg" height="22px" fill="#fff" class="bi bi-bell"
                             viewBox="0 0 16 16">
                            <path
                                d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z" />
                        </svg>
                    </button>
                    <button class="border-0 px-2 pt-1 pb-2" style="background-color: #C4C6D2; border-radius: 12px;">
                        <svg xmlns="http://www.w3.org/2000/svg" height="22px" viewBox="0 0 28.063 28.637">
                            <g id="Group_2" data-name="Group 2" transform="translate(1 1)">
                                <circle id="Ellipse_3" data-name="Ellipse 3" cx="6.803" cy="6.803" r="6.803"
                                        transform="translate(6.229)" fill="none" stroke="#fff" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" />
                                <path id="Path_1" data-name="Path 1" d="M2,102.218a13.032,13.032,0,0,1,26.063,0"
                                      transform="translate(-2 -75.581)" fill="none" stroke="#fff"
                                      stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                      stroke-width="2" />
                            </g>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="mx-3">
        <div class="clientt-box">
            <div class="header-third-box row mx-4">
                <div class="col">
                    <div class=" py-3">
                            <span class="fs-4 name-spnnnn">
                                Kundenportfolio
                            </span>
                    </div>
                </div>
                <div class="d-flex justify-content-end col my-auto input-group">
                    <a href="{{route('searchword')}}" style="text-decoration: none;color: #434343;cursor: pointer" class="px-2 my-auto fw-600 border-0 bg-white">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                     class="bi bi-sort-down" viewBox="0 0 16 16">
                                    <path
                                        d="M3.5 2.5a.5.5 0 0 0-1 0v8.793l-1.146-1.147a.5.5 0 0 0-.708.708l2 1.999.007.007a.497.497 0 0 0 .7-.006l2-2a.5.5 0 0 0-.707-.708L3.5 11.293V2.5zm3.5 1a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zM7.5 6a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zm0 3a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zm0 3a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1z" />
                                </svg>
                            </span>
                        Sortiren
                    </a>
                    <div class="dropdown dropstart px-2 fw-600">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi bi-funnel" viewBox="0 0 16 16">
                                        <path
                                            d="M1.5 1.5A.5.5 0 0 1 2 1h12a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.128.334L10 8.692V13.5a.5.5 0 0 1-.342.474l-3 1A.5.5 0 0 1 6 14.5V8.692L1.628 3.834A.5.5 0 0 1 1.5 3.5v-2zm1 .5v1.308l4.372 4.858A.5.5 0 0 1 7 8.5v5.306l2-.666V8.5a.5.5 0 0 1 .128-.334L13.5 3.308V2h-11z" />
                                    </svg>
                                </span>
                            Filter
                        </button>
                        <form method="get" action="{{route('search')}}" class="dropdown-menu px-2" aria-labelledby="dropdownMenuButton1">
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
            </div>
            <div class="my-3 mx-3">
                <div class="row my-1 mx-3 ">
                    <div class="col g-0">
                        <div class="">
                                <span class="spn-muted">
                                    ID
                                </span>
                        </div>
                    </div>
                    <div class="col g-0">
                        <div class="">
                                <span class="spn-muted">
                                    Vorname
                                </span>
                        </div>
                    </div>
                    <div class="col g-0">
                        <div class="">
                                <span class="spn-muted">
                                    Nachname
                                </span>
                        </div>
                    </div>
                    <div class="col g-0">
                        <div class="">
                                <span class="spn-muted">
                                    Mandatiert
                                </span>
                        </div>
                    </div>
                    <div class="col g-0">
                        <div class="">
                                <span class="spn-muted">
                                    Abschlusse
                                </span>
                        </div>
                    </div>
                    <div class="col g-0">
                        <div class="">
                                <span class="spn-muted">
                                    Pramiee
                                </span>
                        </div>
                    </div>
                    <div class="col g-0">
                        <div class="">
                                <span class="spn-muted">
                                    <div class="col g-0">
                                        <div class="">
                                            <span class="spn-muted">
                                                Status
                                            </span>
                                        </div>
                                    </div>
                                </span>
                        </div>
                    </div>
                </div>
                <hr class="">
            </div>
            <div class="mx-3 my-2 ">
                <div class="scroll-1" style="font-size: 14px;">
                    @foreach($data as $dat)
                        <div class="row my-1 mx-3">
                            <div class="col g-0">
                                <div class="">
                                <span class="spn-normal">
                                    {{$dat->id}}
                                </span>
                                </div>
                            </div>
                            <div class="col g-0">
                                <div class="">
                                <span class="spn-normal">
                                    {{$dat->first_name}}
                                </span>
                                </div>
                            </div>
                            <div class="col g-0">
                                <div class="">
                                <span class="spn-normal">
                                    {{$dat->last_name}}
                                </span>
                                </div>
                            </div>
                            <div class="col g-0">
                                <div class="">
                                <span class="spn-normal">
                                    {{$dat->status_task}}
                                </span>
                                </div>
                            </div>
                            <div class="col g-0">
                                <div class="">
                                <span class="spn-normal">
                                    Grundversicherung
                                </span>
                                </div>
                            </div>
                            <div class="col g-0">
                                <div class="">
                                <span class="spn-normal">
                                    251.00 CHF
                                </span>
                                </div>
                            </div>
                            <div class="col g-0">
                                <div class=" ">
                                    <button type="button" class="w-100 priority-spnn-1 border-0 fw-600">
                                        AUFGENOMMEN
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="row my-1 mx-3">
                            <div class="col g-0">
                                <div class="">
                                <span class="spn-normal">

                                </span>
                                </div>
                            </div>
                            <div class="col g-0">
                                <div class="">
                                <span class="spn-normal">

                                </span>
                                </div>
                            </div>
                            <div class="col g-0">
                                <div class="">
                                <span class="spn-normal">

                                </span>
                                </div>
                            </div>
                            <div class="col g-0">
                                <div class="">
                                <span class="spn-normal">

                                </span>
                                </div>
                            </div>
                            <div class="col g-0">
                                <div class="">
                                <span class="spn-normal">
                                    Zusatversicherung
                                </span>
                                </div>
                            </div>
                            <div class="col g-0">
                                <div class="">
                                <span class="spn-normal">
                                    45.00 CHF
                                </span>
                                </div>
                            </div>
                            <div class="col g-0">
                                <div class=" ">
                                    <button type="button" class="w-100 priority-spnn-1 border-0 fw-600">
                                        AUFGENOMMEN
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="row my-1 mx-3">
                            <div class="col g-0">
                                <div class="">
                                <span class="spn-normal">

                                </span>
                                </div>
                            </div>
                            <div class="col g-0">
                                <div class="">
                                <span class="spn-normal">

                                </span>
                                </div>
                            </div>
                            <div class="col g-0">
                                <div class="">
                                <span class="spn-normal">

                                </span>
                                </div>
                            </div>
                            <div class="col g-0">
                                <div class="">
                                <span class="spn-normal">

                                </span>
                                </div>
                            </div>
                            <div class="col g-0">
                                <div class="">
                                <span class="spn-normal">
                                    Autoversicherung
                                </span>
                                </div>
                            </div>
                            <div class="col g-0">
                                <div class="">
                                <span class="spn-normal">
                                    2250.00 CHF
                                </span>
                                </div>
                            </div>
                            <div class="col g-0">
                                <div class=" ">
                                    <button type="button" class="w-100 priority-spnn-1 border-0 fw-600 bg-success">
                                        PROVISIONERT
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="row my-1 mx-3">
                            <div class="col g-0">
                                <div class="">
                                <span class="spn-normal">

                                </span>
                                </div>
                            </div>
                            <div class="col g-0">
                                <div class="">
                                <span class="spn-normal">

                                </span>
                                </div>
                            </div>
                            <div class="col g-0">
                                <div class="">
                                <span class="spn-normal">

                                </span>
                                </div>
                            </div>
                            <div class="col g-0">
                                <div class="">
                                <span class="spn-normal">

                                </span>
                                </div>
                            </div>
                            <div class="col g-0">
                                <div class="">
                                <span class="spn-normal">
                                    Lebensversicherung
                                </span>
                                </div>
                            </div>
                            <div class="col g-0">
                                <div class="">
                                <span class="spn-normal">
                                    250.00 CHF
                                </span>
                                </div>
                            </div>
                            <div class="col g-0">
                                <div class=" ">
                                    <button type="button" class="w-100 priority-spnn-1 border-0 fw-600 bg-warning">
                                        OFFEN
                                    </button>
                                </div>
                            </div>
                        </div>
                        <hr>
                    @endforeach
                </div>

            </div>

        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous">
</script>

@endsection
<style>
    .scroll-1 {
        height: 300px;
        overflow-y: scroll;
        overflow-x: hidden !important;
    }
    .scroll-1::-webkit-scrollbar {
        width: 4px !important;
    }
    /* Track */
    .scroll-1::-webkit-scrollbar-track {
        background: transparent !important;
        border-radius: 10px;
    }
    /* Handle */
    .scroll-1::-webkit-scrollbar-thumb {
        background: #91dfa1;
        border-radius: 10px;
    }
    /* Handle on hover */
    .scroll-1::-webkit-scrollbar-thumb:hover {
        background: #91dfa1;
    }
    .search-bar-one {
        border: none !important;
        border-bottom: #474747 1px solid !important;
        border-radius: 0 !important;
    }

    .search-bar-one::placeholder {
        font-weight: 600;
        font-size: 14px;
    }

    .form-control:focus {
        border-color: #ced4da!important;
        box-shadow: none!important;
    }

    .clientt-box {
        border-radius: 35px !important;
        background-color: #fff;
        border: #707070 1px solid;
    }

    .priority-spnn-1 {
        background-color: rgb(100, 199, 100);
        color: #fff;
        border-radius: 15px;
        font-size: 10px !important;
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
        font-size: 12px !important;
    }
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




</body>

</html>


{{--<html>--}}
{{--@extends('template.navbar')--}}
{{--@section('content')--}}
{{--    <head>--}}
{{--        <title>Costumers</title>--}}
{{--    </head>--}}
{{--<div class="col-12 text-center" style="background: #f7f7f7;">--}}

{{--    <form action="{{route('search')}}">--}}
{{--        <input class="form-control" type="text" name="searchname" placeholder="Search...">--}}
{{--        <div class="d-inline">--}}
{{--        <input type="date" name="searchdate1">--}}
{{--        <input type="date" name="searchdate2">--}}
{{--        <input class="btn btn-success" type="submit" value="Save">--}}
{{--    </form>--}}
{{--    <a href="{{route('searchword')}}" class="btn btn-info">A/Z</a>--}}
{{--</div>--}}

{{--    @foreach($data as $dat)--}}
{{--    <div class="p-4" style="border-radius: 25px;margin-bottom: 10px; background: #fff;">--}}
{{--        <p style="font-size: 23px;">{{ucfirst($dat->first_name)}} ({{$dat->birthdate}})</p>--}}

{{--      @if($dat->contracts != null)--}}
{{--            {{$contracts[$dat->id]->con1}}--}}
{{--            <br>--}}
{{--            {{$contracts[$dat->id]->con2}}--}}
{{--        @endif--}}





{{--</div>--}}
{{--    @endforeach--}}
{{--</div>--}}
{{--@endsection--}}
{{--</html>--}}
