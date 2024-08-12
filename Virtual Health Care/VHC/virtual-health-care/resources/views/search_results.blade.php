@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2>Search Results</h2>
    @if($services->isEmpty())
        <p>No services found.</p>
    @else
        <div class="row">
            @foreach($services as $service)
                <div class="col-lg-4">
                    <div class="card mb-4 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">{{ $service->name }}</h5>
                            <p class="card-text">{{ $service->description }}</p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection
