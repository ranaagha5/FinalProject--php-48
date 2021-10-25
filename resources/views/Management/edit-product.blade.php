@extends('layouts.dashboard')
@section('dashboard-content')


<form method="POST" action="{{url('/update-product/'.$product->id)}}">
    {{csrf_field()}}

    <div class="card-body">
      <div class="form-group">
        <label for="productTitle">Title</label>
        <input type="Text" value="{{$product->title}}" class="form-control w-75"  name="productTitle" id="productTitle" required >
      </div>
      <div class="form-group">
        <label for="productStock">Stock</label>
        <input type="number" value="{{$product->stock}}" class="form-control w-75" name="productStock" id="productStock" required >
      </div>
      <div class="form-group">
        <label for="productPrice">Price</label>
        <input type="number" value="{{$product->price}}" class="form-control w-75"  name="productPrice" id="productPrice" required >
      </div>
      <div class="form-group">
        <label for="productImg">Image url</label>
        <input type="text" value="{{$product->image_url}}" class="form-control w-75" name="productImg" id="productImg" required>
      </div>
      <div class="form-group">
        <label for="productDescription">Description</label>
        <input type="text" value="{{$product->description}}" class="form-control w-75" name="productDescription" id="productDescription"  required>
      </div>

        <div class="form-group">
          <label>Category</label>
          <select class="form-control w-25" name="productCategory" required>

            <option value=" {{$product->category->id}}"> {{$product->category->name}}</option>
            @foreach ($categories as $category)
              <option value="{{$category->id}}">{{$category->name}}</option>
              @endforeach


          </select>
        </div>
    </div>

    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Edit</button>
    </div>
  </form>
@endsection
