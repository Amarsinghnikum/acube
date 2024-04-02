@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header">
    <h1>Add Category</h1>
    </div>
    <div class="card-body">
        <form action="{{url('/insert-category')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
            
                <div class="col-md-6">
                <label>Name</label>
                    <input type="text" name="name" class="form-control">
                </div>
                
                <div class="col-md-6">
                <label>Slug</label>
                    <input type="text" name="slug" class="form-control">
                </div>
            </div>  

            <div class="row">
                <div class="col-md-6">
                <label class="categorylabel">Small Description</label>
                    <textarea name="description" rows="3" class="form-control"></textarea>
                </div>

                <div class="col-md-6">
                <label class="categorylabel">Description</label>
                    <textarea name="description" rows="3" class="form-control"></textarea>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mt-2">
                <label class="categorylabel">Status</label>
                    <input type="checkbox" name="status">
                </div>

                <div class="col-md-6 mt-2">
                <label class="categorylabel">Popular</label>
                    <input type="checkbox" name="popular">
                </div>

                <div class="col-md-6">
                <label class="categorylabel">Category Image</label>
                    <input type="file" name="image" class="form-control">
                </div>

                <div class="col-md-6 mt-5">
                   <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
