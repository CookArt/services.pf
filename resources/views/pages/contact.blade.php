@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="well well-sm">
                    <form class="form-horizontal" method="post">
                        <fieldset>
                            <legend class="text-center header">Me Contacter</legend>
                            <div class="form-group">
                                <div class="col-md-10 col-md-offset-1">
                                    <input id="prenom" name="name" type="text" placeholder="Prénom" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-10 col-md-offset-1">
                                    <input id="nom" name="name" type="text" placeholder="Nom" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-10 col-md-offset-1">
                                    <input id="email" name="email" type="text" placeholder="Email" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-10 col-md-offset-1">
                                    <input id="phone" name="phone" type="text" placeholder="Téléphone" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-10 col-md-offset-1">
                                    <textarea class="form-control" id="message" name="message" placeholder="Message..." rows="7"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary btn-lg">Envoyer</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>

            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-body text-center">
                        <img class="pull-right" src="sio.png">
                        <h4>IHORAI Ariirau</h4><br/>
                        Lycée Aorai<br/>
                        Pirae<br/>
                        ihoraiariirau25@gmail.com<br/>
                        <hr/>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="http://maps.google.com/maps/api/js?sensor=false"></script>

    <script type="text/javascript">
        jQuery(function ($) {
            function init_map1() {
                var myLocation = new google.maps.LatLng(38.885516, -77.09327200000001);
                var mapOptions = {
                    center: myLocation,
                    zoom: 16
                };
                var marker = new google.maps.Marker({
                    position: myLocation,
                    title: "Property Location"
                });
                var map = new google.maps.Map(document.getElementById("map1"),
                        mapOptions);
                marker.setMap(map);
            }
            init_map1();
        });
    </script>

    <style>
        .map {
            min-width: 300px;
            min-height: 300px;
            width: 100%;
            height: 100%;
        }

        .header {
            background-color: #F5F5F5;
            color: #36A0FF;
            height: 70px;
            font-size: 27px;
            padding: 10px;
        }
    </style>
@stop
