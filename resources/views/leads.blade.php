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
</head>

<body>

<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col my-3">
                <div class="leads-div py-3 px-4">
                    <div class="leads-header my-2">
                        <span class="fs-4 fw-600 header-text">Leads</span>
                    </div>
                    <div class="information-div">
                        <div class="info-header my-2">
                <span class="fs-5 fw-600 header-text">
                  Information
                </span>
                        </div>
                        <div class="info-content">
                            <div class="tasks-divv py-2 px-1">
                                <div class="row my-1 mx-3">
                                    <div class="col-3 g-0">
                                        <div class="">
                        <span class="spn-muted">
                          Datum
                        </span>
                                        </div>
                                    </div>
                                    <div class="col g-0">
                                        <div class="">
                        <span class="spn-muted">
                          Beschreibung
                        </span>
                                        </div>
                                    </div>
                                    <div class="col g-0">
                                        <div class="">
                        <span class="spn-muted">
                          Kundenname
                        </span>
                                        </div>
                                    </div>
                                </div>
                                <hr class="m-0">
                                <div class="row my-1 mx-3">
                                    <div class="col-3 g-0">
                                        <div class="">
                        <span class="spn-normal">
                          21.09.2022
                        </span>
                                        </div>
                                    </div>
                                    <div class="col g-0">
                                        <div class="">
                        <span class="spn-normal">
                          Policen eintragen
                        </span>
                                        </div>
                                    </div>
                                    <div class="col g-0">
                                        <div class="">
                        <span class="spn-normal">
                          Max Mustermann
                        </span>
                                        </div>
                                    </div>
                                </div>
                                <hr class="m-0">
                                <div class="row my-1 mx-3">
                                    <div class="col-3 g-0">
                                        <div class="">
                        <span class="spn-normal">
                          21.09.2022
                        </span>
                                        </div>
                                    </div>
                                    <div class="col g-0">
                                        <div class="">
                        <span class="spn-normal">
                          Policen eintragen
                        </span>
                                        </div>
                                    </div>
                                    <div class="col g-0">
                                        <div class="">
                        <span class="spn-normal">
                          Max Mustermann
                        </span>
                                        </div>
                                    </div>
                                </div>
                                <hr class="m-0">
                                <div class="row my-1 mx-3">
                                    <div class="col-3 g-0">
                                        <div class="">
                        <span class="spn-normal">
                          21.09.2022
                        </span>
                                        </div>
                                    </div>
                                    <div class="col g-0">
                                        <div class="">
                        <span class="spn-normal">
                          Policen eintragen
                        </span>
                                        </div>
                                    </div>
                                    <div class="col g-0">
                                        <div class="">
                        <span class="spn-normal">
                          Max Mustermann
                        </span>
                                        </div>
                                    </div>
                                </div>
                                <hr class="m-0">
                                <div class="row my-1 mx-3">
                                    <div class="col-3 g-0">
                                        <div class="">
                        <span class="spn-normal">
                          21.09.2022
                        </span>
                                        </div>
                                    </div>
                                    <div class="col g-0">
                                        <div class="">
                        <span class="spn-normal">
                          Policen eintragen
                        </span>
                                        </div>
                                    </div>
                                    <div class="col g-0">
                                        <div class="">
                        <span class="spn-normal">
                          Max Mustermann
                        </span>
                                        </div>
                                    </div>
                                </div>
                                <hr class="m-0">
                                <div class="row my-1 mx-3">
                                    <div class="col-3 g-0">
                                        <div class="">
                        <span class="spn-normal">
                          21.09.2022
                        </span>
                                        </div>
                                    </div>
                                    <div class="col g-0">
                                        <div class="">
                        <span class="spn-normal">
                          Policen eintragen
                        </span>
                                        </div>
                                    </div>
                                    <div class="col g-0">
                                        <div class="">
                        <span class="spn-normal">
                          Max Mustermann
                        </span>
                                        </div>
                                    </div>
                                </div>
                                <hr class="m-0">

                                <div class="text-end py-3">
                    <span class="px-2">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                           class="bi bi-chevron-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                              d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                      </svg>
                    </span>
                                    <span class="px-2">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                           class="bi bi-chevron-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                              d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                      </svg>
                    </span>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="assigned-leads py-3">
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

                        <div class="assigned-leads-content">
                            @foreach($leads as $lead)
                                <a  class="text-decoration-none" style="cursor: pointer" data-bs-toggle="modal" data-bs-target="#{{$lead->slug}}">
                                    <div class="py-2 my-2"
                                         style="background-color: #4EC590; border-radius: 15px; color: #fff;">
                                        <div class="mx-3 ">
                                            <div class="">
                      <span class="fw-bold fs-5">
                        {{$lead->first_name}}
                      </span>
                                            </div>
                                            <div class="">
                      <span>
                        {{$lead->number_of_persons}} Persons
                      </span>
                                            </div>
                                            <div class="">
                      <span style="font-size: 12px;">
                        <span class="">
                          <svg xmlns="http://www.w3.org/2000/svg" width="12.587" height="16.243"
                               viewBox="0 0 8.587 12.243">
                            <path id="Path_170" data-name="Path 170"
                                  d="M1507.522,2353.695l.285-.4c.45-.637.916-1.3,1.32-1.908a17.1,17.1,0,0,0,1.607-2.977,3.3,3.3,0,0,0,.287-1.836,3.541,3.541,0,0,0-3.492-2.981,3.5,3.5,0,0,0-2.866,1.494,3.146,3.146,0,0,0-.606,2.37,6.507,6.507,0,0,0,.733,1.932,32.418,32.418,0,0,0,2.511,4.006c.072.1.145.2.22.3m.009-9.063h.024a2.481,2.481,0,0,1-.023,4.963h-.028a2.486,2.486,0,0,1-2.446-2.508,2.475,2.475,0,0,1,2.474-2.455m0,9.964c-.23-.312-.449-.6-.66-.9a32.713,32.713,0,0,1-2.552-4.072,7.013,7.013,0,0,1-.785-2.091,3.7,3.7,0,0,1,.695-2.752,4.05,4.05,0,0,1,7.31,1.7,3.861,3.861,0,0,1-.319,2.12,17.67,17.67,0,0,1-1.656,3.068C1508.941,2352.621,1508.181,2353.663,1507.534,2354.6Zm0-9.438a1.955,1.955,0,0,0-.021,3.91h.023a1.955,1.955,0,0,0,.018-3.91Z"
                                  transform="translate(-1503.243 -2342.783)" fill="#fff" stroke="#fff"
                                  stroke-width="0.5"/>
                          </svg>
                        </span>
                        {{ucfirst($lead->campaign->name)}}
                      </span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <div class="modal fade" id="{{$lead->slug}}" tabindex="-1"
                                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">{{$lead->first_name}}</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <span class="fw-bold">Herkunft vom lead</span><br>

                                                <span>Platform: {{$lead->campaign->name}}</span><br>
                                                <span>Kampgne: {{$lead->campaign->name}}</span><br>
                                                <span>Grund: {{$lead->addres}}</span><br>
                                                <span>Teilnahme: {{$lead->created_at}}</span><br>
                                                <span class="fw-bold">Herkunft vom lead</span><br>
                                                <a href="tel:{{$lead->telephone}}"><i class="fas fa-phone-square-alt"
                                                                                   style="font-size: 58px;"></i></a>
                                            </div>
                                            <div class="modal-footer">
                                                <a href="{{route('dlead',$lead->id)}}" type="button"
                                                   class="btn btn-danger">X</a>
                                                <a href="{{route('alead',$lead->id)}}" type="button"
                                                   class="btn btn-success">Go</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
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
</style>


</body>

</html>

{{--@extends('template.navbar')--}}
{{--@section('content')--}}
{{--    @if(\Session::has('success'))--}}
{{--        <div class="alert alert-success alert-dismissible fade show col-12" role="alert">--}}

{{--            {!! \Session::get('success') !!}--}}
{{--        </div>--}}
{{--    @endif--}}
{{--<head>--}}
{{--    <!-- CSS only -->--}}
{{--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">--}}
{{--</head>--}}

{{--<div class="row">--}}
{{--<div class="col-md-8 col-lg-8 col-sm-12 col-xs-8 col-12">--}}
{{--<div class="text-center">--}}
{{--    <h5 class="h5">Open leads</h5>--}}
{{--</div>--}}
{{--<table>--}}
{{--    <tr>--}}
{{--        <th colspan="2">ID</th>--}}
{{--    <th>Name</th>--}}

{{--    <th colspan="2">People&nbsp;</th>--}}
{{--    <th>Came from</th>--}}

{{--    </tr>--}}
{{--@foreach($leads as $l)--}}
{{--<tr>--}}
{{--    <td>{{$l->id}}<td>--}}
{{--    <td>{{$l->name}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>--}}
{{--    <td>{{$l->count}}&nbsp;<td>--}}
{{--        <td>@if($l->campaign != null){{$l->campaign->name}}@else Registered @endif</td>--}}


{{--       <td><button  class="btn btn-primary text-light" data-bs-toggle="modal" data-bs-target="#{{$l->slug}}">Appointment</button><td>--}}
{{--        <div class="modal fade" id="{{$l->slug}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
{{--            <div class="modal-dialog">--}}
{{--                <div class="modal-content">--}}
{{--                    <div class="modal-header">--}}
{{--                        <h5 class="modal-title" id="exampleModalLabel">{{$l->name}}</h5>--}}
{{--                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>--}}
{{--                    </div>--}}
{{--                    <div class="modal-body">--}}
{{--                        <span class="fw-bold">Herkunft vom lead</span><br>--}}

{{--                        <span>Platform: {{$l->campaign->name}}</span><br>--}}
{{--                        <span>Kampgne: {{$l->campaign->name}}</span><br>--}}
{{--                        <span>Grund: {{$l->addres}}</span><br>--}}
{{--                        <span>Teilnahme: {{$l->created_at}}</span><br>--}}
{{--                        <span class="fw-bold">Herkunft vom lead</span><br>--}}
{{--                        <a href="tel:{{$l->telephone}}"><i class="fas fa-phone-square-alt" style="font-size: 58px;"></i></a>--}}
{{--                    </div>--}}
{{--                    <div class="modal-footer">--}}
{{--                        <a href="{{route('dlead',$l->id)}}" type="button" class="btn btn-danger">X</a>--}}
{{--                        <a href="{{route('alead',$l->id)}}" type="button" class="btn btn-success">Go</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}


{{--</tr>--}}

{{--@endforeach--}}
{{--</table>--}}
{{--@if($leads->count() > 1)--}}
{{--    <div class="d-flex justify-content-center mt-4"><nav role="navigation" aria-label="Pagination Navigation" class="flex items-center justify-between">--}}
{{--        @if($leads->currentPage() > 1)--}}
{{--        <span> <a href="{{route('leads',['page' => $leads->currentPage() -1])}}" class="relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150"></span>--}}
{{--        « Previous--}}
{{--            @endif--}}

{{--                </span> <a href="{{route('leads',['page' => $leads->currentPage() +1 ,])}}" class="relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">--}}
{{--                    Next »--}}
{{--                </a></div> <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between"><div><p class="text-sm text-gray-700 leading-5">--}}

{{--                </p></div> <div></div></div></nav>--}}
{{--                @endif--}}
{{--</div>--}}
{{--<div class="col-md-4 col-lg-4 col-sm-12 col-xs-4 col-12 text-center">--}}
{{--Statistics--}}
{{--    <div>--}}
{{--        <span>Instagram: {{$total['instagram']}}</span><br>--}}
{{--        <span>Facebook: {{$total['facebook']}}</span><br>--}}
{{--        <span>Sanascout: {{$total['sana']}}</span>--}}
{{--    </div>--}}
{{--</div>--}}

{{--</div>--}}
{{--@endsection--}}

