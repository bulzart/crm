@extends('template.navbar')
@section('content')
<style>

  body {
    margin-top: 40px;
    font-size: 14px;
    font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
  }



  #external-events {
    
  }
  

  #external-events h4 {
    font-size: 16px;
    margin-top: 0;
    padding-top: 1em;
  }

  #external-events .fc-event {
    margin: 10px 0;
    cursor: pointer;
  }

  #external-events p {
    margin: 1.5em 0;
    font-size: 11px;
    color: #666;
  }

  #external-events p input {
    margin: 0;
    vertical-align: middle;
  }

  #calendar {
    float: left;
    width: 90%;
	text-color : black ;
  }
  

</style>
  



<link href='lib_cal/main.css' rel='stylesheet' />
<script src='lib_cal/main.js'></script>
<script src='lib_cal/moment.min.js'></script>
<script src='lib_cal/moment.js'></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


@if(Auth::guard('admins')->user()->hasRole('admin') || Auth::guard('admins')->user()->hasRole('salesmanager'))

<script>

  document.addEventListener('DOMContentLoaded', function() {

    /* initialize the external events
    -----------------------------------------------------------------*/

    var containerEl = document.getElementById('external-events');
    new FullCalendar.Draggable(containerEl, {
      itemSelector: '.fc-event',
      eventData: function(eventEl) {
        return {
          title: eventEl.innerText.trim(),
        }
      }
    });

    /* initialize the calendar
    -----------------------------------------------------------------*/

    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
		
      //now: '2020-09-07',
      editable: false, // enable draggable events
      droppable: true, // this allows things to be dropped onto the calendar
      aspectRatio: 1.8,
      
      headerToolbar: {
        left: 'prev,next today',
        center: 'title',
        right: 'resourceTimeGridDay,timeGridWeek,dayGridMonth'
      },
	  views: {
			 dayGridMonth: {
			   eventMaxStack: 3
			 },
			 timeGridWeek: {
			   eventMaxStack: 3
			 },
			 
		 },
		 
	  slotLabelFormat: {hour: 'numeric', minute: '2-digit', hour12: false},

	  height: 600,
      initialView: 'resourceTimeGridDay',
	  slotMinTime: "08:00:00",
      slotMaxTime : "20:00:00",
      slotDuration: '00:30:00',
	  slotLabelInterval: 30,
	  allDaySlot : false,
	  eventMaxStack : 3,
      dayMaxEvents : 3,
	  

      resources: [
	  @foreach($users as $user)
        { id: '{!! $user->id !!}', title: '{!! $user->name !!}', eventColor: 'green' },
	  @endforeach
        
        
      ],
      events: [
	  @foreach ( $appointments as $appointmentAGG )
        { 		
		id: '{!! $appointmentAGG["id"] !!}', 
		resourceId: '{!! $appointmentAGG["assign_to_id"] !!}', 
		title: '{{ $appointmentAGG["first_name"] }} {{ $appointmentAGG["last_name"] }}', 
		start: new Date('{!! date("d/M/Y H:i:s", strtotime($appointmentAGG["appointment_date"]." ".$appointmentAGG["time"])) !!}') , 		
		telephone: '{{ $appointmentAGG["telephone"] }}' , 
		birthdate: '{{ $appointmentAGG["birthdate"] }}' , 
		number_of_persons: '{{ $appointmentAGG["number_of_persons"] }}' , 
		nationality: '{{ $appointmentAGG["nationality"] }}' , 
		status_task: '{{ $appointmentAGG["status_task"] }}' , 
		eventColor: 'green',
		name: '{{ $appointmentAGG["first_name"] }} {{ $appointmentAGG["last_name"] }}', 
		user_to :'{{ $appointmentAGG["assign_to_id"] }}',
		
		 
		
		},
        
	  @endforeach
	  
      ],
      drop: function(arg) {
        console.log('drop date: ' + arg.dateStr)

        if (arg.resource) {
          //console.log('drop resource: ' + arg.resource.id);
		  
		  //console.log('eventReceive',arg.draggedEl.innerText.trim());
		  
		 
		  if (confirm('Are you sure you want to assign appointment of ('+arg.draggedEl.innerText.trim()+') to <'+arg.resource.title+'>')) {
		  // Save it!
		  // console.log('Thing was saved to the database.');
		  
		 $.ajax({
                     url: "{{URL::route('Dropajax')}}"+"?nom_lead="+arg.draggedEl.innerText.trim()+"&id_user="+arg.resource.id+"&time="+moment(arg.dateStr).format('HH:mm') ,					 
                     type: "GET",
                     data: {"data" : arg.draggedEl.innerText.trim()},
                     success: function(data) {
                          alert(data);
						  window.location.reload();
                                   }
                              }); 
		 
		  
		  
		  
		  arg.draggedEl.parentNode.removeChild(arg.draggedEl);
		} else {
		  // Do nothing!
		  // console.log('Thing was not saved to the database.');
		  // alert('KO');
		  
		  // remove from calendar
		  arg.remove()
		}
        }

         
      },
      eventReceive: function(arg) { // called when a proper external event is dropped
        //console.log('eventReceive', arg.event);
		
		
      },
      eventDrop: function(arg) { // called when an event (already on the calendar) is moved
        //console.log('eventDrop', arg.event);
      },
	  eventClick: function(calEvent) {
		 
		 document.getElementById("start").innerHTML = moment(calEvent.event.start).format('Y-MM-DD HH:mm');
		 document.getElementById("name").innerHTML = calEvent.event.title;
		 document.getElementById("telephone").innerHTML = calEvent.event.extendedProps.telephone;
		 document.getElementById("birthdate").innerHTML = calEvent.event.extendedProps.birthdate;
		 //document.getElementById("address").innerHTML = calEvent.event.extendedProps.address;
		 document.getElementById("number_of_persons").innerHTML = calEvent.event.extendedProps.number_of_persons;
		 document.getElementById("nationality").innerHTML = calEvent.event.extendedProps.nationality;
		 document.getElementById("status_task").innerHTML = calEvent.event.extendedProps.status_task;
		 document.getElementById("id").innerHTML = calEvent.event.id;
		 document.getElementById("id_lead_input").value = calEvent.event.id;
		 document.getElementById("id_lead_input2").value = calEvent.event.id;
		 document.getElementById("date_new").value = moment(calEvent.event.start).format('Y-MM-DD');
		 document.getElementById("date_new2").value = moment(calEvent.event.start).format('Y-MM-DD');
		 document.getElementById("time_new").value = moment(calEvent.event.start).format('HH:mm');
		 document.getElementById("time_new2").value = moment(calEvent.event.start).format('HH:mm');
		 document.getElementById("OP-"+calEvent.event.extendedProps.user_to).selected = true ;
		 
		 $(exampleModal).modal('show'); 
				
	 },
    });
    calendar.render();
	

  });

</script>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog " role="document " style="max-width: 700px">
    <div class="modal-content">
      <div class="modal-header">
	  <div class="col-md-4" style="text-align : left">
	  <h5 class="modal-title" id="exampleModalLabel">Appointement detail</h5>
	  </div>
	  <div class="col-md-6" style="text-align : center">
	  <h4 style="text-align : center; "><B><span id='start' style=" color : #e57e2d"></span></B> (<span id='number_of_persons'></span>persons)</h4>
	  </div>
	  <div class="col-md-2" style="text-align : right">
	  <h5 class="modal-title"><B>ID :</B><span id='id'></span></h5>
	  </div>
             
      </div>
      <div class="modal-body">
	  
	    
		
	    
	    <p style="line-height :8px"><B>Name :</B><span id='name'></span></p>
	    <p style="line-height :8px"><B>Telephone :</B><span id='telephone'></span></p>
	    <p style="line-height :8px"><B>Birthdate :</B><span id='birthdate'></span></p>
	    <p style="line-height :8px"><B>Nationality :</B><span id='nationality'></span></p>
	    <p style="line-height :8px"><B>Status of task :</B><span id='status_task'></span></p>
		<hr>
		<!--<p><B>address :</B><span id='address'></span></p> -->
		<div class="row" >
			<div class="col-md-6" style="text-align : left; ">
			<a href="#" onclick='document.getElementById("change_fs").style.display = "block" ;' class="btn btn-info btn-sm"><i class="far fa-edit"></i> Edit</a>
			</div>
			<div class="col-md-6" style="text-align : right ;">
			{{ Form::open(array('url' => 'changeTS' , 'method' => 'get')) }} 
			<input type="hidden"  id="id_lead_input2" name="id_lead_input"> 
			<input type="hidden"  id="ts_id2" name="ts_id" value="0">
			<input type="hidden"  id="time_new2" name="time_new">
			<input type="hidden"  id="date_new2" name="date_new">{!! Form::button('<i class="fas fa-retweet"></i> Replace in appointement list', ['type' => 'submit', 'class' => 'btn btn-warning btn-sm']) !!}
			{{ Form::close() }}
			</div>
			<hr>
		</div>
		<div style="display : none" id="change_fs">
		{{ Form::open(array('url' => 'changeTS' , 'method' => 'get')) }}
		    <input type="hidden" value="" id="id_lead_input" name="id_lead_input">
			<div class="row">
				<div class="form-group col-sm-3">
					{!! Form::label('ts_id', 'FS:') !!}
					<select name="ts_id" id="" class="form-control form-select form-select-sm" required>
						<option value="" id="">*******</option>
						@foreach($users as $user)
						<option value="{!! $user->id !!}" id="OP-{!! $user->id !!}">{!! $user->name !!}</option>
						@endforeach
					</select>
				</div>
				<div class="form-group col-sm-4">
					{!! Form::label('ts_id', 'Date:') !!}
					<input type="date"  id="date_new" name="date_new" class="form-control form-control-sm" value="">
				</div>
				<div class="form-group col-sm-2">
					{!! Form::label('ts_id', 'Time:') !!}
					<input type="time"  id="time_new" name="time_new" class="form-control form-control-sm" value="" min="08:00" max="20:00">
				</div>
				<div class="form-group col-sm-3" style="text-align : rignt">
					<br>
					{!! Form::submit('Save', ['class' => 'btn btn-primary btn-sm btn-block']) !!}
					<a class="btn btn-danger btn-sm" href="#" onclick="$(exampleModal).modal('hide'); ">Cancel</a>
				</div>
			</div>
		{{ Form::close() }}
		</div>
      </div>
     
    </div>
  </div>
</div>

<div class="col-12 col-sm-12 col-md-12  g-0">
           <h3> Appointments {!! date('Y-m-d') !!}</h3>
</div>
<div class="col-12 col-sm-12 col-md-12  g-0">
{{ Form::open(array('url' => 'Appointments' , 'method' => 'get')) }} 
<div class="row" style=" padding: 0 10px;border: 1px solid #ccc;width : 98.8%;    background: #eee;  ">
	<div class="col-lg-2"><br>
		<input type="radio" id="html" name="trie" value="desc" @if($trie == "desc" )checked @endif>
		<label for="html"><i class="fas fa-sort-amount-down"></i> Time Desc</label>
	</div>
	<div class="col-lg-2"><br>
		<input type="radio" id="css" name="trie" value="asc" @if($trie == "asc" )checked @endif>
		<label for="css"><i class="fas fa-sort-amount-up-alt"></i> Time Asc</label>
	</div>
	<div class="col-lg-1">
	</div>
			<div class="col-lg-2">
				<label >Region</label>
				<select name="region" class="form-control form-select form-select-sm">
					<option value="all" @if($regionO == "all") selected @endif>All region</option>
					@foreach ( $regions as $region)
						<option value="{!! $region->city !!}" @if($regionO == $region->city) selected @endif >{!! $region->city !!}</option>
					@endforeach
				</select>
			</div>
			<div class="col-lg-2">
				<label >Status</label>
				<select name="rejected" class="form-control form-select form-select-sm">
					<option value="all" @if($rejectedO == "all") selected @endif>All</option>
					<option value="1" @if($rejectedO == "1") selected @endif>Rejected </option>
					<option value="0" @if($rejectedO == "0") selected @endif>Accepted</option>
				</select>
			</div>
			<div class="col-lg-2">
				<label >language</label>
				<select name="sprache" class="form-control form-select form-select-sm">
					<option value="all"  @if($spracheO == "all") selected @endif>All language</option>
					@foreach ( $langues as $langue)
						<option value="{!! $langue->sprache !!}" @if($spracheO == $langue->sprache) selected @endif >{!! $langue->sprache !!}</option>
					@endforeach
				</select><br>
			</div>
			<div class="col-lg-1"><br>
			{!! Form::button('<i class="fas fa-filter"></i>Filter', ['type' => 'submit', 'class' => 'btn btn-success btn-sm btn-block']) !!}
	</div>
	
</div>{{ Form::close() }}
		   
</div>
<div class="col-12 col-sm-12 col-md-12 col-lg-12 g-0"><br>
<div class="row">
	<div class="col-lg-9" style="font-size: 12px; text-align : center ;"> 
		 @if(session('msg')) <h5 style="color : #212529 ; background-color : #0080003b;">{!! session('msg') !!}</h5> <?php session(['msg' => '']); ?> @endif
	</div>
		 
<div class="col-lg-9" style="font-size: 12px;">     
	<div id='calendar'></div>
    <div style='clear:both'></div>
</div>
<div class="col-lg-3 box follow-scroll">
    <div id='external-events' >	
	<div id='wrap' style="overflow-y: scroll; float: center; padding: 0 10px;border: 1px solid #ccc;width : 90%;    background: #eee;    text-align: left;	height: 600px ;text-align:center">	  
		<h4> Appointments liste ({!! count($appointments_events) !!}) </h4>
	  <hr>
	  @foreach ( $appointments_events as $appointment )
      <div class='fc-event' style="margin: 10px 0; cursor: pointer; border: 1px solid #ccc;   font-size: 12px;  background: #f8deca;">{!! $appointment["id"] !!}-{!! $appointment['first_name'] !!} {!! $appointment['last_name'] !!}<br><B style="color: #5e0b0b">{!! date("d/M/Y h:i:s", strtotime($appointment["appointment_date"]." ".$appointment["time"])) !!}({!! $appointment["number_of_persons"] !!} persons)</B><br>@if($appointment["assigned"] == '0')<a href='acceptappointment/{!! $appointment["id"] !!}' style="color:red">Not assigned</a>@endif</div>
	  @endforeach
      
      
    </div>
    </div>
    </div>
</div>
      </div>
       

@elseif(Auth::guard('admins')->user()->hasRole('fs'))


<script>

    /* initialize the calendar
    -----------------------------------------------------------------*/

  document.addEventListener('DOMContentLoaded', function() {
  var calendarEl = document.getElementById('calendar');

  var calendar = new FullCalendar.Calendar(calendarEl, {


      editable: false, // enable draggable events
      droppable: true, // this allows things to be dropped onto the calendar
      aspectRatio: 1.8,
      scrollTime: '00:00', // undo default 6am scrollTime
	  
	  
		headerToolbar: {
		  left: 'prev,next today',
		  center: 'title',
		  right: 'timeGridWeek,timeGridDay,dayGridMonth'
		},
		views: {
			 dayGridMonth: {
			   eventMaxStack: 3
			 }
		 },
		initialView: 'timeGridWeek',
		
		eventMaxStack : 3,
		dayMaxEvents : 3,
		height: 600,
		  slotMinTime: "08:00:00",
		  slotMaxTime : "20:00:00",
		  slotDuration: '00:30:00',
		  slotLabelInterval: 30,
		  allDaySlot : false,
    events: [
	  @foreach ( $appointments as $appointmentAGG )
        { 
		id: '{!! $appointmentAGG["id"] !!}', 
		start: new Date('{!! date("d/M/Y h:i:s", strtotime($appointmentAGG["appointment_date"]." ".$appointmentAGG["time"])) !!}') , 		
		telephone: '{{ $appointmentAGG["telephone"] }}' , 
		birthdate: '{{ $appointmentAGG["birthdate"] }}' , 
		number_of_persons: '{{ $appointmentAGG["number_of_persons"] }}' , 
		nationality: '{{ $appointmentAGG["nationality"] }}' , 
		status_task: '{{ $appointmentAGG["status_task"] }}' , 
		eventColor: 'green',
		name: '{{ $appointmentAGG["first_name"] }} {{ $appointmentAGG["last_name"] }}', 
		title: '{{ $appointmentAGG["first_name"] }} {{ $appointmentAGG["last_name"] }}', 
		address: '', 
		},
        
	  @endforeach
	  
      ],
	  
	 eventClick: function(calEvent) {
		 
		 document.getElementById("start").innerHTML = moment(calEvent.event.start).format('Y-m-d HH:mm');
		 document.getElementById("name").innerHTML = calEvent.event.title;
		 document.getElementById("telephone").innerHTML = calEvent.event.extendedProps.telephone;
		 document.getElementById("birthdate").innerHTML = calEvent.event.extendedProps.birthdate;
		 document.getElementById("address").innerHTML = calEvent.event.extendedProps.address;
		 document.getElementById("number_of_persons").innerHTML = calEvent.event.extendedProps.number_of_persons;
		 document.getElementById("nationality").innerHTML = calEvent.event.extendedProps.nationality;
		 document.getElementById("status_task").innerHTML = calEvent.event.extendedProps.status_task;
		 document.getElementById("id").innerHTML = calEvent.event.id;
		 
		 $(exampleModal).modal('show'); 
				
	 },
	   
  });

  calendar.render();
});

</script>
<!-- Button trigger modal


 -->



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Appointement detail</h5>     
      </div>
      <div class="modal-body">
	  
	    <h5 style="text-align : center; "><B><span id='start' style=" color : #e57e2d"></span></B> (<span id='number_of_persons'></span> persons  )</h5>
		
	    <p><B>ID :</B><span id='id'></span></p>
	    <p><B>Name :</B><span id='name'></span></p>
	    <p><B>Telephone :</B><span id='telephone'></span></p>
	    <p><B>Birthdate :</B><span id='birthdate'></span></p>
	    <p><B>Nationality :</B><span id='nationality'></span></p>
	    <p><B>Status of task :</B><span id='status_task'></span></p>
		<hr>
		<p><B>address :</B><span id='address'></span></p>
      </div>
     
    </div>
  </div>
</div>




<div class="col-12 ">
           <h3> Appointments</h1><hr>
</div>
  <div class="row">
<div class="col-12" width="90%" style="font-size: 12px;">
    <div id='calendar'></div>

    
</div>
</div>
</div>
@else
	
You don't have permission // {!! Auth::guard('admins')->user()->hasRole('admin') !!} ---  {!! Auth::guard('admins')->user()->getRoleNames() !!}

@endif


@endsection

<style>

    body{
        overflow-x: hidden !important;
    }
</style>