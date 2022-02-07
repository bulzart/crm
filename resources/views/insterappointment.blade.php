@extends('template.navbar')
@section('content')
    <html lang="en">
    <head>
        <title>Insert Appointment</title>
        <link rel="icon" type="image/png" href="img/Favicon.png">
    </head>
    <body>
    <section>
        <div class="container">
            <div class="form-div my-4 py-4 col-10 mx-auto" style="background-color: #EFEFEF; border-radius: 20px;">
                <form action="{{route('addappointment')}}" method="post">
                    @csrf
                <div class="row mx-4">
                    <div class="col">
                        <div class="mx-2">
                            <div class="mb-2">
                                <label for="" class="mb-1">Vorname</label>
                                <input type="text" name="fname" class="form-control" required>
                            </div>
                            <div class="mb-2">
                                <label for="" class="mb-1">Nachname</label>
                                <input type="text" name="lname" class="form-control" required>
                            </div>
                            <div class="mb-2">
                                <label for="" class="mb-1">Datum</label>
                                <input type="date" class="form-control" name="appdate" required>
                            </div>
                            <div class="mb-2">
                                <label for="" class="mb-1">Zeit</label>
                                <input type="time" class="form-control" name="apptime" required>
                            </div>
                            <div class="mb-2">
                                <label for="" class="mb-1">Sprache</label>
                                <input type="text" name="sprache" class="form-control" required>
                            </div>
                            <div class="mb-2">
                                <label for="" class="mb-1">Personen</label>
                                <input type="number" name="count" class="form-control" required="required">
                            </div>
                            <div class="mb-2">
                                <label for="" class="mb-1">Nationalitat:</label>
                                <input type="text" name="country" class="form-control" required>
                            </div>
                            <div class="mb-2">
                                <label for="" class="mb-1">Strasse</label>
                                <input type="text" name="address" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mx-2">
                            <div class="mb-2">
                                <label for="" class="mb-1">Nr</label>
                                <input type="text" name="nr" class="form-control" required>
                            </div>
                            <div class="mb-2">
                                <label for="" class="mb-1">PLZ</label>
                                <input type="number" name="postal" class="form-control" required>
                            </div>
                            <div class="mb-2">
                                <label for="" class="mb-1">Ort</label>
                                <input type="text" name="location" class="form-control" required>
                            </div>
                            <div class="mb-2">
                                <label for="" class="mb-1">Besprechungsformular</label>
                                <select onchange="hideadmin()" name="online" id="selecti" class="form-control">
                                    <option value="yes">Online</option>
                                    <option value="no">Physically</option>
                                </select>
                            </div>
                            <div class="input mb-2" id="admin" style="display: none">
                                <label for="admin" class="">Zuweisen</label>
                                <br>
                                <select name="admin" class="form-control">
                                    @if(Auth::guard('admins')->user()->hasRole('fs'))
                                        <option value="{{$admins->id}}">{{$admins->name}}</option>
                                    @else
                                        @foreach($admins as $admin)
                                            <option value="{{$admin->id}}">{{$admin->name}}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                            <div class="mb-2">
                                <label for="" class="mb-1">Tel. Privat</label>
                                <input type="text" name="phone" class="form-control" required>
                            </div>
                            <div class="mb-2">
                                <label for="" class="mb-1">Zufriedenheit</label>
                                <input type="text" name="zufriedenheit" class="form-control" required>
                            </div>
                            <div class="mb-2">
                                <label for="exampleFormControlTextarea1" class="form-label">Bemerkung:</label>
                                <textarea class="form-control" name="bemerkung" id="exampleFormControlTextarea1" rows="3" required></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="my-4">
                        <button class="py-2 px-5 mx-5 border-0 fw-bold"
                                style="background-color: #63D4A4; color: #fff; border-radius: 8px;">Accept</button>
                    </div>
                </form>
            </div>
        </div>
    </section>



        <section>
            <div class="container">
                <div class="form-div my-4 py-4 col-10 mx-auto" style="background-color: #EFEFEF; border-radius: 20px;">
                    <div class="mb-4 mx-5">
                        <span class="fs-5 fw-600">Or Insert By File</span>
                    </div>
                    <form method="post" action="{{route('addappointmentfile')}}" enctype="multipart/form-data">
                        <div class="row mx-4">
                            <div class="col">
                                <div class="mx-2">
                                    <div class="input-group">
                                        <input type="file" class="form-control" name="file">
                                    </div>
                                    <div class="my-4">
                                        <button type="submit" class="py-2 px-5 border-0 fw-bold"
                                                style="background-color: #63D4A4; color: #fff; border-radius: 8px;">Accept</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div onclick="openExamplePic()">
                        <span class="btn fw-600 mx-5" style="border: 1px solid #434343;border-radius: 5px">Example</span>
                    </div>
                    <br>
                    <div style="display: none" class="w-100" id="picture">
                        <img src="exceExample.png" alt="pic" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>

    </body>

    <script type="text/javascript">
        function openExamplePic() {
            var x = document.getElementById('picture');
            if (x.style.display == 'none') {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }

        function hideadmin() {
            var x = document.getElementById('selecti').value;
            if (x == "no") {
                document.getElementById('admin').style.display = "inline";
            } else {
                document.getElementById('admin').style.display = "none";
            }
        }
    </script>

    </html>
@endsection
<style>
    body {
        overflow-x: hidden;
    }
</style>
