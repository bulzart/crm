<html>
<h1>ALbenit</h1>
    <head>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
<style>
* {
    font-family: 'Poppins';font-size: 14px;
}
</style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>{{config('app.name')}}</title>
    </head>
    <body>
    <section class="vh-100" style="background-color: #F8F8F8">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">
<form action="{{route('trylogin')}}" method="post">
    @csrf
            <h2 class="h2 mb-5">Einloggen</h2>

            <div class="form-outline mb-4">
            <label class="form-label" for="typeEmailX-2">Email</label>
              <input type="email" id="typeEmailX-2" name="email" class="form-control text-center form-control-lg" />
            </div>

            <div class="form-outline mb-4">
            <label class="form-label" for="typePasswordX-2">Passwort</label>
            <div class="d-inline d-flex">
              <input type="password" id="typePasswordX-2" name="password" class="form-control text-center form-control-lg" />
              <i onclick="showpw();return false;"class="far fa-eye mt-3 mx-1" style="cursor:pointer;" id="show"></i></div>
            </div>

            <!-- Checkbox -->


            <button class="btn btn-primary btn-lg btn-block" type="submit">Anmelden <i class="fas fa-arrow-right"></i></button>



</form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

        <script type="text/javascript">
            var cnt = 1;
            function showpw(){
                if(cnt % 2 == 1){
            document.getElementsByName("password")[0].setAttribute('type','text');}
            else{
                document.getElementsByName("password")[0].setAttribute('type','password');
            }
            cnt++;}
</script>
    </body>
</html>
