@extends('template.navbar')
@section('content')
    <!doctype html>

<div class="row">
    <div class="col-12 col-sm-12 col-md-12 col-lg-6 g-0">
        <calendar></calendar>
    </div>
    <div class="col-md-6 col-12">

    </div>
</div>
</div>
<div class="mapouter mb-4">
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDFBE1cuoGyzaiyvog5Zi6-tBvRwyXHiz8"></script>

    <div class="gmap_canvas">

        <div id="map"
             style="position:absolute; margin-left: 62%; margin-top: -360px; width: 75vh; height:65vh; border-radius: 10px;"></div>

    </div>
</div>
<script type="text/javascript">
    var locations = [
        <?php
        foreach ($maps as $row3) {
            echo '["' . $row3['name'] . '", ' . $row3['latitude'] . ', ' . $row3['longitude'] . '],';
        }
        ?>

    ];

    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 4,
        center: new google.maps.LatLng(42.6026, 20.9030),
        mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var infowindow = new google.maps.InfoWindow();

    var marker, i;

    for (i = 0; i < locations.length; i++) {
        marker = new google.maps.Marker({
            position: new google.maps.LatLng(locations[i][1], locations[i][2]),
            map: map
        });

        google.maps.event.addListener(marker, 'click', (function (marker, i) {
            return function () {
                infowindow.setContent(locations[i][0]);
                infowindow.open(map, marker);
            }
        })(marker, i));
    }
</script>

@endsection

<style>
    .fw-600 {
        font-weight: 600;
    }

    .notice-box {
        background-color: #FFEBE5;
        border-radius: 35px;
    }

    .person-box-1 {
        background-color: #fff;
        border-radius: 15px;
    }

    .input-group select {
        border-radius: 7px !important;
        box-shadow: none !important;
    }

    .calendar-box {
        background-color: #EFEFEF;
        border-radius: 35px;
    }

    .person-box {
        color: #fff;
        font-weight: 600;
        border-radius: 15px;
        background-color: #4EC590;
    }

    v
    .title-div {
        color: #5F5F5F;
        font-weight: 600;
    }

    .mapouter {
        position: relative;
        text-align: right;
        width: 100%;
    }

    .gmap_canvas {
        overflow: hidden;
        background: none !important;
        height: auto;
        width: 100%;
        border-radius: 21px !important;
        /* box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px; */
    }
</style>
