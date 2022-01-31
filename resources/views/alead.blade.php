@extends('template.navbar')
@section('content')
@if($errors->any())
<div class="text-center">
    {!! implode('<br />', $errors->all(':message')) !!} 
</div>
@endif
<form action="{{route('asignlead',$lead->id)}}" method="post">
    @csrf
    <input type="hidden" name="countt" id="countt">
<div class="form-group container text-center pt-4">
  <fieldset>
      <label for="disabledTextInput">First Name</label>
      <input type="text" name="name" id="disabledTextInput" class="form-control text-center" value="{{$lead->first_name}}">

    <div class="form-group">
      <label >Last Name</label>
      <input type="text" value="{{$lead->last_name}}" name="lname" class="form-control text-center">
      <label>Sprache</label>
      <input type="text" value="" name="sprache" class="form-control text-center">
      <label>Personen</label>
      <input type="text" value="{{$lead->number_of_persons}}" name="personen" class="form-control text-center">
      <label>Nationality</label>
      <input type="text" value="{{$lead->nationality}}" name="nationality" class="form-control text-center">
      <label>Address</label>
      <input type="text" value="{{$lead->address}}" name="address" class="form-control text-center">
           <label>PLZ</label>
      <input type="text" value="{{$lead->postal_code}}" name="postal_code" class="form-control text-center">
           <label>Ort</label>
      <input type="text" value="{{$lead->city}}" name="ort" class="form-control text-center">
    </div>

  </fieldset>
  <label>Appointment date</label>
  <br>
  <input type="date" class="col-12 text-center" name="appointmentdate">
</br>
<label>Time</label>
<input type="time" name="apptime" class="text-center col-12">
     <label>Gesundheit</label>
      <input type="text" value="" name="gesundheit" class="form-control text-center">
           <label>Zufriedenheit</label>
      <input type="text" value="" name="zufriedenheit" class="form-control text-center">
            <label>Bemerkung</label>
      <input type="text" value="" name="bemerkung" class="form-control text-center">
  <div class="justify-content-end d-flex">
  <i class="fas fa-filter" style="cursor: pointer;" title="Filter" data-bs-toggle="modal" data-bs-target="#exampleModal"></i>
</div>

<br>



  <input type="submit" class="btn btn-primary mt-2" value="Accept">
</form>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Filter</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      <form method="post" class="form-control">



    @csrf
    <label>Name like</label>
<input type="text" name="name" class="form-control">

  <h5 class="h5">Quality</h5>

  <div class="d-inline d-flex">
<input type="date" name="from" class="form-control">
<input type="date" name="now" class="form-control">
</div>



<br>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" value="Filter">
      </div>
      </form>
    </div>
  </div>
</div>


@endsection

