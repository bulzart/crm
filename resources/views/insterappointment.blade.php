@extends('template.navbar')
@section('content')
<html lang="en">
<head>
    <title>Insert Appointment</title>
</head>
<body>
<section>
    <div class="container-fluid">
        <form action="{{route('addappointment')}}" method="post" class="form-control my-3 form-3 p-3">
            @csrf
            <div class="mb-2">
                <span class="fs-5 fw-600">Insert Appointment</span>
            </div>
            <div class="row">
                <div class="col-12 col-xs-12 col-sm-6 col-md-6 col-lg-6">

                    <div class="input mb-2">
                        <label for="fname" class="fw-600">First Name</label>
                        <br>
                        <input type="text" name="fname" class="form-control" required="required">
                    </div>
                </div>
                <div class="col-12 col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="input mb-2">
                        <label for="lname" class="fw-600">Last Name</label>
                        <br>
                        <input type="text" name="lname" class="form-control" required="required">
                    </div>
                </div>
                <div class="col-12 col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="input mb-2">
                        <label for="phone" class="fw-600">Phone Number</label>
                        <br>
                        <input type="text" name="phone" class="form-control" required="required">
                    </div>
                </div>
                <div class="col-12 col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="input mb-2">
                        <label for="address" class="fw-600">Address</label>
                        <br>
                        <input type="text" name="address" class="form-control" required="required">
                    </div>
                </div>
                <div class="col-12 col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="input mb-2">
                        <label for="postal" class="fw-600">Postal Code</label>
                        <br>
                        <input type="text" name="postal" class="form-control" required="required">
                    </div>
                </div>
                <div class="col-12 col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="input mb-2">
                        <label for="location" class="fw-600">Location</label>
                        <br>
                        <input type="text" name="location" class="form-control" required="required">
                    </div>
                </div>
                <div class="col-12 col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="input mb-2">
                        <label for="appbirth" class="fw-600">Birthdate</label>
                        <br>
                        <input type="date" name="appbirthdate" class="form-control">
                    </div>
                </div>
                <div class="col-12 col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="input mb-2">
                        <label for="country" class="fw-600">Country</label>
                        <br>
                        <input type="text" name="country" class="form-control" required="required">
                    </div>
                </div>
                <div class="col-12 col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="input mb-2">
                        <label for="count" class="fw-600">People Included</label>
                        <br>
                        <input type="number" name="count" class="form-control" required="required">
                    </div>
                </div>
                <div class="col-12 col-xs-12 col-sm-6 col-md-6 col-lg-6 ">
                    <div class="input mb-2">
                        <label for="online" class="fw-600">Meeting Form</label>
                        <br>
                        <select onchange="hideadmin()" name="online" id="selecti" class="form-control">
                            <option value="yes">Online</option>
                            <option value="no">Physically</option>
                        </select>
                    </div>
                    <div class="input mb-2" id="admin" style="display: none">
                        <label for="admin" class="fw-600">Assign To:</label>
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
                </div>
                <div class="col-12 col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="row mb-2">
                        <div class="col">
                            <div class="input">
                                <label for="appdate" class="fw-600">Appointment Date</label>
                                <input type="date" class="form-control" name="appdate">
                            </div>
                        </div>
                        <div class="col">
                            <div class="input">
                                <label for="apptime" class="fw-600">Appointment Time</label>
                                <br>
                                <input type="time" class="form-control" name="apptime">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xs-12 col-sm-6 col-md-6 col-lg-6 my-auto">
                    <div class="create-btn text-center">
                        <input type="submit" class="btn btn-secondary px-5" value="Create">
                    </div>
                </div>
            </div>
        </form>

        <div class="insert-by-file rounded my-3 form-3 p-3">
            <div class="header ps-2">
                    <span class="fw-600 fs-5 ">
                        Or Insert By File
                    </span>
            </div>
            <form method="post" action="{{route('addappointmentfile')}}" enctype="multipart/form-data">
                @csrf
                <div class="input-group">
                    <input type="file" class="form-control" name="file">
                    <input type="submit" value="Submit" class="btn btn-secondary">
                </div>
            </form>
            <div onclick="openExamplePic()">
                <span class="btn fw-600" style="border: 1px solid #434343;border-radius: 5px">
                        Example
                    </span>
            </div>
            <br>
            <div style="display: none" class="w-100" id="picture">
                <img src="exceExample.png" alt="pic" class="img-fluid">
            </div>
        </div>
    </div>
</section>


<script type="text/javascript">
    function openExamplePic() {
        var x = document.getElementById('picture');
        if (x.style.display == 'none') {
            x.style.display = "block";
        }
        else {
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>
@endsection
<style>
    .form-control:focus {
        border-color: #ced4da !important;
        box-shadow: none !important;
    }

    .fw-600 {
        font-weight: 600 !important;
    }

    .form-3 {
        background-color: #fafafa !important;
        box-shadow: rgba(17, 17, 26, 0.05) 0px 1px 0px, rgba(17, 17, 26, 0.1) 0px 0px 8px;
        border: none !important;
    }

    .form-3:hover {
        box-shadow: rgba(0, 0, 0, 0.25) 0px 0.0625em 0.0625em, rgba(0, 0, 0, 0.25) 0px 0.125em 0.5em, rgba(255, 255, 255, 0.1) 0px 0px 0px 1px inset;
    }

    .form-2 {
        background-color: #fafafa !important;
    }
    body {
        overflow-x: hidden !important;
    }
</style>
