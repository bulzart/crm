@extends('template.navbar')
@section('content')
    <section>
        <div class="my-3 ">
            <div class="leads-div py-3 px-4">
                <div class="row g-0">
                    <div class="col">
                        <div class="assigned-leads-div mt-2 mx-3 py-3" style="background-color: #F7F7F7;">
                            <div class="header mx-4 my-2 d-flex justify-content-between">

                                <div class="text-end py-3">
                                    @if(!Auth::guard('admins')->user()->hasRole('fs'))
                                    @if($leads->currentPage() > 1)
                                        <span class="px-2" onclick="window.location.href='{{route('leads',['page' => $leads->currentPage() -1 ])}}'">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34">
                                                <g id="Group_757" data-name="Group 757" transform="translate(0.082)">
                                                    <path id="Path_281" data-name="Path 281" d="M0,0,9.679,7.316,0,14.631"
                                                          transform="translate(20.741 24.316) rotate(180)" fill="none" stroke="#ccc"
                                                          stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                                    <g id="Ellipse_55" data-name="Ellipse 55" transform="translate(-0.082)" fill="none"
                                                       stroke="#ccc" stroke-width="2">
                                                        <circle cx="17" cy="17" r="17" stroke="none"/>
                                                        <circle cx="17" cy="17" r="16" fill="none"/>
                                                    </g>
                                                </g>
                                            </svg>
                                        </span>
                                    @endif
                                        <span class="px-2" onclick="window.location.href='{{route('leads',['page' => $leads->currentPage() +1])}}'">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="34"
                                                     height="34" viewBox="0 0 34 34">
                                                    <defs>

                                                    </defs>
                                                    <g id="Group_758" data-name="Group 758" transform="translate(34.082 34) rotate(180)">
                                                        <g transform="matrix(-1, 0, 0, -1, 34.08, 34)">
                                                            <path id="Path_281-2" data-name="Path 281" d="M0,0,9.679,7.316,0,14.631"
                                                                  transform="translate(13.13 9.68)" fill="none" stroke="#000"
                                                                  stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                                        </g>
                                                        <g id="Ellipse_55" data-name="Ellipse 55" transform="translate(0.082)" fill="none"
                                                           stroke="#000" stroke-width="2">
                                                            <circle cx="17" cy="17" r="17" stroke="none"/>
                                                            <circle cx="17" cy="17" r="16" fill="none"/>
                                                        </g>
                                                    </g>
                                                </svg>
                                        </span>
                                        @endif
                                </div>
                            </div>
                            <div class="content overflow-divvv" style="overflow: auto;">
                                <div class="row mx-3 my-2">
                                    <leads></leads>
                                </div>
                            </div>
                            @if(Auth::user()->hasRole('admin') || Auth::user()->hasRole('salesmanager'))

                            <div class="text-center">
                                <div class="">
                                    <h5>Import leads</h5>
                                </div>
                                <div class="col-11 mx-auto">
                                    <div class="mx-3">
                                        <form action="{{route('importleads')}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <input type="file" name="file" class="form-control">
                                            <div class="mt-3">
                                                <input type="submit" class="mt-2 btn fw-bold py-2 px-5 my-3" value="Submit" style="background-color: #63D4A4; color: #fff; border-radius: 13px;">
                                            </div>
                                        </form>
                                    </div>
                                </div>
</div>
@endif
                        </div>
                    </div>

                </div>
            </div>
    </section>


    @php $csrf_token = csrf_token();@endphp
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"
    ></script>


@endsection

<style>
    html, body {
        overflow-x: hidden !important;
    }

    .grayyy1 {
        color: #88889D;
    }

    .assigned-leads-div {
        border-radius: 25px;
    }

    .t {
        color: #88889D;
    }

    .fw-600 {
        font-weight: 600;

    }

    .fw-500 {
        font-weight: 500;
    }

    .whiteee {
        background-color: #fff;
        border-bottom-left-radius: 0px !important;
        border-bottom-right-radius: 0px !important;
        border-top-left-radius: 15px !important;
        border-top-right-radius: 15px !important;
    }

    .lead-offnen {
        background-color: #88889D;
        color: #fff;
        border-bottom-left-radius: 15px !important;
        border-bottom-right-radius: 15px !important;
        border-top-left-radius: 0px !important;
        border-top-right-radius: 0px !important;
    }

    .overflow-divvv::-webkit-scrollbar {
        width: 0px;
    }

    /* Track */
    .overflow-divvv::-webkit-scrollbar-track {
        background: transparent !important;
        border-radius: 10px;
    }

    /* Handle */
    .overflow-divvv::-webkit-scrollbar-thumb {
        background: #c9cad8;
        border-radius: 10px;
    }

    /* Handle on hover */
    .overflow-divvv::-webkit-scrollbar-thumb:hover {
        background: #707070;
        border-radius: 10px;
    }

    .lead-statistics-header {
        background-color: #F7F7F7;
        border-bottom-left-radius: 0px !important;
        border-bottom-right-radius: 0px !important;
        border-top-left-radius: 15px !important;
        border-top-right-radius: 15px !important;
    }

    .lead-statistics {
        background-color: #F7F7F7;
        border-bottom-left-radius: 15px !important;
        border-bottom-right-radius: 15px !important;
        border-top-left-radius: 0px !important;
        border-top-right-radius: 0px !important;
    }
    .grayyy1 {
    color: #88889D;
}

.assigned-leads-div {
    border-radius: 25px;
}

.t {
    color: #88889D;
}

.fw-600 {
    font-weight: 600;

}

.fw-500 {
    font-weight: 500;
}

.whiteee {
    background-color: #fff;
    border-bottom-left-radius: 0px !important;
    border-bottom-right-radius: 0px !important;
    border-top-left-radius: 15px !important;
    border-top-right-radius: 15px !important;
}

.lead-offnen {
    background-color: #88889D;
    color: #fff;
    border-bottom-left-radius: 15px !important;
    border-bottom-right-radius: 15px !important;
    border-top-left-radius: 0px !important;
    border-top-right-radius: 0px !important;
}

.overflow-divvv::-webkit-scrollbar {
    width: 0px;
}

/* Track */
.overflow-divvv::-webkit-scrollbar-track {
    background: transparent !important;
    border-radius: 10px;
}

/* Handle */
.overflow-divvv::-webkit-scrollbar-thumb {
    background: #c9cad8;
    border-radius: 10px;
}

/* Handle on hover */
.overflow-divvv::-webkit-scrollbar-thumb:hover {
    background: #707070;
    border-radius: 10px;
}

.lead-statistics-header {
    background-color: #F7F7F7;
    border-bottom-left-radius: 0px !important;
    border-bottom-right-radius: 0px !important;
    border-top-left-radius: 15px !important;
    border-top-right-radius: 15px !important;
}

.lead-statistics {
    background-color: #F7F7F7;
    border-bottom-left-radius: 15px !important;
    border-bottom-right-radius: 15px !important;
    border-top-left-radius: 0px !important;
    border-top-right-radius: 0px !important;
}
</style>
<style>
.grayyy1 {
    color: #88889D;
}

.assigned-leads-div {
    border-radius: 25px;
}

.t {
    color: #88889D;
}

.fw-600 {
    font-weight: 600;

}

.fw-500 {
    font-weight: 500;
}

.whiteee {
    background-color: #fff;
    border-bottom-left-radius: 0px !important;
    border-bottom-right-radius: 0px !important;
    border-top-left-radius: 15px !important;
    border-top-right-radius: 15px !important;
}

.lead-offnen {
    background-color: #88889D;
    color: #fff;
    border-bottom-left-radius: 15px !important;
    border-bottom-right-radius: 15px !important;
    border-top-left-radius: 0px !important;
    border-top-right-radius: 0px !important;
}

.overflow-divvv::-webkit-scrollbar {
    width: 0px;
}

/* Track */
.overflow-divvv::-webkit-scrollbar-track {
    background: transparent !important;
    border-radius: 10px;
}

/* Handle */
.overflow-divvv::-webkit-scrollbar-thumb {
    background: #c9cad8;
    border-radius: 10px;
}

/* Handle on hover */
.overflow-divvv::-webkit-scrollbar-thumb:hover {
    background: #707070;
    border-radius: 10px;
}

.lead-statistics-header {
    background-color: #F7F7F7;
    border-bottom-left-radius: 0px !important;
    border-bottom-right-radius: 0px !important;
    border-top-left-radius: 15px !important;
    border-top-right-radius: 15px !important;
}

.lead-statistics {
    background-color: #F7F7F7;
    border-bottom-left-radius: 15px !important;
    border-bottom-right-radius: 15px !important;
    border-top-left-radius: 0px !important;
    border-top-right-radius: 0px !important;
}

input[type="checkbox"i] {
    margin: 5px;
}
</style>
<style>
{{--    .statistics-div {--}}
{{--        background-color: #EFEFEF;--}}
{{--        border-radius: 35px;--}}
{{--        height: 100%;--}}
{{--    }--}}

{{--    .leads-div {--}}
{{--        background-color: #EFEFEF;--}}
{{--        border-radius: 35px;--}}
{{--    }--}}

{{--    .info-content {--}}
{{--        background-color: #fff;--}}
{{--        border-radius: 22px;--}}
{{--    }--}}

{{--    .fw-600 {--}}
{{--        font-weight: 600;--}}
{{--    }--}}
{{--    .gmap_canvas {--}}
{{--                                                        overflow: hidden;--}}
{{--                                                        background: none !important;--}}
{{--                                                        height: auto;--}}
{{--                                                        width: 100%;--}}
{{--                                                        border-radius: 21px !important;--}}
{{--                                                        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;--}}
{{--                                                    }--}}
{{--                                                    .mapouter {--}}
{{--                                                        position: relative;--}}
{{--                                                        text-align: right;--}}
{{--                                                        width: 100%;--}}
{{--                                                    }--}}
{{--    .spn-muted {--}}
{{--        color: #707070;--}}
{{--        font-weight: 600;--}}
{{--        font-size: 14px !important;--}}
{{--    }--}}

{{--    .spn-normal {--}}
{{--        font-weight: 600;--}}
{{--        font-size: 14px !important;--}}
{{--    }--}}

{{--    .header-text {--}}
{{--        color: #525353;--}}
{{--    }--}}

{{--    .assigned-leads-content {--}}
{{--        height: 200px;--}}
{{--        overflow-y: scroll;--}}
{{--        overflow-x: hidden !important;--}}
{{--    }--}}

{{--    body {--}}
{{--        overflow-x: hidden !important;--}}
{{--    }--}}
{{--    <style>--}}
{{--                                                    .mapouter {--}}
{{--                                                        position: relative;--}}
{{--                                                        text-align: right;--}}
{{--                                                        width: 100%;--}}
{{--                                                    }--}}
{{--                                                </style>--}}
{{--                                                <style>--}}
{{--                                                    .gmap_canvas {--}}
{{--                                                        overflow: hidden;--}}
{{--                                                        background: none !important;--}}
{{--                                                        height: auto;--}}
{{--                                                        width: 100%;--}}
{{--                                                        border-radius: 21px !important;--}}
{{--                                                        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;--}}
{{--                                                    }--}}
{{--    .modal-section-1 {--}}
{{--        display: none;--}}
{{--        position: fixed;--}}
{{--        z-index: 1040;--}}
{{--        background-color: rgb(0, 0, 0);--}}
{{--        /* Fallback color */--}}
{{--        background-color: rgba(0, 0, 0, 0.4);--}}
{{--        left: 0;--}}
{{--        top: 0;--}}
{{--        width: 100%;--}}
{{--        /* Full width */--}}
{{--        height: 100%;--}}
{{--        overflow: unset;--}}
{{--    }--}}


{{--    .modal-content {--}}
{{--        background-color: #fefefe;--}}
{{--        margin-top: 3%;--}}
{{--        /* height: 70vh; */--}}
{{--        /* width: 450px; */--}}
{{--		z-index: 1050;--}}
{{--        border: none;--}}
{{--        border-radius: 25px;--}}

{{--    }--}}
{{--                                                </style>--}}
</style>


<script>
    var ids = [];
    var cnt = 0;

    function getid(x) {
        ids[cnt] = x.value;
        cnt++;
    }

    window.data = @json(compact('csrf_token'))
    // function callModalFunct() {
    //             document.getElementById("mod01").style.display = "block";
    //         }
    //         function callModalFunct1() {
    //             document.getElementById("mod02").style.display = "block";
    //         }


</script>
