@extends('layouts.dashboard')
@section('dashboard-content')


<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Categories</h1>
        </div>
      </div>
    </div>
  </section>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">

            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover small">
                <thead>
                <tr>
                  <th>Category</th>
                  <th>Country</th>
                  <th>Total Products</th>
                  @can('isAdmin')
                  <th>Actions</th>
                  @endcan
                </tr>
                </thead>
                @foreach ($categories as $category)

                <tbody>



                <tr>
                  <td>{{$category->name}}</td>
                  <td>{{$category->country}}</td>
                  <td>{{$category->totalProducts}}</td>
                  @can('isAdmin')
                  <td class="center">
                    <a class="btn btn-info"   href="{{URL::to('panel/edit/category/'.$category->id)}}"  >
                      <i class="fas fa-edit"></i></a>
                    <a class="btn btn-danger" href="{{URL::to('panel/delete/category/'.$category->id)}}" >
                      <i class="fas fa-trash-alt"></i>
                    </a>
                </td>
                @endcan
                </tr>
                </tbody>
                @endforeach
              </table>
            </div>

          </div>
          @if (session('status'))
          <div class="alert alert-success">
          {{ session('status') }}
          </div>
          @endif

        </div>

      </div>

    </div>

  </section>








@endsection
