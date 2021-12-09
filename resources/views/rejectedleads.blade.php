@extends('template.navbar')
@section('content')


    <div class="form-group">

        <label>Termin Stattgefunden</label><br>
        <input type="text" name="reason" placeholder="Reason">

    </div>
    <br>
    <div class="form-group">
        @if(Session::has('success'))
            <div class="alert alert-success" role="alert">
                {!! \Session::get('success') !!}
            </div>

                @endif
    <form method="post" action="{{route('rejectedleads')}}" enctype="multipart/form-data">
        @csrf
            <input type="hidden" name="leadsid" value="{{$leads->id}}">
            <div class="input">
                <label>Termin nicht Stattgefunden</label><br>
                <input type="text" name="reason" placeholder="Reason" required>
            </div>
            <div class="input">
                <input type="file" name="image" placeholder="Upload Image" required>
            </div>
        <input type="submit" class="btn btn-success" value="Save">
    </form>
    </div>
@endsection
