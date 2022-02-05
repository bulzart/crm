@extends('template.navbar')
@section('content')
<div class="row">
        <div class="col-3 pe-0 openLeadsFirstDiv">

            <div class="">
                <div class="whiteee p-3">
                    <div class="namme mb-2">
                        <span class="fs-4 fw-bold">Markus Jurgen (19.1.1986)</span>
                    </div>
                    <div class="adresse row">
                        <div class="col-4 pe-0">
                            <span class="">Adresse:</span>
                        </div>
                        <div class="col ps-0">
                            <span class="grayyy1 fw-500 ">Raumweg 23, 3700 Thun</span>
                        </div>
                    </div>
                    <div class="haushalt row">
                        <div class="col-4 pe-0">
                            <span class="">Haushalt:</span>
                        </div>
                        <div class="col ps-0">
                            <span class="grayyy1 fw-500">4 Personen</span>
                        </div>
                    </div>
                    <div class="grund row">
                        <div class="col-4 pe-0">
                            <span class="">Grund:</span>
                        </div>
                        <div class="col ps-0">
                            <span class="grayyy1 fw-500">Krankenkasse</span>
                        </div>
                    </div>
                    <div class="kampagne row">
                        <div class="col-4 pe-0">
                            <span class="">Kampagne:</span>
                        </div>
                        <div class="col ps-0">
                            <span class="grayyy1 fw-500">Facebook</span>
                        </div>
                    </div>
                </div>
                <div class="grayyy" style="cursor: pointer;">
                    <div class="lead-offnen text-center py-2">
                        <span class="fs-4 fw-bold">Lead öffnen</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col px-0 receivedCol">
            <div class="py-3 h-100">
                <div class="text-center">
                    <span class="openLeadsSpanText">Received/New</span>
                </div>
                <div class="my-auto h-75">
                    <div class="greyBorderDiv mt-2 my-auto">
                        <div class="receivedDiv my-auto h-100 bg-dark" style="      vertical-align: middle;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            color: #fff;
            font-weight: bold;
            border-top-right-radius: 59px;
            border-bottom-right-radius: 59px;
            padding-right: 2%;">
Received
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col px-0 assignedToCol">
            <div class="py-3 h-100" >
                <div class="text-center">
                    <span class="openLeadsSpanText">Assigned to</span>
                </div>
                <div class="my-auto h-75">
                    <div class="orangeBorderDiv  mt-2 my-auto">
                        <div class="assignedToDiv">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col px-0 lostCol">
            <div class="py-3 h-100">
                <div class="text-center">
                    <span class="openLeadsSpanText">Lost</span>
                </div>
                <div class="my-auto h-75">
                    <div class="redBorderDiv mt-2 my-auto">
                        <div class="lostDiv">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col px-0 wonCol">
            <div class="py-3 h-100">
                <div class="text-center">
                    <span class="openLeadsSpanText">Won</span>
                </div>
                <div class="my-auto h-75">
                    <div class="greenBorderDiv mt-2 my-auto">
                        <div class="wonDiv">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection