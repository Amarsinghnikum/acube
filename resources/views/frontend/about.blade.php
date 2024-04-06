@extends('layouts.front')

@section('title', 'About Us')

@section('content')
<div class="container mt-5">
    <div class="about-section">
        <h1>About AcubeAvenue Technologies</h1>
        <p class="mt-3">We provide a seamless platform for suppliers to connect with government buyers, facilitating
            efficient
            procurement processes. Our portal offers a wide range of services, including online bidding, order
            management, and secure payment options. Join us in supporting the digital transformation of government
            procurement.</p>
        <p>In addition to our procurement services, we also offer cab services to provide convenient transportation
            solutions for our clients. Our cab services are reliable, safe, and tailored to meet your transportation
            needs.</p>
    </div>
</div>

<div class="fixed-footer">
    <footer class="footer-distributed" style="background-color: #272626;color: #fff;">
        <div class="container">
            <div class="row">
                <div class="col-md-4" style="margin: 10px 0px 10px 0px;">
                    <div class="footer-left">
                        <h3 class="header_title">AcubeAvenue <span class="header_title"> Technologies</span></h3>
                    </div>
                    <p class="footer-company-name">AcubeAvenue Technologies © 2023</p>
                    <div class="footer-center">
                        <p><a href="{{route('index')}}" class="link-1">Home</a></p>
                        <p><a href="{{route('about')}}">About</a></p>
                        <p><a href="{{route('contact-us')}}">Contact Us</a></p>
                    </div>
                </div>

                <div class="col-md-4" style="margin: 10px 0px 10px 0px;">
                    <div class="footer-right">
                        <h3 class="header_title">About the <span class="header_title"> company</span></h3>
                        <p class="footer-company-about">
                            We provide a seamless platform for
                            suppliers to connect with government buyers, facilitating efficient procurement
                            processes.
                            Our
                            portal offers a wide range of services, including online bidding, order management, and
                            secure
                            payment options. Join us in supporting the digital transformation of government
                            procurement.
                        </p>

                        <div class="footer-icons">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-whatsapp"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4" style="margin: 10px 0px 10px 0px;">
                    <div class="footer-center">
                        <div>
                            <p>
                                <i class="fa fa-map-marker"></i>
                                <span> 20, 80-B, 80, EWS, B Block Rd, Sector 73,</span><br>&nbsp;
                                <span> Noida, Uttar Pradesh 201301</span>
                            </p>
                        </div>
                        <div>

                            <p><a href="tel:+917992344991"><i class="fa fa-phone"></i> +917992344991</a></p>
                        </div>
                        <div>
                            <p><a href="mailto:amitsinghnikkumbh@gmail.com"><i class="fa fa-envelope"></i>
                                    amitsinghnikkumbh@gmail.com</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
@endsection