@extends('layouts.dashboard')
@section('dashboard-content')


<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Products</h1>
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
                    <th>Type</th>
                    <th>Stock</th>
                    <th>Image Url</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Category</th>
                    @can('isAdmin')
                    <th>Actions</th>
                    @endcan

                </tr>
                </thead>
                @foreach($products as $product)
                <tbody>
                <tr>
                  <td>{{$product->title}}</td>
                  <td>{{$product->stock}}</td>

                  <td>
                    <a href="{{$product->image_url}}" target="_blank">
                        <div style="height:100%;width:100%">
                            {{$product->title}} img
                        </div>
                      </a>
                    </td>
                  <td>{{$product->description}}</td>
                  <td>{{$product->price}}</td>
                  <td>{{$product->name}}</td>
                  @can('isAdmin')
                  <td class="center">
                    <a class="btn btn-info" href="{{URL::to('panel/edit/product/'.$product->id)}}" >
                      <i class="fas fa-edit fa-xs"></i>                    </a>
                    <a class="btn btn-danger" href="{{URL::to('panel/delete/product/'.$product->id)}}" >
                      <i class="fas fa-trash-alt fa-xs"></i>
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
