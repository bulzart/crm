@extends('template.navbar')
@section('content')
@if(Auth::guard('admins')->user()->hasRole('fs'))
<div class="row justify-content-center">
    <div class="col-md-4 col-12 mb-3">
        <div style="background: #f7f7f7; border-radius: 25px; padding: 5%;">
            <div class="row">
                <div class="col-12" style="cursor: pointer;" id="Offene_Aufgaben__" >
                    <span>Offene Aufgaben <span class="text-danger">{{$opencnt}}</span> <i id="Offene_Aufgaben_arrow__" style="color: #ababab; float: right;" class="bi bi-caret-down-fill"></i></span>
                </div>
            </div>
            <br>
            <div class="collapse" id="first_collapse">
                @foreach($realopen as $task)
                    <a  href="{{route('leadfamily',$task->id)}}">
                        <div class="p-1" style="background: white; border-radius: 12px;">
                            <h5 class="m-1">{{ucfirst($task->first_name)}} {{ucfirst($task->last_name)}}</h5>
                            <span class="m-1">Kommentar: {{$task->status_task}}</span>
                        </div>
                    </a>
                    <br>
                @endforeach
            </div>
        </div>  
    </div>
    <div class="col-md-4 col-12 mb-3">
        <div style="background: #ffebe5; border-radius: 25px; padding: 5%;">
            <div class="row">
                <div class="col-12" style="cursor: pointer;" id="Pending__" >
                    <span>Pending <span class="text-danger">{{$pendingcnt}}</span> <i id="Pending_arrow__" style="color: #ff9b7d; float: right;" class="bi bi-caret-down-fill"></i></span>
                </div>
            </div>
            <br>
            <div class="collapse" id="collapse__">
                @foreach($pending as $task)
                    <a href="{{route('leadfamily',$task->id)}}">
                        <div class="p-1" style="background: white; border-radius: 12px;">
                            <h5 class="m-1">{{ucfirst($task->first_name)}} {{ucfirst($task->last_name)}}</h5>
                            <span class="m-1">Kommentar: {{$task->status_task}}</span>
                        </div>
                    </a>
                    <br>
                @endforeach
            </div>
        </div>
    </div>
    <div class="col-md-4 col-12 mb-3">
        <div style="border-radius: 25px; padding: 5%;">
            <p class="text-center">Costumer birthdays today:</p>
            <br>
            @foreach($birthdays as $birth)
                <div class="p-1" style="background: #f7f7f7; border-radius: 12px;">
                    <i class="fas fa-birthday-cake" style="font-size: 33px;"></i>
                    <span class="h5">{{$birth['name']}} {{$birth['lname']}}</span>
                    <br>
                    {{$birth['birthday']}} ({{$birth['age']}} Jahre)
                </div>
                <br>
            @endforeach
        </div>
    </div>
</div>
@endif
@if(Auth::guard('admins')->user()->hasRole('backoffice'))
<div class="row justify-content-center">
    <div class="col-md-6 col-12 mb-3">
        <div style="background: #ffebe5; border-radius: 25px; padding: 5%;">
            <div class="row">
                <div class="col-12" style="cursor: pointer;" id="Pending__" >
                    <span>Answered <span class="text-danger">{{count($answered)}}</span> <i id="Pending_arrow__" style="color: #ff9b7d; float: right;" class="bi bi-caret-down-fill"></i></span>
                </div>
            </div>
            <br>
            <div class="collapse" id="collapse__">
                @foreach($answered as $task)
                    <a href="{{route('leadfamily',$task->id)}}">
                        <div class="p-1" style="background: white; border-radius: 12px;">
                            <h5 class="m-1">{{ucfirst($task->first_name)}} {{ucfirst($task->last_name)}}</h5>

                        </div>
                    </a>
                    <br>
                @endforeach
            </div>
        </div>
    </div>

</div>
@endif
@endsection



