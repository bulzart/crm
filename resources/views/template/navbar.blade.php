<head>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="css/navbar.css">
    
</head>

<body id="body-pd">
    
<div class="row">
        <div class="col-md-2 col-lg-2 col-xs-2 col-sm-2">
        <header class="header" id="header">
        <div class="header_toggle" id="qele"><i class='bx bx-menu' id="header-toggle"></i> </div>
        <div class="header_img"> </div>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div>
                <div class="nav_list">
                    <a style="text-decoration: none;" href="{{route('dashboard')}}" class="nav_link active"> 
                        <i class='bx bx-grid-alt nav_icon text-black'></i> <span class="nav_name text-black">Home</span> 
                    </a>
                    @if(Auth::guard('admins')->user()->hasRole('fs') || Auth::guard('admins')->user()->hasRole('salesmanager') || Auth::guard('admins')->user()->hasRole('menagment') || Auth::guard('admins')->user()->hasRole('admin'))
                        <a style="text-decoration: none;" href="{{route('calendar')}}" class="nav_link"> 
                            <i class='bi bi-calendar nav_icon text-black'></i> 
                            <span class="nav_name text-black">Calendar</span> 
                        </a>
                    @endif
                    @if(Auth::guard('admins')->check())
                        <a style="text-decoration: none;" href="{{route('costumers')}}" class="nav_link"> 
                            <i class='bx bx-user nav_icon text-black'></i> 
                            <span class="nav_name text-black">Costumers</span> 
                        </a>
                    @endif
                    @if(Auth::guard('admins')->user()->hasRole('backoffice') || Auth::guard('admins')->user()->hasRole('admin'))
                        <a style="text-decoration: none;" href="#" class="nav_link"> 
                            <i class='bx bx-user nav_icon text-black'></i> 
                            <span class="nav_name text-black">Cancellations</span> 
                        </a>
                    @endif
                    @if(Auth::guard('admins')->user()->hasRole('backoffice') || Auth::guard('admins')->user()->hasRole('fs') || Auth::guard('admins')->user()->hasRole('admin'))
                        <a href="{{route('tasks')}}" style="text-decoration: none;" class="nav_link"> 
                            <i class='bx bx-task text-black'></i> 
                            <span class="nav_name text-black">Tasks</span> 
                        </a>
                    @endif
                    @if(Auth::guard('admins')->user()->hasRole('backoffice') || Auth::guard('admins')->user()->hasRole('admin')) 
                        <a href="#" style="text-decoration: none;" class="nav_link"> 
                            <i class='bx bxs-check-square text-black'></i> 
                            <span class="nav_name text-black">Status</span> 
                        </a>
                    @endif
                    @if(Auth::guard('admins')->user()->hasRole('menagment') || Auth::guard('admins')->user()->hasRole('finance') ||Auth::guard('admins')->user()->hasRole('admin') )
                        <a style="text-decoration: none;" href="#" class="nav_link"> 
                            <i class='bx bx-user nav_icon text-black'></i> 
                            <span class="nav_name text-black">Trust</span> 
                        </a>
                    @endif
                    @if(Auth::guard('admins')->user()->hasRole('finance') || Auth::guard('admins')->user()->hasRole('admin'))
                        <a style="text-decoration: none;" href="#" class="nav_link"> 
                            <i class='bx bx-user nav_icon text-black'></i> 
                            <span class="nav_name text-black">Commisions</span> 
                        </a>
                    @endif
                    @if(Auth::guard('admins')->check())
                        <a href="#" style="text-decoration: none;" class="nav_link">
                            <i class='bx bx-money text-black'></i>
                            <span class="nav_name text-black">Finance</span> 
                        </a>
                    @endif
                    @if(Auth::guard('admins')->user()->hasRole('backoffice') || Auth::guard('admins')->user()->hasRole('admin')) 
                        <a href="#" style="text-decoration: none;" class="nav_link">
                            <i class="far fa-window-close text-black"></i>
                            <span class="nav_name text-black">Deposit</span> 
                        </a> 
                    @endif
                    @if(Auth::guard('admins')->user()->hasRole('admin') || Auth::guard('admins')->user()->hasRole('fs') || Auth::guard('admins')->user()->hasRole('salesmanager') ||Auth::guard('admins')->user()->hasRole('menagment'))
                        <a href="{{route('leads')}}" style="text-decoration: none;" class="nav_link">
                            <i class="fas fa-newspaper text-black"></i>
                            <span class="nav_name text-black">Leads</span> 
                        </a>
                    @endif
                    @if(Auth::guard('admins')->user()->hasRole('salesmanager') ||Auth::guard('admins')->user()->hasRole('menagment'))
                        <a href="{{route('dates')}}" style="text-decoration: none;" class="nav_link">
                            <i class='bi bi-calendar-date text-black'></i>
                            <span class="nav_name text-black">Dates</span> 
                        </a>
                    @endif
                    @if(Auth::guard('admins')->user()->hasRole('admin') || Auth::guard('admins')->user()->hasRole('menagment'))
                        <a href="#" style="text-decoration: none;" class="nav_link">
                            <i class="far fa-calendar-alt text-black"></i>
                            <span class="nav_name text-black">Employees</span> 
                        </a>
                    @endif
                    @if(Auth::guard('admins')->user()->hasRole('admin') || Auth::guard('admins')->user()->hasRole('menagment') || Auth::guard('admins')->user()->hasRole('salesmanager'))
                        <a href="#" style="text-decoration: none;" class="nav_link">
                            <i class="fas fa-sliders-h text-black"></i>
                            <span class="nav_name text-black">Prov.system</span> 
                        </a>
                    @endif
                    @if(Auth::guard('admins')->user()->hasRole('admin') || Auth::guard('admins')->user()->hasRole('menagment') || Auth::guard('admins')->user()->hasRole('salesmanager'))
                        <a href="#" style="text-decoration: none;" class="nav_link">
                            <i class="fas fa-chart-pie text-black"></i>
                            <span class="nav_name text-black">Statistics</span> 
                        </a>
                    @endif
                </div> 
                <a href="{{route('logout')}}" style="text-decoration: none;" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name text-black">LogOut</span> </a>
            </div>
        </nav>
    </div>
    <!--Container Main start-->

</div>


<div class="container-fluid col-md-10 col-lg-10 col-xs-10 col-sm-10 mt-4" id="app">
    @if(\Session::has('success'))
        <div class="alert alert-success alert-dismissible fade show col-12" role="alert">
            {!! \Session::get('success') !!}
        </div>
    @endif
        @if(\Session::has('fail'))
            <div class="alert alert-danger alert-dismissible fade show col-12" role="alert">
                {!! \Session::get('fail') !!}
            </div>
        @endif
@yield('content')

<div class="form-group container text-center pt-4">
</div>
</div>
<script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function(event) {

const showNavbar = (toggleId, navId, bodyId, headerId) =>{
const toggle = document.getElementById(toggleId),
nav = document.getElementById(navId),
bodypd = document.getElementById(bodyId),
headerpd = document.getElementById(headerId)

// Validate that all variables exist
if(toggle && nav && bodypd && headerpd){

// show navbar
nav.classList.toggle('show')
// change icon
toggle.classList.toggle('bx-x')
// add padding to body
bodypd.classList.toggle('body-pd')
// add padding to header
headerpd.classList.toggle('body-pd')

}
}

showNavbar('header-toggle','nav-bar','body-pd','header')

/*===== LINK ACTIVE =====*/
const linkColor = document.querySelectorAll('.nav_link')

function colorLink(){
if(linkColor){
linkColor.forEach(l=> l.classList.remove('active'))
this.classList.add('active')
}
}
linkColor.forEach(l=> l.addEventListener('click', colorLink))

// Your code to run since DOM is loaded and ready
});
</script>
<script>
    cnt = 1;
    vehcnt = 1;
    counte = 1;
    newre = 1;
    chsc = 1;
    count = 1;
    function openHealth() {
        document.getElementById("health").style.display = "block";
        document.getElementById("car").style.display = "none";
        document.getElementById("finance").style.display = "none";
        document.getElementById("more").style.display = "none";
    }

    function openCar() {
        document.getElementById('health').style.display = "none";
        document.getElementById('car').style.display = "block";
        document.getElementById("finance").style.display = "none";
        document.getElementById("more").style.display = "none";

    }

    function openFinance() {
        document.getElementById('health').style.display = "none";
        document.getElementById('car').style.display = "none";
        document.getElementById("finance").style.display = "block";
        document.getElementById("more").style.display = "none";
    }

    function openMore() {
        document.getElementById('health').style.display = "none";
        document.getElementById('car').style.display = "none";
        document.getElementById("finance").style.display = "none";
        document.getElementById("more").style.display = "block";
    }

    function openCounterOffer() {


        if(cnt % 2 == 1)
        document.getElementById('counteroffer').innerHTML = '@if(isset($data->uploadpolice))' +
'	<input class="form-control" type="file" name="uploadpolice" value=""> ' +
'@else ' +
'	<input class="form-control" type="file" name="uploadpolice">   ' +
'@endif ' +
'	<input type="text" name="comment" placeholder="Comment">';
        else
        document.getElementById('counteroffer').innerHTML = '@if(isset($data->uploadpolice))' +
'	<input class="form-control" type="file" name="uploadpolice" value=""> ' +
'@else ' +
'	<input class="form-control" type="file" name="uploadpolice">   ' +
'@endif 	' +
'	<input type="text" name="comment" placeholder="Comment" value="">';


        if(cnt % 2 == 1){
        document.getElementById('counteroffer').innerHTML = '';
        }
        else{
        document.getElementById('counteroffer').innerHTML = "";
        }

        cnt++;
        vehcnt = 1;
        document.getElementById('newVehicle').innerHTML = "";
        document.getElementById('anotherNewVehicle').innerHTML = '';
    }

    function openNewVehicle() {
        if(vehcnt % 2 == 1){
        document.getElementById('newVehicle').innerHTML =
            '<label>Upload vehicle ID</label> ' +
            '	@if(isset($data->uploadvehicleid)) ' +
            '		<input class="form-control" type="file" name="uploadvehicleid" value=""> ' +
            '	@else ' +
            '		<input class="form-control" type="file" name="uploadvehicleid"> ' +
            '	@endif ' +
            '</div> ' +
            '<div> ' +
            '	<h6>Lesing</h6> ' +
            '	<input onclick="openYesCheckBox()" type="radio" name="leasing" id="yes" value="Yes"> ' +
            '	<label for="yes">Yes</label> <div class="hide" id="leasingname"> ' +
            '	<input type="text" name="leasingname" placeholder="Lesaing Name"> ' +
            '</div> ' +
            '<input type="radio" name="leasing" id="no" value="No"> ' +
            '	<label for="no">No</label> ' +
            '</div> ' +
            '<br> ' +
            '<hr> ' +
            '<h4>Vahicle Information</h4> ' +
            '<div> ' +
            '	<span>Purchase Year</span> ' +
            '	<select name="yearpurchase"> ' +
            '		@for($i = \Carbon\Carbon::now()->format("Y");$i>=1950;$i--) ' +
            '		<option value="{{$i}}">{{$i}}</option> ' +
            '		@endfor ' +
            '	</select> ' +
            '</div> ' +
            '<div> ' +
            '	<label>First Commissioning</label> ' +
            '	@if(isset($data->firstcommissioning)) ' +
            '		<input type="date" class="form-control" name="firstcommissioning" value="{{$data->firstcommissioning}}"> ' +
            '	@else ' +
            '		<input type="date" class="form-control" name="firstcommissioning"> ' +
            '	@endif ' +
            '</div> ' +
            '<div> ' +
            '	<label>Start Insurance</label> ' +
            '	@if(isset($data->startinsurance)) ' +
            '		<input type="date" class="form-control" name="startinsurance" value="{{$data->startinsurance}}"> ' +
            '	@else ' +
            '		<input type="date" class="form-control" name="startinsurance">  ' +
            '	@endif ' +
            '</div> ' +
            '<div> ' +
            '	<label>Kanton:</label> ' +
            '	<select name="kanton"> ' +
            '		@if(isset($data->kanton))' +
            '            <option selected value="{{$data->kanton}}">{{$data->kanton}}</option> ' +
            '        @endif' +
            '		<option>Zürich</option> ' +
            '		<option>Bern / Berne</option> ' +
            '		<option>Luzern</option> ' +
            '		<option>Uri</option> ' +
            '		<option>Schwyz</option> ' +
            '		<option>Unterwalden</option> ' +
            '		<option>Glarus</option> ' +
            '		<option>Zug</option> ' +
            '		<option>Freiburg / Fribourg</option> ' +
            '		<option>Solothurn</option> ' +
            '		<option>Basel</option> ' +
            '		<option>Schaffhausen</option> ' +
            '		<option>Appenzell</option> ' +
            '		<option>Sankt Gallen</option> ' +
            '		<option>Graubünden</option> ' +
            '		<option>Aargau</option> ' +
            '		<option>Thurgau</option> ' +
            '		<option>Ticino</option> ' +
            '		<option>Vaud</option> ' +
            '		<option>Valais / Wallis</option> ' +
            '		<option>Neuchâtel</option> ' +
            '		<option>Genève</option> ' +
            '		<option>Jura</option> ' +
            '	</select> ' +
            '</div> ' +
            '<div> ' +
            '	<label>KM-Stand</label> ' +
            '	@if(isset($data->kmstand)) ' +
            '		<input class="form-control" type="number" name="kmstand" value="{{$data->kmstand}}"> ' +
            '	@else ' +
            '		<input class="form-control" type="number" name="kmstand"> ' +
            '	@endif' +
            '</div> ' +
            '<hr> ' +
            '<h4>Driver Information</h4> ' +
            '<div> ' +
            '	<label>Date of issue of drivers license</label> ' +
            '	@if(isset($data->dateofissueofdriverslicense)) ' +
            '		<input class="form-control" type="date" name="dateofissueofdriverslicense" value="{{$data->dateofissueofdriverslicense}}">  ' +
            '	@else ' +
            '		<input class="form-control" type="date" name="dateofissueofdriverslicense"> ' +
            '	@endif' +
            '</div> ' +
            '<div> ' +
            '	<label>Nationality: </label> ' +
            '	@if(isset($data->nationality)) ' +
            '		<input class="form-control" type="text" name="nationality" value="{{$data->nationality}}"> ' +
            '	@else ' +
            '		<input class="form-control" type="text" name="nationality">  ' +
            '	@endif' +
            '</div> ' +
            '<div> ' +
            '	<label>Lenker? </label> ' +
            '	<select name="lenker"> ' +
            '		@if(isset($data->lenker))' +
            '            <option selected value="{{$data->lenker}}">{{$data->lenker}}</option> ' +
            '        @endif' +
            '		<option>Yes</option> ' +
            '		<option>No</option> ' +
            '	</select> ' +
            '</div> ' +
            '<hr> ' +
            '	<h4>Desired Coverage</h4> ' +
            '<div> ' +
            '	<label>Insurance</label> ' +
            '	<select name="insurance"> ' +
            '		@if(isset($data->insurance))' +
            '            <option selected value="{{$data->insurance}}">{{$data->insurance}}</option> ' +
            '        @endif' +
            '		<option>300</option> ' +
            '		<option>500</option> ' +
            '		<option>1000 (drivers under 25 years)</option> ' +
            '	</select> ' +
            '</div> ' +
            '<div> ' +
            '	<label>Deduction Part: </label> ' +
            '	<select name="deductionpart"> ' +
            '		@for($i = 1000;$i<=20000;$i+=1000) ' +
            '		@if(isset($data->deductionpart))' +
            '            <option selected value="{{$data->deductionpart}}">{{$data->deductionpart}}</option> ' +
            '        @endif' +
            '		<option>{{$i}}</option> ' +
            '		@endfor ' +
            '	</select>	' +
            '</div> ' +
            '<div> ' +
            '	<label>Things Carried: </label> ' +
            '	@if(isset($data->thingscarried)) ' +
            '		<input type="text" class="form-control" name="thingscarried" value="{{$data->thingscarried}}"> ' +
            '	@else ' +
            '		<input type="text" class="form-control" name="thingscarried"> ' +
            '	@endif ' +
            '</div> ' +
            '<div> ' +
            '	@if(isset($data->partnergarage)) ' +
            '		@if($data->partnergarage == "Parter Garage") ' +
            '			<label>Repair Shop: </label>' +
            '			<br> ' +
            '			<input type="radio" name="partnergarage" value="Parter Garage" checked> ' +
            '			<label for="partnergarage">Partener Garage</label> ' +
            '		@else ' +
            '			<input type="radio" name="partnergarage" value="Free Choice" checked> ' +
            '			<label for="partnergarage">Free Choice</label> ' +
            '		@endif ' +
            '		<label>Repair Shop: </label>' +
            '		<br> ' +
            '		<input type="radio" name="partnergarage" value="Parter Garage"> ' +
            '		<label for="partnergarage">Partener Garage</label> ' +
            '		<input type="radio" name="partnergarage" value="Free Choice"> ' +
            '		<label for="partnergarage">Free Choice</label> ' +
            '	@endif ' +
            '</div> ' +
            '<div> ' +
            '	@if(isset($data->accidentcoverage)) ' +
            '		@if($data->accidentcoverage == "Yes") ' +
            '			<label>Accident Coverage: </label>' +
            '			<br> ' +
            '			<input type="radio" name="accidentcoverage" value="Yes" checked> ' +
            '			<label for="accidentcoverage">Yes</label> ' +
            '		@else ' +
            '			<input type="radio" name="accidentcoverage" value="No" checked> ' +
            '			<label for="accidentcoverage">No</label> ' +
            '		@endif ' +
            '		<label>Accident Coverage: </label>' +
            '		<br> ' +
            '		<input type="radio" name="accidentcoverage" value="Yes"> ' +
            '		<label for="accidentcoverage">Yes</label> ' +
            '		<input type="radio" name="accidentcoverage" value="No"> ' +
            '		<label for="accidentcoverage">No</label> ' +
            '	@endif ' +
            '</div> ' +
            '<div> ' +
            '	@if(isset($data->trafficrightsprotection)) ' +
            '		@if($data->trafficrightsprotection == "Yes") ' +
            '			<label>Traffic Rights Protection: </label>' +
            '			<br> ' +
            '			<input type="radio" name="trafficrightsprotection" value="Yes" checked> ' +
            '			<label for="trafficrightsprotection">Yes</label> ' +
            '		@else ' +
            '			<input type="radio" name="trafficrightsprotection" value="No" checked> ' +
            '			<label for="trafficrightsprotection">No</label> ' +
            '	@endif ' +
            '		<label>Traffic Rights Protection: </label>' +
            '		<br> ' +
            '		<input type="radio" name="trafficrightsprotection" value="Yes"> ' +
            '		<label for="trafficrightsprotection">Yes</label> ' +
            '		<input type="radio" name="trafficrightsprotection" value="No"> ' +
            '		<label for="trafficrightsprotection">No</label> ' +
            '	@endif ' +
            '</div> ' +
            '<div> ' +
            '	@if(isset($data->grossnegligenceprotection)) ' +
            '		@if($data->grossnegligenceprotection == "Yes") ' +
            '			<label>Gross Negligence Protection: </label>' +
            '			<br> ' +
            '			<input type="radio" name="grossnegligenceprotection" value="Yes" checked> ' +
            '			<label for="grossnegligenceprotection">Yes</label> ' +
            '		@else ' +
            '			<input type="radio" name="grossnegligenceprotection" value="No" checked> ' +
            '			<label for="grossnegligenceprotection">No</label> ' +
            '		@endif ' +
            '		<label>Gross Negligence Protection: </label>' +
            '		<br> ' +
            '		<input type="radio" name="grossnegligenceprotection" value="Yes"> ' +
            '		<label for="grossnegligenceprotection">Yes</label> ' +
            '		<input type="radio" name="grossnegligenceprotection" value="No">' +
            '		<label for="grossnegligenceprotection">No</label> ' +
            '	@endif ' +
            '</div> ' +
            '<div> ' +
            '	@if(isset($data->glassprotection)) ' +
            '		@if($data->glassprotection == "Yes") ' +
            '			<label>Glass Protection: </label>' +
            '			<br> ' +
            '			<input type="radio" name="glassprotection" value="Yes" checked> ' +
            '			<label for="glassprotection">Yes</label> ' +
            '		@else ' +
            '			<input type="radio" name="glassprotection" value="No" checked> ' +
            '			<label for="glassprotection">No</label> ' +
            '		@endif ' +
            '		<label>Glass Protection: </label>' +
            '		<br> ' +
            '		<input type="radio" name="glassprotection" value="Yes"> ' +
            '		<label for="glassprotection">Yes</label> ' +
            '		<input type="radio" name="glassprotection" value="No"> ' +
            '		<label for="glassprotection">No</label> ' +
            '	@endif ' +
            '</div> ' +
            '<div> ' +
            '	@if(isset($data->parkingdamage)) ' +
            '		@if($data->parkingdamage == "Yes") ' +
            '			<label>Parking Damage: </label>' +
            '			<br> ' +
            '			<input type="radio" name="parkingdamage" value="Yes" checked> ' +
            '			<label for="parkingdamage">Yes</label> ' +
            '		@else ' +
            '			<input type="radio" name="parkingdamage" value="No" checked> ' +
            '			<label for="parkingdamage">No</label> ' +
            '		@endif ' +
            '		<label>Parking Damage: </label>' +
            '		<br> ' +
            '		<input type="radio" name="parkingdamage" value="Yes"> ' +
            '		<label for="parkingdamage">Yes</label> ' +
            '		<input type="radio" name="parkingdamage" value="No"> ' +
            '		<label for="parkingdamage">No</label> ' +
            '	@endif ' +
            '</div> ' +
            '<div> ' +
            '	@if(isset($data->roadsideassistance)) ' +
            '		@if($data->roadsideassistance == "Yes") ' +
            '			<label>24H Roadside Assistance: </label>' +
            '			<br> ' +
            '			<input type="radio" name="roadsideassistance" value="Yes" checked> ' +
            '			<label for="roadsideassistance">Yes</label> ' +
            '		@else ' +
            '			<input type="radio" name="roadsideassistance" value="No" checked> ' +
            '			<label for="roadsideassistance">No</label> ' +
            '		@endif ' +
            '		<label>24H Roadside Assistance: </label>' +
            '		<br> ' +
            '		<input type="radio" name="roadsideassistance" value="Yes" >' +
            '		<label for="roadsideassistance">Yes</label> ' +
            '		<input type="radio" name="roadsideassistance" value="No" > ' +
            '		<label for="roadsideassistance">No</label> ' +
            '	@endif ' +
            '</div> ' +
            '<div> ' +
            '	<label>Car Comment</label>' +
            '	@if(isset($data->carcomment)) ' +
            '		<input type="text" class="form-control" name="carcomment" value="{{$data->carcomment}}"> ' +
            '	@else ' +
            '		<input type="text" class="form-control" name="carcomment"> ' +
            '	@endif	' +
            '	<br> ' +
            '	<input type="button" class="btn btn-info" onClick="openAnotherNewVehicle()" value="Add Another One">' +
            '</div>';
        }
        else{
        document.getElementById('newVehicle').innerHTML = "";}
        vehcnt++;
        cnt = 1;
        document.getElementById('counteroffer').innerHTML = "";
        document.getElementById('anotherNewVehicle').innerHTML = '';

    }

    function openYesCheckBox() {
        document.getElementById('leasingname').classList.toggle('hide');
    }

    function openCounteroffered() {
        if(counte % 2 == 1){
        document.getElementById('counteroffered').innerHTML =
            '<h4>Counteroffer</h4>  ' +
            '<div>' +
            '      <label>Upload Police</label>' +
            '	  @if(isset($data->uploadpolice2))' +
            '	  <input type="file" name="uploadpolice2" class="form-control" value="{{$data->uploadpolice2}}">' +
            '	  @else' +
            '	  <input type="file" name="uploadpolice2" class="form-control">' +
            '	  @endif' +
            '	  <label>Comment At Police: </label>' +
            '	  @if(isset($data->commentatpolice))' +
            '	  <input type="text" name="commentatpolice" value="{{$data->commentatpolice}}">   ' +
            '	  @else' +
            '	  <input type="text" name="commentatpolice"> @endif' +
            '</div>';
        }
        else{
            document.getElementById('counteroffered').innerHTML = '';
        }
        counte++;
        document.getElementById('newrequest').innerHTML = "";
        document.getElementById('choosesociety').innerHTML = "";
        document.getElementById('anotherNewVehicle').innerHTML = '';
        newre = 1;
        chsc = 1;
    }

    function openNewPropertyInsurance() {
        if(newre % 2 == 1){
            document.getElementById('newrequest').innerHTML = '<h4>New Request</h4>' +
'<div>' +
'	<label>Number Of People</label>' +
'	<select name="numberofpeople">' +
'		@for($i = 1;$i<=30;$i++)' +
'			@if(isset($data->numberofpeople))' +
'				<option selected value="{{$data->numberofpeople}}">{{$data->numberofpeople}}</option>' +
'			@endif' +
'			<option>{{$i}}</option>' +
'		@endfor' +
'	</select>' +
'</div>' +
'<div>' +
'	<label>Number Of Rooms</label>' +
'	<select name="numberofrooms">' +
'		@for($i = 1;$i<=30;$i++)' +
'			@if(isset($data->numberofrooms))' +
'				<option selected value="{{$data->numberofrooms}}">{{$data->numberofrooms}}</option>' +
'			@endif' +
'			<option>{{$i}}</option>' +
'		@endfor' +
'	</select>' +
'</div>' +
'<div>' +
'	<label>Insuranceamount: </label>' +
'		@if(isset($data->insuranceamount))' +
'		<input type="number" name="insuranceamount" class="form-control" value="{{$data->insuranceamount}}">' +
'		@else' +
'		<input type="number" name="insuranceamount" class="form-control">' +
'		@endif' +
'</div>' +
'<div>' +
'	<label>Wished Additional Things: </label>' +
'		@if(isset($data->wishedadditionalthings))' +
'		<input type="text" name="wishedadditionalthings" class="form-control" value="{{$data->wishedadditionalthings}}">' +
'		@else' +
'		<input type="text" name="wishedadditionalthings" class="form-control">' +
'		@endif' +
'</div>' +
'<div>' +
'	<label>Private Liability: </label>' +
'	<br>' +
'	@if(isset($data->privateliability))  ' +
'		@if($data->privateliability == "Yes")' +
'			<input type="radio" name="privateliability" value="Yes" checked>' +
'			<label for="privateliability">Yes</label>' +
'		@else' +
'			<input type="radio" name="privateliability" value="No" checked>' +
'			<label for="privateliability">No</label>' +
'		@endif ' +
'	@else' +
'		<input type="radio" name="privateliability" value="Yes" >' +
'		<label for="privateliability">Yes</label>' +
'		<input type="radio" name="privateliability" value="No" >' +
'		<label for="privateliability">No</label>' +
'	@endif ' +
'</div>';
        }else{
            document.getElementById('newrequest').innerHTML = "";
        }
        newre++;
        document.getElementById('counteroffered').innerHTML = '';
        document.getElementById('choosesociety').innerHTML = "";
        document.getElementById('anotherNewVehicle').innerHTML = '';
        counte = 1;
        chsc = 1;
    }

    function openChoiceSociety() {
        if(chsc % 2 == 1) {
            document.getElementById('choosesociety').innerHTML =
            '<div> ' +
'	<h4>Legal Protection Insurance</h4> ' +
'	<div> ' +
'		<label>Society</label> ' +
'		@if(isset($data->society))' +
'		<input type="text" name="society" class="form-control" value="{{$data->society}}"> ' +
'		@else' +
'		<input type="text" name="society" class="form-control"> ' +
'		@endif' +
'	</div> ' +
'	<div> ' +
'		<label>Number Of People at Insurance</label> ' +
'		<select name="numberofpeopleinsurance">' +
'			@for($i = 1;$i<=30;$i++)' +
'				@if(isset($data->numberofpeopleinsurance))' +
'					<option selected value="{{$data->numberofpeopleinsurance}}">{{$data->numberofpeopleinsurance}}</option> ' +
'				@endif' +
'				<option>{{$i}}</option>' +
'			@endfor' +
'		</select>' +
'	</div> ' +
'</div>';
        }else{
            document.getElementById('choosesociety').innerHTML = "";
        }
        chsc++;
        document.getElementById('counteroffered').innerHTML = "";
        document.getElementById('newrequest').innerHTML = "";
        document.getElementById('anotherNewVehicle').innerHTML = '';
        counte = 1;
        newre = 1;
    }

    function openAnotherNewVehicle(){

        document.getElementById('anotherNewVehicle').innerHTML += '<div id="counter' + count +'"></div>';
        document.getElementById('counter'+ count).innerHTML +=
        '<label>Upload vehicle ID</label> ' +
'@if(isset($data->uploadvehicleid)) ' +
'<input class="form-control" type="file" name="uploadvehicleid'+ count+ '" value="{{$data->uploadvehicleid}}"> ' +
'@else ' +
'<input class="form-control" type="file" name="uploadvehicleid'+ count+ '"> ' +
'@endif ' +
'</div>' +
'<div>' +
'  <h6>Lesing</h6>' +
'  <input onclick="openYesCheckBox()" type="radio" name="leasing'+ count+ '" id="yes" value="Yes">' +
'  <label for="yes">Yes</label>' +
'  <div class="hide" id="leasingname">' +
'    <input type="text" name="leasingname'+ count+ '" placeholder="Lesaing Name">' +
'  </div>' +
'  <input type="radio" name="leasing'+ count+ '" id="no" value="No">' +
'  <label for="no">No</label>' +
'</div>' +
'<br>' +
'<hr>' +
'<h4>Vahicle Information</h4>' +
'<div>' +
'  <span>Purchase Year</span>' +
'  <select name="yearpurchase'+ count+ '"> @for($i = \Carbon\Carbon::now()->format("Y");$i>=1950;$i--) <option value="{{$i}}">{{$i}}</option> @endfor </select>' +
'</div>' +
'<div>' +
'  <label>First Commissioning</label>' +
'	@if(isset($data->firstcommissioning)) ' +
'	<input type="date" class="form-control" name="firstcommissioning'+ count+ '" value="{{$data->firstcommissioning}}">' +
'	@else ' +
'	<input type="date" class="form-control" name="firstcommissioning'+ count+ '"> ' +
'	@endif' +
'</div>' +
'<div>' +
'  <label>Start Insurance</label>' +
'	@if(isset($data->startinsurance)) ' +
'	<input type="date" class="form-control" name="startinsurance'+ count+ '" value="{{$data->startinsurance}}">' +
'	@else ' +
'	<input type="date" class="form-control" name="startinsurance'+ count+ '">' +
'	@endif' +
'</div>' +
'<div>' +
'  <label>Kanton:</label>' +
'  <select name="kanton">' +
'	@if(isset($data->kanton))' +
'        <option selected value="{{$data->kanton}}">{{$data->kanton}}</option>' +
'	@endif' +
'    <option>Zürich</option>' +
'    <option>Bern / Berne</option>' +
'    <option>Luzern</option>' +
'    <option>Uri</option>' +
'    <option>Schwyz</option>' +
'    <option>Unterwalden</option>' +
'    <option>Glarus</option>' +
'    <option>Zug</option>' +
'    <option>Freiburg / Fribourg</option>' +
'    <option>Solothurn</option>' +
'    <option>Basel</option>' +
'    <option>Schaffhausen</option>' +
'    <option>Appenzell</option>' +
'    <option>Sankt Gallen</option>' +
'    <option>Graubünden</option>' +
'    <option>Aargau</option>' +
'    <option>Thurgau</option>' +
'    <option>Ticino</option>' +
'    <option>Vaud</option>' +
'    <option>Valais / Wallis</option>' +
'    <option>Neuchâtel</option>' +
'    <option>Genève</option>' +
'    <option>Jura</option>' +
'  </select>' +
'</div>' +
'<div>' +
'  <label>KM-Stand</label>' +
'	@if(isset($data->kmstand)) ' +
'	<input class="form-control" type="number" name="kmstand'+ count+ '" value="{{$data->kmstand}}">' +
'	@else ' +
'	<input class="form-control" type="number" name="kmstand'+ count+ '">' +
'	@endif' +
'</div>' +
'<hr>' +
'<h4>Driver Information</h4>' +
'<div>' +
'  <label>Date of issue of drivers license</label>' +
'	@if(isset($data->dateofissueofdriverslicense)) ' +
'	<input class="form-control" type="date" name="dateofissueofdriverslicense'+ count+ '" value="{{$data->dateofissueofdriverslicense}}">' +
'	@else ' +
'	<input class="form-control" type="date" name="dateofissueofdriverslicense'+ count+ '">' +
'	@endif' +
'</div>' +
'<div>' +
'  <label>Nationality: </label>' +
'	@if(isset($data->nationality)) ' +
'	<input class="form-control" type="text" name="nationality'+ count+ '" value="{{$data->nationality}}">' +
'	@else ' +
'	<input class="form-control" type="text" name="nationality'+ count+ '">' +
'	@endif' +
'</div>' +
'<div>' +
'  <label>Lenker? </label>' +
'  <select name="lenker'+ count+ '">' +
'	@if(isset($data->lenker))' +
'        <option selected value="{{$data->lenker}}">{{$data->lenker}}</option>' +
'	@endif' +
'    <option>Yes</option>' +
'    <option>No</option>' +
'  </select>' +
'</div>' +
'<hr>' +
'<h4>Desired Coverage</h4>' +
'<div>' +
'  <label>Insurance</label>' +
'  <select name="insurance'+ count+ '">' +
'	@if(isset($data->insurance))' +
'        <option selected value="{{$data->insurance}}">{{$data->insurance}}</option>' +
'	@endif' +
'    <option>300</option>' +
'    <option>500</option>' +
'    <option>1000 (drivers under 25 years)</option>' +
'  </select>' +
'</div>' +
'<div>' +
'  <label>Deduction Part: </label>' +
'  <select name="deductionpart'+ count+ '"> ' +
'	@for($i = 1000;$i<=20000;$i+=1000) ' +
'		@if(isset($data->deductionpart))' +
'			<option selected value="{{$data->deductionpart}}">{{$data->deductionpart}}</option>' +
'		@endif' +
'      <option>{{$i}}</option> ' +
'	@endfor ' +
'  </select>' +
'</div>' +
'<div>' +
'  <label>Things Carried: </label>' +
'	@if(isset($data->thingscarried)) ' +
'	<input type="text" class="form-control" name="thingscarried'+ count+ '" value="{{$data->thingscarried}}">' +
'	@else ' +
'	<input type="text" class="form-control" name="thingscarried'+ count+ '">' +
'	@endif' +
'</div>' +
'<div> @if(isset($data->partnergarage)) @if($data->partnergarage == "Parter Garage") <label>Repair Shop: </label>' +
'  <br>' +
'  <input type="radio" name="partnergarage'+ count+ '" value="Parter Garage" checked>' +
'  <label for="partnergarage">Partener Garage</label> @else <input type="radio" name="partnergarage'+ count+ '" value="Free Choice" checked>' +
'  <label for="partnergarage">Free Choice</label> @endif <label>Repair Shop: </label>' +
'  <br>' +
'  <input type="radio" name="partnergarage'+ count+ '" value="Parter Garage">' +
'  <label for="partnergarage">Partener Garage</label>' +
'  <input type="radio" name="partnergarage'+ count+ '" value="Free Choice">' +
'  <label for="partnergarage">Free Choice</label> @endif' +
'</div>' +
'<div> @if(isset($data->accidentcoverage)) @if($data->accidentcoverage == "Yes") <label>Accident Coverage: </label>' +
'  <br>' +
'  <input type="radio" name="accidentcoverage'+ count+ '" value="Yes" checked>' +
'  <label for="accidentcoverage">Yes</label> @else <input type="radio" name="accidentcoverage'+ count+ '" value="No" checked>' +
'  <label for="accidentcoverage">No</label> @endif <label>Accident Coverage: </label>' +
'  <br>' +
'  <input type="radio" name="accidentcoverage'+ count+ '" value="Yes">' +
'  <label for="accidentcoverage">Yes</label>' +
'  <input type="radio" name="accidentcoverage'+ count+ '" value="No">' +
'  <label for="accidentcoverage">No</label> @endif' +
'</div>' +
'<div> @if(isset($data->trafficrightsprotection)) @if($data->trafficrightsprotection == "Yes") <label>Traffic Rights Protection: </label>' +
'  <br>' +
'  <input type="radio" name="trafficrightsprotection'+ count+ '" value="Yes" checked>' +
'  <label for="trafficrightsprotection">Yes</label> @else <input type="radio" name="trafficrightsprotection'+ count+ '" value="No" checked>' +
'  <label for="trafficrightsprotection">No</label> @endif <label>Traffic Rights Protection: </label>' +
'  <br>' +
'  <input type="radio" name="trafficrightsprotection'+ count+ '" value="Yes">' +
'  <label for="trafficrightsprotection">Yes</label>' +
'  <input type="radio" name="trafficrightsprotection'+ count+ '" value="No">' +
'  <label for="trafficrightsprotection">No</label> @endif' +
'</div>' +
'<div> @if(isset($data->grossnegligenceprotection)) @if($data->grossnegligenceprotection == "Yes") <label>Gross Negligence Protection: </label>' +
'  <br>' +
'  <input type="radio" name="grossnegligenceprotection'+ count+ '" value="Yes" checked>' +
'  <label for="grossnegligenceprotection">Yes</label> @else <input type="radio" name="grossnegligenceprotection'+ count+ '" value="No" checked>' +
'  <label for="grossnegligenceprotection">No</label> @endif <label>Gross Negligence Protection: </label>' +
'  <br>' +
'  <input type="radio" name="grossnegligenceprotection'+ count+ '" value="Yes">' +
'  <label for="grossnegligenceprotection">Yes</label>' +
'  <input type="radio" name="grossnegligenceprotection'+ count+ '" value="No">' +
'  <label for="grossnegligenceprotection">No</label> @endif' +
'</div>' +
'<div> @if(isset($data->glassprotection)) @if($data->glassprotection == "Yes") <label>Glass Protection: </label>' +
'  <br>' +
'  <input type="radio" name="glassprotection'+ count+ '" value="Yes" checked>' +
'  <label for="glassprotection">Yes</label> @else <input type="radio" name="glassprotection'+ count+ '" value="No" checked>' +
'  <label for="glassprotection">No</label> @endif <label>Glass Protection: </label>' +
'  <br>' +
'  <input type="radio" name="glassprotection'+ count+ '" value="Yes">' +
'  <label for="glassprotection">Yes</label>' +
'  <input type="radio" name="glassprotection'+ count+ '" value="No">' +
'  <label for="glassprotection">No</label> @endif' +
'</div>' +
'<div> @if(isset($data->parkingdamage)) @if($data->parkingdamage == "Yes") <label>Parking Damage: </label>' +
'  <br>' +
'  <input type="radio" name="parkingdamage'+ count+ '" value="Yes" checked>' +
'  <label for="parkingdamage">Yes</label> @else <input type="radio" name="parkingdamage'+ count+ '" value="No" checked>' +
'  <label for="parkingdamage">No</label> @endif <label>Parking Damage: </label>' +
'  <br>' +
'  <input type="radio" name="parkingdamage'+ count+ '" value="Yes">' +
'  <label for="parkingdamage">Yes</label>' +
'  <input type="radio" name="parkingdamage'+ count+ '" value="No">' +
'  <label for="parkingdamage">No</label> @endif' +
'</div>' +
'<div> @if(isset($data->roadsideassistance)) @if($data->roadsideassistance == "Yes") <label>24H Roadside Assistance: </label>' +
'  <br>' +
'  <input type="radio" name="roadsideassistance'+ count+ '" value="Yes" checked>' +
'  <label for="roadsideassistance">Yes</label> @else <input type="radio" name="roadsideassistance'+ count+ '" value="No" checked>' +
'  <label for="roadsideassistance">No</label> @endif <label>24H Roadside Assistance: </label>' +
'  <br>' +
'  <input type="radio" name="roadsideassistance'+ count+ '" value="Yes">' +
'  <label for="roadsideassistance">Yes</label>' +
'  <input type="radio" name="roadsideassistance'+ count+ '" value="No">' +
'  <label for="roadsideassistance">No</label> @endif' +
'</div>' +
'<div>' +
'  <label>Car Comment</label>' +
'	@if(isset($data->carcomment)) ' +
'	<input type="text" class="form-control" name="carcomment'+ count+ '" value="{{$data->carcomment}}">' +
'	@else ' +
'	<input type="text" class="form-control" name="carcomment'+ count+ '">' +
'	@endif' +
'  <br>' +
'  <input type="button" class="btn btn-info" onClick="openAnotherNewVehicle()" value="Add Another One">' +
'  <input type="button" class="btn btn-danger" onClick="deleteAnotherNewVehicle()" value="Delete">' +
'</div>';
        count++;
        document.getElementById('count').value = count;
    }

    function deleteAnotherNewVehicle(){
        document.getElementById('counter'+ --count).innerHTML = '';
        document.getElementById('count').value = count;
    }

    var Offene_Aufgaben__bool = false;

    $(document).ready(function(){
        $("#Offene_Aufgaben__").click(function(){
            $("#first_collapse").collapse('toggle');
            if(Offene_Aufgaben__bool == false){
                $("#Offene_Aufgaben_arrow__").addClass("bi bi-caret-down-fill bi-caret-up-fill");
                Offene_Aufgaben__bool = true;
            }else{
                $("#Offene_Aufgaben_arrow__").removeClass("bi bi-caret-up-fill");
                Offene_Aufgaben__bool = false;
            }
        });
    });

    var Pending__bool = false;

    $(document).ready(function(){
        $("#Pending__").click(function(){
            $("#collapse__").collapse('toggle');
            if(Pending__bool == false){
                $("#Pending_arrow__").addClass("bi bi-caret-down-fill bi-caret-up-fill");
                Pending__bool = true;
            }else{
                $("#Pending_arrow__").removeClass("bi bi-caret-up-fill");
                Pending__bool = false;
            }
        });
    });
</script>


<style>
    * {
        font-family: 'Poppins';font-size: 17px;

    }
    .hide {
            display: none;
        }
    :root {
        --header-height: 3rem;
        --nav-width: 68px;
        --first-color: #fff;
        --first-color-light: #AFA5D9;
        --white-color: #F7F6FB;
        --body-font: 'Nunito', sans-serif;
        --normal-font-size: 1rem;
        --z-fixed: 100
    }

    *,
    ::before,
    ::after {
        box-sizing: border-box
    }

    body {
        position: relative;
        margin: var(--header-height) 0 0 0;
        padding: 0 1rem;
        font-family: var(--body-font);
        font-size: var(--normal-font-size);
        transition: .5s
    }

    a {
        text-decoration: none
    }

    .header {
        width: 100%;
        height: 0px;
        position: fixed;
        top: 0;
        left: 0;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0 1rem;
        background-color: var(--white-color);
        z-index: var(--z-fixed);
        transition: .5s
    }

    .header_toggle {
        color: var(--first-color);
        font-size: 1.5rem;
        cursor: pointer
    }

    .header_img {
        width: 35px;
        height: 35px;
        display: flex;
        justify-content: center;
        border-radius: 50%;
        overflow: hidden
    }

    .header_img img {
        width: 40px
    }

    .l-navbar {
        position: fixed;
        top: 0;
        left: -30%;
        width: var(--nav-width);
        height: 100vh;
        background-color: var(--first-color);
        padding: .5rem 1rem 0 0;
        transition: .7s;
        z-index: var(--z-fixed)
    }

    .nav {
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        overflow: hidden
    }

    .nav_logo,
    .nav_link {
        display: grid;
        grid-template-columns: max-content max-content;
        align-items: center;
        column-gap: 1rem;
        padding: .5rem 0 .5rem 1.5rem
    }

    .nav_logo {
        margin-bottom: 2rem
    }

    .nav_logo-icon {
        font-size: 1.25rem;
        color: var(--white-color)
    }

    .nav_logo-name {
        color: var(--white-color);
        font-weight: 700
    }

    .nav_link {
        position: relative;
        color: var(--first-color-light);
        margin-bottom: 1.5rem;
        transition: .3s
    }

    .nav_link:hover {
        color: var(--white-color)
    }

    .nav_icon {
        font-size: 1.25rem
    }

    /* .show {
        left: 0
    } */

    .body-pd {
        padding-left: 0;
    }

    .active {
        color: var(--white-color)
    }

    .active::before {
        content: '';
        position: absolute;
        left: 0;
        width: 2px;
        height: 32px;
        background-color: var(--white-color)
    }

    .height-100 {
        height: 100vh
    }
    #body-pd{
        margin: 0;
    }
    @media screen and (min-width: 880px) {
        body {
            margin: calc(var(--header-height) + 1rem) 0 0 0;
            padding-left: calc(var(--nav-width) + 2rem)
        }

        .header {

            height: 0px;
            padding: 0 2rem 0 calc(var(--nav-width) + 2rem)
        }

        .header_img {
            width: 40px;
            height: 40px
        }

        .header_img img {
            width: 45px
        }

        .l-navbar {
            left: 0;
            padding: 1rem 1rem 0 0
        }

        /* .show {
            width: calc(var(--nav-width) - 30px)
        } */
        .nav_link{
            text-decoration: none;
        }

        .body-pd {
            padding-left: calc(var(--nav-width))
        }

        .card {
        width: 350px;
        padding: 10px;
        border-radius: 20px;
        background: #fff;
        border: none;
        height: 350px;
        position: relative
    }

    .container {
        height: 100vh
    }


    .mobile-text {
        color: #989696b8;
        font-size: 15px
    }

    .form-control {
        margin-right: 12px
    }

    .form-control:focus {
        color: #495057;
        background-color: #fff;
        border-color: #ff8880;
        outline: 0;
        box-shadow: none
    }

    .cursor {
        cursor: pointer
    }
    #nav-bar{
        min-width: 200px;
    }

    }
    a:link{
        text-decoration: none;
    }
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap');

    .card {
        width: 300px;
        border: none;
        border-radius: 15px
    }

    .adiv {
        background: #04CB28;
        border-radius: 15px;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
        font-size: 12px;
        height: 46px
    }

    .chat {
        border: none;
        background: #E2FFE8;
        font-size: 10px;
        border-radius: 20px
    }

    .bg-white {
        border: 1px solid #E7E7E9;
        font-size: 10px;
        border-radius: 20px
    }

    .myvideo img {
        border-radius: 20px
    }

    .dot {
        font-weight: bold
    }

    .form-control {
        border-radius: 12px;
        border: 1px solid #F0F0F0;
        font-size: 8px
    }

    .form-control:focus {
        box-shadow: none
    }

    .form-control::placeholder {
        font-size: 8px;
        color: #C4C4C4
    }
    .calendarspan span{
        font-size: 12px;
    }
</style>