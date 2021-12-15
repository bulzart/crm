<html>
@extends('template.navbar')
@section('content')
<div class="col-12 text-center">

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
        <p style="font-size: 23px;">{{$dat->name}}</p>
    @endforeach
</div>
@endsection
</html>
