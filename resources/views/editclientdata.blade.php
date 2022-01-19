@if(Auth::guard('admins')->user()->hasRole('backoffice') || Auth::guard('admins')->user()->hasRole('admin'))
@extends('template.navbar')
@section('content')
    <div class="" style="margin-top: 20vh">

    <div class="test col-11 col-sm-11 col-md-9 col-lg-6 mx-auto my-3" >
        <div class="pt-3">
            <span class="fs-4 fw-600 ps-4">
                Edit Client
             </span>
        </div>
        <form class="py-4 px-4" method="post" action="{{route('editclientform',$client->id)}}">
            @csrf
            <div class="py-2">
                <input class="form-control" type="text" name="first_name" value="{{$client->first_name}}">
            </div>
            <div class="py-2">
                <input class="form-control" type="text" name="last_name" value="{{$client->last_name}}">
            </div>
            <div class="py-2">
                <input class="form-control" type="date" name="birthdate" value="{{$client->birthdate}}">
            </div>
            <div class="py-2">
                <select class="form-control" name="status">
                    @if($client->status == 'Open')
                        <option>{{$client->status}}</option>
                        <option>Submited</option>
                        <option>Done</option>
                    @endif
                    @if($client->status == 'Done')
                        <option>{{$client->status}}</option>
                        <option>Submited</option>
                        <option>Open</option>
                    @endif
                    @if($client->status == 'Submited')
                        <option>{{$client->status}}</option>
                        <option>Done</option>
                        <option>Open</option>
                    @endif
                </select>
            </div>
            <div class="text-center">
                <input type="submit" value="Save" class="btn btn-secondary px-4 mt-3">
            </div>
        </form>
    </div>
    </div>
@endsection
<style>
    .test {
        background-color: #f8f8f8;
        border-radius: 25px !important;
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    }
</style>
@endif
