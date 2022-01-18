@extends('template.navbar')
@section('content')
    <head>
        <title>
            Tasks
        </title>
    </head>
@if(Auth::guard('admins')->user()->hasRole('fs') || Auth::guard('admins')->user()->hasRole('admin'))
<div class="row justify-content-center">
    <div class="col-md-4 col-12 mb-3">
        <div style="background: #f7f7f7; border-radius: 25px; padding: 5%;">
            <div class="row" >
                <div class="col-12" style="cursor: pointer;" id="Offene_Aufgaben__" >
                    <span>Offene Aufgaben <span class="text-danger">{{$opencnt}}</span> <i id="Offene_Aufgaben_arrow__" style="color: #ababab; float: right;" class="bi bi-caret-down-fill"></i></span>
                </div>
            </div>
            <br>
            <div class="collapse" id="first_collapse">

                <span>Open pendencies</span>
<div style="height: 350px; overflow: scroll; overflow-x: hidden;">
                @foreach($tasks as $task)
                    <a  href="{{route('leadfamily',$task->id)}}" style="text-decoration:none;">
                        <div class="p-1" style="background: white; border-radius: 12px;">
                            <h5 class="m-1">{{ucfirst($task->first_name)}} {{ucfirst($task->last_name)}}</h5>
                        </div>
                    </a>
                    <br>
                @endforeach
</div>
<div class="mt-4">
@if($tasks->count() > 1)
    <div class="d-flex justify-content-center">
    <div class="d-flex justify-content-center"><nav role="navigation" aria-label="Pagination Navigation" class="flex items-center justify-between">
        @if($tasks->currentPage() > 1)
        <span> <a href="{{route('tasks',['page' => $tasks->currentPage() -1 ])}}" class="relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150"></span>
            @endif
                    « Previous
                </span> <a href="{{route('tasks',['page' => $tasks->currentPage() +1])}}" class="relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                    Next »
                </a></div> <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between"><div><p class="text-sm text-gray-700 leading-5">
                
                </p></div> <div></div></div></nav></div>
                @endif
</div>
            </div>
        </div>
    </div>
    <div class="col-md-4 col-12 mb-3">
        <div style="background: #ffebe5; border-radius: 25px; padding: 5%;">
            <div class="row">
                <div class="col-12" style="cursor: pointer;" id="Pending__" >
                    <span>Pending <span class="text-danger">{{count($pending)}}</span> <i id="Pending_arrow__" style="color: #ff9b7d; float: right;" class="bi bi-caret-down-fill"></i></span>
                </div>
            </div>
            <br>
            <div class="collapse" id="collapse__">
            <div style="height: 350px; overflow: scroll; overflow-x: hidden;">
                @foreach($pending as $task)
                    <a href="{{route('leadfamilyperson',$task->id)}}" style="text-decoration:none;">
                        <div class="p-1" style="background: white; border-radius: 12px;">
                            <h5 class="m-1">{{ucfirst($task->first_name)}} {{ucfirst($task->last_name)}}</h5>
                        </div>
                    </a>
                    <br>
                @endforeach
                
</div>
{{$pending->links()}}
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
@if(Auth::guard('admins')->user()->hasRole('backoffice') || Auth::guard('admins')->user()->hasRole('admin'))
<div class="row justify-content-center">
    <div class="col-md-6 col-12 mb-3">
        <div style="background: #ffebe5; border-radius: 25px; padding: 5%;">
            <div class="row">
                <div class="col-12" style="cursor: pointer;" >
                    <form action="{{route('tasks')}}" method="post">
                        @csrf
                        <input type="text" name="searchpend" placeholder="Search by name">
                        <input type="submit" class="btn btn-danger" value="Search">
                    </form>
                    <span>Answered <span class="text-danger">{{count($answered)}}</span></span>
                </div>

            </div>
            <br>
            <div id="collapse__">
            <div style="height: 350px; overflow: scroll; overflow-x: hidden;">
                @foreach($answered as $task)
                    <a href="{{route('leadfamilyperson',$task->id)}}" style="text-decoration:none;">
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
    <div class="col-md-6 col-12 mb-3">
        <div style="background: #f8f8f8;border-radius: 25px; padding: 5%;">
            <div class="row">
                <div class="col-12" style="cursor: pointer;" id="Offene_Aufgaben__1" >
                    <form action="{{route('tasks')}}" method="post">
                        @csrf
                        <input type="text" name="searchopen" placeholder="Search by name">
                        <input type="submit" class="btn btn-danger" value="Search">
                    </form>
                    <span>Open <span class="text-danger">{{count($opened)}}</span></span>
                </div>

            </div>
            <br>
            <div id="first_collapse">
            <div style="height: 350px; overflow: scroll; overflow-x: hidden;">
                @foreach($opened as $task)
                    <a href="{{route('leadfamilyperson',$task->id)}}" style="text-decoration:none;">
                        <div class="p-1" style="background: red; border-radius: 12px;">
                            <h5 class="m-1">{{ucfirst($task->first_name)}} {{ucfirst($task->last_name)}}</h5>

                        </div>
                    </a>
                    <br>
                @endforeach
</div>
            </div>
        </div>
    </div>

</div>
@endif
@endsection



