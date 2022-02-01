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
  <div class="form-group row">
  <div class="col-12 col-md-6">
      <label for="disabledTextInput">First Name</label>
      <input type="text" name="name" id="disabledTextInput" class="form-control text-center" value="{{$lead->first_name}}">
</div>
<div class="col-12 col-md-6">
      <label >Last Name</label>
      <input type="text" value="{{$lead->last_name}}" name="lname" class="form-control text-center">
</div>
<div class="col-12 col-md-6">
      <label>Sprache</label>
      <input type="text" value="" name="sprache" class="form-control text-center">
</div>
<div class="col-12 col-md-6">
      <label>Personen</label>
      <input type="text" value="{{$lead->number_of_persons}}" name="personen" class="form-control text-center">
</div>
<div class="col-12 col-md-6">
      <label>Nationality</label>
      <input type="text" value="{{$lead->nationality}}" name="nationality" class="form-control text-center">
</div>
<div class="col-12 col-md-6">
      <label>Address</label>
      <input type="text" value="{{$lead->address}}" name="address" class="form-control text-center">
</div>
<div class="col-12 col-md-6">
      <label>PLZ</label>
      <input type="text" value="{{$lead->postal_code}}" name="postal_code" class="form-control text-center">
</div>
<div class="col-12 col-md-6">
      <label>Ort</label>
      <input type="text" value="{{$lead->city}}" name="ort" class="form-control text-center">
</div>
    

  </fieldset>
  <div class="col-12 col-md-6">
  <label>Appointment date</label>
  <input type="date" class="col-12 text-center" name="appointmentdate">

</div>
<div class="col-12 col-md-6">
<label>Time</label>
<input type="time" name="apptime" class="text-center col-12">
</div>
<div class="col-12 col-md-6">
     <label>Gesundheit</label>
      <input type="text" value="" name="gesundheit" class="form-control text-center">
</div>
<div class="col-12 col-md-6">
           <label>Zufriedenheit</label>
      <input type="text" value="" name="zufriedenheit" class="form-control text-center">
</div>
<div class="col-12 col-md-6">
            <label>Bemerkung</label>
      <input type="text" value="" name="bemerkung" class="form-control text-center">
</div>
<div class="col-12 col-md-6">
      <label>Berater</label>
      <input type="text" value="" name="berater" class="form-control text-center">
</div>
</div>
  <div class="justify-content-end d-flex">
  <i class="fas fa-filter" style="cursor: pointer;" title="Filter" data-bs-toggle="modal" data-bs-target="#exampleModal"></i>
</div>





  <input type="submit" class="btn btn-primary mt-2" value="Accept">
</form>








@endsection

