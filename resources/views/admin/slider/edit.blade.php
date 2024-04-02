@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header">
        <h1>Edit Category</h1>
    </div>
    <div class="card-body">
        <form action="{{url('/update-slider/'.$slider->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-6">
                    <label class="categorylabel">
                    </label>
                    <input type="file" name="image" class="form-control">
                    <img src="{{ asset('assets/uploads/slider/'.$slider->image )}}" class="categorylabel"
                        width="100px" alt="{{$slider->alt}}">
                </div>

                <div class="col-md-6">
                    <label>Alt</label>
                    <input type="text" name="alt" value="{{$slider->alt}}" class="form-control">
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mt-2">
                    <label class="categorylabel">Status</label>
                    <input type="checkbox" name="status" value="status" {{$slider->status=="1"?"Checked":""}}>
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection