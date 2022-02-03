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
    <link rel="icon" type="image/png" href="img/Favicon.png">
    <title>Appointments</title>
</head>

<body style="background: #F8F8F8">
    <section class="col my-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 f-flex">
                    <div class="map-div mx-4">
                        <div class="mapouter">
                            <div class="gmap_canvas">
                                <iframe style="height: 500px; width: 100%;" id="gmap_canvas"
                                        src="https://maps.google.com/maps?q='+{{$lead->address}}+'&t=k&z=15&ie=UTF8&iwloc=&output=embed"
                                        frameborder="0" scrolling="no" marginheight="0"
                                        marginwidth="0"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col my-3">
                    <div class="info-div">
                        <div class="py-3">
                            <div class="mx-3">
                                    <span class="fs-3 fw-bold text-color-header">
                                        {{$lead->first_name}}
                                    </span>
                            </div>
                            <div class="mx-3">
                                    <span class="fs-6 text-color-header">
                                        <span class="">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12.587" height="16.243"
                                                 viewBox="0 0 8.587 12.243">
                                                <path id="Path_170" data-name="Path 170"
                                                      d="M1507.522,2353.695l.285-.4c.45-.637.916-1.3,1.32-1.908a17.1,17.1,0,0,0,1.607-2.977,3.3,3.3,0,0,0,.287-1.836,3.541,3.541,0,0,0-3.492-2.981,3.5,3.5,0,0,0-2.866,1.494,3.146,3.146,0,0,0-.606,2.37,6.507,6.507,0,0,0,.733,1.932,32.418,32.418,0,0,0,2.511,4.006c.072.1.145.2.22.3m.009-9.063h.024a2.481,2.481,0,0,1-.023,4.963h-.028a2.486,2.486,0,0,1-2.446-2.508,2.475,2.475,0,0,1,2.474-2.455m0,9.964c-.23-.312-.449-.6-.66-.9a32.713,32.713,0,0,1-2.552-4.072,7.013,7.013,0,0,1-.785-2.091,3.7,3.7,0,0,1,.695-2.752,4.05,4.05,0,0,1,7.31,1.7,3.861,3.861,0,0,1-.319,2.12,17.67,17.67,0,0,1-1.656,3.068C1508.941,2352.621,1508.181,2353.663,1507.534,2354.6Zm0-9.438a1.955,1.955,0,0,0-.021,3.91h.023a1.955,1.955,0,0,0,.018-3.91Z"
                                                      transform="translate(-1503.243 -2342.783)" fill="#656565"
                                                      stroke="#656565" stroke-width="0.5" />
                                            </svg>
                                        </span>
                                        {{$lead->address}}
                                    </span>
                            </div>
                        </div>
                        @if($lead->assigned != 0)
                       <div class="row">
                           <div class="col-md-3 col-6 py-2" style="background:white; border-radius: 20px;">
                               Agent: {{Auth::user()->name}}
                           </div>
                           <div class="col-md-3 col-6 py-2" style="background:white; border-radius: 20px;">
                               Zelt: {{$lead->time}}
                           </div>
                           <div class="col-md-3 col-6 py-2" style="background:white; border-radius: 20px;">
                               Name: {{$lead->first_name}}
                           </div>
                           <div class="col-md-3 col-6 py-2" style="background:white; border-radius: 20px;">
                               PLZ: {{$lead->postal_code}}
                           </div>
                           <div class="col-md-3 col-6 py-2" style="background:white; border-radius: 20px;">
                               Berater: {{$lead->berater}}
                           </div>
                           <div class="col-md-3 col-6 py-2" style="background:white; border-radius: 20px;">
                               Sprache: {{$lead->sprache}}
                           </div>
                           <div class="col-md-3 col-6 py-2" style="background:white; border-radius: 20px;">
                               Vorname: {{$lead->last_name}}
                           </div>
                           <div class="col-md-3 col-6 py-2" style="background:white; border-radius: 20px;">
                               Ort: {{$lead->city}}
                           </div>
                           <div class="col-md-3 col-6 py-2" style="background:white; border-radius: 20px;">
                               Tag:
                           </div>
                           <div class="col-md-3 col-6 py-2" style="background:white; border-radius: 20px;">
                               Personen: {{$lead->number_of_persons}}
                           </div>
                           <div class="col-md-3 col-6 py-2" style="background:white; border-radius: 20px;">
                               Strasse: {{$lead->address}}
                           </div>
                           <div class="col-md-3 col-6 py-2" style="background:white; border-radius: 20px;">
                               Tel: {{$lead->telephone}}
                           </div>
                           <div class="col-md-3 col-6 py-2" style="background:white; border-radius: 20px;">
                               Datum: {{$lead->birthdate}}
                           </div>

                           <div class="col-md-3 col-6 py-2" style="background:white; border-radius: 20px;">
                               Nationalitat: {{$lead->nationality}}
                           </div>
                           <div class="col-md-3 col-6 py-2" style="background:white; border-radius: 20px;">
                               Nr:
                           </div>
                           <div class="col-md-3 col-6 py-2" style="background:white; border-radius: 20px;">
                               Zufriedenheit: {{$lead->zufriedenheit}}
                           </div>
                           <div class="col-md-12 col-12 py-2" style="background:white; border-radius: 20px;">
                           Bemerkung: {{$lead->bemerkung}}
                           </div>
                       </div>

                       @php
                       $leadss = $lead->id * 1244;
                       $leadId = \Illuminate\Support\Facades\Crypt::encrypt($leadss);
                       @endphp
                        <div class="py-3">
                            <div class="input-group">
                                <a href="{{route('dealnotclosed',Crypt::decrypt($leadId) / 1244)}}" style="text-decoration: none;cursor: pointer" class="my-auto decline-btn m-2 my-auto py-2 px-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25.145" height="25.524"
                                         viewBox="0 0 33.145 33.524">
                                        <g id="Group_620" data-name="Group 620"
                                           transform="translate(-517.079 -959.408)">
                                            <line id="Line_24" data-name="Line 24" y1="30.316" x2="30.316"
                                                  transform="translate(518.493 960.822)" fill="none"
                                                  stroke="currentColor" stroke-linecap="round" stroke-width="3" />
                                            <line id="Line_25" data-name="Line 25" x2="30.316" y2="30.316"
                                                  transform="translate(518.493 961.201)" fill="none"
                                                  stroke="currentColor" stroke-linecap="round" stroke-width="3" />
                                        </g>
                                    </svg>
                                </a>
                                <a href="{{route('dealclosed',$leadId)}}" style="text-decoration: none;cursor: pointer" class="accept-btn m-2 my-auto py-1 px-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="33.232" height="33.805"
                                         viewBox="0 0 46.232 33.805">
                                        <path id="Path_277" data-name="Path 277"
                                              d="M8370.12,999.407l15.7,15.954,7.778-8.812,19.931-22.581"
                                              transform="translate(-8368.706 -982.557)" fill="none"
                                              stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                              stroke-width="3" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    @elseif($lead->assigned != 1)
                        @php
                            $leadss = $lead->id * 1244;
                            $leadId = \Illuminate\Support\Facades\Crypt::encrypt($leadss);
                        @endphp
                        <div class="input-group">
                        <a href="{{route('acceptleadinfo',$leadId)}}" style="text-decoration: none;cursor: pointer;" class="accept-btn2 m-2 my-auto py-1 px-5">
                            <svg xmlns="http://www.w3.org/2000/svg" width="33.232" height="33.805"
                                 viewBox="0 0 46.232 33.805">
                                <path id="Path_277" data-name="Path 277"
                                      d="M8370.12,999.407l15.7,15.954,7.778-8.812,19.931-22.581"
                                      transform="translate(-8368.706 -982.557)" fill="none"
                                      stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                      stroke-width="3" />
                            </svg>
                        </a>
                        </div>
                        @endif
                </div>
            </div>
        </div>
    </section>
</div>


@endsection




<style>
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
    .accept-btn2 {
        border: 2px solid #6389d4;
        border-radius: 13px !important;
        background-color: #fff;
        color: #6389d4 !important;
    }

    .accept-btn2:hover {
        border: 2px solid #6389d4;
        background-color: #6389d4;
        color: #fff !important;
    }

    .text-color-header {
        color: #656565;
    }

    .people-icon-div {
        background-color: #525353;
        margin: 3px;
    }

    .static-btn {
        background-color: #F0F0EF !important;
        border-radius: 8px !important;
    }

    .people-svg-span {
        border-radius: 8px;
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
     .mapouter {
         position: relative;
         text-align: right;
         width: 100%;
     }

        .gmap_canvas {
            overflow: hidden;
            background: none !important;
            height: auto;
            width: 100%;
            border-radius: 21px !important;
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        }

</style>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>
