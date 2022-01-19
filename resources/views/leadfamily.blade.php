@extends('template.navbar')
@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<div class="row justify-content-center">
    <div class="col-8" style="background: #7DBF9A; border-radius: 19px; padding: 5%;">
        @foreach($data as $task)
                <div class="accordion accordion-flush mx-3" id="accordionFlushExample">
                    @if($task->status == 'Open')
                    <div class="accordion-item my-1 bg-danger">
                        @elseif($task->status == 'Submited')
                        <div class="accordion-item my-1 bg-warning">
                            @else
                            <div class="accordion-item my-1 bg-success">
                            @endif
                        <h2 class="accordion-header" id="flush-headingFivve">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseFivve" aria-expanded="false" aria-controls="flush-collapseFivve">
                                {{ucfirst($task->first_name)}} {{ucfirst($task->last_name)}}
                            </button>
                        </h2>
                        <div id="flush-collapseFivve" class="accordion-collapse collapse show" aria-labelledby="flush-headingFivve"
                             data-bs-parent="#accordionFlushExample">
                            @php
                                $leadss = $task->id * 1244;
                                $taskId = \Illuminate\Support\Facades\Crypt::encrypt($leadss);
                            @endphp
                            <form method="POST" action="{{route('updateleadfamilyperson',$taskId)}}">
                                @csrf
                            <div class="accordion-body p-0 mx-2 py-2">

                                <div class="row g-3 align-items-center m-1">

                                    <div class="col-4">
                                        <label for="inputTxt4" class="col-form-label">Vorname:</label>
                                    </div>
                                    <div class="col">
                                        <input type="text" id="inputTxt4" class="form-control"
                                               aria-describedby="passwordHelpInline" name="familyfirstname" value="{{$task->first_name}}">
                                    </div>
                                </div>
                                <div class="row g-3 align-items-center m-1">
                                    <div class="col-4">
                                        <label for="inputTxt5" class="col-form-label">Nachname:</label>
                                    </div>
                                    <div class="col">
                                        <input type="text" id="inputTxt5" class="form-control"
                                               aria-describedby="passwordHelpInline" name="familylastname" value="{{$task->last_name}}">
                                    </div>
                                </div>
                                <div class="text-end">
                                    <input type="submit" value="Edit" class="btn-info">
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            <a href="{{route('leadfamilyperson',$task->id)}}" class="btn btn-success">+</a>

            <br>
        @endforeach
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
@endsection

{{--<div class="p-1 my-auto" style="background: #ABD5BD; border-radius: 19px; padding: 2% !important;">--}}
{{--    <h5 class="m-1" style="color: #FFFFFF">--}}
{{--        {{ucfirst($task->first_name)}} {{ucfirst($task->last_name)}}--}}
{{--        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 38 38" style="float: right">--}}
{{--            <g id="Group_479" data-name="Group 479" transform="translate(-1357 -1101)">--}}
{{--                <g id="Rectangle_10" data-name="Rectangle 10" transform="translate(1357 1101)" fill="none" stroke="#FFFFFF" stroke-width="2">--}}
{{--                    <rect width="38" height="38" rx="10" stroke="none"/>--}}
{{--                    <rect x="1" y="1" width="36" height="36" rx="9" fill="none"/>--}}
{{--                </g>--}}
{{--                <g id="Group_42" data-name="Group 42" transform="translate(1368.154 1112.154)">--}}
{{--                    <line id="Line_11" data-name="Line 11" y2="15.226" transform="translate(7.613)" fill="none" stroke="#FFFFFF" stroke-linecap="round" stroke-width="2"/>--}}
{{--                    <line id="Line_12" data-name="Line 12" x1="15.226" transform="translate(0 7.165)" fill="none" stroke="#FFFFFF" stroke-linecap="round" stroke-width="2"/>--}}
{{--                </g>--}}
{{--            </g>--}}
{{--        </svg>--}}
{{--    </h5>--}}
{{--</div>--}}
