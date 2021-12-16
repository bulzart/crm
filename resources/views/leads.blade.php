@if(Auth::guard('admins')->user()->role == 'salesmenager' || Auth::guard('admins')->user()->role == 'admin')
@extends('template.navbar')
@section('content')

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


       <td><a href="{{route('alead',$l->id)}}" class="btn btn-primary text-light">Appointment</a><td>
       <td><a href="{{route('dlead',$l->id)}}" class="btn btn-primary text-light">Delete</a><td>

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
</div>
</div>
@endsection
@endif
