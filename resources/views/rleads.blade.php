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

    <title>Leads</title>
    <link rel="icon" type="image/png" href="img/Favicon.png">
</head>

<body>

<section>
    <div class="container-fluid">

            <div class="col my-3 col-12">

                <div class="leads-div py-3 px-4">
                    @if(!Auth::guard('admins')->user()->hasRole('fs'))
                        <div class="leads-header my-2">
                            <span class="fs-4 fw-600 header-text">Leads</span>
                        </div>
                        <div class="information-div">
                            <div class="info-header my-2">
                <span class="fs-5 fw-600 header-text">
                  Information
                </span>
                            </div>
                            <div class="row my-1 mx-3">
                                <div class="col-3 g-0">
                                    <div class="">
                        <span class="spn-muted">
                          Name
                        </span>
                                    </div>
                                </div>
                                <div class="col-3 g-0">
                                    <div class="">
                        <span class="spn-muted">
                          Phone
                        </span>
                                    </div>
                                </div>
                                <div class="col g-0">
                                    <div class="">
                        <span class="spn-muted">
                          Number of People
                        </span>
                                    </div>
                                </div>
                                <div class="col g-0">
                                    <div class="">
                        <span class="spn-muted">
                          reason
                        </span>
                                    </div>
                                </div>
                            </div>
                            <hr class="m-0">

                            <div class="info-content" style="height: 200px;overflow-y: scroll;overflow-x: hidden">
                                <div class="tasks-divv py-2 px-1">
                                    @foreach($leads as $lead)
                                        <div class="row my- mx-3">
                                            <div class="col-3 g-0">
                                                <div class="">
                        <span class="spn-normal">
                          {{$lead->first_name}}
                        </span>
                                                </div>
                                            </div>
                                            <div class="col g-0">
                                                <div class="">
                        <span class="spn-normal">
                          {{$lead->telephone}}
                        </span>
                                                </div>
                                            </div>
                                            <div class="col g-0">
                                                <div class="">
                        <span class="spn-normal">
                          {{$lead->number_of_persons}}
                        </span>
                                                </div>
                                            </div>
                                            <div class="col g-0">
                                                <div class="">
                        <span class="spn-normal">
                          {{$lead->status}}
                        </span>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="m-0">
                                    @endforeach

                                    <div class="text-end py-3">
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif







</div>
            </div>



    </div>
</section>
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


</body>
</html>


<script>
    var ids = [];
    var cnt = 0;
function getid(x){
      ids[cnt] = x.value;
      cnt++;
}
// function callModalFunct() {
//             document.getElementById("mod01").style.display = "block";
//         }
//         function callModalFunct1() {
//             document.getElementById("mod02").style.display = "block";
//         }


</script>
