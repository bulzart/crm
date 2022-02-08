@extends('template.navbar')
@section('content')
    @if($errors->any())
        <div class="text-center">
            {!! implode('<br />', $errors->all(':message')) !!}
        </div>
    @endif


    <body>


    <section>
        <div class="container">
            <div class="form-div my-4 py-4 col-7 mx-auto" style="background-color: #EFEFEF; border-radius: 20px;">
                <form action="{{route('asignlead',$lead->id)}}" method="post">
                    @csrf
                    <input type="hidden" name="countt" id="countt">
                    <div class="row mx-4">
                        <div class="col">
                            <div class="mx-2">
                                <div class="mb-2">
                                    <label for="" class="mb-1">Agent:</label>
                                    <input type="text"  class="form-control" value="" name="agent">
                                </div>
                                <div class="mb-2">
                                    <label for="" class="mb-1">Berater:</label>
                                    <input type="text" class="form-control" value="" name="berater">
                                </div>
                                <div class="mb-2">
                                    <label for="" class="mb-1">Gesundheit</label>
                                    <input type="text" class="form-control" value="" name="gesundheit">
                                </div>
                                <div class="mb-2">
                                    <label for="" class="mb-1">Datum</label>
                                    <input type="date" class="form-control" name="appointmentdate" min="1900-01-01" max="9999-12-31">
                                </div>
                                <div class="mb-2">
                                    <label for="" class="mb-1">Zeit</label>
                                    <input class="form-control" type="time" name="apptime">
                                </div>
                                <div class="mb-2">
                                    <label for="" class="mb-1">Sprache</label>
                                    <input type="text" class="form-control" value="" name="sprache">
                                </div>
                                <div class="mb-2">
                                    <label for="" class="mb-1">Personen</label>
                                    <input type="number" class="form-control" value="{{$lead->number_of_persons}}" name="personen">
                                </div>
                                <div class="mb-2">
                                    <label for="" class="mb-1">Nationalitat:</label>
                                    <input type="text" class="form-control" value="{{$lead->nationality}}" name="nationality">
                                </div>
                                <div class="mb-2">
                                    <label for="" class="mb-1">Name</label>
                                    <input type="text" name="name" class="form-control" value="{{$lead->first_name}}">
                                </div>
                            </div>
                        </div>
                        <div class="col" >
                            <div class="mx-2">
                                <div class="mb-2">
                                    <label for="" class="mb-1">Vorname</label>
                                    <input type="text" class="form-control" value="{{$lead->last_name}}" name="lname" >
                                </div>
                                <div class="mb-2">
                                    <label for="" class="mb-1">Strasse</label>
                                    <input type="text" class="form-control" value="{{$lead->address}}" name="address">
                                </div>
                                <div class="mb-2">
                                    <label for="" class="mb-1">Nr</label>
                                    <input type="number" class="form-control" value="" name="nr">
                                </div>
                                <div class="mb-2">
                                    <label for="" class="mb-1">PLZ</label>
                                    <input type="text" class="form-control" value="{{$lead->postal_code}}" name="postal_code">
                                </div>
                                <div class="mb-2">
                                    <label for="" class="mb-1">Ort</label>
                                    <input type="text" class="form-control" value="{{$lead->city}}" name="ort">
                                </div>
                                <div class="mb-2">
                                    <label for="" class="mb-1">Tel. Privat</label>
                                    <input type="text" class="form-control" name="telephone" value="{{$lead->telephone}}">
                                </div>
                                <div class="mb-2">
                                    <label for="" class="mb-1">Zufriedenheit</label>
                                    <input type="text" class="form-control" value="" name="zufriedenheit">
                                </div>
                                <div class="mb-2">
                                    <label for="exampleFormControlTextarea1" class="form-label">Bemerkung:</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="bemerkung"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="my-4">
                        <button type="submit" class="py-2 px-5 mx-5 border-0 fw-bold"
                                style="background-color: #63D4A4; color: #fff; border-radius: 8px;">Accept
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>

    </body>
    {{--<form action="{{route('asignlead',$lead->id)}}" method="post">--}}
    {{--    @csrf--}}
    {{--    <input type="hidden" name="countt" id="countt">--}}
    {{--<div class="form-group container text-center pt-4">--}}
    {{--  <fieldset>--}}
    {{--  <div class="form-group row">--}}
    {{--  <div class="col-12 col-md-6">--}}
    {{--      <label for="disabledTextInput">First Name</label>--}}
    {{--      <input type="text" name="name" id="disabledTextInput" class="form-control text-center" value="{{$lead->first_name}}">--}}
    {{--</div>--}}
    {{--<div class="col-12 col-md-6">--}}
    {{--      <label >Last Name</label>--}}
    {{--      <input type="text" value="{{$lead->last_name}}" name="lname" class="form-control text-center">--}}
    {{--</div>--}}
    {{--<div class="col-12 col-md-6">--}}
    {{--      <label>Sprache</label>--}}
    {{--      <input type="text" value="" name="sprache" class="form-control text-center">--}}
    {{--</div>--}}
    {{--<div class="col-12 col-md-6">--}}
    {{--      <label>Personen</label>--}}
    {{--      <input type="text" value="{{$lead->number_of_persons}}" name="personen" class="form-control text-center">--}}
    {{--</div>--}}
    {{--<div class="col-12 col-md-6">--}}
    {{--      <label>Nationality</label>--}}
    {{--      <input type="text" value="{{$lead->nationality}}" name="nationality" class="form-control text-center">--}}
    {{--</div>--}}
    {{--<div class="col-12 col-md-6">--}}
    {{--      <label>Strasse</label>--}}
    {{--      <input type="text" value="{{$lead->address}}" name="address" class="form-control text-center">--}}
    {{--</div>--}}
    {{--<div class="col-12 col-md-6">--}}
    {{--      <label>Nr</label>--}}
    {{--      <input type="text" value="" name="nr" class="form-control text-center">--}}
    {{--</div>--}}
    {{--<div class="col-12 col-md-6">--}}
    {{--      <label>PLZ</label>--}}
    {{--      <input type="text" value="{{$lead->postal_code}}" name="postal_code" class="form-control text-center">--}}
    {{--</div>--}}
    {{--<div class="col-12 col-md-6">--}}
    {{--      <label>Ort</label>--}}
    {{--      <input type="text" value="{{$lead->city}}" name="ort" class="form-control text-center">--}}
    {{--</div>--}}


    {{--  <div class="col-12 col-md-6">--}}
    {{--  <label>Datum</label>--}}
    {{--  <input type="date" class="col-12 text-center" name="appointmentdate">--}}

    {{--</div>--}}
    {{--<div class="col-12 col-md-6">--}}
    {{--<label>Zeit</label>--}}
    {{--<input type="time" name="apptime" class="text-center col-12">--}}
    {{--</div>--}}
    {{--<div class="col-12 col-md-6">--}}
    {{--     <label>Gesundheit</label>--}}
    {{--      <input type="text" value="" name="gesundheit" class="form-control text-center">--}}
    {{--</div>--}}
    {{--<div class="col-12 col-md-6">--}}
    {{--           <label>Zufriedenheit</label>--}}
    {{--      <input type="text" value="" name="zufriedenheit" class="form-control text-center">--}}
    {{--</div>--}}
    {{--<div class="col-12 col-md-6">--}}
    {{--            <label>Bemerkung</label>--}}
    {{--      <input type="text" value="" name="bemerkung" class="form-control text-center">--}}
    {{--</div>--}}
    {{--<div class="col-12 col-md-6">--}}
    {{--      <label>Berater</label>--}}
    {{--      <input type="text" value="" name="berater" class="form-control text-center">--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--  </fieldset>--}}






    {{--  <input type="submit" class="btn btn-primary mt-2" value="Accept">--}}
    {{--</form>--}}








@endsection

