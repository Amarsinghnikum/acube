@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header">
    <h4>Add Product</h4>
    </div>
    <div class="card-body">
        <form action="{{url('/insert-product')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-12 mb-3">
                    <select class="form-select" name="cate_id" aria-label="Default select example">
                        <option value="">Select a Category</option>
                        @foreach($category as $item)
                        <option value="{{ $item->id }}">{{$item->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6">
                    <label class="categorylabel">Name</label>
                    <input type="text" name="name" class="form-control">
                </div>
                
                <div class="col-md-6">
                    <label class="categorylabel">
                        Slug</label>
                    <input type="text" name="slug" class="form-control">
                </div>

                <div class="col-md-12">
                    <label class="categorylabel">Description</label>
                    <textarea name="description" rows="3" class="form-control"></textarea>
                </div>

                <div class="col-md-6">
                    <label class="categorylabel">Original Price</label>
                        <input type="number" name="original_price" class="form-control">
                </div>
                
                <div class="col-md-6">
                    <label class="categorylabel">Selling Price</label>
                        <input type="number" name="selling_price" class="form-control">
                </div>

                <div class="col-md-6">
                    <label class="categorylabel">
                        Tax</label>
                    <input type="number" name="tax" class="form-control">
                </div>
                
                <div class="col-md-6">
                    <label class="categorylabel">Quantity</label>
                        <input type="number" name="qty" class="form-control">
                </div>
                
                <div class="col-md-6">
                    <label class="categorylabel">Status</label>
                    <input type="checkbox" name="status">
                </div>

                <div class="col-md-6">
                    <label class="categorylabel">Trending</label>
                    <input type="checkbox" name="trending">
                </div>

                <div class="col-md-6">
                    <label class="categorylabel">Product Image</label>
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
