@extends('template.navbar')
@section('content')
<div class="row justify-content-center">
    <div class="col-8" style="background: #7DBF9A; border-radius: 19px; padding: 5%;">
        @foreach($data as $task)
            <a href="{{route('leadfamilyperson',$task->id)}}" style="text-decoration: none; background: #ffebe5;">
                <div class="p-1 my-auto" style="background: #ABD5BD; border-radius: 19px; padding: 2% !important;">
                    <h5 class="m-1" style="color: #FFFFFF">
                        {{ucfirst($task->first_name)}} {{ucfirst($task->last_name)}} 
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 38 38" style="float: right">
                            <g id="Group_479" data-name="Group 479" transform="translate(-1357 -1101)">
                                <g id="Rectangle_10" data-name="Rectangle 10" transform="translate(1357 1101)" fill="none" stroke="#FFFFFF" stroke-width="2">
                                <rect width="38" height="38" rx="10" stroke="none"/>
                                <rect x="1" y="1" width="36" height="36" rx="9" fill="none"/>
                                </g>
                                <g id="Group_42" data-name="Group 42" transform="translate(1368.154 1112.154)">
                                <line id="Line_11" data-name="Line 11" y2="15.226" transform="translate(7.613)" fill="none" stroke="#FFFFFF" stroke-linecap="round" stroke-width="2"/>
                                <line id="Line_12" data-name="Line 12" x1="15.226" transform="translate(0 7.165)" fill="none" stroke="#FFFFFF" stroke-linecap="round" stroke-width="2"/>
                                </g>
                            </g>
                        </svg>
                    </h5>
                </div>
            </a>
            <br>
        @endforeach
    </div>
</div>
@endsection

