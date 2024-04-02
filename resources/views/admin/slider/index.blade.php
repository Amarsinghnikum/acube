@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header">
        <h4>Slider Page</h4>
        <hr>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Image</th>
                    <th>Alt</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            @php $i=1; @endphp
                @foreach($slider as $item)
                    <tr>
                        <td>{{$i}}</td>
                        <td>
                            <img src="{{ asset('assets/uploads/slider/'.$item->image)}}" class="cate-image" alt="{{$item->alt}}">
                        </td>
                        <td>{{$item->alt}}</td>
                        <td>
                            <a href="{{ url('edit-slider/'.$item->id) }}" class="btn btn-success">Edit</a>
                            <a href="{{ url('/delete-slider/'.$item->id) }}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @php $i=$i+1; @endphp
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
