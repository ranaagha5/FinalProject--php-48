@extends('layouts.dashboard')
@section('dashboard-content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>New Category</h1>
        </div>
      </div>
    </div>
  </section>

<form method="POST" action="{{url('/add-category')}}">
    {{csrf_field()}}
    <div class="card-body">
      <div class="form-group">
        <label for="categoryName">Title</label>
        <input type="text" class="form-control w-75"  name="categoryName" id="categoryName"  required >
      </div>
      <div class="form-group">
        <label for="categoryCountry">Country</label>
        <input type="text" class="form-control w-75" name="categoryCountry" id="categoryCountry"  required>
      </div>
    </div>
    <div class="card-footer bg-transparent">
      <button type="submit" class="btn btn-primary">Add</button>
      {{-- <button type="reset" class="btn btn-danger">Reset</button> --}}
    </div>
  </form>
  @if (session('status'))
  <div class="alert alert-success">
  {{ session('status') }}
  </div>
  @endif


@endsection
