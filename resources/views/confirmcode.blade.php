<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<body style="background: #f8f8f8;">

<div class="d-flex justify-content-center align-items-center container">
    <form action="{{route('confirmcode')}}" method="post">
        @csrf
    <div class="card py-5 px-3">
        <h5 class="m-0">Email verification</h5><span class="mobile-text">Enter the code we just send on your email <b class="text-danger">{{Auth::guard('admins')->user()->email}}</b></span>
        <div class="d-flex flex-row mt-5"><input type="text" name="c1" class="form-control" autofocus=""><input type="text" name="c2" class="form-control"><input type="text" name="c3" class="form-control"><input type="text" name="c4" class="form-control"></div>
<input type="submit" class="btn btn-success mt-2" value="Weiter">
    </div>
</div>
</form>
</body>