@extends('layouts.index')

@section('content')
    <section class="content">

        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-aqua"><i class="fas fa-exclamation-circle"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">INTERVENCIJE</span>
                        <span class="info-box-number">{{$interventions}}</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-red"><i class="fas fa-users"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">OPERATIVNI ČLANOVI</span>
                        <span class="info-box-number">{{$members}}</span>
                    </div>
                </div>
            </div>
            <div class="clearfix visible-sm-block"></div>

            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-green"><i class="far fa-newspaper"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">OBAVIJESTI</span>
                        <span class="info-box-number">{{$notifications}}</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-yellow"><i class="fas fa-toolbox"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">ADMINISTRATORI</span>
                        <span class="info-box-number">{{$users}}</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Podrška</h3>
            </div>
            <div class="box-body">
                Ako primjetite bilo kakvu pogrešku, molimo Vas da ju prijavite u najkraćem mogućem roku.<br>
                E-Mail adresa: <a href="mailto:luka.petek@ti-hosting.eu">luka.petek@ti-hosting.eu</a>
            </div>

            <div id="map" style="width: 100%; height: 500px;"></div>





        </div>
    </section>




    </section>
    </div>
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Verzija</b> 1.0.2 BETA
        </div>
        Developed by <a href="https://ti-hosting.eu">Luka Petek</a>;
        Design by <a href="https://adminlte.io/">AdminLTE</a>
    </footer>
    <!-- jQuery 3 -->

    <script src="<?php echo asset('bower_components/jquery/dist/jquery.min.js') ?>"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="<?php echo asset('bower_components/jquery-ui/jquery-ui.min.js') ?>"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.7 -->
    <script src="<?php echo asset('bower_components/bootstrap/dist/js/bootstrap.min.js') ?>"></script>
    <!-- Morris.js charts -->
    <script src="<?php echo asset('bower_components/raphael/raphael.min.js') ?>"></script>
    <!-- Sparkline -->
    <script src="<?php echo asset('bower_components/jquery-sparkline/dist/jquery.sparkline.min.js') ?>"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?php echo asset('bower_components/jquery-knob/dist/jquery.knob.min.js') ?>"></script>
    <!-- daterangepicker -->
    <script src="<?php echo asset('bower_components/moment/min/moment.min.js') ?>"></script>
    <script src="<?php echo asset('bower_components/bootstrap-daterangepicker/daterangepicker.js') ?>"></script>
    <!-- datepicker -->
    <script src="<?php echo asset('bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') ?>"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="<?php echo asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') ?>"></script>
    <!-- Slimscroll -->
    <script src="<?php echo asset('bower_components/jquery-slimscroll/jquery.slimscroll.min.js') ?>"></script>
    <!-- FastClick -->
    <script src="<?php echo asset('bower_components/fastclick/lib/fastclick.js') ?>"></script>
    <script src="<?php echo asset('bower_components/datatables.net/js/jquery.dataTables.min.js') ?>"></script>
    <script src="<?php echo asset('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') ?>"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo asset('dist/js/adminlte.min.js') ?>"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo asset('dist/js/demo.js') ?>"></script>
    <script>
        $(function () {
            $('#example1').DataTable()
            $('#example2').DataTable({
                'paging': true,
                'lengthChange': false,
                'searching': false,
                'ordering': false,
                'info': true,
                'autoWidth': true
            })
        })
    </script>
    <script>

        var locations = [
                @foreach ($interventions_map as $map)
            ['{{$map->address}}',{{$map->lat}}, {{$map->lng}}, 2],
                @endforeach
            ['Maroubra Beach', -33.950198, 151.259302, 1]
        ];


        function initMap() {
            var myLatLng = {lat: 46.381272, lng: 16.3675518};

            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 12,
                center: myLatLng
            });

            var count=0;


            for (count = 0; count < locations.length; count++) {

                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(locations[count][1], locations[count][2]),
                    map: map
                });

                marker.info = new google.maps.InfoWindow({
                    content: locations [count][0]
                });


                google.maps.event.addListener(marker, 'click', function() {
                    // this = marker
                    var marker_map = this.getMap();
                    this.info.open(marker_map, this);
                    // Note: If you call open() without passing a marker, the InfoWindow will use the position specified upon construction through the InfoWindowOptions object literal.
                });
            }
        }
    </script>
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAeyaT49zetr4idfy5dFMEOIU88rFcdvVA&callback=initMap">
    </script>




@endsection

