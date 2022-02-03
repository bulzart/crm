@extends('template.navbar')
@section('content')

<form action="{{route('addslead')}}" class="text-center" method="post">
    @csrf
    <div class="text-center row">
      <div class="col-6 col-md-6">
      <span>Name</span>
<input type="text" class="form-control text-center" name="name">
</div>
<div class="col-6 col-md-6">
<span>Vorname</span>
<input type="text" class="form-control text-center" name="lname">
</div>
<div class="col-6 col-md-6">
<span>Platform</span>
<select name="campaign" class="form-control text-center">
  @foreach($campaigns as $campaign)
  <option value="{{$campaign->id}}">{{$campaign->name}}</option>
  @endforeach
</select>
</div>
<div class="col-6 col-md-6">
<label>Kampagne</label>
<input type="text" name="kampagne" class="form-control text-center">
</div>
<div class="col-6 col-md-6">
<label>Grund</label>
<input type="text" name="grund" class="form-control text-center">
</div>
<div class="col-6 col-md-6">
<label>Teilnahme</label>
<input type="date" name="teilnahme" class="form-control text-center">
</div>
<div class="col-6 col-md-6">
<label>Geburstdatum</label>
<input type="date" name="geburstdatum" class="form-control text-center">
</div>
<div class="col-6 col-md-6">
<label>Haushalt</label>
<input type="text" name="haushalt" class="form-control text-center">
</div>
<div class="col-6 col-md-6">
<label>Plz,Ort</label>
<input type="text" name="plzort" class="form-control text-center">
</div>
<div class="col-6 col-md-6">
<label>Krankenkasse</label>
<input type="text" name="krankenkasse" class="form-control text-center">
</div>
<div class="col-6 col-md-6">
<label>Bewertung KK</label>
<input type="text" name="bewertung" class="form-control text-center">
</div>
<div class="col-6 col-md-6">
<label>Wichtig</label>
<input type="text" name="wichtig" class="form-control text-center">
</div>
<div class="col-6 col-md-6">
<label>Telefonnumer</label>
<input type="number" name="telephone" class="form-control text-center">
</div>
<input type="submit" class="btn btn-primary m-2">
</div>
      </form>
    </div>
  </div>
</div>
@endsection
