@extends('layouts.dashboard')
@section('dashboard-content')


<form method="POST" action="{{url('/add-product')}}">
    {{csrf_field()}}

    <div class="card-body">
      <div class="form-group">
        <label for="productTitle">Title</label>
        <input type="Text" class="form-control w-75"  name="productTitle" id="productTitle" required >
      </div>
      <div class="form-group">
        <label for="productStock">Stock</label>
        <input type="number" class="form-control w-75" name="productStock" id="productStock" required >
      </div>
      <div class="form-group">
        <label for="productPrice">Price</label>
        <input type="number" class="form-control w-75"  name="productPrice" id="productPrice" required >
      </div>
      <div class="form-group">
        <label for="productImg">Image url</label>
        <input type="text" class="form-control w-75" name="productImg" id="productImg" required>
      </div>
      <div class="form-group">
        <label for="productDescription">Description</label>
        <input type="text" class="form-control w-75" name="productDescription" id="productDescription"  required>
      </div>

        <div class="form-group">
          <label>Category</label>
          <select class="form-control w-25" name="productCategory" required>
              @foreach ($categories as $category)
              <option value="{{$category->id}}">{{$category->name}}</option>
              @endforeach
          </select>
        </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Add</button>
    </div>
  </form>
  @if (session('status'))
  <div class="alert alert-success">
  {{ session('status') }}
  </div>
  @endif

@endsection
