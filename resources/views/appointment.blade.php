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
      scrollTime: '00:00', // undo default 6am scrollTime
      headerToolbar: {
        left: 'prev,next today',
        center: 'title',
        right: 'resourceTimeGridDay,dayGridMonth'
      },
	  views: {
			 dayGridMonth: {
			   eventMaxStack: 3
			 }
		 },
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
	  @foreach ( $appointments as $appointmentAGG)
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
		 
		 document.getElementById("start").innerHTML = moment(calEvent.event.start).format('Y-m-d HH:mm');
		 document.getElementById("name").innerHTML = calEvent.event.title;
		 document.getElementById("telephone").innerHTML = calEvent.event.extendedProps.telephone;
		 document.getElementById("birthdate").innerHTML = calEvent.event.extendedProps.birthdate;
		 //document.getElementById("address").innerHTML = calEvent.event.extendedProps.address;
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
		<!--<p><B>address :</B><span id='address'></span></p> -->
		<div class="" style="text-align : right; ">
		<a href="" > Change FS </a>
		</div>
      </div>
     
    </div>
  </div>
</div>

<div class="col-12 col-sm-12 col-md-12  g-0">
           <h3> Appointments {!! date('Y-m-d') !!}</h1><hr>
</div>
 <div class="col-12 col-sm-12 col-md-12 col-lg-12 g-0">
         <div class="row">
<div class="col-lg-9" style="font-size: 12px;"> 
    <div id='calendar'></div>

    <div style='clear:both'></div>
</div>
	<div class="col-lg-3 box follow-scroll">
      <div id='wrap'>
	  <div id='external-events' style="overflow-y: scroll; float: center; padding: 0 10px;border: 1px solid #ccc;width : 90%;    background: #eee;    text-align: left;	height: 600px ;text-align:center">
	  
      <br><h4> Appointments liste ({!! count($appointments_events) !!}) </h4><hr>
	  @foreach ( $appointments_events as $appointment )
      <div class='fc-event' style="margin: 10px 0; cursor: pointer; border: 1px solid #ccc;   font-size: 12px;  background: #f8deca;">{!! $appointment["id"] !!}-{!! $appointment['first_name'] !!} {!! $appointment['last_name'] !!}<br><B style="color: #5e0b0b">{!! date("d/M/Y H:i:s", strtotime($appointment["appointment_date"]." ".$appointment["time"])) !!}({!! $appointment["number_of_persons"] !!} persons)</B><br>@if($appointment["assigned"] == '0')<a href='acceptappointment/{!! $appointment["id"] !!}' style="color:red">Not assigned</a>@endif</div>
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
		start: new Date('{!! date("d/M/Y H:i:s", strtotime($appointmentAGG["appointment_date"]." ".$appointmentAGG["time"])) !!}') , 		
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
{{trim(preg_replace("/\s\s+/", " ", $appointmentAGG["address"])) }} {{trim(preg_replace("/\s\s+/", " ", $appointmentAGG["city"])) }}, {{ $appointmentAGG["postal_code"] }}


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