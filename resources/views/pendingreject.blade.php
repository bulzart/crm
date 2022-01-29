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
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>


        <div class="col">
        <section class="container">
 
                <div class="declined-section">
                   

                    <div class="m-4 declined-items py-3 col-12 col-sm-12 col-md-12 col-lg col-xl g-0  text-center d-flex justify-content-center">
                        <form method="post" action="{{route('rejectedleads',$pojo)}}" enctype="multipart/form-data">
                            @csrf
                        
                            <input type="hidden" name="leadsid" value="{{$leads->id}}">
                        <div class="border-left-div">
                            <div class="termin-div mx-3 py-3">



                                <div class="text-center py-3">
                                        <span class="fs-5 fw-bold text-secondary">
                                            Termin nicht stattgefunden
                                        </span>
                                </div>
                                <div class="row g-3 align-items-center py-1 mx-5">
                                    <div class="col-12 text-center">
                                        <label for="inputTxt4" class="col-form-label">Begrundung: </label>
                                    </div>
                                    <div class="col-12">
                                        <input type="text" id="inputTxt4" name="reason" class="form-control"
                                               aria-describedby="passwordHelpInline">
                                    </div>
                                </div>
                              
                                
                          

                            </div>
                            <div class="fertig-div text-center my-2">
                                <input type="submit" class="fertig-btn px-4 py-2" value="Fertig">
                            </div>

                        </div>
                        </form>
                    </div>

                </div>
            
        </section>
    </div>

@endsection

    <script>
    function uploadfile(){
        var x = document.getElementById('file-input-3').value;
        document.getElementById('uploadspan').innerHTML = x;

    }
    function deleteupladfile(){
        document.getElementById('uploadspan').innerHTML = '';
        document.getElementById('file-input-3').value = null;
    }
    </script>

    @if($pojo == 1)
    <style>
    .declined-section {
        background-color: #EF696A;
        border-radius: 19px;
    }
    </style>
    @else 
    <style>
    .declined-section {
        background-color: #eed202;
        border-radius: 19px;
    }
    </style>
    @endif
<style>
    .fertig-btn {
        background-color: #fff !important;
        color: #EF696A;
        font-weight: 600;
        border-radius: 10px;
        border: none;
    }
    .upload-box input[type="file"] {
        display: none;
    }

    .upload-box {
        background-image: url("data:image/svg+xml,%3csvg width='100%25' height='100%25' xmlns='http://www.w3.org/2000/svg'%3e%3crect width='100%25' height='100%25' fill='none' rx='9' ry='9' stroke='%23333' stroke-width='3' stroke-dasharray='6%2c 14' stroke-dashoffset='0' stroke-linecap='square'/%3e%3c/svg%3e");
        border-radius: 9px;
    }

    .termin-div {
        background-color: #fff !important;
        border-radius: 19px !important;

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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>

