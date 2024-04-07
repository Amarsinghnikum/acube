@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header">
        <h4>Add Product</h4>
    </div>
    <div class="card-body">
        <form action="{{url('/update-product/'.$products->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-12">
                    <select name="cate_id" class="form-select" aria-label="Default select example">
                        @foreach($categories as $category)
                        <option value="{{ $category->id }}" @if($category->id == $products->category->id) selected
                            @endif>{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6">
                    <label class="categorylabel">Name</label>
                    <input type="text" name="name" value="{{ $products->name }}" class="form-control">
                </div>
                <div class="col-md-6">
                    <label class="categorylabel">Slug</label>
                    <input type="text" name="slug" value="{{ $products->slug }}" class="form-control">
                </div>

                <div class="col-md-12">
                    <label class="categorylabel">Description</label>
                    <textarea name="description" rows="3" class="form-control">{{ $products->description }}</textarea>
                </div>
                <div class="col-md-6">
                    <label class="categorylabel">Original Price</label>
                    <input type="number" name="original_price" value="{{ $products->original_price }}"
                        class="form-control">
                </div>

                <div class="col-md-6">
                    <label class="categorylabel">Selling Price</label>
                    <input type="number" name="selling_price" value="{{ $products->selling_price }}"
                        class="form-control">
                </div>
                <label class="categorylabel"></label>
                <div class="col-md-6">
                    <label class="categorylabel">Tax</label>
                    <input type="number" name="tax" value="{{ $products->tax }}" class="form-control">
                </div>

                <div class="col-md-6">
                    <label class="categorylabel">Quantity</label>
                    <input type="number" name="qty" value="{{ $products->qty }}" class="form-control">
                </div>

                <div class="col-md-6">
                    <label class="categorylabel">Status</label>
                    <input type="checkbox" name="status" {{ $products->status=="1"?"Checked":""}}>
                </div>

                <div class="col-md-6">
                    <label class="categorylabel">Trending</label>
                    <input type="checkbox" name="trending" {{ $products->trending=="1"?"Checked":""}}>
                </div>

                <div class="col-md-12">
                    <label class="categorylabel">Product Image</label>
                    <input type="file" name="image" class="form-control">
                    <img src="{{url('assets/uploads/products/'.$products->image)}}" class="cate-image" alt="">
                </div>

                <div class="categorylabel">
                    <button type="submit" class="btn btn-primary text-center">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection