@extends('template.navbar')
@section('content')
<form action="{{route('appointlead',$lead->id)}}" method="post">
    @csrf
<div class="form-group container text-center pt-4">
  <fieldset disabled>
      <label for="disabledTextInput">Name</label>
      <input type="text" id="disabledTextInput" class="form-control" value="{{$lead->name}}">

    <div class="form-group">
      <label for="disabledSelect">People</label>
      <input type="number" value="{{$lead->count}}" class="form-control">
      <label>Came from</label>
      <input type="text" value="{{$lead->comefrom}}" class="form-control">
    </div>

  </fieldset>
  <label>Appointment date</label>
  <br>
  <input type="date" class="col-12 text-center" name="appointmentdate">
</br>
<label>Time</label>
<input type="time" name="apptime" class="text-center col-12">


<br>

<a href="{{route('reject',$lead->id)}}" class="btn btn-primary">Reject</a>
  <input type="submit" class="btn btn-primary mt-2" value="Appoint">

  
</form>

</div>

@endsection