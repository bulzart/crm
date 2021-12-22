
<html>
@extends('template.navbar')
@section('content')
    <div class="row">
        <div class="col-12 col-md-6">
<calendar></calendar>
    </div>
    </div>
    <div class="mapouter mb-4">
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDFBE1cuoGyzaiyvog5Zi6-tBvRwyXHiz8"></script>

        <div class="gmap_canvas">
            <div id="map" style="width: 100%; height:90vh; border-radius: 5px;"></div>

            <!-- <iframe style="width: 100%; height:80vh; border-radius: 5px;" id="gmap_canvas" src="https://maps.google.com/maps?q=switzerland&t=&z=7&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe> -->
            <style>
                .mapouter {
                    position: relative;
                }
            </style>
            <style>
                .gmap_canvas {
                    overflow: hidden;
                    background: none !important;
                }
            </style>
        </div>
    </div>



    <script type="text/javascript">
        var locations = [
            <?php
            foreach($maps as $row3){
                echo '["'.$row3['name'].'", '.$row3['lati'].', '.$row3['longi'].'],';
            }

            ?>

        ];

        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 4,
            center: new google.maps.LatLng(53.0000, 9.0000),
            mapTypeId: google.maps.MapTypeId.ROADMAP
        });

        var infowindow = new google.maps.InfoWindow();

        var marker, i;

        for (i = 0; i < locations.length; i++) {
            marker = new google.maps.Marker({
                position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                map: map
            });

            google.maps.event.addListener(marker, 'click', (function(marker, i) {
                return function() {
                    infowindow.setContent(locations[i][0]);
                    infowindow.open(map, marker);
                }
            })(marker, i));
        }
    </script>
@endsection
</html>

