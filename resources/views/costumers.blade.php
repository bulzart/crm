<html>
@extends('template.navbar')
@section('content')
<div class="col-12 text-center" style="background: #f7f7f7;">

    <form action="{{route('costumers')}}">
        <input class="form-control" type="text" name="searchname" placeholder="Search...">
        <div class="d-inline">
        <input type="date" name="searchdate1">
        <input type="date" name="searchdate2">
        <input class="btn btn-success" type="submit" value="Save">
    </form>
    <a href="{{route('searchword')}}" class="btn btn-info">A/Z</a>
</div>

    @foreach($data as $dat)
    <div class="p-4" style="border-radius: 25px;margin-bottom: 10px; background: #fff;">
        <p style="font-size: 23px;">{{ucfirst($dat->first_name)}} ({{$dat->birthdate}})</p>
   




</div>
    @endforeach
</div>
@endsection
</html>
