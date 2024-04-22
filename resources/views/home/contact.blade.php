@extends('layouts.home.app')

@section('contents')
    <!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area contact-breadcrumb bg-img bg-overlay jarallax"
        style="background-image: url({{ asset('img/bg-img/18.jpg') }})">
        <div class="container mx-auto">
            <div class="flex">
                <div class="w-full">
                    <div class="breadcrumb-content text-center mt-100">
                        <h2 class="page-title">Contact Us</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb flex justify-center">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Contact Us
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->

    <!-- Google Maps & Contact Info Area Start -->
    <section class="google-maps-contact-info">
        <div class="container mx-auto">
            <div class="google-maps-contact-content">
                <div class="flex flex-wrap">
                    <!-- Single Contact Info -->
                    <div class="w-6/12 lg:w-3/12">
                        <div class="single-contact-info">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <h4>Phone</h4>
                            <p>(+212) 069-890-9638</p>
                        </div>
                    </div>
                    <!-- Single Contact Info -->
                    <div class="w-6/12 lg:w-3/12">
                        <div class="single-contact-info">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <h4>Address</h4>
                            <p>Zaouiet Sidi Abdelmalek, Ait Sedrate Sahl El Gharbia</p>
                        </div>
                    </div>
                    <!-- Single Contact Info -->
                    <div class="w-6/12 lg:w-3/12">
                        <div class="single-contact-info">
                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                            <h4>Open time</h4>
                            <p>10:00 am to 23:00 pm</p>
                        </div>
                    </div>
                    <!-- Single Contact Info -->
                    <div class="w-6/12 lg:w-3/12">
                        <div class="single-contact-info">
                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                            <h4>Email</h4>
                            <p>kasbahroseville @gmail.com</p>
                        </div>
                    </div>
                </div>

                <!-- Google Maps -->
                <div class="google-maps">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3413.100319872753!2d-6.206414925730181!3d31.190231663380963!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdbcbd42b979a2d5%3A0xecf8d41240603aac!2sKasbah%20Roseville!5e0!3m2!1sen!2sma!4v1710551711896!5m2!1sen!2sma"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>
    <!-- Google Maps & Contact Info Area End -->
@endsection
