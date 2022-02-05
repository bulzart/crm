@extends('template.navbar')
@section('content')
    <body>
    <section>
        <div class="container">
            <div class="form-div my-4 py-4  col-md-12 col-lg-9 mx-auto" style="background-color: #EFEFEF; border-radius: 20px;">
                <form action="{{route('addslead')}}" method="post">
                    @csrf
                <div class="row mx-4">
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="mx-2">
                            <div class="mb-2">
                                <label for="" class="mb-1 ">Name:</label>
                                <input type="text" name="name" class="form-control" required>
                            </div>
                            <div class="mb-2">
                                <label for="" class="mb-1">Vorname:</label>
                                <input type="text" name="lname" class="form-control" required>
                            </div>
                            <div class="mb-2">
                                <label for="" class="mb-1">Telefonnummer:</label>
                                <input type="tel" name="telephone" class="form-control" required>
                            </div>
                            <div class="mb-2">
                                <label for="" class="mb-1">Platfrom:</label>
                                <select class="form-control" name="campaign">
                                  @foreach($campaigns as $campaign)
                                  <option value="{{$campaign->id}}">{{$campaign->name}}</option>
                                  @endforeach
                                </select>
                            </div>
                            <div class="mb-2">
                                <label for="" class="mb-1">Kampagne:</label>
                                <input type="text" name="kampagne" class="form-control" required>
                            </div>
                            <div class="mb-2">
                                <label for="" class="mb-1">Grund:</label>
                                <input type="text" name="grund" class="form-control" required>
                            </div>
                            <div class="mb-2">
                                <label for="" class="mb-1">Teilnahme:</label>
                                <input type="text" name="teilnahme" class="form-control" required>
                            </div>

                        </div>
                    </div>
                    <div class=" col-12 col-md-6 col-lg-6">
                        <div class="mx-2">
                            <div class="mb-2">
                                <label for="" class="mb-1">Geburtsdatum:</label>
                                <input type="date" name="geburstdatum" class="form-control" min="1900-01-01"
                                       max="9999-12-31" required>
                            </div>
                            <div class="mb-2">
                                <label for="" class="mb-1">Haushalt:</label>
                                <input type="text" name="haushalt" class="form-control" required>
                            </div>
                            <div class="mb-2">
                                <label for="" class="mb-1">PLZ, Ort:</label>
                                <input type="text" name="plzort" class="form-control" required>
                            </div>
                            <div class="mb-2">
                                <label for="" class="mb-1">Krankenkasse:</label>
                                <input type="text" name="krankenkasse" class="form-control" required>
                            </div>
                            <div class="mb-2">
                                <label for="" class="mb-1">Bewertung KK:</label>
                                <input type="text" name="bewertung" class="form-control" required>
                            </div>
                            <div class="mb-2">
                                <label for="" class="mb-1">Wichtig:</label>
                                <input type="text" name="wichtig" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="my-4">
                        <button type="submit" class="py-2 px-5 border-0 fw-bold"
                                style="background-color: #63D4A4; color: #fff; border-radius: 8px;">Accept</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>

    </body>
{{--<form action="{{route('addslead')}}" class="text-center" method="post">--}}
{{--    @csrf--}}
{{--    <div class="text-center row">--}}
{{--      <div class="col-6 col-md-6">--}}
{{--      <span>Name</span>--}}
{{--<input type="text" class="form-control text-center" name="name">--}}
{{--</div>--}}
{{--<div class="col-6 col-md-6">--}}
{{--<span>Vorname</span>--}}
{{--<input type="text" class="form-control text-center" name="lname">--}}
{{--</div>--}}
{{--<div class="col-6 col-md-6">--}}
{{--<span>Platform</span>--}}
{{--<select name="campaign" class="form-control text-center">--}}
{{--  @foreach($campaigns as $campaign)--}}
{{--  <option value="{{$campaign->id}}">{{$campaign->name}}</option>--}}
{{--  @endforeach--}}
{{--</select>--}}
{{--</div>--}}
{{--<div class="col-6 col-md-6">--}}
{{--<label>Kampagne</label>--}}
{{--<input type="text" name="kampagne" class="form-control text-center">--}}
{{--</div>--}}
{{--<div class="col-6 col-md-6">--}}
{{--<label>Grund</label>--}}
{{--<input type="text" name="grund" class="form-control text-center">--}}
{{--</div>--}}
{{--<div class="col-6 col-md-6">--}}
{{--<label>Teilnahme</label>--}}
{{--<input type="date" name="teilnahme" class="form-control text-center">--}}
{{--</div>--}}
{{--<div class="col-6 col-md-6">--}}
{{--<label>Geburstdatum</label>--}}
{{--<input type="date" name="geburstdatum" class="form-control text-center">--}}
{{--</div>--}}
{{--<div class="col-6 col-md-6">--}}
{{--<label>Haushalt</label>--}}
{{--<input type="text" name="haushalt" class="form-control text-center">--}}
{{--</div>--}}
{{--<div class="col-6 col-md-6">--}}
{{--<label>Plz,Ort</label>--}}
{{--<input type="text" name="plzort" class="form-control text-center">--}}
{{--</div>--}}
{{--<div class="col-6 col-md-6">--}}
{{--<label>Krankenkasse</label>--}}
{{--<input type="text" name="krankenkasse" class="form-control text-center">--}}
{{--</div>--}}
{{--<div class="col-6 col-md-6">--}}
{{--<label>Bewertung KK</label>--}}
{{--<input type="text" name="bewertung" class="form-control text-center">--}}
{{--</div>--}}
{{--<div class="col-6 col-md-6">--}}
{{--<label>Wichtig</label>--}}
{{--<input type="text" name="wichtig" class="form-control text-center">--}}
{{--</div>--}}
{{--<div class="col-6 col-md-6">--}}
{{--<label>Telefonnumer</label>--}}
{{--<input type="number" name="telephone" class="form-control text-center">--}}
{{--</div>--}}
{{--<input type="submit" class="btn btn-primary m-2">--}}
{{--</div>--}}
{{--      </form>--}}
{{--    </div>--}}
{{--  </div>--}}
{{--</div>--}}
@endsection
