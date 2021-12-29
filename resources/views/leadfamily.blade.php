@extends('template.navbar')
@section('content')
<div class="row justify-content-center">
    <div class="col-6" style="background: #ffebe5; border-radius: 25px; padding: 5%;">
        @foreach($data as $task)
            <a href="{{route('leadfamilyperson',$task->id)}}" style="text-decoration: none; background: #ffebe5; text-align: center;">
                <div class="p-1" style="background: #f7f7f7; border-radius: 12px;">
                    <h5 class="m-1" style="color: #525353">{{ucfirst($task->first_name)}} {{ucfirst($task->last_name)}}</h5>
                </div>
            </a>
            <br>
        @endforeach
    </div>
</div>
@endsection