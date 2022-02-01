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
            text-color: black;
        }


    </style>




    <link href='lib_cal/main.css' rel='stylesheet'/>
    <script src='lib_cal/main.js'></script>
    <script src='lib_cal/moment.min.js'></script>
    <script src='lib_cal/moment.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    @if(Auth::guard('admins')->user()->hasRole('admin') || Auth::guard('admins')->user()->hasRole('salesmanager'))

        <script>

            document.addEventListener('DOMContentLoaded', function () {

                /* initialize the external events
                -----------------------------------------------------------------*/

                var containerEl = document.getElementById('external-events');
                new FullCalendar.Draggable(containerEl, {
                    itemSelector: '.fc-event',
                    eventData: function (eventEl) {
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
                    slotMaxTime: "20:00:00",
                    slotDuration: '00:30:00',
                    slotLabelInterval: 30,
                    allDaySlot: false,
                    eventMaxStack: 3,
                    dayMaxEvents: 3,


                    resources: [
                            @foreach($users as $user)
                        {
                            id: '{!! $user->id !!}', title: '{!! $user->name !!}', eventColor: 'green'
                        },
                        @endforeach


                    ],
                    events: [
                            @foreach ( $appointments as $appointmentAGG )
                        {
                            id: '{!! $appointmentAGG["id"] !!}',
                            resourceId: '{!! $appointmentAGG["assign_to_id"] !!}',
                            title: '{{ $appointmentAGG["first_name"] }} {{ $appointmentAGG["last_name"] }}',
                            start: new Date('{!! date("d/M/Y H:i:s", strtotime($appointmentAGG["appointment_date"]." ".$appointmentAGG["time"])) !!}'),
                            telephone: '{{ $appointmentAGG["telephone"] }}',
                            birthdate: '{{ $appointmentAGG["birthdate"] }}',
                            number_of_persons: '{{ $appointmentAGG["number_of_persons"] }}',
                            nationality: '{{ $appointmentAGG["nationality"] }}',
                            status_task: '{{ $appointmentAGG["status_task"] }}',
                            eventColor: 'green',
                            name: '{{ $appointmentAGG["first_name"] }} {{ $appointmentAGG["last_name"] }}',
                            user_to: '{{ $appointmentAGG["assign_to_id"] }}',


                        },

                        @endforeach

                    ],
                    drop: function (arg) {
                        console.log('drop date: ' + arg.dateStr)

                        if (arg.resource) {
                            //console.log('drop resource: ' + arg.resource.id);

                            //console.log('eventReceive',arg.draggedEl.innerText.trim());


                            if (confirm('Are you sure you want to assign appointment of (' + arg.draggedEl.innerText.trim() + ') to <' + arg.resource.title + '>')) {
                                // Save it!
                                // console.log('Thing was saved to the database.');

                                $.ajax({
                                    url: "{{URL::route('Dropajax')}}" + "?nom_lead=" + arg.draggedEl.innerText.trim() + "&id_user=" + arg.resource.id + "&time=" + moment(arg.dateStr).format('HH:mm'),
                                    type: "GET",
                                    data: {"data": arg.draggedEl.innerText.trim()},
                                    success: function (data) {
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
                    eventReceive: function (arg) { // called when a proper external event is dropped
                        //console.log('eventReceive', arg.event);


                    },
                    eventDrop: function (arg) { // called when an event (already on the calendar) is moved
                        //console.log('eventDrop', arg.event);
                    },
                    eventClick: function (calEvent) {

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
                        document.getElementById("OP-" + calEvent.event.extendedProps.user_to).selected = true;

                        $(exampleModal).modal('show');

                    },
                });
                calendar.render();


            });

        </script>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog " role="document " style="max-width: 700px">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="col-md-4" style="text-align : left">
                            <h5 class="modal-title" id="exampleModalLabel">Appointement detail</h5>
                        </div>
                        <div class="col-md-6" style="text-align : center">
                            <h4 style="text-align : center; "><B><span id='start' style=" color : #e57e2d"></span></B> (<span
                                    id='number_of_persons'></span>persons)</h4>
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
                        <div class="row">
                            <div class="col-md-6" style="text-align : left; ">
                                <a href="#" onclick='document.getElementById("change_fs").style.display = "block" ;'
                                   class="btn btn-info btn-sm"><i class="far fa-edit"></i> Edit</a>
                            </div>
                            <div class="col-md-6" style="text-align : right ;">
                                {{ Form::open(array('url' => 'changeTS' , 'method' => 'get')) }}
                                <input type="hidden" id="id_lead_input2" name="id_lead_input">
                                <input type="hidden" id="ts_id2" name="ts_id" value="0">
                                <input type="hidden" id="time_new2" name="time_new">
                                <input type="hidden" id="date_new2"
                                       name="date_new">{!! Form::button('<i class="fas fa-retweet"></i> Replace in appointement list', ['type' => 'submit', 'class' => 'btn btn-warning btn-sm']) !!}
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
                                            <option value="{!! $user->id !!}"
                                                    id="OP-{!! $user->id !!}">{!! $user->name !!}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-sm-4">
                                    {!! Form::label('ts_id', 'Date:') !!}
                                    <input type="date" id="date_new" name="date_new"
                                           class="form-control form-control-sm" value="">
                                </div>
                                <div class="form-group col-sm-2">
                                    {!! Form::label('ts_id', 'Time:') !!}
                                    <input type="time" id="time_new" name="time_new"
                                           class="form-control form-control-sm" value="" min="08:00" max="20:00">
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
            <h3> Appointments {!! date('Y-m-d') !!}</h1>
                <hr>
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 g-0">
            <div class="row">
                <div class="col-lg-9" style="font-size: 12px; text-align : center ;">
                    @if(session('msg')) <h5
                        style="color : #212529 ; background-color : #0080003b;">{!! session('msg') !!}</h5> <?php session(['msg' => '']); ?> @endif
                </div>
                <div class="col-lg-9" style="font-size: 12px;">

                    <div id='calendar'></div>

                    <div style='clear:both'></div>
                </div>
                <div class="col-lg-3 box follow-scroll">
                    <div id='wrap'>
                        <div id='external-events'
                             style="overflow-y: scroll; float: center; padding: 0 10px;border: 1px solid #ccc;width : 90%;    background: #eee;    text-align: left;	height: 600px ;text-align:center">

                            <br><h4> Appointments liste ({!! count($appointments_events) !!}) </h4>
                            <hr>
                            @foreach ( $appointments_events as $appointment )
                                <div class='fc-event'
                                     style="margin: 10px 0; cursor: pointer; border: 1px solid #ccc;   font-size: 12px;  background: #f8deca;">{!! $appointment["id"] !!}
                                    -{!! $appointment['first_name'] !!} {!! $appointment['last_name'] !!}<br><B
                                        style="color: #5e0b0b">{!! date("d/M/Y h:i:s", strtotime($appointment["appointment_date"]." ".$appointment["time"])) !!}
                                        ({!! $appointment["number_of_persons"] !!}
                                        persons)</B><br>@if($appointment["assigned"] == '0')<a
                                        href="{{route('acceptappointment',Crypt::encrypt($appointment['id'] * 1244))}}"
                                        style="color:red">Pending</a>@endif</div>
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

            document.addEventListener('DOMContentLoaded', function () {
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

                    eventMaxStack: 3,
                    dayMaxEvents: 3,
                    height: 600,
                    slotMinTime: "08:00:00",
                    slotMaxTime: "20:00:00",
                    slotDuration: '00:30:00',
                    slotLabelInterval: 30,
                    allDaySlot: false,
                    events: [
                            @foreach ( $appointments as $appointmentAGG )
                        {
                            id: '{!! $appointmentAGG["id"] !!}',
                            start: new Date('{!! date("d/M/Y h:i:s", strtotime($appointmentAGG["appointment_date"]." ".$appointmentAGG["time"])) !!}'),
                            telephone: '{{ $appointmentAGG["telephone"] }}',
                            birthdate: '{{ $appointmentAGG["birthdate"] }}',
                            number_of_persons: '{{ $appointmentAGG["number_of_persons"] }}',
                            nationality: '{{ $appointmentAGG["nationality"] }}',
                            status_task: '{{ $appointmentAGG["status_task"] }}',
                            eventColor: 'green',
                            name: '{{ $appointmentAGG["first_name"] }} {{ $appointmentAGG["last_name"] }}',
                            title: '{{ $appointmentAGG["first_name"] }} {{ $appointmentAGG["last_name"] }}',
                            address: '',
                        },

                        @endforeach

                    ],

                    eventClick: function (calEvent) {

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
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Appointement detail</h5>
                    </div>
                    <div class="modal-body">

                        <h5 style="text-align : center; "><B><span id='start' style=" color : #e57e2d"></span></B>
                            (<span id='number_of_persons'></span> persons )</h5>

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
            <h3> Appointments</h1>
                <hr>
        </div>
        <div class="row">
            <div class="col-6" width="90%" style="font-size: 12px;">
                <div id='calendar'></div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-5 g-0 m-3">
                {{--        <div class="mapouter container justify-content-center">--}}
                {{--            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDFBE1cuoGyzaiyvog5Zi6-tBvRwyXHiz8"></script>--}}

                {{--            <div class="gmap_canvas d-flex justify-content-center">--}}

                {{--                <div id="map" style="z-index: 0 !important;width: 100% !important; height:70vh !important; border-radius: 15px !important;"></div>--}}

                {{--            </div>--}}

                {{--        </div>--}}
                <div style="width: 90vh">
                    <iframe width="90%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                            src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=1%20Grafton%20Street,%20Dublin,%20Ireland+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 g-0">
                    <div class="accordion accordion-flush mx-3 " id="accordionFlush5">
                        <div class="accordion-item my-1 py-2" style="background-color: #ececec;">
                            <div class="p-3">
                                <span class="col text-black fw-bold fs-5">
                                Show Persoal Appointment
                                 </span>
                                <hr class="text-black">
                            </div>
                            </h2>
                            <div id="flush-collapse1" class="accordion-collapse collapse show"
                                 aria-labelledby="flush-heading1" data-bs-parent="#accordionFlush1">

                                <div class="accordion-body p-0 mx-2 py-2 overflow-div1"
                                     style="background-color: #F7F7F7; border-bottom-left-radius: 15px; border-bottom-right-radius: 15px; height: 170px; overflow-y: scroll !important; overflow-x: hidden !important;">

                                        @foreach($personalApp as $perApp)
                                            <div class="py-2 my-2 mx-2"
                                                 style="background-color: #fff; border-radius: 15px; color: #000;">
                                                <div class="mx-3 ">
                                                    <div class="row">
                                                        <div class="col">
                                                    <span class="fw-bold fs-5">
                                                        {{$perApp->title}}
                                                    </span>
                                                        </div>
                                                        <div class="col-1 text-end">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="5"
                                                                 height="13"
                                                                 viewBox="0 0 5 13">
                                                                <g id="Group_528" data-name="Group 528"
                                                                   transform="translate(-0.239 0)">
                                                                    <circle id="Ellipse_6" data-name="Ellipse 6"
                                                                            cx="2.5"
                                                                            cy="2.5" r="2.5"
                                                                            transform="translate(0.239 0)"
                                                                            fill="#000"/>
                                                                    <circle id="Ellipse_7" data-name="Ellipse 7"
                                                                            cx="2.5"
                                                                            cy="2.5" r="2.5"
                                                                            transform="translate(0.239 8)"
                                                                            fill="#000"/>
                                                                </g>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <div class="">
                                                                <span>
                                                                    Address: {{$perApp->address}}
                                                                </span>
                                                    </div>
                                                    <div class="">
                                                                <span>
                                                                    Time: {{$perApp->time}}
                                                                </span>
                                                    </div>
                                                    <div class="">
                                                                <span>
                                                                    Comment: {{$perApp->comment}}
                                                                </span>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach

                                </div>

        </div>
        </div>

        </div>
        </div>
        </div>
    @else

        You don't have permission // {!! Auth::guard('admins')->user()->hasRole('admin') !!} ---  {!! Auth::guard('admins')->user()->getRoleNames() !!}

    @endif

@endsection

<style>

    body {
        overflow-x: hidden !important;
    }
</style>

<style>
    .mapouter {
        position: relative;
    }

    .gmap_canvas {
        overflow: hidden;
        background: none !important;
    }

    .scroll-2 {
        height: 380px !important;
    }

    .calendar-divider {
        background-color: #efefef !important;
        border-radius: 15px !important;
    }

    .fw-600 {
        font-weight: 600;
    }

    .notice-box {
        background-color: #FFEBE5;
        border-radius: 35px;
    }

    .person-box-1 {
        background-color: #fff;
        border-radius: 15px;
    }

    .input-group select {
        border-radius: 7px !important;
        box-shadow: none !important;
    }

    .calendar-box {
        background-color: #EFEFEF;
        border-radius: 35px;
    }

    .person-box {
        color: #fff;
        font-weight: 600;
        border-radius: 15px;
        background-color: #4EC590;
    }

    .title-div {
        color: #5F5F5F;
        font-weight: 600;
    }

    body {
        overflow-x: hidden !important;
    }
</style>
