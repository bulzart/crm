@extends('template.navbar')
@section('content')
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/8.4.6/css/intlTelInput.css" rel="stylesheet" />
  <link rel="stylesheet" href="assets/css/style.css">
  <title>Document</title>
</head>

<body>

  <!-- <section>
    <div class="px-4">
      <div class="row">
        <div class="col">
          <img src="assets/images/logo.png" class="img-fluid" style="height: 66px;">
        </div>
        <div class="col text-right my-2 ">
          <div class="pull-right text-end">
            <button class="border-0 px-2 pt-1 pb-2 me-2" style="background-color: #C4C6D2; border-radius: 12px;">
              <svg id="Group_1" data-name="Group 1" xmlns="http://www.w3.org/2000/svg" width="" height="22px"
                viewBox="0 0 32.504 28.358">
                <g id="Ellipse_2" data-name="Ellipse 2" transform="translate(0)" fill="none" stroke="#fff"
                  stroke-linecap="round" stroke-width="2">
                  <ellipse cx="12.438" cy="12.438" rx="12.438" ry="12.438" stroke="none" />
                  <ellipse cx="12.438" cy="12.438" rx="11.438" ry="11.438" fill="none" />
                </g>
                <line id="Line_4" data-name="Line 4" x2="8.532" y2="7.141" transform="translate(22.563 19.808)"
                  fill="none" stroke="#fff" stroke-linecap="round" stroke-width="2" />
              </svg>
            </button>
            <button class="border-0 px-2 pt-1 pb-2" style="background-color: #C4C6D2; border-radius: 12px;">
              <svg xmlns="http://www.w3.org/2000/svg" width="" height="22px" viewBox="0 0 28.063 28.637">
                <g id="Group_2" data-name="Group 2" transform="translate(1 1)">
                  <circle id="Ellipse_3" data-name="Ellipse 3" cx="6.803" cy="6.803" r="6.803"
                    transform="translate(6.229)" fill="none" stroke="#fff" stroke-linecap="round"
                    stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" />
                  <path id="Path_1" data-name="Path 1" d="M2,102.218a13.032,13.032,0,0,1,26.063,0"
                    transform="translate(-2 -75.581)" fill="none" stroke="#fff" stroke-linecap="round"
                    stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" />
                </g>
              </svg>
            </button>
          </div>
        </div>
      </div>
    </div>
  </section> -->

  <style>
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
<form action="{{route('createLeadDataKK',[1,1])}}" method="post">
  @csrf
  <div class="row">
    <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-xxl-2 d-flex">
      <div class="d-flex flex-column flex-shrink-0 p-3 bg-light navvv"
        style="height: 100% !important; position: fixed;">
        <a href="#" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
          <svg xmlns="http://www.w3.org/2000/svg" width="50" height="30" viewBox="0 0 100 67">
            <g id="Group_620" data-name="Group 620" transform="translate(-1350 -165)">
              <g id="Polygon_4" data-name="Polygon 4" transform="translate(1450 228) rotate(180)" fill="#e2e2e2">
                <path
                  d="M 43.0809211730957 33.5 L 0.9190800189971924 33.5 L 22 0.9203982949256897 L 43.0809211730957 33.5 Z"
                  stroke="none" />
                <path
                  d="M 22 1.840770721435547 L 1.838142395019531 33 L 42.16185760498047 33 L 22 1.840770721435547 M 22 3.814697265625e-06 L 44 34 L 0 34 L 22 3.814697265625e-06 Z"
                  stroke="none" fill="#707070" />
              </g>
              <g id="Path_316" data-name="Path 316" transform="translate(1374 190)" fill="#707070">
                <path d="M 50.2048454284668 41 L 1.795153379440308 41 L 26 1.899863123893738 L 50.2048454284668 41 Z"
                  stroke="none" />
                <path
                  d="M 26 3.799720764160156 L 3.590301513671875 40 L 48.40969848632813 40 L 26 3.799720764160156 M 26 0 L 52 42 L 0 42 L 26 0 Z"
                  stroke="none" fill="#707070" />
              </g>
              <g id="Polygon_5" data-name="Polygon 5" transform="translate(1394 228) rotate(180)" fill="#e2e2e2">
                <path
                  d="M 43.0809211730957 33.5 L 0.9190800189971924 33.5 L 22 0.9203982949256897 L 43.0809211730957 33.5 Z"
                  stroke="none" />
                <path
                  d="M 22 1.840770721435547 L 1.838142395019531 33 L 42.16185760498047 33 L 22 1.840770721435547 M 22 3.814697265625e-06 L 44 34 L 0 34 L 22 3.814697265625e-06 Z"
                  stroke="none" fill="#707070" />
              </g>
              <g id="Ellipse_35" data-name="Ellipse 35" transform="translate(1389 165)" fill="#e2e2e2" stroke="#707070"
                stroke-width="1">
                <circle cx="11" cy="11" r="11" stroke="none" />
                <circle cx="11" cy="11" r="10.5" fill="none" />
              </g>
              <g id="Ellipse_36" data-name="Ellipse 36" transform="translate(1419 173)" fill="#707070" stroke="#707070"
                stroke-width="2">
                <ellipse cx="9" cy="8.5" rx="9" ry="8.5" stroke="none" />
                <ellipse cx="9" cy="8.5" rx="8" ry="7.5" fill="none" />
              </g>
              <g id="Ellipse_37" data-name="Ellipse 37" transform="translate(1363 173)" fill="#707070" stroke="#707070"
                stroke-width="2">
                <ellipse cx="9" cy="8.5" rx="9" ry="8.5" stroke="none" />
                <ellipse cx="9" cy="8.5" rx="8" ry="7.5" fill="none" />
              </g>
            </g>
          </svg>
          <span class="fs-5 nav-texttt">DL FINANCE</span>
        </a>
        <hr>
       
        <hr>
        <div class="dropdown profile-div">
          <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle"
            id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">

            <strong>mdo</strong>
          </a>
          <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
            <li><a class="dropdown-item" href="#">New project...</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#">Sign out</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="my-5 mx-4">
        <div class="" style="background-color: #EFEFEF;border-radius: 22px;">
          <div class="py-4 px-3">
            <span class="fs-4">
              {{$lead->first_name}}
            </span> <br>
            <span class="fs-6 text-muted">
              {{$lead->address}}
            </span>
          </div>
          <div class="row mx-4">
            <nav class="g-0">
              <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <button class="nav-link active col krankenkasse-btn" id="nav-home-tab" data-bs-toggle="tab"
                  data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                  aria-selected="true">Krankenkasse</button>
                <button class="nav-link col auto-btn" id="nav-profile-tab" data-bs-toggle="tab"
                  data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile"
                  aria-selected="false">Auto</button>
                <button class="nav-link  col sachen-btn" id="nav-contact-tab" data-bs-toggle="tab"
                  data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact"
                  aria-selected="false">Sachen</button>
                <button class="nav-link  col vorsorge-btn" id="nav-fourth-tab" data-bs-toggle="tab"
                  data-bs-target="#nav-fourth" type="button" role="tab" aria-controls="nav-fourth"
                  aria-selected="false">Vorsorge</button>
              </div>
            </nav>
          </div>
          <div class="tab-content mx-4 pb-3" id="nav-tabContent">
            <div class="tab-pane fade show active krankenkasse-content mb-3" id="nav-home" role="tabpanel"
              aria-labelledby="nav-home-tab">
              <div class="row mx-4">
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 mt-4">
                  <div class="" style="background-color: #D2FEC9;height: 158px; border-radius: 13px;">
                    <div class="py-2 px-2">
                      <div class="row mx-2">
                        <div class="col-7 d-flex g-0">
                          <div class="">
                            <span class="fw-bold" style=" font-size: 12px;">
                              Vorversicherer
                            </span>
                          </div>
                        </div>
                        <div class="col g-0 d-flex justify-content-end">
                          <div class="select-div text-end">
                            <select name="" id="" class="fw-bold"
                              style="background-color: #D2FEC9; font-size: 12px;color:#9F9F9F;">
                              <option selected>Select</option>
                              <option value="1">Ja</option>
                              <option value="2">Nein</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="text-center my-3">
                        <span class="text-muted" style="font-size: 13px;">
                          Police-vorher.pdf
                        </span>
                        <span class="ps-4">
                          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                            <g id="Group_620" data-name="Group 620" transform="translate(-714 -602)">
                              <circle id="Ellipse_30" data-name="Ellipse 30" cx="9" cy="9" r="9"
                                transform="translate(714 602)" fill="#34c758" />
                              <path id="Path_283" data-name="Path 283" d="M8370.12,986.7l2.781,2.828,4.912-5.565"
                                transform="translate(-7650.572 -375.429)" fill="none" stroke="#feffff"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1" />
                            </g>
                          </svg>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 mt-4">
                  <div class="" style="background-color: #EFEFEF; border-radius: 13px;">
                    <div class="py-2 px-2">
                      <div class="row mx-2">
                        <div class="col-7 d-flex g-0">
                          <div class="">
                            <span class="fw-bold" style=" font-size: 12px;">
                              ID Notwending
                            </span>
                          </div>
                        </div>
                        <div class="col g-0 d-flex justify-content-end">
                          <div class="select-div text-end">
                            <select name="" class="fw-bold" id=""
                              style="background-color: #EFEFEF; font-size: 12px;color:#9F9F9F;">
                              <option selected>Select</option>
                              <option value="1">Ja</option>
                              <option value="2">Nein</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="upload-box mx-1 my-2">
                        <div class="mx-1 my-2 p-4 text-center">
                          <label for="file-input-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="53" height="53" viewBox="0 0 53 53">
                              <g id="Group_621" data-name="Group 621" transform="translate(-78.283 -14.777)">
                                <circle id="Ellipse_31" data-name="Ellipse 31" cx="26.5" cy="26.5" r="26.5"
                                  transform="translate(78.283 14.777)" fill="#5f5f5f" />
                                <g id="Group_326" data-name="Group 326" transform="translate(95.656 31.893)">
                                  <path id="Path_234" data-name="Path 234"
                                    d="M.6,8.9a.6.6,0,0,1,.6.6v3.011a1.2,1.2,0,0,0,1.2,1.2H16.863a1.2,1.2,0,0,0,1.2-1.2V9.5a.6.6,0,1,1,1.2,0v3.011a2.408,2.408,0,0,1-2.409,2.409H2.409A2.408,2.408,0,0,1,0,12.514V9.5a.6.6,0,0,1,.6-.6"
                                    transform="translate(0 1.82)" fill="#fff" stroke="#fff" stroke-width="0.5" />
                                  <path id="Path_235" data-name="Path 235"
                                    d="M8.29.177a.6.6,0,0,1,.852,0h0l3.613,3.613a.6.6,0,1,1-.853.853L9.318,2.057V12.648a.6.6,0,1,1-1.2,0V2.057L5.529,4.643a.6.6,0,0,1-.853-.853Z"
                                    transform="translate(0.92 0)" fill="#fff" stroke="#fff" stroke-width="0.5" />
                                </g>
                              </g>
                            </svg>
                          </label>
                          <input type="file" id="file-input-1" class="svg-div w-100 border-0  g-0" onchange="upload(this);">
                          <input type="text" class="form-control" id="file-input-1c" disabled style="background:none; border:none;"></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 mt-4">
                  <div class="" style="background-color: #EFEFEF; border-radius: 13px;">
                    <div class="py-2 px-2">
                      <div class="row mx-2">
                        <div class="col-8 g-0 d-flex">
                          <div class="text-nowrap">
                            <span class="fw-bold" style=" font-size: 12px;">
                              Kundingung durch
                            </span>
                          </div>
                        </div>
                        <div class="col g-0 d-flex justify-content-end">
                          <div class="select-div text-end">
                            <select name="" class="fw-bold" id=""
                              style="background-color: #EFEFEF; font-size: 12px;color:#9F9F9F;">
                              <option selected>Select</option>
                              <option value="1">Ja</option>
                              <option value="2">Nein</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="upload-box mx-1 my-2">
                        <div class="mx-1 my-2 p-4 text-center">
                          <label for="file-input-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="53" height="53" viewBox="0 0 53 53">
                              <g id="Group_621" data-name="Group 621" transform="translate(-78.283 -14.777)">
                                <circle id="Ellipse_31" data-name="Ellipse 31" cx="26.5" cy="26.5" r="26.5"
                                  transform="translate(78.283 14.777)" fill="#5f5f5f" />
                                <g id="Group_326" data-name="Group 326" transform="translate(95.656 31.893)">
                                  <path id="Path_234" data-name="Path 234"
                                    d="M.6,8.9a.6.6,0,0,1,.6.6v3.011a1.2,1.2,0,0,0,1.2,1.2H16.863a1.2,1.2,0,0,0,1.2-1.2V9.5a.6.6,0,1,1,1.2,0v3.011a2.408,2.408,0,0,1-2.409,2.409H2.409A2.408,2.408,0,0,1,0,12.514V9.5a.6.6,0,0,1,.6-.6"
                                    transform="translate(0 1.82)" fill="#fff" stroke="#fff" stroke-width="0.5" />
                                  <path id="Path_235" data-name="Path 235"
                                    d="M8.29.177a.6.6,0,0,1,.852,0h0l3.613,3.613a.6.6,0,1,1-.853.853L9.318,2.057V12.648a.6.6,0,1,1-1.2,0V2.057L5.529,4.643a.6.6,0,0,1-.853-.853Z"
                                    transform="translate(0.92 0)" fill="#fff" stroke="#fff" stroke-width="0.5" />
                                </g>
                              </g>
                            </svg>
                          </label>
                          <input type="file" id="file-input-2" class="svg-div w-100 border-0  g-0" onchange="upload(this);">
                          <input type="text" class="form-control" id="file-input-2c" disabled style="background:transparent; border:none;">
                          
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 mt-4">
                  <div class="" style="background-color: #EFEFEF; border-radius: 13px;">
                    <div class="py-2 px-2">
                      <div class="row mx-2">
                        <div class="col-7 d-flex g-0">
                          <div class="">
                            <span class="fw-bold" style=" font-size: 12px;">
                              Vollmacht
                            </span>
                          </div>
                        </div>
                        <div class="col g-0 d-flex justify-content-end">
                          <div class="select-div text-end ">
                            <select name="" class="fw-bold" id=""
                              style="background-color: #EFEFEF; font-size: 12px;color:#9F9F9F;">
                              <option selected>Select</option>
                              <option value="1">Ja</option>
                              <option value="2">Nein</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="upload-box mx-1 my-2">
                        <div class="mx-1 my-2 p-4 text-center">
                          <label for="file-input-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="53" height="53" viewBox="0 0 53 53">
                              <g id="Group_621" data-name="Group 621" transform="translate(-78.283 -14.777)">
                                <circle id="Ellipse_31" data-name="Ellipse 31" cx="26.5" cy="26.5" r="26.5"
                                  transform="translate(78.283 14.777)" fill="#5f5f5f" />
                                <g id="Group_326" data-name="Group 326" transform="translate(95.656 31.893)">
                                  <path id="Path_234" data-name="Path 234"
                                    d="M.6,8.9a.6.6,0,0,1,.6.6v3.011a1.2,1.2,0,0,0,1.2,1.2H16.863a1.2,1.2,0,0,0,1.2-1.2V9.5a.6.6,0,1,1,1.2,0v3.011a2.408,2.408,0,0,1-2.409,2.409H2.409A2.408,2.408,0,0,1,0,12.514V9.5a.6.6,0,0,1,.6-.6"
                                    transform="translate(0 1.82)" fill="#fff" stroke="#fff" stroke-width="0.5" />
                                  <path id="Path_235" data-name="Path 235"
                                    d="M8.29.177a.6.6,0,0,1,.852,0h0l3.613,3.613a.6.6,0,1,1-.853.853L9.318,2.057V12.648a.6.6,0,1,1-1.2,0V2.057L5.529,4.643a.6.6,0,0,1-.853-.853Z"
                                    transform="translate(0.92 0)" fill="#fff" stroke="#fff" stroke-width="0.5" />
                                </g>
                              </g>
                            </svg>
                          </label>
                          <input type="file" id="file-input-3" class="svg-div w-100 border-0  g-0" onchange="upload(this);">
                          <input type="text" class="form-control" id="file-input-3c" disabled style="background:transparent; border:none;">

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="text-center mt-3 pb-3">
                <div class="row">
                  <div class="col g-0 text-end my-auto">
                    <div class="">
                      <span class="pe-2" style="color: #9F9F9F;">
                        
                      </span>
                    </div>
                  </div>
                  <div class="col g-0 text-start">
                    <div id="buton">
                      <button class="px-5 py-2" type="button" style="border: none; border-radius: 9px; background-color:#285F52;" id="nextonee__" onclick="nextonee()">
                        <svg xmlns="http://www.w3.org/2000/svg" width="58.155" height="19.159"
                          viewBox="0 0 58.155 19.159">
                          <g id="Group_453" data-name="Group 453" transform="translate(0.004)">
                            <line id="Line_16" data-name="Line 16" x2="51.954" y2="0.2" transform="translate(0 9.287)"
                              fill="none" stroke="#3fd599" stroke-width="2" />
                            <path id="Polygon_2" data-name="Polygon 2" d="M9.58,0l9.58,11.642H0Z"
                              transform="translate(58.151 0) rotate(90)" fill="#3fd599" />
                          </g>
                        </svg>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="tab-pane fade auto-content" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
              <div class="row mx-4">
                <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 my-4 ">
                  <div class="accordion accordion-flush" id="accordionFlushExample1">
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingOne">
                        <button id="button1" class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                          onclick="hideSpan();" data-bs-target="#flush-collapseOne" aria-expanded="false"
                          aria-controls="flush-collapseOne"
                          style="background-color: #EFEFEF !important; border-radius: 10px;">
                          <div class="d-block">
                            <div class="">
                              <span class="fs-6" id="title-span" style="font-weight: 600;">
                                Gegenofferte?
                              </span>
                            </div>
                            <div class="lh-1 " id="bastelle-span">
                              <span class="" style="font-size: 13px;">
                                Bestelle eine Gegenofferte
                                für eine bestehende Autoversicherung
                              </span>
                            </div>
                          </div>
                        </button>
                      </h2>
                      <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                        data-bs-parent="#accordionFlushExample1">
                        <div class="accordion-body"
                          style="background-color: #EFEFEF !important; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
                          <div class="">
                            <div class="">
                              <span class="" style="font-size: 13px;">
                                Police Hochladen:
                              </span>
                            </div>
                            <div class="">
                              <div class="upload-box mx-1 my-2">
                                <div class="mx-1 my-2 p-4 text-center">
                                  <label for="file-input-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="53" height="53" viewBox="0 0 53 53">
                                      <g id="Group_621" data-name="Group 621" transform="translate(-78.283 -14.777)">
                                        <circle id="Ellipse_31" data-name="Ellipse 31" cx="26.5" cy="26.5" r="26.5"
                                          transform="translate(78.283 14.777)" fill="#5f5f5f" />
                                        <g id="Group_326" data-name="Group 326" transform="translate(95.656 31.893)">
                                          <path id="Path_234" data-name="Path 234"
                                            d="M.6,8.9a.6.6,0,0,1,.6.6v3.011a1.2,1.2,0,0,0,1.2,1.2H16.863a1.2,1.2,0,0,0,1.2-1.2V9.5a.6.6,0,1,1,1.2,0v3.011a2.408,2.408,0,0,1-2.409,2.409H2.409A2.408,2.408,0,0,1,0,12.514V9.5a.6.6,0,0,1,.6-.6"
                                            transform="translate(0 1.82)" fill="#fff" stroke="#fff"
                                            stroke-width="0.5" />
                                          <path id="Path_235" data-name="Path 235"
                                            d="M8.29.177a.6.6,0,0,1,.852,0h0l3.613,3.613a.6.6,0,1,1-.853.853L9.318,2.057V12.648a.6.6,0,1,1-1.2,0V2.057L5.529,4.643a.6.6,0,0,1-.853-.853Z"
                                            transform="translate(0.92 0)" fill="#fff" stroke="#fff"
                                            stroke-width="0.5" />
                                        </g>
                                      </g>
                                    </svg>
                                  </label>
                                  <input type="file" id="file-input-4" class="svg-div w-100 border-0  g-0" onchange="upload(this);">
                          <input type="text" class="form-control" id="file-input-4c" disabled style="background:transparent; border:none;">
                                </div>
                              </div>
                            </div>
                            <div class="">
                              <div class="row mx-2">
                                <div class="col-5 d-flex g-0">
                                  <div class="text-nowrap">
                                    <span class="fw-bold" style=" font-size: 12px;">
                                      Vergleichsart:
                                    </span>
                                  </div>
                                </div>
                                <div class="col g-0 d-flex justify-content-end">
                                  <div class="select-div text-end ">
                                    <select name="" class="fw-bold" id=""
                                      style="background-color: #EFEFEF; font-size: 12px;color:#9F9F9F;">
                                      <option selected>Select</option>
                                      <option value="1">1:1 Deckung</option>
                                      <option value="2">1:1 Deckung</option>
                                    </select>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="">
                              <div class="mb-3 mt-3">
                                <label for="exampleFormControlTextarea1" class="form-label"
                                  style="font-size: 13px;">Example
                                  textarea</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 my-4">
                  <div class="accordion accordion-flush" id="accordionFlushExample2">
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                          data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseOne"
                          style="background-color: #EFEFEF !important; border-radius: 10px;">
                          <div class="d-block">
                            <div class="">
                              <span class="fs-6" id="title-span" style="font-weight: 600;">
                                Gegenofferte?
                              </span>
                            </div>
                            <div class="lh-1 " id="bastelle-span">
                              <span class="" style="font-size: 13px;">
                                Bestelle eine Gegenofferte
                                für eine bestehende Autoversicherung
                              </span>
                            </div>
                          </div>
                        </button>
                      </h2>
                      <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                        data-bs-parent="#accordionFlushExample2">
                        <div class="accordion-body"
                          style="background-color: #EFEFEF !important; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
                          <div class="">
                            <div class="row">
                              <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                <div class="my-3">
                                  <div class="">
                                    <div class="">
                                      <span class="">
                                        Bestelle eine Offerte für ein neu einzulösendes Fahrzeug.
                                      </span>
                                    </div>
                                    <div class="upload-box mx-1 my-2">
                                      <div class="mx-1 my-2 p-4 text-center">
                                        <label for="file-input-5">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="53" height="53"
                                            viewBox="0 0 53 53">
                                            <g id="Group_621" data-name="Group 621"
                                              transform="translate(-78.283 -14.777)">
                                              <circle id="Ellipse_31" data-name="Ellipse 31" cx="26.5" cy="26.5"
                                                r="26.5" transform="translate(78.283 14.777)" fill="#5f5f5f" />
                                              <g id="Group_326" data-name="Group 326"
                                                transform="translate(95.656 31.893)">
                                                <path id="Path_234" data-name="Path 234"
                                                  d="M.6,8.9a.6.6,0,0,1,.6.6v3.011a1.2,1.2,0,0,0,1.2,1.2H16.863a1.2,1.2,0,0,0,1.2-1.2V9.5a.6.6,0,1,1,1.2,0v3.011a2.408,2.408,0,0,1-2.409,2.409H2.409A2.408,2.408,0,0,1,0,12.514V9.5a.6.6,0,0,1,.6-.6"
                                                  transform="translate(0 1.82)" fill="#fff" stroke="#fff"
                                                  stroke-width="0.5" />
                                                <path id="Path_235" data-name="Path 235"
                                                  d="M8.29.177a.6.6,0,0,1,.852,0h0l3.613,3.613a.6.6,0,1,1-.853.853L9.318,2.057V12.648a.6.6,0,1,1-1.2,0V2.057L5.529,4.643a.6.6,0,0,1-.853-.853Z"
                                                  transform="translate(0.92 0)" fill="#fff" stroke="#fff"
                                                  stroke-width="0.5" />
                                              </g>
                                            </g>
                                          </svg>
                                        </label>
                                        <input type="file" id="file-input-5" class="svg-div w-100 border-0  g-0" onchange="upload(this);">
                          <input type="text" class="form-control" id="file-input-5c" disabled style="background:transparent; border:none;">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col">
                                <div class="">
                                  <div class="row">
                                    <div class="col">
                                      <div class="">
                                        <span>
                                          Leasing:
                                        </span>
                                      </div>
                                    </div>
                                    <div class="col">
                                      <div class="btn-group w-100" role="group"
                                        aria-label="Basic radio toggle button group">
                                        <input type="radio" class="btn-check " name="btnradio" id="btnradio1"
                                          autocomplete="off" checked>
                                        <label class="btn btn-outline-secondary w-100 g-0" for="btnradio1">Ja</label>

                                        <input type="radio" class="btn-check" name="btnradio" id="btnradio2"
                                          autocomplete="off">
                                        <label class="btn btn-outline-secondary w-100 g-0 " for="btnradio2">Nein</label>
                                      </div>
                                      <div class="">
                                        <select name="" class="w-100 slct1" id="">
                                          <option value="">Gesellschaft</option>
                                        </select>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="my-3">
                              <div class="row">
                                <div class="col">
                                  <div class="">
                                    <div class="">
                                      <span class="fw-bold">
                                        Fahrzeuginformationen
                                      </span>
                                    </div>
                                    <div class="select-div text-end d-flex my-2">
                                      <div class="text-nowrap">
                                        <span class="fw-normal">
                                          Kaufjahr
                                        </span>
                                      </div>
                                      <select name="" class="fw-normal" id="" style="background-color: #EFEFEF;">
                                        <option selected>2021</option>
                                        <option value="1">2022</option>
                                        <option value="2">2023</option>
                                      </select>
                                    </div>
                                  </div>
                                  <div class="date-input-div mb-2">
                                    <div class="">
                                      <span>
                                        Este inverkehrssetzung:
                                      </span>
                                    </div>
                                    <input type="date" class="py-1 border-0">
                                  </div>
                                  <div class="date-input-div mb-2">
                                    <div class="">
                                      <span>
                                        Beginn Versicherung:
                                      </span>
                                    </div>
                                    <input type="date" class="py-1 border-0">
                                  </div>
                                  <div class="input-select-div mb-2">
                                    <div class="">
                                      <span class="">
                                        Anzahl Personen
                                      </span>
                                    </div>
                                    <select class="form-select w-75" aria-label="Default select example">
                                      <option selected></option>
                                      <option value="1">One</option>
                                      <option value="2">Two</option>
                                      <option value="3">Three</option>
                                    </select>
                                  </div>
                                  <div class="input-div1 mb-2">
                                    <div class="">
                                      <span class="">
                                        KM - Stand:
                                      </span>
                                    </div>
                                    <input class="py-1" type="text" name="" id="">
                                  </div>
                                </div>
                                <div class="col">
                                  <div class="">
                                    <div class="">
                                      <span class="fw-bold">
                                        Lenkerinformation
                                      </span>
                                    </div>
                                  </div>
                                  <div class="date-input-div mb-2">
                                    <div class="">
                                      <span>
                                        Este inverkehrssetzung:
                                      </span>
                                    </div>
                                    <input type="date" class="py-1 border-0">
                                  </div>
                                  <div class="input-select-div mb-2">
                                    <div class="">
                                      <span class="">
                                        Nationalitat:
                                      </span>
                                    </div>
                                    <select class="form-select w-75" aria-label="Default select example">
                                      <option selected></option>
                                      <option value="1">One</option>
                                      <option value="2">Two</option>
                                      <option value="3">Three</option>
                                    </select>
                                  </div>
                                  <div class="input-select-div mb-2">
                                    <div class="">
                                      <span class="">
                                        Häufigster Lenker?
                                      </span>
                                    </div>
                                    <select class="form-select w-75" aria-label="Default select example">
                                      <option selected></option>
                                      <option value="1">One</option>
                                      <option value="2">Two</option>
                                      <option value="3">Three</option>
                                    </select>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="my-3">
                              <div class="row">
                                <div class="col">
                                  <div class="">
                                    <span class="fw-normal fs-5">
                                      Gewünschte Deckung
                                    </span>
                                  </div>
                                  <div class="input-select-div mb-2">
                                    <div class="">
                                      <span class="">
                                        Versischerung:
                                      </span>
                                    </div>
                                    <select class="form-select w-75" aria-label="Default select example">
                                      <option selected></option>
                                      <option value="1">One</option>
                                      <option value="2">Two</option>
                                      <option value="3">Three</option>
                                    </select>
                                  </div>
                                  <div class="input-select-div mb-2">
                                    <div class="">
                                      <span class="">
                                        Versischerung:
                                      </span>
                                    </div>
                                    <select class="form-select w-75" aria-label="Default select example">
                                      <option selected></option>
                                      <option value="1">One</option>
                                      <option value="2">Two</option>
                                      <option value="3">Three</option>
                                    </select>
                                  </div>
                                  <div class="input-select-div mb-2">
                                    <div class="">
                                      <span class="">
                                        Versischerung:
                                      </span>
                                    </div>
                                    <select class="form-select w-75" aria-label="Default select example">
                                      <option selected></option>
                                      <option value="1">One</option>
                                      <option value="2">Two</option>
                                      <option value="3">Three</option>
                                    </select>
                                  </div>
                                  <div class="">
                                    <span>
                                      Versischerung:
                                    </span>
                                    <div class="input-group mb-2">
                                      <input type="text" class="form-control" aria-label=""
                                        aria-describedby="basic-addon1">
                                      <input type="text" class="form-control" aria-label=""
                                        aria-describedby="basic-addon1">
                                    </div>
                                  </div>
                                  <div class="input-div1 mb-2">
                                    <div class="">
                                      <span class="">
                                        + Unersischerung:
                                      </span>
                                    </div>
                                    <input class="py-1" type="text" name="" id="">
                                  </div>
                                </div>
                                <div class="col">
                                  <div class="input-div1 mb-2">
                                    <div class="">
                                      <span class="">
                                        + Unersischerung:
                                      </span>
                                    </div>
                                    <input class="py-1" type="text" name="" id="">
                                  </div>
                                  <div class="input-div1 mb-2">
                                    <div class="">
                                      <span class="">
                                        + Unersischerung:
                                      </span>
                                    </div>
                                    <input class="py-1" type="text" name="" id="">
                                  </div>
                                  <div class="input-div1 mb-2">
                                    <div class="">
                                      <span class="">
                                        + Unersischerung:
                                      </span>
                                    </div>
                                    <input class="py-1" type="text" name="" id="">
                                  </div>
                                  <div class="input-div1 mb-2">
                                    <div class="">
                                      <span class="">
                                        + Unersischerung:
                                      </span>
                                    </div>
                                    <input class="py-1" type="text" name="" id="">
                                  </div>
                                  <div class="input-div1 mb-2">
                                    <div class="">
                                      <span class="">
                                        + Unersischerung:
                                      </span>
                                    </div>
                                    <input class="py-1" type="text" name="" id="">
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="buton" class="py-2 text-center">
                      <button class="px-5 py-2" type="button" style="border: none; border-radius: 9px; background-color:#285F52;" id="nextonee__" onclick="nextonee()">
                        <svg xmlns="http://www.w3.org/2000/svg" width="58.155" height="19.159"
                          viewBox="0 0 58.155 19.159">
                          <g id="Group_453" data-name="Group 453" transform="translate(0.004)">
                            <line id="Line_16" data-name="Line 16" x2="51.954" y2="0.2" transform="translate(0 9.287)"
                              fill="none" stroke="#3fd599" stroke-width="2" />
                            <path id="Polygon_2" data-name="Polygon 2" d="M9.58,0l9.58,11.642H0Z"
                              transform="translate(58.151 0) rotate(90)" fill="#3fd599" />
                          </g>
                        </svg>
                      </button>
                    </div>
              </div>
            </div>



            <div class="tab-pane fade  sachen-content" id="nav-contact" role="tabpanel"
              aria-labelledby="nav-contact-tab">
              <div class="row">
                <div class="col-12">
                  <div class="my-3 mx-3" style="color:#434343; background-color: #EFEFEF; border-radius: 13px;">
                    <div class="mx-3 py-3">
                      <div class=" my-2">
                        <span class="fs-5 fw-bold">
                          3a/3b Anfragen
                        </span>
                      </div>
                      <div class="row ">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xd-4">
                          <div class="">
                            <div class="input-div1 mb-2">
                              <div class="">
                                <span class="" style="font-size: 15px;">
                                  Nationalitat:
                                </span>
                              </div>
                              <input class="py-1" type="text" name="" id="">
                            </div>
                            <div class="input-select-div mb-2">
                              <div class="">
                                <span class="" style="font-size: 15px;">
                                  Anzahl Personen
                                </span>
                              </div>
                              <select class="form-select w-75" aria-label="Default select example">
                                <option selected></option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                              </select>
                            </div>
                            <div class=" mb-2">
                              <label for="">Telefonnumer </label> <br>
                              <div class="input-group">
                                <input id="int-tel" type="tel" class="form-control">
                              </div>
                            </div>
                            <div class="input-div1 mb-2">
                              <div class="">
                                <span class="" style="font-size: 15px;">
                                  Email
                                </span>
                              </div>
                              <input class="py-1" type="email" name="" id="">
                            </div>
                            <div class="input-select-div mb-2">
                              <div class="">
                                <span class="" style="font-size: 15px;">
                                  Zivilstand
                                </span>
                              </div>
                              <select class="form-select w-75" aria-label="Default select example">
                                <option selected></option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                              </select>
                            </div>
                            <div class="input-select-div mb-2">
                              <div class="">
                                <span class="" style="font-size: 15px;">
                                  Arbeitsverhaltnis
                                </span>
                              </div>
                              <select class="form-select w-75" aria-label="Default select example">
                                <option selected></option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xd-4">
                          <div class="">
                            <div class="input-div1 mb-2">
                              <div class="">
                                <span class="" style="font-size: 15px;">
                                  Beruf:
                                </span>
                              </div>
                              <input class="py-1" type="text" name="" id="">
                            </div>
                            <div class="input-select-div mb-2">
                              <div class="">
                                <span class="" style="font-size: 15px;">
                                  Zahlungsrythmus:
                                </span>
                              </div>
                              <select class="form-select w-75" aria-label="Default select example">
                                <option selected></option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                              </select>
                            </div>
                            <!-- input groupd here asap -->
                            <div class="input-div1 mb-2">
                              <div class="">
                                <span class="" style="font-size: 15px;">
                                  Betrag pro Monat:
                                </span>
                              </div>
                              <input class="py-1" type="email" name="" id="">
                            </div>
                            <div class="input-select-div mb-2">
                              <div class="">
                                <span class="" style="font-size: 15px;">
                                  Anteli Garantie/Fond:
                                </span>
                              </div>
                              <select class="form-select w-75" aria-label="Default select example">
                                <option selected></option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                              </select>
                            </div>
                            <div class="date-input-div mb-2">
                              <div class="">
                                <span style="font-size: 15px;">
                                  Vertragsbeginn ab:
                                </span>
                              </div>
                              <input type="date" class="py-1 border-0">
                            </div>
                            <div class="group-button-div mb-2">
                              <div class="">
                                <span style="font-size: 15px;">
                                  Pramienbefreiung:
                                </span>
                              </div>
                              <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                <input type="radio" class="btn-check" name="btnradio1" id="btnradio3" autocomplete="off"
                                  checked>
                                <label class="btn btn-outline-secondary" for="btnradio3">Ja</label>

                                <input type="radio" class="btn-check" name="btnradio1" id="btnradio4"
                                  autocomplete="off">
                                <label class="btn btn-outline-secondary" for="btnradio4">Nein</label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xd-4">
                          <div class="">
                            <div class="group-button-div mb-2">
                              <div class="">
                                <span style="font-size: 15px;">
                                  EU - Rente:
                                </span>
                              </div>
                              <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                <input type="radio" class="btn-check" name="btnradio2" id="btnradio5" autocomplete="off"
                                  checked>
                                <label class="btn btn-outline-secondary" for="btnradio5">Ja</label>

                                <input type="radio" class="btn-check" name="btnradio2" id="btnradio6"
                                  autocomplete="off">
                                <label class="btn btn-outline-secondary" for="btnradio6">Nein</label>
                              </div>
                            </div>
                            <div class="group-button-div mb-2">
                              <div class="">
                                <span style="font-size: 15px;">
                                  Todesfalkapital:
                                </span>
                              </div>
                              <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                <input type="radio" class="btn-check" name="btnradio3" id="btnradio7" autocomplete="off"
                                  checked>
                                <label class="btn btn-outline-secondary" for="btnradio7">Ja</label>

                                <input type="radio" class="btn-check" name="btnradio3" id="btnradio8"
                                  autocomplete="off">
                                <label class="btn btn-outline-secondary" for="btnradio8">Nein</label>
                              </div>
                            </div>
                            <div class="group-button-div mb-2">
                              <div class="">
                                <span style="font-size: 15px;">
                                  Raucher:
                                </span>
                              </div>
                              <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                <input type="radio" class="btn-check" name="btnradio4" id="btnradio9" autocomplete="off"
                                  checked>
                                <label class="btn btn-outline-secondary" for="btnradio9">Ja</label>

                                <input type="radio" class="btn-check" name="btnradio4" id="btnradio10"
                                  autocomplete="off">
                                <label class="btn btn-outline-secondary" for="btnradio10">Nein</label>
                              </div>
                            </div>
                            <div class="mb-2">
                              <label for="exampleFormControlTextarea1" class="form-label">Gewünschte
                                Gesellschaften:</label>
                              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="text-center  pb-3">
                <div class="row">
                  <div class="col g-0 text-end my-auto">
                    <div class="">
                      <span class="pe-2" style="color: #9F9F9F;">
                        
                      </span>
                    </div>
                  </div>
                  <div class="col g-0 text-start">
                    <div class="">
                      <button class="px-5 py-2" type="button" style="border: none; border-radius: 9px; background-color:#285F52;" onclick="nextonee()">
                        <svg xmlns="http://www.w3.org/2000/svg" width="58.155" height="19.159"
                          viewBox="0 0 58.155 19.159">
                          <g id="Group_453" data-name="Group 453" transform="translate(0.004)">
                            <line id="Line_16" data-name="Line 16" x2="51.954" y2="0.2" transform="translate(0 9.287)"
                              fill="none" stroke="#3fd599" stroke-width="2" />
                            <path id="Polygon_2" data-name="Polygon 2" d="M9.58,0l9.58,11.642H0Z"
                              transform="translate(58.151 0) rotate(90)" fill="#3fd599" />
                          </g>
                        </svg>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="tab-pane fade  vorsorge-content" id="nav-fourth" role="tabpanel"
              aria-labelledby="nav-fourth-tab">
              <div class="row mx-4">
                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 my-3 ">
                  <div class="mb-2">
                    <span class="fw-bold fs-6">
                      Hausrat- & Privathaftpflicht
                    </span>
                  </div>
                  <div class="accordion accordion-flush" id="accordionFlushExample3">
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                          data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseOne"
                          style="background-color: #EFEFEF !important; border-radius: 10px;">
                          <div class="d-block">
                            <div class="">
                              <span class="fs-6" id="title-span" style="font-weight: 600;">
                                Gegenofferte?
                              </span>
                            </div>
                            <div class="lh-1 " id="bastelle-span">
                              <span class="" style="font-size: 13px;">
                                Bestelle eine Offerte für ein neu einzulösendes Fahrzeug.
                              </span>
                            </div>
                          </div>
                        </button>
                      </h2>
                      <div id="flush-collapseThree" class="accordion-collapse collapse"
                        aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample3">
                        <div class="accordion-body"
                          style="background-color: #EFEFEF !important; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
                          <div class="">
                            <div class="">
                              <span class="" style="font-size: 13px;">
                                Police Hochladen:
                              </span>
                            </div>
                            <div class="">
                              <div class="upload-box mx-1 my-2">
                                <div class="mx-1 my-2 p-4 text-center">
                                  <label for="file-input-6">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="53" height="53" viewBox="0 0 53 53">
                                      <g id="Group_621" data-name="Group 621" transform="translate(-78.283 -14.777)">
                                        <circle id="Ellipse_31" data-name="Ellipse 31" cx="26.5" cy="26.5" r="26.5"
                                          transform="translate(78.283 14.777)" fill="#5f5f5f" />
                                        <g id="Group_326" data-name="Group 326" transform="translate(95.656 31.893)">
                                          <path id="Path_234" data-name="Path 234"
                                            d="M.6,8.9a.6.6,0,0,1,.6.6v3.011a1.2,1.2,0,0,0,1.2,1.2H16.863a1.2,1.2,0,0,0,1.2-1.2V9.5a.6.6,0,1,1,1.2,0v3.011a2.408,2.408,0,0,1-2.409,2.409H2.409A2.408,2.408,0,0,1,0,12.514V9.5a.6.6,0,0,1,.6-.6"
                                            transform="translate(0 1.82)" fill="#fff" stroke="#fff"
                                            stroke-width="0.5" />
                                          <path id="Path_235" data-name="Path 235"
                                            d="M8.29.177a.6.6,0,0,1,.852,0h0l3.613,3.613a.6.6,0,1,1-.853.853L9.318,2.057V12.648a.6.6,0,1,1-1.2,0V2.057L5.529,4.643a.6.6,0,0,1-.853-.853Z"
                                            transform="translate(0.92 0)" fill="#fff" stroke="#fff"
                                            stroke-width="0.5" />
                                        </g>
                                      </g>
                                    </svg>
                                  </label>
                                  <input type="file" id="file-input-6" class="svg-div w-100 border-0  g-0" onchange="upload(this);">
                          <input type="text" class="form-control" id="file-input-6c" disabled style="background:transparent;border:none;">
                                </div> 
                              </div>
                            </div>
                            <div class="">
                              <div class="row mx-2">
                                <div class="col-5 d-flex g-0">
                                  <div class="text-nowrap">
                                    <span class="fw-bold" style=" font-size: 12px;">
                                      Vergleichsart:
                                    </span>
                                  </div>
                                </div>
                                <div class="col g-0 d-flex justify-content-end">
                                  <div class="select-div text-end ">
                                    <select name="" class="fw-bold" id=""
                                      style="background-color: #EFEFEF; font-size: 12px;color:#9F9F9F;">
                                      <option selected>Select</option>
                                      <option value="1">1:1 Deckung</option>
                                      <option value="2">1:1 Deckung</option>
                                    </select>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="">
                              <div class="mb-3 mt-3">
                                <label for="exampleFormControlTextarea2" class="form-label"
                                  style="font-size: 13px;">Example
                                  textarea</label>
                                <textarea class="form-control" id="exampleFormControlTextarea2" rows="3"></textarea>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 my-3 ">
                  <div class="mb-2">
                    <span class="fw-bold fs-6">
                      Hausrat- & Privathaftpflicht
                    </span>
                  </div>
                  <div class="accordion accordion-flush" id="accordionFlushExample4">
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                          data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseOne"
                          style="background-color: #EFEFEF !important; border-radius: 10px;">
                          <div class="d-block">
                            <div class="">
                              <span class="fs-6" id="title-span" style="font-weight: 600;">
                                Gegenofferte?
                              </span>
                            </div>
                            <div class="lh-1 " id="bastelle-span">
                              <span class="" style="font-size: 13px;">
                                Bestelle eine Offerte für ein neu einzulösendes Fahrzeug.
                              </span>
                            </div>
                          </div>
                        </button>
                      </h2>
                      <div id="flush-collapseFour" class="accordion-collapse collapse"
                        aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample4">
                        <div class="accordion-body"
                          style="background-color: #EFEFEF !important; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
                          <div class="">
                            <div class="row mx-2">
                              <div class="col-5 d-flex g-0">
                                <div class="text-nowrap">
                                  <span class="fw-bold" style=" font-size: 15px;">
                                    Neue Anfarge
                                  </span>
                                </div>
                              </div>
                              <div class="col g-0 d-flex justify-content-end">
                                <div class="select-div text-end ">
                                  <select name="" class="fw-bold" id=""
                                    style="background-color: #EFEFEF; font-size: 15px;color:#9F9F9F;">
                                    <option selected>Select</option>
                                    <option value="1">Ja</option>
                                    <option value="2">Nein</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="my-2">
                              <div class="input-select-div">
                                <div class="">
                                  <span class="" style="font-size: 15px;">
                                    Anzahl Personen
                                  </span>
                                </div>
                                <select class="form-select w-50" aria-label="Default select example">
                                  <option selected></option>
                                  <option value="1">One</option>
                                  <option value="2">Two</option>
                                  <option value="3">Three</option>
                                </select>
                              </div>
                              <div class="input-select-div">
                                <div class="">
                                  <span class="" style="font-size: 15px;">
                                    Anzahl Personen
                                  </span>
                                </div>
                                <select class="form-select w-50" aria-label="Default select example">
                                  <option selected></option>
                                  <option value="1">One</option>
                                  <option value="2">Two</option>
                                  <option value="3">Three</option>
                                </select>
                              </div>
                              <div class="input-div1">
                                <div class="">
                                  <span class="" style="font-size: 15px;">
                                    Versicherungsumme
                                  </span>
                                </div>
                                <input class="py-1" type="text" name="" id="">
                              </div>
                              <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label"
                                  style="font-size: 15px;">Example
                                  textarea</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                              </div>
                              <div class="input-select-div">
                                <div class="">
                                  <span class="" style="font-size: 15px;">
                                    Pricathaftpflicht?
                                  </span>
                                </div>
                                <select class="form-select w-50" aria-label="Default select example">
                                  <option selected></option>
                                  <option value="1">One</option>
                                  <option value="2">Two</option>
                                  <option value="3">Three</option>
                                </select>
                              </div>

                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 my-3">
                  <div class="mb-2">
                    <span class="fw-bold fs-6">
                      Rechtsschutzversicherung
                    </span>
                  </div>
                  <div class="accordion accordion-flush" id="accordionFlushExample5">
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                          data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseOne"
                          style="background-color: #EFEFEF !important; border-radius: 10px;">
                          <div class="d-block">
                            <div class="">
                              <span class="fs-6" id="title-span" style="font-weight: 600;">
                                Gegenofferte?
                              </span>
                            </div>
                            <div class="lh-1 " id="bastelle-span">
                              <span class="" style="font-size: 13px;">
                                Bestelle eine Offerte für ein neu einzulösendes Fahrzeug.
                              </span>
                            </div>
                          </div>
                        </button>
                      </h2>
                      <div id="flush-collapseFive" class="accordion-collapse collapse"
                        aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample5">
                        <div class="accordion-body"
                          style="background-color: #EFEFEF !important; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
                          <div class="">
                            <div class="row mx-2">
                              <div class="col-5 d-flex g-0">
                                <div class="text-nowrap">
                                  <span class="fw-bold" style=" font-size: 15px;">
                                    Neue Anfarge
                                  </span>
                                </div>
                              </div>
                              <div class="col g-0 d-flex justify-content-end">
                                <div class="select-div text-end ">
                                  <select name="" class="fw-bold" id=""
                                    style="background-color: #EFEFEF; font-size: 15px;color:#9F9F9F;">
                                    <option selected>Select</option>
                                    <option value="1">Ja</option>
                                    <option value="2">Nein</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="input-div1">
                              <div class="">
                                <span class="" style="font-size: 15px;">
                                  Gesellschaft
                                </span>
                              </div>
                              <input class="py-1" type="text" name="" id="">
                            </div>
                            <div class="input-select-div">
                              <div class="">
                                <span class="" style="font-size: 15px;">
                                  Anzahl Personen
                                </span>
                              </div>
                              <select class="form-select w-50" aria-label="Default select example">
                                <option selected></option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                              </select>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="text-center mt-3 pb-3">
                  <div class="row">
                    <div class="col g-0 text-end my-auto">
                      <div class="">
                        <span class="pe-2" style="color: #9F9F9F;">
                          
                        </span>
                      </div>
                    </div>
                    <div class="col g-0 text-start">
                      <div class="">
                        <button class="px-5 py-2" id="submitt" type="button" style="border: none; border-radius: 9px; background-color:#285F52;">
                          <svg xmlns="http://www.w3.org/2000/svg" width="58.155" height="19.159"
                            viewBox="0 0 58.155 19.159">
                            <g id="Group_453" data-name="Group 453" transform="translate(0.004)">
                              <line id="Line_16" data-name="Line 16" x2="51.954" y2="0.2" transform="translate(0 9.287)"
                                fill="none" stroke="#3fd599" stroke-width="2" />
                              <path id="Polygon_2" data-name="Polygon 2" d="M9.58,0l9.58,11.642H0Z"
                                transform="translate(58.151 0) rotate(90)" fill="#3fd599" />
                            </g>
                          </svg>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </form>
  @endsection
  <style>
    .btn-group label {
      box-shadow: none !important;
    }

    .input-group .form-control:focus {
      border-color: #ced4da !important;
      box-shadow: none !important;
    }

    .slct1 {
      border: none !important;
      border-bottom-right-radius: 5px !important;
      border-bottom-left-radius: 5px !important;
    }

    .slct1:focus-visible {
      outline: none;
    }

    .date-input-div input[type="date"]:focus-visible {
      outline: none;
    }

    .ja-group-btn {
      width: 85px;
      font-size: 14px;
      border: none;
      background-color: #fff;
      border-bottom-left-radius: 12px;
      border-top-left-radius: 12px;
      border-right: 1px #9F9F9F solid !important;
    }

    .ja-group-btn:hover {
      background-color: #dfdbdb;
    }

    .ja-group-btn:focus {
      background-color: #a3a3a3;
      color: #fff;
    }

    .ja-group-btn1 {
      font-size: 14px;
      border: none;
      border-bottom: #C4C6D2 1px solid;
      background-color: #fff;
      border-bottom-left-radius: 0;
      border-top-left-radius: 12px;
      border-right: 1px #9F9F9F solid !important;
    }

    .ja-group-btn1:hover {
      background-color: #dfdbdb;
    }

    .ja-group-btn1:focus {
      background-color: #a3a3a3;
      color: #fff;
    }

    .nein-group-btn {
      width: 85px;
      font-size: 14px;
      border: none;
      background-color: #fff;
      border-bottom-right-radius: 12px;
      border-top-right-radius: 12px;
      border-left: 1px #c9c8c8 solid !important;
    }

    .nein-group-btn:hover {
      background-color: #dfdbdb;
    }

    .nein-group-btn:focus {
      background-color: #a3a3a3;
      color: #fff;
    }

    .nein-group-btn1 {
      font-size: 14px;
      border: none;
      border-bottom: #C4C6D2 1px solid;
      background-color: #fff;
      border-bottom-right-radius: 0;
      border-top-right-radius: 12px;
      border-left: 1px #c9c8c8 solid !important;
    }

    .nein-group-btn1:hover {
      background-color: #dfdbdb;
    }

    .nein-group-btn1:focus {
      background-color: #a3a3a3;
      color: #fff;
    }

    .input-select-div select:focus {
      outline: none;
      box-shadow: none;
      border-color: #fff;
    }

    .input-select-div select {
      border-radius: 7px !important;

    }

    .input-div1 input {
      border: none;
      border-radius: 5px;
    }

    .input-div1 input:focus-visible {
      outline: none;
    }

    .accordion-button:focus {
      background-color: #fff !important;
      color: #434343;
      box-shadow: none;
      border-color: #434343;
    }

    .accordion-button:not(.collapsed) {
      color: #434343;
      background-color: #fff;
      box-shadow: none;
    }

    .select-div select {
      border: none;
    }

    .select-div select:focus-visible {
      outline: none;
    }

    .upload-box input[type="file"] {
      display: none;
    }

    .krankenkasse-content {
      background-color: #fff;
      border-bottom-left-radius: 17px !important;
      border-bottom-right-radius: 17px !important;
      border-top-right-radius: 17px !important;
    }

    .auto-content {
      background-color: #fff;
      border-bottom-left-radius: 17px !important;
      border-bottom-right-radius: 17px !important;
      border-top-right-radius: 17px !important;
      border-top-left-radius: 17px !important;
    }

    .sachen-content {
      background-color: #fff;
      border-bottom-left-radius: 17px !important;
      border-bottom-right-radius: 17px !important;
      border-top-right-radius: 17px !important;
      border-top-left-radius: 17px !important;
    }

    .vorsorge-content {
      background-color: #fff;
      border-bottom-left-radius: 17px !important;
      border-bottom-right-radius: 17px !important;
      border-top-left-radius: 17px !important;
    }

    .krankenkasse-btn {
      color: black;
      font-weight: 600;
      border: none !important;
      border-top-left-radius: 15px !important;
      border-top-right-radius: 15px !important;
    }

    .krankenkasse-btn:hover {
      color: black;
    }

    .auto-btn {
      color: black;
      font-weight: 600;
      border: none !important;
      border-top-left-radius: 15px !important;
      border-top-right-radius: 15px !important;
    }

    .auto-btn:hover {
      color: black;
    }

    .sachen-btn {
      color: black;
      font-weight: 600;
      border: none !important;
      border-top-left-radius: 15px !important;
      border-top-right-radius: 15px !important;
    }

    .sachen-btn:hover {
      color: black;
    }

    .vorsorge-btn {
      color: black;
      font-weight: 600;
      border: none !important;
      border-top-left-radius: 15px !important;
      border-top-right-radius: 15px !important;
    }

    .vorsorge-btn:hover {
      color: black;
    }

    .upload-box {
      background-image: url("data:image/svg+xml,%3csvg width='100%25' height='100%25' xmlns='http://www.w3.org/2000/svg'%3e%3crect width='100%25' height='100%25' fill='none' rx='9' ry='9' stroke='%23333' stroke-width='3' stroke-dasharray='6%2c 14' stroke-dashoffset='0' stroke-linecap='square'/%3e%3c/svg%3e");
      border-radius: 9px;
    }
  </style>
  <script>
    var cntt = 0;
  let position = [
    '<button class="nav-link col krankenkasse-btn active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true"><svg xmlns="http://www.w3.org/2000/svg" width="58.155" height="19.159" viewBox="0 0 58.155 19.159">  <g id="Group_453" data-name="Group 453" transform="translate(0.004)"> <line id="Line_16" data-name="Line 16" x2="51.954" y2="0.2" transform="translate(0 9.287)" fill="none" stroke="#3fd599" stroke-width="2"></line>  <path id="Polygon_2" data-name="Polygon 2" d="M9.58,0l9.58,11.642H0Z" transform="translate(58.151 0) rotate(90)" fill="#3fd599"></path> </g></svg></button>',
  '<button class="nav-link col auto-btn" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false"><svg xmlns="http://www.w3.org/2000/svg" width="58.155" height="19.159" viewBox="0 0 58.155 19.159"><g id="Group_453" data-name="Group 453" transform="translate(0.004)">    <line id="Line_16" data-name="Line 16" x2="51.954" y2="0.2" transform="translate(0 9.287)" fill="none" stroke="#3fd599" stroke-width="2"></line>  <path id="Polygon_2" data-name="Polygon 2" d="M9.58,0l9.58,11.642H0Z" transform="translate(58.151 0) rotate(90)" fill="#3fd599"></path>   </g>    </svg></button>',
'<button class="nav-link col sachen-btn" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false"><svg xmlns="http://www.w3.org/2000/svg" width="58.155" height="19.159" viewBox="0 0 58.155 19.159">  <g id="Group_453" data-name="Group 453" transform="translate(0.004)">      <line id="Line_16" data-name="Line 16" x2="51.954" y2="0.2" transform="translate(0 9.287)" fill="none" stroke="#3fd599" stroke-width="2"></line>    <path id="Polygon_2" data-name="Polygon 2" d="M9.58,0l9.58,11.642H0Z" transform="translate(58.151 0) rotate(90)" fill="#3fd599"></path></g></svg></button>',
'<button class="nav-link  col vorsorge-btn" id="nav-fourth-tab" data-bs-toggle="tab" data-bs-target="#nav-fourth" type="button" role="tab" aria-controls="nav-fourth" aria-selected="false"><svg xmlns="http://www.w3.org/2000/svg" width="58.155" height="19.159" viewBox="0 0 58.155 19.159">  <g id="Group_453" data-name="Group 453" transform="translate(0.004)">     <line id="Line_16" data-name="Line 16" x2="51.954" y2="0.2" transform="translate(0 9.287)" fill="none" stroke="#3fd599" stroke-width="2"></line>   <path id="Polygon_2" data-name="Polygon 2" d="M9.58,0l9.58,11.642H0Z" transform="translate(58.151 0) rotate(90)" fill="#3fd599"></path></g> </svg></button>'];
function upload(x){
document.getElementById(x.id + 'c').value = x.value;
}
function nextonee(){
  if(cnt < 5 && cnt> -1){
if(cntt == 0){
  $('#nav-profile').addClass('active show');
  $('#nav-home').removeClass('active show');
  $('#nav-profile-tab').addClass('active');
  $('#nav-home-tab').removeClass('active');
}
if(cntt == 1){
  $('#nav-contact').addClass('active show');
  $('#nav-profile').removeClass('active show');
  $('#nav-contact-tab').addClass('active');
  $('#nav-profile-tab').removeClass('active');
}
if(cntt == 2){
  $('#nav-fourth').addClass('active show');
  $('#nav-contact').removeClass('active show');
  $('#nav-fourth-tab').addClass('active');
  $('#nav-contact-tab').removeClass('active');
 document.getElementById("submitt").type = "submit";
}
cntt++;
}
}

// $('#nextonee__').on('click', function(){
//   alert('aaa');
// });


    function hideSpan() {
      if (document.getElementById("bastelle-span").style.display === "none") {
        document.getElementById("bastelle-span").style.display = "block";
        document.getElementById("button1").style.setProperty("border-bottom-left-radius", "10px", "important");
        document.getElementById("button1").style.setProperty("border-bottom-right-radius", "10px", "important");
      }
      else {
        document.getElementById("bastelle-span").style.display = "none";
        document.getElementById("button1").style.setProperty("border-bottom-left-radius", "0px", "important");
        document.getElementById("button1").style.setProperty("border-bottom-right-radius", "0px", "important");
      }
    }
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>

@endsection