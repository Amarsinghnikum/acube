@extends('layouts.admin')
@php $adminame = \App\Models\Admin::first(); @endphp
@section('content')
<div class="card">
    <div class="card-body">
        <h1>{{$adminame->name}}</h1>
    </div>
</div>
@endsection
