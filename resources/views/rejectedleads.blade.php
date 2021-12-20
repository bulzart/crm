<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<html>
<style>
    .rejectedlead{
        background-color: #EF696A;
        border-radius: 13px;
        margin-top: 3%;
        margin-left: 22%;
        width: 50%;
        height: 48%;
        box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
    }

    .fertigbtn{
        width: 135px;
        height: 40px;
        font-family: "sans-serif monserrat";
        color: #EF696A;
        background: #FFFFFF 0% 0% no-repeat padding-box;
        border-radius: 17px;
        border: #FFFFFF;
        opacity: 1;
        margin-top: 60%;
        margin-left: 36%;
    }
    .rjcform {
        position: absolute;
        margin-top: 2%;
        margin-left: 4.5%;
        background-color: #FFFFFF;
        border-radius: 14px;
        width: 30%;
        height: 18%;
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    }
    .terminniccht{
        font-weight: bold;
        margin-top: 15px;
        display: flex;
        justify-content: center;
        color: grey;
    }
    .begrund{
        display: flex;
        justify-content: center;
        margin-top: 13px;
    }
    .begrund input{
        border-radius: 13px;
        border: #e3dfdf;
        background-color: #efecec;
        font-family: "sans-serif monserrat";
        text-align: center;
        margin-left: 2%;
    }
    .begrund input:focus-visible{
        outline: grey;
    }
    .begrund label{
        color: grey;
    }
    .leadinfo h3{
        font-weight: bold;
        font-family: sans-serif, Montserrat;
        color: #FFFFFF;
        text-align: center;
        padding-top: 35px;
    }
    .leadinfo p {
        font-family: sans-serif, Montserrat;
        color: #FFFFFF;
        text-align: center;
    }
        .leadpersons{
            padding: 19px;
            margin-left: 70px;
            text-align: center;
            border-radius: 10px;
            background-color: #FFFFFF;
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        }
        .leaddate {
            padding: 8px;
            margin-left: 35px;
            text-align: center;
            border-radius: 10px;
            background-color: #FFFFFF;
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        }
        .btnfile label{
            display: inline-block;
            margin-top: 17px;
            margin-left: 20px;
        }
        #fileName {
            border: none;
        }
        #fileName:focus-visible{
            outline: none;
        }





</style>
@extends('template.navbar')
@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <br>

        @if(Session::has('success'))
            <div class="alert alert-success" role="alert">
                {!! \Session::get('success') !!}
            </div>
        @endif
        <div class="rejectedlead">

            <div class="leadinfo">
                <h3>{{$leads->name}}</h3>
                <p><i class="bi bi-geo-alt"></i>{{$leads->address}}</p>
            </div>
            <div class="row testi">
            <div class=" col-4 leadpersons">
                <span><i class="bi bi-person-workspace"></i> {{$leads->count}} Personen</span>
            </div>
            <div class="col-4 leaddate">
                <span><i class="bi bi-person-workspace"></i> {{$leads->created_at}}</span>
            </div>
            </div>

            <form method="post" action="{{route('rejectedleads')}}" enctype="multipart/form-data">
                @csrf
                    <input type="hidden" name="leadsid" value="{{$leads->id}}">

                <div class="rjcform">
                    <div class="input">
                        <span class="terminniccht">Termin nicht Stattgefunden</span><br>
                        <div class="begrund">
                            <label>Begrundung:</label>
                            <input id="btnreason" type="text" name="reason" placeholder="Bitte Whahlen.." required>
                        </div>
                        </div>
                    <div class="btnfile">
                        <input type="file" id="upload" name="image" onchange="uploadfile()" hidden required>
                        <label for="upload"><i class="bi bi-upload fs-2 ms-4"></i></label>
                        <input  type="text" id="fileName" readonly>
                    </div>
                </div>
                <input type="submit" class="fertigbtn" value="Fertig">
            </form>
        </div>
@endsection
</html>
<script>
function uploadfile(){
    var x = document.getElementById('upload').value;
    document.getElementById ('fileName').value = x;
}
</script>
