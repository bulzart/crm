
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Appointments</title>
</head>

<body>

    <section>
    @if(\Session::has('success'))
        <div class="alert alert-success alert-dismissible fade show col-12 container" role="alert">
            {!! \Session::get('success') !!}
        </div>
    @endif
        <div class="px-4">
            <div class="row">
                <div class="col">
                    <img src="assets/images/logo.png" class="img-fluid" style="height: 66px;">
                </div>
                <div class="col text-right my-2 ">
                    <div class="pull-right text-end">
                        <button class="border-0 px-2 pt-1 pb-2 me-2"
                            style="background-color: #C4C6D2; border-radius: 12px;">
                            <svg id="Group_1" data-name="Group 1" xmlns="http://www.w3.org/2000/svg" width=""
                                height="22px" viewBox="0 0 32.504 28.358">
                                <g id="Ellipse_2" data-name="Ellipse 2" transform="translate(0)" fill="none"
                                    stroke="#fff" stroke-linecap="round" stroke-width="2">
                                    <ellipse cx="12.438" cy="12.438" rx="12.438" ry="12.438" stroke="none" />
                                    <ellipse cx="12.438" cy="12.438" rx="11.438" ry="11.438" fill="none" />
                                </g>
                                <line id="Line_4" data-name="Line 4" x2="8.532" y2="7.141"
                                    transform="translate(22.563 19.808)" fill="none" stroke="#fff"
                                    stroke-linecap="round" stroke-width="2" />
                            </svg>
                        </button>
                        <button class="border-0 px-2 pt-1 pb-2" style="background-color: #C4C6D2; border-radius: 12px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="" height="22px" viewBox="0 0 28.063 28.637">
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

    <div class="row">
        <div class="col-2">

        </div>
        <div class="col">
            <section>
                <div class="container">
                   
                    <div class="accepted-section row">
                        <div
                            class="header-section-name text-center col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 g-0 my-auto">
                            <div class="py-3 ">
                                <div class="mx-3">
                                    <span class="fs-3 fw-bold text-color-header1">
                                        Markus Jurgen
                                    </span>
                                </div>
                                <div class="mx-3">
                                    <span class="fs-6 text-color-header1">
                                        <span class="">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12.587" height="16.243"
                                                viewBox="0 0 8.587 12.243">
                                                <path id="Path_170" data-name="Path 170"
                                                    d="M1507.522,2353.695l.285-.4c.45-.637.916-1.3,1.32-1.908a17.1,17.1,0,0,0,1.607-2.977,3.3,3.3,0,0,0,.287-1.836,3.541,3.541,0,0,0-3.492-2.981,3.5,3.5,0,0,0-2.866,1.494,3.146,3.146,0,0,0-.606,2.37,6.507,6.507,0,0,0,.733,1.932,32.418,32.418,0,0,0,2.511,4.006c.072.1.145.2.22.3m.009-9.063h.024a2.481,2.481,0,0,1-.023,4.963h-.028a2.486,2.486,0,0,1-2.446-2.508,2.475,2.475,0,0,1,2.474-2.455m0,9.964c-.23-.312-.449-.6-.66-.9a32.713,32.713,0,0,1-2.552-4.072,7.013,7.013,0,0,1-.785-2.091,3.7,3.7,0,0,1,.695-2.752,4.05,4.05,0,0,1,7.31,1.7,3.861,3.861,0,0,1-.319,2.12,17.67,17.67,0,0,1-1.656,3.068C1508.941,2352.621,1508.181,2353.663,1507.534,2354.6Zm0-9.438a1.955,1.955,0,0,0-.021,3.91h.023a1.955,1.955,0,0,0,.018-3.91Z"
                                                    transform="translate(-1503.243 -2342.783)" fill="#fff" stroke="#fff"
                                                    stroke-width="0.5" />
                                            </svg>
                                        </span>
                                        Raumweg 23, 3700 Thun
                                    </span>
                                </div>
                                <div class="input-group justify-content-center mt-3">
                                    <button class="py-2 border-0 static-btn1 m-1">
                                        <span class="bg-dark py-1 px-3 people-svg-span">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#fff"
                                                class="bi bi-people-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                                <path fill-rule="evenodd"
                                                    d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z" />
                                                <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z" />
                                            </svg>
                                        </span>
                                        <span class="px-2" style="font-size: 14px;">
                                            4 Personon
                                        </span>
                                    </button>
                                    <button class="py-2 border-0 static-btn1 m-1">
                                        <span class="bg-dark py-1 px-3 people-svg-span">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#fff"
                                                class="bi bi-people-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                                <path fill-rule="evenodd"
                                                    d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z" />
                                                <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z" />
                                            </svg>
                                        </span>
                                        <span class="px-2" style="font-size: 14px;">
                                            11:00 - 24.09.2021
                                        </span>
                                    </button>
                                </div>
                                <div class="mx-3">
                                    <hr class="hr-style">
                                </div>
                            </div>
                        </div>
                        
                        <div class="other-people-accordion  py-4 col-12 col-sm-12 col-md-12 col-lg col-xl g-0">
                            <div class="border-left-div">
                                <div class="accordion accordion-flush mx-3 " id="accordionFlushExample">
                                <form action="{{route('completeapp',$app->id)}}" method="post">
                        @csrf
                                    <div class="accordion-item my-1">
                                        <h2 class="accordion-header" id="flush-headingOne">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                                aria-expanded="false" aria-controls="flush-collapseOne">
                                                Person 1 erfassen
                                            </button>
                                        </h2>
                                        <div id="flush-collapseOne" class="accordion-collapse collapse show"
                                            aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body p-0 mx-2 py-2">
                                                <div class="row g-3 align-items-center m-1">
                                                    <div class="col-4">
                                                        <label for="inputTxt4" class="col-form-label">Vorname:</label>
                                                    </div>
                                                    <div class="col">
                                                        <input type="text" id="inputTxt4" class="form-control"
                                                            aria-describedby="passwordHelpInline" name="fname1">
                                                    </div>
                                                </div>
                                                <div class="row g-3 align-items-center m-1">
                                                    <div class="col-4">
                                                        <label for="inputTxt5" class="col-form-label">Nachname:</label>
                                                    </div>
                                                    <div class="col">
                                                        <input type="text" id="inputTxt5" class="form-control" name="lname1"
                                                            aria-describedby="passwordHelpInline">
                                                    </div>
                                                </div>
                                                <div class="row g-3 align-items-center m-1">
                                                    <div class="col-4">
                                                        <label for="inputTxt6"
                                                            class="col-form-label">Geburtstag:</label>
                                                    </div>
                                                    <div class="col">
                                                        <input type="date" id="inputTxt6" class="form-control" aria-describedby="passwordHelpInline" name="birthday1">
                                                    </div>
                                                </div>
                                                <div class="text-end">
                                                    <button class="accept-btn m-2 py-1 px-5 collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                                        aria-expanded="false" aria-controls="flush-collapseOne">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="23.232"
                                                            height="23.805" viewBox="0 0 46.232 33.805">
                                                            <path id="Path_277" data-name="Path 277"
                                                                d="M8370.12,999.407l15.7,15.954,7.778-8.812,19.931-22.581"
                                                                transform="translate(-8368.706 -982.557)" fill="none"
                                                                stroke="currentColor" stroke-linecap="round"
                                                                stroke-linejoin="round" stroke-width="3" />
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                </div>
                                <div class="text-center">
                                <input type="submit" class="btn btn-success text-center mt-2 col-10 py-2" style="border-radius: 35px;">
                            </div>

                        </div>

                    </div>

                    </form>
                </div>
            </section>
        </div>
    </div>

    <style>
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
        <script>
            var count = <?php echo $app->number_of_persons;?>;
            for(i = 2; i <= count; i++){
                $("#accordionFlushExample").append(' <div class="accordion-item my-1">' +
'                                        <h2 class="accordion-header" id="flush-headingTwo">' +
'                                            <button class="accordion-button collapsed d-btnn" type="button"' +
'                                                data-bs-toggle="collapse" data-bs-target="#flush-collapse' + i + '"' +
'                                                aria-expanded="false" aria-controls="flush-collapse' + i + '"' + '>' +
'                                                Person' + i + ' erfassen' +
'                                            </button>' +
'                                        </h2>' +
'                                        <div id="flush-collapse' + i + '"' +  'class="accordion-collapse collapse"' +
'                                            aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">' +
'                                            <div class="accordion-body p-0 mx-2 py-2 ">' +
'                                                <div class="row g-3 align-items-center m-1">' +
'                                                    <div class="col-4">' +
'                                                        <label for="inputTxt4" class="col-form-label">Vorname:</label>' +
'                                                    </div>' +
'                                                    <div class="col">' +
'                                                        <input type="text" id="inputTxt4" class="form-control" name="fname' + i + '"' +
'                                                           aria-describedby="passwordHelpInline">' +
'                                                    </div>' +
'                                                </div>' +
'                                                <div class="row g-3 align-items-center m-1">' +
'                                                    <div class="col-4">' +
'                                                        <label for="inputTxt5" class="col-form-label">Nachname:</label>' +
'                                                    </div>' +
'                                                    <div class="col">' +
'                                                        <input type="text" id="inputTxt5" class="form-control"' +
'                                                            aria-describedby="passwordHelpInline" name="lname' + i + '">' +
'                                                    </div>' +
'                                                </div>' +
'                                                <div class="row g-3 align-items-center m-1">' +
'                                                    <div class="col-4">' +
'                                                        <label for="inputTxt6"' +
'                                                            class="col-form-label">Geburtstag:</label>' +
'                                                    </div>' +
'                                                    <div class="col">' +
'                                                        <input type="date" id="inputTxt6" class="form-control" name="birthday' + i + '"'+
'                                                            aria-describedby="passwordHelpInline">' +
'                                                    </div>' +
'                                                </div>' +
'                                                <div class="text-end">' +
'                                                    <button class="accept-btn m-2 py-1 px-5 collapsed" type="button"' +
'                                                        data-bs-toggle="collapse" data-bs-target="#flush-collapse' + i + '"' +
'                                                        aria-expanded="false" aria-controls="flush-collapseTwo' + '"' + '>' +
'                                                        <svg xmlns="http://www.w3.org/2000/svg" width="23.232"' +
'                                                            height="23.805" viewBox="0 0 46.232 33.805">' +
'                                                            <path id="Path_277" data-name="Path 277"' +
'                                                                d="M8370.12,999.407l15.7,15.954,7.778-8.812,19.931-22.581"' +
'                                                                transform="translate(-8368.706 -982.557)" fill="none"' +
'                                                                stroke="currentColor" stroke-linecap="round"' +
'                                                                stroke-linejoin="round" stroke-width="3" />' +
'                                                        </svg>' +
'                                                    </button>' +
'                                                </div>' +
'                                            </div>' +
'                                        </div>' +
'                                    </div>');
            }
            </script>
</body>
</html>
