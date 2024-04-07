@extends('layouts.front')

@section('title')
  {{ implode(', ', $categoryNames) }}
@endsection

@section('content')

<div class="py-3 mb-4 shadow-sm bg-warning border-top">
    <div class="container">
        <h6 class="mb-0">Collections / {{ implode(', ', $categoryNames) }}</h6>
    </div>
</div>

<div class="py-5">
    <div class="container">
        <div class="row">
            <h2>{{ implode(', ', $categoryNames) }}</h2>
            @foreach($products as $prod)
            <div class="col-md-3 mb-3">
                <div class="card">
                    <a href="{{url('category/'.request()->slug.'/'.$prod->id)}}">
                        <img src="{{ url('/assets/uploads/products/'.$prod->image)}}" alt="Product Image" width="150px"
                            height="150px">
                        <div class="card-body">
                            <h5>{{ $prod->name }}</h5>
                            <span class="float-start">{{ $prod->selling_price }}</span>
                            <span class="float-end"><s>{{ $prod->original_price }}</s></span>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection