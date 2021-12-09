@if(Auth::guard('admins')->user()->role == 'salesmenager' || Auth::guard('admins')->user()->role == 'admin')
@extends('template.navbar')
@section('content')
<div role="alert d-flex justify-content-end" aria-live="assertive" aria-atomic="true" class="toast" data-bs-autohide="false">
  <div class="toast-header">
    <img src="..." class="rounded me-2" alt="...">
    <strong class="me-auto">Bootstrap</strong>
    <small>11 mins ago</small>
    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
  </div>
  <div class="toast-body">
    Hello, world! This is a toast message.
  </div>
</div>
<div class="row">
<div class="col-md-8 col-lg-8 col-sm-12 col-xs-8 col-12">
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

    
       <td><a href="{{route('alead',$l->id)}}" class="btn text-light" style="background-color: #4D3FD3;">Assign</a><td>
       <td><a href="{{route('dlead',$l->id)}}" class="btn text-light" style="background-color: #4D3FD3;">Delete</a><td>
         
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
