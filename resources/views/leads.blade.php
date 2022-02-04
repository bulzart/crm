@extends('template.navbar')
@section('content')

<section>
    <div class="container-fluid">
        <div class="row">

            <div class="col my-3">

                <div class="leads-div py-3 px-4">
                


                    <div class="assigned-leads py-3" id="app">
                        <div class="assigned-leads-header row">
                            <div class="col">
                                <span class="fw-600 fs-5 header-text">Assigned Leads</span>
                            </div>
                            <div class="col text-end">
                  <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                         class="bi bi-chevron-left" viewBox="0 0 16 16">
                      <path fill-rule="evenodd"
                            d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                    </svg>
                  </span>
                                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                         class="bi bi-chevron-right" viewBox="0 0 16 16">
                      <path fill-rule="evenodd"
                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                    </svg>
                  </span>
                            </div>
                        </div>
<leads></leads>
                </div>
           
                


</div>
            </div>

            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 my-3">
                <div class="statistics-div">
                    <div class="statistics-header mx-4 py-3">
                <span class="fs-4 fw-600 header-text">
                  Statistics
                </span>
                    </div>


                    <div class="statistics-content mx-4">
                        <div class="py-1"><span class="fs-5">7 Marketing</span></div>
                        <div class="py-1"><span class="fs-5">Duration per Lead</span></div>
                        <div class="py-1"><span class="fs-5">Instagram: {{$total['instagram']}}</span></div>
                        <div class="py-1"><span class="fs-5">Facebook: {{$total['facebook']}}</span></div>
                        <div class="py-1"><span class="fs-5">Sanascout: {{$total['sana']}}</span></div>
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
    .statistics-div {
        background-color: #EFEFEF;
        border-radius: 35px;
        height: 100%;
    }

    .leads-div {
        background-color: #EFEFEF;
        border-radius: 35px;
    }

    .info-content {
        background-color: #fff;
        border-radius: 22px;
    }

    .fw-600 {
        font-weight: 600;
    }
    .gmap_canvas {
                                                        overflow: hidden;
                                                        background: none !important;
                                                        height: auto;
                                                        width: 100%;
                                                        border-radius: 21px !important;
                                                        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
                                                    }
                                                    .mapouter {
                                                        position: relative;
                                                        text-align: right;
                                                        width: 100%;
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

    .header-text {
        color: #525353;
    }

    .assigned-leads-content {
        height: 200px;
        overflow-y: scroll;
        overflow-x: hidden !important;
    }

    body {
        overflow-x: hidden !important;
    }
    <style>
                                                    .mapouter {
                                                        position: relative;
                                                        text-align: right;
                                                        width: 100%;
                                                    }
                                                </style>
                                                <style>
                                                    .gmap_canvas {
                                                        overflow: hidden;
                                                        background: none !important;
                                                        height: auto;
                                                        width: 100%;
                                                        border-radius: 21px !important;
                                                        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
                                                    }
    .modal-section-1 {
        display: none;
        position: fixed;
        z-index: 1040;
        background-color: rgb(0, 0, 0);
        /* Fallback color */
        background-color: rgba(0, 0, 0, 0.4);
        left: 0;
        top: 0;
        width: 100%;
        /* Full width */
        height: 100%;
        overflow: unset;
    }





    .modal-content {
        background-color: #fefefe;
        margin-top: 3%;
        /* height: 70vh; */
        /* width: 450px; */
		z-index: 1050;
        border: none;
        border-radius: 25px;

    }
                                                </style>
</style>


<script>
    var ids = [];
    var cnt = 0;
function getid(x){
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
