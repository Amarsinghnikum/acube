@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header">
    <h1>Edit Category</h1>
    </div>
    <div class="card-body">
        <form action="{{url('/update-category/'.$category->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-6">
                    <label class="categorylabel">Name</label>
                    <input type="text" name="name" value="{{$category->name}}" class="form-control">
                </div>
                
                <div class="col-md-6">
                    <label class="categorylabel">
                        Slug</label>
                    <input type="text" name="slug" value="{{$category->slug}}" class="form-control">
                </div>

                <div class="col-md-12">
                    <label class="categorylabel">Description</label>
                    <textarea name="description" rows="3" class="form-control">{{$category->description}}</textarea>
                </div>

                <div class="col-md-6 mt-2">
                    <label class="categorylabel">Status</label>
                    <input type="checkbox" name="status" value="status" {{$category->status=="1"?"Checked":""}}>
                </div>

                <div class="col-md-6 mt-2">
                    <label class="categorylabel">Popular</label>
                    <input type="checkbox" name="popular" value="popular" {{$category->popular=="1"?"Checked":""}}>
                </div>

                <div class="col-md-6">
                    <label class="categorylabel">
                    </label>
                    <input type="file" name="image" class="form-control">
                    <img src="{{ asset('assets/uploads/category/'.$category->image )}}" class="categorylabel" width="100px" alt="Category Image">
                </div>

                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
