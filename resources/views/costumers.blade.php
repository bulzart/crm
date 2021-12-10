<html>
@extends('template.navbar')
@section('content')

    <form action="{{route('costumers')}}">
        <input class="form-control" type="text" name="searchname" placeholder="Search...">
        <input type="date" name="searchdate1">
        <input type="date" name="searchdate2">
        <input class="btn btn-success" type="submit" value="Save">
    </form>
    <a href="{{route('searchword')}}" class="btn btn-info">A/Z</a>


    @foreach($data as $dat)
        <p>{{$dat->name}}</p>
    @endforeach


@endsection
</html>
