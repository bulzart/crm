@extends('template.navbar')
@section('content')

    <h4>{{$leads->name}}</h4>
    <p>{{$leads->address}}</p>
<div>
    <h4>{{$leads->count}}</h4>
    <label>Personen</label>
</div>
    <div>
        <span>{{$leads->created_at}}</span>
    </div>
<div>
    <form method="POST" action="{{route('deletedlead',$leads->id)}}">
        @csrf
        <h5>Kein Termin Vereinbart</h5>
        <span>Begrundung: </span>
        <input type="text" name="reason" class="form-contorl">
        <br>
        <label>Komentar: </label>
        <input type="text" name="comment" class="form-control">

        <input type="submit" value="Save" class="btn btn-info">
    </form>
</div>

@endsection
