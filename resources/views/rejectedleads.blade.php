<html>
<style>
    .rejectedlead{
        background-color: #EF696A;
        border-radius: 13px;
        margin-top: 3%;
        margin-left: 22%;
        width: 50%;
        height: 50%;
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
        margin-top: 93%;
        margin-left: 36%;
    }
    .rjcform {
        position: absolute;
        margin-top: 10%;
        margin-left: 4.5%;
        background-color: #FFFFFF;
        border-radius: 14px;
        width: 30%;
        height: 22%;
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    }
    .rjcform span{
        margin-top: 2%;
        display: flex;
        justify-content: center;
        color: grey;
    }
    .begrund{
        display: flex;
        justify-content: center;
    }
    .begrund input{
        border-radius: 13px;
        border: #b3b0b0;
        background-color: #d7d2d2;
        font-family: "sans-serif monserrat";
        text-align: center;
        margin-left: 2%;
    }
    .begrund label{
        color: grey;
    }
    .btnfile{
        background-color: #EF696A;
        color: white;
        padding: 0.5rem;
        font-family: sans-serif;
        border-radius: 13px;
        cursor: pointer;
        margin-top: 10%;
        width: 150px;
    }

</style>
@extends('template.navbar')
@section('content')




    <br>
    <div class="form-group">
        @if(Session::has('success'))
            <div class="alert alert-success" role="alert">
                {!! \Session::get('success') !!}
            </div>
        @endif
        <div class="rejectedlead">
            <form method="post" action="{{route('rejectedleads')}}" enctype="multipart/form-data">
                @csrf
                    <input type="hidden" name="leadsid" value="{{$leads->id}}">
                <div class="rjcform">

                    <div class="input">
                        <span>Termin nicht Stattgefunden</span><br>
                        <div class="begrund">
                            <label>Begrundung:</label>
                            <input id="btnreason" type="text" name="reason" placeholder="Bitte Whahlen.." required>
                        </div>
                        </div>
                    <div class="form-control btnfile">
                        <input type="file" id="upload" name="image" required>
                    </div>
                </div>
                <input type="submit" class="fertigbtn" value="Fertig">
            </form>
        </div>
    </div>
@endsection
</html>
