@extends('template.navbar')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-4 col-12">
        <div style="background: #f7f7f7; border-radius: 25px; padding: 5%;">
            <span class="mt-2">Offene Aufgaben</span>
            <span class="text-danger">{{$opencnt}}</span>
            <br><br>
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
    <div class="col-md-4 col-12">
        <div style="background: #ffebe5; border-radius: 25px; padding: 5%;">
            <span class="mt-2">Pending</span>
            <span class="text-danger">{{$pendingcnt}}</span>
            <br><br>
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
    <div class="col-md-4 col-12">
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
@endsection