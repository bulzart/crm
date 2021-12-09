@if(Auth::guard('admins')->user()->role == 'salesmenager' || Auth::guard('admins')->user()->role == 'admin')
@extends('template.navbar')
@section('content')

<div class="col-12">

<!-- Button trigger modal -->
<div class="d-flex justify-content-end">
<i class="fas fa-filter" style="cursor: pointer;" title="Filter" data-bs-toggle="modal" data-bs-target="#exampleModal"></i>
<!-- Modal -->
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Filter clients</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="{{route('filtercostumers')}}" method="post" class="form-control">
    @csrf
    <label>Name like</label>
<input type="text" name="name" class="form-control">
<label>Lastname like</label>
<input type="text" name="name" class="form-control">
  <h5 class="h5">Date joined between</h5>
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
    
  
<div class="justify-content-center d-flex">
    
    <table>
        <tr>
            <th colspan="5">ID</th>
            <th colspan="5">Name</th>
            <th colspan="5">Surname</th>
            <th colspan="5">Mandated</th>
        </tr>
@foreach($costumers as $cs)
<tr>
<td colspan="5">{{$cs->id}}</td>
<td colspan="5">{{$cs->name}}</td>
<td colspan="5">{{$cs->surname}}</td>
<td colspan="5">{{$cs->status}}</td>

<tr>
@endforeach
</table>
</div>

</div>



@endsection
@endif