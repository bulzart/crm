@if(Auth::guard('admins')->user()->hasRole('admin'))
    @extends('template.navbar')
    @section('content')
    <!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <title>Users</title>
</head>

<body>
<section style="display:flex; justify-content: center; width: 100%;">
    <div class="my-auto p-5" style="border-radius: 39px;width: 380px; position: absolute; top: 12%;box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;">
        <div class="">
            <form class="form1" method="post" action="{{route('registernewuser')}}">
                @csrf
                <div class="text-start my-3">
                    <div class="">
              <span class="fw-bold fs-4 lh-1" style="color: #707070;">
                Add New User
              </span>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input placeholder="Name" type="text" name="user_name" class="form-control"
                           aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <input placeholder="Email" type="text" name="user_email" class="form-control"
                           aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <input placeholder="Phone Number" type="number" name="phone_number" class="form-control"
                           aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <input placeholder="Password" type="password" name="user_password" class="form-control"
                           aria-describedby="basic-addon1" id="password" autocomplete="off">
                </div>
                <div>
                    <select name="role_name" class="form-control py-2 w-100">
                        @foreach($roles as $role)
                        <option>{{$role->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="pt-2">
                    <input type="submit" class="py-2 w-100 border-0 fw-bold"
                            style="background-color: #3CD598; border-radius: 14px; color: #fff;" value="Register">
            </form>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>
    @endsection
<style>
    .form1 input {
        border: none;
        border-bottom: 1px #D3CDCD solid;
        border-radius: 0;
    }

    .form1 .form-control:focus {
        border-color: #ced4da;
        box-shadow: none;
    }
</style>
@endif
