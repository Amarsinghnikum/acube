@extends('layouts.front')

@section('title', 'Contact Us')

@section('content')
<div class="container">
    <div class="message">
        @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>

    <div class="contact-section">
        <h1>Contact Us</h1>
        <p>If you have any questions or inquiries, please feel free to contact us using the information below:</p>

        <div class="contact-form">
            <h3>Send us a message</h3>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 mx-auto">
                        <form method="post" action="{{ route('contact-store') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Your Name</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Your Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone Number</label>
                                <input type="number" class="form-control" id="phone" name="phone" required>
                            </div>
                            <div class="mb-3">
                                <label for="query" class="form-label">Query</label>
                                <textarea class="form-control" id="query" name="query" rows="3" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="contact-info mt-5">
            <p><strong>Address:</strong> 20, 80-B, 80, EWS, B Block Rd, Sector 73, Noida, Uttar Pradesh 201301</p>
            <p><strong>Phone:</strong> +917992344991</p>
            <p><strong>Email:</strong> amitsinghnikkumbh@gmail.com</p>
        </div>
    </div>
</div>

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
@endsection