@extends('layouts.dashboard')
@section('dashboard-content')


<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Users</h1>
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
                  <th>Name</th>
                  <th>Email</th>
                  <th>Role</th>
                  @can('isAdmin')
                  <th>Actions</th>
                  @endcan
                </tr>
                </thead>
                @foreach ($users as $user)
                <tbody>



                <tr>
                  <td>{{$user->name}}</td>
                  <td>{{$user->email}}</td>
                  <td>{{$user->role}}</td>
                  @can('isAdmin')
                  <td class="center">
                    <a class="btn btn-info" href="{{URL::to('panel/edit/user/'.$user->id)}}" >
                      <i class="fas fa-edit"></i></a>
                    <a class="btn btn-danger" href="{{URL::to('panel/delete/user/'.$user->id)}}" >
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
