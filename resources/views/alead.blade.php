@extends('template.navbar')
@section('content')
<form action="{{route('asignlead',$lead->id)}}" method="post">
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
  <label>Asign to:</label>
  <div class="justify-content-end d-flex">
  <i class="fas fa-filter" style="cursor: pointer;" title="Filter" data-bs-toggle="modal" data-bs-target="#exampleModal"></i>
</div>
<br>
  <select name="admin" class="form-control">
      @foreach($admins as $admin)
      <option value="{{$admin->id}}">{{$admin->name}}</option>
      @endforeach
  </select>

  <input type="submit" class="btn btn-primary mt-2" value="Assign">
</form>
</div>
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
