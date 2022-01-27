@extends('template.navbar')
@section('content')

<form action="{{route('addslead')}}" class="text-center" method="post">
    @csrf
    <div class="text-center">
<span>
    Name
</span>
<input type="text" class="form-control text-center" name="name">
<span>Last name</span>
<input type="text" class="form-control text-center" name="lname">
<span>Phone number</span>
<input type="text" class="form-control text-center" name="phone">
<span>Source</span>
<select name="campaign" class="form-control text-center">
  @foreach($campaigns as $campaign)
  <option value="{{$campaign->id}}">{{$campaign->name}}</option>
  @endforeach
</select>
<input type="submit" class="btn btn-primary m-2">
</div>
      </form>
    </div>
  </div>
</div>
@endsection
