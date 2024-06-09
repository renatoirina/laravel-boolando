@extends('layouts.app')

@section('content')
    <div class="home-cont d-flex justify-content-center flex-wrap">
        @foreach ($products as $product)
            @include('partials.product-card')
        @endforeach
        
    </div>
@endsection