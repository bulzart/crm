@extends('template.navbar')
@section('content')
<div class="row justify-content-center">
<div class="col-md-4 col-12" style="background: #f7f7f7; border-radius: 25px;">
<span class="mt-2">Offene Aufgaben</span>
<span class="text-danger">{{$opencnt}}</span><br>

@foreach($realopen as $task)
<a style="underline: none"href="{{route('document',$task->id)}}"><div class="p-1" style="background: white; border-radius: 12px;">


<h5 class="m-1">{{ucfirst($task->name)}} {{ucfirst($task->lname)}}</h5>
<span class="m-1">Kommentar: {{$task->status}}</span>


</div></a>
<br>
@endforeach
</div>
<div class="col-md-4 col-12" style="background: #ffebe5; border-radius: 25px;">
    <span class="mt-2">Pending</span>
    <span class="text-danger">{{$pendingcnt}}</span>
@foreach($pending as $task)
<a href="{{route('document',$task->id)}}"><div class="p-1" style="background: white; border-radius: 12px;">
<h5 class="m-1">{{ucfirst($task->name)}} {{ucfirst($task->lname)}}</h5>

<span class="m-1">Kommentar: {{$task->status}}</span>
</div></a>
<br>
@endforeach
</div>

<br>
<div class="col-md-4 col-12" style="border-radius: 25px;">
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
@endsection