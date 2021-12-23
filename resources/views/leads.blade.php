
@extends('template.navbar')
@section('content')
    @if(\Session::has('success'))
        <div class="alert alert-success alert-dismissible fade show col-12" role="alert">

            {!! \Session::get('success') !!}
        </div>
    @endif
<head>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<div class="row">
<div class="col-md-8 col-lg-8 col-sm-12 col-xs-8 col-12">
<div class="text-center">
    <h5 class="h5">Open leads</h5>
</div>
<table>
    <tr>
        <th colspan="2">ID</th>
    <th>Name</th>

    <th colspan="2">People&nbsp;</th>
    <th>Came from</th>

    </tr>
@foreach($leads as $l)
<tr>
    <td>{{$l->id}}<td>
    <td>{{$l->name}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
    <td>{{$l->count}}&nbsp;<td>
        <td>@if($l->campaign != null){{$l->campaign->name}}@else Registered @endif</td>


       <td><button  class="btn btn-primary text-light" data-bs-toggle="modal" data-bs-target="#{{$l->slug}}">Appointment</button><td>
        <div class="modal fade" id="{{$l->slug}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">{{$l->name}}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <span class="fw-bold">Herkunft vom lead</span><br>

                        <span>Platform: {{$l->campaign->name}}</span><br>
                        <span>Kampgne: {{$l->campaign->name}}</span><br>
                        <span>Grund: {{$l->addres}}</span><br>
                        <span>Teilnahme: {{$l->created_at}}</span><br>
                        <span class="fw-bold">Herkunft vom lead</span><br>
                        <a href="tel:{{$l->telprivat}}"><i class="fas fa-phone-square-alt" style="font-size: 58px;"></i></a>
                    </div>
                    <div class="modal-footer">
                        <a href="{{route('dlead',$l->id)}}" type="button" class="btn btn-danger">X</a>
                        <a href="{{route('alead',$l->id)}}" type="button" class="btn btn-success">Go</a>
                    </div>
                </div>
            </div>
        </div>


</tr>

@endforeach
</table>
@if($leads->count() > 1)
    <div class="d-flex justify-content-center mt-4"><nav role="navigation" aria-label="Pagination Navigation" class="flex items-center justify-between">
        @if($leads->currentPage() > 1)
        <span> <a href="{{route('leads',['page' => $leads->currentPage() -1])}}" class="relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150"></span>
        « Previous
            @endif

                </span> <a href="{{route('leads',['page' => $leads->currentPage() +1 ,])}}" class="relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                    Next »
                </a></div> <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between"><div><p class="text-sm text-gray-700 leading-5">

                </p></div> <div></div></div></nav>
                @endif
</div>
<div class="col-md-4 col-lg-4 col-sm-12 col-xs-4 col-12 text-center">
Statistics
    <div>
        <span>Instagram: {{$total['instagram']}}</span><br>
        <span>Facebook: {{$total['facebook']}}</span><br>
        <span>Google: {{$total['google']}}</span>
    </div>
</div>

</div>
@endsection

