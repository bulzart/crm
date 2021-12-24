@extends('template.navbar')
@section('content')
    <div class="row">
        <div class="col-12 col-md-6">
            <calendar></calendar>
        </div>
        <div class="col-md-6 col-12">
            <div class="mapouter mb-4">


                <div class="gmap_canvas">

                   <iframe style="width: 100%; height:80vh; border-radius: 5px;" id="gmap_canvas" src="https://maps.google.com/maps?q=kosovo&t=&z=7&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>

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
    </div>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD-HHCaYZ4N-VoJTrQObXqU4zRs73hMsmM"></script>

    <script type="text/javascript">
       var locations = [
                                            <?php 
                                                foreach($maps as $row3){ 
                                                    echo '["'.$row3['name'].'", '.$row3['lati'].', '.$row3['longi'].'],'; 
                                                } 
                                            ?>
                                        ];

        // ['Bondi Beach', -33.890542, 151.274856],
        // ['Coogee Beach', -33.923036, 151.259052],
        // ['Cronulla Beach', -34.028249, 151.157507],
        // ['Manly Beach', -33.80010128657071, 151.28747820854187],
        // ['Maroubra Beach', -33.950198, 151.259302]


        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 8,
            center: new google.maps.LatLng(42.6026,20.9030),
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

