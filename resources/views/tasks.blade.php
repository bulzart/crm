@extends('template.navbar')
@section('content')
<div>
<h5 class="h5 mt-2">Open tasks<h5>
<h4 class="text-danger">{{$opencnt}}</h4>
@foreach($realopen as $task)
{{$task->name}}
{{$task->lname}}

Status:{{$task->status}}
<br>
@endforeach
</div>
<div>
    <h5 class="h5 mt-2">Pending<h5>
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
{{$birth['name']}} {{$birth['lname']}}
{{$birth['birthday']}} ({{$birth['age']}} years old)
<br>
@endforeach
</div>
@endsection