@extends('template.navbar')
@section('content')
    <section>
        <div class="my-3 ">
            <div class="leads-div py-3 px-4">
                <div class="row g-0">
                    <div class="col">
                        <div class="assigned-leads-div mt-2 mx-3 py-3" style="background-color: #F7F7F7;">
                            <div class="header mx-4 my-2 d-flex justify-content-between">
                                <span class="fs-4 fw-bold">Assigned Leads</span>
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
  <h5>Import leads</h5>
  <form action="{{route('importleads')}}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="file" name="file" class="form-control">
    <input type="submit" class="mt-2 btn py-2"  style="background-color: #63D4A4; color: #fff; border-radius: 13px;">
  </form>
</div>
@endif
                        </div>
                    </div>
                    <div class="col-12 col-lg-3">
                        <div class="lead-statistics-header mt-2 mx-3 py-3">
                            <div class="header mx-4 my-2">
                                <span class="fs-4 fw-bold">Lead Statistics</span>
                            </div>
                        </div>
                        <hr class="text-black"
                            style="color: #fff !important; height: 2px; margin: 0 !important; opacity: 1;">
                        <div class="lead-statistics  mx-3">
                            <div class="content  overflow-divvv" style="height: 80vh; overflow: auto;">
                                <div class="instagram-div my-2 mx-3">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                         width="39" height="39" viewBox="0 0 39 39">
                                        <defs>
                                            <clipPath id="clip-path">
                                                <rect id="Rectangle_435" data-name="Rectangle 435" width="17.261"
                                                      height="17.215" fill="#88889d"/>
                                            </clipPath>
                                        </defs>
                                        <g id="Group_975" data-name="Group 975" transform="translate(-1519 -216)">
                                            <g id="Ellipse_386" data-name="Ellipse 386" transform="translate(1519 216)"
                                               fill="none" stroke="#88889d" stroke-width="2">
                                                <circle cx="19.5" cy="19.5" r="19.5" stroke="none"/>
                                                <circle cx="19.5" cy="19.5" r="18.5" fill="none"/>
                                            </g>
                                            <g id="Group_966" data-name="Group 966"
                                               transform="translate(1530.266 227.459)">
                                                <g id="Group_644" data-name="Group 644" transform="translate(0 0)"
                                                   clip-path="url(#clip-path)">
                                                    <path id="Path_1482" data-name="Path 1482"
                                                          d="M8.692.081a33.358,33.358,0,0,1,4.149.03c2.711.342,4.2,1.807,4.338,4.51a75.707,75.707,0,0,1-.092,8.539,4.156,4.156,0,0,1-3.993,3.95c-2.971.139-5.958.14-8.929,0A4.141,4.141,0,0,1,.158,13.181,69.412,69.412,0,0,1,.124,4.412C.321,1.623,2.181.121,5.005.021,6.233-.022,7.463.014,8.692.014c0,.022,0,.045,0,.067m6.991,8.565h0c0-1.151.017-2.3,0-3.453-.042-2.335-1.265-3.568-3.614-3.6q-3.412-.046-6.825,0c-2.4.028-3.633,1.233-3.674,3.626q-.059,3.412,0,6.827c.041,2.4,1.263,3.608,3.656,3.657,1.751.035,3.5.025,5.256.022a17.393,17.393,0,0,0,2.115-.07,3.174,3.174,0,0,0,3.08-3.4c.035-1.2.006-2.406.006-3.609"
                                                          transform="translate(0 0)" fill="#88889d"/>
                                                    <path id="Path_1483" data-name="Path 1483"
                                                          d="M16.078,11.687A4.431,4.431,0,1,1,11.652,16.1a4.378,4.378,0,0,1,4.426-4.414m.037,7.294a2.837,2.837,0,0,0,2.846-2.9,2.88,2.88,0,1,0-5.76.066,2.84,2.84,0,0,0,2.913,2.836"
                                                          transform="translate(-7.458 -7.481)" fill="#88889d"/>
                                                    <path id="Path_1484" data-name="Path 1484"
                                                          d="M33.975,9.188a1.018,1.018,0,0,1,1.158-.9.976.976,0,0,1,.886,1.091,1.029,1.029,0,0,1-1.118.952,1.044,1.044,0,0,1-.927-1.144"
                                                          transform="translate(-21.743 -5.298)" fill="#88889d"/>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>

                                </span> <span class="fs-5 fw-500 ps-2">
                                    Instagram: {{$total['instagram']}}
                                </span>
                                </div>

                                <div class="instagram-div my-2 mx-3">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="39" height="39" viewBox="0 0 39 39">
                                        <g id="Group_976" data-name="Group 976" transform="translate(-1519 -273)">
                                            <g id="Ellipse_384" data-name="Ellipse 384" transform="translate(1519 273)"
                                               fill="none" stroke="#88889d" stroke-width="2">
                                                <circle cx="19.5" cy="19.5" r="19.5" stroke="none"/>
                                                <circle cx="19.5" cy="19.5" r="18.5" fill="none"/>
                                            </g>
                                            <path id="Path_1922" data-name="Path 1922"
                                                  d="M7.032,4.474a1.227,1.227,0,0,1,1.14-1,5.118,5.118,0,0,1,.678-.04c.553-.01,1.1-.005,1.653-.005.06,0,.121-.01.191-.015V.135c-.2-.025-.387-.055-.578-.065C9.207.044,8.3-.031,7.394.014A4.23,4.23,0,0,0,4.219,1.5,4.326,4.326,0,0,0,3.27,3.646a8.592,8.592,0,0,0-.1,1.2c-.015.819-.005,1.637-.005,2.456,0,.211,0,.211-.2.211-.924,0-1.848,0-2.773-.005C.04,7.5,0,7.548,0,7.689Q.008,9.347,0,11c0,.141.045.176.181.176.929-.005,1.858,0,2.793,0h.181v9.162H6.967V11.18h.181c.929,0,1.858-.005,2.788,0,.141,0,.181-.045.2-.176.1-.784.2-1.567.3-2.351.045-.347.09-.688.136-1.035,0-.03-.005-.06-.005-.111h-.2c-1.075,0-2.155-.005-3.23,0-.136,0-.186-.03-.181-.176.005-.743-.005-1.487.005-2.235a3.242,3.242,0,0,1,.07-.623"
                                                  transform="translate(1533.105 282.378)" fill="#88889d"/>
                                        </g>
                                    </svg>

                                </span> <span class="fs-5 fw-500 ps-2">
                                    Facebook: {{$total['facebook']}}
                                </span>
                                </div>

                                <div class="instagram-div my-2 mx-3">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="39" height="39" viewBox="0 0 39 39">
                                        <g id="Group_977" data-name="Group 977" transform="translate(-1519 -331)">
                                            <g id="Ellipse_385" data-name="Ellipse 385" transform="translate(1519 331)"
                                               fill="none" stroke="#88889d" stroke-width="2">
                                                <circle cx="19.5" cy="19.5" r="19.5" stroke="none"/>
                                                <circle cx="19.5" cy="19.5" r="18.5" fill="none"/>
                                            </g>
                                            <path id="Path_1923" data-name="Path 1923"
                                                  d="M0,10.4a10.4,10.4,0,1,1,10.4,10.4A10.4,10.4,0,0,1,0,10.4m9.745-9A4.572,4.572,0,0,0,7.293,3.81,9.923,9.923,0,0,0,6.78,4.943a16.491,16.491,0,0,0,2.965.373ZM5.521,4.6a11.54,11.54,0,0,1,.625-1.4,8.763,8.763,0,0,1,.776-1.212A9.114,9.114,0,0,0,3.964,3.963,10.767,10.767,0,0,0,5.521,4.6ZM4.56,9.745a17.35,17.35,0,0,1,.567-3.909A11.826,11.826,0,0,1,3.093,4.97a9.055,9.055,0,0,0-1.77,4.775H4.56ZM6.379,6.184a16.015,16.015,0,0,0-.52,3.562H9.745V6.615a17.552,17.552,0,0,1-3.367-.431m4.666.43V9.745H14.93a16.09,16.09,0,0,0-.518-3.562,17.655,17.655,0,0,1-3.367.431ZM5.86,11.045a15.924,15.924,0,0,0,.518,3.562,17.7,17.7,0,0,1,3.367-.43V11.045Zm5.185,0v3.13a17.551,17.551,0,0,1,3.367.431,16,16,0,0,0,.52-3.562Zm-4.265,4.8a10.153,10.153,0,0,0,.513,1.133,4.581,4.581,0,0,0,2.452,2.41V15.476a16.491,16.491,0,0,0-2.965.373ZM6.923,18.8a8.652,8.652,0,0,1-.777-1.212,11.551,11.551,0,0,1-.625-1.4,10.87,10.87,0,0,0-1.557.637A9.114,9.114,0,0,0,6.922,18.8Zm-1.8-3.851a17.352,17.352,0,0,1-.568-3.909H1.323a9.044,9.044,0,0,0,1.77,4.775,11.8,11.8,0,0,1,2.034-.867M13.868,18.8a9.1,9.1,0,0,0,2.956-1.976,10.856,10.856,0,0,0-1.555-.637,11.444,11.444,0,0,1-.625,1.4,8.763,8.763,0,0,1-.776,1.212m-2.824-3.33v3.916A4.572,4.572,0,0,0,13.5,16.98a9.923,9.923,0,0,0,.513-1.133,16.38,16.38,0,0,0-2.965-.372Zm4.619-.521a11.8,11.8,0,0,1,2.034.867,9.044,9.044,0,0,0,1.77-4.775H16.232a17.352,17.352,0,0,1-.568,3.909m3.8-5.208A9.044,9.044,0,0,0,17.7,4.97a11.8,11.8,0,0,1-2.034.867,17.412,17.412,0,0,1,.568,3.909ZM14.644,3.2a11.747,11.747,0,0,1,.626,1.4,10.779,10.779,0,0,0,1.554-.637,9.1,9.1,0,0,0-2.956-1.975A8.727,8.727,0,0,1,14.644,3.2M14.01,4.943A10.214,10.214,0,0,0,13.5,3.81,4.577,4.577,0,0,0,11.045,1.4V5.314a16.491,16.491,0,0,0,2.965-.373Z"
                                                  transform="translate(1527.891 340.378)" fill="#88889d"/>
                                        </g>
                                    </svg>


                                </span> <span class="fs-5 fw-500 ps-2">
                                    Sanascout: {{$total['sana']}}
                                </span>
                                </div>
                            </div>
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
</style>
{{--<style>--}}
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
{{--</style>--}}


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
