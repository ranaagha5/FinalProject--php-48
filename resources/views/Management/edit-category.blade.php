@extends('layouts.dashboard')
@section('dashboard-content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Edit Category</h1>
        </div>
      </div>
    </div>
  </section>
<form method="POST" action="{{url('/update-category/'.$category->id)}}">
    {{csrf_field()}}
    <div class="card-body">
      <div class="form-group">
        <label for="categoryName">Title</label>
        <input type="text" value="{{$category->name}}" class="form-control w-75"  name="categoryName" id="categoryName"  required >
      </div>
      <div class="form-group">
        <label for="categoryCountry">Country</label>
        <input type="text" value="{{$category->country}}" class="form-control w-75" name="categoryCountry" id="categoryCountry"  required>
      </div>
    </div>
    <div class="card-footer bg-transparent">
      <button type="submit" class="btn btn-primary">Save Change</button>
    </div>
  </form>
@endsection
