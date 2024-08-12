@extends('layouts.app')

@section('content')
<div id="home" class="jumbotron jumbotron-fluid" style="background-color: rgb(97, 205, 229); color: white;">
    <div class="container text-center">
        <h1 class="display-4">Virtual Health Care</h1>
        <p class="lead">Get quality medical consultations from the comfort of your home.</p>
        <a href="#services" class="btn btn-primary btn-lg">Get Started</a>
    </div>
</div>

<div id="services" class="container mt-5">
    <h2 class="mb-4 text-center">Our Services</h2>
    <div class="row">
        <div class="col-lg-6">
            <div class="card mb-4 shadow-sm">
                <img src="{{ asset('images/doctor.png') }}" class="card-img-top" alt="Doctor">
                <div class="card-body">
                    <h5 class="card-title">Online Consultations</h5>
                    <p class="card-text">Consult with doctors remotely for medical advice and prescriptions.</p>
                    <a href="#" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card mb-4 shadow-sm">
                <img src="{{ asset('images/medicen.png') }}" class="card-img-top" alt="Medicine">
                <div class="card-body">
                    <h5 class="card-title">Prescription Refills</h5>
                    <p class="card-text">Refill your prescriptions conveniently through our platform.</p>
                    <a href="#" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
