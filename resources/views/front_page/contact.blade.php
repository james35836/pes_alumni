@extends('layouts.frontend')
@section('content')
<div id="contact-page-contain">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12">
                <div class="map">
                    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.0151545495983!2d126.15235231426917!3d7.352193915015465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32fbf13ffffff1ef%3A0x7155881fb6736887!2sPaloc+Elementary+School!5e0!3m2!1sfil!2sph!4v1542199065210" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-offset-2 col-md-8">
                <div class="contact-title">
                    <h2 class="tf">Contact</h2>
                    <p class="text-center">Maecenas ac augue at erat hendrerit dictum. Praesent porta, purus eget sagittis imperdiet, nulla mi ullamcorper metus, id hendrerit metus diam vitae est </p>
                </div>
            </div>
        </div>
        <div class="contact-submit">
            
            <form class="form-submit" action="send_email" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="input-group">
                            <input name="name_of_sender" type="text" class="form-control" placeholder="Full Name *" required>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="input-group">
                            <input name ="email_message" type="email" class="form-control" placeholder="E-mail *" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="input-group">
                            <textarea class="form-control" name="email_messages" id="textarea_message" placeholder="Message *"></textarea>
                        </div>
                        <div class="col-md-12 text-center">
                            <button class="btn btn-primary" type="submit"><i class="fa fa-envelope-o"></i> Send </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="address">
                    <h2 class="tf"><i class="fa fa-map-marker"></i></h2>
                    <div class="address-info">Warehouse & Offices 12345 Street name, California, USA </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="complaint">
                    <h2 class="tf"><i class="fa fa-mobile"></i></h2>
                    <div class="call-info">+91 987-654-321<br>
                        <span>+0987-654-321</span> </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feedback">
                        <h2 class="tf"><i class="fa fa-envelope"></i></h2>
                        <div class="email-info"> <a href="#">support@lionode.com</a><br>
                        <span><a href="#">info@lionode.com</a></span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <link href="{{ asset('css/contact.css') }}" rel="stylesheet">
    <section id="what-we-do">
        <div class="container">
            <h3 class="h3">Contact Us</h3>
            <div class="row mt-5">
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <div class="card">
                        <div style="min-height: 96px;" class="card-block block-1">
                            <h3 class="card-title">Office Location</h3>
                            <p class="card-text">Paloc Elementary School, Paloc Maragusan Comval.</p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <div class="card">
                        <div style="min-height: 96px;" class="card-block block-2">
                            <h3 class="card-title">Email Us</h3>
                            <p class="card-text">alumni.pes@gmail.com / alumni.pes@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <div class="card">
                        <div style="min-height: 96px;" class="card-block block-3">
                            <h3 class="card-title">Call Us</h3>
                            <p class="card-text">Tel: (02)-88025412/ Phone: 09367932821</p>
                            
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="container">
            
            <div class="card">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.0151545495983!2d126.15235231426917!3d7.352193915015465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32fbf13ffffff1ef%3A0x7155881fb6736887!2sPaloc+Elementary+School!5e0!3m2!1sfil!2sph!4v1542199065210" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            
        </div>
    </section> -->
    @endsection