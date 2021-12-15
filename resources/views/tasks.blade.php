@extends('template.navbar')
@section('content')
<div>
    Open tasks<br>
<h4 class="text-danger">{{$opencnt}}</h4>
@foreach($realopen as $task)
{{$task->name}}
{{$task->lname}}

Status:{{$task->status}}
<br>
@endforeach
</div>
<div>
    Pending<br>
    <h4 class="text-danger">{{$pendingcnt}}</h4>
@foreach($pending as $task)
{{$task->name}}
{{$task->lname}}
Status:{{$task->status}}
<br>
@endforeach
</div>

<br>
<div>
Costumer birthdays today:
<br>
@foreach($birthdays as $birth)
{{$birth['name']}} {{$birth['lname']}}<br>
{{$birth['birthday']}} ({{$birth['age']}} years old)
@endforeach
</div>
@endsection