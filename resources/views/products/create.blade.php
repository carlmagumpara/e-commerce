@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Product</div>
                <div class="card-body">
                <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                  {{ csrf_field() }}
                  <div class="form-group">
                    <label for="image">Photo</label>
                    <input type="file" class="form-control-file" name="image">
                  </div>
                  <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" class="form-control" name="price" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" name="description" rows="3"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="brand">Brand</label>
                    <select class="form-control" name="brand">
                      <option>Apple</option>
                      <option>Huawei</option>
                      <option>Meizu</option>
                      <option>Samsung</option>
                      <option>Xiomi</option>
                      <option>Asus</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="size">Size</label>
                    <input type="text" class="form-control" name="size" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="camera">Camera</label>
                    <input type="text" class="form-control" name="camera" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="cpu">CPU</label>
                    <input type="text" class="form-control" name="cpu" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="memory">Memory</label>
                    <input type="text" class="form-control" name="memory" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="display">Display</label>
                    <input type="text" class="form-control" name="display" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="battery">Battery</label>
                    <input type="text" class="form-control" name="battery" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="network">Network</label>
                    <input type="text" class="form-control" name="network" placeholder="">
                  </div>
                  <button class="btn btn-danger" type="submit">Add Product</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection