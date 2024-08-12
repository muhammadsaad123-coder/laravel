@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1>{{ $service->name }}</h1>
    <p>{{ $service->description }}</p>
    <a href="{{ route('services.index') }}" class="btn btn-primary">Back to Services</a>
</div>
@endsection
